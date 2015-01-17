<style type="text/css">
	.community-btn a{
		font-size: 25px;
		float: left;
		margin: 0px 5px;
	}
	.community-btn{
		float: right;
	}
</style>
<link rel="stylesheet" type="text/css" href="/website/static/css/virgin2.css">
<script type="text/javascript" src="/website/static/js/paging.js"></script>
<div role="main" class="tips-main main" style="background: url(<?php echo $this->data->imageBackgroundDetail->path."".$this->data->imageBackgroundDetail->filename;?>);background-size: 1500px auto;background-repeat: no-repeat;background-position: top;">
<div id="js-main-wrp" class="main-wrp" style="background-image:url(/sites/default/files/styles/hero_background_hi/public/Backgrounds/bg_space.jpg?itok=Sw8pyVQq)">
	<header id="header" class="hdr">
	           
			<div id="crumb" class="crmb-wrp">
				<div class="s-row crmb">
					<ul>
						<li class="crmb-sctn blue-allianz">
							<a href="/community-tips">Community</a>
						</li>
						<?php
							if($this->data->category->hexaColor!='')
							{
								$color = $this->data->category->hexaColor;
							}
							else
							{
								$color = $this->data->category->colorPicker;
							}
						?>
						<li class="crmb-sctn" style="background-color: <?php echo $color;?>">
							<a href="<?php echo $this->url(array($this->data->getCategory()->titleCategory),"list-category");?>"><?php echo $this->data->getCategory()->titleCategory;?></a>
						</li>
						<input type="hidden" value="<?php echo $this->data->getO_id(); ?>" class="id_art" />

				   <!--<li class="crmb-sctn">
							<a href="/travel">Travel</a>
						</li>-->
					</ul>
				</div>
			</div>
			
			<div class="s-row hero-bnnr">
				<div class="txt-wrp">
					<h1><?php echo $this->data->getTitle();?></h1>
				</div>
				
			</div>
	</header>
	
	<main id="main" class="main" role="main">
		<div class="s-row">
			<div class="s-main-fw">
				<div class="s-main-innr art">
					<article class="art-adv">
						<header class="s-ct">
							<div class="art-box">
								<div class="community-btn">
										<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
										<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
								</div>
								
								<p class="custom-art art-inf">
									<time>
										<?php echo date("M d, Y" , strtotime($this->data->getDate()));?>
									</time>
								</p>

								<section class="art-athr">
									<!-- <div class="t-r">
											<div class="t-c img-wrp">
												<div class="img-pnl"><img src="_assets/images/community-tips/JP Shack.jpg" alt="Author Image for Jack Preston"></div>
											</div>
											
											<div class="t-c txt-wrp">
												<p class="by">By <a href="/author/jack-preston" rel="author">Jack Preston</a></p>                            
												<p class="athr-jttl">Content Manager</p>
												<p class="twitter-acc"><span data-icon="?" class="icn-fnt twttr"></span> <a href="http://twitter.com/JackPressedOn" data-track="article|click|twitter" target="_blank">@JackPressedOn</a></p>                    </div>
									</div>
								</section> 
								
								<div class="sgnup-blck">
									<a href="/newsletter" class="sgnup-blck-innr">
										<span data-icon="?" aria-hidden="true" class="icn-fnt newsletter"></span>
										<span class="sgnup-txt">Newsletter Sign Up</span>
									</a>
								</div>-->
					
							</div> <!--art box end -->
				
				
							<div class="art-adv-intr">

								<div class="art-adv-intr-innr">
									<h2 class="h-b">
										<?php echo $this->data->getSummary();?>
									</h2>

								</div>
							</div>
							
						</header> <!--s-ct end -->
						
						<section class="art-sctn clrd custom-text">
						
							<div class="s-ct">
								<div class="c-1of1"> 
										<?php echo $this->data->getDescription();?>
								</div>  
							</div>
					
							<div class="s-ct">
								<div class="c-1of1">  
									<div class="visually_embed">
										<?php
											/*
											if($this->data->getVideo()->data->filename!=""){
												echo $this->video;
											}
											*/
										?>
									</div>  
								</div>  
							</div>
				
						</section> <!--art-sctn clrd -->
					</article> <!-- art-adv end-->
				</div> <!-- s-main-innr art end-->
			</div> <!-- s-main-fw end -->
		</div> <!-- s-row -->
		
		<div class="s-row">
			<div class="s-main-fw">
				<div class="art-lst kntc-ct">
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
												<img src="<?php echo $result[path]."".$result[filename];?>" alt="">

												<div class="tg tg-shr">
													<?php
														echo $result[titleCategory];
													?>
												</div>

												<!-- <div class="shr"><span>299</span> Shares</div>
												 -->
												<span class="art-hvr"></span>
											</div>
											
											<div class="txt-wrp">
												<time><?php echo gmdate("M d, Y", $result[date])?></time>
												<p class="authr-ttl-virgin2"><?php echo $result[title];?></p>
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
				<div class="art-lst kntc-ct">
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
												<img src="<?php echo $result[path]."".$result[filename];?>" alt="">

												<div class="tg tg-shr">
													<?php
														echo $result[titleCategory];
													?>
												</div>

												<!--<div class="shr"><span>6.7k</span> Shares</div>
												 -->
													<span class="art-hvr"></span>
											</div>
											
											<div class="txt-wrp">
												<time><?php echo gmdate("M d, Y", $result[date])?></time>
												<p class="authr-ttl-virgin2"><?php echo $result[title];?></p>
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
</main>
</div>		
</div>
<script>
	$(document).ready(function(){
		
		var json_video = '<?php echo $this->video; ?>';
		var video = json_video.substring(1, json_video.length).substring(0, json_video.length-2);
		$('.video').html(video);
		var url = $(".video").find("iframe").attr('src');
		if(url!=undefined){
			var split_url = url.split("?");
			$(".video").find("iframe").attr("src", split_url[0]+"?rel=0");
		}
		$.ajax({
			type: "POST",
			url: "save-cookies",
			data: {cookies: <?php echo ($_COOKIE["user"]);?>, id: $(".id_art").val()},
			success: function(data){
				console.log(data);
			}
		});

		$('.community-btn .twshare').on("click",function(){
	        var url = window.location.host+window.location.pathname;
	        
	        var title = $(".txt-wrp h1").text();
	        var isi = $(".h-b p").text();
	        
	        var isiText = isi.substring(0,80)+".... ";
	        
	        var tweet = title+" : "+isiText+url;
	        var encodeTweet = encodeURIComponent(tweet);
	        window.open('https://twitter.com/intent/tweet?text='+encodeTweet, 'sharer', 'width=626,height=436');
		});
		
		$('.community-btn .fbshare').on("click",function(){
			var image = "<?php echo $this->data->imageBackgroundDetail->path."".$this->data->imageBackgroundDetail->filename;?>";
			console.log(image);
			var reTanya = $(".txt-wrp h1").text();
			
			var deskripsi = $(".h-b p").text();
	        if(deskripsi =="")
	    	{
	        	deskripsi = "";
	        	deskripsi = $(".c-1of1 p").text();
	    	}
			
		    var name = (reTanya.replace(/[^a-zA-Z()]/g,''))+"-community";
			var filename = name.replace(/\s/g,'-');
	        var limit = 32;
	        var x;
	        var words = deskripsi.split(/\s/);
	        var desc='';
	        
	        if (words.length > limit)
	        {
	                for(x=0;x<limit;x++)
	                {
	                        if (x==0)
	                        {
	                                desc = desc+words[x];
	                        }
	                        else
	                        {
	                                desc = desc+' '+words[x];
	                        }
	                }
	                desc = desc+'....';
	        }
	        else
	        {
	                desc = deskripsi;
	        }
	                
	        loc = window.location.origin+'/website/static/fbshare/sharedfb.php';
	        /*console.log(image);
	        console.log(name);
	        console.log(filename);
	        console.log(desc);*/
	        $.ajax({
					type: 'POST',
					url: loc,
					data: {
						filename: filename,
						title_fb : reTanya,
						image_name: image,
						description: desc,
						url: window.location.host,
						link_in_fb : window.location.host+window.location.pathname
					},
					success: function(response)
					{
						var url = window.location.origin+'/website/static/fbshare/'+response;
						window.open('http://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), 'sharer', 'width=626,height=436');
					}
				});
		});
		
		//$.getJSON("http://jsonip.com?callback=?", function (data) {
		//    $.ajax({
		//    	type: "POST",
		//    	url: "../ip",
		//    	data:{ipAddress : data.ip, idArt : $(".id_art").val()},
		//    	success:function() {
		//            "SUCCESS"; 
		//         }
		//	});
		//});
	});
</script>
