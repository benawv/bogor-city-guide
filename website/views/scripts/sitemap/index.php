<?php
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
    $partial = array('includes/create-menu-sitemap.php', 'website');
    $this->navigation()->menu()->setPartial($partial);
	echo $this->navigation()->menu()->render($navigation);
?>