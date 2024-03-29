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

class Admin_EmailController extends Pimcore_Controller_Action_Admin_Document
{

    public function getDataByIdAction()
    {

        // check for lock
        if (Element_Editlock::isLocked($this->getParam("id"), "document")) {
            $this->_helper->json(array(
                "editlock" => Element_Editlock::getByElement($this->getParam("id"), "document")
            ));
        }
        Element_Editlock::lock($this->getParam("id"), "document");

        $email = Document_Email::getById($this->getParam("id"));
        $email = $this->getLatestVersion($email);
        $email->setVersions(array_splice($email->getVersions(), 0, 1));
        $email->idPath = Element_Service::getIdPath($email);
        $email->userPermissions = $email->getUserPermissions();
        $email->setLocked($email->isLocked());
        $email->setParent(null);

        // unset useless data
        $email->setElements(null);
        $email->childs = null;

        // cleanup properties
        $this->minimizeProperties($email);

        if ($email->isAllowed("view")) {
            $this->_helper->json($email);
        }

        $this->_helper->json(false);
    }

    public function saveAction()
    {

        if ($this->getParam("id")) {
            $page = Document_Email::getById($this->getParam("id"));

            $page = $this->getLatestVersion($page);
            $page->setUserModification($this->getUser()->getId());

            if ($this->getParam("task") == "unpublish") {
                $page->setPublished(false);
            }
            if ($this->getParam("task") == "publish") {
                $page->setPublished(true);
            }
            // only save when publish or unpublish
            if (($this->getParam("task") == "publish" && $page->isAllowed("publish")) or ($this->getParam("task") == "unpublish" && $page->isAllowed("unpublish"))) {
                $this->setValuesToDocument($page);


                try {
                    $page->save();
                    $this->saveToSession($page);
                    $this->_helper->json(array("success" => true));
                } catch (Exception $e) {
                    Logger::err($e);
                    $this->_helper->json(array("success" => false, "message" => $e->getMessage()));
                }

            }
            else {
                if ($page->isAllowed("save")) {
                    $this->setValuesToDocument($page);


                    try {
                        $page->saveVersion();
                        $this->saveToSession($page);
                        $this->_helper->json(array("success" => true));
                    } catch (Exception $e) {
                        Logger::err($e);
                        $this->_helper->json(array("success" => false, "message" => $e->getMessage()));
                    }

                }
            }
        }
        $this->_helper->json(false);
    }

    protected function setValuesToDocument(Document $page)
    {

        $this->addSettingsToDocument($page);
        $this->addDataToDocument($page);
        $this->addPropertiesToDocument($page);
        $this->addSchedulerToDocument($page);
    }

    /**
     * returns the a list of log files for the data grid
     */
    public function emailLogsAction()
    {
        $list = new Tool_Email_Log_List();
        if ($this->getParam('documentId')) {
            $list->setCondition('documentId = ' . (int)$this->getParam('documentId'));
        }
        $list->setLimit($this->getParam("limit"));
        $list->setOffset($this->getParam("start"));
        $list->setOrderKey("sentDate");

        if($this->getParam('filter')){
            if ($this->getParam("filter")) {
                $filterTerm = $list->quote("%".mb_strtolower($this->getParam("filter"))."%");

                $condition = "(`from` LIKE " . $filterTerm . " OR
                                        `to` LIKE " . $filterTerm . " OR
                                        `cc` LIKE " . $filterTerm . " OR
                                        `bcc` LIKE " . $filterTerm . " OR
                                        `subject` LIKE " . $filterTerm . " OR
                                        `params` LIKE " . $filterTerm . ")";

                if ($this->getParam('documentId')) {
                    $condition .= "AND documentId = " . (int)$this->getParam('documentId');
                }

                $list->setCondition($condition);
            }
        }

        $list->setOrder("DESC");

        $data = $list->load();
        $jsonData = array();

        if (is_array($data)) {
            foreach ($data as $entry) {
                $tmp = (array)get_object_vars($entry);
                unset($tmp['bodyHtml']);
                unset($tmp['bodyText']);
                $jsonData[] = $tmp;
            }
        }

