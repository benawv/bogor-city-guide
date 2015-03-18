<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css-ajfc/hotspot/ajfc.hotspot.css">

<div class="container">
	<?php echo $this->areablock('bannerArea', array(
				'allowed' => array('gallery-carousel-ajfc')))?>
	<?php
		function limit_words($string, $word_limit)
		{
			$words = explode(" ",$string);
			return implode(" ",array_splice($words,0,$word_limit));
		}
	?>
	<div class="container boxes-view">
		<?php echo $this->areablock('container2', array(
					"allowed" => array("table-text")));
		?>
	<div class="items-container custom_item_home">
	<!-- Community -->
		<div class="items-container">
		<!-- content -->
			<?php echo $this->areablock('container', array(
						"allowed" => array("daftar-peserta","galeri-ajfc","form-ajfc", "container-box-static", "container-box-video", "proses-seleksi")));
			?>
		<!-- endcontent -->
		</div>
		<?php echo $this->areablock('box-box-auto', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
	
	<!-- End Community -->
	</div> <!-- .items-container -->
	<?php echo $this->areablock('maparea', array(
						"allowed" => array("related-product-3-section")))?>
	</div>
</div>
