<div class="container boxes-view">
	<div class="heading clearfix">
		<h5 style="visibility:hidden;"><span><a href="product.php">Produk</a></span> &raquo; <span><b>Asuransi Umum</b></span></h5>
		<span class="title"><?php echo $this->document->getTitle()?><span>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
					"allowed" => array("quicklinks")))?>
		</div>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
	</div>
	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('banner', array(
					"allowed" => array("banner", "static-banner")))?>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami-wrapper', array(
					"allowed" => array("tile-quicklinks", "layanankami-quicklinks")))?>
		</div>
	</div><!-- .wrapper-special -->
	
	<div class="items-container">
	<!-- content -->
		<?php echo $this->areablock('container', array(
					"allowed" => array("container-box-static", "container-box-carousel", "container-box-carousel-text")))?>
	<!-- endcontent -->
	</div>
	
	<?php echo $this->areablock('container-modal', array('allowed' => array('modal')))?>
	
	<!-- Map Location -->
		<?php echo $this->areablock('maparea', array(
					"allowed" => array("map", "map-point")))?>
	<!-- End Map Location -->
</div>
