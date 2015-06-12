<style>
    /* Override AJFC's feature box color */
    .box-dent--inner{ background: #009a44; }
    .box-dent::before{ border-top: 28px solid #009a44 !important;}
    .btn-tasbih{ background: #009a44 !important; border: none !important; border-radius: 0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }
    .form-box{ border: solid 1px #ddd; padding: 16px 20px; margin-bottom: 32px; }
    .form-control{ border-radius: 0; }
    nav.main-navigation a.nav-item.home::after { content: "\f015"; }
    nav.main-navigation a.nav-item.chat::after { content: "\f003  "; }
    nav.main-navigation a.nav-item {
        display: block;
        position: relative;
        height: 50px;
        background: #d31f42;
    }
    nav.main-navigation a.nav-item::after {
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
    nav.main-navigation a.nav-item::after{
        font-size: 20px !important; /*icon di button*/
    }
    nav.main-navigation a.nav-item.blueA{ background: #003781; }
    nav.main-navigation a.nav-item.greenChat{ background: #B20065; }
    nav.main-navigation a.nav-item.blueA::before { background: #3122F9; }
    body { text-align: left; }
    .faq-item--answer
    {
        padding-left: 16px;
        padding-right: 16px;
    }
    .faq-item--question h4
    {
        color: #003781;
        font-weight: bold;
    }
    .content-widget
    {
        border-top: 1px solid #DDD;
        /*padding: 16px 20px;*/
        padding: 16px 0;
        margin-bottom: 32px;
    }
    .content-widget h4
    {
        margin-bottom: 8px;
    }
    .content-widget ul,
    .content-widget ol,
    .content-widget li,
    {
        margin: 0 auto !important;
        padding: 0 !important;
    }
    .content-widget li
    {
        margin: 0;
        padding: 0;
        /*display: block;*/
        list-style: circle;
        position: relative;
        line-height: 30px;
    }
    .content-widget li a
    {
        color: black;
        text-decoration: none;
        font-weight: bold;
        position: relative;
    }
    .content-widget li a:hover,
    .content-widget li a:focus
    {
        text-decoration: none;
        outline: none;
        color: #009a44;
    }
    .content-widget li a small,
    .content-widget li a span
    {
        color: #999;
        font-size: x-small;
        font-weight: normal;
    }
    .content-widget h4{
        color: #009a44;
        font-weight: bold;
        font-size: 17px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .news-date{
        color: #999;
        font-size: x-small;
        font-weight: normal;
        margin-top: -10px;
    }
    .force-margin {
        margin-left: -15px;
        margin-right: 15px;
    }
    .force-faq {
        padding: 25px 36px 0 10px !important;
    }
    @media (min-width: 1200px){
        .container{
            max-width: 989px;
        }
    }
    @media (max-width: 640px){
        .force-margin {
            margin-right: -15px !important;
        }
        .force-faq {
            padding: 25px 0 0 0 !important;
            margin-left: -15px;
        }
        .force-baca {
            margin-left: -15px !important;
            margin-left: -15px;
        }
    }
</style>


<?php if( $this->editmode ): ?>
<style>
    .navi{
        margin-bottom: 50px;
    }
    .flex-viewport{
        margin-bottom: 50px;
    }
    .wrapper-special{
        margin-bottom: 100px;
    }
    .navi li{
        float: none;
    }
</style>
<?php endif; ?>

<link rel="stylesheet" type="text/css" media="all" href="/website/ajfc/css/style.css" />

<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>

<?php if( !$this->editmode ): ?>
<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
<?php endif; ?>

<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
<?php if(!$this->editmode):?>
<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
<?php endif; ?>


<div class="container">
        <?php //echo $this->template("includes/breadcrumb.php")?>
        <span class="breadcrumb"><h2 class="title"><?php echo $this->document->getProperty('navigation_title');?></h2></span>
        
        <div class="heading clearfix pagenav">
            <?php echo $this->areablock('anchorarea', array('allowed' => array('anchor'))); ?>
        </div>


        <?php echo $this->areablock('bannerArea', array(
                    'allowed' => array('gallery-carousel','static-banner-wide')))?>

    <header style="margin: 0px -15px 0px -15px;">
        <nav class="main-navigation" style="max-width:960px; margin: 0 auto;">
            <div class="row">
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih" class="nav-item blueA home" style="height: 48px !important;">
                        <h4 style="font-size:18px"><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/info-produk" class="nav-item orange question" style="height: 48px !important;">
                        <h4 style="font-size:18px"><small>Informasi produk</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/kalkulator/ilustrasi" class="nav-item green sitemap" style="height: 48px !important;">
                        <h4 style="font-size:18px"><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.allianz.co.id" target="_blank" class="nav-item red users" style="height: 48px !important;">
                        <h4 style="font-size:18px"><small>Cari Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/minta-informasi" class="nav-item grey chat" style="height: 48px !important;">
                        <h4 style="font-size:18px"><small>Minta Informasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </nav><!--/ .main-navigation -->
    </header>


    <div class="container boxes-view">
        <div class="force-margin">

            <?php echo $this->areablock('container', array('allowed' => array(
                'mobilku','tasbih', 'tasbih-news', 'payment','smartmed','liveinsurance','thanksyou-liveinsurance'.'container-box2', 'community-tips2',
                'sections', 'sections-box-full', 'sections-tab', 'teks-tabs',
                'sections-video', 'sections-gallery',
                'sections-select', 'tekskanan60-imagekiri40_wizard',
                'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
                'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
                'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
                'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
                'tanya-jawab-tasbih',
                'smartlink-factsheet', 'syariah-factsheet',
                'pension-factsheet', 'saving-factsheet','multi-video',
                'smartwealth-factsheet', 'imagekiri-tabelkanan', 'sitemap', 'brosur','kalkulator-investasi','Tasbih-kedua','thankyou-tasbih','thankyou-inquiry'))); ?>

            <div style="clear:both; "></div>

        </div>
    </div><!--/ .container -->

    <?php if( !$this->editmode ): ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $( 'li.aktif .nav_menu div' ).css( 'display', 'none' );
            $( 'li .nav_menu .white_image' ).css( 'display', 'none' );
            $( 'li.aktif .nav_menu .white_image' ).css( 'display', 'block' );
            var hash = window.location.hash.substring(1);
            if( hash != '' )
            {
                var target = '#modal-' + hash;
                $( target ).modal( 'show' );
            }
            $( ".pagenav .navi li" ).click(function(){
                $(".pagenav .navi li").removeClass('aktif');
                $(".pagenav .navi li .nav_menu div").css('display','block');
                $(".pagenav .navi li .nav_menu .white_image").css('display','none');
                $(this).addClass('aktif');
                $('li.aktif .nav_menu div').css('display', 'none');
                $('li.aktif .nav_menu .white_image').css('display', 'block');
                var data = $(this).attr('class');
                var id = data.split(' ');
                //alert($(".heading").offset().top);
                if(Math.floor( $(".heading").offset().top)<=212)
                {
                    $('html, body').animate({scrollTop:$("#"+id[0]).offset().top-190}, 500);
                }
                else
                {
                    $('html, body').animate({scrollTop:$("#"+id[0]).offset().top-90}, 500);
                }
            });
        });
    </script>

    <?php endif; ?>


    <div class="page-wrapper-outer">
        <div class="container" style="max-width: 960px; background: white;">
            <div class="row">
                <div class="col-xs-12 col-md-12 pr0">

                    <?php echo $this->areablock('section_wgd', array('allowed' => array(
                        'sections', 'sections-box-full'))); ?>

                    <div style="clear:both; "></div>
                    <div class="main-content force-faq">   

                        <div id="tanyajawab" class="main-content--header">
                            <h2 class="mb12">
                                <?php if($this->editmode){ ?>
                                            Icon: <?php echo $this->image('icon_tanyajawab', array(
                                            'title'     => 'Image Size 31x31',
                                            'width'     => 100,
                                            'height'    => 100,
                                            'thumbnail' => 'icon')); 
                                             echo $this->input('title-tanyajawab', ["width" => 250]);
                                    } else{                                  
                                            echo $this->input('title-tanyajawab'); 
                                    ?>
                                            <div style="background-image: url('<?php echo $this->image('icon_tanyajawab')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div>
                                
                                <?php } ?>
                            </h2>
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
                                    </ol>
                                </div><!--/ .faq-item--question -->
                                <div class="faq-item--answer">
                                    <?php echo $this->wysiwyg('description')?>
                                </div><!--/ .faq-item--answer -->
                            </div><!--/ .faq-item -->
                            <?php } ?>
                        </div><!--/ .faq-wrapper -->


                        <div class="content-widget force-baca">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4><strong>BACA JUGA</strong></h4>
                                    <ol>
                                        <?php
                                            $entries = new Object_TasbihNews_List();
                                            $entries->setLimit(4);
                                            $entries->setOrderKey("o_creationDate");
                                            $entries->setOrder("desc");
                                            foreach ($entries as $key) {
                                         ?>
                                            <li>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                            </li>
                                        <?php } ?>
                                    </ol>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                        </div><!--/ .content-widget -->

                    </div><!--/ .main-content -->
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </div><!--/ .page-wrapper-outer -->

    


</div>