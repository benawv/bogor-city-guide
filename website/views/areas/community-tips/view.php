<?php 
	$entries = new Object_CommunityTips_List();
	$entries->setLimit("3");
	$entries->setOrderKey("date");
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
							<a href="<?php echo "community-detail/".$entry->getO_key()."_".$entry->getO_id()."_".$entry->getTemplate();?>">
								<span class="title_news"><?php echo $entry->getTitle();?></span>
							</a>
							<div class="btn-group">
								<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
								<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
						<a href="<?php echo "community-detail/".$entry->getO_key()."_".$entry->getO_id()."_".$entry->getTemplate();?>" class="linkUrl">
							<img class="image_share" src="<?php echo $entry->getImageHomeAllianz();?>" alt="<?php echo $entry->imageHomeAllianz->metadata[1]["data"];?>" title="<?php echo $entry->imageHomeAllianz->metadata[0]["data"];?>" />
							<div class="description">
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
						</a>
					</div>
			<?php 
				}
			?>
<?php 
	}
?>