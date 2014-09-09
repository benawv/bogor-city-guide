<div class="container boxes-view">
	<div class="heading clearfix pagenav">
		<span class="breadcrumb"><a href="product.php">Produk</a></span>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
		<div id="quicklinks">
			<?php echo $this->areablock('product-quicklinks', array('allowed' => array('product-quicklinks')))?>
		</div>
	</div>
	
	<!-- content -->
	<div class="items-container">
		<?php echo $this->areablock('container', array(
					'allowed' => array('container-box')))?>
	</div>
	<!-- endcontent -->
	
	<!-- Map Location -->
		<?php echo $this->areablock('maparea', array(
					"allowed" => array("map", "map-point")))?>
	<!-- End Map Location -->
</div>
