<?php

class AgentController extends Website_Controller_Action {
	
	public function mapAgentAction() {
		$k = $_POST["kordinat"];
		$kordinat = explode("#",$k);
		
		// wilayah__id
		$kondisi = array("condition" => "(titikKordinat__latitude >".$kordinat[0]." AND titikKordinat__latitude <".$kordinat[2].")  AND (titikKordinat__longitude >".$kordinat[1]." AND titikKordinat__longitude <".$kordinat[3].")");
		$entries = Object_AgentLocatorKantor::getList($kondisi);
		
		echo json_encode($entries);
	}
	public function detailKantorAction(){
		$this->enableLayout();
		$key = $this->_getParam('text');
		$id = $this->_getParam('id');
		
		$kantor = Object_Abstract::getById($id);
		
		$kondisi = array("kantor" => ",".$id.",", "limit" => 6);
		$agent = Object_AgentLocatorData::getList($kondisi);
		
		$this->view->kantor = $kantor;
		$this->view->agent = $agent;
	}
}
