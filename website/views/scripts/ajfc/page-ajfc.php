<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css-ajfc/hotspot/ajfc.hotspot.css">


<!--<link rel="stylesheet" href="/website/ajfc/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/website/ajfc/css/bootstrap-custom-wcm/bootstrap.css">
<link rel="stylesheet" href="/website/ajfc/css/style.css">
	<link rel="stylesheet" href="/website/ajfc/css/main.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">

<link rel="stylesheet" href="/website/ajfc/css/font-awesome.min.css">	
<script src="/website/ajfc/js/zabuto_calendar.min.js"></script>
<script src="/website/ajfc/js/javascripts.js"></script>

<?php echo $this->areablock('halaman-ajfc', array('allowed' => array('sudah-submit','pendaftaran','daftar-peserta','thanks-page','expire-page','home-ajfc','table-text','table-li','proses-seleksi','galeri-ajfc','header-ajfc')))?>

<?php echo $this->areablock('container-ajfc',  array('allowed' => array('tombol-ajfc','kalender-ajfc'))) ?>

	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('socmed-feed', array(
					"allowed" => array("socmed-ajfc")))?>
		<div id="quicklinks">
			<?php echo $this->areablock('update-news', array(
					"allowed" => array("newsfeed-ajfc")))?>
		</div>
	</div><!-- .wrapper-special -->