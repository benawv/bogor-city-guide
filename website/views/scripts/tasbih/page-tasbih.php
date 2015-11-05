<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css-ajfc/hotspot/ajfc.hotspot.css">

<!--<link rel="stylesheet" href="/website/ajfc/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/website/ajfc/css/bootstrap-custom-wcm/bootstrap.css">
<link rel="stylesheet" href="/website/ajfc/css/font-awesome.min.css">
<link rel="stylesheet" href="/website/ajfc/css/style.css">
<link rel="stylesheet" href="/website/ajfc/css/main.css">

<script src="/website/ajfc/js/zabuto_calendar.min.js"></script>
<script src="/website/ajfc/js/javascripts.js"></script>

<!--ROBBI-->
<style>
    @media only screen and (min-width:768px){
        #membername {
            display: block !important;
        }
    }
    @media only screen and (max-width:600px){
        .heading.clearfix.pagenav {
            display: none;
        }
        .backg{
            padding-top: 10px;
        }
    }
    
    .full-w.bg-white{
    
    width: 960px;
    height: 450px;
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 0px;
    margin-left: 195px;

    }
    
    p{
        text-align : left !important;
    }   
    h2{
        text-align : left !important;
    }
    h1{
        text-align : left !important;
    }
</style>

<?php echo $this->areablock(
    'halaman-tasbih',
    array(
        'allowed' => array(
//            'expire-page',
//            'home-tasbih',
//            'table-text',
//            'table-li',
//            'cari-agen-syariah',
//            'inquiry-form',
//            'tasbih-news-detail',
//            'tanya-jawab-tasbih',
//            'mobilku','tasbih', 
//            'tasbih-news', 'payment',
//            'smartmed','liveinsurance',
//            'thanksyou-liveinsurance',
//            'container-box2',
//            'community-tips2',
//            'sections',
//            'sections-box-full', 'sections-tab', 'teks-tabs',
//            'sections-video', 'sections-gallery',
//            'sections-select', 'tekskanan60-imagekiri40_wizard',
//            'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
//            'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
//            'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
//            'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
//            'tanya-jawab-tasbih',
//            'smartlink-factsheet', 'syariah-factsheet',
//            'pension-factsheet', 'saving-factsheet','multi-video',
//            'smartwealth-factsheet', 'imagekiri-tabelkanan', 'sitemap', 
//            'brosur','kalkulator-investasi','Tasbih-kedua','thankyou-tasbih','thankyou-inquiry',
            'kalender-tasbih','banner-tasbih','video-tasbih','button-tasbih','kalender-tasbih','artikel-tasbih')
    )
);
?>

<?php echo $this->areablock('container-tasbih',  array('allowed' => array('kalender-tasbih','banner-tasbih','video-tasbih','button-tasbih','kalender-tasbih','artikel-tasbih'))); ?>
<?php echo $this->areablock('footer-tasbih',  array('allowed' => array('kalender-tasbih','banner-tasbih','video-tasbih','button-tasbih','kalender-tasbih','artikel-tasbih','container-box2',
            'community-tips2',
            'sections',
            'sections-box-full', 'sections-tab', 'teks-tabs',
            'sections-video', 'sections-gallery',
            'sections-select', 'tekskanan60-imagekiri40_wizard',
            'tekskiri60-imagekanan40', 'tekskiri40-imagekanan60',
            'tekskanan40-imagekiri60', 'tekskanan60-imagekiri40',
            'tekskiri60-videokanan40', 'tekskiri40-videokanan60',
            'tekskanan40-videokiri60', 'tekskanan60-videokiri40',
            'tanya-jawab-tasbih','section-info'))); ?>