        $this->_helper->json(array(
            "data" => $jsonData,
            "success" => true,
            "total" => $list->getTotalCount()
        ));
    }

    /**
     * Shows the email logs and returns the Json object for the dynamic params
     */
    public function showEmailLogAction()
    {
        $type = $this->getParam('type');
        $emailLog = Tool_Email_Log::getById($this->getParam('id'));

        if ($this->getParam('type') == 'text') {
            $this->disableViewAutoRender();
            echo '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style>body{background-color:#fff;}</style></head><body><pre>' . $emailLog->getTextLog() . '</pre></body></html>';
        } elseif ($this->getParam('type') == 'html') {
            $this->disableViewAutoRender();
            echo $emailLog->getHtmlLog();
        } elseif ($this->getParam('type') == 'params') {
            $this->disableViewAutoRender();
            try {
                $params = Zend_Json::decode($emailLog->getParams());
            } catch (Exception $e) {
                Logger::warning("Could not decode JSON param string");
                $params = array();
            }
            foreach ($params as &$entry) {
                $this->enhanceLoggingData($entry);
            }
            $this->_helper->json($params);
        }
        else {
            die('No Type specified');
        }
    }

    public function blacklistAction() {

        if ($this->getParam("data")) {

            $data = Zend_Json::decode($this->getParam("data"));

            if(is_array($data)) {
                foreach ($data as &$value) {
                    $value = trim($value);
                }
            }

            if ($this->getParam("xaction") == "destroy") {
                $address = Tool_Email_Blacklist::getByAddress($data);
                $address->delete();

                $this->_helper->json(array("success" => true, "data" => array()));
            }
            else if ($this->getParam("xaction") == "update") {
                $address = Tool_Email_Blacklist::getByAddress($data["address"]);
                $address->setValues($data);
                $address->save();

                $this->_helper->json(array("data" => $address, "success" => true));
            }
            else if ($this->getParam("xaction") == "create") {

                unset($data["id"]);

                $address = new Tool_Email_Blacklist();
                $address->setValues($data);
                $address->save();

                $this->_helper->json(array("data" => $address, "success" => true));
            }
        }
        else {
            // get list of routes

            $list = new Tool_Email_Blacklist_List();

            $list->setLimit($this->getParam("limit"));
            $list->setOffset($this->getParam("start"));

            if($this->getParam("sort")) {
                $list->setOrderKey($this->getParam("sort"));
                $list->setOrder($this->getParam("dir"));
            }

            if($this->getParam("filter")) {
                $list->setCondition("`address` LIKE " . $list->quote("%".$this->getParam("filter")."%"));
            }

            $data = $list->load();

            $this->_helper->json(array(
                "success" => true,
                "data" => $data,
                "total" => $list->getTotalCount()
            ));
        }

        $this->_helper->json(false);
    }

    /**
     * Helper to build the correct Json array for the treeGrid
     *
     * @param array $data
     * @param null|$data $fullEntry
     */
    protected function enhanceLoggingData(&$data, &$fullEntry = null)
    {

        if ($data['objectId']) {
            $class = $data['objectClass'];
            $obj = $class::getById($data['objectId']);
            if (is_null($obj)) {
                $data['objectPath'] = '';
            } else {
                $data['objectPath'] = $obj->getFullPath();
            }
            $tmp = explode('_', $data['objectClass']);
            if (in_array($tmp[0], array('Object', 'Document', 'Asset'))) {
                $data['objectClassBase'] = $tmp[0];
                $data['objectClassSubType'] = $tmp[1];
            }
        }

        foreach ($data as &$value) {
            if (is_array($value)) {
                $this->enhanceLoggingData($value, $data);
            }
        }
        if ($data['children']) {
            foreach ($data['children'] as $key => $entry) {
                if (is_string($key)) { //key must be integers
                    unset($data['children'][$key]);
                }
            }
            $data['iconCls'] = 'task-folder';
            $data['data'] = array('type' => 'simple', 'value' => 'Children (' . count($data['children']) . ')');
        } else {
            //setting the icon class
            if (!$data['iconCls']) {
                if ($data['objectClassBase'] == 'Object') {
                    $fullEntry['iconCls'] = 'pimcore_icon_object';
                } elseif ($data['objectClassBase'] == 'Asset') {
                    switch ($data['objectClass']) {
                        case 'Asset_Image':
                            $fullEntry['iconCls'] = 'pimcore_icon_image';
                            break;
                        case 'Asset_Video':
                            $fullEntry['iconCls'] = 'pimcore_icon_wmv';
                            break;
                        case 'Asset_Text':
                            $fullEntry['iconCls'] = 'pimcore_icon_txt';
                            break;
                        case 'Asset_Document':
                            $fullEntry['iconCls'] = 'pimcore_icon_pdf';
                            break;
                        default :
                            $fullEntry['iconCls'] = 'pimcore_icon_asset';
                    }
                } elseif (strpos($data['objectClass'], 'Document') === 0) {
                    $fullEntry['iconCls'] = 'pimcore_icon_' . strtolower($data['objectClassSubType']);
                } else {
                    $data['iconCls'] = 'task';
                }
            }

            $data['leaf'] = true;
        }
    }


    /**
     * Deletes a single log entry
     */
    public function deleteEmailLogAction()
    {
        $success = false;
        $emailLog = Tool_Email_Log::getById($this->getParam('id'));
        if ($emailLog instanceof Tool_Email_Log) {
            $emailLog->delete();
            $success = true;
        }
        $this->_helper->json(array(
            "success" => $success,
        ));
    }

    /**
     * Resends the email to the recipients
     */
    public function resendEmailAction(){
        $success = false;
        $emailLog = Tool_Email_Log::getById($this->getParam('id'));

        if($emailLog instanceof Tool_Email_Log){
            $mail = new Pimcore_Mail();
            $mail->preventDebugInformationAppending();

            if($html = $emailLog->getHtmlLog()){
                $mail->setBodyHtml($html);
            }

            if($text = $emailLog->getTextLog()){
                $mail->setBodyText($text);
            }

            $mail->setFrom($emailLog->getFrom());

            foreach($emailLog->getToAsArray() as $entry){
                $mail->addTo($entry['email'],$entry['name']);
            }

            foreach($emailLog->getCcAsArray() as $entry){
                $mail->addCc($entry['email'],$entry['name']);
            }

            foreach($emailLog->getBccAsArray() as $entry){
                $mail->addBcc($entry['email']);
            }
            $mail->setSubject($emailLog->getSubject());
            $mail->send();
            $success = true;
        }

        $this->_helper->json(array(
            "success" => $success,
        ));
    }

    public function sendTestEmailAction() {

        if($this->getUser()->isAllowed("emails")) {
            $mail = new Pimcore_Mail();
            $mail->addTo($this->getParam("to"));
            $mail->setSubject($this->getParam("subject"));

            if($this->getParam("type") == "text") {
                $mail->setBodyText($this->getParam("content"));
            } else {
                $mail->setBodyHtml($this->getParam("content"));
            }

            $mail->send();

            $this->_helper->json(array(
                "success" => true,
            ));
        } else {
            throw new \Exception("Permission denied");
        }
    }
}
