<?php

class AgentController extends Website_Controller_Action {
        
	
	public function mapAgentAction() {
		$k = $_POST["kordinat"];
		$kordinat = explode("#",$k);
		
		$kondisi = array("condition" => "(titikKordinat__latitude >".$kordinat[0]." AND titikKordinat__latitude <".$kordinat[2].")  AND (titikKordinat__longitude >".$kordinat[1]." AND titikKordinat__longitude <".$kordinat[3].")"
						 ,"groupBy" => "titikKordinat__latitude");
		//$entries = Object_AgentLocatorKantor::getList($kondisi);
		$entries = Object_AgentLocatorKantor::getList();
		
		$return = array();		
		foreach($entries as $entry)
		{
			$temp = array(
						  "titikKordinat" => array("latitude" => $entry->titikKordinat->latitude, "longitude" => $entry->titikKordinat->longitude ),
						  "namaLokasi" => $entry->namaLokasi,
						  "kodeLokasi" => $entry->kodeLokasi,
						  "alamat1" => $entry->alamat1,
						  "alamat2" => $entry->alamat2,
						  "alamat3" => $entry->alamat3,
						  "kodeAreaTelepon" => $entry->kodeAreaTelepon,
						  "nomorTelepon" => $entry->nomorTelepon,
						  "kodeAreaFax" => $entry->kodeAreaFax,
						  "nomorFax" => $entry->nomorFax,
						  "o_key" => $entry->o_key,
						  "o_id" => $entry->o_id
				);
			
			$kondisi1 = array("condition" => "titikKordinat__latitude =".$entry->getTitikKordinat()->latitude." AND titikKordinat__longitude =".$entry->getTitikKordinat()->longitude);
			$entries1 = Object_AgentLocatorKantor::getList($kondisi1);
			
			$temp1 = array();
			$i = 0;
			foreach($entries1 as $entry1)
			{
				//if($entry->getO_id() != $entry1->getO_id())
				//{
					$temp1[$i] = array(
								"namaLokasi" => $entry1->namaLokasi,
								"kodeLokasi" => $entry1->kodeLokasi,
								"alamat1" => $entry1->alamat1,
								"alamat2" => $entry1->alamat2,
								"alamat3" => $entry1->alamat3,
								"kodeAreaTelepon" => $entry1->kodeAreaTelepon,
								"nomorTelepon" => $entry1->nomorTelepon,
								"kodeAreaFax" => $entry1->kodeAreaFax,
								"nomorFax" => $entry1->nomorFax,
								"o_key" => $entry1->o_key,
								"o_id" => $entry1->o_id
							);
					$i++;
				//}				
			}
			
			$temp["sub_kordinat"] = $temp1;
			array_push($return, $temp);
		}
		echo json_encode($return);
	}
	//public function mapAgentAction() {
	//	$k = $_POST["kordinat"];
	//	$kordinat = explode("#",$k);
	//	
	//	$kondisi = array("condition" => "(titikKordinat__latitude >".$kordinat[0]." AND titikKordinat__latitude <".$kordinat[2].")  AND (titikKordinat__longitude >".$kordinat[1]." AND titikKordinat__longitude <".$kordinat[3].")");
	//	$entries = Object_AgentLocatorKantor::getList($kondisi);
	//	
	//	$return = array();
	//	foreach($entries as $entry)
	//	{
	//		$temp = array(
	//					  "titikKordinat" => array("latitude" => $entry->titikKordinat->latitude, "longitude" => $entry->titikKordinat->longitude ),
	//					  "namaLokasi" => $entry->namaLokasi,
	//					  "kodeLokasi" => $entry->kodeLokasi,
	//					  "alamat1" => $entry->alamat1,
	//					  "alamat2" => $entry->alamat2,
	//					  "alamat3" => $entry->alamat3,
	//					  "kodeAreaTelepon" => $entry->kodeAreaTelepon,
	//					  "nomorTelepon" => $entry->nomorTelepon,
	//					  "kodeAreaFax" => $entry->kodeAreaFax,
	//					  "nomorFax" => $entry->nomorFax,
	//					  "o_key" => $entry->o_key,
	//					  "o_id" => $entry->o_id
	//			);
	//
	//		array_push($return, $temp);			
	//	}
	//	
	//	echo json_encode($return);
	//}
	public function detailKantorAction(){
		$this->enableLayout();
		$key = $this->_getParam('text');
		$id = $this->_getParam('id');
		
		//$kantor = Object_Abstract::getById($id);
		$kondisi1 = array("condition" => "o_id = '".$id."'",
						 "limit" => 1);
		$kantor = Object_AgentLocatorKantor::getList($kondisi1);
		
		$kondisi2 = array("condition" => "kantor = ',".$id.",'",
						 "limit" => 6);
		$agent = Object_AgentLocatorData::getList($kondisi2);
		if(count($kantor) == 0)
		{
			$this->redirect("/");
		}
		
		$this->view->kantor = $kantor;
		$this->view->agent = $agent;
	}
    
