<?php $id = uniqid();?>

<div class="item">
	<div class="heading">
		<h2 class="title_news"><?php echo $this->link('title',array("class" => "class".$id,"data-toggle" => "modal", "data-target" => "#modal".$id))?></h2>
		<div class="btn-group">
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			
			<?php if($this->editmode) { ?>
			<?php echo $this->link('more')?>
		<?php } else { ?>
			<?php echo htmlspecialchars_decode($this->link('more'))?>
		<?php } ?>
		</div>
	</div>
	<?php if($this->editmode) { ?>
		<?php echo $this->image('image', array(
				'class'  	=> 'image_share',
				'thumbnail'	=> 'product')
		);?>
	<?php } else { ?>
		<?php echo $this->image('image', array('image_share'))?>
	<?php } ?>
	<div class="description">
		<?php echo $this->wysiwyg('description')?>
	</div>
	<?php if($this->editmode) { ?>
		<style type="text/css">
			.hide<?php echo $id;?>.hide{
				display: block;
			}
		</style>
	<?php echo "URL Iframe : "; }?>
	<span class="hide<?php echo $id;?> hide"><?php echo $this->input("urlIframe", array("width" => 255));?></span>
</div>
<script type="text/javascript">
	$(".class<?php echo $id?>").on("click",function(){
		var judul = $(this).text();
		$(this).parent().parent().parent().siblings("#modal<?php echo $id;?>").find(".titleModal").text(judul);
		var url = $(".hide<?php echo $id?>").text();
		$(this).parent().parent().parent().siblings("#modal<?php echo $id;?>").find(".iframe<?php echo $id;?>").attr("src",url);
	});
</script>
<div class="modal fade" id="<?php echo "modal".$id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    </div>
	    <div class="modal-body">
			<h2 class="titleModal"></h2>
			<p>
			<iframe class="iframe<?php echo $id;?>" width="100%" height="800" frameborder="no" scrolling="auto" src=""></iframe>
			</p>
		</div>
    </div>
  </div>
</div>