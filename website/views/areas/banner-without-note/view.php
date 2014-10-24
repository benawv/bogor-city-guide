<div id="best-products">
<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many images you want to show?

            <?php
                // prepare the store
                $selectStore1 = [];
                for($i=2; $i<30; $i++) {
                    $selectStore1[] = [$i, $i];
                }
            ?>
            <?php echo $this->select("slides",[
                "store" => $selectStore1,
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
	$id = "banner-".uniqid();
	$slides = 2;
	if(!$this->select("slides")->isEmpty()){
        $slides = (int) $this->select("slides")->getData();
    }
?>
	<ul class="slides">
		<?php for($i=0;$i<$slides;$i++) { ?>
			<li>
				<div class="product">
					<div class="photo">
						<?php echo $this->image("banner_".$i, ["thumbnail" => "banner", "dropClass" => $id . "-" . $i])?>
					</div>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>