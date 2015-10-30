<?php

class ProfilMakerController extends Website_Controller_Action {
        
	
	public function uploadAction() {
		$urlRedirect = $_POST['urlRedirect'];
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
		new Zend_Session_Namespace('srcImage');
		Zend_Session::namespaceUnset('srcImage');
		$session = new Zend_Session_Namespace('srcImage');
		$session->src = $src;
		// $this->redirect($urlRedirect);
	}

	public function saveAction(){
		$headline = $_POST['headline'];
		$description = $_POST['description'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];

		$key = $firstName."_".strtotime(date("YmdHis"));

		$getId = Object_Abstract::getByPath('/profilmaker/'); //get folder
		//$getId = Object_Abstract::getById(41865);
		$register = new Object_ProfilMaker();
		$register->setheadline($headline);
		$register->setdescription($description);
		$register->setfirstName($firstName);
		$register->setlastName($lastName);
		$register->setkey(strtolower($key));
		$register->setO_parentId($getId->o_id);
		$register->setIndex(0);
		$register->setPublished(1);
		
		// Asset folder for the uploaded images
		$assetFolder = "/profil-maker/upload";
		
		// The key is the unique name of an asset that is also used in the asset tree
		//$nameFoto = str_replace(" ","-",strtolower($_FILES["uploadFoto"]["name"]));
		$nameFoto = $_POST['filename'].".png";
		$key = Pimcore_File::getValidFilename($nameFoto);
		
		// Check if there is alraedy an image with the same key
		if(!$asset = Asset::getByPath($assetFolder . "/" . $key)) {
		   $asset = new Asset_Image();
		}
		else{
			$asset = new Asset_Image();
		}
		
		// Optionally set the creation date
		$asset->setCreationDate ( time() );
		
		// Optionally set the user
		$asset->setUserOwner (1);
		$asset->setUserModification (1);
		
		// Set the asset's parent id, which is the asset folder for the uploaded images
		$asset->setParentId(Asset_Folder::getByPath($assetFolder)->getId());
		
		// That's the key
		$asset->setFilename($nameFoto);
		//$asset->setData(IMAGE_SOURCE);
		$asset->save();
		
		$register->setImage(Asset_Image::getById($asset->id));
		$register->save();
	}

	public function saveImageAction(){
		$image = $_POST['image'];
		$filedir = $_POST['filedir'];
		$name = time();

		$image = str_replace('data:image/png;base64,', '', $image);
		$decoded = base64_decode($image);

		file_put_contents($filedir . "/" . $name . ".png", $decoded, LOCK_EX);

		echo $filedir;

		$assetFolder = "/profil-maker";
		$key = Pimcore_file::getValidFilename();
		$folders="/website/static/profil-maker/downloaded/";
		//$folders="/website/var/assets/profil-maker/";

		$data = file_get_contents($folders);
		$asset = Asset::create(
			Asset_Folder::getByPath($assetFolder)->getId(),
			array(
				"filename" => $name,
				"data" => $data,
				"userOwner" => 1,
				"userModification" => 1));
		$asset->save();
	}
}
/*$assetFolder = "/static/upload-image"; //file direktori

		$namaFoto = str_replace(" ","-",strtolower($_FILES["uploadFoto"]["name"]));
		$key = Pimcore_File::getValidFilename($namaFoto);

		if(!$asset = Asset::getByPath($assetFolder ."/". $key)){
			$asset = new Asset_Image();
		}else{
			$asset = new Asset_Image();
		}

		$asset->setCreationDate(time());

		$asset->setUserOwner(1);
		$asset->setUserModification(1);

		$asset->setParentId(Asset_Folder::getByPath($assetFolder)->getId());

		$asset->setFilename(strtotime(date("YmdHis"))."_".$key);
		$asset->setDate(IMAGE_SOURCE);

		$uploadOk = 0;

		try{
			if($asset->save()){
				$register->setimage(Asset_Image::getById($asset->id));
			}
		}*/