<div class="container">
	<?php echo $this->areablock('bannerArea', array(
				'allowed' => array('gallery-carousel')))?>
	<div class="wrapper-special clearfix noArrow">
		<?php /* echo $this->areablock('bannerProduct', array(
				'allowed' => array('banner', 'static-banner'))) */?>
		<div id="best-products" class="banner_products" style="min-height: 100px;">
			<?php echo $this->areablock('static_banner', array('allowed' => array('static-banner-home','list-berita')))?>
		</div>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
				'allowed' => array('layanankami-quicklinks', 'blank-tile-quicklinks-static')))?>
		</div>
	</div>
	<?php
		function limit_words($string, $word_limit)
		{
			$words = explode(" ",$string);
			return implode(" ",array_splice($words,0,$word_limit));
		}
	?>
	<div class="container boxes-view">
	<div class="items-container custom_item_home">
	<!-- Community -->
		<?php echo $this->areablock('jurnalAllianz', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
	
		<?php echo $this->areablock('tahukahAnda', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
				
		<?php echo $this->areablock('communityTips', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
	
	<!-- End Community -->
	</div> <!-- .items-container -->
	</div>
	<?php
		$value = strtotime(date("YmdHis")).rand();
		
		if($_COOKIE["user"]=="")
		{
			setcookie("user", $value);
		}
	?>
	
	<!-- Map -->
	
			<!--<h2><?php //echo $this->input("judul_map", array("width" => 255));?></h2>-->
			<!--<div id="maparea">
				
			</div>-->
		<?php echo $this->areablock("grafik", array('allowed' => array("grafik-fund"))); ?>
	
	<!-- End Map -->

	<?php echo $this->areablock('modal-box-home', array('allowed' => array('modal-home')));?>
</div>