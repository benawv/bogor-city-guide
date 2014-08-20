<?php 

class Object_CommunityTipsCategory extends Object_Concrete {

public $o_classId = 12;
public $o_className = "communityTipsCategory";
public $titleCategory;
public $imageCategory;


/**
* @param array $values
* @return Object_CommunityTipsCategory
*/
public static function create($values = array()) {
	$object = new self();
	$object->setValues($values);
	return $object;
}

/**
* @return string
*/
public function getTitleCategory () {
	$preValue = $this->preGetValue("titleCategory"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->titleCategory;
	 return $data;
}

/**
* @param string $titleCategory
* @return void
*/
public function setTitleCategory ($titleCategory) {
	$this->titleCategory = $titleCategory;
	return $this;
}

/**
* @return Asset_Image
*/
public function getImageCategory () {
	$preValue = $this->preGetValue("imageCategory"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->imageCategory;
	 return $data;
}

/**
* @param Asset_Image $imageCategory
* @return void
*/
public function setImageCategory ($imageCategory) {
	$this->imageCategory = $imageCategory;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

