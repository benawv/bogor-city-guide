<?php if($this->editmode) { ?>
	<style type="text/css">
		#best-products .slides .product{
			height: 360px;
		}
	</style>
<?php }?>
<div style="overflow: hidden; position: relative;" class="flex-viewport">
<ul style="width: 1600%; transition-duration: 0.6s; transform: translate3d(-2540px, 0px, 0px);" class="slides">

<li style="width: 635px; float: left; display: block;" class="">
	<div class="product">
		<div class="photo">
			<?php $i = "static";$id = "idStatic";
				  echo $this->image("image_".$i, ["thumbnail" => "galleryCarouselStatic", "dropClass" => $id . "-" . $i, 'title' 	=> 'Image Size 635x310']);
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
		    <h2><?php echo $this->input("caption-title-" . $i, ["width" => 251]) ?></h2>
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