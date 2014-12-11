<?php 
	if(!isset($_COOKIE["userWishlist"]))
	{
		$value = strtotime(date("YmdHis"))."".rand();
		setcookie("userWishlist", $value);
	}
?>
<?php
	if(!$this->editmode) { 
		$url = $_SERVER['REQUEST_URI'];
		$uri = explode("/", $url);
		
		for($x = 1; $x < count($uri); $x++)
		{
			$title = explode("-", $uri[$x]);
			$textTitle = "";
			$text = "";
			for ($y = 0; $y < count($title); $y++)
			{
				$textTitle = " <span class='upperText'>".substr($title[$y], 0, 1)."</span>".substr($title[$y], 1);
				$text .= $textTitle;
			}
		}
	}
	else{
		$text = "";
	}
?>
<div class="container boxes-view">
	<div class="heading clearfix">
		<h5><a href="/<?php echo $uri[1];?>"><span><?php echo $uri[1];?></span></a> &rsaquo; <a href="/<?php echo $uri[1]."/".$uri[2];?>"><span><?php echo $text;?></span></a></h5>
		<span class="title"><?php echo $this->document->getProperty('navigation_title');?><span>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
	</div>
	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('banner', array(
					"allowed" => array("banner2", "static-banner")))?>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
					"allowed" => array("tile-quicklinks", "quiclinks", "layanankami-quicklinks","product-quicklinks","blank-tile-quicklinks-static")))?>
		</div>
	</div><!-- .wrapper-special -->
	<?php echo $this->areablock('container-text', array(
					'allowed' => array('tekskanan60-imagekiri40_2', 'tekskanan60-videokiri40_2')))?>
	<!-- content -->
	<div class="items-container">
		<?php echo $this->areablock('container', array(
					'allowed' => array('container-box', 'container-box-static')))?>
	</div>
	<!-- endcontent -->
	
	<!-- Map Location -->
		<?php echo $this->areablock('maparea', array(
					"allowed" => array("map", "map-point")))?>
	<!-- End Map Location -->
</div>
