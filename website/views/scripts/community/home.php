<link rel="stylesheet" type="text/css" href="/website/static/css/virgin.css">
<?php
	$backImage = new Object_BackCommunity_List();
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
											$x = 1;
											foreach($entries as $result)
											{
												
												echo $result->gettitle();
											}
										?>
											<div class="r">
												<div class="c-2of3">
													<article>
														<a href="#">
														<i class="icon-video"></i>	
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" data-src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="">
																	<div class="tg tg-shr">Allianz Arena</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time datetime="2014-07-10">
																		10 July 2014
																	</time>
																	<p class="authr-ttl">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<div class="c-1of3">
													<article>
														<a href="#">
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="/website/static/images/tips/formula1_490x300.jpg" data-src="/website/static/images/tips/formula1_490x300.jpg" alt="">
																	<div class="tg tg-shr">Music</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time datetime="2014-07-10">
																		10 July 2014
																	</time>
																	<p class="authr-ttl">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																</div>
															</div>
														</a>
													</article>
												</div>
											</div>
											<div class="r">
												<div class="c-1of2">
													<article>
													   <a href="#">
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" data-src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="">
																<div class="tg tg-shr">Entrepreneur</div>
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time datetime="2014-07-10">
																	10 July 2014
																</time>
																<p class="authr-ttl">The world's best start-up hubs: Taghazout, Morocco</p>
															</div>
														</div>
														</a>
													</article>
												</div>
												<div class="c-1of2">
													<article>
													   <a href="#">
														<i class="icon-video"></i>
														<div class="outr-wrp">
															<div class="img-wrp">
																<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" data-src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="">
																<div class="tg tg-shr">Travel</div>
																<span class="art-hvr"></span>
															</div>
															<div class="txt-wrp">
																<time datetime="2014-07-10">
																	10 July 2014
																</time>
																<p class="authr-ttl">On your bike: Five amazing cycling innovations</p>
															</div>
														</div>
													   </a>
													</article>
												</div>
											</div>
											<div class="r">
												<div class="c-1of3">
													<article>
														<a href="#">
															<i class="icon-video"></i>
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="/website/static/images/tips/allianzstikerbiru1.jpg" data-src="/website/static/images/tips/allianzstikerbiru1.jpg" alt="">
																	<div class="tg tg-shr">Entrepreneurship</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time datetime="2014-07-10">
																		10 July 2014
																	</time>
																	<p class="authr-ttl">Film: The girl scouts of technology </p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<div class="c-1of3">
													<article>
														<a href="#">
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="/website/static/images/tips/allianzstikerbiru1.jpg" data-src="/website/static/images/tips/allianzstikerbiru1.jpg" alt="">
																	<div class="tg tg-shr">Allianz</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time datetime="2014-07-10">
																		10 July 2014
																	</time>
																	<p class="authr-ttl">Why travel advisories hurt countries and help terrorists </p>
																</div>
															</div>
														</a>
													</article>
												</div>
												<div class="c-1of3">
													<article>
														<a href="#">
															<i class="icon-video"></i>
															<div class="outr-wrp">
																<div class="img-wrp">
																	<img src="/website/static/images/tips/allianzstikerbiru1.jpg" data-src="/website/static/images/tips/allianzstikerbiru1.jpg" alt="">
																	<div class="tg tg-shr">News</div>
																	<span class="art-hvr"></span>
																</div>
																<div class="txt-wrp">
																	<time datetime="2014-07-10">
																		10 July 2014
																	</time>
																	<p class="authr-ttl">Have loyalty programmes got you trapped in a dysfunctional relationship?</p>
																</div>
															</div>
														</a>
													</article>
												</div>
											</div>
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
							<a href="http://twitter.com/virgin" title="Twitter" class="cnnct-twttr" target="_blank" data-track="connect|click|twitter-at">
							@AllianzId
						    </a>
						    <ul class="clrd">
								<li class="blnk"></li>
									<li>
									<a href="#" title="Facebook" data-icon="." class="facebook" target="_blank" data-track="connect|click|facebook">
									<span class="vhdn">Facebook</span>
									</a>
								</li>
									
									<li>
									<a href="#" title="Twitter" data-icon="." class="twitter" target="_blank" data-track="connect|click|twitter">
									<span class="vhdn">Twitter</span>
									</a>
								</li>
									
									<li>
									<a href="#" title="Linkedin" data-icon="." class="linked-in" target="_blank" data-track="connect|click|linkedin">
									<span class="vhdn">Linked In</span>
									</a>
								</li>
									
								<li class="blnk"></li>        
									<li>
									<a href="#" title="Instagram" data-icon="." class="instagram" target="_blank"  data-track="connect|click|instagram">
									<span class="vhdn">Instagram</span>
									</a>
								</li>
									
									<li class="blnk"></li>
									
									<li>
										<a href="#" title="Pinterest" data-icon="." class="pinterest" target="_blank"  data-track="connect|click|pinterest">
										<span class="vhdn">Pinterest</span>
										</a>
									</li>
									
									  <li class="blnk"></li>
								
									<li>
										<a href="#" title="Youtube" data-icon="." class="pinterest you2" style="background-color:#c4302b;" target="_blank" data-track="connect|click|pinterest">
										<span class="vhdn">Pinterest</span>
										</a>
									</li>
							</ul>
						</div>
						
						<div class="kat-desc description">
							<img src="/website/static/images/hubby.jpg">
							<img src="/website/static/images/kids.jpg">
							<img src="/website/static/images/beverage1.jpg">
							<img src="/website/static/images/beverage2.jpg">
							<img src="/website/static/images/beverage3.jpg">
							<img src="/website/static/images/beverage4.jpg">
						</div>
					</div>
					<div class="widget-twitter">
						<div>
							<a class="twitter-timeline" width="100%" height="400" href="https://twitter.com/AllianzId" data-widget-id="488606842243653632">Tweets by @AllianzId</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
						<div class="sh_widget">
							<img class="logo-float" src="/website/static/images/logo1.png">
							<img class="logo-float" src="/website/static/images/logo2.png">
							<img class="logo-float" src="/website/static/images/logo3.png">
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
	            
