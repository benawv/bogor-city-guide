<div class="container boxes-view">
	<div class="heading clearfix">
		<h5 style="visibility:hidden;"><span><a href="product.php">Produk</a></span> » <span><b>Asuransi Umum</b></span></h5>
		<span class="title">Artikel<span>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
	</span></span></div>
	<div class="wrapper-special clearfix margin-content">
		<div class="banner_products" id="best-products">
			<img alt="product1" src="<?php echo $this->data->banner->path."".$this->data->banner->filename;?>">
		</div>
		<div id="quicklinks">
			<div class="tab-wrapper">
				<div class="tab-content" id="tab-quicklinks" style="display: block;">
					<h3>Layanan Kami</h3>
					<ul class="nav">
						<li><a href="../layanan/klaim#prosedur-klaim" target="_blank">Prosedur Klaim</a></li>
							<li><a onclick="navigateMe('premi')" href="../layanan/customer-service#cara-premi" target="blank">Info Cara Pembayaran Premi</a></li>
							<li><a target="_blank" href="https://www.allianzlife.co.id/CustomerOnlinePortal/">Customer Online Portal</a></li>
							<li><a onclick="navigateMe('cara-membeli')" href="customer-service.php#cs_cara-membeli">Info Cara Membeli</a></li>
							<li><a href="investasi.php">Harga Unit</a></li>
							<li><a target="_blank" href="https://www.allianzlife.co.id/eBancassurance/">BancAssurance Portal</a></li>
							<li><a target="_blank" href="https://www.allianzlife.co.id/ePension/">e-Pension</a></li>
							<li><a href="allianz-platinum.php">Allianz Platinum</a></li>
							<li><a href="faq.php">FAQ</a></li>
						</ul>
				</div>
				<div class="tab-content" id="tab-contact" style="display: none;">
					<h3>Kontak</h3>
					Asuransi Jiwa:
						<br>
						<br>
							<ul class="list-links">
								<li>Tel: +6221-2926 9999</li>
								<li>Fax: +6221-2926 8080</li>
								<li>contactus@allianz.co.id</li>
							</ul>
						
						Asuransi Umum:
						<br>
						<br>
						<ul class="list-links">
							<li>Tel: +6221-2926 9999</li>
							<li>Fax: +6221-2926 9090</li>
							<li>Feedback@allianz.co.id</li>
						</ul>
				</div>
				<div class="tab-content" id="tab-socialmedia" style="display: none;">
					<h3>Social Media</h3>
					<ul class="nav">
						<li><a style="color:white" href="www.facebook.com/AllianzIndonesiaCommunity">Facebook:  AllianzIndonesiaCommunity </a></li>
						<li><a style="color:white" href="www.twitter.com/AllianzID">Twitter: AllianzID </a></li>
						<li><a style="color:white" href="http://instagram.com/allianzindonesia">Instagram: AllianzIndonesia</a></li>
						</ul>
				</div>
				<div class="tab-content" id="tab-download" style="display: none;">
					<h3>Download</h3>
					<ul class="nav">
							<li><a style="color:white" onclick="navigateMe('report')" href="finansial.php#fin-report">Laporan Keuangan</a></li>
							<li><a style="color:white" onclick="navigateMe('unit-link')" href="download.php#unit-link"> Laporan Perkembangan Unit Link Tahun 2013</a></li>
							<li><a style="color:white" onclick="navigateMe('rumah-sakit')" href="customer-service.php#cs_rumah-sakit">Daftar Rekanan Rumah Sakit</a></li>
							<li><a style="color:white" onclick="navigateMe('asuransi-jiwa')" href="download.php#asuransi-jiwa">Download Formulir-formulir Penting</a></li>
							<li><a style="color:white" onclick="navigateMe('newsletter-allianz')" href="download.php#newsletter-allianz">Newsletter</a></li>
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
						<li><a href="#tab-quicklinks" class="tab-layanan-anda active">Layanan Kami</a></li>
						<li><a href="#tab-contact" class="tab-kontak">Kontak</a></li>
						<li><a href="#tab-socialmedia" class="tab-sosmed">Social Media</a></li>
						<li class="last"><a href="#tab-download" class="tab-download">Download</a></li>
					</ul>
				</div>
			</div>
	</div><!-- .wrapper-special -->
		
		<div class="wrapper clearfix">
			<div id="agent-locator">
				<h3><font color="#4169e1"><?php echo $this->data->title;?></font></h3>
				<div id="article-content"> 
					<div class="imgPopUp">
						<p><img border="0" src="<?php echo $this->data->imageTitle->path."".$this->data->imageTitle->filename;?>" alt=""></p>
		
						<?php echo $this->data->content;?>
					</div>
				</div>
			</div>
			
		</div>

	</div>
</div>