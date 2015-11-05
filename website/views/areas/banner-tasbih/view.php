<header>
    <style>
        /* Override AJFC's feature box color */
        .box-dent--inner{ background: #009a44; }
        .box-dent::before{ border-top: 28px solid #009a44 !important;}
        .social-feeds .social-feeds--box.twitter{ background: #009a44 !important;}
        .social-feeds .social-feeds--box.facebook{background: #73c898!important;}
        .news-feed{
            background: none repeat scroll 0 0 white;
            border: 1px solid #ddd;
            min-height: 260px;
            padding: 24px;
            position: relative;
        }
        .backg
        {
            max-width: 960px;
            position:relative;
            margin:auto;
        }
        .foto
        {
            width:100%;
            height:auto;
        }
        .slide .fixbox .edge{
            height: 29px !important;
        }
        nav.main-navigation a.nav-item
        {
            display: block;
            position: relative;
            height: 50px;
            background: #d31f42;
        }

        nav.main-navigation a.nav-item::after
        {
            content: "";
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            position: absolute;
            right: 20px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.5);
            font-size: 20px;
            pointer-events: none;
        }

        nav.main-navigation a.nav-item.chat::after {
            content: "\f003  ";
        }


        .nav-item{
            text-align: left !important;
        }

        #slideshow .slide p, .place-bg h1{
            text-align: left !important;
        }

        .news-feeds.left-side
        {
            padding-left: 15px;
            padding-right: 30px;
        }

        .news-feeds.right-side
        {
            padding-right: 15px;
        }

        .edge a {
            float: left;
        }

        @media( max-width : 640px)
        {
            .place-bg.place-bg-gallery
            {
                padding: 15px;
            }

        }

        @media ( max-width: 767px )
        {
            .news-feeds.left-side
            {
                padding-left: 30px;
                padding-right: 30px;
            }

            .news-feeds.right-side
            {
                padding-left: 30px;
                padding-right: 30px
            }
        }

        nav.main-navigation a.nav-item.red::before {background: #780DEB;}
    </style>
<div class="row">
     <div class="backg">
        <!--<img src="/website/ajfc/img/bg-home.jpg" alt="Home" class="img-responsive" />-->
        <div id="slideshow" class="clearfix">
<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many images you want to show?

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
        .place-bg-gallery{
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
                        <?php
                            if(!$this->editmode){
                            if($i!=0){
                                $hide = "hide";
                            }
                            else{
                                $hide = "";
                            }
                            }
                            else{
                            $hide = "";
                            }
                        ?>
                        <div class="slide <?php echo $hide;?>">
                            <div class="foto">
                                <?php
                                    if($this->editmode) {
                                        echo $this->image("image_".$i, ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "title" => "Image Size 960x400", "width" => "960", "height" => "400"]);
                                    }
                                    else{
                                        echo $this->image("image_".$i, ["dropClass" => $id . "-" . $i, "title" => "Image Size 960x400", "width" => "100%", "height" => "auto"]);
                                    }
                                ?>
                            </div>
                            <?php
                                $extra = $this->image("image_".$i)->getHotspots();
                                //$pos = $extra[0]['data'][0]['value'];
                                //$color = $extra[0]['data'][1]['value'];
                                $pos = $this->select('position_'.$i)->getData();
                                $color = $this->select('color_'.$i)->getData();
                            ?>
                            <div class="fixbox <?php echo $pos?>60">
                                <div class="place-bg bg-<?php echo $color?> place-bg-gallery place-bg<?php echo $i;?>">
                                    <div>
                                    <?php if($this->editmode || !$this->input("caption-title-" . $i)->isEmpty()) { ?>
                                        <h1><?php echo $this->input("caption-title-" . $i, ["width" => 251]) ?></h1>
                                    <?php } ?>
                                    <?php if($this->editmode || !$this->textarea("caption-text-" . $i)->isEmpty()) { ?>
                                        <p>
                                            <?php echo $this->textarea("caption-text-" . $i, ["width" => 251, "height" => 100, "maxlength" => 250]) ?>
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
                                                    array("green", "Green"),
                                                    array("purple", "Purple"),
                                                    array("blue", "Blue"),
                                                    array("#64A70B", "GreenTasbih"),
                                                    array("orange", "Orange")

                                                ),
                                                "reload" => true
                                            ));
                                        ?>
                                        </p>
                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="edge e-<?php echo $color?>"><?php echo $this->link("boxlink_".$i);?></div>
                            </div>
                        </div>
                    </li>

    <?php 		}
            }
        }
    ?>

</ul>
</div>
    </div><!--/ .background -->
    </div>
</header>