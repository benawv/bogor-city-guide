<?php 

class Object_CommunityTipsCategory extends Object_Concrete {

public $o_classId = 12;
public $o_className = "communityTipsCategory";
public $titleCategory;
public $imageCategory;
public $colorPicker;
public $hexacolor;


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

/**
* @return string
*/
public function getColorPicker () {
	$preValue = $this->preGetValue("colorPicker"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->colorPicker;
	 return $data;
}

/**
* @param string $colorPicker
* @return void
*/
public function setColorPicker ($colorPicker) {
	$this->colorPicker = $colorPicker;
	return $this;
}

/**
* @return string
*/
public function getHexacolor () {
	$preValue = $this->preGetValue("hexacolor"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->hexacolor;
	 return $data;
}

/**
* @param string $hexacolor
* @return void
*/
public function setHexacolor ($hexacolor) {
	$this->hexacolor = $hexacolor;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

