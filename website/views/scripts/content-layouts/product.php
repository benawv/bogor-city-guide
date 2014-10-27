<style type="text/css">
	.upperText{
		text-transform: uppercase;
	}
</style>
<div class="container boxes-view">
	<div class="heading clearfix pagenav">
		<span class="breadcrumb"><a href="#">Produk</a> &rsaquo; <?php 
			$url = $_SERVER['REQUEST_URI'];
			$uri = explode("/", $url);
			for($x = 2; $x < count($uri); $x++)
			{
				$title = explode("-", $uri[$x]);
				$textTitle = "";
				for ($y = 0; $y < count($title); $y++)
				{
					$textTitle = " <span class='upperText'>".substr($title[$y], 0, 1)."</span>".substr($title[$y], 1);
					echo $textTitle;
				}
			}
		?>
			
		</span>
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
