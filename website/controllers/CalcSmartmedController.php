<?php

class CalcSmartmedController extends Website_Controller_Action {
	
	public function calcAction () {
		
		$payment = $this->_getParam('payment');
		$fd = $this->_getParam('fd');
		$ncd = $this->_getParam('ncd');
		$age = $this->_getParam('age');
		$sex = $this->_getParam('sex');
		$code = $this->_getParam('code');//ip,ma,od
		$coshare = $this->_getParam('coshare');
		$uwl = $this->_getParam('uwl');
		$plan = $this->_getParam('plan');//ip,ma,od
		if($ncd == "Y") $nbc = "2";
		else $nbc = "1";
		
		//$this->enableLayout();
		// echo $nbc."-".$sex."-".$ncd."-".$age."-".$sex."-".$coshare."-".$code."-".$plan."-".$uwl;
		//ALL premium_new
		$entries = new Object_SmartmedPremium_List();
		$entries->setLimit(1);
		$entries->setCondition("o_path LIKE '/kalkulator-smartmed/premium_new/' AND nbc LIKE '".$nbc."' AND sex LIKE '".$sex."' AND age LIKE '".$age."' AND coshare LIKE '".$coshare."' AND kode LIKE '".$code."' AND plantype__id LIKE '".$plan."'");
		
		// print_r($entries);
		foreach ($entries as $row){
			$value = $row->getPremium();
		}
		
		if($payment=="Annually")
			echo $value;
		elseif($payment=="Semi-Annually")
			echo $value*0.52;
		elseif($payment=="Quarterly")
			echo $value*0.27;
		else
			echo $value*0.10;

	}
	public function emailAction(){
//        $nama = $_COOKIE["nama"];
//        
//        $test = json_decode($nama);
//        
//        print_r($test[2]);
//        
//        die();
        

        
//        $this->view->pembayaran = $_COOKIE["pembayaran"];
//        $this->view->no_claim = $_COOKIE["ncd"];
//        $this->view->sex = $_COOKIE["sex"];
//        $this->view->dob = $_COOKIE["dob"];
//        $this->view->tgl_hitung = $_COOKIE["cd"];
//        $this->view->premi_ip = $_COOKIE["ipp"];
//        $this->view->premi_mat = $_COOKIE["mat"];
//        $this->view->premi_opden = $_COOKIE["opdenp"];
//        $this->view->jumlah_anggota = $_COOKIE["lengthAnggota"];
//        $this->view->totalpremi = $_COOKIE["totalimo"];
//        $this->view->totalseluruh = $_COOKIE["totalseluruh"];
//        $this->view->planning = $_COOKIE["planning"];
//        $this->view->materai = $_COOKIE["bmaterai"];
        
        $namaDiri = $_POST["namaPengirim"];
        $email = $_POST["email"];
        $pembayaran = $_COOKIE["pembayaran"];
        $no_claim = $_COOKIE["ncd"];
        $nope = $_POST["noHP"];
        $prov = Object_Abstract::getById($_POST["provinsi"]);
        $kota = Object_Abstract::getById($_POST["kota"]);
        $sex = json_decode($_COOKIE["sex"]);
        $dob = json_decode($_COOKIE["dob"]);
        $tgl_hitung = json_decode($_COOKIE["cd"]);
        $premi_ip = json_decode($_COOKIE["ipp"]);
        $premi_mat = json_decode($_COOKIE["matp"]);
        $premi_opden = json_decode($_COOKIE["opdenp"]);
        $jumlah_anggota = $_COOKIE["lengthAnggota"];
        $totalpremi = json_decode($_COOKIE["totalimo"]);
        $totalseluruh = $_COOKIE["totalseluruh"];
        $total = $_COOKIE["total"];
        $planning = $_COOKIE["planning"];
        $materai = $_COOKIE["bmaterai"];
        $polish = $_COOKIE["bpolish"];
        $nama = json_decode($_COOKIE["nama"]);
        $familydiscount = $_COOKIE["fd"];



        /*SAVE to object*/
        $key = $namaDiri.date("dmYHis");
	    $idFolder=Object_Abstract::getByPath("/kalkulator-smartmed/data-kalkulasi")->o_id;//get folder id object
	    $date = new Zend_Date(date("m/d/Y"));
	    // echo "4=".$this->user;
	    $obj = new Object_SmartmedHasilKalkulasi();

		$obj->setnama($namaDiri);
		$obj->setnope($nope);
		$obj->setemail($email); 
		$obj->setprov($prov);
		$obj->setkab($kota);
		$obj->settotal($total);
		$obj->setbmaterai($materai);
		$obj->setbpolish($polish);//$polish
		$obj->setfd($familydiscount);
		$obj->settotalseluruh($totalseluruh);


		//add img field collection
		$items = new Object_Fieldcollection();
		for($i=1;$i<=$jumlah_anggota;$i++){
			$date1 = new Zend_Date($dob[$i]);
			$date2 = new Zend_Date($cd[$i]);
				$item = new Object_Fieldcollection_Data_SmartmedDataKalkulasi();
			    $item->setnama($nama[$i]);
			    $item->setsex($sex[$i]);
			    $item->setdob($date1);
			    $item->setcd($date2);
			    $item->setip($premi_ip[$i]);
			    $item->setmat($premi_mat[$i]);
			    $item->setop($premi_opden[$i]);
			    $item->settotalimo($totalpremi[$i]);
		    $items->add($item);
		    // die();
		};
		$obj->setdataAnggota($items);

		$obj->setKey($key);
		$obj->setO_parentId($idFolder);
		$obj->setIndex(0);
		$obj->setPublished(1);
		$obj->save();
		/*end save*/
        
        for($i=1;$i<=$jumlah_anggota;$i++){
        	if($sex[$i]=="m")
        		$JK = "Laki-laki";
        	else
        		$JK = "Perempuan";
                    $nomor .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">'.$i.'</span></font></strong></strong></td>';
                    $name .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">'.$nama[$i].'</span></font></strong></strong></td>';
                    $JK .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">'.$JK.'</span></font></strong></strong></td>';
                    $TTL .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">'.$dob[$i].'</span></font></strong></strong></td>';
                    $TH .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">'.$tgl_hitung[$i].'</span></font></strong></strong></td>';
                    $ip .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp. '.$premi_ip[$i].'</span></font></strong></strong></td>';
                    $mat .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">RP. '.$premi_mat[$i].'</span></font></strong></strong></td>';
                    $opden .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp. '.$premi_opden[$i].'</span></font></strong></strong></td>';
                    $premtot .= '<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp. '.$totalpremi[$i].'</span></font></strong></strong></td>';
        };
        

        
        $tabler = '<div class="table-responsive" style="margin: 0 auto;">'
                 .'<table border="0" cellpadding="0" cellspacing="0" class="table table-bordered">'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Nomor</span></font></strong></strong></td>'
                 .$nomor
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Nama</span></font></strong></strong></td>'
                 .$name
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Jenis Kelamin</span></font></strong></strong></td>'
                 .$JK
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Tanggal Lahir</span></font></strong></strong></td>'
                 .$TTL
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Tanggal Hitung</span></font></strong></strong></td>'
                 .$TH
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Plan Rawat Inap,Plan Melahirkan,Plan Rawat Jalan dan Rawat Gigi</span></font></strong></strong></td>'
                 .'<td colspan="'.$jumlah_anggota.'" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">'.$planning.'</span></font></strong></strong></td>'
                 .'</tr>'
                 .'<tr>'
                 .'<td rowspan="4" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Premi</span></font></strong></strong></td>'
                 .'</tr>'
                 .'<tr>'
                 .'<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Premi Rawat Inap</span></font></strong></strong></td>'
                 .$ip
                 .'</tr>'
                 .'<tr>'
                 .'<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Premi Melahirkan</span></font></strong></strong></td>'
                 .$mat
                 .'</tr>'
                 .'<tr>'
                 .'<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Premi Rawat Jalan dan Rawat Gigi</span></font></strong></strong></td>'
                 .$opden
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Total Premi</span></font></strong></strong></td>'
                 .$premtot
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px; line-height: 18px;">Biaya Materai</span></font></strong></td>'
                 .'<td colspan="'.$jumlah_anggota.'" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp. '.$materai.'</span></font></strong></strong></td>'
                 .'</tr>'                 
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px; line-height: 18px;">Jumlah Total Premi</span></font></strong></td>'
                 .'<td colspan="'.$jumlah_anggota.'" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp. '.$total.'</span></font></strong></strong></td>'
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Biaya Polis</span></font></strong></strong></td>'
                 .'<td colspan="'.$jumlah_anggota.'" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp. 30000</span></font></strong></strong></td>'
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Family Discount</span></font></strong></strong></td>'
                 .'<td colspan="'.$jumlah_anggota.'" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp. '.$familydiscount.'</span></font></strong></strong></td>'
                 .'</tr>'
                 .'<tr>'
                 .'<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Total Jumlah yang Dibayarkan</span></font></strong></strong></td>'
                 .'<td colspan="'.$jumlah_anggota.'" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp. '.$totalseluruh.'</span></font></strong></strong></td>'
                 .'</tr>'
                 .'</table>'
                 .'</div>';
            
 
            $document = '/email/email-smartmed';
            $params = array('tabler' => $tabler);
        

//        
            $mail = new Pimcore_Mail();
			$mail->setSubject("Konfirmasi Hasil Kalkulasi Ilustrasi Produk Allianz Smartmed Primer");
			$mail->setFrom("no-reply@allianz.co.id","Allianz Smartmed");
			$mail->setDocument($document);
			$mail->setParams($params);
			$mail->addTo($email);
			$mail->send();
//        

        
		$this->_redirect("/kalkulator/smartmed/thankyou");
	}
}