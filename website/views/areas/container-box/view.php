<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
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
<div class="item">
	<div class="heading">
		<h2 class="title_news"><?php echo $this->link('title-'.$i)?></h2>
		<div class="btn-group">
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
</div>
<?php } ?>