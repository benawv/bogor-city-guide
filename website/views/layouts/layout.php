<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
	<link rel="shortcut icon" href="/website/static/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="/website/static/images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/website/static/images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/website/static/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/website/static/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/website/static/images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/website/static/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/website/static/images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/website/static/images/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/website/static/images/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/website/static/images/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/website/static/images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/website/static/images/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/website/static/images/favicon/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="/website/static/images/favicon/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="/website/static/images/favicon/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="/website/static/images/favicon/widetile.png" />
	<meta name="msapplication-square310x310logo" content="/website/static/images/favicon/largetile.png" />
	<meta charset="utf-8">
	<meta http-equiv="Cache-control" content="public" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<?php echo $this->cusMetaTitle.$this->cusMetaDesc.$this->cusMetaImage;?>
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
	//echo "<pre>";
	//print_r($this->request->action);
	//die();
	
	    if($this->request->controller == 'community' && $this->request->action == 'detail')
	    {
		$id = $this->_getParam('id');
		$entries = Object_Abstract::getById($id);
		$data = $entries;
		
		//$metaCustom = $data->getProperties()
		//echo "<pre>";
		//print_r($data->getProperties());
		//die();
	?>
		<title><?php echo $data->getMetaTitle();?></title>
		<meta name="description" content="<?php echo $data->getMetaDescription();?>" >
		<meta name="keywords" content="<?php echo $data->getMetaKeywords();?>" >
	<?php
	    }
	    else{
		$src_script = $this->document->getProperty('src_script')?$this->document->getProperty('src_script'):"";
		$script = $this->document->getProperty('script')?$this->document->getProperty('script'):"";
		
		if( ($src_script != null || $script != null) && $this->request->controller != 'wishlist'){
			echo "<script src='".$src_script."'  type='text/javascript'></script>";
			echo "<script>".$script."</script>";
			echo '<noscript><img width="1" height="1" style="border:0" src="'.$this->document->getProperty('noscript').'" /></noscript>';
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
	    }

        /* $this->headTitle()->append("Asuransi Indonesia Terbaik");
        $this->headTitle()->setSeparator(" : "); */

        echo $this->headTitle();
        echo $this->headMeta();
		
		
        if($this->request->controller == 'wishlist' && $this->request->action == 'checkout'){
    ?>
			<script type='text/javascript'>
			
			// Conversion Name: Allianz 2015_8
			
			// INSTRUCTIONS 
			
			// The Conversion Tags should be placed at the top of the <BODY> section of the HTML page. 
			
			// In case you want to ensure that the full page loads as a prerequisite for a conversion 
			
			// being recorded, place the tag at the bottom of the page. Note, however, that this may 
			
			// skew the data in the case of slow-loading pages and in general not recommended. 
			
			//
			
			// NOTE: It is possible to test if the tags are working correctly before campaign launch 
			
			// as follows:  Browse to http://bs.serving-sys.com/Serving/adServer.bs?cn=at, which is 
			
			// a page that lets you set your local machine to 'testing' mode.  In this mode, when 
			
			// visiting a page that includes an conversion tag, a new window will open, showing you 
			
			// the data sent by the conversion tag to the MediaMind servers. 
			
			// 
			
			// END of instructions (These instruction lines can be deleted from the actual HTML)
			
			var ebRand = Math.random()+'';
			
			ebRand = ebRand * 1000000;
			
			//<![CDATA[ 
			
			document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=676421&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
			
			//]]>
			
			</script>
			<!-- Conversion Pixel - Checkout - DO NOT MODIFY --><script src="https://secure.adnxs.com/px?id=592598&seg=3311261&t=1" type="text/javascript"></script><!-- End of Conversion Pixel -->
			<noscript>
			
			<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=676421&amp;ns=1"/>
			
			</noscript>
<?php }
		if($this->request->controller == 'wishlist' && $this->request->action == 'terimakasih'){
?>
			<script type='text/javascript'>
			
			// Conversion Name: Allianz 2015_9
			
			// INSTRUCTIONS 
			
			// The Conversion Tags should be placed at the top of the <BODY> section of the HTML page. 
			
			// In case you want to ensure that the full page loads as a prerequisite for a conversion 
			
			// being recorded, place the tag at the bottom of the page. Note, however, that this may 
			
			// skew the data in the case of slow-loading pages and in general not recommended. 
			
			//
			
			// NOTE: It is possible to test if the tags are working correctly before campaign launch 
			
			// as follows:  Browse to http://bs.serving-sys.com/Serving/adServer.bs?cn=at, which is 
			
			// a page that lets you set your local machine to 'testing' mode.  In this mode, when 
			
			// visiting a page that includes an conversion tag, a new window will open, showing you 
			
			// the data sent by the conversion tag to the MediaMind servers. 
			
			// 
			
			// END of instructions (These instruction lines can be deleted from the actual HTML)
			
			var ebRand = Math.random()+'';
			
			ebRand = ebRand * 1000000;
			
			//<![CDATA[ 
			
			document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=676422&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
			
			//]]>
			
			</script>
			<!-- Conversion Pixel - Terima Kasih - DO NOT MODIFY --><script src="https://secure.adnxs.com/px?id=592599&seg=3311262&t=1" type="text/javascript"></script><!-- End of Conversion Pixel -->
			<noscript>
			
			<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/Serving/ActivityServer.bs?cn=as&amp;ActivityID=676422&amp;ns=1"/>
			
			</noscript>
<?php
		}
?>
	<?php echo $this->template("includes/metadata.php")?>
	
</head>

<body>
	<?php echo $this->template("includes/header.php")?>
	<div role="main" class="main">
		<?php echo $this->layout()->content; ?>
	</div>
	<?php echo $this->template("includes/footer.php"); ?>
</body>
</html>
