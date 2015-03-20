<?php

class MobilkuController extends Website_Controller_Action {
	
	public function defaultAction(){
		
		
	}
	
	public function saveInsuraceAction(){
		
		$th=$_POST['tahun_pembuatan'];
		$harga=$_POST['harga'];
		$merk=$_POST['merk'];
		$model=$_POST['model'];
		$regno=$_POST['regno'];
		$period=$_POST['periode'];
		$email=$_POST['email'];
		$radio1=$_POST['redio1'];
		$radio2=$_POST['redio2'];

		echo $th.'-'.$harga.'-'.$merk.'-'.$model.'-'.$regno.'-'.$period.'-'.$email.'-'.$radio1.'-'.$radio2;
			
		die();
	}
	
	public function dataMobileAction(){
		
		$brand=$_POST['brand'];
		$attrs=$_POST['attrs'];
		
		if($attrs==1){
			$setcondition="brandname LIKE '%".$brand."%'";
		}else{
			$setcondition="oo_id =".$brand;
		//die($setcondition);
		}
		
		
		$merk = new Object_MobilModel_List();
		$merk->setCondition($setcondition);
		
		$i=0;
		$data_mobil['type']=$attrs;
		foreach($merk as $items){
			$data_mobil['branname'][$i]=$items->brandname[0]->branname;
			$data_mobil['model'][$i]=$items->model;
			$data_mobil['model_name'][$i]=$items->brandname[0]->branname." ".$items->model;
			$data_mobil['model_o_id'][$i]=$items->o_id;
			$data_mobil['bodytype'][$i]=$items->bodytype;
			$data_mobil['seatingcapacity'][$i]=$items->seatingcapacity;			
		$i++;
		}
		echo json_encode($data_mobil);
		die();
	}
	
}