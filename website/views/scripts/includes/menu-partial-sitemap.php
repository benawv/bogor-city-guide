<div id="fraud" class="full-w bg-white">
	<ul class="clearfix">
	<?php
	foreach($this->container as $page) {
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
					if($page->getDocument()->getProperty('navigation_title') == "Community Tips")
				    {
						$Catcommunity = new Object_CommunityTipsCategory_List();
						//$community->setCondition("category__id = 156");
						foreach($Catcommunity as $cat)
						{
								$idCat = $cat->getO_id();
				?>
						<ul>
							<li class="menutitle"><a href="<?php echo $this->url(array(limit_words($cat->getO_key(),5),$cat->getId()),"list-category");?>"><?php echo $cat->getTitleCategory();?></a></li>
							<ul>
								<?php
										$Community = new Object_CommunityTips_List();
										$Community->setCondition("category__id = ".$idCat);
										foreach($Community as $Com)
										{
								?>				
												<li><a href='<?php echo $this->url(array(limit_words($Com->getO_key(),5),$Com->getO_id(),$Com->getTemplate()),"community-detail");?>'><?php echo $Com->getTitle();?></a></li>
								<?php
										}
								?>
							</ul>
						</ul>
				<?php
						}
					}
				?>
	<?php }}?>
	</ul>
</div>