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
        	<?php if($this->editmode): ?>
				Shop : <?php echo $this->image('icon-shop', array(
									'title' 	=> 'Image Size 180x180',
									'width' 	=> 180,
									'height' 	=> 180,
									'thumbnail'	=> 'icon-shop')) ?>
			<?php else: ?>
				<?php if($this->image('icon-shop')->getSrc()):?>
					<a href="javascript:void(0);" class="shop-smartlink"><img src='<?php echo $this->image('icon-shop')->getSrc()?>'/></a>
					<!-- <div style="background-image: url('<?php //echo $this->image('asdfasdf')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div> -->
				<?php endif;?>
			<?php endif; ?>
        	<!-- <a href="javascript:void(0);" class="shop-smartlink" style="font-size:180px !important;"><i class="fa fa-shopping-cart"></i></a> -->
        </div>
        </div>
<!--	</div>-->
</div>

<!-- Modal -->
<div class="modal fade" id="wishlistSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      		<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
      </div>
      <div class="modal-body modal-edit">
      		<h2>Wishlist</h2><br />
      		<h3>Kamu sudah menambahkan :</h3>
      		<ul>
      			<li>
      				<h3 class="itemInput"></h3>
      			</li>
      		</ul>
      		<h3>Kedalam Wishlist Kamu.</h3>
      		<h3>Terima Kasih</h3>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary checkout">Checkout</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="wishlistFail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      		<button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
      </div>
      <div class="modal-body modal-edit">
      		<h2>Wishlist</h2><br />
      		<h3>Mohon maaf, sebelumnya Kamu sudah menambahkan :</h3>
      		<ul>
      			<li>
      				<h3 class="itemInput"></h3>
      			</li>
      		</ul>
      		<h3>Kedalam Wishlist Kamu.</h3>
      		<h3>Terima Kasih</h3>
      </div>
      <div class="modal-footer">
     	<button type="button" class="btn btn-primary checkout">Checkout</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>