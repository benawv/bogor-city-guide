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
		
	    $rates= new Object_TasbihRate_List();
	    $rates->setCondition("kelamin='".$JenisKelamin."' and frekuensi=$Kontribusi and usia=$Usia");
	    $rate='';
	    foreach($rates as $items){
		$rate=$items->rate;
	    }

		$Calculation = ($rate*$AsuransiJiwa)/1000; //The Pattern of ALLIANZ
               
                //SetData
	        $tglBuat = strtotime($TanggalPembuatan);
	        $date_tglBuat = new Pimcore_Date($tglBuat);//set date into pimcore format		
		$tglLahir = strtotime($TanggalLahir);
	        $date_tglLahir= new Pimcore_Date($tglLahir);//set date into pimcore formats		
	        $getId=Object_Abstract::getByPath('/tasbih/');//get folder id
		
                $cookie = new Object_tasbih();
                $cookie->setTanggalPembuatan($date_tglBuat);
                $cookie->setNama($Nama);
                $cookie->setEmail($Email);
                $cookie->setTanggalLahir($date_tglLahir);
                $cookie->setJenisKelamin($JenisKelamin);
                $cookie->setUsia($Usia);
                $cookie->setFrekuensiPembayaran($Frekuensi);
                $cookie->setDetailAsuransiJiwa($AsuransiJiwa);
                $cookie->setMassaPembayaranKontribusi($Kontribusi);
                $cookie->setKontribusiBerkala($Calculation);                
                $cookie->setO_key('tasbih'.$cookies.strtotime(date("YmdHis")));
                $cookie->setO_parentId($getId->o_id);
                $cookie->setO_index(0);
                $cookie->setO_published(1);
                $cookie->save();
                
                print_r($Calculation);

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
