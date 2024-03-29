<?php

class CommunityController extends Website_Controller_Action {
	
	public function homeAction () {
		$this->enableLayout();
		
		//ALL
		$db = Pimcore_Resource_Mysql::get();
		
		$data = Object_CommunityTips::getList(array(
				"limit" => 14,
				"orderKey" => array("date", "o_creationDate"),
				"order" => array("desc")));
		
		$this->view->fetchTips = $data;
		$x = 0;
		foreach($data as $row){
			$x = $x + 1;
		}
		$this->view->totalData = $x;
		
		//Background Image
		$backImage = new Object_CommunityTipsBackground_List();
		$backImage->setLimit(1);
		$backImage->setOrderKey("o_creationDate");
		$backImage->setOrder("desc");
		foreach($backImage as $hasil)
		{
			$image = $hasil->image->path."".$hasil->image->filename;
		}
		$this->view->fetchBackground = $image;
		
		//Recommended
		/*$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, image FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1 and tblcommunity.o_published = 1
				ORDER BY tblcommunity.recommended, tblcommunity.popular DESC limit 3";*/ //or whatever you need to do.
		$data2 = Object_CommunityTips::getList(array(
				"condition" => "recommended = 1 and o_published = 1",
				"limit" => 3,
				"orderKey" => array("recommended", "popular"),
				"order" => array("desc")));
		
		$this->view->fetchRecommended = $data2;//$db->fetchAll($sql2);
		
		//Popular
		/*$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.popular, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, image FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.popular DESC limit 3";*/ //or whatever you need to do.
		$data3 = Object_CommunityTips::getList(array(
				"condition" => "o_published = 1",
				"limit" => 3,
				"orderKey" => array("popular"),
				"order" => array("desc")));
		
		$this->view->fetchPopular = $data3;//$db->fetchAll($sql3);
		
		$sliderImage = new Object_CommunityTipsImageSlider_List();
		$sliderImage->setLimit(5);
		$sliderImage->setOrderKey("o_creationDate");
		$sliderImage->setOrder("desc");
		$this->view->sliderImage = $sliderImage;
		
		$icon = new Object_CommunityTipsSocialIcon_List();
		$icon->setLimit(3);
		$icon->setOrderKey("o_creationDate");
		$icon->setOrder("desc");
		$this->view->icon = $icon;
		
	}
	
	public function previewAction(){
		$id = $this->_getParam('id');
		$key = "";
		$this->template1Action($id,$key);
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
		
		//echo "<pre>";
		//print_r($data->getProperties());
		//echo "test";
		//die();
		
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
			//$video->setOptions(array("height"=>"450px"));
			
			$this->view->video = json_encode($video->frontend());
		}
		$this->view->data = $data;
		
		$db = Pimcore_Resource_Mysql::get();
		$entries = new Object_CommunityTips_List();
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
		$data2 = Object_CommunityTips::getList(array(
				"condition" => "recommended = 1 and o_published = 1",
				"limit" => 5,
				"orderKey" => array("recommended", "popular"),
				"order" => array("desc")));
		
		$this->view->fetchRecommended = $data2;
		
		//Popular
		$data3 = Object_CommunityTips::getList(array(
				"condition" => "o_published = 1",
				"limit" => 5,
				"orderKey" => array("popular"),
				"order" => array("desc")));
		
		$this->view->fetchPopular = $data3;
		
		$this->view->cusMetaTitle = '<meta property="og:title" content="'.$data->getTitle().'" />';
		$this->view->cusMetaDesc = '<meta property="og:description" content="'.strip_tags($data->getSummary()).'" />';
		$this->view->cusMetaImage = '<meta property="og:image" content="http://'.$_SERVER['SERVER_NAME'].$data->imageBackgroundDetail->path.$data->imageBackgroundDetail->filename.'" />';
		
