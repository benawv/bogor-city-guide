<?php 
	$entries = new Object_JurnalAllianz_List();
	$entries->setLimit("3");
	$entries->setOrderKey("o_creationDate");
	$entries->setOrder("desc");
	if(count($entries)>0)
	{
?>
	<div id="community" class="clearfix">
		<h2>Jurnal Allianz</h2>
		<div class="tips">
			<?php
				foreach($entries as $entry)
				{	
			?>
					<div class="tip">
						<div class="photo"><img src="<?php echo $entry->imageHome->path."".$entry->imageHome->filename;?>" /></div>
						<div class="description">
							<h3><a href="<?php echo "jurnal-allianz/".$entry->getO_key()."_".$entry->getO_id();?>"><?php echo $entry->getTitle();?></a></h3>
							<div class="meta">
								<div class="description-jurnal">
									<?php
									if($entry->getSummaryHome()!='')
									{
										echo limit_words($entry->getSummaryHome(),15);
									}
									else{
										echo limit_words($entry->getContent(),15);
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