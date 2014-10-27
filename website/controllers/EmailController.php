<?php

class EmailController extends Website_Controller_Action {
	
	public function email1Action()
	{
		if($this->editmode){
			
		}
		else{
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
		}
	}
}