<link rel="stylesheet" type="text/css" href="/website/static/css/virgin.css">
	<?php
		function limit_words($string, $word_limit)
		{
			$words = explode("-",$string);
			return implode("-",array_splice($words,0,$word_limit));
		}
	?>

<div role="main" class="tips-main main" style="background: url(<?php echo $this->fetchBackground;?>);background-size: 1500px auto;background-repeat: no-repeat;background-position: top;">

<div id="js-main-wrp" class="main-wrp">
	<div class="tips-container tips-container2 container boxes-view">
	
	           
			<div id="crumb" class="crmb-wrp">
				<div class="s-row crmb crmb1">
					<ul class="custom_ul">
						<li class="crmb-sctn blue-allianz">
							<a href="/community-tips">Community</a>
						</li>
								
						<?php
							foreach($this->fetchData as $getColor)
							{
								if($getColor->category->hexaColor != '')
								{
									$color = $getColor->category->hexaColor;
								}
								else
								{
									$color = $getColor->category->colorPicker;
								}
								$id = "";
								$id = $getColor->category->o_id;
								$title = "";
								$title = $getColor->category->titleCategory;
								$summary = "";
								$summary = $getColor->category->summary;
							}
						?>
						<input type="hidden" value="<?php echo $id;?>" class="category" />
						
						<li style="background-color: <?php echo $color;?>;" class="crmb-sctn">
							<a href="#"><?php echo $title;?></a>
						</li>

				   <!-- <li class="crmb-sctn">
							<a href="/travel">Travel</a>
						</li> -->
					</ul>
				</div>
			</div>
			<?php if (isset($summary)){?>
			<div class="s-row hero-bnnr hero-bnnr2">
				<div class="txt-wrp">
					<h1><?php echo $summary;?></h1>
				</div>
				
			</div>
			<?php }else{echo "<div style=''></div>";}?>
			<div class="tips-box items-container" id="product-sub" >
				<div class="tips-item-kiri">
					<div class="s-main">
						<div class="s-main-innr" id="pagingTop">
							<div class="art-lst">
							<?php if ($this->totalData > 0){?>
									<div class="s-ct">
										<div class="innr-wrp">
										<?php
											$y = 0;
											$list = $this->fetchData;
											$totalData = $this->totalData;
											while($y < $this->totalData)
											{
										?>
											<?php if($y < $totalData){?>
											<div class="r">
												<div class="c-2of3 cus_hide" id="div<?php echo $y;?>">
													<article>
														<a href="<?php echo $this->url(array(limit_words($list->objects[$y]->getO_key(),5),$list->objects[$y]->getO_id(),$list->objects[$y]->getTemplate()),"community-detail");?>">
														<!-- <i class="icon-video"></i>	 -->	
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $list->objects[$y]->getImage();?>"alt="<?php echo $list->objects[$y]->image->metadata[1]["data"];?>" title="<?php echo $list->objects[$y]->image->metadata[0]["data"];?>">
																	<div class="tg tg-shr">
																		<?php 
																			echo $list->objects[$y]->getCategory()->titleCategory;
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", strtotime($list->objects[$y]->getDate()));?>
																	</time>
																	<p class="authr-ttl"><?php echo $list->objects[$y]->getTitle();?></p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<?php $y++;?>
												<?php if($y < $totalData){?>
													<div class="c-1of3 cus_hide" id="div<?php echo $y;?>">
														<article>
															<a href="<?php echo $this->url(array(limit_words($list->objects[$y]->getO_key(),5),$list->objects[$y]->getO_id(),$list->objects[$y]->getTemplate()),"community-detail");?>">
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $list->objects[$y]->getImage();?>"alt="<?php echo $list->objects[$y]->image->metadata[1]["data"];?>" title="<?php echo $list->objects[$y]->image->metadata[0]["data"];?>">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list->objects[$y]->getCategory()->titleCategory;
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", strtotime($list->objects[$y]->getDate()));?>
																		</time>
																		<p class="authr-ttl"><?php echo $list->objects[$y]->getTitle();?></p>
																	</div>
																</div>
															</a>
														</article>
													</div>
												<?php
													}
												?>
											</div>
											<?php
												}
												$y++;
												if($y < $totalData){
											?>
											<div class="r">
												<div class="c-1of2 cus_hide" id="div<?php echo $y;?>">
													<article>
													   <a href="<?php echo $this->url(array(limit_words($list->objects[$y]->getO_key(),5),$list->objects[$y]->getO_id(),$list->objects[$y]->getTemplate()),"community-detail");?>">
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $list->objects[$y]->getImage();?>"alt="<?php echo $list->objects[$y]->image->metadata[1]["data"];?>" title="<?php echo $list->objects[$y]->image->metadata[0]["data"];?>">
																<div class="tg tg-shr">
																	<?php 
																			echo $list->objects[$y]->getCategory()->titleCategory;
																	?>
																</div>
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time>
																	<?php echo date("M d, Y", strtotime($list->objects[$y]->getDate()));?>
																</time>
																<p class="authr-ttl"><?php echo $list->objects[$y]->getTitle();?></p>
															</div>
														</div>
														</a>
													</article>
												</div>
												<?php $y++;?>
												<?php if($y < $totalData){?>
													<div class="c-1of2 cus_hide" id="div<?php echo $y;?>">
														<article>
														   <a href="<?php echo $this->url(array(limit_words($list->objects[$y]->getO_key(),5),$list->objects[$y]->getO_id(),$list->objects[$y]->getTemplate()),"community-detail");?>">
															<!-- <i class="icon-video"></i> -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $list->objects[$y]->getImage();?>"alt="<?php echo $list->objects[$y]->image->metadata[1]["data"];?>" title="<?php echo $list->objects[$y]->image->metadata[0]["data"];?>">
																	<div class="tg tg-shr">
																		<?php 
																				echo $list->objects[$y]->getCategory()->titleCategory;
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", strtotime($list->objects[$y]->getDate()));?>
																	</time>
																	<p class="authr-ttl"><?php echo $list->objects[$y]->getTitle();?></p>
																</div>
															</div>
														   </a>
														</article>
													</div>
												<?php }?>
											</div>
											<?php
												}
												$y++;
												if($y < $totalData){
											?>
											<div class="r">
												<div class="c-1of3 cus_hide" id="div<?php echo $y;?>">
													<article>
														<a href="<?php echo $this->url(array(limit_words($list->objects[$y]->getO_key(),5),$list->objects[$y]->getO_id(),$list->objects[$y]->getTemplate()),"community-detail");?>">
															<!-- <i class="icon-video"></i> -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $list->objects[$y]->getImage();?>"alt="<?php echo $list->objects[$y]->image->metadata[1]["data"];?>" title="<?php echo $list->objects[$y]->image->metadata[0]["data"];?>">
																	<div class="tg tg-shr">
																		<?php 
																				echo $list->objects[$y]->getCategory()->titleCategory;
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", strtotime($list->objects[$y]->getDate()));?>
																	</time>
																	<p class="authr-ttl"><?php echo $list->objects[$y]->getTitle();?></p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<?php $y++;?>
												<?php if($y < $totalData){?>
													<div class="c-1of3 cus_hide" id="div<?php echo $y;?>">
														<article>
															<a href="<?php echo $this->url(array(limit_words($list->objects[$y]->getO_key(),5),$list->objects[$y]->getO_id(),$list->objects[$y]->getTemplate()),"community-detail");?>">
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $list->objects[$y]->getImage();?>"alt="<?php echo $list->objects[$y]->image->metadata[1]["data"];?>" title="<?php echo $list->objects[$y]->image->metadata[0]["data"];?>">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list->objects[$y]->getCategory()->titleCategory;
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", strtotime($list->objects[$y]->getDate()));?>
																		</time>
																		<p class="authr-ttl"><?php echo $list->objects[$y]->getTitle();?></p>
																	</div>
																</div>
															</a>
														</article>
													</div>
												<?php }
													$y++;
													if($y < $totalData){
												?>
													<div class="c-1of3 cus_hide" id="div<?php echo $y;?>">
														<article>
															<a href="<?php echo $this->url(array(limit_words($list->objects[$y]->getO_key(),5),$list->objects[$y]->getO_id(),$list->objects[$y]->getTemplate()),"community-detail");?>">
																<!-- <i class="icon-video"></i>  -->
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $list->objects[$y]->getImage();?>"alt="<?php echo $list->objects[$y]->image->metadata[1]["data"];?>" title="<?php echo $list->objects[$y]->image->metadata[0]["data"];?>">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list->objects[$y]->getCategory()->titleCategory;
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", strtotime($list->objects[$y]->getDate()));?>
																		</time>
																		<p class="authr-ttl"><?php echo $list->objects[$y]->getTitle();?></p>
																	</div>
																</div>
															</a>
														</article>
													</div>
												<?php }?>
											</div>
											<?php
												}
												$y++;
											}?>
										</div>
									</div>
									<div class="srch-pgn clrd">
										<div class="flt-l"></div>
										<div class="flt-r">
											<span class="prevPage3">&lt; previous </span>
											<a class="prevPage4" href="javascript:void(0)">&lt; previous </a>
											<input type="hidden" value="0" class="indexPage_prev" />
											|
											<span class="nextPage3"> next &gt; </span>
											<a class="nextPage4" href="javascript:void(0)"> next &gt; </a>
											<input type="hidden" value="14" class="indexPage_next" />
										</div>
									 </div>
									 <?php
										}
										else{
									?>
											<h2 style="margin-top: 25px;">Tidak Ada Data</h2>
									<?php }?>
							</div>
							
						</div>
					</div>
				</div>
				<div class="tips-item-kanan" id="item-right">
					<div class="s-sbar sctn-spcfc">
						<div class="social-ss ss-cnnct">
							<a href="#" title="Twitter" class="cnnct-twttr" target="_blank" data-track="connect|click|twitter-at">
							Allianz Indonesia Community
						    </a>
						    <ul class="clrd">
						    	<?php 
									foreach($this->icon as $icon)
									{
								?>
									<li>
									    <a href="<?php echo $icon->getLink()->direct;?>" title="<?php echo $icon->getLink()->text;?>" class="facebook" style="background: url('<?php echo $icon->getImage();?>') no-repeat scroll 0 0px;" target="<?php echo $icon->getLink()->target;?>" data-track="connect|click|facebook">
									    </a>
									</li>
								<?php 
									}
								?>
							</ul>
						</div>
						
						<div class="kat-desc description">
							<div id="crumb" class="crmb-wrp">
								<div class="s-row crmb cus-crmb">
									<ul>
										<?php
											$cat = new Object_CommunityTipsCategory_List();
											foreach($cat as $category)
											{
												if($category->getHexaColor()!='')
												{
													$color = $category->getHexaColor();
												}
												else
												{
													$color = $category->getColorPicker();
												}
										?>
												<li style="background-color: <?php echo $color;?>" class="crmb-sctn cus-li">
													<a class="no-bold" href="<?php echo $this->url(array($category->getTitleCategory(), $category->getId()),"list-category");?>"><?php echo $category->getTitleCategory();?></a>
												</li>
										<?php
											}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-twitter">
						<div id="slideshow" class="clearfix">
							<div class="flex-viewport" style="overflow: hidden; position: relative;">
								<ul class="slides cusSlides">
									<?php
										foreach ($this->sliderImage as $sliderImage)
										{
									?>
									<li>
										<div class="slide">
											<div class="photo">
												<img width="100%" height="100%" alt="" src="<?php echo $sliderImage->getImage();?>" />
											</div>
										</div>
									</li>
									<?php }?>
								</ul>
							<!-- <a class="twitter-timeline" width="100%" height="400" href="https://twitter.com/AllianzId" data-widget-id="488606842243653632">Tweets by @AllianzId</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							 -->
							</div>
						</div>
					</div>
					<div class="s-sbar sctn-spcfc">
						<div class="recommend-tips art-lst kntc-ct">
								<header>
									<div class="s-ct">
										<h2>Recommended</h2>
									</div>
								</header>
								<section class="s-ct">
									<div class="r-ib">
										<?php
											foreach($this->fetchRecommended as $result)
											{
										?>
											<article class="art-itm">
												<div class="s-sbar-ct">
													<a href="<?php echo $this->url(array(limit_words($result->getO_key(),5),$result->getO_id(),$result->getTemplate()),"community-detail")?>">
													
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $result->getImage();?>" alt="<?php echo $result->image->metadata[1]["data"];?>" title="<?php echo $result->image->metadata[0]["data"];?>" />
																<div class="tg tg-shr">
																	<?php
																		echo $result->getCategory()->titleCategory;
																	?>
																</div>
																
																
																<!--<div class="shr"><span>177</span> Shares</div>-->
																
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time><?php echo date("M d, Y", strtotime($result->getDate()))?></time>
																
																<p class="authr-ttl"><?php echo $result->getTitle();?></p>
															</div>
														</div>
													</a>
												</div>
											</article>
										<?php
											
											}
										?>
							
									</div>
								</section>
						</div>
					<div class="recommend-tips art-lst kntc-ct">
						<header>
							<div class="s-ct">
								<h2>Popular</h2>
							</div>
						</header>
						<section class="s-ct">
							<div class="r-ib">
								<?php
									foreach($this->fetchPopular as $result)
									{
								?>
									<article class="art-itm">
												<div class="s-sbar-ct">
													<a href="<?php echo $this->url(array(limit_words($result->getO_key(),5),$result->getO_id(),$result->getTemplate()),"community-detail")?>">
													
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $result->getImage();?>" alt="<?php echo $result->image->metadata[1]["data"];?>" title="<?php echo $result->image->metadata[0]["data"];?>" />
																<div class="tg tg-shr">
																	<?php
																		echo $result->getCategory()->titleCategory;
																	?>
																</div>
																
																
																<!--<div class="shr"><span>177</span> Shares</div>-->
																
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time><?php echo date("M d, Y", strtotime($result->getDate()))?></time>
																
																<p class="authr-ttl"><?php echo $result->getTitle();?></p>
															</div>
														</div>
													</a>
												</div>
											</article>
								<?php
									
									}
								?>
							</div>
					    </section>
					</div>
					
				</div>
				</div>
				<div class="clear"></div>
			</div>
	</div> <!-- .items-container -->
			
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(".flex-direction-nav").remove();
});
</script>