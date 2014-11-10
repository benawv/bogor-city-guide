<?php 
	$style = 'overflow: scroll;';
?>
<script>
	<?php if(!$this->editmode){?>
		function changeHeader(object)
		{
			$("#accordion-header").html("");
			$("#accordion-header").html("Asuransi " + object.text);
		}
	<?php }?>
</script>
<?php if($this->editmode){?>
<style type="text/css">
	.accordion-tab.inactive-header input.x-form-text.x-form-field{
		color: #FFFFFF !important;
	}
	#quicklinks .tab-button ul li a
	{
		background: none repeat scroll 0 0 #003781 !important;
		color: #FFFFFF !important;
	}
</style>
<?php }?>
<!-- Accordion -->
<div id="accordion-container">
	<h2 class="accordion-header" id="accordion-header"><?php echo $this->input("headline", array("width" => 200));?></h2>
	<div class="accordion-content">
		<!-- Tablink -->
		<div class="tab-wrapper-short" style="<?php echo $this->editmode?$style:''?>">
				<div id="tab-kesehatan" data-header="Asuransi Kesehatan" class="tab-content" >
					<!-- <h3>Asuransi Kesehatan</h3> -->
					<ul class="nav">
						<?php while ($this->block("linkblock")->loop()) { ?>
						    <li><?php echo $this->link("myLink"); ?></li>
						<?php } ?>
						<!--
						<li><a href="product-detail-allianz-smarthealth-maxi-violet.php">SmartHealth Maxi Violet - Asuransi Kesehatan</a></li>
						<li><a href="product-detail-allianz-smarthealth-asuransi-kumpulan.php">SmartHealth - Asuransi Kesehatan Kumpulan</a></li>
						<li><a href="product-detail-allianz-asuransi-kesehatan-allisya-care.php">Asuransi Kesehatan Allisya Care</a></li>
						-->
					</ul>

				</div>
				<div id="tab-umum" class="tab-content">
					<!-- <h3>Asuransi Kumpulan</h3> -->
					<ul class="nav">
						<?php while ($this->block("linkblock-umum")->loop()) { ?>
						    <li><?php echo $this->link("myLink-umum"); ?></li>
						<?php } ?>
						<!--
						<li><a href="product-detail-allianz-mobilku.php">Allianz Mobilku</a></li>
						<li><a href="product-detail-allianz-perjalanan-travelPro.php">Asuransi Perjalanan TravelPro</a></li>
						<li><a href="product-detail-allianz-kartu-proteksiku.php">Kartu Proteksiku</a></li>
						<li><a href="product-detail-allianz-dana-kesehatanku.php">Dana Kesehatanku</a></li>
						<li><a href="product-detail-allianz-rumahku-plus.php">Rumahku Plus</a></li>
						-->
					</ul>
				</div>		
				<div id="tab-jiwa" class="tab-content">
					<!-- <h3>Asuransi Jiwa</h3> -->
					
					<ul class="nav">
						<?php while ($this->block("linkblock-jiwa")->loop()) { ?>
						    <li><?php echo $this->link("myLink-jiwa"); ?></li>
						<?php } ?>
						<!--
						<li><a href="product-detail-allianz-smartlink-new-flexi-account-plus.php">SmartLink New Flexi Account Plus</a></li>
						<li><a href="product-detail-allianz-smartlink-flexi-account.php">SmartLink Flexi Account</a></li>
						<li><a href="product-detail-allianz-smartlink-ci100.php">SmartLink CI100</a></li>
						<li><a href="product-detail-allianz-hospital-and-surgical-care.php">Hospital And Surgical Care</a></li>
						<li><a href="product-detail-allianz-allisya-hospital-and-surgical-care.php">Allisya Hospital And Surgical Care</a></li>
						<li><a href="product-detail-allianz-smartlink-maxi-fund-plus.php">SmartLink Maxi Fund Plus</a></li>
						<li><a href="product-detail-allianz-taproku.php">TaproKu</a></li>
						-->
					</ul>
				</div>
				<div id="tab-kumpulan" class="tab-content">
					<!-- <h3>Asuransi Kumpulan</h3> -->
					<ul class="nav">
						<?php while ($this->block("linkblock-kumpulan")->loop()) { ?>
						    <li><?php echo $this->link("myLink-kumpulan"); ?></li>
						<?php } ?>
						<!--
						<li><a href="product-detail-allianz-smartpension.php">SmartPension</a></li>
						<li><a href="product-detail-allianz-smarthealth.php">SmartHealth</a></li>
						<li><a href="product-detail-allianz-smart-protection.php">Smart Protection</a></li>
						<li><a href="product-detail-allianz-payung-keluarga.php">Payung Keluarga</a></li>
						<li><a href="product-detail-allianz-smart-finance.php">Smart Finance</a></li>
						-->
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
				<li><a href="#tab-kesehatan" class="accordion-tab" onclick="changeHeader(this)"><?php echo $this->input("tab1", array("width" => 80));?></a></li>
				<li><a href="#tab-jiwa" class="accordion-tab" onclick="changeHeader(this)"><?php echo $this->input("tab2", array("width" => 80));?></a></li>
				<li><a href="#tab-umum" class="accordion-tab" onclick="changeHeader(this)"><?php echo $this->input("tab3", array("width" => 80));?></a></li>
				<li><a href="#tab-kumpulan" class="accordion-tab" onclick="changeHeader(this)"><?php echo $this->input("tab4", array("width" => 80));?></a></li>
				
			</ul>
		</div>	
	</div>	
<!--Tab gantung -->