    public function detailAgentAction(){
		
		//$session = new Zend_Session_Namespace('tasbih');
		//$session->nama = "nama1";
		//$session->email = "email1";
		//$session->nohp = "nohp1";
		//$session->date_tglBuat = "tgl buat";
		//$session->date_tglLahir = "tgl lahir";
		//$session->JenisKelamin = "jenis kelamin";
		//$session->Usia = "usia";
		//$session->Frekuensi = "Frekuensi";
		//$session->AJ = "AJ";
		//$session->Kontribusi = "Kontribusi";
		//$session->Calculation = "Calculation";
		
		
		$this->enableLayout();
		//$key = $this->_getParam('text');
		$id = $this->_getParam('id');
		$idKantor = $this->_getParam('id2');
		
		//$kantor = Object_Abstract::getById($id);
		$kondisi1 = array("condition" => "o_id = '".$id."'",
						 "limit" => 1);
		$data = Object_AgentLocatorData::getList($kondisi1);
		
		$kondisi2 = array("condition" => "o_id = '".$idKantor."'",
						 "limit" => 1);
		$kantor = Object_AgentLocatorKantor::getList($kondisi2);

		/*$kondisi2 = array("condition" => "kantor = ',".$id.",'",
						 "limit" => 6);
		$agent = Object_AgentLocatorData::getList($kondisi2);
		if(count($kantor) == 0)
		{
			$this->redirect("/");
		}
		*/
		$this->view->kantor = $kantor;
		$this->view->agent = $data;

	}
	
	public function testAction() {
		$k = $_POST["kordinat"];
		$k = "-6.274662058749551#106.78460244125044#-6.184830941250449#106.87443355874954";
		$kordinat = explode("#",$k);
		//
		//// wilayah__id
		$kondisi = array("groupBy" => "titikKordinat__latitude");
		$entries = Object_AgentLocatorKantor::getList($kondisi);
		
		$return = array();		
		foreach($entries as $entry)
		{
			echo $entry->getO_id();
			echo "<br />";
			echo $entry->getTitikKordinat()->latitude."  ".$entry->getTitikKordinat()->longitude;
			echo "<br />";
			
			$temp = array(
						  "titikKordinat" => array("latitude" => $entry->titikKordinat->latitude, "longitude" => $entry->titikKordinat->longitude ),
						  "namaLokasi" => $entry->namaLokasi,
						  "kodeLokasi" => $entry->kodeLokasi,
						  "alamat1" => $entry->alamat1,
						  "alamat2" => $entry->alamat2,
						  "alamat3" => $entry->alamat3,
						  "kodeAreaTelepon" => $entry->kodeAreaTelepon,
						  "nomorTelepon" => $entry->nomorTelepon,
						  "kodeAreaFax" => $entry->kodeAreaFax,
						  "nomorFax" => $entry->nomorFax,
						  "o_key" => $entry->o_key,
						  "o_id" => $entry->o_id
				);
			
			$kondisi1 = array("condition" => "titikKordinat__latitude =".$entry->getTitikKordinat()->latitude." AND titikKordinat__longitude =".$entry->getTitikKordinat()->longitude);
			$entries1 = Object_AgentLocatorKantor::getList($kondisi1);
			
			$temp1 = array();
			$i = 0;
			foreach($entries1 as $entry1)
			{
				if($entry->getO_id() != $entry1->getO_id())
				{
					$temp1[$i++] = array(
								"namaLokasi" => $entry1->namaLokasi,
								"kodeLokasi" => $entry1->kodeLokasi,
								"alamat1" => $entry1->alamat1,
								"alamat2" => $entry1->alamat2,
								"alamat3" => $entry1->alamat3,
								"kodeAreaTelepon" => $entry1->kodeAreaTelepon,
								"nomorTelepon" => $entry1->nomorTelepon,
								"kodeAreaFax" => $entry1->kodeAreaFax,
								"nomorFax" => $entry1->nomorFax,
								"o_key" => $entry1->o_key,
								"o_id" => $entry1->o_id
							);
				}				
			}
			
			$temp["sub_kordinat"] = $temp1;
			array_push($return, $temp);
		}
		
		echo "<pre>";
		print_r($return);
		die();
	}

