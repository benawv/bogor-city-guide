<?php

$root =  "http://".$_SERVER['HTTP_HOST'];
$uri_segment = explode("/",$_SERVER['SCRIPT_NAME']);
$root .= "/".$uri_segment['1']."/";
function check_user_agent ( $type = NULL ) {
        $user_agent = strtolower ( $_SERVER['HTTP_USER_AGENT'] );
        if ( $type == 'bot' ) {
                // matches popular bots
                if ( preg_match ( "/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $user_agent ) ) {
                        return true;
                        // watchmouse|pingdom\.com are "uptime services"
                }
        } else if ( $type == 'browser' ) {
                // matches core browser types
                if ( preg_match ( "/mozilla\/|opera\//", $user_agent ) ) {
                        return true;
                }
        } else if ( $type == 'mobile' ) {
                // matches popular mobile devices that have small screens and/or touch inputs
                // mobile devices have regional trends; some of these will have varying popularity in Europe, Asia, and America
                // detailed demographics are unknown, and South America, the Pacific Islands, and Africa trends might not be represented, here
                if ( preg_match ( "/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent ) ) {
                        // these are the most common
                        return true;
                } else if ( preg_match ( "/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /", $user_agent ) ) {
                        // these are less common, and might not be worth checking
                        return true;
                }
        }
        return false;
}
?>
<link rel="stylesheet" type="text/css" media="screen" id="font-awesome-css" href="/website/static/css/font-awesome/font-awesome.min.css">
<script type="text/javascript">var switchTo5x=true;</script>
<!--script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script!-->
<!--<script type="text/javascript">stLight.options({publisher: "16852030-1a9b-4882-8731-4afd4c1cfd9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->

<script type="text/javascript">
$(function(){
	
});
</script>

<header role="banner" class="banner">
	<div class="container">
		<h1 class="weblogo">Allianz<span onclick="window.location.href = '<?php echo $this->url(array("document" => Document::getById(1)), "default", true)?>'"></span></h1>
		<?php
    
		    // get root node if there is no document defined (for pages which are routed directly through static route)
		    if(!$this->document instanceof Document_Page) {
		        $this->document = Document::getById(1);
		    }
		 
		    // get the document which should be used to start in navigation | default home
		    $navStartNode = $this->document->getProperty("navigationRoot");
		    if(!$navStartNode instanceof Document_Page) {
		        $navStartNode = Document::getById(1);
		    }
		 
		    //this is used as id prefix for the html menu element
		    $htmlIdPrefix = "mainNav_";
		 
		    $navigation = $this->pimcoreNavigation()->getNavigation($this->document, $navStartNode, $htmlIdPrefix);
		    $this->navigation()->menu()->setUseTranslator(false); // to deactivate the translator provided by the view helper
		    $partial = array('includes/menu-partial.php', 'website');
		    $this->navigation()->menu()->setPartial($partial);
		    //$this->navigation($navigation);
		 
		?>
		<nav class="primary" role="primarynavigation">
			<h3 class="toggle-menu"><span>Main Navigation</span></h3>
			<div class="menu-level1">
				<?php
				    echo $this->navigation()->menu()->render($navigation);
				?>
				<!--<ul class="clearfix mobile deactive">
					<li>
						<a href="javascript:void(0);">Customer Login</a>
						<div style="display: none;" class="menu-level2">
							<ul class="noborder">
								<li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Individual/" target="_blank">Asuransi Jiwa dan Kesehatan (Individu)</a></li>
								<li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Group/" target="_blank">Asuransi Kesehatan Kumpulan</a></li>
								<li><a href="https://www.allianzlife.co.id/ePolicy/general/frmHomeGeneral.aspx" target="_blank">Portal Status Klaim Mobil</a></li>
								<li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Individual/" class="deactive" target="_blank">Registrasi</a></li>
							</ul>
						</div>
					</li>
					<li>
						<a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Individual/" target="_blank">Registrasi</a>
					</li>
				</ul>-->
			</div>
			<div class="search">
				<div class="container clearfix">
					<!--<form action="#" method="post">
						<input type="hidden" name="csrf" value="<?php echo $_SESSION["token"]; ?>">
						<input type="text" placeholder="Search" name="search" class="input-text">
						<button type="submit" class="icon-search">Search</button>
					</form> -->
					
					
				</div>
			</div>
		</nav>
		<div class="minibar clearfix cusZindex">
			
			<nav class="toolbar">
				<ul class="clearfix">
					<li>
						<a href="javascript:void(0);" class="icon-user cusLogin">Customer Login <img class="arrowDown" src='/website/static/images/arrow/bottom-arrow.png' alt="arrow" /></a>
					</li>
					<li class="liMobileHide"><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Individual/" target="_blank" class="icon-mail hide-text">Registrasi</a></li>
					<!--<li><a href="#" class="icon-fav hide-text">My Product</a></li>-->
					<li class="liMobileHide">
						<a href="javascript:void(0);" class="fbshare-fullpage"><img src="/website/static/images/icon-share/facebook.png" alt="facebook" /></a>
                        <!--<div class="tag-center">
                        	<span class='st_sharethis' displayText='  '></span>
                             <span class='st_facebook' displayText=''></span>
                            <span class='st_twitter' displayText=''></span>
                            <span class='st_linkedin' displayText=''></span>
                            <span class='st_pinterest' displayText=''></span>
                            <span class='st_email' displayText=''></span> 
                        </div>-->
					 </li>
					<li class="liMobileHide">
						<a href="javascript:void(0);" class="twshare-fullpage"><img src="/website/static/images/icon-share/twitter.png" alt="twitter" /></a>
					</li>
				</ul>
				<ul class="ulCustomerOnline deactive">
					<li class="liCustomerOnline"><a href="" data-toggle="modal" data-target=".bs-example-modal-sm" target="_blank">Login ASN</a></li>
					<li class="liCustomerOnline"><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Individual/" target="_blank">Asuransi Jiwa dan Kesehatan (Individu)</a></li>
					<li class="liCustomerOnline"><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Group/" target="_blank">Asuransi Kesehatan Kumpulan</a></li>
					<li class="liCustomerOnline"><a href="https://www.allianzlife.co.id/ePolicy/general/frmHomeGeneral.aspx" target="_blank">Portal Status Klaim Mobil</a></li>
					<li class="liCustomerOnline mobile deactive"><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/Individual/" target="_blank" class="icon-mail hide-text">Registrasi</a></li>
				</ul>
				
				<script type="text/javascript">
						$(document).ready(function() {
						$(".dropdown img.flag").addClass("flagvisibility");

						$(".dropdown dt a").click(function() {
							$(".dropdown dd ul").toggle();
						});
									
						$(".dropdown dd ul li a").click(function() {
							var text = $(this).html();
							$(".dropdown dt a span").html(text);
							$(".dropdown dd ul").hide();
							$("#result").html("Selected value is: " + getSelectedValue("sample"));
						});
									
						function getSelectedValue(id) {
							return $("#" + id).find("dt a span.value").html();
						}

						$(document).bind('click', function(e) {
							var $clicked = $(e.target);
							if (! $clicked.parents().hasClass("dropdown"))
								$(".dropdown dd ul").hide();
						});


						$("#flagSwitcher").click(function() {
							$(".dropdown img.flag").toggleClass("flagvisibility");
						});
						
						$(".cusLogin").click(function() {
							if ($(this).find("img").attr("src") == "/website/static/images/arrow/bottom-arrow.png") {
								$(this).find("img").attr("src" , "");
								$(".ulCustomerOnline").show();
								$(this).find("img").attr("src" , "/website/static/images/arrow/top-arrow.png");
							}
							else {
								$(this).find("img").attr("src" , "");
								$(".ulCustomerOnline").hide();
								$(this).find("img").attr("src" , "/website/static/images/arrow/bottom-arrow.png");
							}
						});
					});
						
						function link(isi, extension, force)
						{
							extension = extension == undefined ? '.php' : '';
							useragent = '<?php echo check_user_agent('mobile');?>';
							if(useragent != '1' || force == true)
								window.location.href = isi + extension;
						}
				</script>
				
				<div class="language">
					<div class="list-header">
						<!--<dl id="sample" class="dropdown">
							<dt><a href="#"><span>English</span></a></dt>
							<dd>
								<ul>
									<li><a href="#">Bahasa</a></li>
									<li><a href="#">English</a></li>
								</ul>
							</dd>
						</dl>-->
					</div>	
				</div>	
			</nav>
		</div>
	</div>
	
</header>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="z-index: 99999">
  <div class="modal-dialog modal-sm">
	<div class="modal-dialog modal-vertical-centered">
		<div class="modal-content" style="padding: 20px">
			<form class="form-signin" action="https://www.allianzstarnetwork.com/redirect.php" method="POST">
				<h2 class="form-signin-heading"><b>ASN Sign In</b></h2>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus style="margin-bottom:10px">
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Password" required style="margin-bottom:10px">
				<input type="hidden" name="js_autodetect_results" value="0">
				<input type="hidden" name="just_logged_in" value="1">	
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>
	</div>	
  </div>
</div>
