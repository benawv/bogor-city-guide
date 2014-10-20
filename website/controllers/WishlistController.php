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
		$cookiesId = $_COOKIE["userWishlist"];
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
		$no_ktp = $_POST["no_ktp"];
		
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
		$cc = array();
		$x = 0;
		foreach ($result as $row)
		{
			$tmp = $row["kategori"];
			
			$ent3 = new Object_EmailAsuransi_List();
			$ent3->setCondition("namaAsuransi = '".$tmp."'");
			
			foreach ($ent3 as $row2)
			{
				$eml = $row2->email;
			}
			$cc[$x] = $eml;
			$x++;
		}
		$emailCC = $cc;
		
		$pesan = new Object_DaftarPemesanan();
		$pesan->setNama($nama);
		$pesan->setEmail($email);
		$pesan->setNoTelp($no_telp);
		$pesan->setNoKTP($no_ktp);
		$pesan->setO_key($nama);
		$pesan->setO_parentId('818');
		$pesan->setO_index(0);
		$pesan->setO_published(1);
		$pesan->save();
			
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
		
		
		$mail = new Pimcore_Mail();
		
		$mail->setSubject("Testing");
		$mail->setFrom("no-reply@allianz.co.id","Allianz Indonesia");
		$mail->setBodyHtml("<b>Test Email</b>");
		$mail->addTo($email);
		$mail->addCc($emailCC);
		
		try {
			if ($mail->send())
			{
				echo json_encode(array("status" => "Kirim"));
			}
			else
			{
				echo json_encode(array("status" => "Gagal"));
			}
		
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
}