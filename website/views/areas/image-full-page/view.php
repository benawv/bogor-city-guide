<div class="full-w bg-white">
	<div class="description">
		<div>
			<?php if($this->editmode) { ?>
				<?php echo $this->image('image-full-page', array(
					"min-width" => '100%',
					"min-height" => 500)
				);?>
			<?php } else { ?>
				<?php echo $this->image('image-full-page');?>
			<?php } ?>
		</div>
	</div>
</div>