<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
<div class="container boxes-view">
	<?php echo $this->template("includes/breadcrumb.php")?>
	
	<div class="heading clearfix pagenav pagenavBerita">
		<span class="breadcrumb2"><?php echo $this->document->getTitle()?></span>
		<?php echo $this->areablock('anchorarea', array('allowed' => array('anchor'))); ?>
		<div id="quicklinks">
		<?php echo $this->areablock('quicklinks', array('allowed' => array('quicklinks', 'product-quicklinks', 'layanankami-quicklinks')))?>
		</div>
	</div>
	<?php //echo $this->areablock('tanggal-berita', array('allowed' => array('tanggal')))?>
	<?php if($this->editmode) { ?>
		<div>
			<?php echo $this->date("tanggal", array(
			 "format" => "d-m-Y"
			));?>
		</div>
	<?php }?>
	
	<div class="full-w bg-white cus-full">
		
		<?php
			if($this->editmode){
				echo '<button class="x-btn-text" type="button">Gambar dan Teks untuk Halaman Berita.</button>';
				echo $this->image("imgBerita", array("title" => "Image Size 156x104", "width" => 156, "height" => 104));
				echo $this->textarea("textareaBerita", array("width" => 500, "height" => 200, "maxlength" => 500));
			}
		?>
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