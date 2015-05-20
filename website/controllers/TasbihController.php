<?php

class TasbihController extends Website_Controller_Action {
	
	public function init(){
            parent :: init();
	}
	
	public function pageTasbihAction () {
	    $this->enableLayout();
	    $this->setLayout('tasbih');
	}
	
        public function inquriyFormAction(){
            
            $nama = $_POST["nama"];
	    $kelamin = $_POST["kelamin"];
	    $bod = $_POST["bod"];
	    $date_tglLahir= new Pimcore_Date($bod);//set date into pimcore formats	
            $email = $_POST["email"];
	    $tlp= $_POST["nohp"];
	    $prov = $_POST["prov"];
            
            $o_key=str_replace(' ', '_', strtolower($nama));		
	    $getId=Object_Abstract::getByPath('/tasbih-inquiry/');//get folder id
	    $objProv = Object_Abstract::getById($prov);
            $inquiry = new Object_TasbihInquiry();
            $inquiry->setNama($nama);
            $inquiry->setKelamin($kelamin);
            $inquiry->setBod($date_tglLahir);
            $inquiry->setEmail($email);
            $inquiry->setTlp($tlp);
            $inquiry->setProvinsi($objProv);
            $inquiry->setO_key($o_key.'_'.strtotime(date("YmdHis")));
            $inquiry->setO_parentId($getId->o_id);
            $inquiry->setO_index(0);
            $inquiry->setO_published(1);
            $inquiry->save();
        
            $params = array(
                        'nama' => $nama,
                        'email' => $email,
                        'tlp' => $tlp
                        );

            $document = '/email/email-tasbih-inquriy';
            $mail = new Pimcore_Mail();
            $mail->setSubject("Konfirmasi Inquiry Program Tasbih");
            $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
            $mail->setDocument($document);
            $mail->setParams($params);
            $mail->addTo($email);
            $mail->send();
		
            echo "success";    
            die();
        }
        
        public function listAction () {
		$this->enableLayout();

		$entries_all = new Object_TasbihNews_List();
		
		$entries = new Object_TasbihNews_List();
		$entries->setLimit(10);


		$this->view->fetchNews = $entries;
		$this->view->totalData = count($entries_all);
	}

	public function newsTasbihAction(){
		
                $id=$this->_getParam('id');
                $entries = new Object_TasbihNews_List();
                $entries->setCondition('oo_id="'.$id.'"');  
                
                $sideList = new Object_TasbihNews_List();
                $sideList->setLimit(7);
                
                
                $this->view->newsTasbih=$entries;
                $this->view->sidelist=$sideList;
                
                
                $this->enableLayout();
                $this->setLayout('tasbih');
	}
        
        public function newsTasbihPrevAction(){
            
            
            
        }
	
	

}