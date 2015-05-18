<?php
	if($session->accept === true)
	{
		//die('session true');
	}
	else
	{
		$this->_redirect("/asn/login-asn-center");
	}
	/*
	if($_SESSION["loginCenter"] == "Yes")
	{
		//$this->_redirect("/asn/asn-digital-download-center");
	}
	else
	{
		$this->_redirect("/asn/login-asn-center");
	}
	*/
?>