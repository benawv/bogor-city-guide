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

class Object_Class_Data_Select extends Object_Class_Data {

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = "select";

    /**
     * Available options to select
     *
     * @var array
     */
    public $options;
    
    /**
     * @var integer
     */
    public $width;    
    
    /**
     * Type for the column to query
     *
     * @var string
     */
    public $queryColumnType = "varchar(255)";

    /**
     * Type for the column
     *
     * @var string
     */
    public $columnType = "varchar(255)";

    /**
     * Type for the generated phpdoc
     *
     * @var string
     */
    public $phpdocType = "string";

    /**
     * @return array
     */
    public function getOptions() {
        return $this->options;
    }

    /**
     * @param array $options
     * @return void
     */
    public function setOptions($options) {
        $this->options = $options;
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * @param array $options
     * @return void
     */
    public function setWidth($width) {
        $this->width = $this->getAsIntegerCast($width);
        return $this;
    }

    /**
     * @see Object_Class_Data::getDataForResource
     * @param string $data
     * @param null|Object_Abstract $object
     * @return string
     */
    public function getDataForResource($data, $object = null) {
        return $data;
    }

    /**
     * @see Object_Class_Data::getDataFromResource
     * @param string $data
     * @return string
     */
    public function getDataFromResource($data) {
        return $data;
    }

    /**
     * @see Object_Class_Data::getDataForQueryResource
     * @param string $data
     * @param null|Object_Abstract $object
     * @return string
     */
    public function getDataForQueryResource($data, $object = null) {
        return $data;
    }


    /**
     * @see Object_Class_Data::getDataForEditmode
     * @param string $data
     * @param null|Object_Abstract $object
     * @return string
     */
    public function getDataForEditmode($data, $object = null) {
        return $this->getDataForResource($data, $object);
    }

    /**
     * @see Object_Class_Data::getDataFromEditmode
     * @param string $data
     * @param null|Object_Abstract $object
     * @return string
     */
    public function getDataFromEditmode($data, $object = null) {
        return $this->getDataFromResource($data);
    }

    /**
     * @see Object_Class_Data::getVersionPreview
     * @param string $data
     * @return string
     */
    public function getVersionPreview($data) {
        return $data;
    }

    /** True if change is allowed in edit mode.
     * @return bool
     */
    public function isDiffChangeAllowed() {
        return true;
    }

    /** See parent class.
     * @param mixed $data
     * @param null $object
     * @return array|null
     */
    public function getDiffDataForEditMode($data, $object = null) {
        $result = array();

        $diffdata = array();
        $diffdata["data"] = $data;
        $diffdata["disabled"] = false;
        $diffdata["field"] = $this->getName();
        $diffdata["key"] = $this->getName();
        $diffdata["type"] = $this->fieldtype;

        $value = "";
        foreach ($this->options as $option) {
            if ($option["value"] == $data) {
                $value = $option["key"];
                break;
            }
        }

        $diffdata["value"] = $value;
        $diffdata["title"] = !empty($this->title) ? $this->title : $this->name;

        $result[] = $diffdata;

        return $result;
    }

    /**
     * Checks if data is valid for current data field
     *
     * @param mixed $data
     * @param boolean $omitMandatoryCheck
     * @throws Exception
     */
    public function checkValidity($data, $omitMandatoryCheck = false) {
        if (!$omitMandatoryCheck and $this->getMandatory() and strlen( (string) $data ) == 0) {
            throw new Exception("Empty mandatory field [ " . $this->getName() . " ]");
        }
    }

    /**
     * @param $data
     * @return bool
     */
    public function isEmpty($data) {
        return (strlen($data) < 1);
    }

    /**
     * @param Object_Class_Data $masterDefinition
     */
    public function synchronizeWithMasterDefinition(Object_Class_Data $masterDefinition) {
        $this->options = $masterDefinition->options;
    }

}
