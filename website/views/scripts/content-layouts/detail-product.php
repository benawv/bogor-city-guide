<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
<?php if(!$this->editmode):?>
<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
<?php endif;?>
<div class="container boxes-view">
	<h5><a href="/"><span>Produk</span></a> &rsaquo; <?php echo $this->navigation()->breadcrumbs()->setMinDepth(null); ?></h5>
	<span class="breadcrumb"><a href="#"><?php //echo $this->document->getTitle()?></a></span>
	
	<div class="heading clearfix pagenav">
		<?php echo $this->areablock('anchorarea', array('allowed' => array('anchor'))); ?>
		<?php echo $this->areablock('quicklinks', array('allowed' => array('quicklinks')))?>
	</div>
	
	<div class="height_profil">
		<?php echo $this->areablock('container', array('allowed' => array('sections'))); ?>
		
		<?php echo $this->areablock('container-modal', array('allowed' => array('modal')))?>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('li.aktif .nav_menu div').css('background-position', '0px 0px');
		
		var hash = window.location.hash.substring(1);
		if(hash!=''){
			var target = '#modal-'+hash;
			$(target).modal('show');
		}
		$(".pagenav .navi li").click(function(){
			$(".pagenav .navi li").removeClass('aktif');
			$(".pagenav .navi li .nav_menu div").css('background-position','0px -26px');
			$(this).addClass('aktif');
			$('li.aktif .nav_menu div').css('background-position', '0px 0px');
			
			var data = $(this).attr('class');
			var id = data.split(' ');
			//alert($(".heading").offset().top);
			if(Math.floor( $(".heading").offset().top)<=212)
			{
				$('html, body').animate({scrollTop:$("#"+id[0]).offset().top-190}, 500);
			}
			else
			{
				$('html, body').animate({scrollTop:$("#"+id[0]).offset().top-90}, 500);
			}
		});
	});
</script>