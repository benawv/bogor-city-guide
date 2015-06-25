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
			$setcondition="brandname = ',".$brand.",'";
		}else{
			$setcondition="oo_id = ".$brand;
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
    
    public function getRegistrationNumberAction(){
        $res=$_POST['res'];
	$noreg;
        $entri = new Object_MobilRegion_List();
	$entri->setCondition("registrationletter = '".$res."'");

		foreach ($entri as $row){
			$noreg=$row->regioncode[0]->regionid;		
			
		
		}
	echo $noreg;		
	die();
        
    }
	
	public function mobilkucalcAction(){
		
		$th=$_POST['tahun_pembuatan'];
		$harga=$_POST['hargaKonv'];
		$model=$_POST['model'];
		$period=$_POST['periode'];
		$radio=$_POST['radio'];
		$hargaKonv=$_POST['hargaKonv'];
		$wilayah=$_POST['wilayah'];
		$ratetype=$_POST['ratetype'];
		$date_tglPeriod= new Pimcore_Date($period);
		$pakettype=$_POST['pakettype'];
		
		$age=(date("Y") - $th);
		if($radio=='comprehensive'){
			$paket=1;
		}else{
			$paket=2;
		}

		$getModelMap = new Object_MobilModel_List();
		$getModelMap->setCondition('Oo_id ="'.$model.'"');
		foreach($getModelMap as $items){
			$modelmap_id=$items->modelmaps->o_id;
		}
		
		$getRegId=new Object_MobilRegionCode_List();
		$getRegId->setCondition("regionid =".$wilayah);
		foreach($getRegId as $item){
			$getRegId_id=$item->o_id;
		} 
	
		if($harga<=125000000){
			$condition_price="prices<=125000000";
		}elseif($harga>=125000001 and $harga <=200000000){
			$condition_price="(prices>=125000001 and prices<=200000000)";
		}elseif($harga>=200000001 and $harga <=400000000){
			$condition_price="(prices>=125000001 and prices<=200000000)";
		}elseif($harga>=400000001 and $harga <=800000000){
			$condition_price="(prices>=400000001 and prices<=800000000)";
		}else{
			$condition_price="prices>800000000";
		}
		
		$paket=1;		
		$condition="pakettype=$pakettype AND $condition_price AND retetype=$paket AND region__id=$getRegId_id AND age=$age and makemodel__id=$modelmap_id";
		$getTloRate=new Object_MobilRate_List();
		$getTloRate->setCondition($condition);
		foreach($getTloRate as $items){
			$rates= $items->rate;
		}
		print_r($rates);
		die();
	}
	
}