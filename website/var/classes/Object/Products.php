<?php 

class Object_Products extends Object_Concrete {

public $o_classId = 9;
public $o_className = "products";
public $judul;
public $image;
public $kategori;
public $keunggulan;
public $detilProduk;
public $caraKlaim;
public $faq;
public $brosur;


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
public function getKeunggulan () {
	$preValue = $this->preGetValue("keunggulan"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("keunggulan")->preGetData($this);
	 return $data;
}

/**
* @param string $keunggulan
* @return void
*/
public function setKeunggulan ($keunggulan) {
	$this->keunggulan = $keunggulan;
	return $this;
}

/**
* @return string
*/
public function getDetilProduk () {
	$preValue = $this->preGetValue("detilProduk"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("detilProduk")->preGetData($this);
	 return $data;
}

/**
* @param string $detilProduk
* @return void
*/
public function setDetilProduk ($detilProduk) {
	$this->detilProduk = $detilProduk;
	return $this;
}

/**
* @return string
*/
public function getCaraKlaim () {
	$preValue = $this->preGetValue("caraKlaim"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("caraKlaim")->preGetData($this);
	 return $data;
}

/**
* @param string $caraKlaim
* @return void
*/
public function setCaraKlaim ($caraKlaim) {
	$this->caraKlaim = $caraKlaim;
	return $this;
}

/**
* @return string
*/
public function getFaq () {
	$preValue = $this->preGetValue("faq"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("faq")->preGetData($this);
	 return $data;
}

/**
* @param string $faq
* @return void
*/
public function setFaq ($faq) {
	$this->faq = $faq;
	return $this;
}

/**
* @return string
*/
public function getBrosur () {
	$preValue = $this->preGetValue("brosur"); 
	if($preValue !== null && !Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("brosur")->preGetData($this);
	 return $data;
}

/**
* @param string $brosur
* @return void
*/
public function setBrosur ($brosur) {
	$this->brosur = $brosur;
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

