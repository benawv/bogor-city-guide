<style type="text/css">
	.pimcore_iframe_mask{
		z-index: -1;
	}
</style>
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
			<?php echo $this->input('title')?>
		<?php endif; ?>
		<div class="btn-group btn-section">
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
		</div>
	</h2>
	<div class="description width-66" style="width: 100%;">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<div class="section-left-40">
			<?php 
				echo $this->video("video", array(
			    "width" => "100%",
			    "height" => 167,
			    "attributes" => ["frameborder" => 0]
				)); 
			?>
		</div>
		<div class="section-right-60">
			<?php echo $this->wysiwyg('teks-kanan')?>
		</div>
	</div>
</div>
<div style="clear: both;"></div>