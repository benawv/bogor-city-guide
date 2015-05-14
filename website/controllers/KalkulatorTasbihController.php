<?php
	
	class KalkulatorTasbihController extends Website_Controller_Action{
		
        public function savingAction() {
	
            $TanggalPembuatan = $_POST["tgl"];
	    $tglBuat_ = explode("/", $TanggalPembuatan);
            $tglBuat_[0]; //day
            $tglBuat_[1]; //month
            $tglBuat_[2]; //year 
            $TanggalPembuatan=$tglBuat_[1]."/".$tglBuat_[0]."/".$tglBuat_[2];
	    	    
            $TanggalLahir = $_POST["tanggallahir"];
	    $tglLahir_ = explode("/", $TanggalPembuatan);
            $tglLahir_[0]; //day
            $tglLahir_[1]; //month
            $tglLahir_[2]; //year 
            $TanggalLahir=$tglLahir_[1]."/".$tglLahir_[0]."/".$tglLahir_[2];

	    $Nama = $_POST["nama"];
            $Email = $_POST["email"];
	    $JenisKelamin = $_POST["sex"];
            $Usia = $_POST["usia"];
            $Frekuensi = $_POST["frekuensi"];
            $AsuransiJiwa = $_POST["asuransijiwa"];
            $AJ= $_POST["AJ"];
            $Kontribusi = $_POST["kontribusi"];
            $nohp = $_POST["nohp"];
		//print_r($_POST[]);
		
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

	        $getId=Object_Abstract::getByPath('/tasbih-kalkulator/');//get folder id
		
                $cookie = new Object_Tasbih();
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
                $params = array('tglhitung' => $TanggalPembuatan,
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

        }
        
        /*public function KalkulasiAction($Usia,$Frekuensi,$AsuransiJiwa){
        

            
        }*/
        
        public function sendemailAction(){
        

            
            
        }
    }
?>
