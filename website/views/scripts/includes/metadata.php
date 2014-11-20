<!--[if IE 8 ]><html class="ie8"> 
	<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="<?php echo $root?>_assets/css/css-ie8/screen-ie8.css">
	<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="<?php echo $root?>_assets/css/css-ie8/main-ie8.css">
<![endif]-->

<!-- icons & favicon -->
<link rel="shortcut icon" href="https://www.allianz.com/v_207002904/system/master/images/favicon.ico" type="image/x-icon">


<!-- css -->

<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/flexslider.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/tabs-accordion.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">

<!--
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/flexslider.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/tabs-accordion.css">
-->

 <!-- javascript -->
<script src="/website/static/js/modernizr.js" type="text/javascript"></script>
<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!--script src="/website/static/jquery.tools.min.js" type="text/javascript"></script-->
<script src="/website/static/js/main.js" type="text/javascript"></script>


<!-- plugins -->
<script src="/website/static/plugins/jquery.flexslider.min.js" type="text/javascript"></script>
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/bootstrap.min.js" type="text/javascript"></script>
<?php if($_SERVER["REQUEST_URI"]!="/"){?>
<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
<?php }?>
<script src="/website/static/js/accordion-jquery.js" type="text/javascript"></script>



<!-- font face 
<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
-->


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkjnwleWwVfhCyd45V9A2_XBeAOqMDhrU&sensor=true"></script>
<script type="text/javascript" src="/website/static/plugins/gmaps-marker-label.js"></script>

<meta name="google-site-verification" content="t5S9yqQc-NyyfANDoR4qXDmEbpy746PnIqxU5rp0aXM" />
<script type="text/javascript">
	$(function(){
		$('#slideshow').flexslider({
			animation: "slide"
		});
		$('#best-products').flexslider({
			animation: "slide",
			slideshowSpeed: 6000
		});

	})
</script>
<script src="/website/static/js/share-product.js" type="text/javascript"></script>