<?php

class TasbihController extends Website_Controller_Action {
	
	public function init(){
            parent :: init();
	}
	
	
    public function sectionTasbihAction () {
        $this->enableLayout();
        $this->setLayout('tasbih');
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
		$pesan = $_POST["pesan"];
            
            $o_key=str_replace(' ', '_', strtolower($nama));		
	    $getId=Object_Abstract::getByPath('/tasbih-inquiry/');//get folder id
	    $objProv = Object_Abstract::getById($prov);
            $inquiry = new Object_TasbihInquiry();
            $inquiry->setNama($nama);
            $inquiry->setKelamin($kelamin);
            $inquiry->setBod($date_tglLahir);
            $inquiry->setEmail($email);
            $inquiry->setTlp($tlp);
			$inquiry->setPesan($pesan);
            $inquiry->setProvinsi($objProv);
            $inquiry->setO_key($o_key.'_'.strtotime(date("YmdHis")));
            $inquiry->setO_parentId($getId->o_id);
            $inquiry->setO_index(0);
            $inquiry->setO_published(1);
            $inquiry->save();
			
			$session = new Zend_Session_Namespace('inquiry');
            $session->nama = $nama;
			$session->idObject = $inquiry->getO_id();
            $session->JenisKelamin = $kelamin;
			$session->tgl_lahir = $date_tglLahir;
            $session->no_hp = $tlp;
            $session->email = $email;
            $session->provinsi = $objProv;
            $session->pesan = $pesan;
			$session->form_inquiry = "inquiry";
        
            $params = array(
                        'nama' => $nama,
                        'email' => $email,
                        'tlp' => $tlp,
                        'pesan'=>$pesan
                        );

            $document = '/email/email-inquriy';
            $mail = new Pimcore_Mail();
            $mail->setSubject("Konfirmasi permintaan informasi mengenai Produk Allianz tasbih");
            $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
            $mail->setDocument($document);
            $mail->setParams($params);
            $mail->addTo($email);
            $mail->send();
		
            echo "success";
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
                // $object = Object_Abstract::getByPath("/tasbih-news/have-hajj-saving/have-insurance");
                $sideList[0] = new Object_TasbihNews_List();
                $sideList[0]->setCondition("o_path LIKE '/tasbih-news/have-hajj-saving/have-insurance/'");
                $sideList[0]->setOrderKey("RAND()", false);
                $sideList[0]->setLimit(1);
                $sideList[1] = new Object_TasbihNews_List();
                $sideList[1]->setCondition("o_path LIKE '/tasbih-news/have-hajj-saving/no-insurance/'");
                $sideList[1]->setOrderKey("RAND()", false);
                $sideList[1]->setLimit(1);
                $sideList[2] = new Object_TasbihNews_List();
                $sideList[2]->setCondition("o_path LIKE '/tasbih-news/no-hajj-saving/have-insurance/'");
                $sideList[2]->setOrderKey("RAND()", false);
                $sideList[2]->setLimit(1);
                $sideList[3] = new Object_TasbihNews_List();
                $sideList[3]->setCondition("o_path LIKE '/tasbih-news/no-hajj-saving/no-insurance/'");
                $sideList[3]->setOrderKey("RAND()", false);
                $sideList[3]->setLimit(1);
                
                // echo "<pre>";print_r($object);
                // die();
                $this->view->newsTasbih=$entries;
                $this->view->sidelist=$sideList;
                
                
                $this->enableLayout();
                $this->setLayout('tasbih');
	}
        
        public function newsTasbihPrevAction(){
            
            
            
        }
	
	

}