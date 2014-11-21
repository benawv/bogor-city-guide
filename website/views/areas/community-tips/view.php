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
							<h2 class="title_news"><a href="<?php echo "community-detail/".$entry->getO_key()."_".$entry->getO_id()."_".$entry->getTemplate();?>"><?php echo $entry->getTitle();?></a></h2>
							<div class="btn-group">
								<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
								<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
						<a href="<?php echo "community-detail/".$entry->getO_key()."_".$entry->getO_id()."_".$entry->getTemplate();?>">
							<img src="<?php echo $entry->imageHomeAllianz->path."".$entry->imageHomeAllianz->filename;?>" />
						</a>
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
							<a href="<?php echo "community-detail/".$entry->getO_key()."_".$entry->getO_id()."_".$entry->getTemplate();?>" class="more">Selengkapnya &raquo;</a>
						</div>
					</div>
			<?php 
				}
			?>
<?php 
	}
?>