<?php
/* class Website_Model_Vote_Resource extends Pimcore_Model_Resource_Abstract {
 
    protected $tableName = 'object_13';
 
    public function getById($id = null) {
 
        if ($id != null)
            $this->model->setId($id);
 
        $data = $this->db->fetchRow('SELECT * FROM '.$this->tableName.' WHERE id = ?', $this->model->getId());
 
        if(!$data["id"])
            throw new Exception("Object with the ID " . $this->model->getId() . " doesn't exists");
 
 
        $this->assignVariablesToModel($data);
    }
    
    public function getByIp($ip = null) {
    
    	if ($id != null)
    		$this->model->setIpAddress($ip);
    
    	$data = $this->db->fetchRow('SELECT * FROM '.$this->tableName.' WHERE id = ?', $this->model->getIpAddress());
    
    	if(!$data["id"])
    		throw new Exception("Object with the ID " . $this->model->getIpAddress() . " doesn't exists");
    
    
    	$this->assignVariablesToModel($data);
    }
 
    public function save() {
 
        $vars = get_object_vars($this->model);
        
        $buffer = array();
 
        $validColumns = $this->getValidTableColumns($this->tableName);
 
        if(count($vars))
            foreach ($vars as $k => $v) {
 
                if(!in_array($k, $validColumns))
                    continue;
 
                $getter = "get" . ucfirst($k);
 
                if(!is_callable(array($this->model, $getter)))
                    continue;
 
                $value = $this->model->$getter();
 
                if(is_bool($value))
                    $value = (int)$value;
 
                $buffer[$k] = $value;
            } */
            
           /*  echo "<pre>";
            print_r($buffer);
            die(); */
 
        /* if($this->model->getIpAddress() !== null) {
            $this->db->update($this->tableName, $buffer, $this->db->quoteInto("ipAddress = ?", $this->model->getIpAddress()));
            return;
        }
 
        $this->db->insert($this->tableName, $buffer);
        $this->model->setIpAddress($this->db->lastInsertId());
    }
 
    public function delete() {
        $this->db->delete($this->tableName, $this->db->quoteInto("id = ?", $this->model->getId()));
    }
    
    public function testRate(){
    	$tips = new Object_CommunityTips_List();
    	
    }
 
} */