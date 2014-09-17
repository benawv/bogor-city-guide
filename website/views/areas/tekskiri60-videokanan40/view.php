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
	</h2>
	<div class="description">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<div class="section-left-60">
			<?php echo $this->wysiwyg('teks-kanan')?>
		</div>
		<div class="section-right-40">
			<?php 
				echo $this->video("video", array(
			    "width" => 273,
			    "height" => 167,
			    "attributes" => ["frameborder" => 0]
				)); 
			?>
		</div>
	</div>
</div>