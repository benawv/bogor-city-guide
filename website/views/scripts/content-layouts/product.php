<?php 
	if(!isset($_COOKIE["userWishlist"]))
	{
		$value = strtotime(date("YmdHis"))."".rand();
		setcookie("userWishlist", $value);
	}
?>
<style type="text/css">
	.upperText{
		text-transform: uppercase;
	}
</style>
<div class="container boxes-view">
	<div class="heading clearfix pagenav">
		
		<?php echo $this->template("includes/breadcrumb.php")?>
		<span class="breadcrumb">
			<h1 class="title"><?php echo $this->document->getProperty('navigation_title');?></h1>	
		</span>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
		<div id="quicklinks">
			<?php echo $this->areablock('product-quicklinks', array('allowed' => array('product-quicklinks',"blank-tile-quicklinks-static", 'quicklinks', "tile-quicklinks", "layanankami-quicklinks", "blank-animation-quicklinks")))?>
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
