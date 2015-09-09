<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
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
			
		if($this->document->getProperty('script')){
			echo "<script>".$this->document->getProperty('script')."</script>";
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
