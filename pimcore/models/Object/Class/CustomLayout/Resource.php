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
 * @category   Pimcore
 * @package    Object_Class
 * @copyright  Copyright (c) 2009-2013 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Object_Class_CustomLayout_Resource extends Pimcore_Model_Resource_Abstract {

    /**
     * @var Object_Class_CustomLayout
     */
    protected $model;

    protected $_sqlChangeLog = array();
    
    /**
     * Contains all valid columns in the database table
     *
     * @var array
     */
    protected $validColumns = array();

    /**
     * Get the valid columns from the database
     *
     * @return void
     */
    public function init() {
        $this->validColumns = $this->getValidTableColumns("custom_layouts");
    }

    /**
     * Get the data for the custom layout from database for the given id, or from the ID which is set in the object
     *
     * @param integer $id
     * @return void
     */
    public function getById($id = null) {
        if (!$id) {
            $id = $this->model->getId();
        }

        $layoutRaw = $this->db->fetchRow("SELECT * FROM custom_layouts WHERE id = ?", $id);

        if($layoutRaw["id"]) {
            $this->assignVariablesToModel($layoutRaw);

            $this->model->setLayoutDefinitions($this->getLayoutData());
        } else {
            throw new Exception("Layout with ID " . $id . " doesn't exist");
        }
    }


    
    /**
     * Save object to database
     *
     * @return mixed
     */
    protected function getLayoutData () {
        $file = PIMCORE_CUSTOMLAYOUT_DIRECTORY . "/custom_definition_". $this->model->getId() .".psf";
        if(is_file($file)) {
            return Pimcore_Tool_Serialize::unserialize(file_get_contents($file));
        }
        return;
    }


    /**
     * Save layout to database
     *
     * @return void
     */
    public function save() {
        if ($this->model->getId()) {
            return $this->update();
        }
        return $this->create();
    }

    /**
     * Save changes to database, it is a good idea to use save() instead
     *
     * @return void
     */
    public function update() {

        $class = get_object_vars($this->model);
        $data = array();

        foreach ($class as $key => $value) {
            if (in_array($key, $this->validColumns)) {

                if (is_array($value) || is_object($value)) {
                    $value = Pimcore_Tool_Serialize::serialize($value);
                } else  if(is_bool($value)) {
                    $value = (int)$value;
                }
                $data[$key] = $value;
            }
        }

        $this->db->update("custom_layouts", $data, $this->db->quoteInto("id = ?", $this->model->getId()));

         // save definition as a serialized file
        $definitionFile = PIMCORE_CUSTOMLAYOUT_DIRECTORY."/custom_definition_". $this->model->getId() .".psf";
        if(!is_writable(dirname($definitionFile)) || (is_file($definitionFile) && !is_writable($definitionFile))) {
            throw new Exception("Cannot write definition file in: " . $definitionFile . " please check write permission on this directory.");
        }
        Pimcore_File::put($definitionFile, Pimcore_Tool_Serialize::serialize($this->model->layoutDefinitions));
                    

    }

    

    /**
     * Create a new record for the object in database
     *
     * @return boolean
     */
    public function create() {
        $this->db->insert("custom_layouts", array("name" => $this->model->getName()));

        $this->model->setId($this->db->lastInsertId());
        $this->model->setCreationDate(time());
        $this->model->setModificationDate(time());

        $this->save();
    }

    /**
     * Deletes object from database
     *
     * @return void
     */
    public function delete() {

        $this->db->delete("custom_layouts", $this->db->quoteInto("id = ?", $this->model->getId()));

        @unlink(PIMCORE_CUSTOMLAYOUT_DIRECTORY."/custom_definition_". $this->model->getId() .".psf");
    }

}
