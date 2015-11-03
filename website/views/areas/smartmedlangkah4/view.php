<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">

<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/tasbih/tasbih.css" />
<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/wizard-step.css" />

<link rel="stylesheet" type="text/css" media="all" href="/website/ajfc/css/style.css" />

<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->

<link rel="stylesheet" href="/website/static/mobilku/wizard-step.css" type="text/css" media="all" />

<style>
    /* Override AJFC's feature box color */
    .box-dent--inner{ background: #009a44; }
    .box-dent::before{ border-top: 28px solid #009a44 !important;}
    .btn-tasbih{ background: #009a44 !important; border: none; border-radius:0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }

    .table-responsive
    {
        overflow: auto;
        margin: 0 35px;
        background: #f5f6f6;
    }

    .table-responsive > table
    {
        border-collapse: collapse;
        -moz-box-sizing: border-box;
    }

    .table-respsonsive > table > tbody > tr > td > a
    {
        color: #666 !important;
        text-decoration: none;
    }

    .table-respsonsive > table > tbody > tr > td > a:hover,
    .table-respsonsive > table > tbody > tr > td > a:focus
    {
        color: #666 !important;
        text-decoration: underline;
    }

    .table-responsive > table > tbody > tr > td > input,
    .table-responsive > table > tbody > tr > td > select
    {
        background: transparent;
        border: none !important; /*solid 1px #ddd !important;*/
        box-shadow: 0 0 0 transparent !important;
        padding: 4px 8px;
        font-size: small;
        width: 100%;
    }

    .table-responsive > table > tbody > tr > td > input::-webkit-input-placeholder {
        color: #111 !important;
        font-style: normal !important;
    }

    .table-responsive > table > tbody > tr > td > input:-moz-placeholder { /* Firefox 18- */
        color: #111 !important;
        font-style: normal !important;
    }

    .table-responsive > table > tbody > tr > td > input::-moz-placeholder {  /* Firefox 19+ */
        color: #111 !important;
        font-style: normal !important;
    }

    .table-responsive > table > tbody > tr > td > input:-ms-input-placeholder {
        color: #111 !important;
        font-style: normal !important;
    }

    .table-responsive > table th,
    .table-responsive > table td
    {
        white-space: nowrap !important;
        padding: 4px 8px;
        font-weight: normal;
        font-size: 14px;
        min-width: 72px;
    }

    .table-responsive > table > thead > tr > th
    {
        text-align: center;
        font-weight: bold !important;
        vertical-align: middle !important;
    }

    .table-responsive > table > tbody > tr:nth-child(odd) > td
    {
        background: #cdedf8;
    }

    .table-responsive > table > tbody > tr > td:first-child
    {
        text-align: center;
    }

    .custom-tab-nav
    {
        margin: 20px auto;
        padding: 0 20px;
    }

    .custom-tab-nav ul,
    .custom-tab-nav li
    {
        margin: 0 auto;
        padding: 0;
    }

    .custom-tab-nav ul > li
    {
        list-style: none;
        display: inline-block;
        position: relative;
        width: 24%;
        margin: 0 auto;
        overflow: hidden;
        opacity: 0.5;
    }

    .custom-tab-nav ul > li.active
    {
        opacity: 1;
    }

    .custom-tab-nav ul > li:not(:first-child) > a
    {
        padding-left: 48px;
        padding-right: 52px;
    }

    .custom-tab-nav ul > li:first-child > a
    {
        padding-right: 48px;
    }

    .custom-tab-nav ul > li:first-child::before
    {
        content: "";
        position: absolute;
        right: -24px;
        z-index: 2;
        height: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        border: solid 24px white;
        border-left-color: transparent;
    }

    .custom-tab-nav ul > li:not(:first-child)::before
    {
        content: "";
        position: absolute;
        left: 0;
        z-index: 2;
        height: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        border: solid 24px transparent;
        border-left-color: white;
    }

    .custom-tab-nav ul > li:not(:first-child)::after
    {
        content: "";
        position: absolute;
        right: -24px;
        z-index: 2;
        height: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        border: solid 24px white;
        border-left-color: transparent;
    }

    .custom-tab-nav ul > li > a
    {
        display: block;
        padding: 12px 24px;
        margin: 0 auto;
        position: relative;
        background: #009a44;
        color: white;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
    }

    .custom-tab-nav ul > li > a:hover,
    .custom-tab-nav ul > li > a:focus
    {
        outline: none;
        text-decoration: none;
    }

    .content-calc,
    .content-table
    {
        display: none;
        background: white;
    }

    .content-calc.active,
    .content-table.active
    {
        display: block;
    }

    .content-calc
    {
        padding: 0 20px;
    }

    /**
     * Responsive
     */

    @media ( max-width: 767px )
    {
        .custom-tab-nav ul > li
        {
            display: block;
            width: 100%;
            margin-bottom: 20px;
        }

        .custom-tab-nav ul > li > a
        {
            padding: 20px !important;
        }

        .custom-tab-nav ul > li::before,
        .custom-tab-nav ul > li::after
        {
            content: "";
            border: none;
            display: none;
        }

        .content-calc
        {
            padding: 0 20px !important;
        }

        .table-responsive
        {
            margin: 0 auto;
        }

    }
    .table-responsive > table > tbody > tr > td.tabletd{
        text-align: center;
        padding-top: 15px;
    }
    #planmelahirkan{
        position: absolute;
        right: -166px;
        top: -3px;
    }
    #planrawatjalan{
        position: absolute;
        right: -166px;
        top: -3px;
    }

</style>

<style>
    i.cursor-help {
       color: #4747FF;
       cursor: help;
    }
</style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>KALKULATOR ASURANSI SMARTMED</h1>
        </div><!--/ .header-calc -->

        <div class="row custom-tab-nav">
            <div class="col-xs-12">
                <p>
                    Kalkulator Asuransi SmartMed Premier akan membantu Anda mengetahui perkiraan jumlah premi yang akan dibayarkan. Silakan isi kolom yang tersedia sesuai kebutuhan Anda.
                </p>
                <ul>
                    <li class=""><a href="metode-pembayaran" style="font-size:10px;">Metode Pembayaran</a></li><!--  DON'T REMOVE THIS COMMENT
                    -->
                    <li><a href="pilih-manfaat">Pilih Manfaat</a></li>
                    <li><a href="data-anggota">Data Anggota</a></li>
                    <li class="active"><a href="data-diri">Data Diri</a></
                </ul><!--/ .custom-tab -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="content-calc custom-tab-item active" id="first">
            <div class="col-md-12">

                <form class="form-horizontal" role="form" METHOD="POST" action="smartmed-email">

                    <div class="form-group">
                        <div class="col-md-8">
                        </div><!--/ .col-md-4 -->
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Nama</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="input" class="form-control" required tabindex="1" name="namaPengirim" placeholder="Nama" id="namaPengirim">
                            
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>No. Ponsel</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="input" class="form-control" required tabindex="1" name="noHP" id="noHP" placeholder="No Ponsel">
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
                            <input type="input" class="form-control" required tabindex="1" name="email" id="email" placeholder="Email">
                            <label id="notifemail" style="display:none; color: #f00;">
                                Mohon maaf email yang Anda masukkan tidak valid
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Provinsi</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="1" name="provinsi" id="provinsi">
                                <option value="">Pilih provinsi</option>
                                <?php
                                    $getProv=new Object_Provinsi_List();
                                    //echo <pre>;
                                    $getProv->setOrderKey("provinsi");
                                    $getProv->setOrder("asc");
                                    foreach($getProv as $items){
                                ?>
                                    <option value= "<?php echo $items->o_id; ?> "><?php echo $items->provinsi; ?></option>
                                <?php } ?>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Kota/Kab.</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="1" name="kota" id="kota">
                                <option value ="">-Pilih-</option>  
                            </select>
                            <label id="notifkota" style="display:none; color: #f00;">
                                Mohon maaf, kota yang Anda masukan belum sesuai dengan ketentuan ilustrasi
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="kirim" name="kirim"  value="Kirim email" tabindex="1">
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->

    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
    $(document).ready(function(){
        ipp = getCookie("ipp");
        console.log("ipp="+ipp);
        if(!ipp){
            window.location = "metode-pembayaran";
        }
        if(!getCookie("planip")||getCookie("planip")==""){
            window.location = "metode-pembayaran";
        }else if(!getCookie("planrawatjalan")||getCookie("planrawatjalan")==""){
            window.location = "metode-pembayaran";
        }else if(!getCookie("ipp")||getCookie("ipp")==''){
            window.location = "metode-pembayaran";
        }


    });
    
    $("#kirim").on("click",function(){
        surat = $("input[name='email']").val();
        var re = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
        if(!re.test(surat))
        {
            document.getElementById('notifemail').style.display= 'block';
            return false;
        }
        else
        {
            document.getElementById('notifemail').style.display= 'none';
            return true;
        }

    });
 

    $('#noHP').bind("input", function(){
       var re = /^[0-9]*$/; 
        
        var value = $('#noHP').val();
        $(this).val(value);
        if(!re.test(value)){
            document.getElementById('notifNoHP').style.display= 'block';
            $('#noHP').val('');
        }else{
            document.getElementById('notifNoHP').style.display= 'none';
        }
        
    });
   $('#provinsi').change(function(){
        //alert('test');
        var prov = $('#provinsi option:Selected').html();
        //alert(prov);
        if(prov == "-Pilih-"){
            document.getElementById('notifkota').style.display="block";
        }else{
        //alert('test');
            document.getElementById('notifkota').style.display="none";

            $.ajax({
                    url      : '/getprovinsi/',
                    type     : 'POST',
                    data     : {
                                'prov' : prov
                                },
                        success  : function(data){
                            //console.log(data);
                            var entries = data;
                            var listLoc = jQuery.parseJSON(entries);
                            //console.log(listLoc);
                            $('#kota option').remove();
                            $('#kota').append('<option value="">-Pilih-</option>');
                            $.each(listLoc, function(i, item){
                                // console.log(item);
//                                console.log(item.Status);
//                                var status='"'+item.Status+'"';s
////                                alert(+item.Status+);
                                //if(item.Status == 'kota'){
                                    $("#kota").append('<option value='+item.id+'>'+item.Kota+'</option>');
//                                }else if(item.Status == 'kabupaten'){
//                                    $("#kota").append('<option value='+item.Kota+'>Kab. '+item.Kota+'</option>');
//
//                                }
                            });
                       
                        }
                    
            });
//            location.reload();
        }
    });

</script>

