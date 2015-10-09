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
		//ALL
		$entries = new Object_SmartmedPremium_List();
		$entries->setLimit(1);
		$entries->setCondition("o_path LIKE '/kalkulator-smartmed/premium_old/' AND nbc LIKE '".$nbc."' AND sex LIKE '".$sex."' AND age LIKE '".$age."' AND coshare LIKE '".$coshare."' AND kode LIKE '".$code."' AND plantype__id LIKE '".$plan."'");
		
		// print_r($entries);
		foreach ($entries as $row){
			echo $row->getPremium();
		}
	}
}