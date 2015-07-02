<?php

	if($_SERVER['SERVER_NAME'] != "allianz.co.id")
	{
		header("Location: http://".$_SERVER['SERVER_NAME']);
		die();
	}
	
?>
<link rel="stylesheet" type="text/css" href="/website/static/css/virgin.css">
	<?php
		function limit_words($string, $word_limit)
		{
			$words = explode("-",$string);
			return implode("-",array_splice($words,0,$word_limit));
		}
	?>
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
											$totalData = $this->totalData;
											while($y < $totalData)
											{
										?>
											<?php if($list->objects[$y]->getTitle()!= ''){?>
											<div class="r">
												<div class="c-2of3 cus_hide" id="div<?php echo $y;?>">
													<article>
														<a id="more" href="<?php echo $this->url(array(limit_words($list->objects[$y]->getO_key(),5),$list->objects[$y]->getO_id(),$list->objects[$y]->getTemplate()),"community-detail");?>">
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
												<?php $y = $y + 1;?>
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
												$y = $y + 1;
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
												<?php $y = $y + 1;?>
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
												$y = $y + 1;
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
												<?php $y = $y + 1;?>
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
													$y = $y + 1;
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
												$y = $y + 1 ;
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
							<h1>
							<a href="#" title="Twitter" class="cnnct-twttr" target="_blank" data-track="connect|click|twitter-at">
							Allianz Indonesia Community
						    </a>
							</h1>
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
													<a class="no-bold" href="<?php echo $this->url(array(limit_words($category->getTitleCategory(),5),$category->getId()),"list-category");?>"><?php echo $category->getTitleCategory();?></a>
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
<script type="text/javascript">
$(document).ready(function(){
	$(".flex-direction-nav").remove();
});
</script>