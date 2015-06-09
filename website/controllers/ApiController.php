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
        $date_tglBuat = $this->_getParam('date_tglBuat');
        $date_tglLahir = $this->_getParam('date_tglLahir');
        $JenisKelamin = $this->_getParam('JenisKelamin');
        $Usia = $this->_getParam('Usia');
        $Frekuensi = $this->_getParam('Frekuensi');
        $AsuransiJiwa = $this->_getParam('AsuransiJiwa');
        $AJ = $this->_getParam('AJ');
        $Kontribusi = $this->_getParam('Kontribusi');
        $Calculation = $this->_getParam('Calculation');
        $source = $this->_getParam('kalkulator');

        //$name = "robbi test";
        
        $session = new Zend_Session_Namespace('tasbih');
        $session->name = $name;
        $session->email = $email;
        $session->phone = $nohp;
        $session->date_tglBuat = $date_tglBuat;
        $session->date_tglLahir = $date_tglLahir;
        $session->JenisKelamin = $JenisKelamin;
        $session->Usia = $Usia;
        $session->Frekuensi = $Frekuensi;
        $session->AsuransiJiwa = $AsuransiJiwa;
        $session->AJ= $AJ;
        $session->Kontribusi = $Kontribusi;
        $session->Calculation = $Calculation;
        $session->source = $source;
        

        print_r($session->Usia);
        echo "rererere";
        die();

        //$json = $this->_helper->json(array('name' => $name));
        //$this->sendResponse($json);
    }


    public function formTasbihAction() {//semua form tasbih
        
        $name = $this->_getParam('nama');
        $namaForm=$this->_getParam('namaForm');//NAMA INI HARUS SAMA DENGAN NAMA SESSION 
       /* $email = $this->_getParam('email');
        $nohp = $this->_getParam('nohp');
        $date_tglBuat = $this->_getParam('date_tglBuat');
        $date_tglLahir = $this->_getParam('date_tglLahir');
        $JenisKelamin = $this->_getParam('JenisKelamin');
        $Usia = $this->_getParam('Usia');
        $Frekuensi = $this->_getParam('Frekuensi');
        $AsuransiJiwa = $this->_getParam('AsuransiJiwa');
        $AJ = $this->_getParam('AJ');
        $Kontribusi = $this->_getParam('Kontribusi');
        $Calculation = $this->_getParam('Calculation');
        $source = $this->_getParam('kalkulator');*/

        //$name = "robbi test";
        
        $session = new Zend_Session_Namespace($namaForm);
        $session->name = $name;
        $session->FamaForm = $name;
       /* $session->email = $email;
        $session->phone = $nohp;
        $session->date_tglBuat = $date_tglBuat;
        $session->date_tglLahir = $date_tglLahir;
        $session->JenisKelamin = $JenisKelamin;
        $session->Usia = $Usia;
        $session->Frekuensi = $Frekuensi;
        $session->AsuransiJiwa = $AsuransiJiwa;
        $session->AJ= $AJ;
        $session->Kontribusi = $Kontribusi;
        $session->Calculation = $Calculation;
        $session->source = $source;*/
        
        print_r($session->FamaForm);
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