<?php
	
	class KalkulatorTasbihController extends Website_Controller_Action{
		
        public function savingAction() {
		

            $tanggalpembuatan = $_POST["tgl"];
            $Nama = $_POST["nama"];
            $Email = $_POST["email"];
            $TanggalLahir = $_POST["tanggallahir"];
            $JenisKelamin = $_POST["sex"];
            $Usia = $_POST["usia"];
            $Frekuensi = $_POST["frekuensi"];
            $AsuransiJiwa = $_POST["asuransijiwa"];
            $Kontribusi = $_POST["kontribusi"];

	    $rates= new Object_TasbihRate_List();
	    $rates->setCondition("kelamin='".$JenisKelamin."' and frekuensi=$Kontribusi and usia=$Usia");
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
            
               
            
                //-------
                
                */
            	
		        $Calculation = ($rate*$AsuransiJiwa)/1000; //The Pattern of ALLIANZ
                //print_r("jk:$JenisKelamin,Kontribusi:$Kontribusi, Usia:$Usia".$Calculation);
                
             //SetData
                $cookie = new Object_tasbih();
                $cookie->settanggalpembuatan($tanggalpembuatan);
                $cookie->setNama($Nama);
                $cookie->setEmail($Email);
                $cookie->setTanggalLahir($TanggalLahir);
                $cookie->setJenisKelamin($JenisKelamin);
                $cookie->setUsia($Usia);
                $cookie->setFrekuensiPembayaran($Frekuensi);
                $cookie->setDetailAsuransiJiwa($AsuransiJiwa);
                $cookie->setMassaPembayaranKontribusi($Kontribusi);
                $cookie->setKontribusiBerkala($Calculation);
                
                $cookie->setO_key('tasbih'.$cookies.strtotime(date("YmdHis")));
                $cookie->setO_parentId('1568');
                //$cookie->setO_index(0);
                $cookie->setO_published(1);
                $cookie->save();
                //print_r($Calculation);
                
 
                //Sending to mail
                $document = 'email-tasbih';
                $params = array('nama' => $Nama,
                                'email' => $Email,
                                'usia'=> $Usia,
                                'frekuensi' => $Frekuensi,
                                'asuransi'=>$AsuransiJiwa,
                                'kontribusi' => $Kontribusi
                                );

                $mail = new Pimcore_Mail();
                $mail->setSubject("Konfirmasi Perhitungan");
                $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
                $mail->setDocument($document);
                $mail->setParams($params);
                $mail->addTo($Email);

                $mail->send();
                

                
        }
        
        /*public function KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa){
        

            
        }*/
        
        public function sendemailAction(){
            
        }
    }
?>
