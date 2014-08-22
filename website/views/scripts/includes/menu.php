<?php
    
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
    $htmlIdPrefix = "mainNav_";
 
    $navigation = $this->pimcoreNavigation()->getNavigation($this->document, $navStartNode, $htmlIdPrefix);
    $this->navigation()->menu()->setUseTranslator(false); // to deactivate the translator provided by the view helper
    $partial = array('includes/menu-partial.php', 'website');
    $this->navigation()->menu()->setPartial($partial);
    //$this->navigation($navigation);
 
?>
<nav class="primary" role="primarynavigation">
	<h3 class="toggle-menu"><span>Main Navigation</span></h3>
	<div class="menu-level1">
		<?php
		    echo $this->navigation()->menu()->render($navigation);
		?>
	</div>
</nav>