<div id="slideshow" class="clearfix">
<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many images you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<=3; $i++) {
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
        .place-bg{
        	height: 265px !important;
        }
    </style>
<?php } ?>
<?php 
	$id = "gallery-carousel-".uniqid();
	$slides = 2;
	if(!$this->select("slides")->isEmpty()){
        $slides = (int) $this->select("slides")->getData();
    }
    $seq = [];
    for($a=1; $a<=$slides; $a++) {
        $selectSeq[] = [$a, $a];
    }
?>
<ul class="slides">
	<?php
		for($z=0;$z<$slides;$z++) {
			for($i=0;$i<$slides;$i++) { 
				$v = $this->select('seq_'.$i)->getData() ? $this->select('seq_'.$i)->getData() : 1;
				$w = $z+1;
				if($w == $v){
?>
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
						<div class="slide <?php echo $hide;?>">
							<div class="photo">
								<?php echo $this->image("image_".$i, ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "title" => "Image Size 960x400"])?>
							</div>
							<?php
								$extra = $this->image("image_".$i)->getHotspots();
								//$pos = $extra[0]['data'][0]['value'];
								//$color = $extra[0]['data'][1]['value'];
								$pos = $this->select('position_'.$i)->getData();
								$color = $this->select('color_'.$i)->getData();
							?>
							<div class="fixbox <?php echo $pos?>60">
								<div class="place-bg bg-<?php echo $color?> place-bg-gallery">
								    <div>
									<?php if($this->editmode || !$this->input("caption-title-" . $i)->isEmpty()) { ?>
			                            <h2><?php echo $this->input("caption-title-" . $i, ["width" => 251]) ?></h2>
			                        <?php } ?>
			                        <?php if($this->editmode || !$this->textarea("caption-text-" . $i)->isEmpty()) { ?>
			                            <p>
			                                <?php echo $this->textarea("caption-text-" . $i, ["width" => 251, "height" => 100, "maxlength" => 140]) ?>
			                            </p>
			                        <?php } ?>
			                        <?php if($this->editmode) { ?>
			                        	<p>
				                        <?php 
				                        	echo "Sequence: <br />";
			                        		echo $this->select("seq_".$i,array(
											    "store" => $selectSeq,
			                        			"reload" => true
											    )
											); 
										?>
			                        	</p>
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
								</div>
								<div class="edge e-<?php echo $color?>">
									<?php echo $this->link("boxlink_".$i); ?>
								</div>
							</div>
						</div>
					</li>

	<?php 		} 
			}
		}
	?>
	
</ul>
</div>