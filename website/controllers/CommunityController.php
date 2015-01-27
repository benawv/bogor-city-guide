<?php

class CommunityController extends Website_Controller_Action {
	
	public function homeAction () {
		$this->enableLayout();
		
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
		//ALL
		$db = Pimcore_Resource_Mysql::get();
		
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14"; //or whatever you need to do.
		
		$this->view->fetchTips = $db->fetchAll($sql);
		$this->view->totalData = count($db->fetchAll($sql));
		
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
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1 and tblcommunity.o_published = 1
				ORDER BY tblcommunity.recommended, tblcommunity.popular DESC limit 3"; //or whatever you need to do.
		
		$this->view->fetchRecommended = $db->fetchAll($sql2);
		
		//Popular
		$entries = new Object_CommunityTipsCookies_List();
		$entries->setLimit(1);
		foreach ($entries as $table)
		{
			$nameCommunityCok = "object_".$table->getClassId();
		}
		
		$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.popular, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.popular DESC limit 3"; //or whatever you need to do.
		$this->view->fetchPopular = $db->fetchAll($sql3);
		
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
		
		$db = Pimcore_Resource_Mysql::get();
		$entries = Object_Abstract::getById($id);
		$data = $entries;
		
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
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1 and tblcommunity.o_published = 1
				ORDER BY tblcommunity.recommended, tblcommunity.popular DESC limit 5"; //or whatever you need to do.
		
		$this->view->fetchRecommended = $db->fetchAll($sql2);
		
		//Popular
		$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.popular DESC limit 5"; //or whatever you need to do.
		
		$this->view->fetchPopular = $db->fetchAll($sql3);
		
		$this->enableLayout();
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
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1 and tblcommunity.o_published = 1
				ORDER BY tblcommunity.recommended, tblcommunity.popular DESC limit 5"; //or whatever you need to do.
		
		$this->view->fetchRecommended = $db->fetchAll($sql2);
		
		//Popular
		$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.popular DESC limit 5"; //or whatever you need to do.
		
		$this->view->fetchPopular = $db->fetchAll($sql3);
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
		
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexaColor, tblcategory.colorR, tblcategory.colorG, tblcategory.colorB, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14"; //or whatever you need to do.
		$data1 = $db->fetchAll($sql);
		if(count($data1) > 0)
		{
			$this->view->totalData = count($data1);
			$this->view->fetchData = $data1;
		}
		else
		{
			$this->view->totalData = count($data1);
			$sql2 = "SELECT * FROM ".$nameCommunityCat." as tblcategory 
					WHERE tblcategory.oo_id=".$kriteria;
			$this->view->fetchData = $db->fetchAll($sql2);
		}
		
		//Recommended
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.recommended = 1 and tblcommunity.o_published = 1
				ORDER BY tblcommunity.recommended, tblcommunity.popular DESC limit 3"; //or whatever you need to do.
		
		$this->view->fetchRecommended = $db->fetchAll($sql2);
		
		//Popular
		$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.popular DESC limit 3"; //or whatever you need to do.
		
		$this->view->fetchPopular = $db->fetchAll($sql3);

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
		
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset; //or whatever you need to do.
		$data = $db->fetchAll($sql);
		
		$data['count_all'] = count($data);
		
		$offset2 = $offset+14;
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset2; //or whatever you need to do.
		$data2 = $db->fetchAll($sql2);
		$data['offset_next'] = count($data2);
		
		echo json_encode($data);
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
	
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				left join assets as ass on tblcommunity.image=ass.id
				where tblcommunity.o_published = 1
				ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset; //or whatever you need to do.
		$data = $db->fetchAll($sql);
	
		$data['count_all'] = count($data);
	
		$offset3 = $offset-14;
		if($offset3 < 0)
		{
			$data['offset_prev'] = 0;
		}
		else{
			$sql3 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
			left join assets as ass on tblcommunity.image=ass.id
			where tblcommunity.o_published = 1
			ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset3; //or whatever you need to do.
			$data3 = $db->fetchAll($sql3);
			$data['offset_prev'] = count($data3);
		}
		echo json_encode($data);
	}
	
	public function paging3Action(){
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
		
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset; //or whatever you need to do.
		
		$data = $db->fetchAll($sql);
		
		$data['count_all'] = count($data);
		
		$offset2 = $offset+14;
		$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset2; //or whatever you need to do.
		
		$data2 = $db->fetchAll($sql2);
		$data['offset_next'] = count($data2);
		
		echo json_encode($data);
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
		
		$sql = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
				inner join assets as ass on tblcommunity.image=ass.id
				WHERE tblcommunity.category__id=".$kriteria." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset; //or whatever you need to do.
		
		$data = $db->fetchAll($sql);
		
		$data['count_all'] = count($data);
		
		$offset3 = $offset-14;
		if($offset3 < 0)
		{
			$data['offset_prev'] = 0;
		}
		else{
			$sql2 = "SELECT tblcommunity.oo_id, tblcommunity.o_key, tblcommunity.template, tblcommunity.title, tblcommunity.date, tblcategory.titleCategory, ass.filename, ass.path, tblcategory.colorPicker, tblcategory.hexacolor, tblcategory.summary FROM ".$nameCommunity." as tblcommunity left join ".$nameCommunityCat." as tblcategory on tblcommunity.category__id=tblcategory.oo_id
					inner join assets as ass on tblcommunity.image=ass.id
					WHERE tblcommunity.category__id=".$kriteria." and tblcommunity.o_published = 1 ORDER BY tblcommunity.date DESC, tblcommunity.o_creationDate DESC limit 14 offset ".$offset3; //or whatever you need to do.
			
			$data2 = $db->fetchAll($sql2);
			$data['offset_prev'] = count($data2);
		}
		echo json_encode($data);
	}
}