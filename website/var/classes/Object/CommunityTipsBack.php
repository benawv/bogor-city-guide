<?php 

class Object_CommunityTipsBack extends Object_Concrete {

public $o_classId = 11;
public $o_className = "communityTipsBack";
public $image;


/**
* @param array $values
* @return Object_CommunityTipsBack
*/
public static function create($values = array()) {
	$object = new self();
	$object->setValues($values);
	return $object;
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

