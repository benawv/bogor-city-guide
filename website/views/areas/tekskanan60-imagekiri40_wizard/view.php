<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many step you want to show?
            <?php
                $selectStore = [];
                for($i=1; $i<=15; $i++)
                {
                    $selectStore[] = [$i, $i];
                }
            ?>
            <?php echo $this->select("step",[
                "store" => $selectStore,
                "reload" => true
            ]); ?>
        </div>
    </div>
<?php
	}
	$step = (int) $this->select("step")->getData();
?>
<?php
	for($z=1;$z<=$step;$z++) {
?>
	<div class="full-w bg-white">
		<h2>
			<div class="btn-group btn-section">
				<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			</div>
			<?php echo $this->wysiwyg('title-teks_'.$z)?>
		</h2>
		<div class="description">
			<div class="section-left-60">
				<?php echo $this->image('image-kiri_'.$z, array(
										'title' => 'Image Size 536x477',
										'width' => 536,
										'height' => 477,
										'thumbnail' => 'wizard'))?>
			</div>
			<div class="section-right-40">
				<?php echo $this->wysiwyg('teks-kanan_'.$z)?>
			</div>
		</div>
	</div>
<?php
	}
?>