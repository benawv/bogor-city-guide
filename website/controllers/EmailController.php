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
		$document = '/email/email-wishlist';
		$params = array('firstName' => 'Robbi',
				'lastName' => 'Nugraha',
				'product' => 73613);
		$mail = new Pimcore_Mail();
		$mail->setSubject("Pemesanan Produk");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
		$mail->setDocument($document);
		$mail->setParams($params);
		$mail->addTo("mrobbi.nugraha@gmail.com");
		
		$mail->send();
	}
}