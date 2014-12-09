<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many modal you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<30; $i++) {
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
	<?php if($this->editmode){ ?>
		<div id="<?php echo $this->input('anchor-'.$i)->text?>" class="full-w bg-white">
			<div class="description">
				<?php echo "<b>Anchor Name:</b> ".$this->input('anchor-'.$i, ['width' => 250])?>
				<?php echo $this->wysiwyg('description-'.$i)?>
			</div>
		</div>
	<?php } else { ?>
		<div class="modal fade" id="modal-<?php echo $this->input('anchor-'.$i)->text?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-product modal-body">
					<?php echo $this->wysiwyg('description-'.$i)?>
				</div>
		    </div>
		  </div>
		</div>
	<?php } ?>
<?php } ?>