<article class="art-itm">
<div class="s-sbar-ct">
<a href="/entrepreneur/the-worlds-best-start-up-hubs-birmingham-england" data-track="recommended|click|entrepreneur/the-worlds-best-start-up-hubs-birmingham-england|1">

<div class="outr-wrp">
<div class="img-wrp">
<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />

<div class="tg tg-shr">
Entrepreneur
</div>


<!--<div class="shr"><span>177</span> Shares</div>-->

<span class="art-hvr"></span>
</div>
<div class="txt-wrp">
<time datetime="2014-07-16">16 July 2014</time>

<p class="authr">Neeru Pallen</p>

<p class="authr-ttl">The world's best start-up hubs: Birmingh...</p>
</div>
</div>
</a>
</div>
</article>

<article class="art-itm">
<div class="s-sbar-ct">
<a href="/music/do-band-reunions-still-excite-us" data-track="recommended|click|music/do-band-reunions-still-excite-us|2">
<i class="icon-video"></i>
<div class="outr-wrp">
<div class="img-wrp">
<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />

<div class="tg tg-shr">
Music
</div>


<!--<div class="shr"><span>28</span> Shares</div>-->

<span class="art-hvr"></span>
</div>
<div class="txt-wrp">
<time datetime="2014-04-28">28 April 2014</time>

<p class="authr">Sophie Hall</p>

<p class="authr-ttl">Do band reunions still excite us? </p>
</div>
</div>
</a>
</div>
</article>

<article class="art-itm">
<div class="s-sbar-ct">
<a href="/disruptors/video-dave-evans-on-regulation" data-track="recommended|click|disruptors/video-dave-evans-on-regulation|3">
<i class="icon-video"></i>
<div class="outr-wrp">
<div class="img-wrp">
<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />

