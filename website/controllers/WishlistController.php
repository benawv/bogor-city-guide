<?php

class WishlistController extends Website_Controller_Action {
	
	public function saveWishlistAction()
	{
		$cookies = $_POST["cookies"];
		$produk = $_POST["produk"];
		$asuransi = $_POST["asuransi"];
		
		$entries = new Object_Wishlist_List();
		$entries->setCondition("idCookies = '".$cookies."' and produk = '".$produk."'");
		
		if(count($entries)==0)
		{
			$cookie = new Object_Wishlist();
			$cookie->setIdCookies($cookies);
			$cookie->setProduk($produk);
			$cookie->setKategori($asuransi);
			$cookie->setO_key('wishlist_'.$cookies.strtotime(date("YmdHis")));
			$cookie->setO_parentId('786');
			$cookie->setO_index(0);
			$cookie->setO_published(1);
			$cookie->save();
			
			$entri = new Object_Wishlist_List();
			$entri->setCondition("idCookies = '".$cookies."'");
			$x = 1;
			$z = array();
			$z[0] = 'saved';
			foreach ($entri as $row)
			{
				$z[$x] =  $row->getProduk();
				$x++;
			}
			echo json_encode($z);
		}
		else
		{
			$entri = new Object_Wishlist_List();
			$entri->setCondition("idCookies = '".$cookies."'");
			$x = 1;
			$z = array();
			$z[0] = 'existing';
			foreach ($entri as $row)
			{
				$z[$x] =  $row->getProduk();
				$x++;
			}
			echo json_encode($z);
			
			//echo json_encode(array('status0'=>'existing'));
		}
	}
	
	public function checkoutAction()
	{
		$this->enableLayout();
		
		$cookiesId = $this->_getParam('id');
		$this->view->idCookies = $cookiesId;
		
		$entries = new Object_Wishlist_List();
		$entries->setCondition("idCookies = ".$cookiesId);
		$this->view->fetchCookies = $entries;
	}
	
	public function deleteWishlistAction()
	{
		$db = Pimcore_Resource_Mysql::get();
		$cookies = $_POST["cookies"];
		$produk = $_POST["produk"];
		
		$entries = new Object_Wishlist_List();
		$entries->setLimit("1");
		
		foreach ($entries as $row)
		{
			$table1 = "object_store_".$row->getO_classId();
			$table2 = "object_query_".$row->getO_classId();
		}
		$where = "idCookies = '".$cookies."' and produk = '".$produk."'";
		$db->delete($table1,$where);
		$db->delete($table2,$where);
		/* try{
			if($entries->delete()){
				echo json_encode(array("Delete" => "Ya"));
			}
			else{
				echo json_encode(array("Delete" => "Tidak"));
			}
		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		} */
	}
	
	public function sendEmailAction ()
	{
		$cookiesId = $_POST["cookies"];
		$produk = $_POST["produk"];
		$nama = $_POST["nama"];
		$email = $_POST["email"];
		$no_telp = $_POST["no_telp"];
		
		$ent = new Object_Wishlist_List();
		$ent->setLimit("1");
		
		foreach ($ent as $row)
		{
			$table = "object_".$row->getO_classId();
		}
		
		$ent2 = new Object_EmailAsuransi_List();
		$ent2->setLimit("1");
		
		foreach ($ent2 as $row)
		{
			$table2 = "object_".$row->getO_classId();
		}
		
		$db = Pimcore_Resource_Mysql::get();
		$sql = "select kategori from ".$table." where idCookies = ".$cookiesId." GROUP BY kategori";
		$result = $db->fetchAll($sql);
		$z = 1;
		foreach ($result as $row)
		{
			$tmp = $row["kategori"];
			
			$ent3 = new Object_EmailAsuransi_List();
			$ent3->setCondition("namaAsuransi = '".$tmp."'");
			
			foreach ($ent3 as $row2)
			{
				$eml = $row2->email;
			}
			
			$ent4 = new Object_Wishlist_List();
			$ent4->setCondition("idCookies = '".$cookiesId."' and kategori = '".$tmp."'");
			$pro = array();
			$x = 0;
			foreach ($ent4 as $row3)
			{
				$pro[$x] = $row3->produk;
				$x++;
			}
			$listProduk = "<ul><li>" . implode("</li><li>", $pro) . "</li></ul>";
			
			$text = "Nama : ".$nama."<br />";
			$text .= "Email : ".$email."<br />";
			$text .= "No Telepon : ".$no_telp."<br />";
			
			$text .= "Produk : ".$listProduk;
			
			$mail = new Pimcore_Mail();
			$mail->setSubject("Pemesanan Produk");
			$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
			$mail->setBodyHtml($text);
			$mail->addTo($eml);
			
			$mail->send();
			
			
			$z++;
		}
		$prod = implode(", ", $produk);
		$pesan = new Object_DaftarPemesanan();
		$pesan->setNama($nama);
		$pesan->setEmail($email);
		$pesan->setNoTelp($no_telp);
		
		$pesan->setProduk($prod);
		$pesan->setO_key($nama);
		$pesan->setO_parentId('818');
		$pesan->setO_index(0);
		$pesan->setO_published(1);
		$pesan->save();
		
		$text = "Dear <b>".$nama."</b>,<br />";
		$text .= "Kami telah menerima pesanan Anda.<br />";
		$text .= "Produk-produk yang Anda pesan sebagai berikut : "."<ul><li>" . implode("</li><li>", $produk) . "</li></ul>";
		$text .= "Terima kasih telah memilih Allianz<br /><br />";
		$text .= "Hormat Kami,<br /><b>Tim Allianz</b>";
		
		$mail = new Pimcore_Mail();
		
		$mail->setSubject("Pemesanan Asuransi Allianz");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
		$mail->setBodyHtml($text);
		$mail->addTo($email);
		
		try {
			$mail->send();
			echo json_encode(array("status" => "Kirim"));
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
}