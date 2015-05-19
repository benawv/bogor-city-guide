
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>

<header>
    <style>
        /* Override AJFC's feature box color */
        .box-dent--inner{ background: #009a44; }
        .box-dent::before{ border-top: 28px solid #009a44 !important;}
        .social-feeds .social-feeds--box.twitter{ background: #009a44 !important;}
        .social-feeds .social-feeds--box.facebook{background: #73c898!important;}
        .backg{max-width:960px; position:relative; margin:auto;}
        .foto{width:100%; height:auto;}
    </style>
<div class="row">
     <div class="backg">
        <!--<img src="/website/ajfc/img/bg-home.jpg" alt="Home" class="img-responsive" />-->
        <div id="slideshow" class="clearfix">
<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many images you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<30; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
                <?php echo $this->select("slides",[
                    "store" => $selectStore,
                "reload" => true
            ]); ?>
        </div>
    </div>

    <style type="text/css">
        .gallery .item {
            min-height: 377px;
        }
        .place-bg-gallery{
        	height: 265px !important;
        }
    </style>
<?php } ?>
<?php 
	$id = "gallery-carousel-".uniqid();
	$slides = 2;
	if(!$this->select("slides")->isEmpty()){
        $slides = (int) $this->select("slides")->getData();
    }
    $seq = [];
    for($a=1; $a<=$slides; $a++) {
        $selectSeq[] = [$a, $a];
    }
?>
<ul class="slides">
	<?php
		for($z=0;$z<$slides;$z++) {
			for($i=0;$i<$slides;$i++) { 
				$v = $this->select('seq_'.$i)->getData() ? $this->select('seq_'.$i)->getData() : 1;
				$w = $z+1;
				if($w == $v){
?>
					<li>
						<?php
						    if(!$this->editmode){
							if($i!=0){
							    $hide = "hide";
							}
							else{
							    $hide = "";
							}
						    }
						    else{
							$hide = "";
						    }
						?>
						<div class="slide <?php echo $hide;?>">
							<div class="foto">
								<?php echo $this->image("image_".$i, ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "title" => "Image Size 1020x400", "width" => "100%", "height" => "auto"])?>
							</div>
							<?php
								$extra = $this->image("image_".$i)->getHotspots();
								//$pos = $extra[0]['data'][0]['value'];
								//$color = $extra[0]['data'][1]['value'];
								$pos = $this->select('position_'.$i)->getData();
								$color = $this->select('color_'.$i)->getData();
							?>
							<div class="fixbox <?php echo $pos?>60">
								<div class="place-bg bg-<?php echo $color?> place-bg-gallery">
								    <div>
									<?php if($this->editmode || !$this->input("caption-title-" . $i)->isEmpty()) { ?>
			                            <h1><?php echo $this->input("caption-title-" . $i, ["width" => 251]) ?></h1>
			                        <?php } ?>
			                        <?php if($this->editmode || !$this->textarea("caption-text-" . $i)->isEmpty()) { ?>
			                            <p>
			                                <?php echo $this->textarea("caption-text-" . $i, ["width" => 251, "height" => 100, "maxlength" => 140]) ?>
			                            </p>
			                        <?php } ?>
			                        <?php if($this->editmode) { ?>
			                        	<p>
				                        <?php 
				                        	echo "Sequence: <br />";
			                        		echo $this->select("seq_".$i,array(
											    "store" => $selectSeq,
			                        			"reload" => true
											    )
											); 
										?>
			                        	</p>
			                        	<p>
			                        	<?php 
			                        		echo "Position: <br />";
			                        		echo $this->select("position_".$i,array(
											    "store" => array(
											        array("left", "Left"),
											        array("right", "Right")
											    )
											)); 
										?>
			                        	</p>
			                        	<p>
				                        <?php 
				                        	echo "Color: <br />";
			                        		echo $this->select("color_".$i,array(
											    "store" => array(
											        array("red", "Red"),
											        array("lightgreen", "Light Green"),
                                                                                                array("green", "Green"),
											        array("purple", "Purple"),
											        array("blue", "Blue"),
											        array("orange", "Orange")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
			                        <?php } ?>
								    </div>
								</div>
								<div class="edge e-<?php echo $color?>">
									<?php echo $this->link("boxlink_".$i); ?>
								</div>
							</div>
						</div>
					</li>

	<?php 		} 
			}
		}
	?>
	
</ul>
</div>
    </div><!--/ .background -->
    </div>
        <nav class="main-navigation">
        <div class="container">
           <div class="row">
                <div class="col-xs-12 col-md-3">
                    <a href="/kalkulator/tasbih" class="nav-item green sitemap">
                        <h4><small>01</small>Ilustrasi</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3">
                    <a href="/tasbih/tanya-jawab" class="nav-item orange question">
                        <h4><small>02</small>Tanya Jawab Produk</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3">
                    <a href="http://agen.imkepo.com" class="nav-item users">
                        <h4><small>03</small> Cari Agen Syariah </h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3">
                    <a href="/tasbih/inqury-form" class="nav-item red users">
                        <h4><small>04</small> Inquiry Form</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
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
    
    @media only screen and (min-width: 960px){
        body {
          font-size: initial !important;
        }
    }

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

<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">



<!--
</div>
--></div>
        <div style="clear:both; "></div>

        <div class="items-container">
                    </div><!--/ .container -->

    </div>
</div><!--/ .container -->


<script>
    // document.getElementById('tgl-hitung').value = (new Date()).format("m/dd/yy");
    $(document).ready(function(){
        /*
         * jQueryUI DatePicker
         */

        $('#Kalkulasi').click(function() {
            
	    
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

	    $('.waiting-calc').show();
            
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
		    $('.waiting-calc').hide();
		    $('.result-calc').show();
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

	</div>

