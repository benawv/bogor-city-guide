<?php 

class Object_MarketingOffice extends Object_Concrete {

public $o_classId = 7;
public $o_className = "marketingOffice";
public $latitude;
public $longitude;
public $image;
public $officeName;
public $subName;
public $alamat;
public $phone;
public $fax;
public $tipe;
public $groups;


/**
* @param array $values
* @return Object_MarketingOffice
*/
public static function create($values = array()) {
	$object = new self();
	$object->setValues($values);
	return $object;
}

/**
* @return string
*/
public function getLatitude () {
	$preValue = $this->preGetValue("latitude"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->latitude;
	 return $data;
}

/**
* @param string $latitude
* @return void
*/
public function setLatitude ($latitude) {
	$this->latitude = $latitude;
	return $this;
}

/**
* @return string
*/
public function getLongitude () {
	$preValue = $this->preGetValue("longitude"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->longitude;
	 return $data;
}

/**
* @param string $longitude
* @return void
*/
public function setLongitude ($longitude) {
	$this->longitude = $longitude;
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
public function getOfficeName () {
	$preValue = $this->preGetValue("officeName"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->officeName;
	 return $data;
}

/**
* @param string $officeName
* @return void
*/
public function setOfficeName ($officeName) {
	$this->officeName = $officeName;
	return $this;
}

/**
* @return string
*/
public function getSubName () {
	$preValue = $this->preGetValue("subName"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->subName;
	 return $data;
}

/**
* @param string $subName
* @return void
*/
public function setSubName ($subName) {
	$this->subName = $subName;
	return $this;
}

/**
* @return string
*/
public function getAlamat () {
	$preValue = $this->preGetValue("alamat"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->alamat;
	 return $data;
}

/**
* @param string $alamat
* @return void
*/
public function setAlamat ($alamat) {
	$this->alamat = $alamat;
	return $this;
}

/**
* @return string
*/
public function getPhone () {
	$preValue = $this->preGetValue("phone"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->phone;
	 return $data;
}

/**
* @param string $phone
* @return void
*/
public function setPhone ($phone) {
	$this->phone = $phone;
	return $this;
}

/**
* @return string
*/
public function getFax () {
	$preValue = $this->preGetValue("fax"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->fax;
	 return $data;
}

/**
* @param string $fax
* @return void
*/
public function setFax ($fax) {
	$this->fax = $fax;
	return $this;
}

/**
* @return string
*/
public function getTipe () {
	$preValue = $this->preGetValue("tipe"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->tipe;
	 return $data;
}

/**
* @param string $tipe
* @return void
*/
public function setTipe ($tipe) {
	$this->tipe = $tipe;
	return $this;
}

/**
* @return string
*/
public function getGroups () {
	$preValue = $this->preGetValue("groups"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->groups;
	 return $data;
}

/**
* @param string $groups
* @return void
*/
public function setGroups ($groups) {
	$this->groups = $groups;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

