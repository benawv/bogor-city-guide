<?php

class MobilkuController extends Website_Controller_Action {
	
	public function defaultAction(){
		
		
	}
	
	public function saveInsuraceAction(){
		
		$th=$_POST['tahun_pembuatan'];
		//$harga=$_POST['harga'];
		$merk=$_POST['merk'];
		$model=$_POST['model'];
		$regno=$_POST['regno'];
		$period=$_POST['periode'];
		$email=$_POST['email'];
		$radio1=$_POST['redio1'];
		$radio2=$_POST['redio2'];
		
		
		//$th=$_GET['tahun_pembuatan'];
		//$harga=$_GET['harga'];
		//$merk=$_GET['merk'];
		//$model=$_GET['model'];
		//$regno=$_GET['regno'];
		//$period=$_GET['periode'];
		//$email=$_GET['email'];
		//$radio1=$_GET['redio1'];
		//$radio2=$_GET['redio2'];
		//echo $th.'-'.$harga.'-'.$merk.'-'.$model.'-'.$regno.'-'.$period.'-'.$email.'-'.$radio1.'-'.$radio2;
		
		$namakey = str_replace(' ', '_', $merk)."_".strtotime(date("YmdHis"));
		$radio1='comprehensive';
		$period='1425315600';
		$harga='1000600';
		
		
		$entries = Object_Abstract::getById(1409);
		$register = new Object_MobilPersonalLines();
		$register->setyear($th);
		$register->setprice($harga);
		$register->setmodel($entries);		
		$register->setregistrationno($regno);
		$register->setstartperiode($period);
		$register->setemail($email);
		$register->setinsurancetype($radio1);
		$register->setKey(strtolower($namakey));
		$register->setO_parentId('1407');
		$register->setIndex(0);
		$register->setPublished(1);
		$register->save();
		
//		$emailDocument = '/email/register';
//		$params = array('name' => $name,
//				'hometown' => $home,
//				'birth' => $birth,
//				'address' => $address,
//				'city' => $city,
//				'email' => $email,
//				'category' => $category,
//				'attach' => $assetFolder.'/'.$files_
//                );
		
		$mail = new Pimcore_Mail();
		$mail->setSubject("test");
		$mail->setFrom('noreply@allianz.co.id','Fitrazh');
		$mail->addTo($email);
		$mail->setBodyText("This is just plain text");
		//$mail->setDocument($emailDocument);
		//$mail->setParams($params);
		$mail->send();
		print_r($mail);
		
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