<?php 
	//$z = 0;
	$tmp = array();
	$x = 1;
	foreach($this->pages as $page) {
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
		$x++;
	}

	//foreach($this->pages as $page) {
	//	echo " &gt; <span><a href='".$page->getUri()."'>".$page->getDocument()->getKey()."</a></span>";
	//}
?>