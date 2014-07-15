<?php 

class Object_CommunityTips extends Object_Concrete {

public $o_classId = 6;
public $o_className = "communityTips";
public $title;
public $image;
public $description;
public $link;
public $category;
public $date;


/**
* @param array $values
* @return Object_CommunityTips
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

/**
* @return string
*/
public function getDescription () {
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("description")->preGetData($this);
	 return $data;
}

/**
* @param string $description
* @return void
*/
public function setDescription ($description) {
	$this->description = $description;
	return $this;
}

/**
* @return Object_Data_Link
*/
public function getLink () {
	$preValue = $this->preGetValue("link"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->link;
	 return $data;
}

/**
* @param Object_Data_Link $link
* @return void
*/
public function setLink ($link) {
	$this->link = $link;
	return $this;
}

/**
* @return string
*/
public function getCategory () {
	$preValue = $this->preGetValue("category"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->category;
	 return $data;
}

/**
* @param string $category
* @return void
*/
public function setCategory ($category) {
	$this->category = $category;
	return $this;
}

/**
* @return Pimcore_Date
*/
public function getDate () {
	$preValue = $this->preGetValue("date"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->date;
	 return $data;
}

/**
* @param Pimcore_Date $date
* @return void
*/
public function setDate ($date) {
	$this->date = $date;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

