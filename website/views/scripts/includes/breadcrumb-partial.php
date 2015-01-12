<?php 
	//$z = 0;
	$tmp = array();
	$x = 1;
	$label = "";
	foreach($this->pages as $page) {
		if($label == $page->getLabel())
		{
			$label = $page->getLabel();
		}
		else {
			if($label == "")
			{
				echo " &rsaquo; <span><a href='".$page->getUri()."'>".$page->getTitle()."</a></span>";
				$label = $page->getLabel();
			}
			else {
				if($x != count($this->pages))
				{
					echo " &rsaquo; <span><a href='".$page->getUri()."'>".$page->getTitle()."</a></span>";
				}
				else {
					echo " &rsaquo; <span class='currentPage'>".$page->getTitle()."</span>";
				}
				$label = $page->getLabel();
			}
		}
		/*
		if(in_array($page->getLabel(), $tmp))
		{
			
		}
		else
		{
			if($x != count($this->pages))
			{
				$tmp[] = $page->getLabel();
				echo " &gt; <span><a href='".$page->getUri()."'>".$page->getTitle()."</a></span>";
			}
			else
			{
				$tmp[] = $page->getLabel();
				echo " &gt; <span>".$page->getTitle()."</span>";
			}
		}
		*/
		$x++;
	}

	//foreach($this->pages as $page) {
	//	echo " &gt; <span><a href='".$page->getUri()."'>".$page->getDocument()->getKey()."</a></span>";
	//}
?>