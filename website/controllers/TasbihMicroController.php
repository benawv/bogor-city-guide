<?php

class TasbihMicroController extends Website_Controller_Action {
	
	public function init(){
				
	
	}
	
	public function pageTasbihAction () {
		$this->enableLayout();
		$this->setLayout('ajfc');
	}

	public function tasbihInquiryAction () {
		
		$nama = $_POST["nama"];
		$kelamin = $_POST["kelamin"];
		$bod = $_POST["bod"];
		$email = $_POST["email"];
		$tlp= $_POST["tlp"];
		$prov = $_POST["provinsi_id"];
		
	        $getId=Object_Abstract::getByPath('/tasbih-inquiry/');//get folder id
		
                $inquiry = new Object_TasbihInquiry();
                $inquiry->setNama($nama);
                $inquiry->setKelamin($kelamin);
                $inquiry->setBod($bod);
                $inquiry->setEmail($email);
                $inquiry->setTlp($tlp);
                $inquiry->setProvinsi($prov);
                $inquiry->setO_key($Nama.'_'.strtotime(date("YmdHis")));
                $inquiry->setO_parentId($getId->o_id);
                $inquiry->setO_index(0);
                $inquiry->setO_published(1);
                $inquiry->save();
                
		 $params = array(
                                'nama' => $nama,
                                'email' => $Email,
                                'tlp' => $tlp
                                );

                $document = '/email/email-tasbih-inquriy';
                $mail = new Pimcore_Mail();
                $mail->setSubject("Konfirmasi Inquiry Program Tasbih");
                $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
                $mail->setDocument($document);
                $mail->setParams($params);
                $mail->addTo($Email);
                $mail->send();
		
		
	}
	

}