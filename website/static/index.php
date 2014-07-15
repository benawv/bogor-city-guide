<?php 
	$root =  "http://".$_SERVER['HTTP_HOST'];
	$uri_segment = explode("/",$_SERVER['REQUEST_URI']);
	
	$url = $root."/".$uri_segment["1"];
	
	header('Location: '.$url);
?>