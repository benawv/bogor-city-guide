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
                $tanggallahir = $_POST['tanggallahir'];
                $bod = new Pimcore_Date($tanggallahir);;
                
                //Calculatiom
                //$premi = 10000000+2000000+300000+40000;
                //Replace Values
                if($gender == 'M') $gender='Male';
                else $gender='Female';
                
                if($uangpertanggungan == '1000') $uangpertanggungan = '1M';
                else if($uangpertanggungan == '500') $uangpertanggungan = '500juta';
                else $uangpertanggungan = '250juta';
                    
                if($cia == '1000') $cia = '1M';
                else if($cia == '500') $cia = '500juta';
                else $cia = '250juta';
                
                //Select from Database
                $ins= new Object_liveinsurance_List();
			    $ins->setCondition("JenisKelamin='".$gender."' and UangPertanggungan='".$uangpertanggungan."' and          CriticalIllnessAccelerated='".$Usia."' and Merokok='".$smoking."'");
                $premi='';
                foreach($ins as $items){
                    $premi = $items->premi;
                }
                print_r($premi);
                
                die();
                
                //Saving Database
                $getId=Object_Abstract::getByPath('/kalkulator-live-insurance/');//get folder id
                $cookie = new Object_LiveInsurance();
                $cookie->setNama($nama);
                $cookie->setEmail($email);
                $cookie->setNoHP($nohp);
                $cookie->setJenisKelamin($gender);
                $cookie->setCriticalIllnessAccelerated($cia);
                $cookie->setUangPertanggungan($uangpertanggungan);
                $cookie->setMerokok($smoking);
                $cookie->setPremi($premi);  
                $cookie->setTanggalLahir($bod);
                $cookie->setO_key('live_insurance'.strtotime(date("YmdHis")));
                $cookie->setO_parentId($getId->o_id);
                $cookie->setO_index(0);
                $cookie->setO_published(1);
                $cookie->save();
                
                
                //Send to Email
                $hasil = number_format($Calculation,0,",",".");
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
                                'tanggallahir' => $tanggallahir
                                );

                $mail = new Pimcore_Mail();
                $mail->setSubject("Konfirmasi Hasil Kalkulasi Ilustrasi Produk Allianz Tasbih");
                $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
                $mail->setDocument($document);
                $mail->setParams($params);
                $mail->addTo($email);
                $mail->send();
                
            }
        }
?>