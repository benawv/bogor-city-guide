<link rel="stylesheet" type="text/css" href="/website/static/css/virgin.css">
<?php
	$backImage = new Object_CommunityTipsBackground_List();
	$backImage->setLimit(1);
	$backImage->setOrder("desc");
	foreach($backImage as $hasil)
	{
		$image = $hasil->getImage();
	}
?>
<div role="main" class="tips-main main" style="background: url(<?php echo $image;?>);background-size: 1500px auto;background-repeat: no-repeat;">
	<div class="tips-container container boxes-view">
			<div class="tips-box items-container" id="product-sub" >
				<div class="tips-item-kiri">
					<div class="s-main">
						<div class="s-main-innr">
							<div class="art-lst">
									<div class="s-ct">
										<div class="innr-wrp">
										<?php
											$entries = new Object_communityTips_List();
											$entries->setLimit(14);
											$entries->setOrderKey("date");
											$entries->setOrder("desc");
											$x = 0;
											$title = array();
											$image = array();
											$category = array();
											$date = array();
											foreach($entries as $result)
											{
												$title[$x] = $result->getTitle();
												$image[$x] = $result->getImage();
												$category[$x] = $result->getCategory();
												$date[$x] = $result->getDate();
												$desc[$x] = $result->getDescription();
												$x++;
											}
											
											$cate = new Object_CommunityTipsCategory_List();
											$a = 0;
											$category1 = array();
											$titleCategory = array();
											foreach($cate as $cate2)
											{
												$category1[$a] = $cate2->getPath().$cate2->getKey();
												$titleCategory[$a] = $cate2->getTitleCategory();
												$a++;
											}
											
											$y = 0;
											$b = 0;
											while($y<count($title))
											{
										?>
											<?php if($title[$y] != ''){?>
											<div class="r">
												<div class="c-2of3">
													<article>
														<a href="#">
														<i class="icon-video"></i>	
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $image[$y];?>"alt="">
																	<div class="tg tg-shr">
																		<?php for($i=0;$i<count($titleCategory);$i++){
																			if($category[$y]==$category1[$i])
																			{
																				echo $titleCategory[$i];
																			}
																		}?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", strtotime($date[$y]));?>
																	</time>
																	<p class="authr-ttl"><?php echo $title[$y];?></p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<?php if($title[$y+1] != ''){?>
													<div class="c-1of3">
														<article>
															<a href="#">
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $image[$y+1];?>"alt="">
																		<div class="tg tg-shr">
																			<?php for($i=0;$i<count($titleCategory);$i++){
																				if($category[$y+1]==$category1[$i])
																				{
																					echo $titleCategory[$i];
																				}
																			}?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", strtotime($date[$y+1]));?>
																		</time>
																		<p class="authr-ttl"><?php echo $title[$y+1];?></p>
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
												if($title[$y+2] != ''){
											?>
											<div class="r">
												<div class="c-1of2">
													<article>
													   <a href="#">
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $image[$y+2];?>"alt="">
																<div class="tg tg-shr">
																	<?php for($i=0;$i<count($titleCategory);$i++){
																		if($category[$y+2]==$category1[$i])
																		{
																			echo $titleCategory[$i];
																		}
																	}?>
																</div>
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time>
																	<?php echo date("M d, Y", strtotime($date[$y+2]));?>
																</time>
																<p class="authr-ttl"><?php echo $title[$y+2];?></p>
															</div>
														</div>
														</a>
													</article>
												</div>
												<?php if($title[$y+3] != ''){?>
													<div class="c-1of2">
														<article>
														   <a href="#">
															<i class="icon-video"></i>
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $image[$y+3];?>"alt="">
																	<div class="tg tg-shr">
																		<?php for($i=0;$i<count($titleCategory);$i++){
																			if($category[$y+3]==$category1[$i])
																			{
																				echo $titleCategory[$i];
																			}
																		}?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", strtotime($date[$y+3]));?>
																	</time>
																	<p class="authr-ttl"><?php echo $title[$y+3];?></p>
																</div>
															</div>
														   </a>
														</article>
													</div>
												<?php }?>
											</div>
											<?php
												}
												if($title[$y+4] != ''){
											?>
											<div class="r">
												<div class="c-1of3">
													<article>
														<a href="#">
															<i class="icon-video"></i>
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="<?php echo $image[$y+4];?>"alt="">
																	<div class="tg tg-shr">
																		<?php for($i=0;$i<count($titleCategory);$i++){
																			if($category[$y+4]==$category1[$i])
																			{
																				echo $titleCategory[$i];
																			}
																		}?>
																	</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time>
																		<?php echo date("M d, Y", strtotime($date[$y+4]));?>
																	</time>
																	<p class="authr-ttl"><?php echo $title[$y+4];?></p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<?php if($title[$y+5] != ''){?>
													<div class="c-1of3">
														<article>
															<a href="#">
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $image[$y+5];?>"alt="">
																		<div class="tg tg-shr">
																			<?php for($i=0;$i<count($titleCategory);$i++){
																			if($category[$y+5]==$category1[$i])
																			{
																				echo $titleCategory[$i];
																			}
																		}?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", strtotime($date[$y+5]));?>
																		</time>
																		<p class="authr-ttl"><?php echo $title[$y+5];?></p>
																	</div>
																</div>
															</a>
														</article>
													</div>
												<?php }?>
												<?php if($title[$y+6] != ''){?>
													<div class="c-1of3">
														<article>
															<a href="#">
																<i class="icon-video"></i>
																<div class="outr-wrp">
																	<div class="img-wrp">
																		<img src="<?php echo $image[$y+6];?>"alt="">
																		<div class="tg tg-shr">
																			<?php for($i=0;$i<count($titleCategory);$i++){
																			if($category[$y+6]==$category1[$i])
																			{
																				echo $titleCategory[$i];
																			}
																		}?>
																		</div>
																		<span class="art-hvr"></span>
																	</div>
																	<div class="txt-wrp">
																		<time>
																			<?php echo date("M d, Y", strtotime($date[$y+6]));?>
																		</time>
																		<p class="authr-ttl"><?php echo $title[$y+6];?></p>
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
													<span>&lt; previous</span>
													|
													<a href="?page=2">next &gt;</a>
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
							    <a href="#" title="Linkedin" class="linked-in" target="_blank" data-track="connect|click|linkedin">
								<span class="vhdn">Linked In</span>
							    </a>
							</li>
							    
						    <li class="blnk"></li>        
								<li>
							    <a href="#" title="Instagram" class="instagram" target="_blank" data-track="connect|click|instagram">
								<span class="vhdn">Instagram</span>
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
							<?php
								$cat = new Object_CommunityTipsCategory_List();
								foreach($cat as $category)
								{
							?>
								<img src="<?php echo $category->getImageCategory();?>" >
							<?php
								}
							?>
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
											$entries = new Object_communityTips_List();
											$entries->setLimit(3);
											$entries->setOrderKey("recommended");
											$entries->setOrder("desc");
											$entries->setCondition("recommended = 1");
											$c = 0;
											foreach($entries as $result)
											{
										?>
											<article class="art-itm">
												<div class="s-sbar-ct">
													<a href="#">
													
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="<?php echo $result->getImage();?>" alt="" />
																
																<div class="tg tg-shr">
																	<?php
																	for($i=0;$i<count($titleCategory);$i++){
																		if($result->getCategory()==$category1[$i]){
																			echo $titleCategory[$i];
																		}
																	}
																	?>
																</div>
																
																
																<!--<div class="shr"><span>177</span> Shares</div>-->
																
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time><?php echo date("M d, Y", strtotime($result->getDate()));?></time>
																
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
									$entries = new Object_communityTips_List();
									$entries->setLimit(3);
									$entries ->setOrderKey("popular");
									$entries ->setOrder("desc");
									$d = 0;
									foreach($entries as $result)
									{
								?>
									<article class="art-itm">
									    <div class="s-sbar-ct">
										    <a href="#">
											    <div class="outr-wrp">
												    <div class="img-wrp">
													    <img src="<?php echo $result->getImage();?>" alt="" />
													    <div class="tg tg-shr">
														    <?php
														    for($i=0;$i<count($titleCategory);$i++){
															if($result->getCategory()==$category1[$i])
															{
															    echo $titleCategory[$i];
															}
														    }
														    ?>
													    </div>
													    <span class="art-hvr"></span>
												    </div>
												    <div class="txt-wrp">
													    <time><?php echo date("M d, Y", strtotime($result->getDate()));?></time>
													    
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