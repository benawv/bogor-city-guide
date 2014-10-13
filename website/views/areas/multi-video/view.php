<?php 
	$videoId = uniqid();
	$textId = uniqid();
?>
<style type="text/css">
	.pimcore_tag_video{
		padding-top: 0px !important;
	}
</style>
<?php if($this->editmode) { ?>
	<style type="text/css">
		.x-panel-body.pimcore_tag_image_empty{
			height: 79px !important;
		}
		.text_section .pimcore_tag_video
		{
			padding-top: 0px;
		}
		.x-panel-body{
			height: auto !important;
		}
		.cus-slide.prev,.cus-slide.next{
			height: 120px;
			background-position: 0 20px;
		}
		.super_navi{
			height: 120px;
		}
		.navi{
			height: 120px;
		}
	</style>
<?php }?>
<div class="full-w bg-white">
	<div id="slideshow" class="clearfix">
	<?php if($this->editmode) { ?>
	    <div class="alert alert-info" style="height: 75px">
	        <div class="col-xs-6">
	            How many video you want to show?
	
	            <?php
	                // prepare the store
	                $selectStore = [];
	                for($i=1; $i<=30; $i++) {
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
	    </style>
	<?php } ?>
	<?php 
		$id = "multi-video-".uniqid();
		$slides = 1;
		if(!$this->select("slides")->isEmpty()){
	        $slides = (int) $this->select("slides")->getData();
	    }
	?>
	<?php for($i=0;$i<$slides;$i++) { ?>
	<div id="isiVideo<?php echo $videoId."_".$i;?>" class="hideVideo<?php echo $videoId;?>">
		<div class="text_section">
	    	<?php echo $this->video("myVideo".$i, array(
					    "width" => 599,
					    "height" => 375
					));
			?>
		</div>
		<div class="isi_kanan_berita">
			<?php echo $this->wysiwyg('teks-kiri'.$i)?>
		</div>
	</div>
	<?php } ?>
	
	
	<div style="clear: both;padding-top:50px;">
		<ul class="slides">
				<div id="membername" style="width: 580px;">
					<div class="cus-slide prev"><span class="arrow"></span></div>
					<div class="super_navi cus_super_navi">
						<ul class="navi" style="width: 950px;float: left; position: absolute;">
				<?php for($i=0;$i<$slides;$i++) { ?>
						    <li class="<?php echo "klikVideo isiVideo".$videoId."_".$i;?>">
								<?php echo $this->image("videoImage".$i, array(
										"width" => 80,
										"height" => 72
								));
								?>
								<input type="hidden" value="" class="tmpVideo_isiVideo<?php echo $videoId."_".$i;?>" />
								<input type="hidden" value="<?php echo $videoId;?>" class="divId" />
						    </li>
				<?php } ?>
						</ul>
					</div>
					<div class="cus-slide next"></div>
				</div>
			
		</ul>
	</div>
	</div>
</div>
<script type="text/javascript">
	/* silde nav*/
	
	$(".hideme").hide();
	$(".v").click(function(){
		$(this).siblings('.hideme').slideToggle();
		if($(this).find('.xicon').hasClass('down')){
			$(this).find('.xicon').removeClass('down')
			$(this).find('.xicon').addClass('up')
		}
		else{
			$(this).find('.xicon').removeClass('up')
			$(this).find('.xicon').addClass('down')
		}
	});
	
	$('.next').on('click',function(){
		var me_left = $('.super_navi').scrollLeft();
		$('.super_navi').scrollLeft(me_left + 100);
		console.log($('.super_navi').position().left);
	});
	
	$('.prev').on('click',function(){
		var me_left = $('.super_navi').scrollLeft();
		$('.super_navi').scrollLeft(me_left - 100);
		console.log($('.super_navi').position().left);
	});

	$(".hideVideo<?php echo $videoId;?>").hide();
	<?php if($this->editmode) { ?>
		$(".hideVideo<?php echo $videoId;?>").show();
	<?php }?>
	$("#isiVideo<?php echo $videoId."_";?>0").show();

	var banyak_video = $(".hideVideo<?php echo $videoId;?>").length;
	var i = 0;
	for(i; i< banyak_video; i++)
	{
		var src = $("#isiVideo<?php echo $videoId."_";?>"+i).find("source").attr("src");
		if(src==undefined)
		{
			src = $("#isiVideo<?php echo $videoId."_";?>"+i).find("iframe").attr("src");
		}
		
		$(".tmpVideo_isiVideo<?php echo $videoId."_";?>"+i).attr("value",src);
	}
	$('.klikVideo').on('click', function(){
		var idVideo = $(this).attr("class").substring(10);
		var divId = $(this).find(".divId").val();

		$(".hideVideo"+divId).hide();
		$(".hideVideo"+divId).find("source").attr("src","");
		$(".hideVideo"+divId).find("iframe").attr("src","");
		var src = $(".tmpVideo_"+idVideo).val();
		$("#"+idVideo).find("source").attr("src",src);
		$("#"+idVideo).find("iframe").attr("src",src);
		$("#"+idVideo).show();
	});
	/* silde nav*/
</script>