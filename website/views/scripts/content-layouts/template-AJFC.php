<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css-ajfc/hotspot/ajfc.hotspot.css">


<!--<link rel="stylesheet" href="/website/ajfc/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/website/ajfc/css/bootstrap-custom-wcm/bootstrap.css">
<link rel="stylesheet" href="/website/ajfc/css/style.css">
	<link rel="stylesheet" href="/website/ajfc/css/main.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">

<link rel="stylesheet" href="/website/ajfc/css/font-awesome.min.css">	
<script src="/website/ajfc/js/zabuto_calendar.min.js"></script>
<script src="/website/ajfc/js/javascripts.js"></script>

<?php echo $this->areablock('atas-ajfc', array('allowed' => array('header-ajfc')))?>

<?php echo $this->areablock('tengah-ajfc',  array('allowed' => array('tombol-ajfc','kalender-ajfc'))) ?>

	<div class="wrapper-special clearfix">
		<div id="quicklinks">
			<?php echo $this->areablock('bawah-news', array(
					"allowed" => array("socmed-ajfc")))?>
		</div>
	</div><!-- .wrapper-special -->