<?php

class KuisController extends Website_Controller_Action {
	
	public function saveAction () {
		//echo "<pre>";
		//print_r($_POST);
		//print_r($_FILES);
		//$tgl = str_replace(" ","",$_POST["tgl"]);
		//$tgl2 = date("Y-m-d",strtotime($tgl));
		//$tgl3 = new Pimcore_Date($tgl2);
		//echo $tgl3;
		//die();
		//$namaPeserta = "MUHAMMAD ROBBI NUGRAHA";
		//$saveNoDada = "0099";
		//$this->createPdfAction($namaPeserta,$saveNoDada);
		//die();
		
		if($_POST["term"]=='on')
		{
			$term = 1;
		}
		else
		{
			$term = 0;
		}
		
		$idPeserta = explode("-",$_POST["idPeserta"]);
		//print_r($idPeserta);
		//echo $idPeserta[0];
		$checkSubmit = new Object_DataPesertaAJFC_List();
		$checkSubmit->setCondition("statusSubmitKuis != 1 AND idPeserta = '".$idPeserta[1]."'");
		//
		//echo "<pre>";
		$no = "";
		foreach($checkSubmit as $row)
		{
			$no = count($row);
		}
		
		if((int)$no == 1){
			//echo "if";
			//die();
			
			$namaPeserta = $_POST["nama"];
			$tempatLahir = $_POST["tmp"];
			$emailPeserta = $_POST["email"];
			$alamat = $_POST["alamat"];
			$jk = $_POST["radioJK"];
			$pasport = $_POST["pasport"];
			$propinsi = $_POST["propinsi"];
			$namaOrtu = $_POST["namaOrtu"];
			$noHp = $_POST["noHp"];
			$emailOrtu = $_POST["emailOrtu"];
			$alamatOrtu = $_POST["alamatOrtu"];
			$pekerjaan = $_POST["pekerjaan"];
			$pekerjaan_lain = $_POST["pekerjaan-lain"];
			$info = implode(", ", $_POST["info"]);
			$halTerpenting = $_POST["halTerpenting"];
			
			//Tanggal Lahir
			$str = str_replace(" ","",$_POST["tgl"]);
			$tgl = DateTime::createFromFormat('d/m/Y', $str);
			$tgl2 = strtotime($tgl->format('Y-m-d'));
			$tgl3 = new Pimcore_Date($tgl2);
			//echo $tgl->format('Y-m-d')."<br />";
			
			//Orang Tua
			$saudara = $_POST["jumSaudara"];
			$usiaAyah = $_POST["usiaAyah"];
			$usiaIbu = $_POST["usiaIbu"];
			$pendidikanAyah = $_POST["pendidikanAyah"];
			$pendidikanIbu = $_POST["pendidikanIbu"];
			$pengeluaran = str_replace(".","",$_POST["pengeluaran"]);
			
			if($pekerjaan_lain != "")
			{
				$pekerjaan = "";
				$pekerjaan = $pekerjaan_lain;
			}
			
			$soal = new Object_Quiz_List();
			$x = 1;
			$nilai = array();
			foreach($soal as $row)
			{
				$nilai[] = $row->answer->items[$_POST['soal'.$x]]->nilai_jawaban;
				$x++;
			}
			//echo "<pre>";
			//print_r($nilai);
			$total = 0;
			foreach ($nilai as $k => $v) {
				$total = $total + $v;
			}
			
			$totalNilai = $total;
			
			$getNomer = new Object_DataPesertaAJFC_List();
			$getNomer->setCondition("statusSubmitKuis = 1");
			$getNomer->setOrderKey("noLari");
			$getNomer->setOrder("desc");
			$getNomer->setLimit(1);
			$setLari = "";
			foreach($getNomer as $lari)
			{
				$setLari = $lari->getNoLari()+1;
			}
			if($setLari == 0)
			{
				$setLari = "";
				$setLari = 1;
			}
			
			$saveKuis = Object_DataPesertaAJFC::getById($idPeserta[0]);
			//$saveKuis->setCondition("");
			$saveKuis->setAlamat($alamat);
			$saveKuis->setTempatLahir($tempatLahir);
			$saveKuis->setTanggalLahir($tgl3);
			$saveKuis->setPasport($pasport);
			$saveKuis->setPropinsi($propinsi);
			$saveKuis->setNamaOrtu($namaOrtu);
			$saveKuis->setNoHpOrtu($noHp);
			$saveKuis->setEmailOrtu($emailOrtu);
			$saveKuis->setAlamatOrtu($alamatOrtu);
			$saveKuis->setPekerjaanOrtu($pekerjaan);
			$saveKuis->setInformasi($info);
			$saveKuis->setSatuTerpenting($halTerpenting);
			$saveKuis->setNilaiSoal(implode(", ", $nilai));
			$saveKuis->setTotalNilai($totalNilai);
			$saveKuis->setStatusSubmitKuis(1);
			$saveKuis->setTerm($term);
			$saveKuis->setNoLari($setLari);
			$saveKuis->setJenisKelamin($jk);
			
			//Orang Tua
			$saveKuis->setJumSaudara($saudara);
			$saveKuis->setUsiaAyah($usiaAyah);
			$saveKuis->setUsiaIbu($usiaIbu);
			$saveKuis->setPendidikanAyah($pendidikanAyah);
			$saveKuis->setPendidikanIbu($pendidikanIbu);
			$saveKuis->setPengeluaranOrtu($pengeluaran);
	
			
			$digit = 4-(int)(strlen($setLari));
			$noDada = "";
			for($i=1;$i<=$digit;$i++)
			{
				$noDada = $noDada."0";
			}
			$saveNoDada = $noDada.$setLari;
			
			
			$dateNow = strtotime(date('Y-m-d H:i:s'));
			
			// Asset folder for the uploaded images
			$assetFolder = "/ajfc/foto-peserta";
			
			// The key is the unique name of an asset that is also used in the asset tree
			$nameFoto = str_replace(" ","-",strtolower($_FILES["uploadFoto"]["name"]));
			$key = Pimcore_File::getValidFilename($nameFoto);
			
			// Check if there is alraedy an image with the same key
			if(!$asset = Asset::getByPath($assetFolder . "/" . $key)) {
			   $asset = new Asset_Image();
			}
			else{
				$asset = new Asset_Image();
			}
			
			// Optionally set the creation date
			$asset->setCreationDate ( time() );
			
			// Optionally set the user
			$asset->setUserOwner (1);
			$asset->setUserModification (1);
			
			// Set the asset's parent id, which is the asset folder for the uploaded images
			$asset->setParentId(Asset_Folder::getByPath($assetFolder)->getId());
			
			// That's the key
			$asset->setFilename($dateNow."_".$key);
			$asset->setData(IMAGE_SOURCE);
			
			$uploadOk = 0;
			
			try{
				if($asset->save())
				{
					$saveKuis->setFotoPeserta(Asset_Image::getById($asset->id));
				
					//CUSTOM
					$target_dir = "./website/var/assets/ajfc/foto-peserta/";
					$target_file = $target_dir.$dateNow."_".basename($nameFoto);
					
					if(move_uploaded_file($_FILES["uploadFoto"]["tmp_name"], $target_file))
					{
						$uploadOk = 1;
						$saveKuis->setStatusEmailNoLari(1);
						$saveKuis->save();
					
						//Create PDF
						$namaPrint = strtoupper($namaPeserta);
						$this->createPdfAction($namaPrint,$saveNoDada);
						$this->sendAction($saveNoDada,$emailPeserta,$namaPrint);
					}
					else{
						$uploadOk = 0;
					}
				}
			}
			catch(Exception $e){
				echo 'ERROR: ',  $e->getMessage(), "\n";
			}
			if($uploadOk == 1)
			{
				$this->redirect("/thanks/terima-kasih");
			}
			else{
				$this->redirect("/");
			}
		}
		else{
			$this->redirect("/thanks/sudah-submit");
		}
		
	}
	
