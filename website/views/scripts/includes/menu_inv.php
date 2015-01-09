<ul class="clearfix">
<?php foreach($this->container as $page): ?>
	<li>
		<a href="javascript:void(0);"><?php echo $page->getDocument()->getProperty('navigation_title');?></a>
		<div class="menu-level2">
			<a href="#" class="back">Back</a>
			<!--<ul class="noborder">
				<li class="menutitle">Profil</li>
				<li><a href="visimisi.php">Visi dan Misi</a></li>
				<li><a href="profil.php#tentang" onclick="navigateMe('tentang')">Tentang Allianz</a></li>
				<li><a href="profil.php#pesan" onclick="navigateMe('pesan')">Pesan CEO</a></li>
				<li><a href="profil.php#komposisi" onclick="navigateMe('komposisi')">Komposisi Saham</a></li>
				<li><a href="profil.php#dewan_direksi" onclick="navigateMe('dewan_direksi')">Dewan Direksi</a></li>
				<li><a href="profil.php#dewan_komisaris" onclick="navigateMe('dewan_komisaris')">Dewan Komisaris</a></li>
				<li><a href="profil.php#video" onclick="navigateMe('video')">Video Korporat</a></li>
			</ul>
			-->
			<!--div class="mainmenu noborder2"-->
			<?php 
				$i = 0;
				foreach($page->getPages() as $subpage)
				{
			?>
					<ul class="<?php echo $i==0?'noborder':'' ?>">
						<li class="menutitle"><span class="clickPage" onclick="link('<?php echo $subpage->getUri()?>','')"><?php echo $subpage->getDocument()->getProperty('navigation_title');?></span></li>
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
			
		</div>
	</li>
<?php endforeach;?>
</ul>
