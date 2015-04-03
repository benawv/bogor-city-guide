<?php
	$sitemap = new DOMDocument;

	// create root element
	$root = $sitemap->createElement("urlset");
	$sitemap->appendChild($root);

	$root->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
	$root->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
	$root->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
	
	//$links_array = 

	foreach($this->container as $page) {
		if($page->getDocument()->getProperty('navigation_title') != ""){
			$url = $sitemap->createElement("url");
			$root->appendChild($url);
			
			$loc = $sitemap->createElement("loc");
			$url->appendChild($loc);
			$url_text = $sitemap->createTextNode("http://".$_SERVER['HTTP_HOST'].$page->getUri());
			$loc->appendChild($url_text);
			
			$priority = $sitemap->createElement("priority");
			$url->appendChild($priority);
			$priority_text = $sitemap->createTextNode("1.00");
			$priority->appendChild($priority_text);
			
			foreach($page->getPages() as $subpage)
			{
				$url2 = $sitemap->createElement("url");
				$root->appendChild($url2);
		
				$loc2 = $sitemap->createElement("loc");
				$url2->appendChild($loc2);
				$url_text2 = $sitemap->createTextNode("http://".$_SERVER['HTTP_HOST'].$subpage->getUri());
				$loc2->appendChild($url_text2);
				
				$priority2 = $sitemap->createElement("priority");
				$url2->appendChild($priority2);
				$priority_text2 = $sitemap->createTextNode("1.00");
				$priority2->appendChild($priority_text2);
				
				
				$list = new Document_List();
				$list->setCondition('parentId = '.$subpage->getDocument()->getId());
				$documents = $list->load();
				
				foreach($documents as $anchor)
				{
					$url3 = $sitemap->createElement("url");
					$root->appendChild($url3);
			
					$loc3 = $sitemap->createElement("loc");
					$url3->appendChild($loc3);
					$url_text3 = $sitemap->createTextNode("http://".$_SERVER['HTTP_HOST'].$subpage->getUri());
					$loc3->appendChild($url_text3);
					
					$priority3 = $sitemap->createElement("priority");
					$url3->appendChild($priority3);
					$priority_text3 = $sitemap->createTextNode("1.00");
					$priority3->appendChild($priority_text3);
				}
			}
		}

	}

	$file = "sitemap.xml";
	$fh = fopen($file, 'w') or die("Can't open the sitemap file.");
	fwrite($fh, $sitemap->saveXML());
	fclose($fh);
?>