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
		$db = Pimcore_Resource_Mysql::get();
		$entries = Object_Abstract::getById($id);
		$data = $entries;
		//$object = Object_Abstract::getById($id);
		if($entries->getVideo()){
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
			
			$this->view->video = json_encode($video->frontend());
		}
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
		
		//Background Image
		$backImage = new Object_CommunityTipsBack_List();
		$backImage->setLimit(1);
		$backImage->setOrder("desc");
		foreach($backImage as $hasil)
		{
			$image = $hasil->getImage();
		}
		$this->view->fetchBackground = $image;
		
		
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
		
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." ORDER BY tblcommunity.date DESC limit 14"; //or whatever you need to do.
		
		$this->view->fetchData = $db->fetchAll($sql);
		
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
	
	public function saveCookiesAction()
	{
		//$db = Object_Abstract::update();
		/* $table = "object_store_6";
		$bind = array("popular" => 100);
		$where = "oo_id = 24";
		$db = Pimcore_Resource_Mysql::get();
		$db->update($table, $bind, $where); */
		//$this->db->save();
		
		die();
		
		$idcookies = new Object_List();
		$idcookies->setCondition("o_key='community-tips-cookies'");
		//ID PARENT	
		foreach ($idcookies as $parent){
			$o_Pid = $parent->getO_id();
		}
		
		$db = Pimcore_Resource_Mysql::get();
		
		$idcookies = $this->_getParam('cookies');
		$article = $this->_getParam('id');
		
		$sql = "select o_id from objects order by o_id desc";
		$obj = $db->fetchRow($sql);
		$parent = $obj[o_id]+1;
		
		$cookies = new Object_CommunityTipsCookies_List();
		$cookies->setCondition("cookies='".$idcookies."' and idArticle='".$article."'");
		
		$tips = new Object_CommunityTips_List();
		$tips->setCondition("oo_id=".$article);
		
		$popular = 0;
		foreach ($tips as $a)
		{
			$popular = $popular+$a->getPopular();
			$table1 = "object_store_".$a->getO_classId();
			$table2 = "object_query_".$a->getO_classId();
		}
		
		if(count($cookies)==0){
			$cookies = new Object_CommunityTipsCookies();
			$cookies->setCookies($idcookies);
			$cookies->setIdArticle($article);
			$cookies->setKey('cookies_'.$parent);
			$cookies->setO_parentId('182');
			$cookies->setIndex(0);
			$cookies->setPublished(1);
			$cookies->save();
			
			$idcookies = new Object_CommunityTipsCookies_List();
			$idcookies->setLimit(1);
			$idcookies->setOrderKey("oo_id");
			$idcookies->setOrder("desc");
			
			foreach ($idcookies as $parent){
				$o_id = $parent->getO_id();
			}
			
			$sumPopular = $popular+1;

			/* $sql4 = "update objects set o_path='/community-tips-cookies/community-tips-cookies/', o_parentId='".$o_Pid."' where o_id='".$o_id."'";
			$db1->update($sql4);
			
			$sql2 = "update ".$table1." set popular='".$sumPopular."' where oo_id='".$article."'";
			$db1->update($sql2);
			$sql3 = "update ".$table2." set popular='".$sumPopular."' where oo_id='".$article."'";
			$db1->update($sql3); */
			
			$string = "Sudah di save";
		}
		else{
			$string = "sudah terdaftar";
			
		}
		return $string;
	}
}