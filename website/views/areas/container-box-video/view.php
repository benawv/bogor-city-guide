<div class="item">
	<div class="heading">
		<h2 class="title_news"><?php echo $this->link('title-box-section',array("data-target" => "","data-toggle" => "modal", "class" => "PopUpModal"))?></h2>
		<div class="btn-group">
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			
			<?php if($this->editmode) { ?>
			<?php echo $this->link('more-box-section')?>
		<?php } else { ?>
			<?php echo htmlspecialchars_decode($this->link('more-box-section'))?>
		<?php } ?>
		</div>
	</div>
	<?php if($this->editmode) { ?>
		<?php echo $this->video('box-video', array(
				'width' 	=> 304,
				'height' 	=> 291)
		);?>
	<?php } else { ?>
		<?php echo $this->video('box-video', array('width' => 304, 'height' => 291))?>
	<?php } ?>
	<div class="description">
		<?php echo $this->wysiwyg('description-box-section')?>
	</div>
</div>