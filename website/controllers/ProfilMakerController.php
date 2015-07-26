<?php

class ProfilMakerController extends Website_Controller_Action {
        
	
	public function uploadAction() {
		$nameFoto = str_replace(" ","-",strtolower($_FILES["uploadFoto"]["name"]));
		
		$dateNow = strtotime(date('Y-m-d H:i:s'));
		$target_dir = "./website/static/upload-image/";
		$target_dir2 = "/website/static/upload-image/";
		$target_file = $target_dir.$dateNow."_".basename($nameFoto);
		$src = $target_dir2.$dateNow."_".basename($nameFoto);
		
		try{
			move_uploaded_file($_FILES["uploadFoto"]["tmp_name"], $target_file);
		}
		catch(Exception $e)
		{
			echo 'ERROR: ',  $e->getMessage(), "\n";
		}
		//echo $_COOKIE["uploadImage"];
		$session = new Zend_Session_Namespace('srcImage');
		$session->src = $src;
		$this->redirect("/profil-maker/page3");
	}
}
