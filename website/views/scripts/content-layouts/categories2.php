<?php 
	if(!isset($_COOKIE["userWishlist"]))
	{
		$value = strtotime(date("YmdHis"))."".rand();
		setcookie("userWishlist", $value);
	}
?>
<div class="container boxes-view">
	<div class="heading clearfix">
		<?php echo $this->template("includes/breadcrumb.php")?>
		<h1 class="title"><?php echo $this->document->getProperty('navigation_title');?></h1>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
	</div>
	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('banner', array(
					"allowed" => array("banner2", "static-banner")))?>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
					"allowed" => array("tile-quicklinks", "quiclinks", "layanankami-quicklinks","product-quicklinks","blank-tile-quicklinks-static","blank-animation-quicklinks")))?>
		</div>
	</div><!-- .wrapper-special -->
	<?php echo $this->areablock('container-text', array(
					'allowed' => array('sections-gallery','tekskanan60-imagekiri40_2', 'tekskanan60-videokiri40_2', 'sections-video')))?>
	<!-- content -->
	<div style="clear: both"></div>
	<div class="items-container">
		<?php echo $this->areablock('container', array(
					'allowed' => array('container-box', 'container-box-static', "container-box-carousel","container-box-carousel-modal")))?>
	</div>
	<!-- endcontent -->
	
	<!-- Map Location -->
		<?php echo $this->areablock('maparea', array(
					"allowed" => array("map", "map-point")))?>
	<!-- End Map Location -->
</div>
