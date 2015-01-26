<div class="item" id="item-faq">
	<div class="heading">
		<h2><?php echo $this->link('title-box-carousel-text-section')?></h2>
		<?php if($this->editmode) { ?>
			<?php echo $this->link('more-box-carousel-text-section')?>
		<?php } else { ?>
			<?php echo htmlspecialchars_decode($this->link('more-box-carousel-text-section'))?>
		<?php } ?>
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
	            <?php echo $this->select("slides-box-carousel-text-section",[
	                "store" => $selectStore,
	                "reload" => true
	            ]); ?>
	        </div>
	    </div>
	<?php } ?>
	<?php 
		$id = "container-carousel-".uniqid();
		$slides = 2;
		if(!$this->select("slides-box-carousel-text-section")->isEmpty()){
	        $slides = (int) $this->select("slides-box-carousel-text-section")->getData();
	    }
	?>
	<ul class="slides">
		<?php for($i=0;$i<$slides;$i++) { ?>
			<li>
				<?php echo $this->wysiwyg("title-box-carousel-text-section-".$i)?>
				<div class="description">
					<?php echo $this->wysiwyg("slide_description-box-carousel-text-section_".$i) ?>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>