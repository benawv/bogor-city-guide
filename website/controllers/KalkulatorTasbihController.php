<?php
	
	class KalkulatorTasbihController extends Website_Controller_Action{
		
        public function savingAction() {
	

            $TanggalPembuatan = $_POST["tgl"];
			$tglBuat_ = explode("/", $TanggalPembuatan);
            $tglBuat_[0]; //day
            $tglBuat_[1]; //month
            $tglBuat_[2]; //year 
            $TanggalPembuatan=$tglBuat_[2]."-".$tglBuat_[1]."-".$tglBuat_[0];
	    	    
            $TanggalLahir = $_POST["tanggallahir"];
			$tglLahir_ = explode("/", $TanggalLahir);
            $tglLahir_[0]; //day
            $tglLahir_[1]; //month
            $tglLahir_[2]; //year 
            $TanggalLahir=$tglLahir_[2]."-".$tglLahir_[1]."-".$tglLahir_[0];

			$JenisKelamin = $_POST["sex"];
            $Usia = $_POST["usia"];
            $Frekuensi = $_POST["frekuensi"];
            $AsuransiJiwa = $_POST["asuransijiwa"];
            $AJ= $_POST["AJ"];
            $Kontribusi = $_POST["kontribusi"];
			
			if($Frekuensi == 1){
				$frek = 'Tahunan';
                $valFrek = 1;
			}
			else if($Frekuensi == 2){
				$frek = 'Semesteran';
                $valFrek = 0.52;
			}
			else{
				$frek = 'Triwulan';
                $valFrek = 0.27;
			}
            
			$kat = $_POST["kategori"];
            
			$rates= new Object_TasbihRate_List();
			$rates->setCondition("kelamin='".$JenisKelamin."' and frekuensi=$Kontribusi and usia=$Usia");
            $rate='';
			foreach($rates as $items){
				$rate=$items->rate;
			}
		
			$Calculation = ($rate*$AsuransiJiwa)/1000*$valFrek; //The Pattern of ALLIANZ
//            $Calculation = ((($rate+$rate2*($persen/100)+$mil)*$AsuransiJiwa)/1000)*$valFrek;
            //SetData
	        
			$tglBuat = strtotime($TanggalPembuatan);
			$date_tglBuat = new Pimcore_Date($TanggalPembuatan);//set date into pimcore format		

			$tglLahir = strtotime($TanggalLahir);
	        $date_tglLahir= new Pimcore_Date($TanggalLahir);//set date into pimcore formats		

            $session = new Zend_Session_Namespace('tasbih');
            $session->date_tglBuat = $date_tglBuat;
            $session->date_tglLahir = $date_tglLahir;
            $session->JenisKelamin = $JenisKelamin;
            $session->Usia = $Usia;
            $session->Frekuensi = $frek;
            $session->AsuransiJiwa = $AsuransiJiwa;
            $session->AJ = $AJ;
            $session->Kontribusi = $Kontribusi;
            $session->Calculation = $Calculation;
			$session->kat = $kat;
            
            $sessionDup = new Zend_Session_Namespace('duplic_tasbih');
            $sessionDup->date_tglBuat = $date_tglBuat;
            $sessionDup->date_tglLahir = $date_tglLahir;
            $sessionDup->JenisKelamin = $JenisKelamin;
            $sessionDup->Usia = $Usia;
            $sessionDup->Frekuensi = $frek;
            $sessionDup->AsuransiJiwa = $AsuransiJiwa;
            $sessionDup->AJ = $AJ;
            $sessionDup->Kontribusi = $Kontribusi;
            $sessionDup->Calculation = $Calculation;
			$sessionDup->kat = $kat;

            echo $session->Calculation;//print result of calculation into form

        }
        
        /*public function KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa){
        

            
        }*/
        
        public function getprovAction(){
            $prov = $_POST["prov"];
//            $session = new Zend_Session_Namespace('provinsi');
//            $session->prov = $prov;
            $item = array();
            $i =0;
            $getProv=new Object_Kota_List();
            $getProv->setCondition("provinsi='".$prov."' and status='kota'");
            $getProv->setOrderKey("kota");
            $getProv->setOrder("asc");
            
            foreach($getProv as $items){
                $item[$i] = array(
                				"id" => $items->o_id,
                                "Kota" => 'Kota '.$items->kota
                            );
                $i++;
            
           
            }
            
            $getProv2=new Object_Kota_List();
            $getProv2->setCondition("provinsi='".$prov."' and status='kabupaten'");
            $getProv2->setOrderKey("kota");
            $getProv2->setOrder("asc");

            foreach($getProv2 as $items2){
                $item[$i] = array(
                				"id" => $items->o_id,
                                "Kota" => 'Kab. '.$items2->kota
                            );
                $i++;
            
            }

            echo json_encode($item);

            
        }
        
        public function sendemailAction(){
			
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $nohp = $_POST["nohp"];
			$kat = $_POST["kategori"];
            $info = $_POST["informasi"];
            $kota = $_POST["kota"];
            $provinsi = $_POST["provinsi"];


            $session = new Zend_Session_Namespace('tasbih');
            $session->nama = $nama ;
            $session->email = $email;
            $session->nohp = $nohp;
            $session->info = $info;
            $session->kota= $kota;
            $session->provinsi = $provinsi;
            $session->emailFrom = "tasbih_calc";
            $session->setExpirationSeconds( 600, 'tasbih' );

            $date_tglBuat = $session->date_tglBuat;
            $date_tglLahir = $session->date_tglLahir;
            $JenisKelamin = $session->JenisKelamin;
            $Usia = $session->Usia;
            $Frekuensi = $session->Frekuensi;
            $AsuransiJiwa = $session->AsuransiJiwa;
            $AJ = $session->AJ;
            $Kontribusi = $session->Kontribusi;
            $Calculation = $session->Calculation;
			
			$date_tglBuat1 = date("d/m/Y",strtotime(new Pimcore_Date($session->date_tglBuat)));
            $date_tglLahir1 = date("d/m/Y",strtotime(new Pimcore_Date($session->date_tglLahir)));





           /*             
				echo $date_tglBuat."<br>";
				echo $date_tglLahir."<br>";
				echo $JenisKelamin."<br>";
				echo $Usia."<br>";
				echo $Frekuensi."<br>";
				echo $AsuransiJiwa."<br>";
				echo $AJ."<br>";
				echo $Kontribusi."<br>";
				echo $Calculation."<br>";
			*/	
			
			if($Frekuensi == 'Tahunan'){
				$frek = 1;
			}
			else if($Frekuensi == 'Semesteran'){
				$frek = 2;
			}
			else{
				$frek = 3;
			}

			
            $getId=Object_Abstract::getByPath('/tasbih-kalkulator/');//get folder id
			$cookie = new Object_Tasbih();
			$cookie->setTanggalPembuatan($date_tglBuat);
			$cookie->setNama($nama);
			$cookie->setEmail($email);
			$cookie->setTanggalLahir($date_tglLahir);
			$cookie->setJenisKelamin($JenisKelamin);
			$cookie->setUsia($Usia);
			$cookie->setFrekuensiPembayaran($frek);
			$cookie->setDetailAsuransiJiwa($AsuransiJiwa);
			$cookie->setMassaPembayaranKontribusi($Kontribusi);
			$cookie->setKontribusiBerkala($Calculation);   
            $cookie->setInformasi($info);
            $cookie->setKota($kota);
            $cookie->setProvinsi($provinsi);
			$cookie->setO_key('premium_tasbih_'.strtotime(date("YmdHis")));
			$cookie->setO_parentId($getId->o_id);
			$cookie->setO_index(0);
			$cookie->setO_published(1);
			$cookie->setNohp($nohp);
			$cookie->setKategori($kat);
			$cookie->save();
			
			$session->idObject = $cookie->getO_id();
			
			$session2 = new Zend_Session_Namespace('homeAgen');
			$sessionAgen = new Zend_Session_Namespace('namaAgen');
            $session2->idUser = $cookie->getO_id();
            $sessionAgen->idUser = $cookie->getO_id();
			
			if($JenisKelamin == 'l') {
				$JK = 'Pria';
			}
			else{
				$JK = 'Wanita';
			}
		

			$hasil = number_format($Calculation,0,",",".");
			
			if($Frekuensi == "Semesteran")
			{
				$nilai = $Calculation/2;
				$per = "atau sebesar ".'Rp. '.number_format($nilai,0,',','.')." per semester.";
			}
			elseif($Frekuensi == "Triwulan")
			{
				$nilai = $Calculation/4;
				$per = "atau sebesar ".'Rp. '.number_format($nilai,0,',','.')." per triwulan.";
			}
			else
			{
				$per = ".";
			}
			
			$document = '/email/email-tasbih';
			$params = array(
							'tglhitung' => $date_tglBuat1,
							'nama' => $nama,
							'email' => $email,
							'tgllahir' => $date_tglLahir1,
							'usia'=> $Usia,
							'kontribusi' => $Kontribusi,
							'AJ' => $AJ,
							'pembayaran' => $hasil,
							'per' => $per,
							'frek' => $Frekuensi,
							'JK' => $JK,
							'nohp' => $nohp,
                            'info' => $info,
                            'kota' => $kota,
                            'provinsi' => $provinsi
							);
			/*
			$systemConfig = Pimcore_Config::getSystemConfig()->toArray();
			$emailSettings = $systemConfig['email'];	
			print_r($emailSettings);
			die();
			*/
//			$mail = new Pimcore_Mail();
//			$mail->setSubject("Konfirmasi Hasil Kalkulasi Ilustrasi Produk Allianz Tasbih");
//			$mail->setFrom("no-reply@allianz.co.id","Allianz Tasbih");
//			$mail->setDocument($document);
//			$mail->setParams($params);
//			$mail->addTo($email);
//			$mail->send();
            
			echo "sukses";
            //Zend_Session::namespaceUnset('calculation');
        }
		
		public function updateUserTasbihAction(){
			$session2 = new Zend_Session_Namespace('homeAgen');
			$idObject = $session2->idUser;
			
			$update = Object_Tasbih::getById($idObject);
			$update->setMasukAgen("Ya");
			$update->save();
			
			Zend_Session::namespaceUnset('homeAgen');
		}
    }
?>
