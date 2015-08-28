<?php
//call session yang di buat di controller kalkulatortassbihControler function saveAction()
  $session = new Zend_Session_Namespace('tasbih');
  $sessionTasbih = new Zend_Session_Namespace('tasbih');
?>


<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">

<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/tasbih/tasbih.css" />
<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/wizard-step.css" />

<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">




<header>
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
            top: 40%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.5);
            font-size: 20px;
            pointer-events: none;
        }
        nav.main-navigation a.nav-item.blueA{ background: #003781; }
        nav.main-navigation a.nav-item.greenChat{ background: #B20065; }
        nav.main-navigation a.nav-item.blueA::before { background: #3122F9; }     
        nav.main-navigation a.nav-item.red::before {background: #780DEB;}
        body { text-align: left !important; }
        input[type="radio"] { display: block; }
    </style>

    <nav class="main-navigation" style="max-width:960px; margin:auto;">
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
            <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                <a href="http://agen.allianz.co.id" target="_blank" class="nav-item red users" style="background:#5F259F;">
                    <h4 style="font-size:18px"><small>Cari Agen</small></h4>
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                <a href="/produk/asuransi-syariah/tasbih/minta-informasi" class="nav-item grey chat">
                    <h4 style="font-size:18px"><small>Minta Informasi</small></h4>
                </a>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </nav><!--/ .main-navigation -->

</header>

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
                    .btn-tasbih{ background: #009a44 !important; }
                    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }

                    @media only screen and (min-width: 1140px){
                        body {
                          font-size: initial !important;
                        }
                    }

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
            a.calc-overlay-trigger {
              color: #009A44;
              cursor: help;
            }
                </style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">
    <div class="description">

        <div class="header-calc">
            <h1>ILUSTRASI PRODUK ALLIANZ TASBIH</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <div class="form-horizontal">
                    <div>
                            <!--h3 >Terima kasih Anda telah melakukan kalkulasi ilustrasi produk Allianz Tasbih. Hasil kalkulasi Anda akan dikirimkan ke email pribadi Anda. Silahkan isi field dibawah ini.</h3-->
                            <h3 ><strong>Sekarang, mohon isi terlebih dahulu data diri Anda.</strong></h3>
                        </div>
                        <br>
                        <!--label><strong>Data Diri</strong></label-->


                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Nama Anda?</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="nama" placeholder="Nama" required onfocusout="this.value=validateNama(this.value)">
                                <label id="notif-nama" style="display:none; color: #f00;">
                                    Mohon maaf Anda belum atau salah memasukkan nama
                                </label>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>No Handphone Anda? (Min. 8 digit)</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="0812345678" required onfocusout="this.value=validateNumber(this.value)">
                                <label id="notifNoHP" style="display:none; color: #f00;">
                                    Mohon maaf No HP yang Anda masukkan belum benar
                                </label>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Email Anda?</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com" required onfocusout="this.value=validateEMAIL(this.value)">
                                <label id="notifemail" style="display:none; color: #f00;">
                                    Mohon maaf email yang Anda masukkan belum benar
                                </label>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                    
                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Dari mana Anda mengetahui produk Allianz Tasbih?</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <select class="form-control" name="informasi" id="informasi">
                                    <option value="pilih">- Pilih -</option>
                                    <option value="Televisi">Televisi</option>
                                    <option value="Billboard">Billboard</option>
                                    <option value="Radio">Radio</option>
                                    <option value="Koran">Koran</option>
                                    <option value="Teman/kerabat">Teman/Kerabat</option>
                                    <option value="Agen">Agen Asuransi</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Google">Google</option>
                                    <option value="Youtube">Youtube</option>
                                </select>
                                <label id="notif-informasi" style="display:none; color: #f00;">
                                    Mohon maaf, informasi yang Anda masukan belum sesuai dengan ketentuan ilustrasi
                                </label>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->
                        

                    
                        <?php

                                    $getProv=new Object_Provinsi_List();
//                                    echo <pre>;
                                    $getProv->setOrderKey("provinsi");
                                    $getProv->setOrder("asc");?>
                                    
<!--                                    print_r($getProv);-->
                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Provinsi</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <select class="form-control" name="provinsi" id="provinsi">
                                    <option value = "pilih">-Pilih-</option>  
                                <?php foreach($getProv as $items){
                                ?>
                                    <option value= "<?php echo $items->o_id; ?> "><?php echo $items->provinsi; ?></option>
                                <?php } ?>
                                </select>
                                <label id="notif-provinsi" style="display:none; color: #f00;">
                                    Mohon maaf, provinsi yang Anda masukan belum sesuai dengan ketentuan ilustrasi
                                </label>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->
                    
                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Kota</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <select class="form-control" name="kota" id="kota">
                                    <option value = "pilih">-Pilih-</option>  
                                </select>
                                <label id="notifkota" style="display:none; color: #f00;">
                                    Mohon maaf, kota yang Anda masukan belum sesuai dengan ketentuan ilustrasi
                                </label>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->
                    
                    
                    
                        <?php
                            if($sessionTasbih->kat == "" || $sessionTasbih->kat == null || $sessionTasbih->kat == " ")
                            {
                                $kat = "direct";
                            }
                            else{
                                $kat = $sessionTasbih->kat;
                            }
                        ?>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <!--
                              <input type="button" class="kalkulasi btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Submit" name="next" value="Submit">
                                -->
                                <label>
                                    <input type="checkbox" class="privasi"> Saya telah membaca dan menerima <a href="/data-privasi/prinsip-privasi" target="_blank">prinsip privasi.</a>
                                    <span class="error"></span>
                                </label><br>

                                
                                <button type="button" class="kalkulasi btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Submit" name="next">
                                    <i class="fa fa-envelope-o"></i> Kirim
                                </button>
                            </div><!--/ .col-md-12 -->
                        </div><!--/ .form-group -->

                        <div class="col-md-12 note">
                            <h4 class="mb10"><strong>Keterangan: </strong></h4>
                            <ul class="mb30">
                                <li>Jika meninggal dunia karena sakit, <a href="#" class="calc-overlay-trigger"  data-toggle="modal" data-target="#ahliwaris">Ahli waris</a> akan mendapatkan Santunan meninggal Dunia 100%</li>
                                <li>Jika meninggal dunia di saat menunaikan Ibadah Haji maka akan mendapatkan Santunan meninggal Dunia sebesar 200%</li>
                                <li>Selama mengikuti asuransi Tertanggung akan mendapatkan perlindungan Medical Evakuasi</li>
                                <li>Masa asuransi adalah = masa pembayaran konstribusi / <a href="#" class="calc-overlay-trigger"  data-toggle="modal" data-target="#premi">premi</a> + 10 tahun + 1 tahun</li>
                                <li>Setelah selesai masa pembayaran kontribusi / <a href="#" class="calc-overlay-trigger"  data-toggle="modal" data-target="#premi">premi</a> pemegang polis akan mendapatkan tahapan dana pertama sebesar 50% dari santunan meninggal dunia</li>
                                <li>Setelah tahapan dana pertama pemegang polis akan mendapatkan tahapan dana kedua sebesar sisa saldo dana yang berkembang didalam produk ini</li>
                                <li>Untuk informasi lebih lengkap silahkan menghubungi Agen atau Kantor pemasaran Allianz terdekat</li>
                            </ul>
                        </div><!--/ .col-md-12 -->

                    
                </div>

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->

        <div class="clearfix"></div>

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

</div>

   <!--Modal-->
         <div class="modal fade" id="ahliwaris" tabindex="-1" role="dialog" aria-labelledby="ahliwarisLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="ahliwarisLabel">Ahli Waris</h4>
              </div>
              <div class="modal-body">
                <!--h3>5 Risiko Kehidupan</h3-->
                <p>Ahli waris adalah orang yang anda tunjuk untuk menerima uang pertanggungan Anda. Contoh :</p>
                <ol>
                    <li>Istri</li>
                    <li>Anak</li>
                    <li>Keluarga dekat</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

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

<script>
    // document.getElementById('tgl-hitung').value = (new Date()).format("m/dd/yy");
    window.onload = function(){

    }

    $(document).ready(function(){

        /**
         * Calculator Pop-Up
         */
        
        

        if( $( 'a.calc-overlay-trigger' ).length > 0 )
        {
            $( 'a.calc-overlay-trigger' ).click(function(e){
                e.preventDefault();
                var dataTarget = $( this ).attr( 'data-target' );
                if( $( '.calc-overlay#' + dataTarget ).length > 0 )
                {
                    $( '.calc-overlay#' + dataTarget ).stop().fadeIn( 'fast' );
                }
                return false;
            });
        }

        if( $( 'a.calc-overlay-close' ).length > 0 )
        {
            $( 'a.calc-overlay-close' ).click(function(e){
                e.preventDefault();
                $( this ).parent().parent().parent().stop().fadeOut( 'fast' );
                return false;
            });
        }

        /**
         * End Calculator Pop-Up
         */

        /*
         * jQueryUI DatePicker
         */
        
$('#provinsi').change(function(){
//        alert('test');
        var prov = $('#provinsi option:Selected').html();
//        alert(prov);
        if(prov == "-Pilih-"){
            document.getElementById('notifkota').style.display="block";
        }else{
//            alert('test');
            document.getElementById('notifkota').style.display="none";

            $.ajax({
                    url      : '/getprovinsi/',
                    type     : 'POST',
                    data     : {
                                'prov' : prov
                                },
                        success  : function(data){
    //                        console.log(data);
                            var entries = data;
                            var listLoc = jQuery.parseJSON(entries);
                            //console.log(listLoc);
                            $('#kota option').remove();
                            $('#kota').append('<option>-Pilih-</option>');
                            $.each(listLoc, function(i, item){
    //                            console.log(i+"  "+item);
                                $("#kota").append('<option value='+item.Kota+'>'+item.Kota+'</option>');
                            });
                       
                        }
                    
            });
//            location.reload();
        }
    });        

        $('#Submit').click(function() {
            
            if($(".privasi").is(':checked')){
                   
            }else{
                 alert('Anda harus menyetujui persyaratan dan ketentuan.');
                    return false;
            }


            var nama = $('#nama').val();
            var email = $('#email').val();
            var nohp = $('#nohp').val();
            var kota = $('#kota option:Selected').html();
            var informasi = $('#informasi option:Selected').val();
            var provinsi = $('#provinsi option:Selected').html();
            
            //alert(informasi);

            if( nama == '' ||email == '' || nohp == '' || nohp.length <= 8 || informasi == 'pilih' || provinsi == '-Pilih-' || kota == '-Pilih-'){
                    if( nama == ''  )
                        document.getElementById('notif-nama').style.display= 'block';
                    if( email == '' )
                        document.getElementById('notifemail').style.display= 'block';
                    if( nohp.length < 8 || nohp == '')
                        document.getElementById('notifNoHP').style.display='block';
                    if( informasi == 'pilih')
                        document.getElementById('notif-informasi').style.display='block';
                    if( kota == '-Pilih-' )
                        document.getElementById('notifkota').style.display="block";
                    if( provinsi == '-Pilih-')
                        document.getElementById('notif-provinsi').style.display="block";
                    alert("Mohon Periksa Inputan Anda");
            }else{

              $.ajax({
                  url      : '/tasbih-kedua/',
                  type     : 'POST',
                  data     : {
                              'nama' : nama,
                              'email' : email,
                              'nohp' : nohp,
                              'kategori' : '<?php echo $kat;?>',
                              'informasi' : informasi,
                              'kota' :kota,
                              'provinsi' : provinsi
                              },
                      success  : function(data){
                        //console.log(data);
                        //console.log(data);
                        $('.waiting-calc').hide();
                        $('.result-calc').show();
                        //$('#hasil').val(accounting.formatMoney(data, "Rp ", 0,","));
                        document.location.href = "/produk/asuransi-syariah/tasbih/kalkulator/thankyou";
                      }
              });
            }
        });

    });
    $(function() {
       $('#tgl-hitung, #tgl-lahir').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0"
        });
    });

    $('#informasi').on('change',function(){
        var informasi = $('#informasi option:Selected').val();
        
        if(informasi == 'pilih'){
            document.getElementById('notif-informasi').style.display= 'block';
        }
        else{
            document.getElementById('notif-informasi').style.display= 'none';
        }
    });
    
    $(document).ready(function(){


        $('#tgl-lahir').on('change', function() {

            var dob = new Date(this.value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            if(age >= 18) {
                $('#usia').val(age);
               document.getElementById('notif-tgllahir').style.display= 'none';
            }else{
                document.getElementById('notif-tgllahir').style.display= 'block';
                $('#usia').val('Umur Anda dibawah 18 tahun');
            }
        });
    });
    //Validate Number
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

    function validateNumber(value){
        if(value.length <= 8 ){
            document.getElementById('notifNoHP').style.display= 'block';
            return null;
        }else{
            document.getElementById('notifNoHP').style.display= 'none';
            return value;
        }
    };

    //Validate Email
    function validateEMAIL(surat)
    {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if(!re.test(surat))
        {
            document.getElementById('notifemail').style.display= 'block';
            return null;
        }
        else
        {
            document.getElementById('notifemail').style.display= 'none';
            return surat;
        }
    };

    function validateNama(nama){
        var re = /^[a-zA-Z ]*$/;
        if(!re.test(nama)){
            document.getElementById('notif-nama').style.display= 'block';
            return null;
        }else{
            document.getElementById('notif-nama').style.display= 'none';
            return nama;
        }
    };


            $( "#asuransi-jiwa" ).bind( "input", function() {
              var value = $("#asuransi-jiwa").val();
              var unconv = accounting.unformat(value,0,",");
                //alert(unconv);
                var conv = accounting.formatMoney(unconv, "Rp ", 0,",");
                $(this).val(conv);
                var text = accounting.unformat(conv,0,",");
                var retext = accounting.formatMoney(text, "Rp ", 0,",");
                //alert(conv);
                if(text >= 50000000){


                    document.getElementById('notif-asuransijiwa').style.display= 'none';
                    //$(this).val(retext);
                    //$(this).val(conv);
                }
                else{
                    document.getElementById('notif-asuransijiwa').style.display= 'block';
                                       // $(this).val('');
                }
            });

</script>

<!--
</div>
-->
