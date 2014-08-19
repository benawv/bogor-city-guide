<div class="items-container">

	<div class="item" id="item-left">
		<div class="heading">
			<h2 class="title_news"><?php echo $this->link('title-1')?></h2>
			<div class="btn-group">
				<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<?php if($this->editmode) { ?>
			<?php echo $this->image('image-1', array(
					'class'  	=> 'image_share',
					'thumbnail'	=> 'product')
			);?>
		<?php } else { ?>
			<?php echo $this->image('image-1', array('image_share'))?>
		<?php } ?>
		<div class="description">
			<?php echo $this->wysiwyg('description-1')?>
		</div>
	</div>
	<div class="item" id="item-center">
		<div class="heading">
			<h2 class="title_news"><?php echo $this->link('title-2')?></h2>
			<div class="btn-group">
				<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<?php if($this->editmode) { ?>
			<?php echo $this->image('image-2', array(
					'class'  	=> 'image_share',
					'thumbnail'	=> 'product')
			);?>
		<?php } else { ?>
			<?php echo $this->image('image-2', array('image_share'))?>
		<?php } ?>
		<div class="description">
			<?php echo $this->wysiwyg('description-2')?>
		</div>
	</div>
	
	<div class="item" id="item-right">
		<div class="heading">
			<h2 class="title_news"><?php echo $this->link('title-3')?></h2>
			<div class="btn-group">
				<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<?php if($this->editmode) { ?>
			<?php echo $this->image('image-3', array(
					'class'  	=> 'image_share',
					'thumbnail'	=> 'product')
			);?>
		<?php } else { ?>
			<?php echo $this->image('image-3', array('image_share'))?>
		<?php } ?>
		<div class="description">
			<?php echo $this->wysiwyg('description-3')?>
		</div>
	</div>

	

	<div class="item" id="item-left">
		<div class="heading">
			<h2 class="title_news"><?php echo $this->link('title-4')?></h2>
			<div class="btn-group">
				<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<?php if($this->editmode) { ?>
			<?php echo $this->image('image-4', array(
					'class'  	=> 'image_share',
					'thumbnail'	=> 'product')
			);?>
		<?php } else { ?>
			<?php echo $this->image('image-4', array('image_share'))?>
		<?php } ?>
		<div class="description">
			<?php echo $this->wysiwyg('description-4')?>
		</div>
	</div>
	
	<div class="item" id="item-right">
		<div class="heading">
			<h2 class="title_news"><?php echo $this->link('title-5')?></h2>
			<div class="btn-group">
				<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<?php if($this->editmode) { ?>
			<?php echo $this->image('image-5', array(
					'class'  	=> 'image_share',
					'thumbnail'	=> 'product')
			);?>
		<?php } else { ?>
			<?php echo $this->image('image-5', array('image_share'))?>
		<?php } ?>
		<div class="description">
			<?php echo $this->wysiwyg('description-5')?>
		</div>
	</div>


</div>