<?php
//call session yang di buat di controller kalkulatortassbihControler function saveAction()
  $session = new Zend_Session_Namespace('tasbih');
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
                <a href="http://agen.allianz.co.id" target="_blank" class="nav-item red users">
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
                            <label><strong>Kontribusi Berkala/<a href="#" class="calc-overlay-trigger"  data-toggle="modal" data-target="#premi">Premi</a> pertahun</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                            <input type="text" class="form-control" id="kontribusi-berkala_view" placeholder="0" value="<?php echo 'Rp. '.number_format($session->Calculation,0,',','.'); ?>" readonly>
                            <input type="hidden" class="form-control" id="kontribusi-berkala" placeholder="0" value="<?php echo $session->Calculation; ?>" readonly>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <!--
                              <input type="button" class="kalkulasi btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Submit" name="next" value="Submit">
                                -->
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
    $(document).ready(function(){

        /**
         * Calculator Pop-Up
         */

        $('[data-toggle="tooltip"]').tooltip({
        placement : 'bottom'
    });
        
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
    var sex;
    $("input:radio[name=jenisKelamin]").click(function() {
            sex= $(this).val();
    });

        $('#Kalkulasi').click(function() {

        //get current date format //dd/yy/mm
        var fullDate = new Date()
        var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
        var currentDate = twoDigitMonth + "/" +fullDate.getDate() + "/" +  fullDate.getFullYear();

            var tanggalpembuatan = currentDate;
            var tanggallahir = $('#tgl-lahir').val();

            // var sex = $('#JenisKelamin option:Selected').val();
            var usia = $('#usia').val();
            var frekuensi = $('#Frekuensi option:Selected').val();
            console.log("rek"+frekuensi);
            var asuransijiwa = $('#asuransi-jiwa').val();
            var kontribusi = $('#masa-premi option:Selected').val();
            var unfnum = accounting.unformat(asuransijiwa,0,",");

        


            if( asuransijiwa == '' || unfnum < 50000000 ||tanggalpembuatan == '' || tanggallahir == '' || sex == null){
                    if( unfnum == '' || unfnum < 50000000 )
                        document.getElementById('notif-asuransijiwa').style.display= 'block';
                    if( tanggalpembuatan == '')
                        document.getElementById('notif-tglhitung').style.display= 'block';
                    if( tanggallahir == '' )
                        document.getElementById('notif-tgllahir').style.display= 'block';
                    if( sex == null )
                        document.getElementById('notif-jeniskelamin').style.display= 'block';
                    alert("Mohon Periksa Inputan Anda");
            }else{



        $.ajax({
                url      : '/kalkulator-tasbih/',
                type     : 'POST',
                data     : {
                            'tgl' : tanggalpembuatan,
                            'tanggallahir' : tanggallahir,
                            'sex' : sex,
                            'usia' : usia,
                            'frekuensi' : frekuensi,
                            'asuransijiwa' : unfnum,
                            'AJ' : asuransijiwa,
                            'kontribusi' : kontribusi
                            },
                    success  : function(data){
                    //console.log(data);
            $('.waiting-calc').hide();
                    $('#kontribusi-berkala').val(accounting.formatMoney(data, "Rp ", 0,","));
                   document.location.href='/produk/asuransi-syariah/tasbih/kalkulator/ilustrasi-identitas';
                }


            });


            }

        });

    });
    $(function() {
        var d = new Date();
        var y = d.getFullYear();
        minyear = y - 55;
        maxyear = y - 18;
        range = minyear+':'+maxyear;
        def = '1/1/'+minyear;
       $('#tgl-hitung, #tgl-lahir').datepicker({
            defaultDate: def,
            changeMonth: true,
            changeYear: true,
            yearRange: range
        });

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
