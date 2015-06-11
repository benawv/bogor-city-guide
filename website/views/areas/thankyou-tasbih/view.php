<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">

<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/tasbih/tasbih.css" />
<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/wizard-step.css" />

<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->

<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>

<header>
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
</style>

    <nav class="main-navigation" style="max-width:1140px; margin:auto;">
            <div class="row">

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/tasbih" class="nav-item blueA home">
                        <h4 style="font-size:18px"><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/kalkulator/ilustrasi" class="nav-item green sitemap">
                        <h4 style="font-size:18px"><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/info-produk" class="nav-item orange question">
                        <h4 style="font-size:18px"><small>Informasi produk</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.imkepo.com" target="_blank" class="nav-item red users">
                        <h4 style="font-size:18px"><small>Cari Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/minta-informasi" class="nav-item grey chat">
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

              <div class="header-calc">
                  <h1>ILUSTRASI PRODUK ALLIANZ TASBIH</h1>
              </div><!--/ .header-calc -->

              <div class="content-calc">
                  <div class="col-md-12">

                    <div class="form-box" id="notif-confirm">
                        <h1 style="text-align:center">TERIMA KASIH</h1>
                        <h3  style=" color:black; text-align:center;"><strong>Perhitungan ilustrasi produk Allianz Tasbih sudah dikirimkan ke alamat email Anda</strong></h3>
                        <h3 style=" color:black; text-align:center;"><strong>Temukan agen terdekat: </strong></h3>
                       <br />
                        <center>
                            <!--
                            <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="cari-agen" name="next" value="Cari Agen">
                            -->
                            <button type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="cari-agen" name="next"><i class="fa fa-users"></i> Cari Agen</button>
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
                        <?php
                            $entries = new Object_TasbihNews_List();
                            $entries->setLimit(4);
                            $entries->setOrderKey("o_creationDate");
                            $entries->setOrder("desc");
                            foreach ($entries as $key) {
                         ?>
                            <li>
                                <a href="tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                    <?php echo $key->title; ?>
                                </a>
                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                            </li>
                        <?php } ?>
                    </ol>
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .content-widget -->
    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">
<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script>

$(document).ready(function(){
        /*
         * jQueryUI DatePicker
         */

        $('#cari-agen').click(function() {

           <?php  $session = new Zend_Session_Namespace('tasbih'); ?>

            var nama = '<?php echo $session->nama; ?>';
            var email = '<?php echo $session->email; ?>';
            var nohp = '<?php echo $session->nohp; ?>';
            var date_tglBuat = '<?php echo $session->date_tglBuat; ?>';
            var date_tglLahir = '<?php echo $session->date_tglLahir; ?>';
            var JenisKelamin = '<?php echo $session->JenisKelamin; ?>';
            var Usia = '<?php echo $session->Usia; ?>';
            var Frekuensi = '<?php echo $session->Frekuensi; ?>';
            var AsuransiJiwa = '<?php echo $session->AsuransiJiwa; ?>';
            var AJ = '<?php echo $session->AJ; ?>';
            var Kontribusi = '<?php echo $session->Kontribusi; ?>';
            var Calculation = '<?php echo $session->Calculation; ?>';

              $.ajax({
                  url      : '/v1/api/calculator',
                  type     : 'POST',
                  crossDomain: true,
                  data     : {
                              'nama' : nama,
                              'email' : email,
                              'nohp' : nohp,
                              'date_tglBuat': date_tglBuat,
                              'date_tglLahir': date_tglLahir,
                              'JenisKelamin': JenisKelamin ,
                              'Usia': Usia,
                              'Frekuensi': Frekuensi,
                              'AsuransiJiwa' : AsuransiJiwa,
                              'AJ' : AJ,
                              'Kontribusi' : Kontribusi,
                              'Calculation' : Calculation,
                              'source' :'Kalkulator Tasbih User'
                              },
                  complete  : function(data){
                         //console.log(data);
                          window.open('/agent-locator', '_blank');
                          //document.location.href='/agent-locator';
                      }
              });
        });
    });



</script>


<!--
</div>
-->
