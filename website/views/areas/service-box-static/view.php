<?php 
	$style = 'overflow: scroll;';
?>
<div class="tab-wrapper" style="<?php echo $this->editmode?$style:''?>">
	<div id="tab-quicklinks" class="tab-content">
		<h3 id="inputan1"><?php echo $this->input("quicklinks", array("width" => 200));?></h3>
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
        <h3 id="inputan2"><?php echo $this->input("contact", array("width" => 200));?></h3>
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
		
        <h3 id="inputan3"><?php echo $this->input("sosmed", array("width" => 200));?></h3>
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
        <h3 id="inputan4"><?php echo $this->input("download", array("width" => 200));?></h3>
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
			<li><a class="tab-layanan-anda" href="#tab-quicklinks" id="edit1"><?php echo $this->input("tab01", array("width" => 200));?></a></li>
			<li><a class="tab-kontak" href="#tab-contact" id="edit2"><?php echo $this->input("tab02", array("width" => 200));?></a></li>
			<li><a class="tab-sosmed" href="#tab-socialmedia" id="edit3"><?php echo $this->input("tab03", array("width" => 200));?></a></li>
			<li class="last"><a class="tab-download" href="#tab-download" tab="edit4"><?php echo $this->input("tab04", array("width" => 200));?></a></li>
		</ul>
	</div>
	<?php } ?>
</div>
<?php if($this->editmode){ ?>
<!--Tab gantung -->
	<div class="tab-wrapper-hold">
		<div class="tab-button">
			<ul>
				<li><a href="#tab-quicklinks" class="accordion-tab" onclick="changeHeader(this)" id="wrap1"><?php echo $this->input("tabA1", array("width" => 200));?></a></li>
				<li><a href="#tab-contact" class="accordion-tab" onclick="changeHeader(this)" id="wrap2"><?php echo $this->input("tabA2", array("width" => 200));?></a></li>
				<li><a href="#tab-socialmedia" class="accordion-tab" onclick="changeHeader(this)" id="wrap3"><?php echo $this->input("tabA3", array("width" => 200));?></a></li>
				<li><a href="#tab-download" class="accordion-tab" onclick="changeHeader(this)" id="wrap4"><?php echo $this->input("tabA4", array("width" => 200));?></a></li>
				
			</ul>
		</div>	
	</div>	
<!--Tab gantung -->
<?php } ?>

<!--
<script>
    var t1=$('#wrap1').html();
    var t2=$('#wrap2').html();
    var t3=$('#wrap3').html();
    var t4=$('#wrap').html();
//    alert(t1);
//    alert(t2);
//    alert(t3);
//    alert(t4);
    $('#edit1').html(t1);
    $('#edit2').html(t2);
    $('#edit3').html(t3);
    $('#edit4').html(t4);

    
    $('#wrap1').html(t1);
    $('#wrap2').html(t2);
    $('#wrap3').html(t3);
    $('#wrap4').html(t4);
</script>-->