	public function sendLinkAction(){
		$db = Pimcore_Resource_Mysql::get();
		
		$peserta = new Object_DataPesertaAJFC_List();
		$peserta->setCondition("`idPeserta` = '' OR `idPeserta` IS NULL AND `statusEmail` <> 1 OR `statusEmail` IS NULL");
		$peserta->setLimit(10);
		
		
		foreach($peserta as $row)
		{
			$emailP = $row->getEmail();
			$checkEmail = new Object_DataPesertaAJFC_List();
			$checkEmail->setCondition("`email` = '".$emailP."' AND `statusEmail` = 1 ");
			$jumUser = count($checkEmail);
			if($jumUser>=1){
				$idDouble = $row->getId();
				$dataDouble = Object_DataPesertaAJFC::getById($idDouble);
				$dataDouble->setStatusEmail(1);
				$dataDouble->save();
			}
			else{
				//echo strtotime(date('Y-m-d')), "\n";
				//echo date('Y-m-d 22:00',strtotime("+3 days"))."<br />";
				//echo strtotime(date('Y-m-d 22:00',strtotime("+3 days")))."<br />";
				//echo mktime(22,0,0,3,6,2015);
				$host = $_SERVER['SERVER_NAME'];
				$id = $row->getId();
				$idPeserta = md5(uniqid().time().rand().$id);
				
				$today = strtotime(date('Y-m-d H:i'));
				$threeDay = strtotime(date('Y-m-d 23:59',strtotime("+3 days")));
				//$today = date('Y-m-d');
				//$threeDay = date('Y-m-d 22:00',strtotime("+3 days"));
				
				//$now = Zend_Date::now();
				$date = new Pimcore_Date($today);
				$date3 = new Pimcore_Date($threeDay);
				//$date2 = new Pimcore_Date($now3->getTimestamp());
				
				$data = Object_DataPesertaAJFC::getById($id);
				$data->setIdPeserta($idPeserta);
				$data->setTglKirimEmail($date);
				$data->setStatusEmail(1);
				$data->setTglExpireKuis($date3);
				
				$link = "http://".$host."/seleksi/".$idPeserta;
				
				$document = '/email/email-ajfc';
				$params = array('name' => ucwords($row->getNamaLengkap()),
						'link' => $link);
				$mail = new Pimcore_Mail();
				$mail->setSubject("Link Seleksi AJFC 2015");
				$mail->setFrom("no-reply@ajfc.allianz.co.id","Allianz Junior Football Camp 2015");
				$mail->setDocument($document);
				$mail->setParams($params);
				$mail->addTo($row->getEmail());
				
				try{
					$mail->send();
					$data->save();
					echo $row->getNamaLengkap()." email terkirim.<br />";
				}
				catch(Exception $e){
					echo 'ERROR: ',  $e->getMessage(), "\n";
				}
			}
		}
	}
	
