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

		$basic=$_POST['basic'];
		$standar=$_POST['standar'];
		$premier=$_POST['premier'];
		$non=$_POST['non'];
		$date_tglPeriod= new Pimcore_Date($period);

		$namakey = str_replace(' ', '_', $merk)."_".strtotime(date("YmdHis"));
		// $radio1='comprehensive';
		// $period='1425315600';
		// $harga='1000600';
		
		if($radio == 'tlo'){
		    $radiof = 'Total Loss Only';
		}
		else{
		    $radiof = 'Komprehensif';
		}

		$pdf = new Zend_Pdf();
		$page = $pdf->newPage(Zend_Pdf_Page::SIZE_A4); 
		$pdf->pages[] = $page;
		$image = Zend_Pdf_Image::imageWithPath('website/static/pdf-mobilku/template.jpg');
		$page->drawImage($image, 0, 0, 600, 800);
		// $page->drawImage($image, 125, 505, 475, 800);
		
		$arial = Zend_Pdf_Font::fontWithPath('website/static/font-pdf-ajfc/arialbd.ttf');
			
		$page->setFont($arial, 12);
		
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))
		// 	->drawText('MUHAMMAD ROBBI NUGRAHA', 230, 210);

		//$page->setFont($arial, 30);
		//
		//$page->setFillColor(Zend_Pdf_Color_Html::color('#005399'));
		//
		//$this->drawCenteredText($page, "MUHAMMAD ROBBI NUGRAHA", 210);

		//PDF
		//0
		//drawRectangle(x1,y1,x2,y2)
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(175, 500, 300, 475);
	    // $page->setFillColor(Zend_Pdf_Color_Html::color('#ffffff'))->drawText('PAKET', 200, 480);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(300, 500, 425, 475);
	    // $page->setFillColor(Zend_Pdf_Color_Html::color('#ffffff'))->drawText("TOTAL PREMIUM", 325, 480);

	    //1
	    // $page->setFillColor(Zend_Pdf_Color_Html::color('#003781'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(175, 475, 300, 450);
	    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('Mobilku Basic', 150, 500);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#003781'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(300, 475, 425, 450);
	    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText("Rp. ".number_format($basic, 2), 325, 500);

		//2
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(175, 450, 300, 425);
	    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('Mobilku Standar', 150, 460);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(300, 450, 425, 425);
	    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText("Rp. ".number_format($standar, 2), 325, 460);

		//3
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#003781'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(175, 425, 300, 400);
	    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('Mobilku Premier', 150, 420);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#003781'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(300, 425, 425, 400);
	    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText("Rp. ".number_format($premier, 2), 325, 420);

		//4
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(175, 400, 300, 375);
	    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('Non - Paket', 150, 380);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(300, 400, 425, 375);
	    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText("Rp. ".number_format($non, 2), 325, 380);

		// $page->setFont($arial, 24);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText("Terima kasih", 225, 300);//150,100
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'));
	    // $this->drawCenteredText($page, "Terima kasih", 100);

		// //5
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(200, 300, 400, 250);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('No Telpon', 225, 265);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(400, 300, 600, 250);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText($telp, 425, 265);

		// //6
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(200, 250, 400, 200);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('Nama', 225, 215);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(400, 250, 600, 200);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText($nama, 425, 215);

		// //7
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(200, 200, 400, 150);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('Start Periode', 225, 165);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(400, 200, 600, 150);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText($period, 425, 165);

		// //8
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(200, 150, 400, 100);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('Jenis Asuransi', 225, 115);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(400, 150, 600, 100);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText($radiof, 425, 115);

		// //9
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))->setLineColor(Zend_Pdf_Color_Html::color('#005399'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(200, 100, 400, 50);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText('Email', 225, 65);
			
		// $page->setFillColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineColor(Zend_Pdf_Color_Html::color('#E6E6E6'))->setLineDashingPattern(array(3, 2, 3, 4), 1.6)->drawRectangle(400, 100, 600, 50);
	 //    $page->setFillColor(Zend_Pdf_Color_Html::color('#111111'))->drawText($email, 425, 65);

		$namapdf = "website/static/pdf-mobilku/".$nama.".pdf";
		$pdf->save($namapdf); 
        // die();
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
        // try{
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
            $bcc = array("irwan@dreamcube.co.id","robbi@dreamcube.co.id");

            $mail = new Pimcore_Mail();
            $mail->setSubject("Hasil Ilustrasi Asuransi Mobilku");
            $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
            $mail->setDocument($document);
            $mail->setParams($params);
            $mail->addTo($email);
		    $mail->addBcc($bcc);
		    $at = $mail->createAttachment(file_get_contents( $namapdf ));
		    $at->type        = 'pdf';
		    $at->disposition = Zend_Mime::DISPOSITION_INLINE;
		    $at->encoding    = Zend_Mime::ENCODING_BASE64;
		    $at->filename    = 'mobilku.pdf';

            $mail->send();
		// }
		// catch(Exception $e){
		// 	echo 'Message: ' .$e->getMessage();
		// }
		echo "sukses";
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
		
		$age=(date("Y", strtotime($period)) - $th);


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
			$condition_price="(prices>=200000001 and prices<=400000000)";
		}elseif($harga>=400000001 and $harga <=800000000){
			$condition_price="(prices>=400000001 and prices<=800000000)";
		}else{
			$condition_price="prices>800000000";
		}
		
		//$paket=1;	
		//print_r($paket);
		//die();
		if($paket>1){
			$condition="$condition_price AND retetype=$paket AND region__id=$getRegId_id AND makemodel__id=$modelmap_id";
			// echo 1234;
		}else{
			$condition="$condition_price AND retetype=$paket AND region__id=$getRegId_id AND age=$age and makemodel__id=$modelmap_id";
			// echo 4321;
		}
		//print_r($condition);
		//die();
		$getTloRate=new Object_MobilRate_List();
		$getTloRate->setCondition($condition);
		foreach($getTloRate as $items){
			//print_r($items);
			//die();
			$rates= $items->rate;

		}
		print_r($rates);
		// echo $condition;
		die();
	}
	
}