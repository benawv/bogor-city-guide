<?php 
	$entries = new Object_CommunityTips_List();
	$entries->setLimit("3");
	$entries->setOrderKey("o_creationDate");
	$entries->setOrder("desc");
	
	if(count($entries)>0)
	{
?>
	<div id="community" class="clearfix">
		<h2>Community Tips</h2>
		<div class="tips">
			<?php
				foreach($entries as $entry)
				{
			?>
					<div class="tip">
						<div class="photo"><img src="<?php echo $entry->imageHomeAllianz->path."".$entry->imageHomeAllianz->filename;?>" /></div>
						<div class="description">
							<h3><a href="<?php echo "community-detail/".$entry->getO_key()."_".$entry->getO_id()."_".$entry->getTemplate();?>"><?php echo $entry->getTitle();?></a></h3>
							<div class="meta">
								<div class="description-jurnal">
									<?php
									if($entry->getSummaryHome()!='')
									{
										echo limit_words($entry->getSummaryHome(),15);
									}
									else{
										echo limit_words($entry->getDescription(),15);
									}
									?>
								</div>	
							</div>
						</div>
					</div>
			<?php 
				}
			?>
		</div>
	</div>
<?php 
	}
?>