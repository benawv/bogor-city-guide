<div class="item">
	<div class="heading">
		<h2 class="title_news"><?php echo $this->link('title',array("data-target" => "","data-toggle" => "modal", "class" => "PopUpModal"))?></h2>
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
		<?php echo $this->image('image', array(
				'class'  	=> 'image_share',
				'thumbnail'	=> 'product')
		);?>
	<?php } else { ?>
		<?php echo $this->image('image', array('image_share'))?>
	<?php } ?>
	<div class="description">
		<?php echo $this->wysiwyg('description')?>
	</div>
</div>