<div class="item" id="item-unggul">
	<div class="heading">
		<h2 class="title_news"><?php echo $this->link('title')?></h2>
		<div class="btn-group">
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			
			<?php if($this->editmode) { ?>
			<?php echo $this->link('more')?>
		<?php } else { ?>
			<?php echo htmlspecialchars_decode($this->link('more'))?>
		<?php } ?>
		</div>
	</div>
	<?php if($this->editmode) { ?>
	    <div class="alert alert-info" style="height: 75px">
	        <div class="col-xs-6">
	            How many slides you want to show?
	
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
	<?php } ?>
	<?php 
		$id = "container-carousel-".uniqid();
		$slides = 2;
		if(!$this->select("slides")->isEmpty()){
	        $slides = (int) $this->select("slides")->getData();
	    }
	?>
	<ul class="slides">
		<?php for($i=0;$i<$slides;$i++) { ?>
			<li>
				<div class="photo">
					<?php if($this->editmode) { ?>
						<?php echo $this->image("image_".$i, ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "class" => "image_share"])?>
					<?php } else { ?>
						<img src="<?php echo $this->image("image_".$i)->getSrc()?>" class="image_share" />
					<?php } ?>
				</div>
				<div class="description">
					<?php echo $this->wysiwyg("slide_description_".$i) ?>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>