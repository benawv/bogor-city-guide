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
}
