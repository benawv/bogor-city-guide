<?php
/**
 * Pimcore
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @copyright  Copyright (c) 2009-2013 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Admin_UserController extends Pimcore_Controller_Action_Admin {

    public function init() {
        parent::init();

        // check permissions
        $notRestrictedActions = array("get-current-user", "update-current-user", "get-available-permissions", "get-minimal", "get-image", "upload-current-user-image");
        if (!in_array($this->getParam("action"), $notRestrictedActions)) {
            $this->checkPermission("users");
        }
    }

    public function treeGetChildsByIdAction() {

        $list = new User_List();
        $list->setCondition("parentId = ?", intval($this->getParam("node")));
        $list->setOrder("ASC");
        $list->setOrderKey("name");
        $list->load();

        $users = array();
        if(is_array($list->getUsers())){
            foreach ($list->getUsers() as $user) {
                if($user->getId() && $user->getName() != "system") {
                    $users[] = $this->getTreeNodeConfig($user);
                }
            }
        }
        $this->_helper->json($users);
    }

    protected function getTreeNodeConfig($user) {
        $tmpUser = array(
            "id" => $user->getId(),
            "text" => $user->getName(),
            "elementType" => "user",
            "qtipCfg" => array(
                "title" => "ID: " . $user->getId()
            )
        );

        // set type specific settings
        if ($user instanceof User_Folder) {
            $tmpUser["leaf"] = false;
            $tmpUser["iconCls"] = "pimcore_icon_folder";
            $tmpUser["expanded"] = true;
            $tmpUser["allowChildren"] = true;

            if($user->hasChilds()) {
                $tmpUser["expanded"] = false;
            }
        }
        else {
            $tmpUser["leaf"] = true;
            $tmpUser["iconCls"] = "pimcore_icon_user";
            $tmpUser["allowChildren"] = false;

        }

        return $tmpUser;
    }

    public function addAction() {

        try {
            $type = $this->getParam("type");;
            $className = User_Service::getClassNameForType($type);
            $user = $className::create(array(
                "parentId" => intval($this->getParam("parentId")),
                "name" => trim($this->getParam("name")),
                "password" => "",
                "active" => $this->getParam("active")
            ));

            if ($this->getParam("rid")) {

                $rid = $this->getParam("rid");
                $rObject = $className::getById($rid);
                if ($rObject) {
                    if ($type == "user" || $type == "role") {
                        $user->setParentId($rObject->getParentId());
                        if ($rObject->getClasses()) {
                            $user->setClasses(implode(',', $rObject->getClasses()));
                        }
                        if ($rObject->getDocTypes()) {
                            $user->setDocTypes(implode(',', $rObject->getDocTypes()));
                        }

                        $keys = array("asset", "document", "object");
                        foreach ($keys as $key) {
                            $getter = "getWorkspaces" . ucfirst($key);
                            $setter = "setWorkspaces" . ucfirst($key);
                            $workspaces = $rObject->$getter();
                            $clonedWorkspaces = array();
                            if (is_array($workspaces)) {
                                foreach($workspaces as $workspace) {
                                    $vars = get_object_vars($workspace);
                                    $workspaceClass = "User_Workspace_" . ucfirst($key);
                                    $newWorkspace = new $workspaceClass();
                                    foreach ($vars as $varKey => $varValue) {
                                        $newWorkspace->$varKey = $varValue;
                                    }
                                    $newWorkspace->setUserId($user->getId());
                                    $clonedWorkspaces[] = $newWorkspace;
                                }
                            }

                            $user->$setter($clonedWorkspaces);
                        }

                        $user->setPermissions($rObject->getPermissions());

                        if ($type == "user") {
                            $user->setAdmin($rObject->getAdmin());
                            $user->setActive($rObject->getActive());
                            $user->setRoles($rObject->getRoles());
                            $user->setWelcomeScreen($rObject->getWelcomescreen());
                            $user->setMemorizeTabs($rObject->getMemorizeTabs());
                            $user->setCloseWarning($rObject->getCloseWarning());
                        }

                        $user->save();
                    }
                }
            }
            $this->_helper->json(array(
                "success" => true,
                "id" => $user->getId()
            ));
        } catch (Exception $e) {
            $this->_helper->json(array("success" => false, "message" => $e->getMessage()));
        }

        $this->_helper->json(false);
    }

    public function deleteAction() {
        $user = User_Abstract::getById(intval($this->getParam("id")));
        $user->delete();

        $this->_helper->json(array("success" => true));
    }

    public function updateAction() {

        $user = User_Abstract::getById(intval($this->getParam("id")));

        if($this->getParam("data")) {
            $values = Zend_Json::decode($this->getParam("data"));

            if (!empty($values["password"])) {
                $values["password"] = Pimcore_Tool_Authentication::getPasswordHash($user->getName(),$values["password"]);
            }

            if(method_exists($user, "setAllAclToFalse")) {
                $user->setAllAclToFalse();
            }
            $user->setValues($values);

            // check for permissions
            $availableUserPermissionsList = new User_Permission_Definition_List();
            $availableUserPermissions = $availableUserPermissionsList->load();

            foreach($availableUserPermissions as $permission) {
                if($values["permission_" . $permission->getKey()]) {
                    $user->setPermission($permission->getKey(), (bool) $values["permission_" . $permission->getKey()]);
                }
            }

            // check for workspaces
            if($this->getParam("workspaces")) {
                $workspaces = Zend_Json::decode($this->getParam("workspaces"));
                foreach ($workspaces as $type => $spaces) {

                    $newWorkspaces = array();
                    foreach ($spaces as $space) {

                        $element = Element_Service::getElementByPath($type, $space["path"]);
                        if($element) {
                            $className = "User_Workspace_" . ucfirst($type);
                            $workspace = new $className();
                            $workspace->setValues($space);

                            $workspace->setCid($element->getId());
                            $workspace->setCpath($element->getFullPath());
                            $workspace->setUserId($user->getId());

                            $newWorkspaces[] = $workspace;
                        }
                    }
                    $user->{"setWorkspaces" . ucfirst($type)}($newWorkspaces);
                }
            }
        }

        $user->save();

        $this->_helper->json(array("success" => true));
    }

    public function getAction() {

        if(intval($this->getParam("id")) < 1) {
            $this->_helper->json(array("success" => false));
        }

        $user = User::getById(intval($this->getParam("id")));

        // workspaces
        $types = array("asset","document","object");
        foreach ($types as $type) {
            $workspaces = $user->{"getWorkspaces" . ucfirst($type)}();
            foreach ($workspaces as $workspace) {
                $el = Element_Service::getElementById($type, $workspace->getCid());
                if($el) {
                    // direct injection => not nice but in this case ok ;-)
                    $workspace->path = $el->getFullPath();
                }
            }
        }

        // object <=> user dependencies
        $userObjects = Object_Service::getObjectsReferencingUser($user->getId());
        $userObjectData = array();

        foreach ($userObjects as $o) {
            $hasHidden = false;
            if ($o->isAllowed("list")) {
                $userObjectData[] = array(
                    "path" => $o->getFullPath(),
                    "id" => $o->getId(),
                    "subtype" => $o->getClass()->getName()
                );
            } else {
                $hasHidden = true;
            }
        }

        // get available permissions
        $availableUserPermissionsList = new User_Permission_Definition_List();
        $availableUserPermissions = $availableUserPermissionsList->load();

        // get available roles
        $roles = array();
        $list = new User_Role_List();
        $list->setCondition("`type` = ?", array("role"));
        $list->load();

        $roles = array();
        if(is_array($list->getItems())){
            foreach ($list->getItems() as $role) {
                $roles[] = array($role->getId(), $role->getName());
            }
        }

        $user->setPassword(null);
        $conf = Pimcore_Config::getSystemConfig();
        $this->_helper->json(array(
            "success" => true,
            "wsenabled" => $conf->webservice->enabled,
            "user" => $user,
            "roles" => $roles,
            "permissions" => $user->generatePermissionList(),
            "availablePermissions" => $availableUserPermissions,
            "objectDependencies" => array(
                "hasHidden" => $hasHidden,
                "dependencies" => $userObjectData
            )
        ));
    }

    public function getMinimalAction() {
        $user = User::getById(intval($this->getParam("id")));
        $user->setPassword(null);

        $minimalUserData['id'] = $user->getId();
        $minimalUserData['admin'] = $user->isAdmin();
        $minimalUserData['active'] = $user->isActive();
        $minimalUserData['permissionInfo']['assets'] = $user->isAllowed("assets");
        $minimalUserData['permissionInfo']['documents'] = $user->isAllowed("documents");
        $minimalUserData['permissionInfo']['objects'] = $user->isAllowed("objects");

        $this->_helper->json($minimalUserData);
    }

    public function uploadCurrentUserImageAction() {

        $user = $this->getUser();
        if ($user != null) {
            if ($user->getId() == $this->getParam("id")) {
                $this->uploadImageAction();
            } else {
                Logger::warn("prevented save current user, because ids do not match. ");
                $this->_helper->json(false);
            }
        } else {
            $this->_helper->json(false);
        }
    }


    public function updateCurrentUserAction() {

        $user = $this->getUser();
        if ($user != null) {
            if ($user->getId() == $this->getParam("id")) {
                $values = Zend_Json::decode($this->getParam("data"));

                unset($values["name"]);
                unset($values["id"]);
                unset($values["admin"]);
                unset($values["permissions"]);
                unset($values["roles"]);
                unset($values["active"]);

                if (!empty($values["new_password"])) {
                    $oldPasswordCheck = false;


                    if(empty($values["old_password"])) {
                        // if the user want to reset the password, the old password isn't required
                        $oldPasswordCheck = Pimcore_Tool_Session::useSession(function($adminSession) use ($oldPasswordCheck) {
                            if($adminSession->password_reset) {
                                return true;
                            }
                            return false;
                        });

                    } else {
                        // the password has to match
                        $checkUser = Pimcore_Tool_Authentication::authenticatePlaintext($user->getName(), $values["old_password"]);
                        if($checkUser) {
                            $oldPasswordCheck = true;
                        }
                    }

                    if($oldPasswordCheck && $values["new_password"] == $values["retype_password"]) {
                        $values["password"] = Pimcore_Tool_Authentication::getPasswordHash($user->getName(),$values["new_password"]);
                    } else {
                        $this->_helper->json(array("success" => false, "message" => "password_cannot_be_changed"));
                    }
                }

                $user->setValues($values);
                $user->save();
                $this->_helper->json(array("success" => true));
            } else {
                Logger::warn("prevented save current user, because ids do not match. ");
                $this->_helper->json(false);
            }
        } else {
            $this->_helper->json(false);
        }
    }

    public function getCurrentUserAction() {

        header("Content-Type: text/javascript");

        $user = $this->getUser();

        $list = new User_Permission_Definition_List();
        $definitions = $list->load();

        foreach ($definitions as $definition) {
            $user->setPermission($definition->getKey(), $user->isAllowed($definition->getKey()));
        }

        echo "pimcore.currentuser = " . Zend_Json::encode($user);
        exit;
    }


    /* ROLES */

    public function roleTreeGetChildsByIdAction() {

        $list = new User_Role_List();
        $list->setCondition("parentId = ?", intval($this->getParam("node")));
        $list->load();

        $roles = array();
        if(is_array($list->getItems())){
            foreach ($list->getItems() as $role) {
                $roles[] = $this->getRoleTreeNodeConfig($role);
            }
        }
        $this->_helper->json($roles);
    }

    protected function getRoleTreeNodeConfig($role) {
        $tmpUser = array(
            "id" => $role->getId(),
            "text" => $role->getName(),
            "elementType" => "role",
            "qtipCfg" => array(
                "title" => "ID: " . $role->getId()
            )
        );

        // set type specific settings
        if ($role instanceof User_Role_Folder) {
            $tmpUser["leaf"] = false;
            $tmpUser["iconCls"] = "pimcore_icon_folder";
            $tmpUser["expanded"] = true;
            $tmpUser["allowChildren"] = true;

            if($role->hasChilds()) {
                $tmpUser["expanded"] = false;
            }
        }
        else {
            $tmpUser["leaf"] = true;
            $tmpUser["iconCls"] = "pimcore_icon_roles";
            $tmpUser["allowChildren"] = false;

        }

        return $tmpUser;
    }

    public function roleGetAction() {
        $role = User_Role::getById(intval($this->getParam("id")));

        // workspaces
        $types = array("asset","document","object");
        foreach ($types as $type) {
            $workspaces = $role->{"getWorkspaces" . ucfirst($type)}();
            foreach ($workspaces as $workspace) {
                $el = Element_Service::getElementById($type, $workspace->getCid());
                if($el) {
                    // direct injection => not nice but in this case ok ;-)
                    $workspace->path = $el->getFullPath();
                }
            }
        }

        // get available permissions
        $availableUserPermissionsList = new User_Permission_Definition_List();
        $availableUserPermissions = $availableUserPermissionsList->load();

        $this->_helper->json(array(
            "success" => true,
            "role" => $role,
            "permissions" => $role->generatePermissionList(),
            "classes" => $role->getClasses(),
            "docTypes" => $role->getDocTypes(),
            "availablePermissions" => $availableUserPermissions
        ));
    }

    public function uploadImageAction() {
        $userImageDir = PIMCORE_WEBSITE_VAR . "/user-image";
        if(!is_dir($userImageDir)) {
            Pimcore_File::mkdir($userImageDir);
        }

        $destFile = $userImageDir . "/user-" . $this->getParam("id") . ".png";
        $thumb = PIMCORE_SYSTEM_TEMP_DIRECTORY . "/user-thumbnail-" . $this->getParam("id") . ".png";
        @unlink($destFile);
        @unlink($thumb);
        copy($_FILES["Filedata"]["tmp_name"], $destFile);
        chmod($destFile, Pimcore_File::getDefaultMode());

        $this->_helper->json(array(
            "success" => true
        ), false);

        // set content-type to text/html, otherwise (when application/json is sent) chrome will complain in
        // Ext.form.Action.Submit and mark the submission as failed
        $this->getResponse()->setHeader("Content-Type", "text/html");
    }

    public function getImageAction() {

        if($this->getParam("id")) {
            if($this->getUser()->getId() != $this->getParam("id")) {
                $this->checkPermission("users");
            }
            $id = $this->getParam("id");
        } else {
            $id = $this->getUser()->getId();
        }

        $userObj = User::getById($id);

        $user = PIMCORE_WEBSITE_VAR . "/user-image/user-" . $id . ".png";
        if(file_exists($user)) {
            $thumb = PIMCORE_SYSTEM_TEMP_DIRECTORY . "/user-thumbnail-" . $id . ".png";
            if(!file_exists($thumb)) {
                $image = Pimcore_Image::getInstance();
                $image->load($user);
                $image->cover(46,46);
                $image->save($thumb, "png");
            }

            header("Content-type: image/png", true);

            while(@ob_end_flush());
            flush();

            readfile($thumb);

        } else {
            header("Location: /admin/misc/robohash/?width=46&height=46&seed=" . $userObj->getName() . "-" . $this->getRequest()->getHttpHost());
        }

        exit;
    }

    public function getTokenLoginLinkAction() {
        if($this->getUser()->isAdmin()) {

            $user = User::getById($this->getParam("id"));
            if($user) {
                $token = Pimcore_Tool_Authentication::generateToken($user->getName(), $user->getPassword());
                $r = $this->getRequest();
                $link = $r->getScheme() . "://" . $r->getHttpHost() . "/admin/login/login/?username=" . $user->getName() . "&token=" . $token;

                $this->_helper->json(array(
                    "link" => $link
                ));
            }
        }
    }

    public function searchAction() {

        $q = "%" . $this->getParam("query") . "%";

        $list = new User_List();
        $list->setCondition("name LIKE ? OR firstname LIKE ? OR lastname LIKE ? OR email LIKE ? OR id = ?", [$q, $q, $q, $q, intval($this->getParam("query"))]);
        $list->setOrder("ASC");
        $list->setOrderKey("name");
        $list->load();

        $users = array();
        if(is_array($list->getUsers())){
            foreach ($list->getUsers() as $user) {
                if($user->getId() && $user->getName() != "system") {
                    $users[] = [
                        "id" => $user->getId(),
                        "name" => $user->getName(),
                        "email" => $user->getEmail(),
                        "firstname" => $user->getFirstname(),
                        "lastname" => $user->getLastname(),
                    ];
                }
            }
        }
        $this->_helper->json([
            "success" => true,
            "users" => $users
        ]);
    }
}
