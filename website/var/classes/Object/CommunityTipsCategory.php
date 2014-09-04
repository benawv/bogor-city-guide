<?php 

class Object_CommunityTipsCategory extends Object_Concrete {

public $o_classId = 12;
public $o_className = "communityTipsCategory";
public $titleCategory;
public $summary;
public $colorPicker;
public $hexaColor;


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
* @return string
*/
public function getSummary () {
	$preValue = $this->preGetValue("summary"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("summary")->preGetData($this);
	 return $data;
}

/**
* @param string $summary
* @return void
*/
public function setSummary ($summary) {
	$this->summary = $summary;
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
public function getHexaColor () {
	$preValue = $this->preGetValue("hexaColor"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->hexaColor;
	 return $data;
}

/**
* @param string $hexaColor
* @return void
*/
public function setHexaColor ($hexaColor) {
	$this->hexaColor = $hexaColor;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

