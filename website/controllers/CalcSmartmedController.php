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
		if($uwl < 25) $nbc = "2";
		else $nbc = "1";
		
		//$this->enableLayout();
		// echo $payment."-".$fd."-".$ncd."-".$age."-".$sex."-".$code."-".$coshare."-".$nbc."-".$uwl."-".$plan;
		//ALL
		$entries = new Object_SmartmedPremium_List();
		$entries->setLimit(1);
		$entries->setCondition("nbc LIKE '".$nbc."' AND sex LIKE '".$sex."' AND age LIKE '".$age."' AND coshare LIKE '".$coshare."' AND kode LIKE '".$code."' AND plantype__id LIKE '".$plan."'");
		
		foreach ($entries as $row){
			echo $row->getPremium();
		}
	}
}