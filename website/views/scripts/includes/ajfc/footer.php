<div class="modal fade" id="modalPopUpImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
	        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
	    </div>
	    <div class="modal-body">
			<h2></h2>
			<p style="text-align: center;">
				<img class="imageModal" src="" alt="image-modal">
			</p>
	    </div>
	</div>
  </div>
</div>
<footer role="contentinfo" class="contentinfo">
	<div class="meta clearfix">
		<div class="container mw960">
			<div class="statement">&copy; Allianz 2015. All Rights Reserved.</div>
			<ul class="static-links">
				<li><a href="/data-privasi/prinsip-privasi">Kebijakan Privasi</a></li>
				<li><a href="/sitemap/sitemap" target="_blank">Sitemap</a></li>
			</ul>
			<ul class="static-links mobile deactive share">
				<li><a href="javascript:void(0);" class="fbshare-fullpage"><img src="/website/static/images/icon-share/facebook-black.png" alt="facebook-black" /></a></li>
				<li><a href="javascript:void(0);" class="twshare-fullpage"><img src="/website/static/images/icon-share/twitter-black.png" alt="twitter-black" /></a></li>
				<li><a class="gPlus-fullpage" target="_blank" href="https://plus.google.com/u/0/113109741631464434900/posts"><img alt="google plus" src="/website/static/images/icon-share/g-plus-black.png"></a></li>
			</ul>
		</div>
	</div>
	<nav>
	<?php
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT o_id FROM objects
				where o_key = 'footer-ajfc'";
		$footer = $db->fetchAll($sql);
		$idFooter = $footer[0][o_id];
		
		$sql2 = "SELECT * FROM objects
				where o_parentId = '".$idFooter."'";
		$footerList = $db->fetchAll($sql2);
		
		$footerAJFC = new Object_FooterAJFC_List();
	?>
		<div class="container clearfix mw960">
			<ul class="footer-links level1">
				<?php foreach ($footerAJFC as $row){?>
					<li class="left wi200">
						<!--<a>-->
							<?php
								echo $row->getLink();
								//$title = explode("-", $row[o_key]);
								//foreach ($title as $jdl)
								//{
								//	echo strtoupper(substr($jdl, 0, 1))."".substr($jdl, 1)." ";
								//}
							?>
						<!--</a>-->
						<!--<ul class="level2">-->
							<?php
								//$sql3 = "SELECT o_id FROM objects
								//		where o_parentId = '".$row[o_id]."'";
								//$list = $db->fetchAll($sql3);
								//foreach ($list as $row2){
								//	$entries = new Object_Footer_List();
								//	$entries->setCondition('oo_id="'.$row2[o_id].'"');
								//	foreach ($entries as $data)
								//	{
							?>
										<!--<li><?php //echo $data->getLink();?></li>-->
							<?php
								//	}
								//}
							?>
						<!--</ul>-->
					</li>
				<?php }?>
				
				
				<!--<li class="left wi200">
					<a href="tentangkami.php">Tentang Kami</a>
					<ul class="level2">
						<li><a href="visi-misi-allianz.php"> Visi dan Misi</a></li>
						<li><a href="profil.php#pro-tentang" onclick="navigateMe('tentang')">Tentang Allianz</a></li>
						<li><a href="profil.php#pro-pesan" onclick="navigateMe('pesan')">Pesan CEO</a></li>
						<li><a href="profil.php#pro-komposisi" onclick="navigateMe('komposisi')"> Komposisi Saham</a></li>
						<li><a href="profil.php#pro-dewan_direksi" onclick="navigateMe('dewan_direksi')"> Dewan Direksi</a></li>
						<li><a href="profil.php#pro-dewan_komisaris" onclick="navigateMe('dewan_komisaris')"> Dewan Komisaris</a></li>
					</ul>
				</li>
				<li class="left wi200">
					<a href="product.php">Produk</a>
					<ul class="level2">
						<li><a href="product-sub-asuransi-jiwa.php">Asuransi Jiwa</a></li>
						<li><a href="product-sub-asuransi-kesehatan.php">Asuransi Kesehatan</a></li>
						<li><a href="product-sub-asuransi-kumpulan.php">Asuransi Kumpulan</a></li>
						<li><a href="product-sub-asuransi-syariah.php">Asuransi Syariah</a></li>
						<li><a href="product-sub-asuransi-umum.php">Asuransi Umum</a></li>
						
					</ul>
				</li>
				<li class="left wi200">
					<a href="layanan.php">Layanan</a>
					<ul class="level2">
						<li><a href="customer-service.php#cs_premi" onclick="navigateMe('premi')">Info Cara Pembayaran Premi</a></li>
						<li><a href="customer-service.php#cs_cara-membeli" onclick="navigateMe('cara-membeli')">Info Cara Membeli</a></li>
						<li><a href="customer-service.php#cs_customer-service" onclick="navigateMe('customer-service')">Alamat Allianz Customer Service</a></li>
						<li><a href="klaim.php">Klaim</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="download.php">Download</a></li>
					</ul>
				</li>	
				<li class="left wi200">
					<a href="allianz-platinum.php">Allianz Platinum</a>
					<ul class="level2">
						<li><a href="allianz-platinum.php#benefit" onclick="navigateMe('benefit')">Benefit</a></li>
						<li><a href="allianz-platinum.php#welcome" onclick="navigateMe('welcome')">Welcome Package</a></li>
						<li><a href="allianz-platinum.php#free" onclick="navigateMe('free')">Free Medical Checkup</a></li>
						<li><a href="allianz-platinum.php#spring" onclick="navigateMe('spring')">Spring Gathering</a></li>
					</ul>
				</li>-->
							
			</ul>
		</div>
	</nav>
	<div class="modal fade" id="modalSoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		    <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		</div>
		<div class="modal-body">
		    <a href="http://sociallydevoted.socialbakers.com" target="_blank">
			<img class="badge-modal" src="/website/static/images/Socially-Devoted-Badge.png" alt="Socially Devoted Badge" title="We are Socially Devoted!"/>
		    </a>
		</div>
	    </div>
	  </div>
	</div>
	<div class="worldwide">
		<div class="container mw960">
			<div class="badge-social">
				<a data-target="#modalSoc" href="#" data-toggle="modal"><img title="We are Socially Devoted!" alt="Socially Devoted Badge" src="/website/static/images/badge.png" class="badge-logo"></a>
			</div>
			<div>
				Allianz Indonesia <a href="http://www.allianz.co.id" target="_blank">www.allianz.co.id</a>
			</div>
			<div class="mobileAktif"></div>
			<div class="ojk-img">
				<img width="120px" src="/website/static/images/OJK Logo.png">
			</div>	
			<div class="ojk-desc">
				<p>Allianz dan Agen/Tenaga Penjualnya telah terdaftar pada dan diawasi oleh Otoritas Jasa Keuangan.</p>
			</div>
		</div>
	</div>
