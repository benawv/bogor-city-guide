<div class="container">
	<?php echo $this->areablock('bannerArea', array(
				'allowed' => array('gallery-carousel')))?>
	<div class="wrapper-special clearfix noArrow">
		<?php /* echo $this->areablock('bannerProduct', array(
				'allowed' => array('banner', 'static-banner'))) */?>
		<div id="best-products">
			<div style="overflow: hidden; position: relative;" class="flex-viewport">
			<ul style="width: 1600%; transition-duration: 0.6s; transform: translate3d(-2540px, 0px, 0px);" class="slides">

			<li style="width: 635px; float: left; display: block;" class="">
				<div class="product">
					<div class="photo">
						<img draggable="false" alt="" src="/website/static/images/static_image/image_static_allianz_global.png" height="380" width="635">
					</div>
					<div class="fixbox right60">
						<div class="place-bg bg-blue">
								<h1>Allianz Global Benefits</h1>
								<p>
                                	Allianz Global Benefits helps multinational corporations to optimize their employee benefit programs across countries.
                                </p>
						</div>
						<div class="edge e-blue">
							<a href="/produk/asuransi-kesehatan/allianz-global" target="_blank">Info selengkapnya</a>
						</div>
					</div>
				</div>
			</li>
					
					
			</ul>
			</div>
		</div>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
				'allowed' => array('layanankami-quicklinks')))?>
		</div>
	</div>
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
		<?php echo $this->areablock('jurnalAllianz', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
	
		<?php echo $this->areablock('tahukahAnda', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
				
		<?php echo $this->areablock('communityTips', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
	
	<!-- End Community -->
	</div> <!-- .items-container -->
	</div>
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
			<h2><?php echo $this->input("judul_map", array("width" => 255));?></h2>
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