		$this->render('template1');
		$this->enableLayout();
		
	}
	public function template2Action($id,$key){
		echo "Test2";
	}
	
	public function listcategoryAction(){
		$this->enableLayout();
		
		//Background Image
		$backImage = new Object_CommunityTipsBackground_List();
		$backImage->setLimit(1);
		$backImage->setOrderKey("o_creationDate");
		$backImage->setOrder("desc");
		foreach($backImage as $hasil)
		{
			$image = $hasil->getImage();
		}
		$this->view->fetchBackground = $image;
		
		$sliderImage = new Object_CommunityTipsImageSlider_List();
		$sliderImage->setLimit(5);
		$sliderImage->setOrderKey("o_creationDate");
		$sliderImage->setOrder("desc");
		$this->view->sliderImage = $sliderImage;
		
		
		$cat = $this->_getParam('category');
		$idCat = $this->_getParam('id');
		
		/*$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexaColor, tblcategory.colorR, tblcategory.colorG, tblcategory.colorB, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14";*/ //or whatever you need to do.
		
		$data = Object_CommunityTips::getList(array(
				"condition" => "category__id = ".$idCat,
				"limit" => 14,
				"orderKey" => array("date", "o_creationDate"),
				"order" => array("desc")));
		$this->view->fetchData = $data;
		$x = 0;
		foreach($data as $row){
			$x++;
		}
		$this->view->totalData = $x;
		
		//Recommended
		/*$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1 and tblcommunity.o_published = 1
				ORDER BY tblcommunity.recommended, tblcommunity.popular DESC limit 3";*/ //or whatever you need to do.
		$data2 = Object_CommunityTips::getList(array(
				"condition" => "recommended = 1 and o_published = 1",
				"limit" => 3,
				"orderKey" => array("recommended", "popular"),
				"order" => array("desc")));
		
		$this->view->fetchRecommended = $data2;//$db->fetchAll($sql2);
		
		//Popular
		/*$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.popular DESC limit 3";*/ //or whatever you need to do.
		$data3 = Object_CommunityTips::getList(array(
				"condition" => "o_published = 1",
				"limit" => 3,
				"orderKey" => array("popular"),
				"order" => array("desc")));
		
		$this->view->fetchPopular = $data3;//$db->fetchAll($sql3);

		$icon = new Object_CommunityTipsSocialIcon_List();
		$icon->setLimit(3);
		$icon->setOrderKey("o_creationDate");
		$icon->setOrder("desc");
		$this->view->icon = $icon;
	}
	
	public function saveCookiesAction()
	{
		//$db = Object_Abstract::update();
		
		//$this->db->save();
		
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
			$popular = $popular+($a->getPopular());
			$table1 = "object_store_".$a->getO_classId();
			$table2 = "object_query_".$a->getO_classId();
		}
		
		if(count($cookies)==0){
			$cookies = new Object_CommunityTipsCookies();
			$cookies->setCookies($idcookies);
			$cookies->setIdArticle($article);
			$cookies->setKey('cookies_'.$parent);
			$cookies->setO_parentId($o_Pid);
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
			$where = "o_id=".$o_id;
			$where2 = "oo_id=".$article;
			//$db->update("objects", array("o_path"=>"/community-tips-cookies/", "o_parentId"=>$o_Pid), $where);
			$db->update($table1, array("popular"=>$sumPopular), $where2);
			$db->update($table2, array("popular"=>$sumPopular), $where2);
			$string = "Sudah di save";
		}
		else{
			$string = "sudah terdaftar";
			
		}
		return $string;
	}
	
	public function pagingAction()
	{
		$db = Pimcore_Resource_Mysql::get();
		$offset = $this->_getParam('indexPage');
		$entries = new Object_CommunityTips_List();
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
		
		//$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
		//		left join assets as ass on tblcommunity.image=ass.id
		//		where tblcommunity.o_published = 1
		//		ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset; //or whatever you need to do.
		//$data = $db->fetchAll($sql);
		$community = Object_CommunityTips::getList(array(
				"offset" => $offset,
				"limit" => 14,
				"orderKey" => array("date", "o_creationDate"),
				"order" => array("desc")));
		$x = 0;
		$arr = array();
		foreach($community as $row){
			$arr[$x]['title'] = $row->getTitle();
			$arr[$x]['link'] = $row->getO_key()."_".$row->getO_id()."_".$row->getTemplate();
			$arr[$x]['image'] = $row->image->path.$row->image->filename;
			$arr[$x]['altImage'] = $row->image->metadata[1]["data"];
			$arr[$x]['titleImage'] = $row->image->metadata[0]["data"];
			$arr[$x]['category'] = $row->getCategory()->titleCategory;
			$arr[$x]['date']  = date("M d, Y", strtotime($row->getDate()));
			$x++;
		}
		$data = $arr; 
		
		$offset2 = $offset+14;
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset2; //or whatever you need to do.
		$data2 = $db->fetchAll($sql2);
		$hasNext = false;
		if(count($data2) > 0)
		{
			$hasNext = true;
		}
		
		$returnAjax = array( "listData" => $data, "count_all" =>  $x, "hasNext" => $hasNext);
		echo json_encode($returnAjax);
	}
	
	public function paging2Action()
	{
		$db = Pimcore_Resource_Mysql::get();
		$offset = $this->_getParam('indexPage');
		$entries = new Object_CommunityTips_List();
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
		
		/*$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset;*/ //or whatever you need to do.
				
		$community = Object_CommunityTips::getList(array(
				"offset" => $offset,
				"limit" => 14,
				"orderKey" => array("date", "o_creationDate"),
				"order" => array("desc")));
		$x = 0;
		$arr = array();
		foreach($community as $row){
			$arr[$x]['title'] = $row->getTitle();
			$arr[$x]['link'] = $row->getO_key()."_".$row->getO_id()."_".$row->getTemplate();
			$arr[$x]['image'] = $row->image->path.$row->image->filename;
			$arr[$x]['altImage'] = $row->image->metadata[1]["data"];
			$arr[$x]['titleImage'] = $row->image->metadata[0]["data"];
			$arr[$x]['category'] = $row->getCategory()->titleCategory;
			$arr[$x]['date']  = date("M d, Y", strtotime($row->getDate()));
			$x++;
		}
		$data = $arr;
		
		$offset3 = $offset-14;
		if($offset3 < 0)
		{
			$offset_prev = 0;
		}
		else{
			$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
			left join assets as ass on tblcommunity.image=ass.id
			where tblcommunity.o_published = 1
			ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset3; //or whatever you need to do.
			
			$data3 = $db->fetchAll($sql3);
			$offset_prev = count($data3);
		}
		
		$hasNext = false;
		if($offset_prev > 0)
		{
			$hasNext = true;
		}
		$returnAjax = array( "listData" => $data, "count_all" =>  $x, "hasNext" => $hasNext);
		echo json_encode($returnAjax);
	}
	
	public function paging3Action(){
		$cat = $this->_getParam('category');
		$offset = $this->_getParam('indexPage');
		
		//$path = new Object_CommunityTipsCategory_List();
		//$path->setLimit(1);
		//$path->setCondition('titleCategory="'.$cat.'"');
		//foreach ($path as $test)
		//{
		//	$kriteria = $test->getID();
		//}
		
		$db = Pimcore_Resource_Mysql::get();
		$entries = new Object_CommunityTips_List();
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
		
		/*$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset;*/ //or whatever you need to do.
		$community = Object_CommunityTips::getList(array(
				"condition" => "category__id = ".$cat." and o_published = 1",
				"offset" => $offset,
				"limit" => 14,
				"orderKey" => array("date", "o_creationDate"),
				"order" => array("desc")));
		$x = 0;
		$arr = array();
		foreach($community as $row){
			$arr[$x]['title'] = $row->getTitle();
			$arr[$x]['link'] = $row->getO_key()."_".$row->getO_id()."_".$row->getTemplate();
			$arr[$x]['image'] = $row->image->path.$row->image->filename;
			$arr[$x]['altImage'] = $row->image->metadata[1]["data"];
			$arr[$x]['titleImage'] = $row->image->metadata[0]["data"];
			$arr[$x]['category'] = $row->getCategory()->titleCategory;
			$arr[$x]['date']  = date("M d, Y", strtotime($row->getDate()));
			$x++;
		}
		$data = $arr; 
		
		
		$offset2 = $offset+14;
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$cat." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset2; //or whatever you need to do.
		
		$data2 = $db->fetchAll($sql2);
		$hasNext = false;
		if(count($data2) > 0)
		{
			$hasNext = true;
		}
		
		$returnAjax = array( "listData" => $data, "count_all" =>  $x, "hasNext" => $hasNext);
		echo json_encode($returnAjax);
	}
	
	public function paging4Action(){
		$cat = $this->_getParam('category');
		$offset = $this->_getParam('indexPage');
		
		$path = new Object_CommunityTipsCategory_List();
		$path->setLimit(1);
		$path->setCondition('titleCategory="'.$cat.'"');
		foreach ($path as $test)
		{
			$kriteria = $test->getID();
		}
		
		$db = Pimcore_Resource_Mysql::get();
		$entries = new Object_CommunityTips_List();
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
		
		/*$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset;*/ //or whatever you need to do.
		$community = Object_CommunityTips::getList(array(
				"condition" => "category__id = ".$cat." and o_published = 1",
				"offset" => $offset,
				"limit" => 14,
				"orderKey" => array("date", "o_creationDate"),
				"order" => array("desc")));
		$x = 0;
		$arr = array();
		foreach($community as $row){
			$arr[$x]['title'] = $row->getTitle();
			$arr[$x]['link'] = $row->getO_key()."_".$row->getO_id()."_".$row->getTemplate();
			$arr[$x]['image'] = $row->image->path.$row->image->filename;
			$arr[$x]['altImage'] = $row->image->metadata[1]["data"];
			$arr[$x]['titleImage'] = $row->image->metadata[0]["data"];
			$arr[$x]['category'] = $row->getCategory()->titleCategory;
			$arr[$x]['date']  = date("M d, Y", strtotime($row->getDate()));
			$x++;
		}
		$data = $arr;
		
		$offset3 = $offset-14;
		if($offset3 < 0)
		{
			$offset_prev = 0;
		}
		else{
			$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
					inner join assets as ass on tblcommunity.image=ass.id
					WHERE tblcommunity.category__id=".$cat." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset3; //or whatever you need to do.
			
			$data2 = $db->fetchAll($sql2);
			$offset_prev = count($data2);
		}
		$hasNext = false;
		if($offset_prev > 0)
		{
			$hasNext = true;
		}
		$returnAjax = array( "listData" => $data, "count_all" =>  $x, "hasNext" => $hasNext);
		echo json_encode($returnAjax);
	}
}