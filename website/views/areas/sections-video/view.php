<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white">
	<h2>
		<?php if($this->editmode): ?>
			Icon: <?php echo $this->image('icon', array(
								'title' 	=> 'Drag your icon here',
								'width' 	=> 100,
								'height' 	=> 100,
								'thumbnail'	=> 'icon')) ?>
			<?php echo $this->input('title', ["width" => 250])?>
		<?php else: ?>
			<?php if($this->image('icon')->getSrc()):?>
				<div style="background-image: url('<?php echo $this->image('icon')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div>
			<?php endif;?>
		<span class="judul_section"><?php echo $this->input('title')?></span>
		<?php endif; ?>
		<!--<div class="btn-group btn-section">
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
		</div>-->
	</h2>
	<div class="description">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor')?>
		<?php endif;?>
		
		<?php echo $this->wysiwyg('description')?>
		
		<?php echo $this->video("video", array(
		    "width" => 560,
		    "height" => 315,
		    "attributes" => ["frameborder" => 0]
		)); ?>
	</div>
</div>