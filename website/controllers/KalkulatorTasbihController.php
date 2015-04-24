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


            //$entries->setCondition("idKalkulasi = '"."); "Must open  database"
            
            //$this->KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa);
            //$this->KalkulasiAction($Email);
            
            

                //------Calculate from user's input
            
               $Calculation = (int)$Usia+(int)$Kontribusi+(int)$AsuransiJiwa; //The Pattern of ALLIANZ

                print_r($Calculation);
            
                //-------Saving Data
                
                //$entries = new Object_tasbih_list();
                
			  /* try{

                //----SetData
                $cookie->setTanggalPembuatan($TanggalPembuatan);
                $cookie->setNama($Nama);
                $cookie->setEmail($Email);
                $cookie->setTanggalLahir($TanggalLahir);
                $cookie->setJenisKelamin($JenisKelamin);
                $cookie->setUsia($Usia);
                $cookie->setFrekuensiPembayaran($Frekuensi);
                $cookie->setDetailAsuransiJiwa($AsuransiJiwa);
                $cookie->setMassaPembayaranKontribusi($Kontribusi);
                $cookie->setKontribusiBerkala($Calculation);
                    


                

                $register->setKey('Tasbih_'.strtolower($nama));
                $register->setO_parentId('1568');
                $register->setIndex(0);
                $register->setPublished(1);
                $register->save();
			}
			catch(Exception $e){
				echo 'ERROR: ',  $e->getMessage(), "\n";
			}*/
		}
                
                
            
                


        
        /*public function KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa){
        

            
        }*/
        
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