<div class="tg tg-shr">
Disruptors
</div>


<!--<div class="shr"><span>259</span> Shares</div>-->

<span class="art-hvr"></span>
</div>
<div class="txt-wrp">
<time datetime="2014-05-07">7 May 2014</time>

<p class="authr-ttl">Video: Dave Evans on regulation</p>
</div>
</div>
</a>
</div>
</article>

<article class="art-itm">
<div class="s-sbar-ct">
<a href="/richard-branson/5-ways-to-build-a-project-with-purpose" data-track="recommended|click|richard-branson/5-ways-to-build-a-project-with-purpose|4">
<i class="icon-video"></i>
<div class="outr-wrp">
<div class="img-wrp">
<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />

<div class="tg tg-shr">
MUSIC
</div>


<!--<div class="shr"><span>6.9k</span> Shares</div>-->

<span class="art-hvr"></span>
</div>
<div class="txt-wrp">
<time datetime="2014-07-16">16 July 2014</time>

<p class="authr">Richard Branson</p>

<p class="authr-ttl">5 ways to build a project with purpose</p>
</div>
</div>
</a>
</div>
</article>

<article class="art-itm">
<div class="s-sbar-ct">
<a href="/music/staying-out-for-the-summer-uk-indie-festivals-doing-it-right" data-track="recommended|click|music/staying-out-for-the-summer-uk-indie-festivals-doing-it-right|5">
<i class="icon-video"></i>
<div class="outr-wrp">
<div class="img-wrp">
<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />

<div class="tg tg-shr">
Music
</div>


<!--<div class="shr"><span>60</span> Shares</div>-->

<span class="art-hvr"></span>
</div>
<div class="txt-wrp">
<time datetime="2014-06-16">16 June 2014</time>

<p class="authr">Jack pOp</p>

<p class="authr-ttl">Staying out for the summer: UK indie fes...</p>
</div>
</div>
</a>
</div>
</article>

<article class="art-itm">
<div class="s-sbar-ct">
<a href="/travel/stranger-than-fiction-when-movie-transport-comes-to-life" data-track="recommended|click|travel/stranger-than-fiction-when-movie-transport-comes-to-life|6">
<i class="icon-video"></i>
<div class="outr-wrp">
<div class="img-wrp">
<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />

<div class="tg tg-shr">
Travel
</div>


<!--<div class="shr"><span>296</span> Shares</div>-->

<span class="art-hvr"></span>
</div>
<div class="txt-wrp">
<time datetime="2014-06-03">3 June 2014</time>

<p class="authr">Sophie Hall</p>

<p class="authr-ttl">Stranger than Fiction: When movie transp...</p>
</div>
</div>
</a>
</div>
</article>

<article class="art-itm">
<div class="s-sbar-ct">
<a href="/richard-branson/in-dallas-to-free-love-field" data-track="recommended|click|richard-branson/in-dallas-to-free-love-field|7">

<div class="outr-wrp">
<div class="img-wrp">
<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />

<div class="tg tg-shr">
MUSIC
</div>


<!--<div class="shr"><span>2.7k</span> Shares</div>-->

<span class="art-hvr"></span>
</div>
<div class="txt-wrp">
<time datetime="2014-05-06">6 May 2014</time>

<p class="authr">Richard Branson</p>

<p class="authr-ttl">In Dallas to Free Love Field </p>
</div>
</div>
</a>
</div>
</article>

<article class="art-itm">
<div class="s-sbar-ct">
<a href="/music/who-has-the-perfect-voice-in-music" data-track="recommended|click|music/who-has-the-perfect-voice-in-music|8">
<i class="icon-video"></i>
<div class="outr-wrp">
<div class="img-wrp">
<img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />

<div class="tg tg-shr">
Music
</div>


<!--<div class="shr"><span>92</span> Shares</div>-->

<span class="art-hvr"></span>
</div>
<div class="txt-wrp">
<time datetime="2014-05-30">30 May 2014</time>

