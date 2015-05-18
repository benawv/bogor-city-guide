<?php
	$session = new Zend_Session_Namespace('loginasn');
	
	if($session->verified === 'true')
	{
		//die('session true');
	}
	else
	{
		$this->_redirect("/asn/login-asn-center");
	}
?>