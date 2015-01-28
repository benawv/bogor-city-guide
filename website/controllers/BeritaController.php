<?php

class BeritaController extends Website_Controller_Action {
	
	public function homeAction () {
		$this->enableLayout();
		$db = Pimcore_Resource_Mysql::get();
		//$list = new Document_List();
		//$list->setCondition("path LIKE '%/arsip-berita/'");
		//$list->setOrderKey("tanggal-berita");
		//$list->setOrder("desc");
		$sql = "SELECT doc.id, doc_e.data from documents as doc inner join documents_elements as doc_e on doc.id=doc_e.documentId
				where doc.path LIKE '%/arsip-berita/' and doc.published=1 and doc_e.type='date'
				ORDER BY doc_e.data DESC limit 3"; //or whatever you need to do.
		/* echo "<pre>";
		print_r($db->fetchAll($sql));
		die(); */
		//echo "<pre>";
		//foreach($list as $v)
		//{
		//	print_r($v);
		//}
		//die();
		$this->view->fetchBerita = $db->fetchAll($sql);
	}
	
	public function loadMoreAction()
	{
		$offset = $_POST["offset"];
		$create = $_POST["created_at"];
		
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT doc.id, doc_e.data from documents as doc inner join documents_elements as doc_e on doc.id=doc_e.documentId "; //or whatever you need to do.
		if($create!='')
		{
			$sql .= "where doc.path LIKE '%/arsip-berita/' and DATE_FORMAT(FROM_UNIXTIME(doc_e.data), '%Y') = ".$create." and doc.published=1 and doc_e.type='date' ORDER BY doc_e.data DESC limit 3 offset ".$offset;
		}
		else 
		{
			$sql .= "where doc.path LIKE '%/arsip-berita/' and doc.published=1 and doc_e.type='date' ORDER BY doc_e.data DESC limit 3 offset ".$offset;
		}
		
		$id = $db->fetchAll($sql);
		
		$entries = array();
		for ($x = 0; $x < count($id) ; $x++)
		{
			$list = new Document_List();
			$list->setCondition("id=".$id[$x]['id']);
			$entries[$x] = $list->load();
			$entries[$x]["tgl"] = gmdate("d-m-Y",$id[$x]['data']);
		}
		echo json_encode($entries);
	}
	
	public function filterTahunAction()
	{
		$create = $_POST["created_at"];
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT doc.id, doc_e.data from documents as doc inner join documents_elements as doc_e on doc.id=doc_e.documentId ";
		if($create!='')
		{
			$sql .= "where doc.path LIKE '%/arsip-berita/' and DATE_FORMAT(FROM_UNIXTIME(doc_e.data), '%Y') = ".$create." and doc.published=1 and doc_e.type='date' ORDER BY doc_e.data DESC limit 3";
		}
		else
		{
			$sql .= "where doc.path LIKE '%/arsip-berita/' and doc.published=1 and doc_e.type='date' ORDER BY doc_e.data DESC limit 3";
		}
		
		
		$id = $db->fetchAll($sql);
		$entries = array();
		for ($x = 0; $x < count($id) ; $x++)
		{
			$list = new Document_List();
			$list->setCondition("id=".$id[$x]['id']);
			$entries[$x] = $list->load();
			$entries[$x]["tgl"] = gmdate("d-m-Y",$id[$x]['data']);
		}
		echo json_encode($entries);
	}
}