<div class="container boxes-view">
	<div class="heading clearfix">
		<h5 style="visibility:hidden;"><span><a href="product.php">Produk</a></span> &raquo; <span><b>Asuransi Umum</b></span></h5>
		<span class="title">Tentang Kami<span>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
					"allowed" => array("quiclinks")))?>
		</div>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
	</div>
	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('banner', array(
					"allowed" => array("banner", "static-banner")))?>
		
	</div><!-- .wrapper-special -->
	
	<!-- content -->
		<?php echo $this->areablock('container', array(
					"allowed" => array("container-box-6", "gallery-carousel", "container-box-5")))?>
	<!-- endcontent -->
	
	<!-- Map Location -->
		<?php echo $this->areablock('maparea', array(
					"allowed" => array("map", "map-point")))?>
	<!-- End Map Location -->
</div>
