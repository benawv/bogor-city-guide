<link rel="stylesheet" type="text/css" href="/website/static/css/virgin.css">
<script type="text/javascript" src="/website/static/js/paging.js"></script>
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
																	<img src="<?php echo "/".$list[$y][filename];?>"alt="">
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
																		<img src="<?php echo "/".$list[$y+1][filename];?>"alt="">
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
																<img src="<?php echo "/".$list[$y+2][filename];?>"alt="">
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
															<!-- <i class="icon-video"></i> -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo "/".$list[$y+3][filename];?>"alt="">
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
															<!-- <i class="icon-video"></i> -->
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo "/".$list[$y+4][filename];?>"alt="">
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
																		<img src="<?php echo "/".$list[$y+5][filename];?>"alt="">
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
																<!-- <i class="icon-video"></i>  -->
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo "/".$list[$y+6][filename];?>"alt="">
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
							@AllianzId
						    </a>
						    <ul class="clrd">
						    <li class="blnk"></li>
								<li>
							    <a href="#" title="Facebook" class="facebook" target="_blank" data-track="connect|click|facebook">
								<span class="vhdn">Facebook</span>
							    </a>
							</li>
							    
								<li>
							    <a href="#" title="Twitter" class="twitter" target="_blank" data-track="connect|click|twitter">
								<span class="vhdn">Twitter</span>
							    </a>
							</li>
							    
							<li>
							    <a href="#" title="Instagram" class="instagram" target="_blank" data-track="connect|click|instagram">
								<span class="vhdn">Instagram</span>
							    </a>
							</li>
							    
						    <li class="blnk"></li>        
								<li>
							    <a href="#" title="Linkedin" class="linked-in" target="_blank" data-track="connect|click|linkedin">
								<span class="vhdn">Linked In</span>
							    </a>
							</li>
							    
								<li class="blnk"></li>
							    
								<li>
							    <a href="#" title="Pinterest" class="pinterest" target="_blank" data-track="connect|click|pinterest">
								<span class="vhdn">Pinterest</span>
							    </a>
							</li>
							    
							      <li class="blnk"></li>
						    
								<li>
							    <a href="#" title="YouTube" class="youtube" target="_blank" data-track="connect|click|youtube">
								<span class="vhdn">Youtube</span>
							    </a>
							</li>
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
						<div>
							<a class="twitter-timeline" width="100%" height="400" href="https://twitter.com/AllianzId" data-widget-id="488606842243653632">Tweets by @AllianzId</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
						<!--<div class="sh_widget">
							<img class="logo-float" src="/website/static/images/logo1.png">
							<img class="logo-float" src="/website/static/images/logo2.png">
							<img class="logo-float" src="/website/static/images/logo3.png">
						</div>-->
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
																<img src="<?php echo "/".$result[filename];?>" alt="" />
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
																<img src="<?php echo "/".$result[filename];?>" alt="" />
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