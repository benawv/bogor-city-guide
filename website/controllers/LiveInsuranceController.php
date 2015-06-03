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
                //$tanggallahir = $_POST['tanggallahir'];
                //$bod = new Pimcore_Date($tanggallahir);
                $usia = $_POST('usia');
                
                
                $TanggalLahir = $_POST["tanggallahir"];
                $tglLahir_ = explode("/", $TanggalLahir);
                $tglLahir_[0]; //day
                $tglLahir_[1]; //month
                $tglLahir_[2]; //year 
                $TanggalLahir=$tglLahir_[2]."-".$tglLahir_[1]."-".$tglLahir_[0];
                $tglLahir = strtotime($TanggalLahir);
	            $date_tglLahir= new Pimcore_Date($TanggalLahir);//set date into pimcore formats	
                
                //Calculatiom
                //$premi = 10000000+2000000+300000+40000;
                //Replace Values
                
                
                //Select from Database
                $ins= new Object_liveinsuranceRate_List();
			    $ins->setCondition("JenisKelamin='".$gender."' and UangPertanggungan='".$uangpertanggungan."' and          CriticalIllnessAccelerated='".$cia."' and Merokok='".$smoking."' and $Usia='".$usia."'");
                $premi='';
                foreach($ins as $items){
                    $premi = $items->premi;
                }
                print_r($premi);
                
                //die();
                
                //Saving Database
                $getId=Object_Abstract::getByPath('/kalkulator-live-insurance/');//get folder id
                $cookie = new Object_liveinsurance();
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
                                'tanggallahir' => $date_tglLahir
                                );

                $mail = new Pimcore_Mail();
                $mail->setSubject("Konfirmasi Hasil Kalkulasi Ilustrasi Produk Allianz Live Insurance");
                $mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
                $mail->setDocument($document);
                $mail->setParams($params);
                $mail->addTo($email);
                $mail->send();
                
            }
        }
?>