<p class="authr">Matthew Laidlow</p>

<p class="authr-ttl">Who has the 'perfect voice' in music? </p>
</div>
</div>
</a>
</div>
</article>



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
						    
				    <article class="art-itm">
				    <div class="s-sbar-ct">
				    <a href="/richard-branson/my-illustrated-top-10-tips-for-success" data-track="mostpopular|click|richard-branson/my-illustrated-top-10-tips-for-success|1">
				    
				    <div class="outr-wrp">
				    <div class="img-wrp">
				    <img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />
				    
				    <div class="tg tg-shr">
				    MUSIC
				    </div>
				    
				    
				    <!--<div class="shr"><span>73.6k</span> Shares</div>
				    -->
				    <span class="art-hvr"></span>
				    </div>
				    <div class="txt-wrp">
				    
				    
				    <p class="authr">Richard Branson</p>
				    
				    <p class="authr-ttl">My illustrated top 10 tips for success</p>
				    </div>
				    </div>
				    </a>
				    </div>
				    </article>
				    
				    <article class="art-itm">
				    <div class="s-sbar-ct">
				    <a href="/richard-branson/why-ive-given-up-eating-beef" data-track="mostpopular|click|richard-branson/why-ive-given-up-eating-beef|2">
				    
				    <div class="outr-wrp">
				    <div class="img-wrp">
				    <img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />
				    
				    <div class="tg tg-shr">
				    MUSIC
				    </div>
				    
				    
				    <!--<div class="shr"><span>25.6k</span> Shares</div>
				    -->
				    <span class="art-hvr"></span>
				    </div>
				    <div class="txt-wrp">
				    <time datetime="2014-07-09">9 July 2014</time>
				    
				    <p class="authr">Richard Branson</p>
				    
				    <p class="authr-ttl">Why I’ve given up eating beef</p>
				    </div>
				    </div>
				    </a>
				    </div>
				    </article>
				    
				    <article class="art-itm">
				    <div class="s-sbar-ct">
				    <a href="/richard-branson/turn-your-food-photos-into-real-meals" data-track="mostpopular|click|richard-branson/turn-your-food-photos-into-real-meals|3">
				    <i class="icon-video"></i>
				    <div class="outr-wrp">
				    <div class="img-wrp">
				    <img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />
				    
				    <div class="tg tg-shr">
				    MUSIC
				    </div>
				    
				    
				    <!--<div class="shr"><span>7.2k</span> Shares</div>
				    -->
				    <span class="art-hvr"></span>
				    </div>
				    <div class="txt-wrp">
				    <time datetime="2014-07-11">11 July 2014</time>
				    
				    <p class="authr">Richard Branson</p>
				    
				    <p class="authr-ttl">Turn your food photos into real meals</p>
				    </div>
				    </div>
				    </a>
				    </div>
				    </article>
				    
				    <article class="art-itm">
				    <div class="s-sbar-ct">
				    <a href="/richard-branson/the-way-you-work-is-going-to-change" data-track="mostpopular|click|richard-branson/the-way-you-work-is-going-to-change|4">
				    
				    <div class="outr-wrp">
				    <div class="img-wrp">
				    <img src="/website/static/images/tips/allianz_arena_views_44_72dpi.jpg" alt="" />
				    
				    <div class="tg tg-shr">
				    MUSIC
				    </div>
				    
				    
				    <!--<div class="shr"><span>10.9k</span> Shares</div>
				    -->
				    <span class="art-hvr"></span>
				    </div>
				    <div class="txt-wrp">
				    <time datetime="2014-07-14">14 July 2014</time>
				    
				    <p class="authr">Richard Branson</p>
				    
				    <p class="authr-ttl">The way you work is going to change</p>
				    </div>
				    </div>
				    </a>
				    </div>
				    </article>
				    
				    
				    
						</div>
					    </section>
					</div>
					
				</div>
				</div>
				<div class="clear"></div>
			</div>
	</div> <!-- .items-container -->	
</div>