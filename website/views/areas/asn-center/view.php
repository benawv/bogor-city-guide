<?php
	session_start();
	if($_SESSION["loginCenter"] == "Yes")
	{
		$this->_redirect("/asn/asn-digital-download-center");
	}
	else{
		$this->_redirect("/asn/login-asn-center");
	}
?>