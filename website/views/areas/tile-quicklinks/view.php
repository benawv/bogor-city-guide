<?php 
	$style = 'overflow: scroll;';
?>
<div class="tab-wrapper" style="<?php echo $this->editmode?$style:''?>">
	<div id="tab-quicklinks" class="tab-content">
		<h3>Layanan Kami</h3>
		<ul class="nav">
			<?php while ($this->block("linkblock-layanankami")->loop()) { ?>
						    <li><?php echo $this->link("myLink-layanankami"); ?></li>
			<?php } ?>
			<!--
			<li><a href="klaim.php">Prosedur Klaim</a></li>
				<li><a href="customer-service.php#cs_premi" onclick="navigateMe('premi')">Info Cara Pembayaran Premi</a></li>
				<li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/" target="_blank">Customer Online Portal</a></li>
				<li><a href="customer-service.php#cs_cara-membeli" onclick="navigateMe('cara-membeli')">Info Cara Membeli</a></li>
				<li><a href="investasi.php">Harga Unit</a></li>
				<li><a href="https://www.allianzlife.co.id/eBancassurance/" target="_blank">BancAssurance Portal</a></li>
				<li><a href="https://www.allianzlife.co.id/ePension/" target="_blank">e-Pension</a></li>
				<li><a href="allianz-platinum.php" >Allianz Platinum</a></li>
				<li><a href="faq.php">FAQ</a></li>
			-->
		</ul>
	</div>
	<div id="tab-contact" class="tab-content">
		<?php echo $this->wysiwyg('kontak')?>
		<!--
		<h3>Kontak</h3>
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
		-->
	</div>
	<div id="tab-socialmedia" class="tab-content">
		<h3>Social Media</h3>
		<p>
		<ul class="nav">
			<?php while ($this->block("linkblock-socialmedia")->loop()) { ?>
						    <li><?php echo $this->link("myLink-socialmedia"); ?></li>
			<?php } ?>
			<!--
			<li><a href="www.facebook.com/AllianzIndonesiaCommunity" style="color:white">Facebook:  AllianzIndonesiaCommunity </a></li>
			<li><a href="www.twitter.com/AllianzID" style="color:white">Twitter: AllianzID </a></li>
			<li><a href="http://instagram.com/allianzindonesia" style="color:white">Instagram: AllianzIndonesia</a></li>
			-->
		</ul>
		</p>
	</div>
	<div id="tab-download" class="tab-content">
		<h3>Download</h3>
		<p>
			<ul class="nav">
			<?php while ($this->block("linkblock-download")->loop()) { ?>
						    <li><?php echo $this->link("myLink-download"); ?></li>
			<?php } ?>
			<!--
			<li><a href="finansial.php#fin-report" onclick="navigateMe('report')" style="color:white">Laporan Keuangan</a></li>
				<li><a href="download.php#unit-link" onclick="navigateMe('unit-link')" style="color:white"> Laporan Perkembangan Unit Link Tahun 2013</a></li>
				<li><a href="customer-service.php#cs_rumah-sakit" onclick="navigateMe('rumah-sakit')" style="color:white">Daftar Rekanan Rumah Sakit</a></li>
				<li><a href="download.php#asuransi-jiwa" onclick="navigateMe('asuransi-jiwa')" style="color:white">Download Formulir-formulir Penting</a></li>
				<li><a href="download.php#newsletter-allianz" onclick="navigateMe('newsletter-allianz')" style="color:white">Newsletter</a></li>
			-->
			</ul>
		</p>
	</div>
	

	<!--<div class="tab-button">
		<ul>
			<li><a href="#tab-quicklinks">Quick Links</a></li>
			<li><a href="#tab-contact">Contact</a></li>
			<li><a href="#tab-socialmedia">Social Media</a></li>
			<li><a href="#tab-download">Download</a></li>
		</ul>
	</div>-->
	<?php if(!$this->editmode) { ?>
	<div class="tab_button">
		<ul>
			<li><a class="tab-layanan-anda" href="#tab-quicklinks">Layanan Kami</a></li>
			<li><a class="tab-kontak" href="#tab-contact">Kontak</a></li>
			<li><a class="tab-sosmed" href="#tab-socialmedia">Social Media</a></li>
			<li class="last"><a class="tab-download" href="#tab-download">Download</a></li>
		</ul>
	</div>
	<?php } ?>
</div>
<?php if($this->editmode){ ?>
<!--Tab gantung -->
	<div class="tab-wrapper-hold">
		<div class="tab-button">
			<ul>
				<li><a href="#tab-quicklinks" class="accordion-tab" onclick="changeHeader(this)">Layanan Kami</a></li>
				<li><a href="#tab-contact" class="accordion-tab" onclick="changeHeader(this)">Kontak</a></li>
				<li><a href="#tab-socialmedia" class="accordion-tab" onclick="changeHeader(this)">Social Media</a></li>
				<li><a href="#tab-download" class="accordion-tab" onclick="changeHeader(this)">Download</a></li>
				
			</ul>
		</div>	
	</div>	
<!--Tab gantung -->
<?php } ?>