<div id="fraud" class="full-w bg-white">
	<ul class="clearfix">
	<?php foreach($this->container as $page) {
			if($page->getDocument()->getProperty('navigation_title') != ""){
	?>
		<li class="menutitle">
			<a href="<?php echo $page->getUri()?>"><?php echo $page->getDocument()->getProperty('navigation_title');?></a>
		</li>
				<?php 
					$i = 0;
					foreach($page->getPages() as $subpage)
					{
				?>
						<ul>
							<li class="menutitle"><a href="<?php echo $subpage->getUri()?>"><?php echo $subpage->getDocument()->getProperty('navigation_title');?></a></li>
							<ul>
							<?php 
								$list = new Document_List();
								$list->setCondition('parentId = '.$subpage->getDocument()->getId());
								$documents = $list->load();
								//echo '<pre>'; die(print_r($documents));
								foreach($documents as $anchor)
								{
									if($anchor->getProperty('navigation_title')!="")
									{
										if($anchor->getProperty('navigation_class'))
											echo "<li><a href='".$subpage->getUri()."#".$anchor->getHref()."' onclick=('".$anchor->getHref()."')>".$anchor->getProperty('navigation_title')."</a></li>";
										else
											echo "<li><a href='".$anchor->getHref()."' onclick=('".$anchor->getHref()."')>".$anchor->getProperty('navigation_title')."</a></li>";
									}
								}
							?>
							</ul>
						</ul>
				<?php
						$i++;
					}
				?>
		
	<?php }}?>
	</ul>
</div>