</footer>
<link rel="stylesheet" type="text/css" media="all" href="/website/static/css/css-ie8/isr.css">
<script type="text/javascript">
	function navigateMe(anchor)
	{
	
			$(".pagenav .navi li").removeClass('aktif');
			$(".pagenav .navi li .nav_menu div").css('background-position','0px 0px');
			var element = $("." + anchor);
			element.addClass('aktif');
			$('li.aktif .nav_menu div').css('background-position', '0px 0px');
		
			//alert($(".heading").offset().top);
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
		      	$('html, body').animate({scrollTop:$("#"+anchor).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+anchor).offset().top-90}, 500);
			}
	}
	
	$(window).bind("load", function() {
		var hash = document.URL.substr(document.URL.indexOf('#')+1);
		
		if(Math.floor( $(".heading").offset().top)<=212)
		{
			$('html, body').animate({scrollTop:$("#"+hash).offset().top-190}, 500);
		}
		else
		{
			$('html, body').animate({scrollTop:$("#"+hash).offset().top-90}, 500);
		}
		$(".pagenav .navi li").removeClass('aktif');
		$(".pagenav .navi li .nav_menu div").css('background-position','0px 0px');
		var element = $("." + hash);
		element.addClass('aktif');
		$('li.aktif .nav_menu div').css('background-position', '0px 0px');
		
	});
	/*$(document).ready(function(){
		$(".clickLink").on("click",function(){
			var url = $(this).find(".linkUrl").attr("href");
			window.location.href = url;
		});
	});*/
</script>
<?php
if(!$this->editmode){
	if($_SERVER["REQUEST_URI"]!="/"){
?>
	<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
<?php 
	}
}
?>
