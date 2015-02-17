<?php 
	$entries = new Object_JurnalAllianz_List();
	$entries->setLimit("3");
	$entries->setOrderKey("tgl_jurnal");
	$entries->setOrder("desc");
	if(count($entries)>0)
	{
?>
			<?php
				foreach($entries as $entry)
				{	
			?>
					<div class="item" id="item-left">
						<div class="heading">
							<a href="<?php echo "jurnal-allianz/".$entry->getO_key()."_".$entry->getO_id();?>">
								<h2 class="title_news"><?php echo $entry->getTitle();?></h2>
							</a>
							<div class="btn-group">
								<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
								<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
						<a href="<?php echo "jurnal-allianz/".$entry->getO_key()."_".$entry->getO_id();?>" class="linkUrl">
							<img class="image_share" src="<?php echo $entry->getImageHome();?>" alt="<?php echo $entry->imageHome->metadata[1]["data"];?>" title="<?php echo $entry->imageHome->metadata[0]["data"];?>" />
							<div class="description">
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
						</a>
					</div>
			<?php 
				}
			?>
<?php 
	}
?>