<?php
    	class KalkulatorTasbihController extends Website_Controller_Action{
		
            public function allInOneAction() {
                
                //Deklarasi Variabel
                $nama = $_POST["nama"];
                $nohp = $_POST["nohp"];
                $gender = $_POST["gender"];
                $uangpertanggungan = $_POST['uangpertanggungan'];
                $cia = $_POST['cia'];
                $smoking = $_POST['smoking'];
                $email = $_POST['email'];
                
                //Saving Database
                $getId=Object_Abstract::getByPath('/kalkulator-live-insurance/');//get folder id
                $cookie = new Object_LiveInsurance();
                //$cookie->setTanggalPembuatan($date_tglBuat);
                $cookie->setNama($nama);
                $cookie->setEmail($email);
                $cookie->setNoHP($nohp);
                $cookie->setJenisKelamin($gender);
                $cookie->setCriticalIllnessAccelerated($cia);
                $cookie->setUangPertanggungan($uangpertanggungan);
                $cookie->setDetailAsuransiJiwa($AsuransiJiwa);
                $cookie->setMassaPembayaranKontribusi($Kontribusi);
                $cookie->setKontribusiBerkala($Calculation);                
                $cookie->setO_key('premium_tasbih_'.strtotime(date("YmdHis")));
                $cookie->setO_parentId($getId->o_id);
                $cookie->setO_index(0);
                $cookie->setO_published(1);
                $cookie->save();
                
            }
        }
?>