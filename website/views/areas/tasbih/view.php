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
      background: #707372;}

    nav.main-navigation a.nav-item.greenChat::before{
      background: #3C3941;}

      nav.main-navigation a.nav-item.blueA::before {
        background: #3122F9; }

    input[type="radio"] {
  display: block;
}
.icon-submit{
    width: 20px;
    position: absolute;
    top: 5px;
    margin-left: 15px;
}
.font-submit{
    position: absolute;
    top: 12px;
    margin-left: -12px;
}

    @media screen and (max-width: 1024px) {

        .row{
            margin-left: -15px !important;
            margin-right: -15px !important;
        }

    }

    @media only screen and (max-width:775px){
        .btn img{
            height: 20px;
            width: 15px;
            margin-left: 5px;
            top: 10px;
        }
        .row{
            margin-left: -15px !important;
            margin-right: -15px !important;
        }
    }

    @media only screen and (max-width:640px){
        .kalkulasi{
            width: 100%;
            text-align: center;
        }
        .kalkulasi img{
            display: inherit;
            margin-left:-34px;
        }

    }
    @media only screen and (max-width:320px){
        .kalkulasi{
            text-align: left;
        }
        .kalkulasi font{
            margin-left: 90px;
        }
        .kalkulasi img{
            margin-left: 70px;
        }
    }

    a.calc-overlay-trigger
    {
        color: #009A44; /*inherit */;
        cursor: help;
    }

     a.calc-overlay-trigger:hover
    {
        color: #009A44; /*inherit */;
        text-decoration: underline;
    }

</style>


    <nav class="main-navigation" style="max-width:1140px; margin:auto;">
            <div class="row">

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/tasbih" class="nav-item blueA home">
                        <h4 style="font-size:18px"><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/kalkulator/tasbih" class="nav-item green sitemap">
                        <h4 style="font-size:18px"><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/tanya-jawab" class="nav-item orange question">
                        <h4 style="font-size:18px"><small>Informasi produk</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.imkepo.com" target="_blank" class="nav-item users">
                        <h4 style="font-size:18px"><small>Cari Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/inquiry-form" class="nav-item grey chat">
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

                <div class="form-horizontal">

                    <div class="form-box">

                        <label><strong>Ilustrasi ini berguna untuk menghitung perkiraan biaya yang Anda bayarkan untuk melindungi diri Anda, jika terjadi risiko yang Anda alami di masa yang akan datang</strong></label>
                        <!-- Modal -->
                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Masukan tanggal lahir Anda<br>(Minimum usia dari 18 tahun sampai 55 tahun)</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="tgl-lahir" name="tgl-lahir" placeholder="Tanggal Lahir"  required>
                                <label id="notif-tgllahir" style="display:none; color: #f00;">
                                    Mohon maaf, umur yang Anda masukan belum sesuai dengan ketentuan ilustrasi
                                </label>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Jenis Kelamin Anda adalah?</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label class="radio-inline"><input name="jenisKelamin" value="l" type="Radio">Pria</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="radio-inline"><input name="jenisKelamin" value="p" type="Radio">Wanita</label>
                                    </div>
                                </div>
                            </div>
                        </div><!--/ .form-group -->

                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Berarti usia Anda adalah?</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="usia" placeholder="Usia (Tahun)" readonly>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Pilihlah <a href="#" class="calc-overlay-trigger" data-toggle="modal" data-target="#termin" >termin</a> Pembayaran Anda</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <select class="form-control" name="Frekuensi" id="Frekuensi">
                                    <option value="3">Triwulan</option>
                                    <option value="2">Semesteran</option>
                                    <option value="1">Tahunan</option>
                                </select>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                    </div><!--/ .form-box -->
                    <div class="form-box">

                        <label><strong>Santunan Meninggal Dunia</strong></label>

                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Berapa <a href="#" class="calc-overlay-trigger" data-toggle="modal" data-target="#uangpertanggungan">uang pertanggungan</a> yang Anda butuhkan bila terjadi <a href="#" class="calc-overlay-trigger" data-toggle="modal" data-target="#risiko">risiko</a>?</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">

                                <input type="text" class="form-control" id="asuransi-jiwa" value="" placeholder="Min Rp.50.000.000">
                                <label id="notif-asuransijiwa" style="display:none; color: #f00;">
                                    Mohon maaf uang pertanggungan yang Anda masukan kurang dari Rp. 50,000,000.-
                                </label>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                        <div class="form-group">
                            <div class="col-md-4">
                                <label><strong>Berapa lama pembayaran <a href="#" class="calc-overlay-trigger" data-toggle="modal" data-target="#premi" >premi</a> yang anda inginkan</strong></label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                                <select class="form-control" name="masa-premi" id="masa-premi">
                                    <option value="5">5 tahun</option>
                                    <option value="10">10 tahun</option>
                                    <option value="15">15 tahun</option>
                                </select>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                    </div><!--/ .form-box -->

                    <div class="form-box text-center waiting-calc" style="display: none;">
                        <i class="fa fa-refresh fa-3x fa-spin"></i>
                    </div><!--/ .form-box -->

                    <div class="form-box result-calc" style="display:none; ">
                        <label><strong>Setoran Tahunan</strong></label>

                        <div class="form-group">
                            <div class="col-md-4">
                            <label>Massa Pembayaran Premi Pertahun</label>
                            </div><!--/ .col-md-4 -->
                            <div class="col-md-4">
                            <input type="email" class="form-control" id="kontribusi-berkala" placeholder="0" readonly>
                            </div><!--/ .col-md-4 -->
                        </div><!--/ .form-group -->

                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4 text-center">
                            <button class="kalkulasi btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Kalkulasi" name="next" style="background-color:#009a44"><i class="fa fa-chevron-right" style="border-radius: 9999px; min-width: 16px; min-height: 16px; line-height: 16px; background: white; color: #009A44; font-size: 8px;"></i>&nbsp;Selanjutnya </button>
                            <!--
                            <?php $asets=Asset::getByPath('/icon-tasbih/calculator.png');?>
                            <button class="kalkulasi btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih"
                            id="Kalkulasi" name="next" style="background-color:#009a44">
                            <img src="<?php echo $asets; ?>" alt="background-galeri" class="img-responsive icon-submit" />
                            <font class="font-submit">Selanjutnya</font></button>
                            -->
                            <!-- <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Kalkulasi" name="next" value="Kalkulasi" style="background-color:#009a44"> -->
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </div>
            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->

        <!--Modal-->


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

        <div class="modal fade" id="termin" tabindex="-1" role="dialog" aria-labelledby="terminLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="terminLabel">Termin</h4>
              </div>
              <div class="modal-body">
                <!--h3>5 Risiko Kehidupan</h3-->
                <p>Termin pembayaran hanya tersedia untuk pembayaran triwulan, semesteran, tahunan. tidak menyediakan pembayaran bulanan.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="uangpertanggungan" tabindex="-1" role="dialog" aria-labelledby="uangpertanggunganLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="uangpertanggunganLabel">Uang Pertanggungan</h4>
              </div>
              <div class="modal-body">
                <!--h3>5 Risiko Kehidupan</h3-->
                <p>Uang pertanggungan yang akan diberikan bila terjadi risiko pada tertanggung.</p>
              </div>
            </div>
          </div>
        </div>


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

            .modal-body ol>li{
                padding-bottom: 0px;
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

            //alert(unfnum);


            if( asuransijiwa == '' || unfnum <= 50000000 ||tanggalpembuatan == '' || tanggallahir == ''){
                    if( unfnum == '' || unfnum < 50000000 )
                        document.getElementById('notif-asuransijiwa').style.display= 'block';
                    if( tanggalpembuatan == '')
                        document.getElementById('notif-tglhitung').style.display= 'block';
                    if( tanggallahir == '' )
                        document.getElementById('notif-tgllahir').style.display= 'block';
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
                   document.location.href='/tasbih/tasbih-kedua';
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
        var re = /^[^\\\/&]*$/;
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
