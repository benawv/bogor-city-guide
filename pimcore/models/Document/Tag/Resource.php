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
 * @package    Document
 * @copyright  Copyright (c) 2009-2013 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */

class Document_Tag_Resource extends Pimcore_Model_Resource_Abstract {


    public function save() {

        $data = $this->model->getDataForResource();
        
        if (is_array($data) or is_object($data)) {
            $data = Pimcore_Tool_Serialize::serialize($data);
        }

        $element = array(
            "data" => $data,
            "documentId" => $this->model->getDocumentId(),
            "name" => $this->model->getName(),
            "type" => $this->model->getType()
        );

        $this->db->insertOrUpdate("documents_elements", $element);
    }
    
    public function delete () {
        $this->db->delete("documents_elements", $this->db->quoteInto("documentId = ?", $this->model->getDocumentId()) . " AND " . $this->db->quoteInto("name = ?", $this->model->getName()));
    }

}