	public function createPdfAction($namaP,$nomer)
	{
		$nama = substr($namaP,0,28);
		$pdf = new Zend_Pdf();
		$page = $pdf->newPage(Zend_Pdf_Page::SIZE_A4_LANDSCAPE); 
		$pdf->pages[] = $page;
		$image = Zend_Pdf_Image::imageWithPath('website/static/images/template-no-lari/ajfc.jpg');
		$page->drawImage($image, 0, 0, 842, 595);
		
		$arial = Zend_Pdf_Font::fontWithPath('website/static/font-pdf-ajfc/arialbd.ttf');
		$page->setFont($arial, 95);
		
		$page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))
			->drawText($nomer, 471, 267);
			
		$page->setFont($arial, 30);
		
		$page->setFillColor(Zend_Pdf_Color_Html::color('#005399'))
			->drawText($nama, 230, 210);
		//$page->setFont($arial, 30);
		//
		//$page->setFillColor(Zend_Pdf_Color_Html::color('#005399'));
		//
		//$this->drawCenteredText($page, "MUHAMMAD ROBBI NUGRAHA", 210);
		$fileName = 'website/static/pdf-no-lari/'.$nomer.".pdf";
		
		$pdf->save($fileName);
		
		//$font = Zend_Pdf_Font::fontWithName(Zend_Pdf_Font::FONT_HELVETICA);
		//$pdf = new Zend_Pdf();
		//
		//// Create a new page, add to page listing
		//$pdfPage = $pdf->newPage(Zend_Pdf_Page::SIZE_LETTER_LANDSCAPE);
		//$pdf->pages[] = $pdfPage;
		//
		//// Add certify that
		//$pdfPage->setFont($font, 15.75);
		//$this->drawCenteredText($pdfPage, "THIS IS TO CERTIFY THAT", 378);
		//
		//// Add name
		//$pdfPage->setFont($font, 39.75);
		//$this->drawCenteredText($pdfPage, "Example", 314.25);
		//
		//// Output PDF
		//$pdf->save('website/static/pdf-no-lari/hello123.pdf');
		
		 return $pdf->render();

	}
	
	function drawCenteredText($page, $text, $bottom) {  
		$text_width = $this->getTextWidth($text, $page->getFont(), $page->getFontSize());
		$box_width = $page->getWidth();
		$left = (($box_width - $text_width) / 2)+20;
	    
		$page->drawText($text, $left, $bottom, 'UTF-8');
	    }
	    
	function getTextWidth($text, $font, $font_size) {
	    $drawing_text = iconv('', 'UTF-8', $text);
	    $characters    = array();
	    for ($i = 0; $i < strlen($drawing_text); $i++) {
		$characters[] = (ord($drawing_text[$i++]) << 8) | ord ($drawing_text[$i]);
	    }
	    $glyphs        = $font->glyphNumbersForCharacters($characters);
	    $widths        = $font->widthsForGlyphs($glyphs);
	    $text_width   = (array_sum($widths) / $font->getUnitsPerEm()) * $font_size;
	    return $text_width;
	}
	
	public function sendAction($nomer,$email,$nama){
		
		$mail = new Pimcore_Mail();
		
		$document = '/email/email-pdf';
		$params = array('name' => ucwords($nama));
		
		$mail->setSubject("Nomor Lari AJFC 2015");
		//$mail->setBodyText("This is just plain text");
		$mail->setFrom("no-reply@ajfc.allianz.co.id","Allianz Junior Football Camp 2015");
		$mail->setDocument($document);
		$mail->setParams($params);
		$mail->addTo($email);

		$file = 'website/static/pdf-no-lari/'.$nomer.'.pdf';
		$at = new Zend_Mime_Part(file_get_contents($file));
		$at->filename = basename($file);
		$at->type = 'application/pdf';
		$at->disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
		$at->encoding = Zend_Mime::ENCODING_BASE64;

		$mail->addAttachment($at);

		try {
			$mail->send();
		} catch (Exception $e) {
			print_r($e);
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
	
}