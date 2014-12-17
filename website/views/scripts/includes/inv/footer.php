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
		    $partial = array('includes/menu_footer_inv.php', 'website');
		    $this->navigation()->menu()->setPartial($partial);
		    //$this->navigation($navigation);
?>


<footer role="contentinfo" class="contentinfo">
	<div class="meta clearfix">
		<div class="container">
			<div class="statement">&copy; Allianz 2014. All Rights Reserved.</div>
			<ul class="static-links">
				<li><a href="/investasi/investment-homepage/footer/disclaimer" target="_blank">Disclaimer </a></li>
			</ul>
		</div>
	</div>
	<nav>
		<div class="container clearfix">
			<ul class="footer-links level1">
			<?php echo $this->navigation()->menu()->render($navigation); ?>
							
			</ul>
		</div>
	</nav>

	<div class="worldwide">
		<div class="container">
			
			<div>
				Allianz Indonesia <a href="http://allianz.co.id">allianz.co.id</a>
			</div>
				
			
		</div>
	</div>
</footer>


<!-- End of Footer -->
<link rel="stylesheet" type="text/css" media="all" href="/website/static/css/css-ie8/isr.css">


<!-- plugins -->

<script src="/website/static/inv/js/jquery.flexslider.min.js" type="text/javascript"></script>

<script src="/website/static/inv/js/resizeimagetoparent.js"></script>
<script src="/website/static/inv/js/javascripts.js"></script>




</body>
</html>