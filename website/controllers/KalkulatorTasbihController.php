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

            $session = new Zend_Session_Namespace('calculation');
            $session->date_tglBuat = $tglBuat;
            $session->date_tglLahir = $date_tglLahir;
            $session->JenisKelamin = $JenisKelamin;
            $session->Usia = $Usia;
            $session->Frekuensi = $Frekuensi;
            $session->AsuransiJiwa = $AsuransiJiwa;
            $session->AJ = $AJ;
            $session->Kontribusi = $Kontribusi;
            $session->Calculation = $Calculation;


        }
        
        /*public function KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa){
        

            
        }*/
        
        public function sendemailAction(){
			
            $Nama = $_POST["nama"];
            $Email = $_POST["email"];
            $nohp = $_POST["nohp"];

            $session = new Zend_Session_Namespace('calculation');
            $date_tglBuat = $session->date_tglBuat;
            $date_tglLahir = $session->date_tglLahir;
            $JenisKelamin = $session->JenisKelamin;
            $Usia = $session->Usia;
            $Frekuensi = $session->Frekuensi;
            $AsuransiJiwa = $session->AsuransiJiwa;
            $AJ = $session->AJ;
            $Kontribusi = $session->Kontribusi;
            $Calculation = $session->Calculation;
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
			//$cookie->setTanggalPembuatan($date_tglBuat);
			$cookie->setNama($Nama);
			$cookie->setEmail($Email);
			//$cookie->setTanggalLahir($date_tglLahir);
			$cookie->setJenisKelamin($JenisKelamin);
			$cookie->setUsia($Usia);
			$cookie->setFrekuensiPembayaran($Frekuensi);
			$cookie->setDetailAsuransiJiwa($AsuransiJiwa);
			$cookie->setMassaPembayaranKontribusi($Kontribusi);
			$cookie->setKontribusiBerkala($Calculation);                
			$cookie->setO_key('premium_tasbih'.rand().strtotime(date("YmdHis")));
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
							'tglhitung' => $TanggalPembuatan,
							'nama' => $Nama,
							'email' => $Email,
							'tgllahir' => $TanggalLahir,
							'usia'=> $Usia,
							'kontribusi' => $Kontribusi,
							'AJ' => $AJ,
							'pembayaran' => $hasil,
							'frek' => $frek,
							'JK' => $JK,
							'nohp' => $nohp
							);

			$mail = new Pimcore_Mail();
			$mail->setSubject("Konfirmasi Perhitungan");
			$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
			$mail->setDocument($document);
			$mail->setParams($params);
			$mail->addTo($Email);
			$mail->send();
            
			echo "sukses";
            //Zend_Session::namespaceUnset('calculation');
        }
    }
?>
