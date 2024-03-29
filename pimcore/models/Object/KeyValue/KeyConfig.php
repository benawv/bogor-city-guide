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
 * @package    Object
 * @copyright  Copyright (c) 2009-2013 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Object_KeyValue_KeyConfig extends Pimcore_Model_Abstract {

    static $cache = array();

    static $cacheEnabled = false;

    /**
     * @var integer
     */
    public $id;

    /** The key
     * @var string
     */
    public $name;

    /** The key description.
     * @var
     */
    public $description;

    /** The key type ("text", "number", etc...)
     * @var
     */
    public $type;

    /** Unit information (just for information)
     * @var
     */
    public $unit;

    /** The group id.
     * @var
     */
    public $group;

    /** Array of possible vales ("select" datatype)
     * @var
     */
    public $possiblevalues;

    /**
     * @var integer
     */
    public $creationDate;

    /**
     * @var integer
     */
    public $modificationDate;

    /**
     * @var
     */
    public $translator;

    /** Sets the translator id.
     * @param $translator
     */
    public function setTranslator($translator)
    {
        $this->translator = $translator;
    }

    /** Returns the translator id.
     * @return mixed
     */
    public function getTranslator()
    {
        return $this->translator;
    }


    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setPossibleValues($values)
    {
        $this->possiblevalues = $values;
        return $this;
    }

    public function getPossibleValues()
    {
        return $this->possiblevalues;
    }



    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    public function getGroup()
    {
        return $this->group;
    }


    /**
     * @param integer $id
     * @return Object_KeyValue_KeyConfig
     */
    public static function getById($id) {
        try {
            $id = intval($id);
            if (self::$cacheEnabled && self::$cache[$id]) {
                return self::$cache[$id];
            }
            $config = new self();
            $config->setId($id);
            $config->getResource()->getById();
            if (self::$cacheEnabled) {
                self::$cache[$id] = $config;
            }

            return $config;
        } catch (Exception $e) {

        }
    }

    /**
     * @param boolean $cacheEnabled
     */
    public static function setCacheEnabled($cacheEnabled)
    {
        self::$cacheEnabled = $cacheEnabled;
        if(!$cacheEnabled){
            self::$cache = array();
        }
    }

    /**
     * @return boolean
     */
    public static function getCacheEnabled()
    {
        return self::$cacheEnabled;
    }


    public static function getByName ($name, $groupId = null) {
        try {
            $config = new self();
            $config->setName($name);
            $config->setGroup($groupId);
            $config->getResource()->getByName();

            return $config;
        } catch (Exception $e) {

        }
    }


    /**
     * @return Object_KeyValue_KeyConfig
     */
    public static function create() {
        $config = new self();
        $config->save();

        return $config;
    }


    /**
     * @param integer $id
     * @return void
     */
    public function setId($id) {
        $this->id = (int) $id;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string name
     * @return void
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /** Returns the key description.
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /** Sets the key description
     * @param $description
     * @return Object_KeyValue_KeyConfig
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }


    /**
     * Deletes the key value key configuration
     */
    public function delete() {
        Pimcore::getEventManager()->trigger("object.keyValue.keyConfig.preDelete", $this);
        if ($this->getId()) {
            unset(self::$cache[$this->getId()]);
        }
        parent::delete();
        Pimcore::getEventManager()->trigger("object.keyValue.keyConfig.postDelete", $this);
    }

    /**
     * Saves the key config
     */
    public function save() {

        $isUpdate = false;

        if ($this->getId()) {
            unset(self::$cache[$this->getId()]);
            $isUpdate = true;
            Pimcore::getEventManager()->trigger("object.keyValue.keyConfig.preUpdate", $this);
        } else {
            Pimcore::getEventManager()->trigger("object.keyValue.keyConfig.preAdd", $this);
        }

        parent::save();

        if ($isUpdate) {
            Pimcore::getEventManager()->trigger("object.keyValue.keyConfig.postUpdate", $this);
        } else {
            Pimcore::getEventManager()->trigger("object.keyValue.keyConfig.postAdd", $this);
        }
    }

    /**
     * @param int $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = (int) $creationDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param int $modificationDate
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = (int) $modificationDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }


}
