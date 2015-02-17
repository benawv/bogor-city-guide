<div id="best-products">
<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many images you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<30; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
            <?php echo $this->select("slides",[
                "store" => $selectStore,
                "reload" => true
            ]); ?>
        </div>
    </div>

    <style type="text/css">
        .gallery .item {
            min-height: 377px;
        }
    </style>
<?php } ?>
<?php 
	$id = "banner-".uniqid();
	$slides = 2;
	if(!$this->select("slides")->isEmpty()){
        $slides = (int) $this->select("slides")->getData();
    }
?>
	<ul class="slides">
		<?php for($i=0;$i<$slides;$i++) { ?>
			<li>
				<?php
				    if(!$this->editmode){
					if($i!=0){
					    $hide = "hide";
					}
					else{
					    $hide = "";
					}
				    }
				    else{
					$hide = "";
				    }
				?>
				<div class="product <?php echo $hide;?>">
					<div class="photo">
						<?php echo $this->image("banner_".$i, ["thumbnail" => "banner", "dropClass" => $id . "-" . $i, "title" => "Image Size 635x310"])?>
					</div>
					<?php
						$extra = $this->image("banner_".$i)->getHotspots();
						//$pos = $extra[0]['data'][0]['value'];
						//$color = $extra[0]['data'][1]['value'];
						$pos = $this->select('position_'.$i)->getData()?$this->select('position_'.$i)->getData():'left';
						$color = $this->select('color_'.$i)->getData()?$this->select('color_'.$i)->getData():'orange';
					?>
					<div class="fixbox <?php echo $pos?>60">
						<div class="place-bg bg-<?php echo $color?>">
							<?php if($this->editmode || !$this->input("banner-title-" . $i)->isEmpty()) { ?>
	                            <h1><?php echo $this->input("banner-title-" . $i, ["width" => 251]) ?></h1>
	                        <?php } ?>
	                        <?php if($this->editmode || !$this->textarea("banner-text-" . $i)->isEmpty()) { ?>
	                            <p>
	                                <?php echo $this->textarea("banner-text-" . $i, ["width" => 251, "height" => 100]) ?>
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
							<?php echo $this->link("bannerlink_".$i); ?>
						</div>
					</div>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>