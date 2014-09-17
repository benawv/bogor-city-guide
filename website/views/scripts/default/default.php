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
	<?php 
		$entries = new Object_CommunityTips_List();
		$entries->setLimit("6");
		$entries->setOrderKey("date");
		$entries->setOrder("desc");
		if(count($entries)>0)
		{
	?>
	<!-- Community -->
	<div id="community" class="clearfix">
		<h2>Allianz Community Tips</h2>
		<div class="tips">
			<?php
				foreach($entries as $entry)
				{
			?>
					<div class="tip">
						<div class="photo"><img src="<?php echo $entry->imageHomeAllianz->filename;?>" /></div>
						<div class="description">
							<h3><a href="<?php echo "community-detail/".$entry->getO_key()."_".$entry->getO_id()."_".$entry->getTemplate();?>"><?php echo $entry->getTitle();?></a></h3>
							<div class="meta">
								<div class="description-jurnal">
									<?php echo $entry->getSummary();?>
								</div>	
							</div>
						</div>
					</div>
			<?php 
				}
			?>
		</div>
	</div>
	<!-- End Community -->
	<?php
		}
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