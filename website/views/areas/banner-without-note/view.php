<div id="best-products">
<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many images you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<30; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
            <?php echo $this->select("slides",[
                "store" => $selectStore,
                "reload" => true
            ]); ?>
        </div>
    </div>

    <style type="text/css">
        .gallery .item {
            min-height: 377px;
        }
	#best-products{
	    height : auto !important;
	}
    </style>
<?php } ?>
<?php 
	$id = "banner-".uniqid();
	$slides = 2;
	if(!$this->select("slides")->isEmpty()){
        $slides = (int) $this->select("slides")->getData();
    }
?>
	<ul class="slides">
		<?php for($i=0;$i<$slides;$i++) { ?>
			<li>
				<?php
				    if(!$this->editmode){
					if($i!=0){
					    $hide = "hide";
					}
					else{
					    $hide = "";
					}
				    }
				    else{
					$hide = "";
				    }
				?>
				<div class="product <?php echo $hide;?>">
					<div class="photo">
                        <?php if($this->editmode){ ?>
						<?php echo $this->image("banner_".$i, ["dropClass" => $id . "-" . $i, "title" => "Image Size 635x310", "width" => 635, "height" => 310])?>
                        <?php }else{ ?>
                        <img src="<?php echo $this->image("banner_".$i)->getSrc(); ?>" style="width:100% !important; min-height:100% !important;">
                        <?php } ?>
					</div>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>