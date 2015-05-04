<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<!-- Meta Tags -->
<meta charset="utf-8">
<!--title>Allianz Investment</title-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!--meta name="author" content="Allianz">
<!--meta name="description" content="Asuransi Allianz Indonesia adalah perusahaan asuransi terbaik dan terpercaya di dunia.">
<!--meta name="keywords" content="Asuransi Indonesia, Allianz Indonesia, Asuransi Terbaik, Asuransi Terpercaya">
<!--[if IE 8 ]><html class="ie8"> 
	<link rel="stylesheet" type="text/css" media="screen" id="screen-ie8-css" href="http://allianz.co.id/_assets/css/css-ie8/screen-ie8.css">
	<link rel="stylesheet" type="text/css" media="screen" id="main-ie8-css" href="http://allianz.co.id/_assets/css/css-ie8/main-ie8.css">
<![endif]-->


	<?php
        // portal detection => portal needs an adapted version of the layout
        $isPortal = false;
        if($this->getParam("controller") == "content" && $this->getParam("action") == "portal") {
            $isPortal = true;
        }

        // output the collected meta-data
        if(!$this->document) {
            // use "home" document as default if no document is present
            $this->document = Document::getById(1);
        }

        if($this->document->getTitle()) {
            // use the manually set title if available
            $this->headTitle()->set($this->document->getTitle());
        }
	if($this->document->getDescription()) {
            // use the manually set description if available
            $this->headMeta()->appendName('description', $this->document->getDescription());
        }
        if($this->document->getKeywords()) {
            $this->headMeta()->appendName('keywords', $this->document->getKeywords());
        }

        /* $this->headTitle()->append("Asuransi Indonesia Terbaik");
        $this->headTitle()->setSeparator(" : "); */

        echo $this->headTitle();
        echo $this->headMeta();
        
    ?>


<!-- icons & favicon -->
<link rel="shortcut icon" href="/website/static/inv/images/favicon.ico" type="image/x-icon">




<!-- css -->

<!--<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/inv/css/normalize.css" />-->
<link rel="stylesheet" type="text/css" media="screen" id="bootstrap-css" href="/website/static/inv/css/bootstrap.css" />
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/inv/css/screen.css" />-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="revision_style-css" href="/website/static/inv/css/revision_style.css" />-->
<link rel="stylesheet" type="text/css" media="screen" id="main-css" href="/website/static/inv/css/main.css" />
<link rel="stylesheet" type="text/css" media="screen" id="respon-css" href="/website/static/inv/css/respon.css" />

<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- form -->
<link rel="stylesheet" type="text/css" href="/website/static/inv/css/form/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/website/static/inv/css/form/css/demo.css" />
<link rel="stylesheet" type="text/css" href="/website/static/inv/css/form/css/component.css" />


<!-- javascript -->
<script src="/website/static/inv/js/modernizr.js" type="text/javascript"></script>
<script src="/website/static/inv/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/main.js" type="text/javascript"></script>

<!-- plugins -->
<script src="/website/static/plugins/jquery.flexslider.min.js" type="text/javascript"></script>
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/bootstrap.min.js" type="text/javascript"></script>

<script src="/website/static/inv/css/form/js/modernizr.custom.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-44171460-6', 'auto');
  ga('send', 'pageview');
 
</script>

</head>

                <?php

               // get root node if there is no document defined (for pages which are routed directly through static route)
		    if(!$this->document instanceof Document_Page) {
		        $this->document = Document::getConcreteByPath('/investment');
              //  $this->document = Document::getConcreteById(332);
		    }
		 
		    // get the document which should be used to start in navigation | default home
		    $navStartNode = $this->document->getProperty("navigationRoot");
		    if(!$navStartNode instanceof Document_Page) {
                $navStartNode = Document::getConcreteByPath('/investment');
		        //$navStartNode = Document::getConcreteById(332);
		    }
		 
		    //this is used as id prefix for the html menu element
		    $htmlIdPrefix = "mainNav_";
		 
		    $navigation = $this->pimcoreNavigation()->getNavigation($this->document, $navStartNode, $htmlIdPrefix);
		    $this->navigation()->menu()->setUseTranslator(false); // to deactivate the translator provided by the view helper
		    $partial = array('includes/menu_inv.php', 'website');
		    $this->navigation()->menu()->setPartial($partial);
		    //$this->navigation($navigation);

            ?>
<body>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<header role="banner" class="banner">

            <div class="container">
                <!-- <h1 class="weblogo">Allianz<span onclick="window.location.href = '<?php echo $this->url(array("document" => Document::getById(1)), "default", true)?>'"></span></h1> -->
                <h2 class="weblogo">Allianz<span onclick="window.open('http://www.allianz.co.id/<?php //echo $this->url(array("document" => Document::getById(475)), "default", true)?>','_blank')"></span></h2>
		<nav class="primary" role="primarynavigation">
			<h3 class="toggle-menu"><span>Main Navigation</span></h3>
			<div class="menu-level1">
				<?php
				    echo $this->navigation()->menu()->render($navigation);
				?>
			</div>
			<div class="search">
				<div class="container clearfix">
					<!--<form action="#" method="post">
						<input type="hidden" name="csrf" value="<?php echo $_SESSION["token"]; ?>">
						<input type="text" placeholder="Search" name="search" class="input-text">
						<button type="submit" class="icon-search">Search</button>
					</form> -->
					
					
				</div>
			</div>
		</nav>
		<div class="minibar clearfix">
			
			<nav class="toolbar">



				<!--<ul class="clearfix">
					<li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal" target="_blank" class="icon-user">Customer Login</a></li>
					<li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Individual/" target="_blank" class="icon-mail hide-text">Registrasi</a></li>
					<li><a href="product.php" class="icon-fav hide-text">My Product</a></li>
				</ul>
			-->
				
				<script type="text/javascript">
						$(document).ready(function() {
						$(".dropdown img.flag").addClass("flagvisibility");

						$(".dropdown dt a").click(function() {
							$(".dropdown dd ul").toggle();
						});
									
						$(".dropdown dd ul li a").click(function() {
							var text = $(this).html();
							$(".dropdown dt a span").html(text);
							$(".dropdown dd ul").hide();
							$("#result").html("Selected value is: " + getSelectedValue("sample"));
						});
									
						function getSelectedValue(id) {
							return $("#" + id).find("dt a span.value").html();
						}

						$(document).bind('click', function(e) {
							var $clicked = $(e.target);
							if (! $clicked.parents().hasClass("dropdown"))
								$(".dropdown dd ul").hide();
						});


						$("#flagSwitcher").click(function() {
							$(".dropdown img.flag").toggleClass("flagvisibility");
						});
						
					});
						
						function link(isi, extension, force)
						{
							extension = extension == undefined ? '.php' : '';
							useragent = '';
							if(useragent != '1' || force == true)
								window.location.href = isi + extension;
						}
				</script>
				
				<div class="language">
					<div class="list-header">
						<!--<dl id="sample" class="dropdown">
							<dt><a href="#"><span>English</span></a></dt>
							<dd>
								<ul>
									<li><a href="#">Bahasa</a></li>
									<li><a href="#">English</a></li>
								</ul>
							</dd>
						</dl>-->
					</div>	
				</div>	
				
				
					<!--<a href="http://sociallydevoted.socialbakers.com"><img class="badge" src="_assets/images/badge.png" alt="Socially Devoted Badge" title="We are Socially Devoted!"/></a>
				-->


					
			</nav>

			<a href="/">
				<img src="/website/static/inv/images/sitelabel.png" />
			</a>
		</div>
	</div>
	
</header>
<!-- End of Header -->
