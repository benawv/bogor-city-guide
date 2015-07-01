<?php

class DefaultController extends Website_Controller_Action {
	
	public function init () {
 
		parent::init();

		$language_path =  explode("/", $this->document->getFullPath())[1];
		if(empty($_COOKIE['languagecode']) || $language_path != empty($_COOKIE['languagecode'])){
			$where = "country_id LIKE '".$language_path."'";
			$language = new Object_Languages_List();
			$language->setCondition($where);
			$language->setLimit(1);
			foreach ($language as $lang) {
				$_COOKIE['languagecode'] =  $lang->country_id;
				$_COOKIE['languageid'] =  $lang->o_id;
			}
			if( $language_path == "id"){
				$locale = new Zend_Locale('id');
				Zend_Registry::set('Zend_Locale', $locale);	
			}else{
				$locale = new Zend_Locale('en_US');
				Zend_Registry::set('Zend_Locale', $locale);	
			}

		}elseif( $language_path == "id" && $_COOKIE['languagecode'] == "id" ){
			$locale = new Zend_Locale('id');
			Zend_Registry::set('Zend_Locale', $locale);	
		}else{
			$locale = new Zend_Locale('en_US');
			Zend_Registry::set('Zend_Locale', $locale);	
		}
	}
	
	public function defaultAction () {
		
		$entries = Object_MarketingOffice::getList();
		
		$array;
		$i = 0;
		foreach($entries as $entry)
		{
			$array[$i++] = $entry;
		}	
				
		$this->view->offices = json_encode($array);
		
		$this->enableLayout();
		
	}
	
	public function indexAction() {
	}
	
    public function landingAction() {
        
        $this->enableLayout();
	}
    
	public function datanabAction() {
		$fundtype = $_POST["fundName"];
		//$date1 = date("Y-n-d",strtotime(date("Y-n-d") . "+1 days"));
		//$month3 = date('Y-n-d',strtotime($date1 . "-3 months"));
		$date1 = date("Y-n-d",strtotime(date("Y-n-d")));
		$month3 = date('Y-n-d',strtotime($date1));
		$date = explode("-",$month3);
		
		$postdata = http_build_query(
			array(
				'day' => $date[2],
				'month' => $date[1],
				'year' => $date[0],
				'fundtype' => $fundtype
			)
		);
		    
		$opts = array('http' =>
		    array(
			'method'  => 'POST',
			'header'  => 'Content-type: application/x-www-form-urlencoded',
			'content' => $postdata
		    )
		);
		
		$context  = stream_context_create($opts);
		
		$result = file_get_contents('http://investment.allianz.co.id/last3month', false, $context);
		//$data = json_decode($result);
		echo $result;
	}
	
	public function mapAction() {
		$k = $_POST["kantor"];
		$w = $_POST["wilayah"];
		
		if($k != "" && $w != "")
		{
			$kantor = $k;
			$wil = explode(",",$w);
			$wilayah = $wil[3];
		}
		else{
			$kantor = "";
			$wilayah = "";
		}
		// wilayah__id
		if($kantor != "" && $wilayah != ""){
			$kondisi = array("condition" => "(tipe2__id=".$kantor." AND wilayah2__id=".$wilayah.")  OR o_key='allianz-tower'");
			$entries = Object_MarketingOffice::getList($kondisi);
		}
		elseif($kantor != "" && $wilayah == ""){
			$kondisi = array("condition" => "tipe2__id=".$kantor." OR o_key='allianz-tower'");
			$entries = Object_MarketingOffice::getList($kondisi);
		}
		elseif($kantor == "" && $wilayah != ""){
			$kondisi = array("condition" => "wilayah2__id=".$wilayah." OR o_key='allianz-tower'");
			$entries = Object_MarketingOffice::getList($kondisi);
		}
		else{
			$entries = Object_MarketingOffice::getList();
		}
		//$entries->setCondition("tipe='".$data."'");
		
		echo json_encode($entries);
	}
	
	public function routerAction() {
		$action = $this->_getParam('actionname');
		$controller = $this->_getParam('controllername');
		
		$this->_forward($action, $controller, $this->_getParam("module"), $this->_getAllParams());
	}
	
    public function loginAsnCenterAction(){
		
		$session = new Zend_Session_Namespace('loginasn');
		//session_start();
		$pass = $_POST["password"];
		$user = $_POST["login_username"];
		
		$checkUser = new Object_DataLoginAsn_List();
		$checkUser->setCondition("`username` = '".$user."' AND `password` = '".$pass."'");

		if(count($checkUser) == 1)
		{
				$session->verified = 'true';
				//die(print_r($session->verified));
				//echo $session->verified;
				//$_SESSION["loginCenter"] = "Yes";
				$this->redirect("/asn/asn-multimedia-center");
		}
		else{
				//$_SESSION["loginCenter"] = "No";
				Zend_Session::namespaceUnset('loginasn');
				$this->redirect("/asn/login-asn-center");
		}
		
		//echo $_SESSION["loginCenter"];
		//die();
	}
}
