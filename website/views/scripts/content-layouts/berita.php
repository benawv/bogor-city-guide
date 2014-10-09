<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
<?php if(!$this->editmode):?>
<?php endif; ?>
<div class="container boxes-view">
	<h5><a href="/"><span>Home</span></a> &rsaquo; <?php echo $this->navigation()->breadcrumbs()->setMinDepth(null); ?></h5>
	
	<div class="heading clearfix pagenav">
		<span class="breadcrumb2"><?php echo $this->document->getTitle()?></span>
		<?php echo $this->areablock('anchorarea', array('allowed' => array('anchor'))); ?>
		<div id="quicklinks">
		<?php echo $this->areablock('quicklinks', array('allowed' => array('quicklinks', 'product-quicklinks', 'layanankami-quicklinks')))?>
		</div>
	</div>
	
	<div class="full-w bg-white cus-full">	
		<?php echo $this->areablock('container', array('allowed' => array('video','summary-berita-abu','konten-beritaTeksGambar','konten-beritaGambarTeks','summary-berita', 'garis-pemisah', 'konten-berita'))); ?>
	</div>
		
		<?php echo $this->areablock('container-modal', array('allowed' => array('modal')))?>
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