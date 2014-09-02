<?php if($this->editmode){?>
	<div class="alert alert-info" style="height: 75px;">
        <div class="col-xs-6">
            How many anchor you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<30; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
            <?php echo $this->select("anchors",[
                "store" => $selectStore,
                "reload" => true
            ]); ?>
        </div>
    </div>
<?php } ?>
<?php 
	$id = "anchors-".uniqid();
	$anchors = 1;
	if(!$this->select("anchors")->isEmpty()){
        $anchors = (int) $this->select("anchors")->getData();
    }
?>
<?php 
	$style = $this->editmode?'height: 250px':'';
?>
<ul id="membername" class="navi" style="<?php echo $style?>">
	<?php for($i=0;$i<$anchors;$i++) { ?>
		<?php $active = $i==0?'aktif':''?>
		<li class="<?php echo $this->input('class_name_'.$i)->text?> <?php echo $active?>">
			<div class="nav_menu" <?php if($this->editmode) { ?> style="color: #000;" <?php } ?> >
				<?php echo $this->editmode?'Class Name: '. $this->input('class_name_'.$i, array('width' => '75')) : ''?>
				
				<?php if($this->editmode) { ?>
					Icon: <?php echo $this->image('icon_'.$i, array(
									'title' 	=> 'Drag your icon here',
									'width' 	=> 100,
									'height' 	=> 100,
									'thumbnail'	=> 'icon')) ?>
				<?php } else { ?>
					<div style="background-image: url('<?php echo $this->image('icon_'.$i)->getSrc()?>'); background-position: 0 -26px; height: 26px; margin-bottom: 3px; width: 26px;"></div>
				<?php } ?>
				<?php echo $this->editmode?'Title: ':'' ?><?php echo $this->input('anchor_title_'.$i, array("width" => '75'))?>
			</div>
		</li>
	<?php } ?>
</ul>