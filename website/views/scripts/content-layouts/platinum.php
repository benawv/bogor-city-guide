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
			<?php echo $this->areablock('quicklinks', array('allowed' => array('quicklinks', 'product-quicklinks', "blank-animation-quicklinks","service-box-static","service-box-static-paragraph")))?>
			</div>
		</div>
	</div>
	
</div>

<div class="container boxes-view">
	
		<?php echo $this->areablock('container5', array('allowed' => array(
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
		
</div>

<div class="container boxes-view">
	<div class="items-container">
		<?php echo $this->areablock('container0', array('allowed' => array(
										'container-box-static-platinum'))); ?>
	</div>
</div>

<div class="container boxes-view">
	
		<?php echo $this->areablock('container', array('allowed' => array(
														'mobilku','tasbih','container-box2', 'community-tips2',
														'sections', 'sections-box-full', 'sections-tab', 'teks-tabs',
														'sections-video', 'sections-gallery', 'sections-popup-video',
														'sections-select', 'gallery-carousel','tekskanan60-imagekiri40_wizard', 
														'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
														'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
														'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
														'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
														'smartlink-factsheet', 'syariah-factsheet',
														'pension-factsheet', 'saving-factsheet','multi-video',
														'smartwealth-factsheet', 'imagekiri-tabelkanan', 'sitemap', 'brosur','kalkulator-investasi', 'asn-center', 'gridlanding','artikelalanding','landing-informasi-produk',
														'thankyou-mobilku','add-to-cart-wishlist'))); ?>
		
		<?php echo $this->areablock('container-modal', array('allowed' => array('modal')))?>
</div>
<div class="container boxes-view">
	<div class="items-container">
		<?php echo $this->areablock('container2', array('allowed' => array(
										'container-box-static-platinum',"container-box-static-section", "container-box-carousel-section", "container-box-carousel-text-section", 'jurnal-allianz','tahukah-anda'))); ?>
	</div>
</div>
<div class="container boxes-view">
	
		<?php echo $this->areablock('container3', array('allowed' => array(
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
</div>
<div class="container boxes-view">
	<div class="items-container">
		<?php echo $this->areablock('container4', array('allowed' => array(
										'container-box-static-platinum'))); ?>
	</div>
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