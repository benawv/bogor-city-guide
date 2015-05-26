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
                        <h4 style="font-size:18px"><small>Pertanyaan Umum</small></h4>
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

                <form class="form-horizontal" role="form">

                    <div class="form-box">



                    <label><strong>Kalkulasi</strong></label>

                    


                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Tanggal Lahir (Min.  18 tahun, Max. 55 tahun)</label>
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
				<div class="form-group">
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
                            <label>Usia (Tahun)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="usia" placeholder="Usia (Tahun)" readonly>
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
                            <label>Asuransi Jiwa (Min. Rp.50.000.000)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="asuransi-jiwa" value="" placeholder="Asuransi Jiwa (Min. Rp.50.000.000)">
                           
			    <label id="notif-asuransijiwa" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
			<div class="col-md-4"> <span>* Uang pertanggungan asuransi jiwa bila terjadi risio pada tertanggung.</span></div>
			
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

                    </div><!--/ .form-box -->

                    <div class="form-box text-center waiting-calc" style="display: none;">
                        <i class="fa fa-refresh fa-3x fa-spin"></i>
                    </div><!--/ .form-box -->

                    <div class="form-box result-calc" style="display:none; ">
			<label><strong>Setoran Tahunan</strong></label>
    
			<div class="form-group">
			    <div class="col-md-4">
				<label>Kontribusi Berkala/ Premi pertahun</label>
			    </div><!--/ .col-md-4 -->
			    <div class="col-md-4">
				<input type="email" class="form-control" id="kontribusi-berkala" placeholder="0" readonly>
			    </div><!--/ .col-md-4 -->
			</div><!--/ .form-group -->
			
		    </div>
		    
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <?php $asets=Asset::getByPath('/icon-tasbih/calculator.png');?>
                            <button class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" 
                            id="Kalkulasi" name="next" style="background-color:#009a44"> 
                            <img src="<?php echo $asets; ?>" alt="background-galeri" class="img-responsive icon-submit" />
                            <font class="font-submit">Kalkulasi</font></button>
                            <!-- <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Kalkulasi" name="next" value="Kalkulasi" style="background-color:#009a44"> -->
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>

                

                    
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
	var sex;
	$("input:radio[name=jenisKelamin]").click(function() {
			sex= $(this).val();
	});

        $('#Kalkulasi').click(function() {
        
	    //get current date format //dd/yy/mm
	    var fullDate = new Date()
            var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
	    var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
	    
            var tanggalpembuatan = currentDate;
            var tanggallahir = $('#tgl-lahir').val();
            
	   // var sex = $('#JenisKelamin option:Selected').val();
            var usia = $('#usia').val();
            var frekuensi = $('#Frekuensi option:Selected').val();
            var asuransijiwa = $('#asuransi-jiwa').val();
            var kontribusi = $('#masa-premi option:Selected').val();
            var unfnum = accounting.unformat(asuransijiwa,0,",");

			


            if( asuransijiwa == '' || asuransijiwa >= 49000000 ||tanggalpembuatan == '' || tanggallahir == ''){
                    if( asuransijiwa == '' || asuransijiwa < 50000000 )
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
