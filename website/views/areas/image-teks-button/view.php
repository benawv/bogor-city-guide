<link rel="stylesheet" href="/website/ajfc/css/bootstrap-custom-wcm/bootstrap.css">
<link rel="stylesheet" href="/website/ajfc/css/style.css">
	<link rel="stylesheet" href="/website/ajfc/css/main.css">
<link rel="stylesheet" href="/website/ajfc/css/font-awesome.min.css">
<style>
.full-w p {
    width:100% !important;
}
</Style>
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
	</h2>
<!--	<div class="description width-66">-->
        <div class="row" style="width:100%; margin-left:0px; margin-right:0px;">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<div class="col-xs-12 col-md-3">
			<?php echo $this->image('image-kirirow', array(
									'title' => 'Image Size 240x200',
									'width' => 240,
									'height' => 200
									/*'thumbnail' => 'product'*/))?>
		</div>
		<div class="col-xs-12 col-md-6">
            <?php echo $this->wysiwyg('teks-tengah')?>
		</div>
        <div class="col-xs-12 col-md-3">
            <a href="#" >
                <center><i class="fa fa-shopping-cart" style="font-size:180px !important;"></i></center>
            </a>
        </div>
        </div>
<!--	</div>-->
</div>