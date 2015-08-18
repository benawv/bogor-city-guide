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
