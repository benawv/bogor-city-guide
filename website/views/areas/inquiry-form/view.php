<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>

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
                <a href="http://agen.imkepo.com" target="_blank" class="nav-item red users">
                    <h4 style="font-size:18px"><small>Cari Agen</small></h4>
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                <a href="/tasbih/inquiry-form" class="nav-item grey chat">
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
                </style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">
    <div class="description">

        <div class="header-calc" style="background-color:#707372;">
            <h1>FORM MINTA INFORMASI</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Nama Anda?</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="name" class="form-control" id="nama" placeholder="Nama" required onfocusout="this.value=validateNama(this.value)">
                            <label id="notif-nama" style="display:none; color: #f00;">
                                Mohon maaf Anda belum atau salah memasukkan nama
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Jenis Kelamin?</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <!--<INPUT TYPE="Radio" name="jenisKelamin" VALUE="l" style="display: block;">Pria</INPUT>
                            <INPUT TYPE="Radio" name="jenisKelamin" VALUE="p" style="display: block;">Wanita</INPUT>-->
                            <div class="row">
                                <div class="col-xs-6">
                                    <label class="radio-inline"><input type="Radio" style="display: block;" name="jenisKelamin" value="l" style="display:block">Pria</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="radio-inline"><input type="Radio" style="display: block;" name="jenisKelamin" value="p" style="display:block">Wanita</label>
                                </div>
                                <label id="notifJK" style="display:none; color: #f00;">
                                Mohon maaf Anda belum memilih jenis kelamin
                            </label>
                            </div><!--/ .row -->
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Tanggal Lahir Anda? <br>(Min. Usia 18 tahun)</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="DOB" value="" placeholder="Tanggal Lahir" />
                            <label id="notif-DOB" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>No Handphone Anda?(Min. 8 digit)</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="phone" class="form-control" id="nohp" name="nohp" placeholder="0812345678" required onfocusout="this.value=validateNumber(this.value)" />
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
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com" required onfocusout="this.value=validateEMAIL(this.value)" />
                            <label id="notifemail" style="display:none; color: #f00;">
                                Mohon maaf email yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Provinsi</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="provinsi" id="provinsi_id" required>
                                <?php

                                    $getProv=new Object_MarketingOfficeWilayah_List();
                                    $getProv->setOrderKey("namaWilayah");
                                    $getProv->setOrder("asc");
                                    foreach($getProv as $items){
                                ?>
                                <option value= "<?php echo $items->o_id; ?> "><?php echo $items->namaWilayah; ?></option>
                                <?php } ?>
                            </select>
                            <label id="notifProvinsi" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Pesan</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            
                            <textarea cols="35" rows="10" class="form-control" placeholder="Tuliskan Pesan Anda disini Maksimal 250 Kata" id="pesan" ></textarea>
                            <label id="notifemail" style="display:block; font-size:10px; color: #f00;">
                                Sisa karakter yang Anda tulis : <span id="counterString">250</span>  Kata
                            </label>
                            <label id="notifPesan" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan melebihi batas jumlah karakter
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-4">
                            <a href="/tasbih/thankyou-inquiry">
                                <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih inquiry-send" id="Submit" name="Submit" value="Kirim">
                            </a>
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>

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

<!--
</div>
--></div>
        <div style="clear:both; "></div>
        <div class="items-container"></div><!--/ .container -->
    </div>
</div><!--/ .container -->


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

        $(this).on('click', '.inquiry-send', function(e){

            var nama=$('#nama').val();
            var kelamin=$('input[name=jenisKelamin]:checked').val();
            var bod=$('#DOB').val();
            var email=$('#email').val();
            var nohp=$('#nohp').val();
            var prov=$('#provinsi_id').val();
            var pesan=$('#pesan').val();

            

            if (kelamin == 'p' || kelamin == 'l') {
                document.getElementById('notifJK').style.display= 'none';
            }
            else if( nama == '' || email == '' || nohp == '' || bod == '' ||  nohp.length <= 8 || prov == '' || pesan == '' || kelamin == null){
                    if( nama == ''  )
                        document.getElementById('notif-nama').style.display= 'block';
                    if( email == '' )
                        document.getElementById('notifemail').style.display= 'block';
                    if( bod == '')
                        document.getElementById('notif-DOB').style.display= 'block';
                    if( prov == '' )
                        document.getElementById('notif-tgllahir').style.display= 'block';
                    if( nohp.length <= 8 || nohp == '')
                        document.getElementById('notifNoHP').style.display='block';
                    if( pesan == '' )
                        document.getElementById('notifPesan').style.display= 'block';
                    if( kelamin == null)
                        document.getElementById('notifJK').style.display= 'block';
                    alert("Mohon Periksa Inputan Anda");
            }
            else{
            e.preventDefault();
            $.ajax({
                 "url" : "/inquiry-tasbih/",
                 "type" : "POST",
                 "data" : "nama="+ nama +
                          "&kelamin="+kelamin+
                          "&bod="+bod+
                          "&email="+email+
                          "&nohp="+nohp+
                          "&prov="+prov+
                          "&pesan="+pesan,
                 "success" : function(response){
                    if (response == "success") {
                        window.location = "/tasbih/thankyou-inquiry";
                    }
                 }
             });
            }
            e.preventDefault();
        });

        $('#DOB').on('change', function() {

            var dob = new Date(this.value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            if(age >= 18) {
                $('#usia').val(age);
               document.getElementById('notif-DOB').style.display= 'none';
            }else{
                document.getElementById('notif-DOB').style.display= 'block';
                $('#usia').val('Umur Anda dibawah 18 tahun');
            }
        });

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

        var d = new Date();
        var y = d.getFullYear();
        minyear = y - 55;
        maxyear = y - 18;
        range = minyear+':'+maxyear;
        def = '1/1/'+minyear;
        $('#DOB').datepicker({
            defaultDate: def,
            changeMonth: true,
            changeYear: true,
            yearRange: range
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
               document.getElementById('notifPesan').style.display= 'block';
        }else{
            document.getElementById('notifPesan').style.display= 'none';
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

    </div>

