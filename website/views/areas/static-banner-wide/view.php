
    <style>
        /* Override AJFC's feature box color */
        .box-dent--inner{ background: #009a44; }
        .box-dent::before{ border-top: 28px solid #009a44 !important;}
        .social-feeds .social-feeds--box.twitter{ background: #009a44 !important;}
        .social-feeds .social-feeds--box.facebook{background: #73c898!important;}
        .backg{max-width:1145px; position:relative; margin:auto;}
        .foto{width:100%; height:auto;}
    </style>

	 <div class="backg">
        <!--<img src="/website/ajfc/img/bg-home.jpg" alt="Home" class="img-responsive" />-->
        <div id="slideshow" class="clearfix">
			<?php 
				echo $this->image("gallery-carousel", array(
						"thumbnail" => "staticBanner",
						'title' 	=> 'Image Size 1020x400',
						 "width" => "100%", "height" => "auto"
				));
			?>
		</div>


    </div><!--/ .background -->