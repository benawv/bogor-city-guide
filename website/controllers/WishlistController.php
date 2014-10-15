<?php

class WishlistController extends Website_Controller_Action {
	
	public function saveWishlistAction()
	{
		$cookies = $_POST["cookies"];
		$produk = $_POST["produk"];
		
		$entries = new Object_Wishlist_List();
		$entries->setCondition("idCookies = '".$cookies."' and produk = '".$produk."'");
		
		if(count($entries)==0)
		{
			$cookie = new Object_Wishlist();
			$cookie->setIdCookies($cookies);
			$cookie->setProduk($produk);
			$cookie->setO_key('wishlist_'.$cookies.strtotime(date("YmdHis")));
			$cookie->setO_parentId('786');
			$cookie->setO_index(0);
			$cookie->setO_published(1);
			$cookie->save();
			
			$entri = new Object_Wishlist_List();
			$entri->setCondition("idCookies = '".$cookies."'");
			$x = 1;
			$z = array();
			$z[0] = 'saved';
			foreach ($entri as $row)
			{
				$z[$x] =  $row->getProduk();
				$x++;
			}
			echo json_encode($z);
		}
		else
		{
			$entri = new Object_Wishlist_List();
			$entri->setCondition("idCookies = '".$cookies."'");
			$x = 1;
			$z = array();
			$z[0] = 'existing';
			foreach ($entri as $row)
			{
				$z[$x] =  $row->getProduk();
				$x++;
			}
			echo json_encode($z);
			
			//echo json_encode(array('status0'=>'existing'));
		}
	}
	
	public function checkoutAction()
	{
		$this->enableLayout();
		$cookiesId = $_COOKIE["user"];
		$entries = new Object_Wishlist_List();
		$entries->setCondition("idCookies = ".$cookiesId);
		
		$this->view->fetchCookies = $entries;
	}
	
	public function deleteWishlistAction()
	{
		$cookies = $_POST["cookies"];
		$produk = $_POST["produk"];
		
		/* $entries = new Object_Wishlist();
		$entries->setCondition("idCookies = '".$cookies."' and produk = '".$produk."'");
		$entries->delete(); */
	}
	
	public function homeAction () {
		$this->enableLayout();
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT doc.id, doc_e.data from documents as doc inner join documents_elements as doc_e on doc.id=doc_e.documentId
				where doc.path='/berita/berita/arsip-berita/' and doc.published=1 and doc_e.type='date'
				ORDER BY doc_e.data DESC limit 3"; //or whatever you need to do.
		/* echo "<pre>";
		print_r($db->fetchAll($sql));
		die(); */
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
			$sql .= "where doc.path='/berita/berita/arsip-berita/' and DATE_FORMAT(FROM_UNIXTIME(doc_e.data), '%Y') = ".$create." and doc.published=1 and doc_e.type='date' ORDER BY doc_e.data DESC limit 3 offset ".$offset;
		}
		else 
		{
			$sql .= "where doc.path='/berita/berita/arsip-berita/' and doc.published=1 and doc_e.type='date' ORDER BY doc_e.data DESC limit 3 offset ".$offset;
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
			$sql .= "where doc.path='/berita/berita/arsip-berita/' and DATE_FORMAT(FROM_UNIXTIME(doc_e.data), '%Y') = ".$create." and doc.published=1 and doc_e.type='date' ORDER BY doc_e.data DESC limit 3";
		}
		else
		{
			$sql .= "where doc.path='/berita/berita/arsip-berita/' and doc.published=1 and doc_e.type='date' ORDER BY doc_e.data DESC limit 3";
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