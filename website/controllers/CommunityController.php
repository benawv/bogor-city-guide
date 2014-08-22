<?php

class CommunityController extends Website_Controller_Action {
	
	public function homeAction () {
		$this->enableLayout();
		
		$entries = new Object_communityTips_List();
		$entries->setLimit(1);
		foreach ($entries as $table)
		{
			$nameCommunity = "object_".$table->getClassId();
		}
		
		$entries = new Object_CommunityTipsCategory_List();
		$entries->setLimit(1);
		foreach ($entries as $table)
		{
			$nameCommunityCat = "object_".$table->getClassId();
		}
		//ALL
		$db = Pimcore_Resource_Mysql::get();
		
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				ORDER BY tblcommunity.date DESC limit 14"; //or whatever you need to do.
		//echo "<pre>";
		//print_r($db->fetchAll($sql));
		//die();
		$this->view->fetchTips = $db->fetchAll($sql);
		
		//Background Image
		$backImage = new Object_CommunityTipsBack_List();
		$backImage->setLimit(1);
		$backImage->setOrder("desc");
		foreach($backImage as $hasil)
		{
			$image = $hasil->getImage();
		}
		$this->view->fetchBackground = $image;
		
		//Recommended
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1
				ORDER BY tblcommunity.recommended DESC limit 3"; //or whatever you need to do.
		
		$this->view->fetchRecommended = $db->fetchAll($sql2);
		
		//Popular
		$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				ORDER BY tblcommunity.popular DESC limit 3"; //or whatever you need to do.
		
		$this->view->fetchPopular = $db->fetchAll($sql3);
		
	}
	
	public function detailAction() {
		$key = $this->_getParam('text');
		$category = $this->_getParam('cat');
		$id = $this->_getParam('id');
		
		if($category==1){
			$this->template1Action($id,$key);
		}
		else
		{
			$this->template2Action($id,$key);
		}
	}
	
	public function template1Action($id,$key){
		//$entries = new Object_CommunityTips_List();
		//$entries->setCondition("oo_id = ".$id);
		$entries = Object_Abstract::getById($id);
		echo "<pre>";
		foreach ($entries as $result)
		{
			print_r($result);
		}
		//$object = Object_Abstract::getById($id);
		$v = $entries->getVideo();
		$videoData = $v->getData();
		
		if($videoData) {
			$video = new Document_Tag_Video();
			$video->setOptions(["thumbnail" => "test1"]); // specify your thumbnail here - IMPORTANT!
			$video->type = $v->getType();
			$video->id = ($videoData instanceof Asset) ? $videoData->getId() : $videoData;
			$video->title = $v->getTitle();
			$video->description = $v->getDescription();
			if($v->getPoster()) {
				$video->poster = $v->getPoster()->getId();
			}
			echo $video->frontend();
		
		}
		
		$this->enableLayout();
	}
	public function template2Action($id,$key){
		echo "Test2";
	}
}