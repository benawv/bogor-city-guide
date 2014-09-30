	<div class="tab-wrapper">
	<div id="tab-quicklinks" class="tab-content">
		<h3>Layanan Kami</h3>
		<h4 style="margin-bottom: 10px;"><b>Info penting Asuransi Anda, di sini:</b></h4>		
		<ul class="list-links bold-list">
			<li><a href="klaim.php">Prosedur Klaim</a></li>
			<li><a href="customer-service.php#cs_premi" onclick="navigateMe('premi')">Info Cara Pembayaran Premi</a></li>
			<li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/" target="_blank">Customer Online Portal</a></li>
			<li><a href="customer-service.php#cs_cara-membeli" onclick="navigateMe('cara-membeli')">Info Cara Membeli</a></li>
			<li><a href="investasi.php">Harga Unit</a></li>
			<li><a href="https://www.allianzlife.co.id/eBancassurance/" target="_blank">BancAssurance Portal</a></li>
			<li><a href="https://www.allianzlife.co.id/ePension/" target="_blank">e-Pension</a></li>
			<li><a href="allianz-platinum.php">Allianz Platinum</a></li>
			<li><a href="faq.php">FAQ</a></li>
		</ul>
	</div>
	<div id="tab-contact" class="tab-content">
		<h3>Kontak</h3>

		<p><b>Asuransi Jiwa:</b></p>
		
		<ul class="list-links bold-list">
			<li>Tel: +6221-2926 9999</li>
			<li>Fax: +6221-2926 8080</li>
			<li>contactus@allianz.co.id</li>
		</ul>
		
		<p><b>Asuransi Umum:</b></p>
		
		<ul class="list-links bold-list">
			<li>Tel: +6221-2926 9999</li>
			<li>Fax: +6221-2926 9090</li>
			<li>Feedback@allianz.co.id</li>
		</ul>

	</div>
	<div id="tab-socialmedia" class="tab-content">
		<h3>Social Media</h3>

		<ul class="list-links bold-list">
			<li><a href="http://www.facebook.com/AllianzIndonesiaCommunity" style="color:white">Facebook: AllianzIndonesiaCommunity </a></li>
			<li><a href="http://www.twitter.com/AllianzID" style="color:white">Twitter: AllianzID </a></li>
			<li><a href="http://instagram.com/allianzindonesia" style="color:white">Instagram: AllianzIndonesia</a></li>
		</ul>

	</div>
	<div id="tab-download" class="tab-content">
		<h3>Download</h3>

		<ul class="list-links bold-list">
			<li><a href="finansial.php#fin-report" onclick="navigateMe('report')" style="color:white">Laporan Keuangan</a></li>
			<li><a href="download.php#unit-link" onclick="navigateMe('unit-link')" style="color:white">Laporan Perkembangan Unit Link Tahun 2013</a></li>
			<li><a href="customer-service.php#cs_rumah-sakit" onclick="navigateMe('rumah-sakit')" style="color:white">Daftar Rekanan Rumah Sakit</a></li>
			<li><a href="download.php#asuransi-jiwa" onclick="navigateMe('asuransi-jiwa')" style="color:white">Download Formulir-formulir Penting</a></li>
			<li><a href="download.php#newsletter-allianz" onclick="navigateMe('newsletter-allianz')" style="color:white">Newsletter</a></li>
		</ul>

	</div>
	

	<!--<div class="tab-button">
		<ul>
			<li><a href="#tab-quicklinks">Quick Links</a></li>
			<li><a href="#tab-contact">Contact</a></li>
			<li><a href="#tab-socialmedia">Social Media</a></li>
			<li><a href="#tab-download">Download</a></li>
		</ul>
	</div>-->

	<div class="tab_button">
		<ul>
			<li><a class="tab-layanan-anda" href="#tab-quicklinks"><?php echo $this->input('text-1')?></a></li>
			<li><a class="tab-kontak" href="#tab-contact"><?php echo $this->input('text-2')?></a></li>
			<li><a class="tab-sosmed" href="#tab-socialmedia"><?php echo $this->input('text-3')?></a></li>
			<li class="last"><a class="tab-download" href="#tab-download"><?php echo $this->input('text-4')?></a></li>
		</ul>
	</div>

</div>