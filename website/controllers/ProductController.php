<?php

class ProductController extends Website_Controller_Action {
	
	public function indexAction() {
	
		$entries = new Object_ProductCategory_List();
		
		$this->view->entries = $entries;
		
		$this->view->products = $this->productsQuery();
		
		$this->enableLayout();
	}
	
	public function productsAction() {
		$db = Pimcore_Resource_Mysql::get();

		/** get the object class id if you don't want to hard code it**/
		$class = Object_Class::getByName("ProductCategory"); //company is the name of the custom Class I created
		if(!$class instanceof Object_Class) { throw new SomeErrorException; }
		$table_id = $class->getId();
		
		$sql = "SELECT obj9.*, obj10.title, assets.path, assets.filename
				FROM allianzcms.object_9 as obj9
				LEFT JOIN allianzcms.object_10 as obj10 ON (obj9.kategori__id = obj10.oo_id)
				LEFT JOIN allianzcms.assets as assets ON (obj9.image = assets.id);"; //or whatever you need to do.
		
		$companyIds = $db->fetchAll($sql);
		
		/** do the rest of your stuff here **/
		echo "<pre>";
		die(print_r($companyIds));
	}
	
	private function productsQuery()
	{
		$db = Pimcore_Resource_Mysql::get();

		/** get the object class id if you don't want to hard code it**/
		$class = Object_Class::getByName("ProductCategory"); //company is the name of the custom Class I created
		if(!$class instanceof Object_Class) { throw new SomeErrorException; }
		$table_id = $class->getId();
		
		$sql = "SELECT obj9.*, obj10.title
				FROM allianzcms.object_9 as obj9
				LEFT JOIN allianzcms.object_10 as obj10 ON (obj9.kategori__id = obj10.oo_id);"; //or whatever you need to do.
		
		$products = $db->fetchAll($sql);
		
		return $products;
	}
}
