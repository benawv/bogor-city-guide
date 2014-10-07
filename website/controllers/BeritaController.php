<?php

class BeritaController extends Website_Controller_Action {
	
	public function homeAction () {
		$this->enableLayout();
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT id from documents where path='/berita/berita/arsip-berita/' limit 3"; //or whatever you need to do.
		$this->view->fetchBerita = $db->fetchAll($sql);
	}
	
	public function loadMoreAction()
	{
		$offset = $_POST["offset"];
		$create = $_POST["created_at"];
		
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT id from documents where path='/berita/berita/arsip-berita/' limit 3 offset ".$offset; //or whatever you need to do.
		$id = $db->fetchAll($sql);
		$entries = array();
		for ($x = 0; $x < count($id) ; $x++)
		{
			$list = new Document_List();
			$list->setCondition("id=".$id[$x]['id']);
			$entries[$x] = $list->load();
		}
		echo json_encode($entries);
	}
}