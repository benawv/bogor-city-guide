<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many box you want to show?

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
	<div id="<?php echo $this->input('anchor-'.$i)->text?>" class="full-w bg-white">
		<h2>
			<?php if($this->editmode): ?>
				<?php echo $this->input('title-'.$i, ["width" => 250])?>
				Icon: <?php echo $this->image('icon_'.$i, array(
									'title' 	=> 'Drag your icon here',
									'width' 	=> 100,
									'height' 	=> 100,
									'thumbnail'	=> 'icon')) ?>
			<?php else: ?>
				<div style="background-image: url('<?php echo $this->image('icon_'.$i)->getSrc()?>'); height: 29px; width: 29px; float: left; margin-right: 10px; "></div>
				<?php echo $this->input('title-'.$i)?>
			<?php endif; ?>
		</h2>
		<div class="description">
			<?php if($this->editmode): ?>
				<?php echo "anchor name: ".$this->input('anchor-'.$i)?>
			<?php endif;?>
			<?php echo $this->wysiwyg('description-'.$i)?>
		</div>
	</div>
<?php } ?>