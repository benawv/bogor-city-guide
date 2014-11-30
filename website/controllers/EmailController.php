<?php

class EmailController extends Website_Controller_Action {
	
	public function emailwishlistAction()
	{
		/* $cookiesId = $_POST["cookies"];
			if($cookiesId=="")
			{
				$cookiesId = "141377748326027";
			}
			$ent = new Object_Wishlist_List();
			$ent->setLimit("1");
			
			foreach ($ent as $row)
			{
				$table = "object_".$row->getO_classId();
			}
			
			$db = Pimcore_Resource_Mysql::get();
			$sql = "select kategori from ".$table." where idCookies = ".$cookiesId." GROUP BY kategori";
			$test = $db->fetchAll($sql);
			foreach ($test as $row)
			{
				print_r($row["kategori"]);
			}
			
			$mail = new Pimcore_Mail();
			
			$mail->addTo('mrobbi.nugraha@gmail.com');
			$mail->setDocument('/email/test'); */
			//$params = ['firstName' => 'Pim', 'lastName' => 'Core'];
			
			//sending the email
			/* $mail = new Pimcore_Mail("UTF-8");
			$mail->addTo('mrobbi.nugraha@gmail.com');
			//$mail->setBodyHtml("Test");
			$mail->setDocument('/email/test1');
			//$mail->setParams($params);
			$mail->send();
			$this->enableLayout(); */
			//$this->enableLayout();
			/* $mail = new Pimcore_Mail();
			$mail->addTo('mrobbi.nugraha@gmail.com');
			$mail->setDocument("/email/test1");
			$mail->setEnableLayoutOnPlaceholderRendering(false);
			$mail->send(); */
	}
	public function sendemailAction(){
		/* $doc = new Document_List();
		$doc->setCondition("type='email'");
		$doc->setLimit(1);
		foreach ($doc as $result)
		{
			print_r($result->elements['imgEmail']->image->path);
		}
		die(); */
		
		//TEXT
		//$result->elements['description']->text;
		//IMAGE
		//$result->elements['imgEmail']->image->path;
		//$result->elements['imgEmail']->image->filename;
		$text = "";
		$doc = new Document_List();
		$doc->setCondition("type='email'");
		$doc->setLimit(1);
		
		foreach ($doc as $result)
		{
			$text = "<div role='main' class='main no-gutter'><div class='blast-container'><div id='community no-gutter no-margin' class='clearfix'><div class='blast-img'><img src='".$result->elements['imgEmail']->image->path."".$result->elements['imgEmail']->image->filename."' /></div></div><div id='community' class='clearfix padding no-margin'>".$result->elements['description']->text." </div><div id='community' class='clearfix blast-footer'> </div><div class='blast-weblogo'> 'Allianz' <span onclick='window.location.href=/'></span> </div></div></div>";
		}
		$mail = new Pimcore_Mail();
			
		$mail->setSubject("Pemesanan Asuransi Allianz");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
		$mail->setBodyHtml($text);
		$mail->addTo("mrobbi.nugraha@gmail.com");
			
		$mail->send();
		/* $document = '/email/email-wishlist';
		$params = array('firstName' => 'Robbi',
				'lastName' => 'Nugraha',
				'product' => 73613);
		$mail = new Pimcore_Mail();
		$mail->setSubject("Pemesanan Produk");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
		$mail->setDocument($document);
		$mail->setParams($params);
		$mail->addTo("mrobbi.nugraha@gmail.com");
		
		$mail->send(); */
	}
}