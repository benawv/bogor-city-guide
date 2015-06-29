<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

                	<?php if($this->editmode) { ?>
	            How many slides you want to show?
	
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

	<?php } ?>
	<?php 
		$id = "container-carousel-".uniqid();
		$slides = 1;
		if(!$this->select("slides")->isEmpty()){
	        $slides = (int) $this->select("slides")->getData();
	    }
	?>
<section class="landing-tasbih-grid">
    <div class="container">
        
        <div class="row">
            <div class="col-xs-12 col-md-9">

                <div class="row">
<?php for($i=0;$i<$slides;$i++) { ?>
                    <div class="col-xs-12 col-md-6">
                        <div class="landing-tasbih-grid--item orange">
                            <div class="landing-tasbih-grid--item-inner">
                                <div class="title">
                                    <h3><?php echo $this->wysiwyg('title-box-section'.$i)?></h3>
                                </div>
                                
                                <div class="description">
                                    <p><?php echo $this->wysiwyg('description-box-section'.$i)?></p>
                                </div>
                                <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                            </div><!--/ .landing-tasbih-grid--item-inner -->
                        </div><!--/ .landing-tasbih-grid--item -->
                    </div><!--/ .col-xs-12 -->
<?php }?>
                    

                </div><!--/ .row -->
                                    

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-3">

                <div class="landing-tasbih-map">
                    <div id="map-canvas"></div>
                    <div class="landing-tasbih-map--button">
                        <a href="#"><i class="fa fa-search"></i> Temukan Agen</a>
                    </div><!--/ .landing-tasbih-map--button -->
                </div><!--/ .landing-tasbih-map -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
        <div class="row">
            <div class="col-xs-12 col-md-9">

                <div class="landing-tasbih-grid--item inline purple">
                    <div class="landing-tasbih-grid--item-image">
                        <?php 
                        echo $this->image("gallery-informasi", array(
                                "thumbnail" => "staticBanner",
                                'title' 	=> 'informasi',
                                 "width" => "349.125px", "height" => "163.297px"
                        ));
                    ?>
                    </div><!--/ .landing-tasbih-grid--item-image -->
                    <div class="landing-tasbih-grid--item-inner">
                        <h3><?php echo $this->wysiwyg('title-box-section-informasi')?></h3>
                        <p><?php echo $this->wysiwyg('title-box-description-informasi')?></p>
                        <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                    </div><!--/ .landing-tasbih-grid--item-inner -->
                </div><!--/ .landing-tasbih-grid--item -->

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-3">

                <div class="landing-tasbih-grid--item red">
                    <div class="landing-tasbih-grid--item-inner">
                        <h3><?php echo $this->wysiwyg('title-box-section-item')?></h3>
                        <p><?php echo $this->wysiwyg('title-box-description-item')?></p>
                        <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                    </div><!--/ .landing-tasbih-grid--item-inner -->
                </div><!--/ .landing-tasbih-grid--item -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-grid -->