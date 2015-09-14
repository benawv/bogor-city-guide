<header>
        <style>
        /* Override AJFC's feature box color */
        .box-dent--inner{ background: #009a44; }
        .box-dent::before{ border-top: 28px solid #009a44 !important;}
        .social-feeds .social-feeds--box.twitter{ background: #009a44 !important;}
        .social-feeds .social-feeds--box.facebook{background: #73c898!important;}
        .backg{max-width:100%; position:relative; margin:auto;}
        .foto{width:100%; height:auto;}
        .jarak{height:50px;}
            
        @media (min-width: 768px) {
          .container {
            width: 750px !important;
          }
        }
        @media (min-width: 992px) {
          .container {
            width: 970px !important;
          }
        }
        @media (min-width: 1200px) {
          .container {
            width: 1170px !important;
          }
        }
        h1 {
          font-size: 2.7em !important;
          margin: 0.67em 0 !important;
          font-weight: 400 !important;
          line-height: 1.5em !important;
        }
        h4{
          font-size: 1em !important;
        }            
        ol{
            font-size: 1.7em !important;
        }
        h3{
            font-size: 2.2em !important;          
        }
            
        h5{
            font-size: 1.8em !important;
        }
    </style>
<div class="row">
     <div class="background">
        <!--<img src="/website/ajfc/img/bg-home.jpg" alt="Home" class="img-responsive" />-->
        <div id="slideshow" class="clearfix">

<ul class="slides">

						<div class="slide <?php echo $hide;?>">
							<div class="foto">
                                <?php if($this->editmode){ ?>
								<?php echo $this->image("image_", ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "title" => "Image Size 1020x400", "width" => 960, "height" => 480])?>
                                                        <?php }else{ ?>
                        <img src="<?php echo $this->image("image_")->getSrc(); ?>" style="width:100% !important; min-height:100% !important;">
                                <?php } ?>
							</div>
							
								    </div>
								</div>
								<div class="edge e-<?php echo $color?>">
									<?php echo $this->link("boxlink_".$i); ?>
								</div>
							
	
</ul>
</div>
    </div><!--/ .background -->
    </div>

    
</header>

<div class="jarak">
</div>

<div class="page-wrapper-outer">
	
<section class="page-wrapper mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 pr0">
                
                <div class="main-content">
                    
                    <div class="main-content--header">
                        <h1 class="mb12"><?php echo $this->input('title_page_faq')?></h1>
                    </div><!--/ .main-content--header -->
                    
                    <div class="faq-wrapper mt16 pt16">
                        <?php
			$l=0;
			while ($this->block("rowTable")->loop()) {
			$l++;
			    ?>
                        <div class="faq-item">
                            
			    <div class="faq-item--question" style="padding-right: 20px;">
                                <ol start="<?php echo $l; ?>">
				    <li><h4><?php echo $this->input('title_faq')?></h4></li>
				</0l>
                            </div><!--/ .faq-item--question -->
                            <div class="faq-item--answer">
                                <?php echo $this->wysiwyg('description')?>
                            </div><!--/ .faq-item--answer -->
                        </div><!--/ .faq-item -->
			<?php
			
			} ?>
                        
                    </div><!--/ .faq-wrapper -->
                    
		    <?php echo $this->wysiwyg('description-bottom')?>
                    <!--<p>Tidak menemukan jawaban untuk pertanyaan kamu? Silahkan hubungi kami melalui <a href="https://www.facebook.com/AJFCIndonesia">facebook</a>!</p>-->
                    
                </div><!--/ .main-content -->
                
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-4 pl0">
                
                <div class="sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item--header mb16">
                            <h3><?php echo $this->input('title_page_tanyajawab')?></h3>
                        </div><!--/ .sidebar-item--header -->
                        <div class="sidebar-item--content">
                            
                            <?php if($this->editmode) { ?>
                                <div class="alert alert-info" style="height: 75px">
                                    <div class="col-xs-12">
                                        Berapa item yang ditampilkan?

                                        <?php
                                            // prepare the store
                                            $selectStore = [];
                                            for($i=2; $i<30; $i++) {
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
                                #best-products{
                                    height : auto !important;
                                }
                                </style>
                            <?php } ?>
                            <?php 
                                $id = "banner-".uniqid();
                                $slides = 2;
                                if(!$this->select("slides")->isEmpty()){
                                    $slides = (int) $this->select("slides")->getData();
                                }
                            ?>
                            <ul>
                            <?php for($i=0;$i<$slides;$i++) { ?>
                                <li><h5 class="mb12"><?php echo $this->link("linkedlist_".$i); ?></h5></li>
                            <?php } ?>
			                 </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->
                    
                </div><!--/ .sidebar -->
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->