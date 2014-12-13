<?php 
	$opentabid = "open_tab_".uniqid();
	$tabcontentid = "tabcontent_".uniqid();
	$showid = "show_".uniqid();
	$wysiwygid = "tabcontent-".uniqid();
	$menutab = "menutab-".uniqid();
?>
<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white">
	<h2>
		<?php if($this->editmode): ?>
			Icon: <?php echo $this->image('icon', array(
								'title' 	=> 'Drag your icon here',
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
		<div class="btn-group btn-section">
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
		</div>
	</h2>
	<div class="description">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<?php echo $this->wysiwyg('teks')?>
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
		            <?php echo $this->select("tabs",[
		                "store" => $selectTabs,
		                "reload" => true
		            ]); ?>
		        </div>
		    </div>
		<?php } ?>
		<?php 
			$tabs = 1;
			if(!$this->select("tabs")->isEmpty()){
		        $tabs = (int) $this->select("tabs")->getData();
		    }
		?>
		<div class="<?php if(!$this->editmode){?>menutab_dekstop<?php echo " ".$menutab;} ?>">
			<ul>
				<?php for($x=0;$x<$tabs;$x++) { ?>
					<li>
						<a id="<?php echo $opentabid?>_<?php echo $x ?>" class="<?php echo $x==0?'active':''?> " href="javascript:void(0);"><?php echo $this->input('title-tabs-'.$x)?></a>
						<?php if($this->editmode){ ?>
						<div id="<?php echo $tabcontentid?>_<?php echo $x ?>" style="padding-top: 50px;" class="content_show <?php if(!$this->editmode): echo ($x==0)?'showme':''; else: echo 'showme'; endif;?> <?php echo $showid?>">
							<?php echo $this->wysiwyg("tab-content-".$x)?>
						</div>
						<?php } ?>
					</li>
				<?php } ?>
			</ul>
		</div>
		<?php if(!$this->editmode){ ?>
		<div class="tabcontent" id="<?php echo $tabcontentid?>">
			<ul>
				<?php for($x=0;$x<$tabs;$x++) { ?>
					<li>
						<a id="<?php echo $opentabid?>_<?php echo $x?>_m" class="menumobile <?php echo $x==0?'active':''?>" href="javascript:void(0);"><?php echo $this->input('title-tabs-'.$x)->text?></a>
						<div id="<?php echo $tabcontentid?>_<?php echo $x ?>" class="content_show <?php if(!$this->editmode): echo ($x==0)?'showme':''; else: echo 'showme'; endif;?> <?php echo $showid?>">
							<?php echo $this->wysiwyg("tab-content-".$x)->text?>
						</div>
					</li>
				<?php } ?>
			</ul>
		</div>
		<?php } ?>
	</div>
</div>
<?php if(!$this->editmode){ ?>
<script type="text/javascript">
		
	$(".menutab_dekstop li").each(function(x){
		
		$("#<?php echo $opentabid ?>_"+x).click(function(){
			
			$(".<?php echo $menutab;?> li a").removeClass("active");
	    	$("a#<?php echo $opentabid ?>_"+x).addClass("active");
	    	$(".<?php echo $showid?>").hide();
	    	$("#<?php echo $tabcontentid?>_"+x).show();
	    	if($("#<?php echo $tabcontentid?>_"+x).find("ul").height() != null)
	    	{
		    	if($("#<?php echo $tabcontentid?>_"+x).find("ul").height() > 500)
		    	{
		    		$("#<?php echo $tabcontentid?>_"+x).find("ul").addClass("tab_bca");
		    	}
	    	}
		});
		
		$("#<?php echo $opentabid ?>_"+x+"_m").click(function(){

	    	$("#<?php echo $tabcontentid?> li a").removeClass("active");
	    	$(this).addClass("active");
	    	$(".<?php echo $showid?>").hide();
	    	$("#<?php echo $tabcontentid?>_"+x).show();
	    	
	    });
		
	});
</script>
<?php } ?>