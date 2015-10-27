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

        .box-dent--inner {
            background: #009a44;
        }
        .box-dent::before {
            border-top: 28px solid #009a44 !important;
        }
        .btn-tasbih {
            background: #009B49 !important;
            border: none !important;
            border-radius: 0;
        }
        .btn-tasbih:hover,
        .btn-tasbih:focus {
            background: #009B49 !important;
        }
        .form-box {
            border: solid 1px #ddd;
            padding: 16px 20px;
            margin-bottom: 32px;
        }
        .form-control {
            border-radius: 0;
        }
        nav.main-navigation a.nav-item.home::after {
            content: "\f015";
        }
        nav.main-navigation a.nav-item.chat::after {
            content: "\f003  ";
        }
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
        nav.main-navigation a.nav-item.blueA {
            background: #009B49;
        }
        nav.main-navigation a.nav-item.greenChat {
            background: #B20065;
        }
        nav.main-navigation a.nav-item.blueA::before {
            background: #3122F9;
        }
        .header-calc {
            background: #009B49;
        }
        .btn-tasbih {
            background: #009B49 !important;
        }
        .container .heading.clearfix.pagenav.nav-sticky,
        .container .heading.clearfix.pagenav {
            display: none;
        }
    </style>
</header>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>KALKULATOR ASURANSI SMARTMED</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <div class="form-box" id="notif-confirm">
                    <h1 style="text-align:center">Terima kasih telah menggunakan kalkulator SmartMed</h1>
                    <h3  style=" color:black; text-align:center;"><strong>Perhitungan ilustrasi produk SmartMed sudah dikirimkan ke alamat email Anda.</strong></h3>
                    <h3  style=" color:black; text-align:center;">Total premi yang tertera belum disesuaikan dengan profil risiko Anda, silakan hubungi Agen untuk mendapatkan ilustrasi yang sesuai dengan profil risiko Anda. Klik tombol di bawah ini untuk mencari agen terdekat dari lokasi Anda.</h3></br>
                    <br />
                    <center>
                        <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="hitung-kembali" name="hitung" value="Hitung Kembali">
                        <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="cari-agen" name="next" value="Cari Agen">
                    </center>
                </div><!--/ .form-box -->

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->
    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script>
    $(function(){
        $("#hitung-kembali").click(function(){
            window.location = "/kalkulator/smartmed/metode-pembayaran-dan-diskon";
        });
        $('#cari-agen').click(function() {
            
                            <?php $sessionCalc = new Zend_Session_Namespace(calc_smartmed); ?>
                            <?php $sessionCalc->status ="smartmed"; ?>
                            window.open('http://beta.allianz.co.id/agent-locator/agen', '_blank');
//                            alert("<?php echo $sessionCalc->status; ?>");
                            // var masukpemasaran = 'ya';

                            //  $.ajax({
                            //     url      : '/kantor-pemasaran',
                            //     type     : 'POST',
                            //     crossDomain: true,
                            //     data     : {
                            //                 'masukpemasaran' : masukpemasaran
                            //                 },
                            //     complete  : function(sukses){
                            //            // console.log(sukses);
                            //            // alert(masukpemasaran)
                            //            //document.location.href='/agent-locator';
                            //     }
                            // });

                          /*$.ajax({
                              url      : '/v1/api/calculator',
                              type     : 'POST',
                              crossDomain: true,
                              data     : {
                                          'premi' : premi,
                                          'nama' : nama,
                                          'email' : email,
                                          'nohp': nohp,
                                          'gender': gender,
                                          'cia': cia,
                                          'uangpertanggungan': uangpertanggungan,
                                          'smoking' :smoking,
                                          'tanggallahir' : tanggallahir,
                                          'usia' : usia
                                          'source' :'Kalkulator Life Insurance User'
                                          },
                              complete  : function(data){
                                     //console.log(data);
                                      
                                      //document.location.href='/agent-locator';
                            }
                          });*/
                       
        });
    });
</script>
