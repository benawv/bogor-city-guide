<nav>
		<div class="container clearfix">
			<ul class="footer-links level1">
                    <?php 
                    $menu_loop=0;
                    foreach($this->container as $page): 
                    ?>
                    	<li class="left wi200">
                    		<!-- <div class="menu-level2"> -->
                    
                    			<?php 
                                $menu_loop;
                    				$i = 0;
                    				foreach($page->getPages() as $subpage)
                    				{
                                        if($i==1){break;}
                    			?>
                    					<ul class="<?php echo $i==0?'noborder':'' ?>">
                    						<li class="menutitle"><span class="clickPage" onclick="link('<?php echo $subpage->getUri()?>','')"><?php echo $subpage->getDocument()->getTitle()?></span></li>
                    						<?php 
                    							$list = new Document_List();
                    							$list->setLimit(7);
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
                    			<?php 
                                    $i++;
                    				
                                    }
                    			?>
                    			
                    		<!-- </div> -->
                    	</li>
                    <?php 
                    $menu_loop++;
                    if($menu_loop == 3){ break; }
                    endforeach;
                    ?>		
                    <li class="left wi200">
                    	<!-- <div class="menu-level2"> -->
                            <ul class="noborder">
                                <li class="menutitle"><span class="clickPage" >Halaman Terkait</span></li>
                        		<li><a target="_blank" href="http://allianz.co.id">Allianz Website</a></li>
        						<li><a href="#">Allianz Facebook</a></li>
        						<li><a href="#">Allianz Twitter</a></li>
        						<li><a target="_blank" href="http://jurnal.allianz.co.id">Jurnal Allianz</a></li>
                            </ul>
                   		<!-- </div> -->
                   	</li>
			</ul>
		</div>
	</nav>
        
