<div class="container boxes-view">
	<div class="heading clearfix pagenav">
		<span class="title">Produk<span>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
	</div>
	<div class="wrapper-special clearfix">
		<div id="quicklinks">
			<script>
			function changeHeader(object)
			{
				$("#accordion-header").html("");
				$("#accordion-header").html("Asuransi " + object.text);
			}
			</script>
			<!-- Accordion -->
			<div id="accordion-container">
				<h2 class="accordion-header" id="accordion-header">Asuransi Kesehatan</h2>
				<div class="accordion-content">
					<!-- Tablink -->
					<div class="tab-wrapper-short">
						<div id="tab-kesehatan" data-header="Asuransi Kesehatan" class="tab-content" >
							<!-- <h3>Asuransi Kesehatan</h3> -->
							<ul class="nav">
								<li><a href="product-detail-allianz-smarthealth-maxi-violet.php">SmartHealth Maxi Violet - Asuransi Kesehatan</a></li>
								<li><a href="product-detail-allianz-smarthealth-asuransi-kumpulan.php">SmartHealth - Asuransi Kesehatan Kumpulan</a></li>
								<li><a href="product-detail-allianz-asuransi-kesehatan-allisya-care.php">Asuransi Kesehatan Allisya Care</a></li>
							</ul>

						</div>
						<div id="tab-umum" class="tab-content">
							<!-- <h3>Asuransi Kumpulan</h3> -->
							<ul class="nav">
								<li><a href="product-detail-allianz-mobilku.php">Allianz Mobilku</a></li>
								<li><a href="product-detail-allianz-perjalanan-travelPro.php">Asuransi Perjalanan TravelPro</a></li>
								<li><a href="product-detail-allianz-kartu-proteksiku.php">Kartu Proteksiku</a></li>
								<li><a href="product-detail-allianz-dana-kesehatanku.php">Dana Kesehatanku</a></li>
								<li><a href="product-detail-allianz-rumahku-plus.php">Rumahku Plus</a></li>
							</ul>
						</div>		
						<div id="tab-jiwa" class="tab-content">
							<!-- <h3>Asuransi Jiwa</h3> -->
							
							<ul class="nav">
								<li><a href="product-detail-allianz-smartlink-new-flexi-account-plus.php">SmartLink New Flexi Account Plus</a></li>
								<li><a href="product-detail-allianz-smartlink-flexi-account.php">SmartLink Flexi Account</a></li>
								<li><a href="product-detail-allianz-smartlink-ci100.php">SmartLink CI100</a></li>
								<li><a href="product-detail-allianz-hospital-and-surgical-care.php">Hospital And Surgical Care</a></li>
								<li><a href="product-detail-allianz-allisya-hospital-and-surgical-care.php">Allisya Hospital And Surgical Care</a></li>
								<li><a href="product-detail-allianz-smartlink-maxi-fund-plus.php">SmartLink Maxi Fund Plus</a></li>
								<li><a href="product-detail-allianz-taproku.php">TaproKu</a></li>
							</ul>
						</div>
						<div id="tab-kumpulan" class="tab-content">
							<!-- <h3>Asuransi Kumpulan</h3> -->
							<ul class="nav">
								<li><a href="product-detail-allianz-smartpension.php">SmartPension</a></li>
								<!--<li><a href="product-detail-allianz-smarthealth.php">SmartHealth</a></li>-->
								<li><a href="product-detail-allianz-smart-protection.php">Smart Protection</a></li>
								<li><a href="product-detail-allianz-payung-keluarga.php">Payung Keluarga</a></li>
								<li><a href="product-detail-allianz-smart-finance.php">Smart Finance</a></li>
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
						<li><a href="#tab-umum" class="accordion-tab" onclick="changeHeader(this)">Kesehatan</a></li>
						<li><a href="#tab-jiwa" class="accordion-tab" onclick="changeHeader(this)">Jiwa</a></li>
						<li><a href="#tab-kesehatan" class="accordion-tab" onclick="changeHeader(this)">Kesehatan</a></li>
						<li><a href="#tab-kumpulan" class="accordion-tab" onclick="changeHeader(this)">Kumpulan</a></li>
						
					</ul>
				</div>	
			</div>	
			<!--Tab gantung -->
		</div>
	</div><!-- .wrapper-special -->
	
	<!-- content -->
	<div class="items-container">
		<?php 
			foreach($this->entries as $entry) {
		?>
				<div class="item">
					<div class="heading">
						<h2 class="title_news"><a href="#"><?php echo $entry['judul'];?></a></h2>
						<div class="btn-group">
							<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
							<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
					<a href="product-sub-asuransi-kesehatan.php" class="thumbnail">
						<img class="image_share" src="<?php echo $entry['path'].$entry['filename']?>" alt="<?php echo $entry['key']?>">
					<!-- 	<ul class="square-yellow">
							<li class="title">Produk sesuai tujuan:</li>
							<li>SmartHealth Maxi Violet</li>
							<li>SmartHealth</li>
							<li>Asuransi Kesehatan AlliSya Care</li> 
						</ul> -->
					</a>
					<div class="description">
						<?php echo $entry['deskripsi_full']?>
					</div>
				</div>
		<?php 
			} 
		?>			
	</div>
	<!-- endcontent -->
	
	<!-- Map Location -->
		<?php echo $this->areablock('maparea', array(
					"allowed" => array("map", "map-point")))?>
	<!-- End Map Location -->
</div>
