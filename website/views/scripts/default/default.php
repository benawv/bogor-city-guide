<div class="container">
	<?php echo $this->areablock('bannerArea', array(
				'allowed' => array('gallery-carousel')))?>
	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('bannerProduct', array(
				'allowed' => array('banner', 'static-banner')))?>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
				'allowed' => array('layanankami-quicklinks')))?>
		</div>
	</div>
	
	<!-- Community -->
		<?php echo $this->areablock('jurnalAllianz', array(
				'allowed' => array('jurnal-allianz','tahukah-anda')))?>
	
		<?php echo $this->areablock('tahukahAnda', array(
				'allowed' => array('jurnal-allianz','tahukah-anda')))?>
	
	<!-- End Community -->
	<?php
		$value = strtotime(date("YmdHis")).rand();
		
		if($_COOKIE["user"]=="")
		{
			setcookie("user", $value);
		}
	?>
	<!-- Map -->
	<div class="wrapper clearfix">
		<div id="agent-locator">
			<h2>Marketing Office Location</h2>
			<div id="maparea">
				
			</div>
		</div>
		<?php echo $this->area("mapArea", array("type" => "map-point")); ?>
	</div>
	<!-- End Map -->
	<div class="wrapper clearfix">
		<div id="social-media-activity">
			<script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script>
			<div class="tintup" data-id="sevenova" data-columns="2"  style="height:265px;width:100%;overflow-y: scroll">
				<a href="http://www.tintup.com" style="width:118px;height:31px;background-image:url(//d33w9bm0n1egwm.cloudfront.net/assets/logos/poweredbytintsmall.png);position:absolute;bottom:10px;right: 20px;text-indent: -9999px;z-index:9;">hashtag campaign</a>
			</div>
		</div>
		<div id="videos">
			<?php echo $this->video('videoHome', array('width' => '100%' , "height" => '265')) ?>
		</div>
	</div>
</div>