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

<div class="header" style="margin-top:-20px;">





</header>

<div class="container boxes-view">

    <div>

        <?php
            function limit_words($string, $word_limit)
            {
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
        ?>

        <?php echo $this->areablock('container', array('allowed' => array(
            'mobilku','tasbih', 'tasbih-news', 'payment','smartmed','liveinsurance','container-box2', 'community-tips2',
            'sections', 'sections-box-full', 'sections-tab', 'teks-tabs',
            'sections-video', 'sections-gallery',
            'sections-select', 'tekskanan60-imagekiri40_wizard',
            'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
            'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
            'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
            'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
            'smartlink-factsheet', 'syariah-factsheet',
            'pension-factsheet', 'saving-factsheet','multi-video',
            'smartwealth-factsheet', 'imagekiri-tabelkanan', 'sitemap', 'brosur','kalkulator-investasi','Tasbih-kedua','thankyou-tasbih','thankyou-inquiry','thankyou-liveinsurance'))); ?>

        <div style="clear:both; "></div>

        <div class="items-container">
            <?php
                echo $this->areablock(
                    'container2',
                    array(
                        'allowed' => array(
                            'container-box-static-section',
                            'container-box-carousel-section',
                            'container-box-carousel-text-section',
                            'jurnal-allianz',
                            'tahukah-anda'
                        )
                    )
                );
            ?>
        </div><!--/ .container -->

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
