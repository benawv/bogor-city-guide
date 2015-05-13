<?php

class AgentController extends Website_Controller_Action {
	
	public function mapAgentAction() {
		$k = $_POST["kordinat"];
		$kordinat = explode("#",$k);
		
		// wilayah__id
		$kondisi = array("condition" => "(titikKordinat__latitude >".$kordinat[0]." AND titikKordinat__latitude <".$kordinat[2].")  AND (titikKordinat__longitude >".$kordinat[1]." AND titikKordinat__longitude <".$kordinat[3].")");
		$entries = Object_AgentLocatorKantor::getList($kondisi);
		
		$return = array();
		foreach($entries as $entry)
		{
			$temp = array(
						  "titikKordinat" => array("latitude" => $entry->titikKordinat->latitude, "longitude" => $entry->titikKordinat->longitude ),
						  "namaLokasi" => $entry->namaLokasi,
						  "kodeLokasi" => $entry->kodeLokasi,
						  "alamat1" => $entry->alamat1,
						  "alamat2" => $entry->alamat2,
						  "alamat3" => $entry->alamat3,
						  "kodeAreaTelepon" => $entry->kodeAreaTelepon,
						  "nomorTelepon" => $entry->nomorTelepon,
						  "kodeAreaFax" => $entry->kodeAreaFax,
						  "o_key" => $entry->o_key,
						  "o_id" => $entry->o_id
				);

			array_push($return, $temp);			
		}
		
		echo json_encode($return);
	}
	public function detailKantorAction(){
		$this->enableLayout();
		$key = $this->_getParam('text');
		$id = $this->_getParam('id');
		
		//$kantor = Object_Abstract::getById($id);
		$kondisi1 = array("condition" => "o_id = '".$id."'",
						 "limit" => 1);
		$kantor = Object_AgentLocatorKantor::getList($kondisi1);
		
		$kondisi2 = array("condition" => "kantor = ',".$id.",'",
						 "limit" => 6);
		$agent = Object_AgentLocatorData::getList($kondisi2);
		if(count($kantor) == 0)
		{
			$this->redirect("/");
		}
		
		$this->view->kantor = $kantor;
		$this->view->agent = $agent;
	}
}
