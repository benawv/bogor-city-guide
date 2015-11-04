<div class="container boxes-view">
	<?php echo $this->areablock('bannerArea', array(
				'allowed' => array('gallery-carousel')))?>
	<div class="container boxes-view">
		<div class="items-container custom_item_home">

			<div>
				<?php echo $this->areablock('container1', array('allowed' => array(
					'container-box2',
					'sections', 'sections-box-full', 'sections-tab', 'teks-tabs',
					'sections-video', 'sections-gallery',
					'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
					'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
					'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
					'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
					'multi-video',
					'container-box-static','container-box-carousel','container-box-carousel-text'))); ?>
			</div>
		</div> <!-- .items-container -->
	</div>
	<div class="wrapper-special clearfix noArrow">
		<?php /* echo $this->areablock('bannerProduct', array(
				'allowed' => array('banner', 'static-banner'))) */?>
		<?php echo $this->areablock('banner', array(
					"allowed" => array("banner", "static-banner",'banner-without-note')))?>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
				'allowed' => array('layanankami-quicklinks', 'blank-tile-quicklinks-static','blank-animation-quicklinks')))?>
		</div>
		<!-- <div class="banner_products" style="min-height: 100px;">
			<?php //echo $this->areablock('static_banner', array('allowed' => array('static-banner-home','list-berita')))?>
		</div> -->
		
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

		<div>
			<?php echo $this->areablock('container', array('allowed' => array(
				'container-box2',
					'sections', 'sections-box-full', 'sections-tab', 'teks-tabs',
					'sections-video', 'sections-gallery',
					'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
					'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
					'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
					'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
					'multi-video',
					'container-box-static','container-box-carousel','container-box-carousel-text'))); ?>
		</div>
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