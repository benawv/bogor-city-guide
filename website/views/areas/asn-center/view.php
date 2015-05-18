<?php
	$session = new Zend_Session_Namespace('loginasn');
	
	if($session->verified === 'true')
	{
		//die('session true');
	}
	else
	{
		header('Location: http://www.allianz.co.id/asn/login-asn-center');
	}
?>