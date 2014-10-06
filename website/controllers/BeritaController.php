<?php

class BeritaController extends Website_Controller_Action {
	
	public function homeAction () {
		$this->enableLayout();
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT id from documents where path='/berita/list-berita/arsip-berita/'"; //or whatever you need to do.
		$this->view->fetchBerita = $db->fetchAll($sql);
	}
}