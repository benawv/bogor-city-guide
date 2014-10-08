<?php

class BeritaController extends Website_Controller_Action {
	
	public function homeAction () {
		$this->enableLayout();
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT id from documents where path='/berita/berita/arsip-berita/' ORDER BY creationDate DESC limit 3"; //or whatever you need to do.
		$this->view->fetchBerita = $db->fetchAll($sql);
	}
	
	public function loadMoreAction()
	{
		$offset = $_POST["offset"];
		$create = $_POST["created_at"];
		
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT id from documents "; //or whatever you need to do.
		if($create!='')
		{
			$sql .= "where path='/berita/berita/arsip-berita/' and DATE_FORMAT(FROM_UNIXTIME(`creationDate`), '%Y') = ".$create." ORDER BY creationDate DESC limit 3 offset ".$offset;
		}
		else 
		{
			$sql .= "where path='/berita/berita/arsip-berita/' ORDER BY creationDate DESC limit 3 offset ".$offset;
		}
		
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
	
	public function filterTahunAction()
	{
		$create = $_POST["created_at"];
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT id from documents ";
		if($create!='')
		{
			$sql .= "where path='/berita/berita/arsip-berita/' and DATE_FORMAT(FROM_UNIXTIME(`creationDate`), '%Y') = ".$create." ORDER BY creationDate DESC limit 3";
		}
		else
		{
			$sql .= "where path='/berita/berita/arsip-berita/' ORDER BY creationDate DESC limit 3";
		}
		
		
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