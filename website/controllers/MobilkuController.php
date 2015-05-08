<?php

class MobilkuController extends Website_Controller_Action {
	
	public function defaultAction(){
		
		
	}
	
	public function saveInsuraceAction(){
		
		$th=$_POST['tahun_pembuatan'];
		$harga=$_POST['unfnum'];
		$merk=$_POST['merk'];
		$model=$_POST['model'];
		$regno=$_POST['regno'];
		$period=$_POST['periode'];
		$email=$_POST['email'];
		$nama=$_POST['nama'];
		$telp=$_POST['telp'];
		$radio=$_POST['radio'];
		$hargaKonv=$_POST['hargaKonv'];
		$merk=$_POST['merk_html'];
		$modelfe=$_POST['model_html'];
		$date_tglPeriod= new Pimcore_Date($period);

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
		//$radio1='comprehensive';
		//$period='1425315600';
		//$harga='1000600';
		
		if($radio == 'tlo'){
		    $radiof = 'Total Loss Only';
		}
		else{
		    $radiof = 'Komprehensif';
		}
        
        //throw new Exception("Please re-check your entries");
        
        //try{
		$getId=Object_Abstract::getByPath('/kalkulator/personal-lines');//get folder id
		$entries = Object_Abstract::getById($model);
		print_r($entries);
		$register = new Object_MobilPersonalLines();
		$register->setyear($th);
		$register->setprice($hargaKonv);
		$register->setmodel($entries);		
		$register->setregistrationno($regno);
		$register->setstartperiode($date_tglPeriod);
		$register->setemail($email);
		$register->setnama($nama);
		$register->settelp($telp);
		$register->setinsurancetype($radio);
		$register->setKey(strtolower($namakey));
		$register->setO_parentId($getId->o_id);
		$register->setIndex(0);
		$register->setPublished(1);
		$register->save();
       // }
       // catch(Exception $e){
        //    echo 'Message: ' .$e->getMessage();
        //}
                try{
                $document = '/email/email-mobilku';
                $params = array('year' => $th,
                                'price' => $harga,
                                'model' => $modelfe,
                                'registrationnp' => $regno,
                                'periode' => $period,
                                'email' => $email,
                                'nama' => $nama,
                                'telp' => $telp,
                                'insurancetype' => $radiof
                                );

                $mail = new Pimcore_Mail();
                $mail->setSubject("Konfirmasi Asuransi Mobil");
                $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
                $mail->setDocument($document);
                $mail->setParams($params);
                $mail->addTo($email);
                $mail->send();
		}
		catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
	}
    
	public function sendemailAction(){
	    
		//Empty Fucntion
		
		
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
	
	public function mobilkucalcAction(){
		
		$th=$_POST['tahun_pembuatan'];
		$harga=$_POST['hargaKonv'];
		$merk=$_POST['merk'];
		$model=$_POST['model'];
		$regno=$_POST['regno'];
		$period=$_POST['periode'];
		$email=$_POST['email'];
		$nama=$_POST['nama'];
		$telp=$_POST['telp'];
		$radio=$_POST['radio'];
		$hargaKonv=$_POST['hargaKonv'];
		$merk=$_POST['merk_html'];
		$modelfe=$_POST['model_html'];
		$ratetype=$_POST['ratetype'];
		$date_tglPeriod= new Pimcore_Date($period);
		$pakettype;
		
		$age=(date("Y") - $th);
		
		if($radio=='comprehensive'){
			$pakettype=1;
		}else{
			$pakettype=2;
		}
		
		$getModelMap = new Object_MobilModel_List(); 
		$getModelMap->setCondition("oo_id =".$model);
		
		foreach($getModelMap as $items){
			$modelmap_id=$items->modelmaps->o_id;
		}

		$paket=1;
		$getTloRate=new Object_MobilRate_List();
		$getTloRate->setCondition("pakettypeS=$paket AND prices=$hargaKonv AND retetype=$pakettype AND age=$age and makemodel__id=$modelmap_id");
		
		foreach($getTloRate as $items){
			$rates= $items->rate;
		}
		print_r($rates);
		echo "test";
		die();
		
	}
	
}