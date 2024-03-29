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
 * @package    Webservice
 * @copyright  Copyright (c) 2009-2013 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Webservice_Data_Object_Concrete extends Webservice_Data_Object {

    /**
     * @var Webservice_Data_Object_Element[]
     */
    public $elements;


    /**
     * @var string
     */
    public $className;


    public function map($object) {
        parent::map($object);

        $this->className = $object->getClassName();

        $fd = $object->getClass()->getFieldDefinitions();

        foreach ($fd as $field) {

            $getter = "get".ucfirst($field->getName());

            //only expose fields which have a get method 
            if(method_exists($object,$getter)){
                $el = new Webservice_Data_Object_Element();
                $el->name = $field->getName();
                $el->type = $field->getFieldType();

                $el->value = $field->getForWebserviceExport($object);
                if ($el->value == null && self::$dropNullValues) {
                    continue;
                }

                $this->elements[] = $el;
            }

        }
    }

    public function reverseMap($object, $disableMappingExceptions = false, $idMapper = null) {

        $keys = get_object_vars($this);
        foreach ($keys as $key => $value) {
            $method = "set" . $key;
            if (method_exists($object, $method)) {
                $object->$method($value);
            }
        }

        //must be after generic setters above!!
        parent::reverseMap($object, $disableMappingExceptions, $idMapper);

        if (is_array($this->elements)) {
            foreach ($this->elements as $element) {
                $class = "Object_Class_Data_" . ucfirst($element->type);
                if (Pimcore_Tool::classExists($class)) {
                    $setter = "set" . ucfirst($element->name);
                    if (method_exists($object, $setter)) {
                        $tag = $object->getClass()->getFieldDefinition($element->name);
                        if($class instanceof Object_Class_Data_Fieldcollections){
                            $object->$setter($tag->getFromWebserviceImport($element->fieldcollection, $object,
                                                                                        $idMapper));
                        } else {
                            $object->$setter($tag->getFromWebserviceImport($element->value, $object, $idMapper));
                        }

                        
                    } else {
                        if(!$disableMappingExceptions) {
                            throw new Exception("No element [ " . $element->name . " ] of type [ " . $element->type . " ] found in class definition " . $class);
                        }
                    }
                } else {
                    if(!$disableMappingExceptions) {
                        throw new Exception("Unable to reverse map element [ " . $element->name . " ] of type [ " . $element->type . " ]. Object_Class_Data type not found. ");
                    }
                }
            }
        }
    }
}
