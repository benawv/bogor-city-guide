<?php

class ApiController extends Zend_Rest_Controller {

    public function init()
    {
        $this->_helper->viewRenderer->setNoRender(true);
		$this->_helper->AjaxContext()
                ->addActionContext('get','json')
                ->addActionContext('post','json')
                ->addActionContext('new','json')
                ->addActionContext('edit','json')
                ->addActionContext('put','json')
                ->addActionContext('delete','json')
                ->initContext('json');
    }
    
    private function sendResponse($content) {
		$this->getResponse()
			->setHeader('Content-Type', 'json')
			->setBody($content)
			->sendResponse();
		exit;
	}
    
    public function calculatorAction() {
        
        $name = $this->_getParam('nama');
        $email = $this->_getParam('email');
        $nohp = $this->_getParam('nohp');
        
        //$name = "robbi test";
        
        $session = new Zend_Session_Namespace('tasbih');
        $session->name = $name;
        $session->email = $email;
        $session->phone = $nohp;
        
        echo "<pre>";
        print_r($session->name);
        die();
        
        //$json = $this->_helper->json(array('name' => $name));
        //$this->sendResponse($json);
    }
    
    public function unsetsessionAction()
    {
        Zend_Session::namespaceUnset('tasbih');
        die('unset');
    }
    
    public function indexAction() {
        
    }
    
    public function headAction() {
        
    }
    
    public function getAction() {
        
    }

    public function postAction() {
        
    }
    
    public function putAction() {
        
    }
    
    public function deleteAction() {
        
    }
}