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

<style>
    /* Override AJFC's feature box color */
    .box-dent--inner{ background: #009a44; }
    .box-dent::before{ border-top: 28px solid #009a44 !important;}
    .btn-tasbih{ background: #009a44 !important; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }
</style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>KALKULATOR ASURANSI ALLIANZ TASBIH</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Tanggal Pembuatan Perhitungan</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="tgl-hitung" placeholder="<?php echo date( 'd/m/Y' ); ?>" required>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <label><strong>Data Diri</strong></label>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Nama</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nama" placeholder="Nama" required>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Email</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required onfocusout="this.value=validateEMAIL(this.value)">
                            <label id="notifemail" style="display:none; color: #f00;">
                                Mohon maaf email yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Tanggal Lahir</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="tgl-lahir" name="tgl-lahir" placeholder="Tanggal Lahir" autofocus required>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Jenis Kelamin</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="JenisKelamin" id="JenisKelamin">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Usia(Tahun)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="usia" placeholder="Usia(Tahun)" readonly>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Frekuensi Pembayaran</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="Frekuensi" id="Frekuensi">
                                <option value="Triwulan">Triwulan</option>
                                <option value="Semesteran">Semesteran</option>
                                <option value="Tahunan">Tahunan</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <label><strong>Santunan Meninggal Dunia</strong></label>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Asuransi Jiwa(Min. Rp.50.000.000)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="asuransi-jiwa" value="" placeholder="Asuransi Jiwa(Min. Rp.50.000.000)"  onfocusout="this.value = minmax(this.value,50000000,10000000000)">
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Massa Pembayaran Kontribusi/Premi(Tahun)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="masa-premi" id="masa-premi">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <label><strong>Setoran Tahunan</strong></label>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Kontribusi Berkala/ Premi pertahun</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="kontribusi-berkala" placeholder="0" readonly>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Kalkulasi" name="next" value="Kalkulasi">
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>

                <div class="col-md-12 note">
                    <h4 class="mb10"><strong>Note: </strong></h4>
                    <ul class="mb30">
                        <li>Jika meninggal dunia karena sakit, Ahli waris akan mendapatkan Santunan meninggal Dunia 100%</li>
                        <li>Jika meninggal dunia di saat menunaikan Ibadah Haji maka akan mendapatkan Santunan meninggal Dunia sebesar 200%</li>
                        <li>Selama mengikuti asuransi Tertanggung akan mendapatkan perlindungan Medical Evakuasi</li>
                        <li>Masa asuransi adalah = masa pembayaran konstribusi / premi + 10 tahun + 1 tahun</li>
                        <li>Setelah selesai masa pembayaran kontribusi / premi pemegang polis akan mendapatkan tahapan dana pertama sebesar 50% dari santunan meninggal dunia</li>
                        <li>Setelah tahapan dana pertama pemegang polis akan mendapatkan tahapan dana kedua sebesar sisa saldo dana yang berkembang didalam produk ini</li>
                        <li>Untuk informasi lebih lengkap silahkan menghubungi Agen atau Kantor pemasaran Allianz terdekat</li>
                    </ul>
                </div><!--/ .col-md-12 -->

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->
    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){

        /*
         * jQueryUI DatePicker
         */
        $( '#tgl-lahir' ).datepicker();
        $( '#tgl-hitung' ).datepicker();

        $('#Kalkulasi').click(function() {
            var tanggalpembuatan = $('#tgl-hitung').val();
            var nama = $('#nama').val();
            var email = $('#email').val();
            var tanggallahir = $('#tgl-lahir').val();
            var sex = $('#JenisKelamin option:Selected').val();
            var usia = $('#usia').val();
            var frekuensi = $('#Frekuensi option:Selected').val();
            var asuransijiwa = $('#asuransi-jiwa').val();
            var unfnum = accounting.unformat(asuransijiwa,0,",");
            var kontribusi = $('#masa-premi option:Selected').val();

            $.ajax({
                url      : '/KalkulatorTasbih/',
                type     : 'POST',
                data     : {
                            'tgl' : tanggalpembuatan,
                            'nama' : nama,
                            'email' : email,
                            'tanggallahir' : tanggallahir,
                            'sex' : sex,
                            'usia' : usia,
                            'frekuensi' : frekuensi,
                            'asuransijiwa' : unfnum,
                            'kontribusi' : kontribusi
                            },
                success  : function(data){
                    console.log(data);
                    $('#kontribusi-berkala').val(accounting.formatMoney(data, "Rp ", 0,","));
                }
            });

        });

    });

    $( window ).load(function(){
        $('#tgl-lahir').on('change', function() {
            var dob = new Date(this.value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            if(age >= 0) $('#usia').val(age);
            else $('#usia').val(0);
        });
    });

    //Validate Number
    function angka(e)
    {
       if (!/^[0-9]+$/.test(e.value))
       {
          e.value = e.value.substring(0,e.value.length-1);
       }
    };

    //Validate Email
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

    //Validate Min Max
    function minmax(value, min)
    {
        if(parseInt(value) < 50000000 || isNaN(value))
            return accounting.formatMoney(50000000, "Rp ", 0,",");
        else if(parseInt(value) > 10000000000)
            return accounting.formatMoney(parseInt(value), "Rp ", 0,",");
        else return accounting.formatMoney(value, "Rp ", 0,",");
    };

</script>

<!--
</div>
-->
