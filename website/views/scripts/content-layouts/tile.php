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
		$menu = explode("-", $uri[1]);
		$textTitle2 = "";
		$text2 = "";
		for ($y = 0; $y < count($menu); $y++)
		{
			$textTitle2 = " <span class='upperText'>".substr($menu[$y], 0, 1)."</span>".substr($menu[$y], 1);
			$text2 .= $textTitle2;
		}
	}
	else{
		$text = "";
	}
?>
<div class="container boxes-view">
	<div class="heading clearfix pagenav">
		<?php echo $this->template("includes/breadcrumb.php")?>
		<h2 class="title"><?php echo $this->document->getProperty('navigation_title');?></h2>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
					"allowed" => array("quicklinks")))?>
		</div>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
	</div>
	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('banner', array(
					"allowed" => array("banner", "static-banner", "banner-without-note")))?>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami-wrapper', array(
					"allowed" => array("tile-quicklinks", "layanankami-quicklinks", "quicklinks","blank-tile-quicklinks-static")))?>
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
