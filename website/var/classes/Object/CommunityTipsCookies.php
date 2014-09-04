<?php 

class Object_CommunityTipsCookies extends Object_Concrete {

public $o_classId = 14;
public $o_className = "communityTipsCookies";
public $cookies;
public $idArticle;


/**
* @param array $values
* @return Object_CommunityTipsCookies
*/
public static function create($values = array()) {
	$object = new self();
	$object->setValues($values);
	return $object;
}

/**
* @return string
*/
public function getCookies () {
	$preValue = $this->preGetValue("cookies"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->cookies;
	 return $data;
}

/**
* @param string $cookies
* @return void
*/
public function setCookies ($cookies) {
	$this->cookies = $cookies;
	return $this;
}

/**
* @return string
*/
public function getIdArticle () {
	$preValue = $this->preGetValue("idArticle"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->idArticle;
	 return $data;
}

/**
* @param string $idArticle
* @return void
*/
public function setIdArticle ($idArticle) {
	$this->idArticle = $idArticle;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

