<div class="modal fade" id="modalPopUpImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
	        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
	    </div>
	    <div class="modal-body">
			<h2></h2>
			<p style="text-align: center;">
				<img class="imageModal" src="">
			</p>
	    </div>
	</div>
  </div>
</div>
<footer role="contentinfo" class="contentinfo">
	<div class="meta clearfix">
		<div class="container">
			<div class="statement">&copy; Allianz 2014. All Rights Reserved.</div>
			<ul class="static-links">
				<li><a href="http://www.allianz.co.id/AZLIFE/Other/LegalInd.htm" target="_blank">Catatan Legal</a></li>
				<li><a href="sitemap.php" target="_blank">Sitemap</a></li>
			</ul>
		</div>
	</div>
	<nav>
		<div class="container clearfix">
			<ul class="footer-links level1">
				<li class="left wi200">
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
				</li>
							
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
		<div class="container">
			<div class="badge-social">
				<a data-target="#modalSoc" href="#" data-toggle="modal"><img title="We are Socially Devoted!" alt="Socially Devoted Badge" src="/website/static/images/badge.png" class="badge"></a>
			</div>
			<div>
				Allianz worldwide <a href="http://allianz.com">allianz.com</a>
			</div>
		</div>
	</div>
</footer>
<link rel="stylesheet" type="text/css" media="all" href="/website/static/css/css-ie8/isr.css">
<script type="text/javascript">
	function navigateMe(anchor)
	{
	
			$(".pagenav .navi li").removeClass('aktif');
			$(".pagenav .navi li .nav_menu div").css('background-position','0px -26px');
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
		$(".pagenav .navi li .nav_menu div").css('background-position','0px -26px');
		var element = $("." + hash);
		element.addClass('aktif');
		$('li.aktif .nav_menu div').css('background-position', '0px 0px');
		
	});
</script> 