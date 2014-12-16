<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 150px">
        <div class="col-xs-6">
            How many box you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=1; $i<30; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
            <?php echo $this->select("boxes",[
                "store" => $selectStore,
                "reload" => true
            ]); ?>
        </div>
    </div>

    <style type="text/css">
        .gallery .item {
            min-height: 377px;
        }
    </style>
<?php } ?>
<?php
	$id = "gallery-carousel-".uniqid();
	$boxes = 1;
	if(!$this->select("boxes")->isEmpty()){
        $boxes = (int) $this->select("boxes")->getData();
    }
?>

<?php for($i=0;$i<$boxes;$i++) { ?>
<?php 
	$hide = $this->select('hide-container-'.$i)->getData();
	$display = $hide=='hide'?'display:none;':'';
?>
<div class="item" style="<?php echo !$this->editmode?$display:'' ?>">
	<div class="heading">
		<h2 class="title_news"><?php echo $this->link('title-'.$i)?></h2>
		<div class="btn-group">
			<a href="javascript:void(0);" class="shop"><i class="fa fa-shopping-cart"></i></a>
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
		</div>
	</div>
	<?php if($this->editmode) { ?>
		<?php echo $this->image('image-'.$i, array(
				'class'  	=> 'image_share',
				'thumbnail'	=> 'product')
		);?>
	<?php } else { ?>
		<a href="<?php echo $this->link('title-'.$i)->getHref()?>" class="thumbnail">
			<?php echo $this->image('image-'.$i, array('class' => 'image_share'))?>
		</a>
	<?php } ?>
	<div class="description">
		<?php echo $this->wysiwyg('description-'.$i)?>
	</div>
	<?php 
		if($this->editmode) {
			echo 'Show this box: ';
			echo $this->select('hide-container-'.$i, array(
					'store' => array(
							array('show', 'Yes'),
							array('hide', 'No')
					),
					"reload" => true
			));
		}
	?>
</div>
<?php } ?>

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

<script type="text/javascript">
	
</script>