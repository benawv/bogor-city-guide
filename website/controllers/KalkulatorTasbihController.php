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
            
            if(count($entries) == 0){

                //Waiting Bos's Command

            }else{

                //$entri = new Object_Tasbih_List();
                //$entri->setCondition(); "Must Open Database"

                //Waiting Bos's Command

            }

			  /* try{

                //------Calculate from user's input
            
               $Calculation = ($rate*$AsuransiJiwa)/1000; //The Pattern of ALLIANZ
               print_r($Calculation);
            
                //-------
                
                
            
                

        }
        
        /*public function KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa){
        

            
        }*/
        
        public function SendEmailAction($Email){
        
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
            
            
        }
    }
?>