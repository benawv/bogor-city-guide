<?php if(!$this->editmode) {?>
<script src="/website/static/js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src="/website/static/js/jcarousel.responsive.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.fancybox.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/jcarousel.responsive.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/jquery.fancybox.css">
<?php }
	$videoId = uniqid();
?>

<style type="text/css">
	.pimcore_tag_video{
		padding-top: 0px !important;
	}
	.klikVideo img{
		opacity: 0.5;
	    filter: alpha(opacity=50);
	}
	.imgAktif img{
		opacity: 1;
	    filter: alpha(opacity=100);
	}
	/* VIDEO PIMCORE */
	.pimcore_tag_video
	{
	   float: none;
	   clear: both;
	   width: 100%;
	   position: relative;
	   padding-bottom: 56.25%;
	   padding-top: 25px;
	   height: 0;
	   margin-bottom: 12px;
	   min-height: 270px;
	}
	.pimcore_tag_video > iframe 
	{
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	}
</style>

<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white item">
	<h2>
		<?php if($this->editmode): ?>
			Icon: <?php echo $this->image('icon', array(
								'title' 	=> 'Image Size 31x31',
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
			<?php echo "Anchor name: ".$this->input('anchor')?>
		Deskripsi Section Box
		<?php endif;?>
		<?php echo $this->wysiwyg('description')?>
		
		<div class="wrapper1">
			<div class="jcarousel-wrapper">
				<div class="jcarousel jc2">
					<ul>
						<?php $v = $videoId;while ($this->block("imageblock")->loop()) { ?>
							<?php if($this->editmode) { ?>
								<li>
									<?php echo $this->video("myVideo", array("width" => 299,"height" => 270));?>
									Judul Video<br />
									<?php echo $this->input('titleVideo', array("width" => 250))?>
									<br />
									Deskripsi Video
									<?php echo $this->wysiwyg('descVideo', array("width" => 250))?>
								</li>
							<?php } else { ?>
								<li>
									<a data-toggle="modal" id="<?php echo $v;?>" data-target="#myModal<?php echo $v;?>" class="gallery-box" rel="group" href="#<?php //echo $this->image('myImage')->getThumbnail("sec_gallery");?>">
									<img style="margin-right: 10px; width: 299px;" src="<?php echo $this->video("myVideo")->getPosterAsset();?>" />
										
									</a>
									<h3><?php echo $this->input('titleVideo')->text;?></h3>
									</a>
								</li>
							<?php } $v++; ?>
						<?php } ?>
					</ul>
					<?php
						if(!$this->editmode) { $v = $videoId;
						while ($this->block("imageblock")->loop()) {
					?>
							<!-- Modal -->
							<div class="modal fade" id="myModal<?php echo $v;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close tutup" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel"><?php echo $this->input('titleVideo')->text;?></h4>
								  </div>
								  <div class="modal-body">
									<?php echo $this->video("myVideo", array("width" => 299,"height" => 270));?>
									<?php echo $this->wysiwyg('descVideo')->text;?>
									<input type="hidden" class="hideSrc" />
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-primary tutup" data-dismiss="modal">Tutup</button>
								  </div>
								</div>
							  </div>
							</div>
							<script>
								$(document).ready(function(){
									var src = $("#myModal<?php echo $v;?>").find("iframe").attr("src");
									$("#myModal<?php echo $v;?>").find(".hideSrc").val(src);
									
									$("#myModal<?php echo $v;?> .tutup").on("click",function(){
										$("#myModal<?php echo $v;?>").find("iframe").attr("src","");
									});
									
									$("#myModal<?php echo $v;?>").on("click",function(){
										$("#myModal<?php echo $v;?>").find("iframe").attr("src","");
									});
								});
							</script>
					<?php
								$v++;
							}
						}
					?>
				</div>
				<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
				<a href="#" class="jcarousel-control-next">&rsaquo;</a>
				<p class="jcarousel-pagination"></p>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$(".gallery-box").on("click",function(){
			var id = $(this).attr("id");
			var src = $("#myModal"+id).find(".hideSrc").attr("value");
			$("#myModal"+id).find("iframe").attr("src",src);
		});
	});
</script>