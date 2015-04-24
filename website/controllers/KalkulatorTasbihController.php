<?php
	
	class KalkulatorTasbihController extends Website_Controller_Action{
		
        public function savingAction() {
            $TanggalPembuatan = $_POST["tgl"];
            $Nama = $_POST["nama"];
            $Email = $_POST["email"];
            $TanggalLahir = $_POST["tanggallahir"];
            $JenisKelamin = $_POST["sex"];
            $Usia = $_POST["usia"];
            $Frekuensi = $_POST["frekuensi"];
            $AsuransiJiwa = $_POST["asuransijiwa"];
            $Kontribusi = $_POST["kontribusi"];

	     $JenisKelamin='l';
	     $Frekuensi=5;
	     $Usia=12;
	    
	     $rates= new Object_tasbihRate_List();
	     $rates->setCondition("kelamin='".$JenisKelamin."' and frekuensi=".$Frekuensi." and usia=".$Usia);
	     
	     $rate='';
	     foreach($rates as $items){
		$rate=$items->rate;
	     }

            //$entries->setCondition("idKalkulasi = '"."); "Must open  database"
            
            //$this->KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa);
            //$this->KalkulasiAction($Email);
            
            

                //------Calculate from user's input
            
               $Calculation = ($rate*$Kontribusi)/1000; //The Pattern of ALLIANZ
               print_r($Kontribusi);
            
            try{

                //----SetData
                $cookie = new Object_tasbih();
                $cookie->settanggalpembuatan($TanggalPembuatan);
                $cookie->setNama($Nama);
                $cookie->setEmail($Email);
                $cookie->setTanggalLahir($TanggalLahir);
                $cookie->setJenisKelamin($JenisKelamin);
                $cookie->setUsia($Usia);
                $cookie->setFrekuensiPembayaran($Frekuensi);
                $cookie->setDetailAsuransiJiwa($AsuransiJiwa);
                $cookie->setMassaPembayaranKontribusi($Kontribusi);
                $cookie->setKontribusiBerkala($Calculation);
                    


                $cookie->setO_key('tasbih_'.$cookies.strtotime(date("YmdHis")));
                $cookie->setO_parentId('1568');
                $cookie->setO_Index(0);
                $cookie->setO_Published(1);
                $cookie->save();
			}
			catch(Exception $e){
				echo 'ERROR: ',  $e->getMessage(), "\n";
			}
            

		}
                
                
            
                


        
        public function KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa){
        
                //-------Saving Data
                
              
                

            
        }
        
        /*public function SendEmailAction($Email){
        
            //$document = 'Path Document';
            $params = array('firstName' => 'Bastian',
                            'lastName' => 'Ramadhan',
                            'ID' => 73613);
            $mail = new Pimcore_Mail();
            $mail->setSubject("Konfirmasi Perhitungan");
            $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
            $mail->setDocument($document);
            $mail->setParams($params);
            $mail->addTo($Email);

            $mail->send();
            
            
        }*/
    }
?>