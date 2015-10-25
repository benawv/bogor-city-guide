<?php

class CalcSmartmedController extends Website_Controller_Action {
	
	public function calcAction () {
		
		$payment = $this->_getParam('payment');
		$fd = $this->_getParam('fd');
		$ncd = $this->_getParam('ncd');
		$age = $this->_getParam('age');
		$sex = $this->_getParam('sex');
		$code = $this->_getParam('code');//ip,ma,od
		$coshare = $this->_getParam('coshare');
		$uwl = $this->_getParam('uwl');
		$plan = $this->_getParam('plan');//ip,ma,od
		if($ncd == "Y") $nbc = "2";
		else $nbc = "1";
		
		//$this->enableLayout();
		// echo $nbc."-".$sex."-".$ncd."-".$age."-".$sex."-".$coshare."-".$code."-".$plan."-".$uwl;
		//ALL premium_new
		$entries = new Object_SmartmedPremium_List();
		$entries->setLimit(1);
		$entries->setCondition("o_path LIKE '/kalkulator-smartmed/premium_new/' AND nbc LIKE '".$nbc."' AND sex LIKE '".$sex."' AND age LIKE '".$age."' AND coshare LIKE '".$coshare."' AND kode LIKE '".$code."' AND plantype__id LIKE '".$plan."'");
		
		// print_r($entries);
		foreach ($entries as $row){
			$value = $row->getPremium();
		}
		
		if($payment=="Annually")
			echo $value;
		elseif($payment=="Semi-Annually")
			echo $value*0.52;
		elseif($payment=="Quarterly")
			echo $value*0.27;
		else
			echo $value*0.10;

	}
	public function emailAction(){
//        $nama = $_COOKIE["nama"];
//        $pembayaran = $_COOKIE["pembayaran"];
//        $No_Claim = $_COOKIE["ncd"];
//        $sex = $_COOKIE["sex"];
//        $dob = $_COOKIE["dob"];
//        $tgl_hitung = $_COOKIE["cd"];
//        $tgl_hitung = $_COOKIE["cd"];
//        $premi_ip = $_COOKIE["ipp"];
//        $premi_mat = $_COOKIE["mat"];
        
        
            $document = '/email/email-smartmed';
        
            $mail = new Pimcore_Mail();
			$mail->setSubject("Konfirmasi Hasil Kalkulasi Ilustrasi Produk Allianz Smartmed Primer");
			$mail->setFrom("no-reply@allianz.co.id","Allianz Smartmed");
			$mail->setDocument($document);
//			$mail->setParams($params);
			$mail->addTo($email);
			$mail->send();
        

        
		$this->_redirect("/kalkulator/smartmed/langkah5");
	}
}