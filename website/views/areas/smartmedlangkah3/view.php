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
    .hide{
        display: none;
    }
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
                    <li><a href="#first" style="font-size:10px;">Pembayaran dan Diskon</a></li><!--  DON'T REMOVE THIS COMMENT
                    -->
                    <li><a href="#second">Pilih Manfaat</a></li>
                    <li class="active"><a href="#third">Data Anggota</a></li>
                    <li><a href="#fourth">Data Diri</a></
                </ul><!--/ .custom-tab -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="content-calc custom-tab-item active" id="first">

            <div class="col-md-12">

                <form class="form-horizontal" METHOD="POST" role="form">

                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="title"><strong>Data Anggota</strong></label>
                        </div><!--/ .col-md-4 -->
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Nama</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Name" id="name" tabindex="1" required>
                            <label id="notif4" style="display:none; color:red; font-weight:bold;">Nama Harus diisi.</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Jenis Kelamin</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="1" id="sex">
                                <option value="m">Pria</option>
                                <option value="f">Wanita</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Tanggal Lahir</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control date" id="dob" name="dob" placeholder="Tanggal Lahir" tabindex="1" required>
                            <label id="notif5" style="display:none; color:red; font-weight:bold;">Tanggal Lahir Harus diisi.</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Tanggal Kalkulasi</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control date" id="cd" name="cd" placeholder="Tanggal Kalkulasi" tabindex="1" required>
                            <label id="notif6" style="display:none; color:red;">Tanggal Kalkulasi Harus diisi.</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Add" name="next" tabindex="1">Tambah ke tabel</button>
                            <input type="submit" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="kirim" name="kirim" value="Kirim Email" tabindex="1">
                        </div><!--/ .col-md-12 -->
                        <div class="col-md-8 col-md-offset-4">
                            <span class="hide warning-emptydata">Isi dahulu data anggota sebelum kirim email</span>
                        </div>
                    </div><!--/ .form-group -->

                </form>

            </div><!--/ .col-md-12 -->

            <div class="row" style="margin: 20px auto 0; padding: 0;">
                <div class="col-xs-12">
                    <div class="table-responsive" style="margin: 0 auto;">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0" border="0">
                        <thead>
                            <tr>
                                <th rowspan="2">Pilihan</th>
                                <th rowspan="2" width="" class="hide">Nomor</th>
                                <th rowspan="2" width="">Nama</th>
                                <th rowspan="2" width="">Jenis Kelamin</th>
                                <th rowspan="2" width="">Tanggal Lahir</th>
                                <th rowspan="2" width="">Tanggal Kalkulasi</th>
                                <th rowspan="2" width="" class="hide">Usia</th>
                                <th rowspan="2" width="" class="hide">Status</th>
                                <th rowspan="2" width="">Plan</th>
                                <th rowspan="2" width="" class="hide">Plan Melahirkan</th>
                                <th rowspan="2" width="" class="hide">Plan Rawat Jalan & Rawat Gigi</th>
                                <th rowspan="2" width="" class="hide">UW Loading</th>
                                <th colspan="3" class="text-center hide">Premi</th>
                                <th rowspan="2" width="" class="hide">Total Premi</th>
                            </tr>
                            <tr>
                                <!-- <th>Premi Rawat Inap</th>
                                <th>Premi Melahirkan</th>
                                <th>Premi Rawat Jalan & Rawat Gigi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="16" id="j_premium" class="text-right hide">0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right hide">Biaya Materai</td>
                                <td class="text-right hide">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right hide">Biaya Polis</td>
                                <td class="text-right hide">Rp 30.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right hide">Family Discount</td>
                                <td class="text-right hide">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right hide">Total Jumlah yang Dibayarkan</td>
                                <td class="text-right hide">Rp000.000.000,0</td>
                            </tr>
                        </tfoot>
                    </table>

                    </div><!--/ .table-respsonsive -->
                </div><!--/ .col-xs-12 -->

                <div class="col-md-12 note">
                    <h4 class="mb10"><strong>Note: </strong></h4>
                    <ul class="mb30">
                        <li>Uw Loading yang tercantum dalam kalkulator ilustrasi ini sebesar 0%.</li>
                        <li>Uw Loading akan dihitung oleh bagian Underwriter, karena berpengaruh terhadap jenis kelamin, usia dan risiko lainnya.</li>
                    </ul>
                </div><!--/ .col-md-12 -->
            </div><!--/ .row -->
        </div><!--/ .content-table -->

    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
    $(document).on('change',"#dob", function(){ //bind to all instances of class "date". 
        var date = $("input[name='dob']").datepicker('getDate'),
            day  = date.getDate(),
            month = date.getMonth() + 1,
            year =  date.getFullYear();
            yearnext =  date.getFullYear()+50;
            range = year+":"+yearnext;
        // console.log(range);

        $("#cd").datepicker('setDate', null);
        $("#cd").datepicker("destroy");
        $("#cd").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: range,
            minDate: new Date()
        });

    });

    $(document).ready(function(){

        $("#cd").datepicker({
            changeMonth: true,
            changeYear: true,
            minDate: new Date()
        });
        $("#dob").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0",
            maxDate: new Date()
        });
    });

    $(document).ready(function(){

        if(!getCookie("planip")){
            window.location = "langkah1";
        }else if(!getCookie("planrawatjalan")){
            window.location = "langkah2";
        }
    });

    $(function(){

        /**
         * jQuery DatePicker
         */

        if( $( '.date' ).length > 0 )
        {
            $( '.date' ).datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0"
            });
        }


        // dob cd
        
        /**
         * Custom Tab
         */

        var btn_calculate_text  = $( '.content-calc input[type="submit"]' ).val();
        var second_tab_enabled = false;

        if( $( '.custom-tab-nav' ).length > 0 )
        {
            $( '.custom-tab-nav a' ).each(function(index, value){
                $( this ).click(function(e){
                    e.preventDefault();
                    var href = $( this ).attr( 'href' );

                    $( '.content-calc input[type="submit"]' ).attr( 'value', btn_calculate_text );
                    $( '.content-calc input[type="submit"]' ).removeClass( 'disabled' );

                    if( ( index != 1 ) || ( ( index == 1 ) && second_tab_enabled ) )
                    {
                        if( $( '.custom-tab-item' + href ).length > 0 )
                        {
                            $( '.custom-tab-nav li' ).removeClass( 'active' );
                            $( this ).parent().addClass( 'active' );
                            $( '.custom-tab-item.active' ).stop().fadeOut( 'fast', function(){
                                $( this ).removeClass( 'active' );
                                $( '.custom-tab-item' + href ).stop().fadeIn( 'fast', function(){
                                    $( '.custom-tab-item' + href ).addClass( 'active' );
                                });
                            });
                        }
                    }
                    else
                    {
                        // do nothing
                    }
                    return false;
                });
            });
        }

        /**
         * Trigger second tab navigation
         */

        if( $( '.content-calc input[type="submit"]' ).length > 0 )
        {
            $( '.content-calc input[type="submit"]' ).click(function(e){
                e.preventDefault();

                if( !second_tab_enabled )
                {
                    second_tab_enabled = true;
                }

                /**
                 * Taro proses AJAX dimarih, kalo success panggil trigger-nya
                 * masih simulasi pake setTimeout
                 */
                var planip = $("#planip").val();
                var planmat = $("#planmat").val();
                var planop = $("#planop_den").val();
                // var method = $("#payment_methods").val();
                // alert(method);
                if(planip == 'pilih'){
                    document.getElementById('notif').style.display='block';
                    document.getElementById("planip").focus();
                }else if(planmat == 'pilih'){
                    document.getElementById('notif2').style.display='block';
                    document.getElementById("planmat").focus();
                }else if(planop == 'pilih'){
                    document.getElementById('notif3').style.display='block';
                    document.getElementById("planop_den").focus();
                }else{
                $( this ).attr( 'value', 'Loading...' );
                $( this ).addClass( 'disabled' );
                setTimeout(function(){
                    $( '.custom-tab-nav ul > li:nth-child(2) > a' ).trigger( 'click' );
                }, 1000 );
                }
                return false;
            });
        }

    });

    $(document).on('focus',".date", function(){ //bind to all instances of class "date". 
        // console.log('klik');
        $(".date").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0"
            });
    });

    function selisih(dob, cd){
        // varibel miliday sebagai pembagi untuk menghasilkan hari
        var miliday = 24 * 60 * 60 * 1000 * 365;
        //buat object Date
        var tanggal1 = new Date(dob);
        var tanggal2 = new Date(cd);
        // Date.parse akan menghasilkan nilai bernilai integer dalam bentuk milisecond
        var tglPertama = Date.parse(tanggal1);
        var tglKedua = Date.parse(tanggal2);
        var selisih = (tglKedua - tglPertama) / miliday;

        // console.log("selisih="+tglPertama+"-"+tglKedua);
        return selisih;
    }

    /*GET COOKIE*/
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
        }
        return "";
    }

    /*set COOKIE 5 days*/
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    
    function kalk(age,sex,code,coshare,withval,plan,uwl){
        var payment = getCookie("pembayaran");
        var fd = getCookie("fd");
        var ncd = getCookie("ncd");
        // var uwl = $("#uwl").val();
        var value = 0;
        var form_data = {
                payment: payment,
                fd: fd,
                ncd: ncd,
                age: age,
                sex: sex,
                code: code,
                coshare: coshare,
                uwl: uwl,
                plan: plan,
                ajax:1
        };
        $.ajax({
                async: false,
                url : "calc_smartmed/"+payment+"_"+fd+"_"+ncd+"_"+age+"_"+sex+"_"+code+"_"+coshare+"_"+uwl+"_"+plan,
                type : 'POST',
                //data : form_data,
                beforeSend: function () {
                },
                success: function(msg){
                    // console.log(plan+" "+msg);
                    console.log("log:Paymen="+payment+"_FD="+fd+"_NCD="+ncd+"_AGE="+age+"_SEX="+sex+"_CODE="+code+"_COSHARE="+coshare+"_UWL="+uwl+"_PLAN="+plan+"|msg="+msg);
                    if(msg=="")
                        value = 0;
                    else
                        value = parseInt(msg);
                },error: function (xhr, ajaxOptions, thrownError){
                }
        });
        if(withval == 1 && value != 0){
            var disc = value * (25/100);
            value += disc ;
        }
        return value;
    } 

    function jumlah(){
        var rowCount = $('table.table tbody tr').length;
        var total = stamp = totfd = jml = totalwithoutuwl = 0;
        for(var i = 0; i < rowCount; i++){
            total += parseFloat($('table.table tbody').children()[i].children[15].children[0].value);
            // totalwithoutuwl += parseInt($('table.table tbody').children()[0].children[16].innerHTML);
            // console.log("total"+parseInt($('table.table tbody').children()[i].children[15].innerHTML));
        }

        $('table.table tfoot tr:first').children()[0].innerHTML = total;
        if(total>=250000 && total<1000000) stamp = 3000;
        else if(total>=1000000) stamp = 6000;
        $('table.table tfoot').children()[1].children[1].innerHTML = stamp;//stamp duty

        totfd = cekFamilyDiskon();

        $('table.table tfoot').children()[3].children[1].innerHTML = totfd;//family discount

        jml = stamp + total + 30000 - totfd;
        $('table.table tfoot').children()[4].children[1].innerHTML = jml;
        return total;
    }

    function currency(val){
        value = val.toFixed(1);
        splitcurr = value.split(".");
        if(splitcurr.length>1)
            value = 'Rp. ' + splitcurr[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',' +splitcurr[1];
        else
            value = 'Rp. ' + value.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0';
        return value
    }

    function form_sex(sex){
        if(sex == "m")
            sex_form = "<select id='sex' name='sex' class='form-control'>"+
                            "<option selected value='m'>P</option>"+
                            "<option value='f'>W</option>"+
                        "</select>";
        else
            sex_form = "<select id='sex' name='sex' class='form-control'>"+
                            "<option value='m'>P</option>"+
                            "<option selected value='f'>W</option>"+
                        "</select>";
        return sex_form;
    }

    $("#kirim").click(function(){

        var rowCount = $('table.table tbody tr').length;
        setCookie("lengthAnggota",rowCount,5);
        var nama = [""];
        var sex = [""];
        var dob = [""];
        var cd = [""];
        var ipp = [""];
        var matp = [""];
        var opdenp = [""];
        var bpolish = 30000;
        var totalimo = [""];
        
        var no = 0;

        if(rowCount<=0){
            alert("Masukkan data anggota terlebih dahulu");
            return false;
        }else{
            var total = $('table.table tfoot tr:first').children()[0].innerHTML;
            var bmaterai = $('table.table tfoot').children()[1].children[1].innerHTML;
            var fd = $('table.table tfoot').children()[3].children[1].innerHTML;
            var totalseluruh = $('table.table tfoot').children()[4].children[1].innerHTML = jml;

            $('table.table tbody tr').each(function(index){
                no++;
                nama.push($(this).find("input[name='nama']").val());
                sex.push($(this).find("#sex").val());
                dob.push($(this).find("input[name='dob"+no+"']").val());
                cd.push($(this).find("input[name='cd"+no+"']").val());

                ipp.push($(this).find(".ipp").html());
                matp.push($(this).find(".matp").html());
                opdenp.push($(this).find(".opdenp").html());
                totalimo.push($(this).find(".tohidden").val());
            });
        }
        //seluruh data di set cookie agar nanti tidak buat perhitungan ulang lagi
        //ini tabel tbody, jumlah anggota nya. berbentuk array
        setCookie('nama', JSON.stringify(nama),5);
        setCookie('sex', JSON.stringify(sex),5);
        setCookie('dob', JSON.stringify(dob),5);
        setCookie('cd', JSON.stringify(cd),5);

        setCookie('ipp', JSON.stringify(ipp),5);
        setCookie('matp', JSON.stringify(matp),5);
        setCookie('opdenp', JSON.stringify(opdenp),5);
        setCookie('totalimo', JSON.stringify(totalimo),5);

        //total nya yg tfoot
        setCookie('total', total,5);
        setCookie('bpolish', bpolish,5);
        setCookie('bmaterai', bmaterai,5);
        setCookie('fd', fd,5);
        setCookie('totalseluruh', totalseluruh,5);

        // var storedAry = JSON.parse(getCookie('nama'));// to store array
        // console.log(storedAry);
        window.location = "data-diri";
    });

    $("#Add").click(function(){
        // setCookie("",,5);
        var payment = getCookie("pembayaran");
        var uwl = 0;//set default 0
        var sts_allowed = "NEW BUSINESS";
        var name = $("#name").val();
        var dob = $("#dob").val();
        var cd = $("#cd").val();
        var planmelahirkan = getCookie("planmelahirkan");
        var planrawatjalan = getCookie("planrawatjalan");
        console.log("plan="+planmelahirkan);
        console.log("plan="+planrawatjalan);

        if (name == ""){
            document.getElementById("notif4").style.display="block";
            document.getElementById("name").focus();
        }else if(dob == ""){
            document.getElementById("notif5").style.display="block";
            document.getElementById("dob").focus();
        }else if (cd == ""){
            document.getElementById("notif6").style.display="block";
            document.getElementById("cd").focus();
        }else{
            document.getElementById("notif4").style.display="none";
            document.getElementById("notif5").style.display="none";
            document.getElementById("notif6").style.display="none";

        dist = parseInt(selisih(dob, cd));
        
        var age = dist;//Math.round(dist/(1000*60*60*24*365));
        var sex = $("#sex").val();
        var ip = getCookie("ip");
        var mat = getCookie("mat");
        var outden = getCookie("out_den");
        var planipval = getCookie("planip");
        var planmatval = getCookie("planmat");
        var planop_denval = getCookie("planop_den");

        planip = planipval.split("_")[0];
        planmat = planmatval.split("_")[0];
        planop_den = planop_denval.split("_")[0];

        //with premium
        ipp1 = kalk(age,sex,"ip",ip,1,planip,uwl);
        matp1 = kalk(age,sex,"ma",mat,1,planmat,uwl);
        opdenp1 = kalk(age,sex,"od",outden,1,planop_den,uwl);
        
        //with no premium
        ipp0 = kalk(age,sex,"ip",ip,0,planip,uwl);
        matp0 = kalk(age,sex,"ma",mat,0,planmat,uwl);
        opdenp0 = kalk(age,sex,"od",outden,0,planop_den,uwl);
        

        console.log("ipp1="+ipp1+" matp1="+matp1+" opdenp1="+opdenp1);
        console.log("ipp0="+ipp0+" matp0="+matp0+" opdenp0="+opdenp0);
        
        if(payment != "Annually"){
            matp = 0;
            opdenp = 0;
            if(uwl > 0) ipp = ipp1;
            else ipp = ipp0;
            totalwithout = parseFloat(ipp0);
        }else{
            if(planmelahirkan==true&&planrawatjalan==true){
                totalwithout = parseFloat(ipp0)+parseFloat(matp0)+parseFloat(opdenp0);
            }else if(planmelahirkan==true&&planrawatjalan==false){
                totalwithout = parseFloat(ipp0)+parseFloat(matp0);
            }else if(planmelahirkan==false&&planrawatjalan==true){
                totalwithout = parseFloat(ipp0)+parseFloat(opdenp0);
            }else{
                totalwithout = parseFloat(ipp0);
            }
            if(uwl > 0) {
                ipp = ipp1;
                matp = matp1;
                opdenp = opdenp1;
            }else {
                ipp = ipp0;
                matp = matp0;
                opdenp = opdenp0;
            }
        }

        if(planmelahirkan==true&&planrawatjalan==true){
            total = parseFloat(ipp)+parseFloat(matp)+parseFloat(opdenp);
        }else if(planmelahirkan==true&&planrawatjalan==false){
            total = parseFloat(ipp)+parseFloat(matp);
            opdenp = 0;
        }else if(planmelahirkan==false&&planrawatjalan==true){
            total = parseFloat(ipp)+parseFloat(opdenp);
            matp = 0;
        }else{
            total = parseFloat(ipp);
            matp = 0;opdenp = 0;
        }
        // total = parseFloat(ipp)+parseFloat(matp)+parseFloat(opdenp);
        var rowCount = $('table.table tbody tr').length;
        var no = parseInt(rowCount)+1;

        $("table.table tbody").append("<tr>"+
                "<td class='tabletd'><a data-id='"+no+"' onclick='edit(this)'>Ubah</a> | <a data-id='"+no+"' onclick='delrow(this)'>Hapus</a></td>"+
                "<td class='tabletd hide'>"+no+"</td>"+
                "<td><input type='text' class='form-control' name='nama' placeholder='Nama' value='"+name+"' class='display'></td>"+
                "<td class='sex'>"+form_sex(sex)+"</td>"+
                "<td><input class='date dob2' type='text' placeholder='Tanggal Lahir' name='dob"+no+"' id='dob"+no+"' value='"+dob+"'></td>"+
                "<td><input class='date cd2' type='text' placeholder='Tanggal Kalkulasi' name='cd"+no+"' id='cd"+no+"' value='"+cd+"'></td>"+
                "<td class='tabletd age hide'>"+age+"</td>"+
                "<td class='tabletd hide'>NEW BUSINESS</td>"+
                "<td class='tabletd'>"+planipval.split("_")[1]+"</td>"+
                "<td class='tabletd hide'>"+planmatval.split("_")[1]+"</td>"+
                "<td class='tabletd hide'>"+planop_denval.split("_")[1]+"</td>"+
                "<td class='uwl hide'>0</td>"+
                "<td class='tabletd ipp hide'>"+ ipp+"</td>"+
                "<td class='tabletd matp hide'>"+ matp+"</td>"+
                "<td class='tabletd opdenp hide'>"+ opdenp+"</td>"+
                "<td class='tabletd to hide'><input type='hidden' name='tohidden' class='tohidden' value='"+total+"'><span class='toshow'>"+ total+"</span></td>"+
                "<td style='display:none;' class='towithout'>"+totalwithout+"</td>"+
            "</tr>");
        jumlah();
        return false;
    }
    });

    function cekFamilyDiskon(){
        var rowCount = $('table.table tbody tr').length;
        var total = 0;
        var fd = getCookie("fd");
        if(rowCount>1&&fd=="Y"){
            $('table.table tbody tr').each(function(index){
                total += parseInt($(this).find(".towithout").html());
                console.log("towithout="+total);
            });
            total *= 0.05;
        }
        return total;
    }

    
    
    function edit(){
        var rowCount = $('table.table tbody tr').length;
        var total = stamp = totfd = jml = totalwithoutuwl = 0;
        var fd = getCookie("fd");
        var payment = getCookie("pembayaran");

        var planmelahirkan = getCookie("planmelahirkan");
        var planrawatjalan = getCookie("planrawatjalan");
        // console.log(rowCount);
        //console.log($(this).parent().html());
        $('table.table tbody tr').each(function(index){
            var uwl = $( this ).find("#uwl").val();
            console.log("index"+index+" uwl="+uwl);

            var dob = $( this ).find(".dob2").val();
            var cd = $( this ).find(".cd2").val();
            var sex = $( this ).find("#sex").val();
            dist = parseInt(selisih(dob, cd));
            var age = dist;//Math.round(dist/(1000*60*60*24*365));
            $( this ).find(".age").html(age);

            var ip = getCookie("ip");
            var mat = getCookie("mat");
            var outden = getCookie("out_den");
            var planipval = getCookie("planip");
            var planmatval = getCookie("planmat");
            var planop_denval = getCookie("planop_den");

            planip = planipval.split("_")[0];
            planmat = planmatval.split("_")[0];
            planop_den = planop_denval.split("_")[0];

            //with premium
            ipp1 = kalk(age,sex,"ip",ip,1,planip,uwl);
            matp1 = kalk(age,sex,"ma",mat,1,planmat,uwl);
            opdenp1 = kalk(age,sex,"od",outden,1,planop_den,uwl);
            
            //with no premium
            ipp0 = kalk(age,sex,"ip",ip,0,planip,uwl);
            matp0 = kalk(age,sex,"ma",mat,0,planmat,uwl);
            opdenp0 = kalk(age,sex,"od",outden,0,planop_den,uwl);

            console.log( index + ": " + $( this ).find("#dob2").val() );
            console.log("ipp1="+ipp1+" matp1="+matp1+" opdenp1="+opdenp1+" dob="+dob+" uwl="+uwl);
            console.log("ipp0="+ipp0+" matp0="+matp0+" opdenp0="+opdenp0+" cd"+ cd);
            
            // return true;
            if(payment != "Annually"){
                matp = 0;
                opdenp = 0;
                if(uwl > 0) ipp = ipp1;
                else ipp = ipp0;
                totalwithout = parseFloat(ipp0);
            }else{
                if(planmelahirkan==true&&planrawatjalan==true){
                    totalwithout = parseFloat(ipp0)+parseFloat(matp0)+parseFloat(opdenp0);
                }else if(planmelahirkan==true&&planrawatjalan==false){
                    totalwithout = parseFloat(ipp0)+parseFloat(matp0);
                }else if(planmelahirkan==false&&planrawatjalan==true){
                    totalwithout = parseFloat(ipp0)+parseFloat(opdenp0);
                }else{
                    totalwithout = parseFloat(ipp0);
                }
                if(uwl > 0) {
                    ipp = ipp1;
                    matp = matp1;
                    opdenp = opdenp1;
                }else {
                    ipp = ipp0;
                    matp = matp0;
                    opdenp = opdenp0;
                }
            }
            console.log("totalwithout="+totalwithout);

            if(planmelahirkan==true&&planrawatjalan==true){
                total = parseFloat(ipp)+parseFloat(matp)+parseFloat(opdenp);
            }else if(planmelahirkan==true&&planrawatjalan==false){
                total = parseFloat(ipp)+parseFloat(matp);
                opdenp = 0;
            }else if(planmelahirkan==false&&planrawatjalan==true){
                total = parseFloat(ipp)+parseFloat(opdenp);
                matp = 0;
            }else{
                total = parseFloat(ipp);
                matp = 0;opdenp = 0;
            }
            // total = parseFloat(ipp)+parseFloat(matp)+parseFloat(opdenp);
            $( this ).find(".ipp").html(ipp);
            $( this ).find(".matp").html(matp);
            $( this ).find(".opdenp").html(opdenp);
            $( this ).find(".tohidden").val(total);
            $( this ).find(".toshow").html(total);
            $( this ).find(".towithout").html(totalwithout);
            jumlah();
        });
        return 0;
    }
    
    function delrow(){
        // alert($(event.target).attr("data-id"));
        var id = parseInt($(event.target).attr("data-id"))-1;
        $("table.table tbody").children()[id].remove();
        jumlah();
        return 0;
    }

</script>

