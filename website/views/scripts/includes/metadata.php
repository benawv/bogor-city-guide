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
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/tabs-accordion.css">-->
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/wishlist-cart.css">


<!--
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/flexslider.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/tabs-accordion.css">
-->

 <!-- javascript -->
<script async src="/website/static/js/modernizr.js" type="text/javascript"></script>
<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!--script src="/website/static/jquery.tools.min.js" type="text/javascript"></script-->
<script src="/website/static/js/main.js" type="text/javascript"></script>


<!-- plugins -->
<script src="/website/static/plugins/jquery.flexslider.min.js" type="text/javascript"></script>
<script async src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/bootstrap.min.js" type="text/javascript"></script>
<script async src="/website/static/js/accordion-jquery.js" type="text/javascript"></script>
<!-- Community Tips -->
<script async type="text/javascript" src="/website/static/js/paging.js"></script>



<!-- font face 
<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
-->
<!--<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
element.src = "defer.js";
document.body.appendChild(element);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>-->

<!--<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkjnwleWwVfhCyd45V9A2_XBeAOqMDhrU&sensor=true"></script>-->
<!--<script  type="text/javascript" src="/website/static/plugins/gmaps-marker-label.js"></script>-->

<meta name="google-site-verification" content="t5S9yqQc-NyyfANDoR4qXDmEbpy746PnIqxU5rp0aXM" />
<link rel="alternate" href="http://www.allianz.co.id/" hreflang="id" />

<!--Google Analytics-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-44171460-1', 'auto');
ga('send', 'pageview');
</script>
<!--Google Analytics-->

<script type="text/javascript">
	function loadScript() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkjnwleWwVfhCyd45V9A2_XBeAOqMDhrU&sensor=true' +
		    '&callback=initialize';
		document.body.appendChild(script);
	      }
	window.onload = loadScript;
	
	function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "/website/static/plugins/gmaps-marker-label.js";
		document.body.appendChild(element);
	}
	if (window.addEventListener)
		window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	
	$(function(){
		$('#slideshow').flexslider({
			animation: "slide"
		});
		$('#best-products').flexslider({
			animation: "slide",
			slideshowSpeed: 6000
		});

	})
	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1);
	        if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
	    }
	    return "";
	}
	<?php
		if(!$this->editmode) {
	?>
			//$(document).ready(function(){
			//	if(getCookie("showWizard") == "") {		
			//		$('#modal-cart').modal("show");
			//	}
			//});
	<?php
		}
	?>
</script>
<!--<script async src="/website/static/js/share-product.js" type="text/javascript"></script>-->
<?php
	if($this->editmode) {
?>
		<style>
			.fixbox{
				top: 60px !important;
			}
		</style>
<?php
	}
?>