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

	public function saveAction(){
		$headline = $_POST['headline'];
		$description = $_POST['description'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];

		$getId = Object_Abstract::getByPath('/profil-maker/'); //get folder
		$register = new Object_ProfilMaker();
		$register->setHeadline($headline);
		$register->setDescription($description);
		$register->setFirstname($firstName);
		$register->setLastname($lastName);
		$register->setO_parentId($getId->o_id);
		$register->setIndex(0);
		$register->setPublished(1);
		$register->save();
	}
}
