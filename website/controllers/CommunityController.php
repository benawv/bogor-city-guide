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
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1
				ORDER BY tblcommunity.recommended DESC limit 3"; //or whatever you need to do.
		
		$this->view->fetchRecommended = $db->fetchAll($sql2);
		
		//Popular
		$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
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
		$db = Pimcore_Resource_Mysql::get();
		$entries = Object_Abstract::getById($id);
		$data = $entries;
		//$object = Object_Abstract::getById($id);
		$v = $entries->getVideo();
		$videoData = $v->getData();
		
		if($videoData) {
			$video = new Document_Tag_Video();
			$video->type = $v->getType();
			$video->id = ($videoData instanceof Asset) ? $videoData->getId() : $videoData;
			$video->title = $v->getTitle();
			$video->description = $v->getDescription();
			if($v->getPoster()) {
				$video->poster = $v->getPoster()->getId();
			}
		}
		$video->setOptions(array("height"=>"100%"));
		
		$this->view->video = $video->frontend();
		$this->view->data = $data;
		
		//Background Image
		$backImage = new Object_CommunityTipsBack_List();
		$backImage->setLimit(1);
		$backImage->setOrder("desc");
		foreach($backImage as $hasil)
		{
			$image = $hasil->getImage();
		}
		$this->view->fetchBackground = $image;
		
		$db = Pimcore_Resource_Mysql::get();
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
		
		//Recommended
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1
				ORDER BY tblcommunity.recommended, tblcommunity.popular DESC limit 5"; //or whatever you need to do.
		
		$this->view->fetchRecommended = $db->fetchAll($sql2);
		
		//Popular
		$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				ORDER BY tblcommunity.popular DESC limit 5"; //or whatever you need to do.
		
		$this->view->fetchPopular = $db->fetchAll($sql3);
		
		$this->render('template1');
		$this->enableLayout();
		
	}
	public function template2Action($id,$key){
		echo "Test2";
	}
	
	public function listcategoryAction(){
		$this->enableLayout();
		
		$cat = $this->_getParam('category');
		$path = new Object_CommunityTipsCategory_List();
		$path->setLimit(1);
		$path->setCondition('titleCategory="'.$cat.'"');
		foreach ($path as $test)
		{
			$kriteria = $test->getID();
		}
		
		
		$db = Pimcore_Resource_Mysql::get();
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
		
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." ORDER BY tblcommunity.date DESC limit 14"; //or whatever you need to do.
		
		$this->view->fetchData = $db->fetchAll($sql);
		
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
}