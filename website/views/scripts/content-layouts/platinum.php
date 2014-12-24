<?php if($this->editmode){?>
	<style type="text/css">
		.pagenav{
			height: auto;
		}
		.platinum_nav{
			background: none !important;
		}
		.backgroundBatik{
			background-repeat: no-repeat !important;
			background-repeat: repeat-x !important;
		}
	</style>
<?php }?>

<div class="backgroundBatik">
	<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
	<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
	<?php if(!$this->editmode):?>
	<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
	<?php endif; ?>
	
	<div class="container boxes-view">
		<?php echo $this->template("includes/breadcrumb.php")?>
		
		<div class="heading clearfix pagenav platinum_nav">
			<?php echo $this->areablock('anchorarea', array('allowed' => array('anchor'))); ?>
			<div id="quicklinks">
			<?php echo $this->areablock('quicklinks', array('allowed' => array('quicklinks', 'product-quicklinks')))?>
			</div>
		</div>
	</div>
	
</div>
	
<div class="container boxes-view">
	
		<?php echo $this->areablock('container', array('allowed' => array(
														'sections', 'sections-tab', 'teks-tabs',
														'sections-video', 'sections-gallery', 
														'sections-select', 'gallery-carousel',
														'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
														'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
														'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
														'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
														'smartlink-factsheet', 'syariah-factsheet',
														'pension-factsheet', 'saving-factsheet',
														'smartwealth-factsheet', 'imagekiri-tabelkanan'))); ?>
		
		<?php echo $this->areablock('container-modal', array('allowed' => array('modal')))?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if(!$this->editmode) { ?>
		$('li.aktif .nav_menu div').css('display', 'none');
		$('li .nav_menu .white_image').css('display', 'none');
		$('li.aktif .nav_menu .white_image').css('display', 'block');
		
		var hash = window.location.hash.substring(1);
		if(hash!=''){
			var target = '#modal-'+hash;
			$(target).modal('show');
		}
		$(".pagenav .navi li").click(function(){
			$(".pagenav .navi li").removeClass('aktif');
			$(".pagenav .navi li .nav_menu div").css('display','block');
			$(".pagenav .navi li .nav_menu .white_image").css('display','none');
			$(this).addClass('aktif');
			$('li.aktif .nav_menu div').css('display', 'none');
			$('li.aktif .nav_menu .white_image').css('display', 'block');
			
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
		<?php }?>
	});
</script>