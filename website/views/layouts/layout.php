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