	public function sendMailAgenTasbihAction(){



		// harusnya ini jadi  class Object_Abstract untuk email(sementara static harus cepet ganti !!!!!)
		$session = new Zend_Session_Namespace('tasbih');
        $nama = $session->nama;
        $email=$session->email ;
        $nohp=$session->nohp ;
        $date_tglBuat = $session->date_tglBuat;
        $date_tglLahir = $session->date_tglLahir;
        $JenisKelamin = $session->JenisKelamin;
        $Usia = $session->Usia;
        $Frekuensi = $session->Frekuensi;
        $AsuransiJiwa = $session->AsuransiJiwa;
        $AJ = $session->AJ;
        $Kontribusi = $session->Kontribusi;
        $Calculation = $session->Calculation;
		$idObject = $session->idObject;
		
		$update = Object_Tasbih::getById($idObject);
		$update->setKeterangan($_POST["keterangan"]);
		$update->save();

		$date_tglBuat1 = date("d/m/Y",strtotime(new Pimcore_Date($session->date_tglBuat)));
        $date_tglLahir1 = date("d/m/Y",strtotime(new Pimcore_Date($session->date_tglLahir)));


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
		$document = '/email/email-agen-tasbih';
		$params = array(
						'tglhitung' => $date_tglBuat1,
						'nama' => $nama,
						'email' => $email,
						'tgllahir' => $date_tglLahir1,
						'usia'=> $Usia,
						'kontribusi' => $Kontribusi,
						'AJ' => $AJ,
						'pembayaran' => $hasil,
						'frek' => $frek,
						'JK' => $JK,
						'nohp' => $nohp
						);
		/*
		$systemConfig = Pimcore_Config::getSystemConfig()->toArray();
		$emailSettings = $systemConfig['email'];	
		print_r($emailSettings);
		die();
		*/
		$mail = new Pimcore_Mail();
		$mail->setSubject("Permintaan $nama Calon Nasabah Produk Allianz Tasbih");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
		$mail->setDocument($document);
		$mail->setParams($params);
		$mail->addTo($email);
		$mail->send();

		Zend_Session::namespaceUnset('tasbih');

		echo "Sukses $Calculation";
		die();
	}
	
	public function sendMailAgenInquiryAction(){

		// harusnya ini jadi  class Object_Abstract untuk email(sementara static harus cepet ganti !!!!!)
		$session = new Zend_Session_Namespace('inquiry');
        $nama = $session->nama;
		$idObject = $session->idObject;
		$kelamin = $session->JenisKelamin;
		$date_tglLahir = $session->tgl_lahir;
		$tlp = $session->no_hp;
		$email = $session->email;
		$objProv = $session->provinsi;
		$pesan = $session->pesan;
		
		$update = Object_TasbihInquiry::getById($idObject);
		$update->setKeterangan($_POST["keterangan"]);
		$update->save();

        $date_tglLahir1 = date("d/m/Y",strtotime(new Pimcore_Date($session->tgl_lahir)));

		if($kelamin == 'l') {
			$JK = 'Pria';
		}
		else{
			$JK = 'Wanita';
		}

		$document = '/email/email-agen-inquiry';
		$params = array(
						'nama' => $nama,
						'email' => $email,
						'jenisKelamin' => $JK,
						'tgllahir' => $date_tglLahir1,
						'nohp' => $tlp,
						'pesan' => $pesan,
						'propinsi' => $objProv,
						'ket' => $_POST["keterangan"]
						);
		/*
		$systemConfig = Pimcore_Config::getSystemConfig()->toArray();
		$emailSettings = $systemConfig['email'];	
		print_r($emailSettings);
		die();
		*/
		$mail = new Pimcore_Mail();
		$mail->setSubject("Permintaan $nama Calon Nasabah Produk Allianz Tasbih");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
		$mail->setDocument($document);
		$mail->setParams($params);
		$mail->addTo($email);
		$mail->send();

		Zend_Session::namespaceUnset('inquiry');

		echo "Sukses Minta Informasi";
		die();
	}

}
