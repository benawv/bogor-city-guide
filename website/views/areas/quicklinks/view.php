<div id="quicklinks">
<script>
	
	function changeHeader(object)
	{
		$("#accordion-header").html("");
		$("#accordion-header").html("" + object.text);
	}

</script>
<!-- Accordion -->
<div id="accordion-container">
	<h2 class="accordion-header" id="accordion-header">Layanan Kami</h2>
	<div class="accordion-content">
		<!-- Tablink -->
		<div class="tab-wrapper-short">
			<div id="tab-umum" class="tab-content">
				<!-- <h3>Asuransi Kumpulan</h3> -->
				<ul class="nav">
					<li><a href="klaim.php">Prosedur Klaim</a></li>
						<li><a href="customer-service.php#cs_premi" onclick="navigateMe('premi')">Info Cara Pembayaran Premi</a></li>
						<li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/" target="_blank">Customer Online Portal</a></li>
						<li><a href="customer-service.php#cs_cara-membeli" onclick="navigateMe('cara-membeli')">Info Cara Membeli</a></li>
						<li><a href="investasi.php">Harga Unit</a></li>
						<li><a href="https://www.allianzlife.co.id/eBancassurance/" target="_blank">BancAssurance Portal</a></li>
						<li><a href="https://www.allianzlife.co.id/ePension/" target="_blank">e-Pension</a></li>
						<li><a href="allianz-platinum.php" >Allianz Platinum</a></li>
						<li><a href="faq.php">FAQ</a></li>
				</ul>
			</div>		
			<div id="tab-jiwa" class="tab-content">
				<!-- <h3>Asuransi Jiwa</h3> -->
				Asuransi Jiwa:
				<br />
				<br />
					<ul class="list-links">
						<li>Tel: +6221-2926 9999</li>
						<li>Fax: +6221-2926 8080</li>
						<li>contactus@allianz.co.id</li>
					</ul>
				
				Asuransi Umum:
				<br />
				<br />
				<ul class="list-links">
					<li>Tel: +6221-2926 9999</li>
					<li>Fax: +6221-2926 9090</li>
					<li>Feedback@allianz.co.id</li>
				</ul>
				
			</div>
			<div id="tab-kesehatan" data-header="Asuransi Kesehatan" class="tab-content" >
				<!-- <h3>Asuransi Kesehatan</h3> -->
				<ul class="nav">
					<li><a href="www.facebook.com/AllianzIndonesiaCommunity" style="color:white">Facebook:  AllianzIndonesiaCommunity </a></li>
					<li><a href="www.twitter.com/AllianzID" style="color:white">Twitter: AllianzID </a></li>
					<li><a href="http://instagram.com/allianzindonesia" style="color:white">Instagram: AllianzIndonesia</a></li>
				</ul>

			</div>
			<div id="tab-syariah" class="tab-content">
				<!-- <h3>Asuransi Syariah</h3> -->
				<ul class="nav">
						<li><a href="finansial.php#fin-report" onclick="navigateMe('report')" style="color:white">Laporan Keuangan</a></li>
						<li><a href="download.php#unit-link" onclick="navigateMe('unit-link')" style="color:white"> Laporan Perkembangan Unit Link Tahun 2013</a></li>
						<li><a href="customer-service.php#cs_rumah-sakit" onclick="navigateMe('rumah-sakit')" style="color:white">Daftar Rekanan Rumah Sakit</a></li>
						<li><a href="download.php#asuransi-jiwa" onclick="navigateMe('asuransi-jiwa')" style="color:white">Download Formulir-formulir Penting</a></li>
						<li><a href="download.php#newsletter-allianz" onclick="navigateMe('newsletter-allianz')" style="color:white">Newsletter</a></li>
				</ul>
			</div>
		</div>
		<!-- Tablink -->
	</div>	
</div>
<!-- Accordion -->

<!--Tab gantung -->
	<div class="tab-wrapper-hold">
		<div class="tab-button">
			<ul>
				<li><a href="#tab-umum" class="accordion-tab" onclick="changeHeader(this)">Layanan Kami</a></li>
				<li><a href="#tab-jiwa" class="accordion-tab" onclick="changeHeader(this)">Kontak</a></li>
				<li><a href="#tab-kesehatan" class="accordion-tab" onclick="changeHeader(this)">Media Sosial</a></li>
				<li><a href="#tab-syariah" class="accordion-tab" onclick="changeHeader(this)">Download</a></li>
				
			</ul>
		</div>	
	</div>	
<!--Tab gantung -->

</div>