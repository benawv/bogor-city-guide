<?php 

class Object_Products extends Object_Concrete {

public $o_classId = 9;
public $o_className = "products";
public $judul;
public $image;
public $kategori;
public $deskripsi;


/**
* @param array $values
* @return Object_Products
*/
public static function create($values = array()) {
	$object = new self();
	$object->setValues($values);
	return $object;
}

/**
* @return string
*/
public function getJudul () {
	$preValue = $this->preGetValue("judul"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->judul;
	 return $data;
}

/**
* @param string $judul
* @return void
*/
public function setJudul ($judul) {
	$this->judul = $judul;
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
* @return Document_Page | Document_Snippet | Document | Asset | Object_Abstract
*/
public function getKategori () {
	$preValue = $this->preGetValue("kategori"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("kategori")->preGetData($this);
	 return $data;
}

/**
* @param Document_Page | Document_Snippet | Document | Asset | Object_Abstract $kategori
* @return void
*/
public function setKategori ($kategori) {
	$this->kategori = $this->getClass()->getFieldDefinition("kategori")->preSetData($this, $kategori);
	return $this;
}

/**
* @return string
*/
public function getDeskripsi () {
	$preValue = $this->preGetValue("deskripsi"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("deskripsi")->preGetData($this);
	 return $data;
}

/**
* @param string $deskripsi
* @return void
*/
public function setDeskripsi ($deskripsi) {
	$this->deskripsi = $deskripsi;
	return $this;
}

protected static $_relationFields = array (
  'kategori' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

