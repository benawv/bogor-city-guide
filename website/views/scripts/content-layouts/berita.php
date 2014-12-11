<?php
	if(!$this->editmode) { 
		$url = $_SERVER['REQUEST_URI'];
		$uri = explode("/", $url);
		
		for($x = 1; $x < count($uri); $x++)
		{
			$title = explode("-", $uri[$x]);
			$textTitle = "";
			$text = "";
			for ($y = 0; $y < count($title); $y++)
			{
				$textTitle = " <span class='upperText'>".substr($title[$y], 0, 1)."</span>".substr($title[$y], 1);
				$text .= $textTitle;
			}
		}
		$menu = explode("-", $uri[1]);
		$textTitle2 = "";
		$text2 = "";
		for ($y = 0; $y < count($menu); $y++)
		{
			$textTitle2 = " <span class='upperText'>".substr($menu[$y], 0, 1)."</span>".substr($menu[$y], 1);
			$text2 .= $textTitle2;
		}
	}
	else{
		$text = "";
	}
?>
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
<div class="container boxes-view">
	<h5><a href="/"><span>Home</span></a> &rsaquo; <a href="/<?php echo $uri[1];?>"><?php echo $text2;?></a></h5>
	
	<div class="heading clearfix pagenav">
		<span class="breadcrumb2"><?php echo $this->document->getTitle()?></span>
		<?php echo $this->areablock('anchorarea', array('allowed' => array('anchor'))); ?>
		<div id="quicklinks">
		<?php echo $this->areablock('quicklinks', array('allowed' => array('quicklinks', 'product-quicklinks', 'layanankami-quicklinks')))?>
		</div>
	</div>
	<?php echo $this->areablock('tanggal-berita', array('allowed' => array('tanggal')))?>
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