<?php
	if(!$this->editmode) { 
		$url = $_SERVER['REQUEST_URI'];
		$uri = explode("/", $url);
		
		for($x = 1; $x < count($uri); $x++)
		{
			$title = explode("-", $uri[$x]);
			$textTitle = "";
			$text = "";
			for ($y = 0; $y < count($title); $y++)
			{
				$textTitle = " <span class='upperText'>".substr($title[$y], 0, 1)."</span>".substr($title[$y], 1);
				$text .= $textTitle;
			}
		}
		$menu = explode("-", $uri[1]);
		$textTitle2 = "";
		$text2 = "";
		for ($y = 0; $y < count($menu); $y++)
		{
			$textTitle2 = " <span class='upperText'>".substr($menu[$y], 0, 1)."</span>".substr($menu[$y], 1);
			$text2 .= $textTitle2;
		}
	}
	else{
		$text = "";
	}
	$id = $this->document->getId();
	$parent_id = $this->document->getParentId();
	$path = $this->document->getPath();
	$key = $this->document->getKey();
	// get root node if there is no document defined (for pages which are routed directly through static route)
    if(!$this->document instanceof Document_Page) {
        $this->document = Document::getById(475);
    }
 
    // get the document which should be used to start in navigation | default home
    $navStartNode = $this->document->getProperty("navigationRoot");
    if(!$navStartNode instanceof Document_Page) {
        $navStartNode = Document::getById(475);
    }
 
    //this is used as id prefix for the html menu element
    $htmlIdPrefix = "mainNav_";

    $navigation = $this->pimcoreNavigation()->getNavigation($this->document, $navStartNode, $htmlIdPrefix);
    $this->navigation()->menu()->setUseTranslator(false); // to deactivate the translator provided by the view helper
    $this->navigation($navigation);
    
?>
		<h5 style="margin-bottom: 23px;">
			<span><a href="/">Home </a></span>
			<?php echo $this->navigation()->breadcrumbs()->setPartial(array('includes/inv/breadcrumb-partial.php', 'website'));?>
		</h5>