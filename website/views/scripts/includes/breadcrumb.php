<?php
	$id = $this->document->getId();
	$parent_id = $this->document->getParentId();
	$path = $this->document->getPath();
	$key = $this->document->getKey();
	// get root node if there is no document defined (for pages which are routed directly through static route)
    if(!$this->document instanceof Document_Page) {
        $this->document = Document::getById(1);
    }
 
    // get the document which should be used to start in navigation | default home
    $navStartNode = $this->document->getProperty("navigationRoot");
    if(!$navStartNode instanceof Document_Page) {
        $navStartNode = Document::getById(1);
    }
 
    //this is used as id prefix for the html menu element
    $htmlIdPrefix = "";

    $navigation = $this->pimcoreNavigation()->getNavigation($this->document, $navStartNode, $htmlIdPrefix);
    $this->navigation()->menu()->setUseTranslator(false); // to deactivate the translator provided by the view helper
    $this->navigation($navigation);
    $this->navigation()->breadcrumbs()->setMinDepth(0);
    
?>
		<h5>
			<span><a href="/">Home </a></span>
			<?php echo $this->navigation()->breadcrumbs()->setPartial(array('includes/breadcrumb-partial.php', 'website'));?>
		</h5>