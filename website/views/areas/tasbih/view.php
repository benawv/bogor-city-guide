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
    .btn-tasbih{ background: #009a44 !important; border: none !important; border-radius: 0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }
    .form-box{ border: solid 1px #ddd; padding: 16px 20px; margin-bottom: 32px; }
    .form-control{ border-radius: 0; }
</style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>KALKULATOR ALLIANZ TASBIH</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    <div class="form-box">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Tanggal Pembuatan Perhitungan</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="tgl-hitung" value="<?php echo date( 'd/m/Y' ); ?>" required>
                             <label id="notif-tglhitung" style="display:none; color: #f00;">
                                Mohon maaf Anda belum memasukkan tanggal pembuatan
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <label><strong>Data Diri</strong></label>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Nama</label>
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
                            <label>No Handphone (Min. 8 digit)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Handphone" required onfocusout="this.value=validateNumber(this.value)">
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
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required onfocusout="this.value=validateEMAIL(this.value)">
                            <label id="notifemail" style="display:none; color: #f00;">
                                Mohon maaf email yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Tanggal Lahir (Min.  18 tahun)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="tgl-lahir" name="tgl-lahir" placeholder="Tanggal Lahir"  required>
                            <label id="notif-tgllahir" style="display:none; color: #f00;">
                                Mohon maaf inputan Anda belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Jenis Kelamin</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="JenisKelamin" id="JenisKelamin">
                                <option value="l">Pria</option>
                                <option value="p">Wanita</option>
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
                            <label>Asuransi Jiwa(Min. Rp.50.000.000)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="asuransi-jiwa" value="" placeholder="Asuransi Jiwa(Min. Rp.50.000.000)">
                            <label id="notif-asuransijiwa" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan belum benar
                            </label>
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

                    </div><!--/ .form-box -->

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

<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">
<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>


<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>

<script>
    // document.getElementById('tgl-hitung').value = (new Date()).format("m/dd/yy");
    $(document).ready(function(){
        /*
         * jQueryUI DatePicker
         */

        $('#Kalkulasi').click(function() {
            //alert('test');
            var tanggalpembuatan = $('#tgl-hitung').val();
            var nama = $('#nama').val();
            var email = $('#email').val();
            var tanggallahir = $('#tgl-lahir').val();
            var sex = $('#JenisKelamin option:Selected').val();
            var usia = $('#usia').val();
            var frekuensi = $('#Frekuensi option:Selected').val();
            var asuransijiwa = $('#asuransi-jiwa').val();
            var kontribusi = $('#masa-premi option:Selected').val();
            var unfnum = accounting.unformat(asuransijiwa,0,",");
            var nohp = $('#nohp').val();



            if( nama == '' || asuransijiwa == '' || asuransijiwa >= 49000000 ||email == '' || tanggalpembuatan == '' || tanggallahir == '' || nohp == '' || nohp.length <= 8){
                    if( nama == ''  )
                        document.getElementById('notif-nama').style.display= 'block';
                    if( asuransijiwa == '' || asuransijiwa < 50000000 )
                        document.getElementById('notif-asuransijiwa').style.display= 'block';
                    if( email == '' )
                        document.getElementById('notifemail').style.display= 'block';
                    if( tanggalpembuatan == '')
                        document.getElementById('notif-tglhitung').style.display= 'block';
                    if( tanggallahir == '' )
                        document.getElementById('notif-tgllahir').style.display= 'block';
                    if( nohp.length <= 8 || no.hp == '')
                        document.getElementById('notifNoHP').style.display='block';
                    alert("Mohon Periksa Inputan Anda");
            }else{


            $.ajax({
                url      : '/kalkulator-tasbih/',
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
                            'AJ' : asuransijiwa,
                            'kontribusi' : kontribusi,
                            'nohp' : nohp
                            },
                    success  : function(data){
                    //console.log(data);
                    $('#kontribusi-berkala').val(accounting.formatMoney(data, "Rp ", 0,","));
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
