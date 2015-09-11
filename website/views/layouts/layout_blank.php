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
	<!--<h1 class="title-hide"><?php echo $this->document->getProperty('navigation_title');?></h1>-->
	<?php //echo $this->template("includes/header.php")?>
	<div role="main" class="main">
		<?php echo $this->layout()->content; ?>
	</div>
	<?php //echo $this->template("includes/footer.php"); ?>
	<link rel="stylesheet" type="text/css" media="all" href="/website/static/css/css-ie8/isr.css">

</body>

<?php if(!$this->editmode) { ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('li.aktif .nav_menu div').css('display', 'none');
		$('li .nav_menu .white_image').css('display', 'none');
		$('li.aktif .nav_menu .white_image').css('display', 'block');
		
		var hash = window.location.hash.substring(1);
		if(hash!=''){
			var target = '#modal-'+hash;
			$(target).modal('show');
		}
		$(".pagenav .navi li").click(function(){
			$(".pagenav .navi li").removeClass('aktif');
			$(".pagenav .navi li .nav_menu div").css('display','block');
			$(".pagenav .navi li .nav_menu .white_image").css('display','none');
			$(this).addClass('aktif');
			$('li.aktif .nav_menu div').css('display', 'none');
			$('li.aktif .nav_menu .white_image').css('display', 'block');
			
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
		$(".hideme").hide();
		$(".v").click(function(){
			$(this).siblings('.hideme').slideToggle();
			if($(this).find('.xicon').hasClass('down')){
				$(this).find('.xicon').removeClass('down')
				$(this).find('.xicon').addClass('up')
			}
			else{
				$(this).find('.xicon').removeClass('up')
				$(this).find('.xicon').addClass('down')
			}
		});
	});
</script>
<?php }

    else{
?>
    <!--SETTING LOGO 125-->
    <style>
	.notepadKanan{display: none !important;}
    </style>
<?php }?>
</html>
