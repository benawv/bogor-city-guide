<div class="container">
	<?php echo $this->areablock('bannerArea', array(
				'allowed' => array('gallery-carousel')))?>
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
		<div class="items-container">
		<!-- content -->
			<?php echo $this->areablock('container', array(
						"allowed" => array("container-box-static", "container-box-video", "image-full-page")));
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
