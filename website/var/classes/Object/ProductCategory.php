<?php 

class Object_ProductCategory extends Object_Concrete {

public $o_classId = 10;
public $o_className = "productCategory";
public $title;
public $image;


/**
* @param array $values
* @return Object_ProductCategory
*/
public static function create($values = array()) {
	$object = new self();
	$object->setValues($values);
	return $object;
}

/**
* @return string
*/
public function getTitle () {
	$preValue = $this->preGetValue("title"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->title;
	 return $data;
}

/**
* @param string $title
* @return void
*/
public function setTitle ($title) {
	$this->title = $title;
	return $this;
}

/**
* @return Asset_Image
*/
public function getImage () {
	$preValue = $this->preGetValue("image"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->image;
	 return $data;
}

/**
* @param Asset_Image $image
* @return void
*/
public function setImage ($image) {
	$this->image = $image;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

