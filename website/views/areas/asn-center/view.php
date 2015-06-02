<?php
	if(!$this->editmode){
		$session = new Zend_Session_Namespace('loginasn');
		
		if($session->verified === 'true')
		{
			//die('session true');
		}
		else
		{
			//Zend_Controller_Action::redirect()->gotoUrl('/asn/login-asn-center');
			//header('Location: http://www.allianz.co.id/asn/login-asn-center');
			header('Location: http://beta.allianz.co.id/asn/login-asn-center');
			exit();
		}
	}
?>
