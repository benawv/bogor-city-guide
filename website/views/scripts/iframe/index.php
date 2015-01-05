<!--[if IE 8 ]><html class="ie8"> 
	<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="<?php echo $root?>_assets/css/css-ie8/screen-ie8.css">
	<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="<?php echo $root?>_assets/css/css-ie8/main-ie8.css">
<![endif]-->

<!-- icons & favicon -->
<link rel="shortcut icon" href="https://www.allianz.com/v_207002904/system/master/images/favicon.ico" type="image/x-icon">


<!-- css -->

<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/flexslider.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/tabs-accordion.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/wishlist-cart.css">
<link rel="stylesheet" type="text/css" media="all" href="/website/static/css/css-ie8/isr.css">


<!--
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/flexslider.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/tabs-accordion.css">
-->

 <!-- javascript -->
<script src="/website/static/js/modernizr.js" type="text/javascript"></script>
<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!--script src="/website/static/jquery.tools.min.js" type="text/javascript"></script-->
<script src="/website/static/js/main.js" type="text/javascript"></script>


<!-- plugins -->
<script src="/website/static/plugins/jquery.flexslider.min.js" type="text/javascript"></script>
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/website/static/js/accordion-jquery.js" type="text/javascript"></script>
<!-- Community Tips -->
<script type="text/javascript" src="/website/static/js/paging.js"></script>



<!-- font face 
<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
-->


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkjnwleWwVfhCyd45V9A2_XBeAOqMDhrU&sensor=true"></script>
<script type="text/javascript" src="/website/static/plugins/gmaps-marker-label.js"></script>

<meta name="google-site-verification" content="t5S9yqQc-NyyfANDoR4qXDmEbpy746PnIqxU5rp0aXM" />

<!--Google Analytics-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-44171460-1', 'auto');
ga('send', 'pageview');
</script>
<!--Google Analytics-->

<script type="text/javascript">
	$(function(){
		$('#slideshow').flexslider({
			animation: "slide"
		});
		$('#best-products').flexslider({
			animation: "slide",
			slideshowSpeed: 6000
		});

	})
	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1);
	        if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
	    }
	    return "";
	}
</script>
<script src="/website/static/js/share-product.js" type="text/javascript"></script>

<div class="main" role="main">
	<div class="container">
		<div id="slideshow" class="clearfix">
			<?php if($this->editmode) { ?>
			    <div class="alert alert-info" style="height: 75px">
			        <div class="col-xs-6">
			            How many images you want to show?

			            <?php
			                // prepare the store
			                $selectStore = [];
			                for($i=2; $i<16; $i++) {
			                    $selectStore[] = [$i, $i];
			                }
			            ?>
			            <?php echo $this->select("slides",[
			                "store" => $selectStore,
			                "reload" => true
			            ]); ?>
			        </div>
			    </div>

			    <style type="text/css">
			        .gallery .item {
			            min-height: 377px;
			        }
			        .place-bg{
			        	height: 265px !important;
			        }
			    </style>
			<?php } ?>
			<?php 
				$id = "gallery-carousel-".uniqid();
				$slides = 2;
				if(!$this->select("slides")->isEmpty()){
			        $slides = (int) $this->select("slides")->getData();
			    }
			    $seq = [];
			    for($a=1; $a<=$slides; $a++) {
			        $selectSeq[] = [$a, $a];
			    }
			?>
			<ul class="slides">
				<?php
					for($z=0;$z<$slides;$z++) {
						for($i=0;$i<$slides;$i++) { 
							$v = $this->select('seq_'.$i)->getData() ? $this->select('seq_'.$i)->getData() : 1;
							$w = $z+1;
							if($w == $v){
			?>
								<li>
									<div class="slide">
										<div class="photo">
											<?php echo $this->image("image_".$i, ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "title" => "Image Size 960x400", "width" => 960, "height" => 400])?>
										</div>
										<?php
											$extra = $this->image("image_".$i)->getHotspots();
											//$pos = $extra[0]['data'][0]['value'];
											//$color = $extra[0]['data'][1]['value'];
											$pos = $this->select('position_'.$i)->getData();
											$color = $this->select('color_'.$i)->getData();
										?>
										<div class="fixbox <?php echo $pos?>60">
											<div class="place-bg bg-<?php echo $color?>">
												<?php if($this->editmode || !$this->input("caption-title-" . $i)->isEmpty()) { ?>
						                            <h1><?php echo $this->input("caption-title-" . $i, ["width" => 251]) ?></h1>
						                        <?php } ?>
						                        <?php if($this->editmode || !$this->textarea("caption-text-" . $i)->isEmpty()) { ?>
						                            <p>
						                                <?php echo $this->textarea("caption-text-" . $i, ["width" => 251, "height" => 100]) ?>
						                            </p>
						                        <?php } ?>
						                        <?php if($this->editmode) { ?>
						                        	<p>
							                        <?php 
							                        	echo "Sequence: <br />";
						                        		echo $this->select("seq_".$i,array(
														    "store" => $selectSeq,
						                        			"reload" => true
														    )
														); 
													?>
						                        	</p>
						                        	<p>
						                        	<?php 
						                        		echo "Position: <br />";
						                        		echo $this->select("position_".$i,array(
														    "store" => array(
														        array("left", "Left"),
														        array("right", "Right")
														    )
														)); 
													?>
						                        	</p>
						                        	<p>
							                        <?php 
							                        	echo "Color: <br />";
						                        		echo $this->select("color_".$i,array(
														    "store" => array(
														        array("red", "Red"),
														        array("lightgreen", "Light Green"),
														        array("purple", "Purple"),
														        array("blue", "Blue"),
														        array("orange", "Orange")
														    ),
														    "reload" => true
														)); 
													?>
						                        	</p>
						                        <?php } ?>
											</div>
											<div class="edge e-<?php echo $color?>">
												<?php echo $this->link("boxlink_".$i); ?>
											</div>
										</div>
									</div>
								</li>

				<?php 		} 
						}
					}
				?>
				
			</ul>
			</div>
	</div>
</div>