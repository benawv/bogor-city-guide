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
        
        /*ROBBI 3 Agustus 2015*/
        #calendar-wrapper{
            margin-bottom: 50px;
        }
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
                                        echo $this->image("image_".$i, ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "title" => "Image Size 1020x400", "width" => "100%", "height" => "auto"]);
                                    }
                                    else{
                                        echo $this->image("image_".$i, ["dropClass" => $id . "-" . $i, "title" => "Image Size 1020x400", "width" => "100%", "height" => "auto"]);
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
            <nav class="main-navigation" style="max-width:960px; margin:auto;">
            <div class="row">

                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/info-produk" class="nav-item orange question">
                        <h4 style="font-size:18px"><small>Informasi produk</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/kalkulator/ilustrasi" class="nav-item green sitemap">
                        <h4 style="font-size:18px"><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.allianz.co.id" target="_blank" class="nav-item red users">
                        <h4 style="font-size:18px"><small>Cari Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/minta-informasi" class="nav-item grey chat">
                        <h4 style="font-size:18px"><small>Minta Informasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div>
            <div class="row">

            </div>
    </nav>

</header>

<style>
    @media ( max-width: 992px )
    {
        section#calendar-wrapper .row > div.pr0[class^="col-"]
        {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }
    }
</style>

<?php

                    $listnews = new Object_TasbihNews_List();
                    $listnews->setLimit(6);
                    $listnews->setOrder('desc');
                    $i=0;
                    foreach($listnews as $items){

                        $news_stack[$i]=array(
                                "date"=>$items->newsdate,
                                "video"=>$items->video->data,
                                "teaser"=>$items->deskripsisingkat,
                                "link"=>"/produk/asuransi-syariah/tasbih/artikel/".$items->o_key."-".$items->o_id,
                                "title"=> $items->title,
                                "images"=>$items->images->path.$items->images->filename,
                                "thumb"=>$items->thumbnail->path.$items->thumbnail->filename
                                );
                        array_push($news_stack[$i]);
                        $i++;
                    }/*
                    echo "<pre>";
                    print_r($news_stack);
                    echo "</pre>";*/
                    ?>
                    
<section class="mt32 mb72"><!--section artikel-->
    <!--VIDEO-->
    <div class="container boxes-view" style="">
    <div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white">
        <h2>
            <?php if($this->editmode): ?>
                Icon: <?php echo $this->image('icon', array(
                                    'title' 	=> 'Image Size 31x31',
                                    'width' 	=> 100,
                                    'height' 	=> 100,
                                    'thumbnail'	=> 'icon')) ?>
                <?php echo $this->input('title', ["width" => 250])?>
            <?php else: ?>
                <?php if($this->image('icon')->getSrc()):?>
                    <div style="background-image: url('<?php echo $this->image('icon')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div>
                <?php endif;?>
            <span class="judul_section"><?php echo $this->input('title')?></span>
            <?php endif; ?>
            <div class="btn-group btn-section">
                <a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
                <a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
            </div>
        </h2>
        <div class="description width-66">
            <?php if($this->editmode): ?>
                <?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
            <?php endif;?>
            <div class="section-left-60">
                <?php 
                    echo $this->video("video", array(
                    "width" => 320,
                    "height" => 200,
                    "attributes" => ["frameborder" => 0]
                    )); 
                ?>
            </div>
            <div class="section-right-40">
                <?php echo $this->wysiwyg('teks-kanan')?>
            </div>
        </div>
    </div>
    </div>
    <!--END VIDEO-->
    <style>
        .container.boxes-view
        {
            max-width: 960px !important;
            margin: 0 auto !important;
            padding: 0 !important;
        }
        @media ( max-width: 767px )
        {
            .container.boxes-view
            {
                padding: 0 15px !important;
            }
        }
    </style>
    <div class="container boxes-view" style="">
            <div class="items-container custom_item_home" style="position: relative; height: 1001px;">

            <!-- Community -->
                <div class="pimcore_area_tahukah-anda pimcore_area_content">
                    <div class="item" id="item-left-1" style="position: absolute; left: 0px; top: 0px;">
                        <div class="heading">
                            <h2 class="title_news  clickPage">
                                <a href="<?php echo $news_stack[0]['link'];?>" class="thumbnail thumbnail-popup id1" title="<?php echo $news_stack[0]['title'];?>"><?php echo $news_stack[0]['title'];?></a>
                            </h2>
                            <div class="btn-group">
                                <a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                         <?php if(isset($news_stack[0]['video'])){ ?>

                            <iframe width="304" height="295" src="https://www.youtube.com/embed/<?php echo $news_stack[0]['video'];?>" frameborder="0" allowfullscreen></iframe>

                        <?php }else{ ?>
                        <img src="<?php echo $news_stack[0]['thumb'];?>" class="thumb1 clickPage" title="Laporan Perkembangan Unit Link 2014" width="304" height="295" alt="Laporan Perkembangan Unit Link 2014">
                        <?php } ?>
                        <div class="description thumb1 clickPage">
                            <?php echo $news_stack[0]['teaser'];?>
                        </div>
                    </div>

                    <div class="item" id="item-left-2" style="position: absolute; left: 326px; top: 0px;">
                        <div class="heading">
                            <h2 class="title_news  clickPage">
                                <a href="<?php echo $news_stack[1]['link'];?>" class="thumbnail thumbnail-popup id1" title="<?php echo $news_stack[1]['title'];?>"><?php echo $news_stack[1]['title'];?></a>
                            </h2>
                            <div class="btn-group">
                                <a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <?php if(isset($news_stack[1]['video'])){ ?>

                            <iframe width="304" height="295" src="https://www.youtube.com/embed/<?php echo $news_stack[1]['video'];?>" frameborder="0" allowfullscreen></iframe>

                        <?php }else{ ?>
                        <img src="<?php echo $news_stack[1]['thumb'];?>" class="thumb1 clickPage" title="<?php echo $news_stack[1]['title'];?>" width="304" height="295" alt="<?php echo $news_stack[1]['title'];?>">
                        <?php } ?>                        <div class="description thumb1 clickPage">
                            <?php echo $news_stack[1]['teaser'];?>
                        </div>
                    </div>

                    <div class="item" id="item-left-3" style="position: absolute; left: 652px; top: 0px;">
                        <div class="heading">
                            <h2 class="title_news  clickPage">
                                <a href="<?php echo $news_stack[2]['link'];?>" class="thumbnail thumbnail-popup id1" title="<?php echo $news_stack[2]['title'];?>"><?php echo $news_stack[2]['title'];?></a>
                            </h2>
                            <div class="btn-group">
                                <a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <?php if(isset($news_stack[2]['video'])){ ?>

                            <iframe width="304" height="295" src="https://www.youtube.com/embed/<?php echo $news_stack[2]['video'];?>" frameborder="0" allowfullscreen></iframe>

                        <?php }else{ ?>
                        <img src="<?php echo $news_stack[2]['thumb'];?>" class="thumb1 clickPage" title="<?php echo $news_stack[2]['title'];?>" width="304" height="295" alt="<?php echo $news_stack[2]['title'];?>">
                        <?php } ?>                        <div class="description thumb1 clickPage">
                            <?php echo $news_stack[2]['teaser'];?>
                        </div>
                    </div>

                    <!-- Modal Premi -->

                    <!-- Modal Fakta Klaim -->
                    <!-- Modal Fakta Klaim -->
                    <div class="modal fade" id="modalpdf3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                        </div>
                      </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function(){
                                    $(".title_news .id1").removeAttr("data-target data-toggle");
                                    $(".thumb1").on("click",function(){
                                        var link = $(".title_news .id1").attr("href");
                                        var target = $(".title_news .id1").attr("target");
                                        var linkCheck = $(".thumb1 p").find("a").attr("href");
                                        if (linkCheck == "#") {
                                            window.open(link, target);
                                        }
                                    });

                                    $(".title_news .id2").removeAttr("data-target data-toggle");
                                    $(".thumb2").on("click",function(){
                                        var link = $(".title_news .id2").attr("href");
                                        var target = $(".title_news .id2").attr("target");
                                        var linkCheck = $(".thumb2 p").find("a").attr("href");
                                        if (linkCheck == "#") {
                                            window.open(link, target);
                                        }
                                    });

                                    $('.thumb3').on("click",function(){
                                    html = '<div class="modal-header">'+
                                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
                                        '</div>'+
                                        '<div class="modal-body">'+
                                            '<div name="flipgorilla" class="flipgorilla" data-id="23837411469432551" style="width: 100%; height: 700px;">'+
                                                '<a href="http://www.flipgorilla.com/p/23837411469432551/show" target="_blank">'+
                                                    '<div class="progress progress-striped active">'+
                                                      '<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'+
                                                      '</div>'+
                                                    '</div>'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>';
                                $('#modalpdf3 .modal-content').html(html);
                                $.getScript("http://www.flipgorilla.com/fg.js");
                                $("#modalpdf3").modal();
                            });
                                });
                    </script>
                </div><!--end row pertama-->

                <div class="pimcore_area_tahukah-anda pimcore_area_content">
                    <div class="item" id="item-left-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="heading">
                            <h2 class="title_news  clickPage">
                                <a href="<?php echo $news_stack[3]['link'];?>" class="thumbnail thumbnail-popup id1" title="<?php echo $news_stack[3]['title'];?>"><?php echo $news_stack[3]['title'];?></a>
                            </h2>
                            <div class="btn-group">
                                <a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                         <?php if(isset($news_stack[3]['video'])){ ?>

                            <iframe width="304" height="295" src="https://www.youtube.com/embed/<?php echo $news_stack[3]['video'];?>" frameborder="0" allowfullscreen></iframe>

                        <?php }else{ ?>
                        <img src="<?php echo $news_stack[3]['thumb'];?>" class="thumb1 clickPage" title="<?php echo $news_stack[3]['title'];?>" width="304" height="295" alt="<?php echo $news_stack[3]['title'];?>">
                        <?php } ?>
                        <div class="description thumb1 clickPage">
                            <?php echo $news_stack[3]['teaser'];?>
                        </div>
                    </div>
                    <?php if(isset($news_stack[4]['title'])){ ?>
                    <div class="item" id="item-left-5" style="position: absolute; left: 326px; top: 0px;">
                        <div class="heading">
                            <h2 class="title_news  clickPage">
                                <a href="<?php echo $news_stack[4]['link'];?>" class="thumbnail thumbnail-popup id1" title="<?php echo $news_stack[4]['title'];?>"><?php echo $news_stack[4]['title'];?></a>
                            </h2>
                            <div class="btn-group">
                                <a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <?php if(isset($news_stack[4]['video'])){ ?>

                            <iframe width="304" height="295" src="https://www.youtube.com/embed/<?php echo $news_stack[4]['video'];?>" frameborder="0" allowfullscreen></iframe>

                        <?php }else{ ?>
                        <img src="<?php echo $news_stack[4]['thumb'];?>" class="thumb1 clickPage" title="<?php echo $news_stack[4]['title'];?>" width="304" height="295" alt="<?php echo $news_stack[4]['title'];?>">
                        <?php } ?>
                        <div class="description thumb1 clickPage">
                            <?php echo $news_stack[4]['teaser'];?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if(isset($news_stack[5]['title'])){ ?>
                    <div class="item" id="item-left-6" style="position: absolute; left: 652px; top: 0px;">
                        <div class="heading">
                            <h2 class="title_news  clickPage">
                                <a href="<?php echo $news_stack[5]['link'];?>" class="thumbnail thumbnail-popup id1" title="<?php echo $news_stack[5]['title'];?>"><?php echo $news_stack[5]['title'];?></a>
                            </h2>
                            <div class="btn-group">
                                <a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                        <?php if(isset($news_stack[5]['video'])){ ?>

                            <iframe width="304" height="295" src="https://www.youtube.com/embed/<?php echo $news_stack[5]['video'];?>" frameborder="0" allowfullscreen></iframe>

                        <?php }else{ ?>
                        <img src="<?php echo $news_stack[5]['thumb'];?>" class="thumb1 clickPage" title="<?php echo $news_stack[5]['title'];?>" width="304" height="295" alt="<?php echo $news_stack[5]['title'];?>">
                        <?php } ?>
                        <div class="description thumb1 clickPage">
                            <?php echo $news_stack[5]['teaser'];?>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Modal Premi -->

                    <!-- Modal Fakta Klaim -->
                    <!-- Modal Fakta Klaim -->
                    <div class="modal fade" id="modalpdf3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                        </div>
                      </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function(){
                                    $(".title_news .id1").removeAttr("data-target data-toggle");
                                    $(".thumb1").on("click",function(){
                                        var link = $(".title_news .id1").attr("href");
                                        var target = $(".title_news .id1").attr("target");
                                        var linkCheck = $(".thumb1 p").find("a").attr("href");
                                        if (linkCheck == "#") {
                                            window.open(link, target);
                                        }
                                    });

                                    $(".title_news .id2").removeAttr("data-target data-toggle");
                                    $(".thumb2").on("click",function(){
                                        var link = $(".title_news .id2").attr("href");
                                        var target = $(".title_news .id2").attr("target");
                                        var linkCheck = $(".thumb2 p").find("a").attr("href");
                                        if (linkCheck == "#") {
                                            window.open(link, target);
                                        }
                                    });

                                    $('.thumb3').on("click",function(){
                                    html = '<div class="modal-header">'+
                                            '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
                                        '</div>'+
                                        '<div class="modal-body">'+
                                            '<div name="flipgorilla" class="flipgorilla" data-id="23837411469432551" style="width: 100%; height: 700px;">'+
                                                '<a href="http://www.flipgorilla.com/p/23837411469432551/show" target="_blank">'+
                                                    '<div class="progress progress-striped active">'+
                                                      '<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'+
                                                      '</div>'+
                                                    '</div>'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>';
                                $('#modalpdf3 .modal-content').html(html);
                                $.getScript("http://www.flipgorilla.com/fg.js");
                                $("#modalpdf3").modal();
                            });
                                });
                    </script>
                </div><!--end row pertama-->


            <!-- End Community -->
            </div> <!-- .items-container -->
    </div><!--/ .container -->
</section>


<section id="calendar-wrapper">
    <div class="container" style="max-width: 960px;">
        <div class="row">
            <div class="col-xs-12 col-md-6 pr0 pl0">
                <div id="my-calendar"></div>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-6 calendar-info pl0 pr0">
                <div class="calendar-info--inner">
                    <?php
                        $bulanInd = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        $entries = new Object_TasbihCalender_List();
                        $entries->setCondition("date >= ?", array(time()));
                        $entries->setLimit(1);
                        $entries->setOrderKey("date");
                        $entries->setOrder("asc");
                        if(count($entries)<0){
                            $entries = new Object_TasbihCalender_List();
                            $entries->setCondition("date <= ?", array(time()));
                            $entries->setLimit(1);
                            $entries->setOrderKey("date");
                            $entries->setOrder("asc");
                        }
                        foreach ($entries as $key) {
                            $d = date("d",strtotime($key->date));
                            $m = date("m",strtotime($key->date));
                            $y = date("Y",strtotime($key->date));
                            $title = $key->title;
                            $event = $key->event;
                        }
                    ?>
                    <div class="header">
                        <h2><strong>Kalender Hijriah</strong></h2>
                    </div>
                    <div class="body">
                        <h2 id="calendar-title"><?php echo $title; ?></h2>
                        <p><small id="calendar-date"><?php echo $d.' '.$bulanInd[$m-1].' '.$y; ?></small></p>
                        <div id="calendar-body">
                            <?php echo $event; ?>
                        </div>
                    </div><!--/ .body -->
                    <!--<a href="#" class="btn-edge"></a>-->
                </div><!--/.calendar-info-inner -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->

<?php
    $entries = new Object_TasbihCalender_List();
    $entries ->setOrderKey("date");
    $entries ->setOrder("desc");
    $count = count($entries);
    $no = 1;
    $temp = "";
    foreach ($entries as $key) {
        $date = date("Y-m-d",strtotime($key->date));
        $title = $key->title;
        $event = $key->event;
        if($no == 1)
            $a = array(array("date"=>$date,
                    "badge"=>true,
                    "title"=>$title,
                    "body"=>$event));
        else
            array_push($a,array("date"=>$date,
                    "badge"=>true,
                    "title"=>$title,
                    "body"=>$event)
                );
        $no++;
    }
    $encode = json_encode($a);

    $default = 0;
    $no = 1;
    $temp = "";
    $entries = new Object_DataPesertaAJFC_List();
    $entries ->setLimit(10);
    $entries->setOrderKey("o_creationDate");
    $entries->setOrder("desc");
    $entries->setCondition("statusSubmitKuis LIKE 1 AND approve LIKE 1");
    $count = count($entries);
    $sisa = 8 - $count;
    //echo $count;
    if($count < 8){
        $n = 1;
    }else{
        $n = 2;
    }
    while($n<=2){
        if($n==2){
            $entries = new Object_DataPesertaAJFCDefault_List();
            $entries->setLimit($sisa);
            $default = 1;
        }
        foreach ($entries as $key) {
            $img = (string)$key->fotoPeserta;
            $ptg = ucfirst(strtolower($key->satuTerpenting));
            $nama = ucwords(strtolower($key->namaLengkap));
            $tgll = date("Y", strtotime($key->tanggalLahir));
            $nyear = date("Y",time());
            $umur = $nyear-$tgll;
            $asl = ucwords(strtolower($key->tempatLahir));
            $prop = ucwords($key->propinsi);
            $content = $umur.' Tahun - '.$asl.', '.$prop;
            if($default==1){
                $content = "";
                $nama = $ptg;
                $ptg = "";
            }
            if($no == 1){
                $b = array(array(0=>"#",1=>$img));
                $c = array(array(0=>"#",1=>$nama,2=>$ptg,3=>$content));
            }else{
                array_push($b,array(0=>"#",1=>$img));
                if($no<=5)
                    array_push($c,array(0=>"/galeri-ajfc",1=>$nama,2=>$ptg,3=>$content));
            }
            if($no >= 10)
                break;
            $no++;
        }
        $n++;
    }

    $edaftar = json_encode($b);
    $eisi = json_encode($c);
?>
    <script>

        $(function(){

            /**
             * Zabuto Calendar
             * https://github.com/zabuto/calendar
             * Heavily Customized by Otoy
             */

            if( $( '#my-calendar' ).length > 0 )
            {
                /**
                 * Use PHP to populate json variable below or load the JSON
                 * using separate AJAX method
                 * Do not use Zabuto's native ajax data options
                 */

                var eventData = <?php echo $encode; ?>;

                <?php

                    /**
                     * Zabuto Calendar Show Previous and Next Hacks
                     */

                    $month          = date( 'm' );
                    $months         = array( '04', '05', '06', '07', '08' );
                    $months_key     = array_search( $month, $months );
                    $months_diff    = count( $months ) - ( 1 * $months_key );

                ?>

                $( '#my-calendar' ).zabuto_calendar({
                    language: "en",
                    today: true,
                    year: <?php echo date( 'Y' ); ?>,
                    month: <?php echo date( 'm' ); ?>,
                    show_previous: <?php echo $months_key; ?>,
                    show_next:  <?php echo $months_diff-1; ?>,
                    data: eventData,
                    // ajax: { url: "" }, You shall not use this feature
                    action: function(){ return myDateFunction(this.id); }
                });

                /*
                $( '#my-calendar' ).zabuto_calendar({
                    language: "en",
                    today: true,
                    year: 2015,
                    month: 4,
                    show_previous: false,
                    show_next: 4,
                    data: eventData,
                    // ajax: { url: "" }, You shall not use this feature
                    action: function(){ return myDateFunction(this.id); }
                });
                */

                function myDateFunction( id )
                {
                    var date = $( '#' + id ).data( 'date' );
                    var hasEvent = $( '#' + id ).data( 'hasEvent' );
                    if( hasEvent )
                    {
                        $.each(eventData, function(i, v){
                            if( v.date == date )
                            {
                                $( '#calendar-title' ).html( v.title );
                                $( '#calendar-date' ).html( convertDate( v.date ) );
                                $( '#calendar-body' ).html( v.body );
                                return false;
                            }
                        });
                    }
                }

                function convertDate( date )
                {
                    var date_array = date.split( "-" );
                    var months = [ "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember" ];
                    var y = date_array[ 0 ];
                    var m = date_array[ 1 ];
                    var d = date_array[ 2 ];
                    var output = ( d * 1 ) + ' ' + months[ ( m - 1 ) ] + ' ' + y;
                    return output;
                }

            }
        });
    </script>

</section><!--/ #calendar -->