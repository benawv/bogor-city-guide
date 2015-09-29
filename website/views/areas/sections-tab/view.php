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
									'title' 	=> 'Image Size 31x31',
									'width' 	=> 100,
									'height' 	=> 100,
									'thumbnail'	=> 'icon')) ?>
			<?php else: ?>
				<?php if($this->image('icon_'.$i)->getSrc()):?>
				<div style="background-image: url('<?php echo $this->image('icon_'.$i)->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div>
				<?php endif;?>
			<span class="judul_section"><?php echo $this->input('title-'.$i)?></span>
			<?php endif; ?>
		</h2>
		<div class="description">
			<?php if($this->editmode): ?>
				<?php echo "anchor name: ".$this->input('anchor-'.$i)?>
			<?php endif;?>
			<?php echo $this->wysiwyg('description-'.$i)?>
		</div>
		<div class="tabwrap">
			<?php if($this->editmode) { ?>
				<div class="alert alert-info" style="height: 75px">
			        <div class="col-xs-6">
			            How many tabs you want to show?
			
			            <?php
			                // prepare the store
			                $selectTabs = [];
			                for($j=1; $j<30; $j++) {
			                    $selectTabs[] = [$j, $j];
			                }
			            ?>
			            <?php echo $this->select("tabs-".$i,[
			                "store" => $selectTabs,
			                "reload" => true
			            ]); ?>
			        </div>
			    </div>
			<?php } ?>
			<?php 
				$id = "gallery-carousel-".uniqid();
				$tabs = 1;
				if(!$this->select("tabs-".$i)->isEmpty()){
			        $tabs = (int) $this->select("tabs-".$i)->getData();
			    }
			?>
			<div class="menutab_dekstop">
				<ul>
					<?php for($x=0;$x<$tabs;$x++) { ?>
						<li><a id="open_tab_<?php echo $i ?>_<?php echo $x ?>" class="<?php echo $x==0?'active':''?>" href="javascript:void(0);"><?php echo $this->input('title-tabs-'.$i.'-'.$x)?></a></li>
					<?php } ?>
				</ul>
			</div>
			
			<div class="tabcontent" id="tabcontent_<?php echo $i ?>">
				<ul>
					<?php for($x=0;$x<$tabs;$x++) { ?>
						<li>
							<a id="open_tab_<?php echo $i ?>_<?php echo $x?>_m" class="menumobile <?php echo $x==0?'active':''?>" href="javascript:void(0);"><?php echo $this->input('title-tabs-'.$i.'-'.$x)->text?></a>
							<div id="tabcontent_<?php echo $i ?>_<?php echo $x ?>" class="content_show <?php if(!$this->editmode): echo ($x==0)?'showme':''; else: echo 'showme'; endif;?> show_<?php echo $i?>">
								<?php echo $this->wysiwyg('tabcontent-'.$i.'-'.$x)?>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
<?php } ?>
<?php if(!$this->editmode) { ?>
	<script type="text/javascript">
		
		$(".tabwrap").each(function(i){
			
			$(".menutab_dekstop li").each(function(x){
				
				$("#open_tab_"+i+"_"+x).click(function(){
					
					$(".menutab_dekstop li a").removeClass();
			    	$("a#open_tab_"+i+"_"+x).addClass("active");
			    	$(".show_"+i).hide();
			    	$("#tabcontent_"+i+"_"+x).show();
			    	
				});
				
				$("#open_tab_"+i+"_"+x+"_m").click(function(){

			    	$("#tabcontent_"+i+" li a").removeClass("active");
			    	$(this).addClass("active");
			    	$(".show_"+i).hide();
			    	$("#tabcontent_"+i+"_"+x).show();
			    	
			    });
				
			});
			
		});
	</script>
<?php } ?>