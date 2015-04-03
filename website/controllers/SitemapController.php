<?php

class SitemapController extends Website_Controller_Action {
	
	public function indexAction()
	{
		//echo "<pre>";
		//print_r($this->container);
		//die();
		//$doc = new DOMDocument('1.0','UTF-8');
		//// we want a nice output
		//$doc->formatOutput = true;
		//
		//$root = $doc->createElement('url');
		//$root = $doc->appendChild($root);
		//
		//$title = $doc->createElement('title');
		//$title = $root->appendChild($title);
		//
		//$text = $doc->createTextNode('This is the title');
		//$text = $title->appendChild($text);
		//
		//echo 'Wrote: ' . $doc->save("abc.xml") . ' bytes'; // Wrote: 72 bytes
		
		//$sitemap = new DOMDocument;
		//
		//// create root element
		//$root = $sitemap->createElement("urlset");
		//$sitemap->appendChild($root);
		//
		////$root_attr = $sitemap->createAttribute('xmlns'); 
		////$root->appendChild($root_attr); 
		////
		////$root_attr_text = $sitemap->createTextNode('http://www.sitemaps.org/schemas/sitemap/0.9'); 
		////$root_attr->appendChild($root_attr_text);
		////
		////$root_attr2 = $sitemap->createAttribute('xmlns:xsi'); 
		////$root->appendChild($root_attr2); 
		////
		////$root_attr_text2 = $sitemap->createTextNode('http://www.w3.org/2001/XMLSchema-instance'); 
		////$root_attr2->appendChild($root_attr_text2);
		////
		////$root_attr3 = $sitemap->createAttribute('xsi:schemaLocation'); 
		////$root->appendChild($root_attr3); 
		////
		////$root_attr_text3 = $sitemap->createTextNode('http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'); 
		////$root_attr3->appendChild($root_attr_text3);
		//
		//$root->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
		//$root->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
		//$root->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
		//
		////$links_array = 
		//
		//foreach($this->container as $page) {
		//	if($page->getDocument()->getProperty('navigation_title') != ""){
		//		$url = $sitemap->createElement("url");
		//		$root->appendChild($url);
		//
		//		$loc = $sitemap->createElement("loc");
		//		$url->appendChild($loc);
		//		$url_text = $sitemap->createTextNode($page->getUri());
		//		$loc->appendChild($url_text);
		//		
		//		foreach($page->getPages() as $subpage)
		//		{
		//			$url2 = $sitemap->createElement("url");
		//			$root->appendChild($url2);
		//	
		//			$loc2 = $sitemap->createElement("loc");
		//			$url2->appendChild($loc2);
		//			$url_text2 = $sitemap->createTextNode($subpage->getUri());
		//			$loc2->appendChild($url_text2);
		//			
		//			$list = new Document_List();
		//			$list->setCondition('parentId = '.$subpage->getDocument()->getId());
		//			$documents = $list->load();
		//			
		//			foreach($documents as $anchor)
		//			{
		//				$url3 = $sitemap->createElement("url");
		//				$root->appendChild($url3);
		//		
		//				$loc3 = $sitemap->createElement("loc");
		//				$url3->appendChild($loc2);
		//				$url_text3 = $sitemap->createTextNode($subpage->getUri());
		//				$loc3->appendChild($url_text2);
		//			}
		//		}
		//	}
		//	//// create child element
		//	//$url = $sitemap->createElement("url");
		//	//$root->appendChild($url);
		//	//
		//	//$loc = $sitemap->createElement("loc");
		//	////$lastmod = $sitemap->createElement("lastmod");
		//	////$changefreq = $sitemap->createElement("changefreq");
		//	//
		//	//$url->appendChild($loc);
		//	//$url_text = $sitemap->createTextNode($http_url);
		//	//$loc->appendChild($url_text);
		//	//
		//	////$url->appendChild($lastmod);
		//	////$lastmod_text = $sitemap->createTextNode(date("Y-m-d"));
		//	////$lastmod->appendChild($lastmod_text);
		//	////
		//	////$url->appendChild($changefreq);
		//	////$changefreq_text = $sitemap->createTextNode("weekly");
		//	////$changefreq->appendChild($changefreq_text);
		//
		//}
		//
		//$file = "abc.xml";
		//$fh = fopen($file, 'w') or die("Can't open the sitemap file.");
		//fwrite($fh, $sitemap->saveXML());
		//fclose($fh);
	  //$this->_helper->layout->disableLayout();
	}
	
}
