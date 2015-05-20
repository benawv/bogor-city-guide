
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>

<header>
    <style>
        /* Override AJFC's feature box color */
        .box-dent--inner{ background: #009a44; }
        .box-dent::before{ border-top: 28px solid #009a44 !important;}
        .social-feeds .social-feeds--box.twitter{ background: #009a44 !important;}
        .social-feeds .social-feeds--box.facebook{background: #73c898!important;}
        .backg{max-width:1140px; position:relative; margin:auto;}
        #backg{max-width:1140px; position:relative; margin:auto;}
        .foto{width:100%; height:auto;}
        #but-size{width:292.5px;}
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
  font-size: 45px;
  pointer-events: none;
}
 nav.main-navigation a.nav-item.blueA{
      background: #003781;}       
    </style>


<nav class="main-navigation" style="max-width:1140px; margin:auto;">
            <div class="row">

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/tasbih" class="nav-item blueA sitemap">
                        <h4><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/kalkulator/tasbih" class="nav-item green sitemap">
                        <h4><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/tanya-jawab" class="nav-item orange question">
                        <h4><small>Tanya Jawab Produk</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.imkepo.com" target="_blank" class="nav-item users">
                        <h4><small>Cari Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/inquiry-form" class="nav-item red users">
                        <h4><small>Inquiry Form</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div>
            <div class="row">
                
            </div>
    </nav>
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

</style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>INQUIRY FORM</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Nama</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="name" class="form-control" id="nama" placeholder="Nama" required /> 
                            <label id="notif-nama" style="display:none; color: #f00;">
                                Mohon maaf Anda belum atau salah memasukkan nama
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                   
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Jenis Kelamin</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="JenisKelamin" id="JenisKelamin">
                                <option value="p">Pria</option>
                                <option value="w">Wanita</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->


                    <div class="form-group">
                        <div class="col-md-4">
                            <label>DOB</label>
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
                            <label>No Handphone (Min. 8 digit)</label>
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
                            <label>Email</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required onfocusout="this.value=validateEMAIL(this.value)" />
                            <label id="notifemail" style="display:none; color: #f00;">
                                Mohon maaf email yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Provinsi</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="provinsi" id="provinsi_id" required>
                                <?php
                                    
                                    $getProv=new Object_MarketingOfficeWilayah_List();                                    
                                    foreach($getProv as $items){
                                        ?>
                                            <option value= "<?php echo $items->o_id; ?> "><?php echo $items->namaWilayah; ?></option>
                                        <?php
                                    }
                                
                                ?>
                                
                            
                            </select>
                            <label id="notifProvinsi" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Pesan</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <textarea cols="35" rows="10" placeholder="Tuliskan Pesan Anda disini Maksimal 250 Kata" id="pesan" ></textarea>
                            <label id="notifemail" style="display:block; font-size:10px; color: #f00;">
                                Sisa karakter yang Anda tulis : <span id="counterString">250</span>  Kata
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-4">
                            <a href="/tasbih/thankyou-inquiry">
                            <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih inquiry-send" id="Submit" name="Submit" value="Submit">
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>
                

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->
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
            var kelamin=$('#JenisKelamin').val();
            var bod=$('#DOB').val();
            var email=$('#email').val();
            var nohp=$('#nohp').val();
            var prov=$('#provinsi_id').val();
            
            //alert(bod);
            
            if( nama == '' || email == '' || nohp == '' || bod == '' ||  nohp.length <= 8 || prov == ''){
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
                    alert("Mohon Periksa Inputan Anda");
            }else{
            e.preventDefault();
            $.ajax({
                 "url" : "/inquriy-tasbih/",
                 "type" : "POST",
                 "data" : "nama="+ nama +
                          "&kelamin="+kelamin+
                          "&bod="+bod+
                          "&email="+email+
                          "&nohp="+nohp+
                          "&prov="+prov,
                 "success" : function(response){
                    alert("Inquiry Send");
                 }
             });
            }
            e.preventDefault();
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

	</div>
