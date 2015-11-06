<style type="text/css">
	.full-w.bg-white{
    
    /*width: 960px;
        height: 450px;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        margin-left: 195px;
    */

        /*revision akbar*/
        width: 960px;
        height: 450px;
        /*padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;*/
        /* margin-left: 195px; */
        float: none !important;
        margin: 0 auto;
        margin-bottom: 32px;
        padding: 25px;
    } 
</style>
<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white">
	<h2>
		<?php if($this->editmode): ?>
			Icon: <?php echo $this->image('icon', array(
								'title' 	=> 'Image Size 31x31',
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
		<div class="btn-group btn-section">
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
		</div>
	</h2>
	<div class="description width-66">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<div class="section-left-60">
			<?php 
				echo $this->video("video", array(
			    "width" => 320,
			    "height" => 200,
			    "attributes" => ["frameborder" => 0]
				)); 
			?>
		</div>
		<div class="section-right-40">
			<?php echo $this->wysiwyg('teks-kanan')?>
		</div>
		<div style="clear:both;"></div>
	</div>
</div>