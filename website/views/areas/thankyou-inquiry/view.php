
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>



<div class="header" style="margin-top:-20px;">



<div class="container boxes-view">

    <div>


<div class="pimcore_area_tasbih pimcore_area_content">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">

<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/tasbih/tasbih.css">
<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/wizard-step.css">

<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->

<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>

<style>
    /* Override AJFC's feature box color */
    .box-dent--inner{ background: #009a44; }
    .box-dent::before{ border-top: 28px solid #009a44 !important;}
    .btn-tasbih{ background: #009a44 !important; border: none !important; border-radius: 0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }
    .form-box{ border: solid 1px #ddd; padding: 16px 20px; margin-bottom: 32px; }
    .form-control{ border-radius: 0; }
        nav.main-navigation a.nav-item.home::after {
      content: "\f015"; }
    nav.main-navigation a.nav-item.chat::after {
      content: "\f003  "; }
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
        nav.main-navigation a.nav-item.blueA{
      background: #003781;}

    nav.main-navigation a.nav-item.greenChat{
      background: #B20065;}

      nav.main-navigation a.nav-item.blueA::before {
        background: #3122F9; }
    
    
        nav.main-navigation a.nav-item.red::before {background: #780DEB;}
</style>
<header style="margin: 48px auto 0;">
        <nav class="main-navigation" style="max-width:1140px; margin:auto;">
            <div class="row">

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih" class="nav-item blueA home">
                        <h4 style="font-size:18px"><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/info-produk" class="nav-item orange question">
                        <h4 style="font-size:18px"><small>Informasi produk</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/kalkulator/ilustrasi" class="nav-item green sitemap">
                        <h4 style="font-size:18px"><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; background:#5F259F; margin:auto; !important">
                    <a href="http://agen.allianz.co.id" target="_blank" class="nav-item red users">
                        <h4 style="font-size:18px"><small>Lokasi Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/minta-informasi" class="nav-item grey chat">
                        <h4 style="font-size:18px"><small>Minta Informasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div>
            <div class="row">

            </div>
    </nav>

</header>
<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc" style="background-color:#707372;">
            <h1>FORM MINTA INFORMASI</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <div class="form-box" id="notif-confirm">

                    <h3  style=" color:black;"><strong>Terima kasih Anda telah mengirimkan permintaan Anda. Anda akan segera dihubungi oleh agen Allianz Star Network atau temukan agen terdekat. </strong></h3>
                    <br />
                    <center>
                         <button type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="cari-agen" name="next" style="background : #5F259F !important;"><i class="fa fa-users"></i> Lokasi Agen</button>
                         <!--input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih " id="cari-agen" name="next" value="Cari Agen" -->
                    </center>
                </div>

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->
        <style>

            .content-widget
            {
                border-top: 1px solid #DDD;
                padding: 16px 20px;
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
        </style>

        <div class="content-widget">
            <div class="row">
                <div class="col-xs-12">
                    <h4><strong>BACA JUGA</strong></h4>
                    <ol>
                        <li>
                                                <?php
                                                    
                                                    $sideList[0] = new Object_TasbihNews_List();
                                                    $sideList[0]->setCondition("o_path LIKE '/tasbih-news/have-hajj-saving/have-insurance/'");
                                                    $sideList[0]->setOrderKey("RAND()", false);
                                                    $sideList[0]->setLimit(1);
                                                    //print_r($sideList[0]);
                                                    foreach ($sideList[0] as $key) {
                                                    //print_r($key);
                                                 ?>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                                <?php } ?>
                                            </li>
                                                                                    <li>
                                                <?php
                                                    
                                                    $sideList[1] = new Object_TasbihNews_List();
                                                    $sideList[1]->setCondition("o_path LIKE '/tasbih-news/have-hajj-saving/no-insurance/'");
                                                    $sideList[1]->setOrderKey("RAND()", false);
                                                    $sideList[1]->setLimit(1);
                                                    //print_r($sideList[0]);
                                                    foreach ($sideList[1] as $key) {
                                                    //print_r($key);
                                                 ?>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                                <?php } ?>
                                            </li>
                                                                                    <li>
                                                <?php
                                                    
                                                    $sideList[2] = new Object_TasbihNews_List();
                                                    $sideList[2]->setCondition("o_path LIKE '/tasbih-news/no-hajj-saving/have-insurance/'");
                                                    $sideList[2]->setOrderKey("RAND()", false);
                                                    $sideList[2]->setLimit(1);
                                                    //print_r($sideList[0]);
                                                    foreach ($sideList[2] as $key) {
                                                    //print_r($key);
                                                 ?>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                                <?php } ?>
                                            </li>
                                                                                    <li>
                                                <?php
                                                    
                                                    $sideList[3] = new Object_TasbihNews_List();
                                                    $sideList[3]->setCondition("o_path LIKE '/tasbih-news/no-hajj-saving/no-insurance/'");
                                                    $sideList[3]->setOrderKey("RAND()", false);
                                                    $sideList[3]->setLimit(1);
                                                    //print_r($sideList[0]);
                                                    foreach ($sideList[3] as $key) {
                                                    //print_r($key);
                                                 ?>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                                <?php } ?>
                                            </li>
                    </ol>
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .content-widget -->
    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">



<!--
</div>
--></div>
        <div style="clear:both; "></div>

        <div class="items-container">
                    </div><!--/ .container -->

    </div>
</div><!--/ .container -->

    </div>
<script type="text/javascript">
    $('#cari-agen').click(function() {

           <?php  $session = new Zend_Session_Namespace('inquiry'); ?>

            var nama = '<?php echo $session->nama; ?>';
            var JenisKelamin = '<?php echo $session->JenisKelamin; ?>';
            var tgl_lahir = '<?php echo $session->tgl_lahir; ?>';
            var no_hp = '<?php echo $session->no_hp; ?>';
            var email = '<?php echo $session->email; ?>';
            var provinsi = '<?php echo $session->provinsi; ?>';
            var pesan = '<?php echo $session->pesan; ?>';

            window.open(window.location.origin+'/agent-locator/agen', '_blank');
              //$.ajax({
              //    url      : '/v1/api/calculator',
              //    type     : 'POST',
              //    crossDomain: true,
              //    data     : {
              //                'nama' : nama,
              //                'email' : email,
              //                'no_hp' : no_hp,
              //                'date_tglLahir': tgl_lahir,
              //                'JenisKelamin': JenisKelamin,
              //                'provinsi': provinsi,
              //                'pesan': pesan,
              //                'source' :'Kalkulator Tasbih User'
              //                },
              //    complete  : function(data){
              //           //console.log(data);
              //            window.open(window.location.origin+'/agent-locator/agen', '_blank');
              //            //document.location.href='/agent-locator';
              //        }
              //});
        });
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

        //$('#cari-agen').click(function() {
        //
        //   <?php  $session = new Zend_Session_Namespace('inquiry'); ?>
        //
        //    var nama = '<?php echo $session->nama; ?>';
        //    var email = '<?php echo $session->email; ?>';
        //    var nohp = '<?php echo $session->nohp; ?>';
        //    var date_tglBuat = '<?php echo $session->date_tglBuat; ?>';
        //    var date_tglLahir = '<?php echo $session->date_tglLahir; ?>';
        //    var JenisKelamin = '<?php echo $session->JenisKelamin; ?>';
        //    var Usia = '<?php echo $session->Usia; ?>';
        //    var Frekuensi = '<?php echo $session->Frekuensi; ?>';
        //    var AsuransiJiwa = '<?php echo $session->AsuransiJiwa; ?>';
        //    var AJ = '<?php echo $session->AJ; ?>';
        //    var Kontribusi = '<?php echo $session->Kontribusi; ?>';
        //    var Calculation = '<?php echo $session->Calculation; ?>';
        //
        //      $.ajax({
        //          url      : '/v1/api/calculator',
        //          type     : 'POST',
        //          crossDomain: true,
        //          data     : {
        //                      'nama' : nama,
        //                      'email' : email,
        //                      'nohp' : nohp,
        //                      'date_tglBuat': date_tglBuat,
        //                      'date_tglLahir': date_tglLahir,
        //                      'JenisKelamin': JenisKelamin ,
        //                      'Usia': Usia,
        //                      'Frekuensi': Frekuensi,
        //                      'AsuransiJiwa' : AsuransiJiwa,
        //                      'AJ' : AJ,
        //                      'Kontribusi' : Kontribusi,
        //                      'Calculation' : Calculation,
        //                      'source' :'Kalkulator Tasbih User'
        //                      },
        //          complete  : function(data){
        //                 //console.log(data);
        //                  window.open('/agent-locator', '_blank');
        //                  //document.location.href='/agent-locator';
        //              }
        //      });
        //});

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

        $('#DOB').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0"
        });

    });

    function validateEMAIL(surat)
    {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if(!re.test(surat))
        {
            document.getElementById('notifemail').style.display= 'block';
            return surat;
        }
        else
        {
            document.getElementById('notifemail').style.display= 'none';
            return surat;
        }
    };

    $('#nohp').bind("input", function(){
       var re = /^[0-9]*$/;

        var value = $('#nohp').val();
        $(this).val(value);
        if(!re.test(value)){
            document.getElementById('notifNoHP').style.display= 'block';
            $('#nohp').val('');
        }else{
            document.getElementById('notifNoHP').style.display= 'none';
        }

    });
    $('#pesan').bind("input", function(){
        var n = $('#pesan').val().length;
        var max = 250;

        if(n > max){
               $('#pesan').attr('readonly','readonly');
        }

        $('#counterString').html(250-n);

//        var CountStr = parseInt($('#counterString').html());
//        var re = /^[a-zA-Z0-9]*$/;
//        var del = /^[\b]*$/;
//        var value= $(this).html();
//
//        if(del.value){
//            alert('test');
//            document.getElementById('notif-nama').style.disbled= 'false';
//            ++CountStr;
//            document.getElementById("counterString").textContent=CountStr;
//        }
//        else if(re.test(value)){
//            if(CountStr <= 0){
//                document.getElementById('notif-nama').style.readonly= true;
//                $('#counterString').val('0');
//            }
//                else if(CountStr >= 0  && CountStr <= 250){
//                document.getElementById('notif-nama').style.disbled= 'false';
//                --CountStr;
//                document.getElementById("counterString").textContent=CountStr;
//            }
//        }

    });



    function validateNumber(value){
        if(value.length <= 8 ){
            document.getElementById('notifNoHP').style.display= 'block';
            return value;
        }else{
            document.getElementById('notifNoHP').style.display= 'none';
            return value;
        }
    };
</script>