<?php
//call session yang di buat di controller kalkulatortassbihControler function saveAction()
if(!($this->editmode)){
  $session = new Zend_Session_Namespace('tasbih');
  $sessionTasbih = new Zend_Session_Namespace('tasbih');
$sessionDup = new Zend_Session_Namespace('duplic_tasbih');
            $date_tglBuat = $sessionDup->date_tglBuat;
            $date_tglLahir = $sessionDup->date_tglLahir;
            $JenisKelamin = $sessionDup->JenisKelamin;
            $Usia = $sessionDup->Usia;
            $frek = $sessionDup->Frekuensi;
            $AsuransiJiwa = $sessionDup->AsuransiJiwa;
            $AJ = $sessionDup->AJ;
            $Kontribusi = $sessionDup->Kontribusi;
            $Calculation = $sessionDup->Calculation;
			$kat = $sessionDup->kat;
?>

<script>
    var Buat = "<?php echo $date_tglBuat; ?>";
    var Lahir = "<?php echo $date_tglLahir; ?>";
    var JK = "<?php echo $JenisKelamin; ?>";
    var Usia = "<?php echo $Usia; ?>";
    var frek = "<?php echo $frek; ?>";
    var Asuransi = "<?php echo $AsuransiJiwa; ?>";
    var AJ = "<?php echo $AJ; ?>";
    var Kons = "<?php echo $Kontribusi; ?>";
    var Calc = "<?php echo $Calculation; ?>";
//    var Kat = "<?php echo $Calculation; ?>";
    
    if( Buat == "" || Lahir == "" || JK == "" || Usia == "" || frek == "" || Asuransi == "" || AJ == "" || Kons == "" ||Calc == ""){
        document.location.href = "/produk/asuransi-syariah/tasbih/kalkulator/ilustrasi";
    }

</script>
<?php } ?>
<?php Zend_Session::namespaceUnset('duplic_tasbih'); ?>
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
    
    
        nav.main-navigation a.nav-item.red::before {background: #780DEB;}
</style>

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

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;  margin:auto; !important">
                    <a href="http://agen.allianz.co.id" target="_blank" class="nav-item red users" style="background:#5F259F;">
                        <h4 style="font-size:18px"><small>Cari Agen</small></h4>
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

              <div class="header-calc">
                  <h1><i class="fa fa-calculator" style="font-size:20px !important; padding-right: 10px !important;"></i>ILUSTRASI PRODUK ALLIANZ TASBIH</h1>
              </div><!--/ .header-calc -->
              


              <div class="content-calc">
                  <div class="col-md-12">

                    <div class="form-box" id="notif-confirm">
                        <h1 style="text-align:center">TERIMA KASIH</h1>
                        <h3  style=" color:black; text-align:center;"><strong> <a href="#" class="calc-overlay-trigger"  data-toggle="modal" data-target="#premi" style="color:#009a44">Premi</a> yang harus Anda bayarkan sebesar <?php echo 'Rp. '.number_format($session->Calculation,0,',','.').' per tahun'; ?> 
                            
                            <?php
                                    if($session->Frekuensi == "Semesteran")
                                    {
                                        $nilai = $session->Calculation/2;
                                        echo " atau sebesar ".'Rp. '.number_format($nilai,0,',','.')." per semester.";
                                    }
                                    elseif($session->Frekuensi == "Triwulan")
                                    {
                                        $nilai = $session->Calculation/4;
                                        echo " atau sebesar ".'Rp. '.number_format($nilai,0,',','.')." per triwulan.";
                                    }
                                    else echo".";
                                    
                                ?>
                            
                            </strong></h3>
                        <center style="font-size: 12px;"><h3 style=" color:black; text-align:center;margin-top: 12px;"> Perhitungan ilustrasi produk Allianz Tasbih sudah dikirimkan ke alamat email Anda.</h3>
                        <h3 style=" color:black; text-align:center;">Total premi yang tertera belum disesuaikan dengan profil risiko Anda, silakan hubungi Agen untuk mendapatkan ilustrasi yang sesuai dengan profil risiko Anda. Klik tombol di bawah ini untuk mencari agen terdekat dari lokasi Anda.</h3>
                        </center>
                        <center>
                            <!--
                            <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="cari-agen" name="next" value="Cari Agen">
                            -->
                            <br/>
                            <button type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="cari-agen" name="next" style="background:#5F259F !important;"><i class="fa fa-users"></i> Cari Agen</button>
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

        <div class="modal fade" id="premi" tabindex="-1" role="dialog" aria-labelledby="premiLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="premiLabel">Premi</h4>
              </div>
              <div class="modal-body">
                <!--h3>5 Risiko Kehidupan</h3-->
                <p>Premi adalah iuran yang anda bayarkan secara berkala sesuai dengan periode pilihan Anda untuk mendapatkan uang pertangungan yang Anda inginkan.</p>
              </div>
            </div>
          </div>
        </div>

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
            window.open('/agent-locator/agen', '_blank');
              //$.ajax({
              //    url      : '/v1/api/calculator',
              //    type     : 'POST',
              //    crossDomain: true,
              //    data     : {
              //                'nama' : nama,
              //                'email' : email,
              //                'nohp' : nohp,
              //                'date_tglBuat': date_tglBuat,
              //                'date_tglLahir': date_tglLahir,
              //                'JenisKelamin': JenisKelamin ,
              //                'Usia': Usia,
              //                'Frekuensi': Frekuensi,
              //                'AsuransiJiwa' : AsuransiJiwa,
              //                'AJ' : AJ,
              //                'Kontribusi' : Kontribusi,
              //                'Calculation' : Calculation,
              //                'source' :'Kalkulator Tasbih User'
              //                },
              //    complete  : function(data){
              //           //console.log(data);
              //            window.open('/agent-locator/agen', '_blank');
              //            //document.location.href='/agent-locator';
              //        }
              //});
        });
    });



</script>


<!--
</div>
-->
