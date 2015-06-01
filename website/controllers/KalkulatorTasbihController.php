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
            
            
		
			$rates= new Object_TasbihRate_List();
			$rates->setCondition("kelamin='".$JenisKelamin."' and frekuensi=$Kontribusi and usia=$Usia");
			$rate='';
			foreach($rates as $items){
				$rate=$items->rate;
			}
		
			$Calculation = ($rate*$AsuransiJiwa)/1000; //The Pattern of ALLIANZ
            //SetData
	        
			$tglBuat = strtotime($TanggalPembuatan);
			$date_tglBuat = new Pimcore_Date($TanggalPembuatan);//set date into pimcore format		

			$tglLahir = strtotime($TanggalLahir);
	        $date_tglLahir= new Pimcore_Date($TanggalLahir);//set date into pimcore formats		

            $session = new Zend_Session_Namespace('tasbih');
            $session->date_tglBuat = $tglBuat;
            $session->date_tglLahir = $date_tglLahir;
            $session->JenisKelamin = $JenisKelamin;
            $session->Usia = $Usia;
            $session->Frekuensi = $Frekuensi;
            $session->AsuransiJiwa = $AsuransiJiwa;
            $session->AJ = $AJ;
            $session->Kontribusi = $Kontribusi;
            $session->Calculation = $Calculation;

            echo $session->Calculation;//print result of calculation into form

        }
        
        /*public function KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa){
        

            
        }*/
        
        public function sendemailAction(){
			
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $nohp = $_POST["nohp"];


            $session = new Zend_Session_Namespace('tasbih');
            $session->nama = $nama ;
            $session->email = $email;
            $session->nohp = $nohp;
            $session->emailFrom = "tasbih_calc";

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
			
			
            $getId=Object_Abstract::getByPath('/tasbih-kalkulator/');//get folder id
			$cookie = new Object_Tasbih();
			$cookie->setTanggalPembuatan($date_tglBuat);
			$cookie->setNama($nama);
			$cookie->setEmail($email);
			$cookie->setTanggalLahir($date_tglLahir);
			$cookie->setJenisKelamin($JenisKelamin);
			$cookie->setUsia($Usia);
			$cookie->setFrekuensiPembayaran($Frekuensi);
			$cookie->setDetailAsuransiJiwa($AsuransiJiwa);
			$cookie->setMassaPembayaranKontribusi($Kontribusi);
			$cookie->setKontribusiBerkala($Calculation);                
			$cookie->setO_key('premium_tasbih_'.strtotime(date("YmdHis")));
			$cookie->setO_parentId($getId->o_id);
			$cookie->setO_index(0);
			$cookie->setO_published(1);
			$cookie->save();
		

			if($JenisKelamin == 'l') {
				$JK = 'Pria';
			}
			else{
				$JK = 'Wanita';
			}
		
			if($Frekuensi == 1){
				$frek = 'Tahunan';
			}
			else if($Frekuensi == 2){
				$frek = 'Semesteran';
			}
			else{
				$frek = 'Triwulan';
			}

			$hasil = number_format($Calculation,0,",",".");
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
							'frek' => $frek,
							'JK' => $JK,
							'nohp' => $nohp
							);
			/*
			$systemConfig = Pimcore_Config::getSystemConfig()->toArray();
			$emailSettings = $systemConfig['email'];	
			print_r($emailSettings);
			die();
			*/
			$mail = new Pimcore_Mail();
			$mail->setSubject("Konfirmasi Hasil Kalkulasi Ilustrasi Produk Allianz Tasbih");
			$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
			$mail->setDocument($document);
			$mail->setParams($params);
			$mail->addTo($email);
			$mail->send();
            
			echo "sukses";
            //Zend_Session::namespaceUnset('calculation');
        }
    }
?>
