<?php
	if($this->editmode) {
?>
		<style>
			.navi{
				margin-bottom: 50px;
			}
			.flex-viewport{
				margin-bottom: 50px;
			}
			.wrapper-special{
				margin-bottom: 100px;
			}
			.navi li{
				float: none;
			}
		</style>
<?php } ?>
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
<?php if(!$this->editmode):?>
<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
<?php endif; ?>
<div class="container boxes-view">
	<?php echo $this->template("includes/breadcrumb.php")?>
	<span class="breadcrumb"><h2 class="title"><?php echo $this->document->getProperty('navigation_title');?></h2></span>
	
	<div class="heading clearfix pagenav">
		<?php echo $this->areablock('anchorarea', array('allowed' => array('anchor'))); ?>
		<div id="quicklinks">
			<?php echo $this->areablock('quicklinks', array('allowed' => array('quicklinks', 'product-quicklinks', "blank-animation-quicklinks")))?>
		</div>
	</div>
	
	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('banner', array(
					"allowed" => array("banner", "static-banner", "banner-without-note")))?>
		<div id="quicklinks">
			<?php echo $this->areablock('quicklinks-wrapper', array(
					"allowed" => array("tile-quicklinks", "layanankami-quicklinks", "quicklinks","blank-tile-quicklinks-static", "product-quicklinks", "blank-animation-quicklinks")))?>
		</div>
	</div><!-- .wrapper-special -->
	
	<div>
		<?php
			function limit_words($string, $word_limit)
			{
				$words = explode(" ",$string);
				return implode(" ",array_splice($words,0,$word_limit));
			}
		?>
		<?php echo $this->areablock('container', array('allowed' => array(
			'mobilku','tasbih','container-box2', 'community-tips2',
			'sections', 'sections-box-full', 'sections-tab', 'teks-tabs',
			'sections-video', 'sections-gallery', 
			'sections-select', 'tekskanan60-imagekiri40_wizard', 
			'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
			'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
			'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
			'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
			'smartlink-factsheet', 'syariah-factsheet',
			'pension-factsheet', 'saving-factsheet','multi-video',
			'smartwealth-factsheet', 'imagekiri-tabelkanan', 'sitemap', 'brosur','kalkulator-investasi'))); ?>
		<div style="clear: both"></div>
		<div class="items-container">
			<?php echo $this->areablock('container2', array(
						"allowed" => array("container-box-static-section", "container-box-carousel-section", "container-box-carousel-text-section", 'jurnal-allianz','tahukah-anda')))?>
		</div>
		<!-- Map Location -->
			<?php echo $this->areablock('maparea', array(
						"allowed" => array("related-product-3-section","map")))?>
		<!-- End Map Location -->
		<?php echo $this->areablock('container-modal', array('allowed' => array('modal')))?>
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