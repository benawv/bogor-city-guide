<!--
<link rel="stylesheet" href="/website/static/css-ajfc/galeri/style.css" />
-->
<style type="text/css">
    #container .group{
        display: none;
    }
    #container .group.active{
        display: inherit;
    }
    #load-more{
        text-align: center;
        margin-top: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    #load-more:hover{
        background: rgba(198, 200, 199, 0.49);
    }
    #load-more a{
        margin-top:10px;
        padding:10px;
        color: white;
    }
    .click{
        cursor: pointer;
    }
</style>
<header>

    <div class="background">
        <?php $asets=Asset::getByPath('/ajfc/background/bggaleri.jpg');?>
        <img src="<?php echo $asets; ?>" alt="background-galeri" class="img-responsive" />
    </div><!--/ .background -->
    <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-3 col-md-offset-9">
                    <div class="box-dent mt32">
                        <div class="box-dent--inner">
                            <h2>Galeri Foto</h2>
                            <p></p>
                        </div><!--/ .box-dent--inner -->
                    </div>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container-fluid -->
    </div><!--/ .caption -->

</header>

<div class="page-wrapper-outer mb72">

<section class="page-wrapper gallery-wrapper mt32 mb72">
    <div class="container" id="container">
        <?php

            function limit_words($string, $word_limit)
				{
					$words = explode(" ",$string);
					return implode(" ",array_splice($words,0,$word_limit));
				}
				
			$posistion = "odd";
            $no = 1;
            $num = $default = 0;
            $nomer = $nurut = 1;
            $color = array('','blue','orange','blue-light','green','grey','maroon','purple');
            //$entries = new Object_DataPesertaAJFCDefault_List();
            $entries = new Object_DataPesertaAJFC_List();
            $entries->setLimit(30);
            $entries->setOrderKey("o_creationDate");
            $entries->setOrder("desc");
            $entries->setCondition("statusSubmitKuis LIKE 1 AND approve LIKE 1");
            $jml = count($entries);
			//echo $jml;
			//die();
            $sisa = 8 - $jml;
            //echo $jml.'sisa='.$sisa;
            if($jml >= 8){
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
                    $img = $key->fotoPeserta;
                    $ptg = limit_words(ucfirst(strtolower($key->satuTerpenting)),10);
                    $nama = ucwords(strtolower($key->namaLengkap));
                    $tgll = date("Y", strtotime($key->tanggalLahir));
                    $nyear = date("Y",time());
                    $umur = $nyear-$tgll;
                    $asl = ucwords(strtolower($key->tempatLahir));
                    $prop = ucwords($key->propinsi);
                    $content = $nama.', '.$umur.' Tahun<br />'.$asl.', '.$prop;
                    $nclass = "group".$nurut;

                    if($default==1){
                        $content = "";
                    }
                    if($nomer <=4){
                        $active = "active";
                    }else{
                        $active = "";
                    }
                    if($nomer == 4 && $no == 1)
                        $num = 0;


                    if($no == 1){
                        echo '<div class="row group '.$active.'" id="'.$nclass.'">';
                        if($posistion == "odd")
                            echo '
                                    <div class="col-xs-12 col-md-6 nopadding">
                                        <div class="gallery-item '.$color[$num++].'">
                                            <div class="row row-eq-height">
                                                <div class="col-xs-6 nopadding">
                                                    <a href="#" class="gallery-item--image">
                                                        <img src="'.$img.'" alt="">
                                                    </a>
                                                </div><!--/ .col-xs-12 -->
                                                <div class="col-xs-6 nopadding">
                                                    <div class="gallery-item--text">
                                                        <div class="gallery-item--text-inner">
                                                            <h3>"'.$ptg.'"</h3>
                                                            <p>'.$content.'</p>
                                                        </div><!--/ .gallery-item--text-inner -->
                                                    </div><!--/ .galery-item--text -->
                                                </div><!--/ .col-xs-12 -->
                                            </div><!--/ .row -->
                                        </div><!--/ .gallery-item -->
                                    </div><!--/ .col-xs-12 -->
                            ';
                        else
                            echo '
                                <div class="col-xs-12 col-md-6 nopadding">
                                    <div class="gallery-item '.$color[$num++].'">
                                        <div class="row row-eq-height">
                                            <div class="col-xs-6 nopadding">
                                                <div class="gallery-item--text">
                                                    <div class="gallery-item--text-inner">
                                                        <h3>"'.$ptg.'"</h3>
                                                        <p>'.$content.'</p>
                                                    </div><!--/ .gallery-item--text-inner -->
                                                </div><!--/ .galery-item--text -->
                                            </div><!--/ .col-xs-12 -->
                                            <div class="col-xs-6 nopadding">
                                                <a href="#" class="gallery-item--image">
                                                    <img src="'.$img.'" alt="">
                                                </a>
                                            </div><!--/ .col-xs-12 -->
                                        </div><!--/ .row -->
                                    </div><!--/ .gallery-item -->
                                </div><!--/ .col-xs-12 -->
                            ';
                        $no++;

                    }elseif($no == 2){
                        $no = 1;
                        if($posistion == "odd")
                            echo '
                                    <div class="col-xs-12 col-md-6 nopadding">
                                        <div class="gallery-item '.$color[$num++].'">
                                            <div class="row row-eq-height">
                                                <div class="col-xs-6 nopadding">
                                                    <a href="#" class="gallery-item--image">
                                                        <img src="'.$img.'" alt="">
                                                    </a>
                                                </div><!--/ .col-xs-12 -->
                                                <div class="col-xs-6 nopadding">
                                                    <div class="gallery-item--text">
                                                        <div class="gallery-item--text-inner">
                                                            <h3>"'.$ptg.'"</h3>
                                                            <p>'.$content.'</p>
                                                        </div><!--/ .gallery-item--text-inner -->
                                                    </div><!--/ .galery-item--text -->
                                                </div><!--/ .col-xs-12 -->
                                            </div><!--/ .row -->
                                        </div><!--/ .gallery-item -->
                                    </div><!--/ .col-xs-12 -->
                            ';
                        else
                            echo '
                                <div class="col-xs-12 col-md-6 nopadding">
                                    <div class="gallery-item '.$color[$num++].'">
                                        <div class="row row-eq-height">
                                            <div class="col-xs-6 nopadding">
                                                <div class="gallery-item--text">
                                                    <div class="gallery-item--text-inner">
                                                        <h3>"'.$ptg.'"</h3>
                                                        <p>'.$content.'</p>
                                                    </div><!--/ .gallery-item--text-inner -->
                                                </div><!--/ .galery-item--text -->
                                            </div><!--/ .col-xs-12 -->
                                            <div class="col-xs-6 nopadding">
                                                <a href="#" class="gallery-item--image">
                                                    <img src="'.$img.'" alt="">
                                                </a>
                                            </div><!--/ .col-xs-12 -->
                                        </div><!--/ .row -->
                                    </div><!--/ .gallery-item -->
                                </div><!--/ .col-xs-12 -->
                            ';
                        echo '</div>';

                        if($posistion=="odd")
                            $posistion = "even";
                        else
                            $posistion = "odd";
                        $nomer++;
                    }
                    $nurut++;
                }

                $n++;
            }
        if($jml>8){ ?>
            <a class="click"><div id="load-more"><img width="24px" src="/btn-plus.gif"></div></a>
        <?php } ?>
        <div style="clear: both;"></div>
    </div><!--/ .container -->
</section><!--/ .page-wrapper -->

</div><!--/ .page-wrapper-outer -->
<script>
    $(document).ready(function(){
        size_li = $("#container .img").size();
        console.log(size_li);
        x=3;

        var $group = $('.group');

        $(".click").click(function() {
            if ($(this).hasClass('disable')) return false;

            var $hidden = $group.filter(':hidden:first').addClass('active');
            if (!$hidden.next('.group').length) {
                $(this).addClass('disable');
                $(".click").hide();
            }
            //console.log('xx='+$hidden.next('.group').length);
            //setInterval(image, 3000);
			resizePageWrapper();
        });


    });
</script>
