<?php

class DefaultController extends Website_Controller_Action {
	
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
	
	public function mapAction() {
		$kantor = $_POST["kantor"];
		$wil = explode(",",$_POST["wilayah"]);
		$wilayah = $wil[3];
		
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
}
