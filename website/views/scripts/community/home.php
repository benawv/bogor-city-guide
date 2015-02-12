<link rel="stylesheet" type="text/css" href="/website/static/css/virgin.css">

<div role="main" class="tips-main main" style="background: url(<?php echo $this->fetchBackground;?>);background-size: 1500px auto;background-repeat: no-repeat;background-position: top;">
	<div class="tips-container container boxes-view">
			<div class="tips-box items-container" id="product-sub" >
				<div class="tips-item-kiri">
					<div class="s-main">
						<div class="s-main-innr" id="pagingTop">
							<div class="art-lst">
									<div class="s-ct">
										<div class="innr-wrp">
										<?php
											$value = strtotime(date("YmdHis")).rand();
											
											if($_COOKIE["user"]=="")
											{
												setcookie("user", $value);
											}
										
										if($this->totalData > 0)
										{
											$y = 0;
											$list = $this->fetchTips;
											while($y<count($list))
											{
										?>
											<?php if($list[$y][title]!= ''){?>
											<div class="r">
												<div class="c-2of3 cus_hide" id="div<?php echo $y;?>">
													<article>
														<a id="more" href="<?php echo $this->url(array($list[$y][o_key],$list[$y][oo_id],$list[$y][template]),"community-detail");?>">
														<!-- <i class="icon-video"></i>	 -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<?php
																		$idImage = $list[$y][image];
																		$getAlt = Asset::getById($idImage);
																	?>
																	<img src="<?php echo $list[$y][path]."".$list[$y][filename];?>"alt="<?php echo $getAlt->getMetadata()[1][data];?>">
																	<div class="tg tg-shr">
																		<?php 
																			echo $list[$y][titleCategory];
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", $list[$y][date]);?>
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
																		<?php
																			$idImage = $list[$y+1][image];
																			$getAlt = Asset::getById($idImage);
																		?>
																		<img src="<?php echo $list[$y+1][path]."".$list[$y+1][filename];?>"alt="<?php echo $getAlt->getMetadata()[1][data];?>">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list[$y+1][titleCategory];
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", $list[$y+1][date]);?>
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
																<?php
																	$idImage = $list[$y+2][image];
																	$getAlt = Asset::getById($idImage);
																?>
																<img src="<?php echo $list[$y+2][path]."".$list[$y+2][filename];?>"alt="<?php echo $getAlt->getMetadata()[1][data];?>">
																<div class="tg tg-shr">
																	<?php 
																			echo $list[$y+2][titleCategory];
																	?>
																</div>
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time>
																	<?php echo date("M d, Y", $list[$y+2][date]);?>
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
															<!-- <i class="icon-video"></i> -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<?php
																		$idImage = $list[$y+3][image];
																		$getAlt = Asset::getById($idImage);
																	?>
																	<img src="<?php echo $list[$y+3][path]."".$list[$y+3][filename];?>"alt="<?php echo $getAlt->getMetadata()[1][data];?>">
																	<div class="tg tg-shr">
																		<?php 
																				echo $list[$y+3][titleCategory];
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", $list[$y+3][date]);?>
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
															<!-- <i class="icon-video"></i> -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<?php
																		$idImage = $list[$y+4][image];
																		$getAlt = Asset::getById($idImage);
																	?>
																	<img src="<?php echo $list[$y+4][path]."".$list[$y+4][filename];?>"alt="<?php echo $getAlt->getMetadata()[1][data];?>">
																	<div class="tg tg-shr">
																		<?php 
																				echo $list[$y+4][titleCategory];
																		?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", $list[$y+4][date]);?>
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
																		<?php
																			$idImage = $list[$y+5][image];
																			$getAlt = Asset::getById($idImage);
																		?>
																		<img src="<?php echo $list[$y+5][path]."".$list[$y+5][filename];?>"alt="<?php echo $getAlt->getMetadata()[1][data];?>">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list[$y+5][titleCategory];
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", $list[$y+5][date]);?>
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
																<!-- <i class="icon-video"></i>  -->
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<?php
																			$idImage = $list[$y+6][image];
																			$getAlt = Asset::getById($idImage);
																		?>
																		<img src="<?php echo $list[$y+6][path]."".$list[$y+6][filename];?>"alt="<?php echo $getAlt->getMetadata()[1][data];?>">
																		<div class="tg tg-shr">
																			<?php 
																					echo $list[$y+6][titleCategory];
																			?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", $list[$y+6][date]);?>
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
											}
										}
										else {
											?>
												<h2 style="margin-top: 25px;">Tidak Ada Data</h2>
										<?php 
											}
										?>
										</div>
									</div>
									<div class="srch-pgn clrd">
										<div class="flt-l"></div>
										<div class="flt-r">
													<span class="prevPage1">&lt; previous </span>
													<a class="prevPage2" href="javascript:void(0)">&lt; previous </a>
													<input type="hidden" value="0" class="indexPage_prev" />
													|
													<span class="nextPage1"> next &gt; </span>
													<a class="nextPage2" href="javascript:void(0)"> next &gt; </a>
													<input type="hidden" value="14" class="indexPage_next" />
												</div>
									 </div>
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
									<?php if (isset($sliderImage->link)){?>
										<a href="<?php echo "/community-detail/".$sliderImage->link->o_key."_".$sliderImage->link->o_id."_".$sliderImage->link->template;?>">
									<?php }else {?>
										<a href="#">
									<?php }?>
										<div class="slide">
											<div class="photo">
												<img alt="" src="<?php echo $sliderImage->getImage();?>" />
											</div>
										</div>
										</a>
									</li>
									<?php }?>
								</ul>
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
												$idImage = $result[image];
												$getAlt = Asset::getById($idImage);
										?>
											<article class="art-itm">
												<div class="s-sbar-ct">
													<a href="<?php echo $this->url(array($result[o_key],$result[oo_id],$result[template]),"community-detail");?>">
													
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $result[path]."".$result[filename];?>" alt="<?php echo $getAlt->getMetadata()[1][data];?>" />
																<div class="tg tg-shr">
																	<?php
																		echo $result[titleCategory];
																	?>
																</div>
																
																
																<!--<div class="shr"><span>177</span> Shares</div>-->
																
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time><?php echo date("M d, Y", $result[date])?></time>
																
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
										$idImage = $result[image];
										$getAlt = Asset::getById($idImage);
								?>
									<article class="art-itm">
												<div class="s-sbar-ct">
													<a href="<?php echo $this->url(array($result[o_key],$result[oo_id],$result[template]),"community-detail");?>">
													
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $result[path]."".$result[filename];?>" alt="<?php echo $getAlt->getMetadata()[1][data];?>" />
																<div class="tg tg-shr">
																	<?php
																		echo $result[titleCategory];
																	?>
																</div>
																
																
																<!--<div class="shr"><span>177</span> Shares</div>-->
																
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time><?php echo date("M d, Y", $result[date])?></time>
																
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
<script type="text/javascript">
$(document).ready(function(){
	$(".flex-direction-nav").remove();
});
</script>