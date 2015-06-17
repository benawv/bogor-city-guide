<?php
	
	class LiveInsuranceController extends Website_Controller_Action{
		
        public function savingSendingAction() {
                //print_r('Test');
                //die();
                
            
                //Deklarasi Variabel
                $nama = $_POST["nama"];
                $nohp = $_POST["nohp"];
                $gender = $_POST["gender"];
                
                $uangpertanggungan = $_POST['uangpertanggungan'];
                
                $cia = $_POST['cia'];
            
                $smoking = $_POST['smoking'];
            
                $email = $_POST['email'];
            
                $usia = $_POST['usia'];
                
                
                $TanggalLahir = $_POST["tanggallahir"];
                $date_tglLahir= new Pimcore_Date($period);
               //print_r($date_tglLahir);
                //Calculatiom
                //$premi = 10000000+2000000+300000+40000;
                //Replace Values
                //Select from Database
    
                $rates= new Object_LiveinsuranceRate_List();                      
                $rates->setCondition("JenisKelamin='".$gender."' and UangPertanggungan='".$uangpertanggungan."' and CriticalIllnessAccelerated='".$cia."' and Merokok='".$smoking."' and Usia='".$usia."'");
                
                foreach($rates as $items){
                    $premi = $items->Premi;    
                }
            
                //print_r($premi);
                //Saving Database
                $getId=Object_Abstract::getByPath('/kalkulator-live-insurance/');//get folder id
                $cookie = new Object_Liveinsurance();
                $cookie->setNama($nama);
                $cookie->setEmail($email);
                $cookie->setNoHP($nohp);
                $cookie->setJenisKelamin($gender);
                $cookie->setCriticalIllnessAccelerated($cia);
                $cookie->setUangPertanggungan($uangpertanggungan);
                $cookie->setMerokok($smoking);
                $cookie->setPremi($premi);  
                $cookie->setTanggalLahir($date_tglLahir);
                $cookie->setO_key('live_insurance'.strtotime(date("YmdHis")));
                $cookie->setO_parentId($getId->o_id);
                $cookie->setO_index(0);
                $cookie->setO_published(1);
                $cookie->save();
                
            
                //$date_tglBuat1 = date("d/m/Y",strtotime(new Pimcore_Date($session->date_tglBuat)));
            //$date_tglLahir1 = date("d/m/Y",strtotime(new Pimcore_Date($session->date_tglLahir)));
            
        
                //Send to Email
                //$hasil = number_format($Calculation,0,",",".");
            
                if($gender == 'M') $gender = 'Pria';
                else $gender = 'Wanita';
            
                if($cia == '1000') $cia = 'Rp 1 Miliar';
                else if($cia == '500') $cia = 'Rp 500 Juta';
                else $cia = 'Rp 250 Juta';
                    
                if($uangpertanggungan == '1000') $uangpertanggungan = 'Rp 1 Miliar';
                else if($uangpertanggungan == '500') $uangpertanggungan = 'Rp 500 Juta';
                else $uangpertanggungan = 'Rp 250 Juta';
                    
                $document = '/email/email-live-insurance';
                $params = array(
                                'nama' => $nama,
                                'email' => $email,
                                'nohp' => $nohp,
                                'gender' => $gender,
                                'cia'=> $cia,
                                'uangpertanggungan' => $uangpertanggungan,
                                'smoking' => $smoking,
                                'premi' => $premi,
                                'tanggallahir' => $TanggalLahir,
                                'usia' => $usia
                                );
                $mail = new Pimcore_Mail();
                $mail->setSubject("Konfirmasi Hasil Kalkulasi Ilustrasi Produk Allianz Live Insurance");
                $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
                $mail->setDocument($document);
                $mail->setParams($params);
                $mail->addTo($email);
                $mail->send();
				
				$session = new Zend_Session_Namespace('liveinsurance');
                $session->premi = $premi ;
                $session->nama= $nama;
                $session->nohp = $nohp;
                $session->gender = $gender;
                $session->cia = $cia;
                $session->uangpertanggungan = $uangpertanggungan;
                $session->smoking = $smoking;
                $session->premi = $premi;
                $session->tanggallahir = $tanggallahir;
                $session->usia = $usia;
                $session->status = 'life_insurance';
                $session->ID = $getId->o_id;
                //echo $session->premi = $premi;
            }
        

        
        public function sendEmailAction() {
            $session = new Zend_Session_Namespace('liveinsurance');
            $premi = $session ->premi;
        }
    }
?>
