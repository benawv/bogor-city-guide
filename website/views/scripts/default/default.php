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
					<!-- <div class="photo">
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
							<a href="/produk/asuransi-kesehatan/allianz-global">Info selengkapnya</a>
						</div>
					</div> -->
					<div class="photo">
						<?php $i = "static";$id = "idStatic";
							  echo $this->image("image_".$i, ["dropClass" => $id . "-" . $i, 'title' 	=> 'Image Size 635x310']);
						?>
					</div>
					<?php
						$extra = $this->image("image_".$i)->getHotspots();
						//$pos = $extra[0]['data'][0]['value'];
						//$color = $extra[0]['data'][1]['value'];
						$pos = $this->select('position_'.$i)->getData();
						$color = $this->select('color_'.$i)->getData();
					?>
					<div class="fixbox <?php echo $pos?>60">
						<div class="place-bg bg-<?php echo $color?>">
								<?php if($this->editmode || !$this->input("caption-title-" . $i)->isEmpty()) { ?>
		                            <h1><?php echo $this->input("caption-title-" . $i, ["width" => 251]) ?></h1>
		                        <?php } ?>
		                        <?php if($this->editmode || !$this->textarea("caption-text-" . $i)->isEmpty()) { ?>
		                            <p>
		                                <?php echo $this->textarea("caption-text-" . $i, ["width" => 251, "height" => 100]) ?>
		                            </p>
		                        <?php } ?>
		                        <?php if($this->editmode) { ?>
		                        	<p>
		                        	<?php 
		                        		echo "Position: <br />";
		                        		echo $this->select("position_".$i,array(
										    "store" => array(
										        array("left", "Left"),
										        array("right", "Right")
										    )
										)); 
									?>
		                        	</p>
		                        	<p>
			                        <?php 
			                        	echo "Color: <br />";
		                        		echo $this->select("color_".$i,array(
										    "store" => array(
										        array("red", "Red"),
										        array("lightgreen", "Light Green"),
										        array("purple", "Purple"),
										        array("blue", "Blue"),
										        array("orange", "Orange")
										    ),
										    "reload" => true
										)); 
									?>
		                        	</p>
		                        <?php } ?>
							</div>
							<div class="edge e-<?php echo $color?>">
								<?php echo $this->link("boxlink_".$i); ?>
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

	<?php echo $this->areablock('modal-box-home', array('allowed' => array('modal-home')));?>
</div>
