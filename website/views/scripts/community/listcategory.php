<link rel="stylesheet" type="text/css" href="/website/static/css/virgin.css">

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
							if($this->fetchData[0][hexaColor]!='')
							{
								$color = $this->fetchData[0][hexaColor];
							}
							else
							{
								$color =$this->fetchData[0][colorPicker];
							}
						?>
						<input type="hidden" value="<?php echo $this->fetchData[0][titleCategory];?>" class="category" />
						
						<li style="background-color: <?php echo $color;?>;" class="crmb-sctn">
							<a href="#"><?php echo $this->fetchData[0][titleCategory];?></a>
						</li>

				   <!-- <li class="crmb-sctn">
							<a href="/travel">Travel</a>
						</li> -->
					</ul>
				</div>
			</div>
			<?php if (isset($this->fetchData[0][summary])){?>
			<div class="s-row hero-bnnr hero-bnnr2">
				<div class="txt-wrp">
					<h1><?php echo $this->fetchData[0][summary];?></h1>
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
											while($y<count($list))
											{
										?>
											<?php if($list[$y][title]!= ''){?>
											<div class="r">
												<div class="c-2of3 cus_hide" id="div<?php echo $y;?>">
													<article>
														<a href="<?php echo $this->url(array($list[$y][o_key],$list[$y][oo_id],$list[$y][template]),"community-detail");?>">
														<!-- <i class="icon-video"></i>	 -->	
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $list[$y][path]."".$list[$y][filename];?>"alt="">
																	<div class="tg tg-shr">
																		<?php 
																			echo $list[$y][titleCategory];
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo gmdate("M d, Y", $list[$y][date]);?>
																	</time>
																	<p class="authr-ttl"><?php echo $list[$y][title];?></p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<?php if($list[$y+1][title] != ''){?>
													<div class="c-1of3 cus_hide" id="div<?php echo $y+1;?>">
														<article>
															<a href="<?php echo $this->url(array($list[$y+1][o_key],$list[$y+1][oo_id],$list[$y+1][template]),"community-detail");?>">
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $list[$y+1][path]."".$list[$y+1][filename];?>"alt="">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list[$y+1][titleCategory];
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo gmdate("M d, Y", $list[$y+1][date]);?>
																		</time>
																		<p class="authr-ttl"><?php echo $list[$y+1][title];?></p>
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
												if($list[$y+2][title] != ''){
											?>
											<div class="r">
												<div class="c-1of2 cus_hide" id="div<?php echo $y+2;?>">
													<article>
													   <a href="<?php echo $this->url(array($list[$y+2][o_key],$list[$y+2][oo_id],$list[$y+2][template]),"community-detail");?>">
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $list[$y+2][path]."".$list[$y+2][filename];?>"alt="">
																<div class="tg tg-shr">
																	<?php 
																			echo $list[$y+2][titleCategory];
																	?>
																</div>
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time>
																	<?php echo gmdate("M d, Y", $list[$y+2][date]);?>
																</time>
																<p class="authr-ttl"><?php echo $list[$y+2][title];?></p>
															</div>
														</div>
														</a>
													</article>
												</div>
												<?php if($list[$y+3][title] != ''){?>
													<div class="c-1of2 cus_hide" id="div<?php echo $y+3;?>">
														<article>
														   <a href="<?php echo $this->url(array($list[$y+3][o_key],$list[$y+3][oo_id],$list[$y+3][template]),"community-detail");?>">
															<!-- <i class="icon-video"></i>	 -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $list[$y+3][path]."".$list[$y+3][filename];?>"alt="">
																	<div class="tg tg-shr">
																		<?php 
																				echo $list[$y+3][titleCategory];
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo gmdate("M d, Y", $list[$y+3][date]);?>
																	</time>
																	<p class="authr-ttl"><?php echo $list[$y+3][title];?></p>
																</div>
															</div>
														   </a>
														</article>
													</div>
												<?php }?>
											</div>
											<?php
												}
												if($list[$y+4][title] != ''){
											?>
											<div class="r">
												<div class="c-1of3 cus_hide" id="div<?php echo $y+4;?>">
													<article>
														<a href="<?php echo $this->url(array($list[$y+4][o_key],$list[$y+4][oo_id],$list[$y+4][template]),"community-detail");?>">
															<!-- <i class="icon-video"></i>	 -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $list[$y+4][path]."".$list[$y+4][filename];?>"alt="">
																	<div class="tg tg-shr">
																		<?php 
																				echo $list[$y+4][titleCategory];
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo gmdate("M d, Y", $list[$y+4][date]);?>
																	</time>
																	<p class="authr-ttl"><?php echo $list[$y+4][title];?></p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<?php if($list[$y+5][title] != ''){?>
													<div class="c-1of3 cus_hide" id="div<?php echo $y+5;?>">
														<article>
															<a href="<?php echo $this->url(array($list[$y+5][o_key],$list[$y+5][oo_id],$list[$y+5][template]),"community-detail");?>">
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $list[$y+5][path]."".$list[$y+5][filename];?>"alt="">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list[$y+5][titleCategory];
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo gmdate("M d, Y", $list[$y+5][date]);?>
																		</time>
																		<p class="authr-ttl"><?php echo $list[$y+5][title];?></p>
																	</div>
																</div>
															</a>
														</article>
													</div>
												<?php }?>
												<?php if($list[$y+6][title] != ''){?>
													<div class="c-1of3 cus_hide" id="div<?php echo $y+6;?>">
														<article>
															<a href="<?php echo $this->url(array($list[$y+6][o_key],$list[$y+6][oo_id],$list[$y+6][template]),"community-detail");?>">
																<!-- <i class="icon-video"></i>	 -->
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $list[$y+6][path]."".$list[$y+6][filename];?>"alt="">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list[$y+6][titleCategory];
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo gmdate("M d, Y", $list[$y+6][date]);?>
																		</time>
																		<p class="authr-ttl"><?php echo $list[$y+6][title];?></p>
																	</div>
																</div>
															</a>
														</article>
													</div>
												<?php }?>
											</div>
											<?php
												}
												$y = $y + 7 ;
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
													<a class="no-bold" href="<?php echo $this->url(array($category->getTitleCategory()),"list-category");?>"><?php echo $category->getTitleCategory();?></a>
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
													<a href="<?php echo $this->url(array($result[o_key],$result[oo_id],$result[template]),"community-detail");?>">
													
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $result[path]."".$result[filename];?>" alt="" />
																<div class="tg tg-shr">
																	<?php
																		echo $result[titleCategory];
																	?>
																</div>
																
																
																<!--<div class="shr"><span>177</span> Shares</div>-->
																
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time><?php echo gmdate("M d, Y", $result[date])?></time>
																
																<p class="authr-ttl"><?php echo $result[title];?></p>
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
													<a href="<?php echo $this->url(array($result[o_key],$result[oo_id],$result[template]),"community-detail");?>">
													
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $result[path]."".$result[filename];?>" alt="" />
																<div class="tg tg-shr">
																	<?php
																		echo $result[titleCategory];
																	?>
																</div>
																
																
																<!--<div class="shr"><span>177</span> Shares</div>-->
																
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time><?php echo gmdate("M d, Y", $result[date])?></time>
																
																<p class="authr-ttl"><?php echo $result[title];?></p>
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