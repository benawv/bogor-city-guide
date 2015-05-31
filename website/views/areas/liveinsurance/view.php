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
    .box-dent--inner{ background: #0077c8; }
    .box-dent::before{ border-top: 28px solid #0077c8 !important;}
    .btn-tasbih{ background: #0077c8 !important; border: none; border-radius:0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #0077c8 !important;  }
    .header-calc{ background: #0077c8; }

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
        width: 50%;
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


</style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>KALKULATOR LIVE INSURANCE</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc custom-tab-item active" id="first">
            <div class="col-md-12">

                <div class="form-horizontal" role="form">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Nama</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Nama Anda" id="nama" tabindex="6" maxlength="32" required>
                            <label id="notif-nama" style="display:none; color: #f00;">Maaf Anda Belum Memasukkan Nama</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Nomor Handphone (Min. 8 Digit)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="0812345xxx" id="nohp" tabindex="6" maxlength="32" required onfocusout="this.value=validateNumber(this.value)">
                            <label id="notif-nohp" style="display:none; color: #f00;">Maaf Anda Belum Memasukkan No Handphone</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>E-Mail</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="email" class="form-control" placeholder="Alamat E-Mail" id="email" tabindex="6" maxlength="32" required onfocusout="this.value=validateEMAIL(this.value)">
                            <label id="notif-email" style="display:none; color: #f00;">Maaf Anda Belum Memasukkan Email</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Jenis Kelamin</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="1" id="gender">
                                <option value="Pilih">Pilih</option>
                                <option value="M">Pria</option>
                                <option value="F">Wanita</option>
                            </select>
                            <label id="notif-jeniskelamin" style="display:none; color: #f00;">Maaf Anda Belum Memilih</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Masukan tanggal lahir Anda<br>(Minimum usia dari 18 tahun sampai 64 tahun)</label>
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
                            <label>Usia</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="usia" name="usia" placeholder="Umur"  required readonly>
                            <label id="notif-usia" style="display:none; color: #f00;">
                                Mohon maaf, umur yang Anda masukan belum sesuai dengan ketentuan ilustrasi 
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Uang Pertanggungan(UP)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="2" id="uang_pertanggungan">
                                <option value="Pilih">Pilih</option>
                                <option value="1000">1M</option>
                                <option value="500">500juta</option>
                                <option value="250">250juta</option>
                            </select>
                            <label id="notif-uangpertanggungan" style="display:none; color: #f00;">Maaf Anda Belum Memilih</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Critical Illness Accelerated(CIA)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="3" id="critical_illness_accelerated">
                                <option value="Pilih">Pilih</option>
                                <option value="1000">1M</option>
                                <option value="500">500juta</option>
                                <option value="250">250juta</option>
                            </select>
                            <label id="notif-cia" style="display:none; color: #f00;">Maaf Anda Belum Memilih</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Merokok?</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="4" id="smoking">
                                <option value="Pilih">Pilih</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                            <label id="notif-merokok" style="display:none; color: #f00;">Maaf Anda Belum Memilih</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Premi</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" readonly class="form-control disabled" placeholder="0" id="premi" tabindex="5">
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Kalkulasi" name="next" value="Kalkulasi" tabindex="7">
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </div>
                <!--
                <div class="col-md-12 note">
                    <h4 class="mb10"><strong>Note: </strong></h4>
                    <ul class="mb30">
                        <li>Perhitungan ini adalah perhitungan premi standar.</li>
                        <li>Diskon Polis Keluarga berlaku untuk Polis Keluarga (Tertanggung, Suami/Istri &amp; Anak)</li>
                        <li>
                            Proposal ini berlaku 30 (tiga puluh) hari setelah Proposal ini dicetak. Lebih dari
                            30 (tiga puluh) hari, maka proposal ini tidak berlaku lagi dan harus dihitung ulang kembali.
                        </li>
                        <li>
                            Allianz berhak melakukan perhitungan Premi ulang sesuai usia yang sebenarnya pada saat underwriting
                            dilakukan.
                        </li>
                    </ul>
                </div><!--/ .col-md-12 -->

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->

    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>

<script>
    $(function(){
        
        var d = new Date();
        var y = d.getFullYear();
        minyear = y - 64;
        maxyear = y - 18;
        range = minyear+':'+maxyear;
        def = '1/1/'+minyear;
       $('#tgl-lahir').datepicker({
           
            defaultDate: def,
            changeMonth: true,
            changeYear: true,
            yearRange: range
        });
            
    });
    
    $(document).ready(function(){
        
        $('#Kalkulasi').click(function() {
            var nama = $('#nama').val();
            var nohp = $('#nohp').val();
            var gender = $('#gender').val();
            var uangpertanggungan = $('#uang_pertanggungan').val();
            var cia = $('#critical_illness_accelerated').val();
            var smoking = $('#smoking').val();
            var email = $('#email').val();
            var tanggallahir = $('#tgl-lahir').val();
            var usia = $('#usia').val();
            
            if(nama == '' || nohp == '' || gender == 'Pilih' || uangpertanggungan == 'Pilih' || cia == 'Pilih' || smoking == 'Pilih' || email == '' || nohp.length() < 8 || tanggallahir == ''){
                if(nama == ''){
                    document.getElementById('notif-nama').style.display = 'block';
                }
                if(nohp == '' || nohp.length() < 8){
                    document.getElementById('notif-nohp').style.display = 'block';
                }
                if(gender == 'Pilih'){
                    document.getElementById('notif-jeniskelamin').style.display = 'block';
                }
                if(uangpertanggungan == 'Pilih'){
                    document.getElementById('notif-uangpertanggungan').style.display = 'block';
                }
                if(cia == 'Pilih'){
                    document.getElementById('notif-cia').style.display = 'block';
                }
                if(smoking == 'Pilih'){
                    document.getElementById('notif-merokok').style.display = 'block';
                }
                if(tanggallahir == ''){
                    document.getElementById('notif-tgllahir').style.display = 'block';
                }
                if(email == ''){
                    document.getElementById('notif-email').style.display = 'block';
                }
            }else{
                
                    $.ajax({
                            url      : '/kalkulator-live-insurance/',
                            type     : 'POST',
                            data     : {
                                        'nama' : nama,
                                        'nohp' : nohp,
                                        'gender' : gender,
                                        'uangpertanggungan' : uangpertanggungan,
                                        'cia' : cia,
                                        'smoking' : smoking,
                                        'email' : email,
                                        'tanggallahir' : tanggallahir,
                                        'usia' : usia
                                        },
                                success  : function(data){
                                //console.log(data);
                                //$('.waiting-calc').hide();
                                $('#premi').val(accounting.formatMoney(data, "Rp ", 0,","));
                                document.location.href='';
                            }


                    });


            }
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
    
    $('#nohp').bind("input", function(){
               var re = /^[0-9]*$/;

                var value = $('#nohp').val();
                $(this).val(value);
                if(!re.test(value)){
                    document.getElementById('notif-nohp').style.display= 'block';
                    $('#nohp').val('');
                }else{
                    document.getElementById('notif-nohp').style.display= 'none';
                }

            });
    
    $('#uang_pertanggungan').bind("input", function(){
               var value = $('#uang_pertanggungan').val();
                if(value == 'Pilih'){
                    document.getElementById('notif-uangpertanggungan').style.display= 'block';   
                }else if(value == '1000' || value == '500' || value == '250'){
                    document.getElementById('notif-uangpertanggungan').style.display= 'none';
                }

            });
    
    $('#smoking').bind("input", function(){
               var value = $('#smoking').val();
                if(value == 'Pilih'){
                    document.getElementById('notif-merokok').style.display= 'block';   
                }else if(value == 'Y' || value == 'T'){
                    document.getElementById('notif-merokok').style.display= 'none';
                }

            });
    
    $('#critical_illness_accelerated').bind("input", function(){
               var value = $('#critical_illness_accelerated').val();
                if(value == 'Pilih'){
                    document.getElementById('notif-cia').style.display= 'block';   
                }else if(value == '1000' || value == '500' || value == '250'){
                    document.getElementById('notif-cia').style.display= 'none';
                }

            });
    
    $('#gender').bind("input", function(){
               var value = $('#gender').val();
                if(value == 'Pilih'){
                    document.getElementById('notif-jeniskelamin').style.display= 'block';   
                }else if(value == 'F' || value == 'M'){
                    document.getElementById('notif-jeniskelamin').style.display= 'none';
                }

            });
        
        function validateEMAIL(surat)
        {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            if(!re.test(surat))
            {
                document.getElementById('notif-email').style.display= 'block';
                return null;
            }
            else
            {
                document.getElementById('notif-email').style.display= 'none';
                return surat;
            }
        };
        
            function validateNumber(value){
        if(value.length <= 8 ){
            document.getElementById('notif-nohp').style.display= 'block';
            return null;
        }else{
            document.getElementById('notif-nohp').style.display= 'none';
            return value;
        }
    };
    

</script>

<!--
</div>
-->
