<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>


<?php if($this->editmode) { ?>
			                        	<p style="font-size:14px">
			                        	<?php 
			                        		echo "Jenis: <br />";
			                        		echo $this->select("jenis_",array(
											    "store" => array(
											        array("tasbih", "Tasbih"),
											        array("life", "Life")
											    ),
												"reload" => true
											)); 
										?>
			                        	</p>
<?php } ?>

<section class="landing-tasbih-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                    <?php 
                        echo $this->image("gallery-carousel", array(
                                'title' 	=> 'Image Size 960x400',
                                 "width" => "100%",
								 "height" =>400,
                                 "id" => "tasbih",
								 "class" => "tasbih"
                        ));
                    ?>
                
            </div><!--/ .col-xs-12 -->
<?php
                                    $jenis = $this->select('jenis_')->getData();
            ?>
                <div class="landing-tasbih-header-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-4 col-md-offset-1">
                                
                                <!--<div class="landing-tasbih-header-caption--box <?php //echo $color; ?> <?php //echo $pos; ?>" id="fixbox" style="display:block;">
                                    
                                    <h3>Pilih Jenis Asuransi</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="JenisAsuransi" onfocusout="this.value=ubahJenis(this.value)">
                                                <option value="null">Pilih</option>
                                                <option value="tasbih">Tasbih</option>
                                                <option value="lifeInsurance">Life Insurance</option>
                                                <option value="payment">Payment</option>
                                            </select>
                                        </div>--><!--/ .form-group -->
                                    <!--</form>
                                    <div class="trapezoid"></div>
                                </div--><!--/ .landing-tasbih-header-caption--box -->

                            <?php
                                    $pt = $this->select('positionTasbih_')->getData();
								    $ct = $this->select('colorTasbih_')->getData();
							?>
                                <div class="landing-tasbih-header-caption--box" id="fixboxTasbih  <?php echo $ct; ?> <?php echo $pt; ?>" style=" display:<?php if($jenis=="tasbih") echo "block"; else echo "none"; ?>">
                                    <h2><span id="title">Ilustrasi Allianz Tasbih</span></h2>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Uang Pertanggungan" required tabindex="1" id="uangpertanggunganTasbih">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="lamapembayaranTasbih">
                                                <option value="null">Lama Pembayaran</option>
                                                <option value="5">5 tahun</option>
                                                <option value="10">10 tahun</option>
                                                <option value="15">15 tahun</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default" tabindex="3" id="KalTasbih">
                                                <i class="fa fa-calculator"></i> Hitung Premi Anda
                                            </button>
                                        </div><!--/ .form-group -->
                                        <?php if($this->editmode) { ?>
			                        	<p>
			                        	<?php 
			                        		echo "Position: <br />";
			                        		echo $this->select("positionTasbih_",array(
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
			                        		echo $this->select("colorTasbih_",array(
											    "store" => array(
											        array("green", "Green"),
											        array("blue", "Blue")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
			                        <?php } ?>
                                    </form>
                                    <div class="trapezoid" style="color:#009a44;"></div>
                                </div><!--/ .landing-tasbih-header-caption--box -->
                                
        <!-- Pembatas -->
                                <?php
                                    $colorLife = $this->select('positionLife_')->getData();
								    $posLife = $this->select('colorLife_')->getData();
							?>
                                
                                <div class="landing-tasbih-header-caption--box" id="fixboxLifeinsurance <?php echo $colorLife; ?> <?php echo $posLife; ?>" style="display:<?php if($jenis=="life") echo "block"; else echo "none"; ?>;">
                                    <h2><span id="title">Ilustrasi Allianz Life Insurance</span></h2>
                                    <form role="form">

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama" id="Nama" required tabindex="1" onfocusout="this.value=validateNama(this.value)">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Usia" id="Usia" required tabindex="1" onfocusout="this.value=validateUsia(this.value)">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="UangPertanggunganLife">
                                                <option value="null">Uang Pertanggungan</option>
                                                <option value="1000">1 Milyar</option>
                                                <option value="500">500 Juta</option>
                                                <option value="250">250 Juta</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default" tabindex="3" id="KalLife">
                                                <i class="fa fa-calculator"></i> Hitung Premi Anda
                                            </button>
                                        </div><!--/ .form-group -->
                                        <?php if($this->editmode) { ?>
			                        	<p>
			                        	<?php 
			                        		echo "Position: <br />";
			                        		echo $this->select("positionLife_",array(
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
			                        		echo $this->select("colorLife_",array(
											    "store" => array(
											        array("green", "Green"),
											        array("blue", "Blue")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
										<?php } ?>
                                    </form>
                                     <div class="trapezoid-tasbih"></div>
                                </div><!--/ .landing-tasbih-header-caption--box -->
                                
                            </div><!--/ .col-xs-12 -->
                        </div><!--/ .row -->
                    </div><!--/ .container -->
                </div><!--/ .landing-tasbih-header-caption -->


        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-header -->



<script>

    //alert('test');
	var value;
    function ubahJenis(value){
         value = $('#JenisAsuransi option:Selected').val();
         if(value == 'lifeInsurance'){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixboxTasbih').style.display = 'none';
            document.getElementById('fixboxLifeinsurance').style.display = 'block';
         }else if(value == "tasbih"){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixboxTasbih').style.display = 'block';
            document.getElementById('fixboxLifeinsurance').style.display = 'none';
         }else{
            document.getElementById('fixbox').style.display = 'block';
            document.getElementById('fixboxTasbih').style.display = 'none';
            document.getElementById('fixboxLifeinsurance').style.display = 'none';
         }
    };
    
    function ubahJenis1(value){
         value = $('#JenisAsuransi1 option:Selected').val();
         if(value == 'lifeInsurance'){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixboxTasbih').style.display = 'none';
            document.getElementById('fixboxLifeinsurance').style.display = 'block';
         }else if(value == "tasbih"){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixboxTasbih').style.display = 'block';
            document.getElementById('fixboxLifeinsurance').style.display = 'none';
         }else{
            document.getElementById('fixbox').style.display = 'block';
            document.getElementById('fixboxTasbih').style.display = 'none';
            document.getElementById('fixboxLifeinsurance').style.display = 'none';
         }
    };
    
    function ubahJenis2(value){
         value = $('#JenisAsuransi2 option:Selected').val();
         if(value == 'lifeInsurance'){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixboxTasbih').style.display = 'none';
            document.getElementById('fixboxLifeinsurance').style.display = 'block';
         }else if(value == "tasbih"){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixboxTasbih').style.display = 'block';
            document.getElementById('fixboxLifeinsurance').style.display = 'none';
         }else{
            document.getElementById('fixbox').style.display = 'block';
            document.getElementById('fixboxTasbih').style.display = 'none';
            document.getElementById('fixboxLifeinsurance').style.display = 'none';
         }
    };
    

       
//Validasi
    
    function validateNama(nama){
        var re = /^[a-zA-Z ]*$/;
        if(!re.test(nama)){
            return null;
        }else{
            return nama;
        }
    };
    
        $(document).ready(function(){
             $( "#uangpertanggunganTasbih" ).bind( "input", function() {
                 var value = $("#uangpertanggunganTasbih").val();
                 var conv = accounting.formatMoney(value, "Rp ", 0,",");
                 $(this).val(conv);
             });   
            
            $('#KalTasbih').click(function() {
                var value = $("#uangpertanggunganTasbih").val();
                var unc = accounting.unformat(value,0,",");
                var lp = $('#lamapembayaranTasbih option:Selected').val();
                
                if(unc < 50000000 || lp=="null") {
                    alert("Mohom maaf, pastikan uang pertanggungan Anda masukkan minimal 50 juta dan lama pembayaran telah Anda pilih")
                }else{
                    $.ajax({
                        url : '/landing-tasbih/',
                        type : 'POST',
                        data :{
                            'up' : unc,
                            'lp' : lp
                        },
                        success : function(data){
                            alert(data);
                            document.location.href='produk/asuransi-syariah/tasbih/kalkulator/ilustrasi';
                        }
                    });
                     //alert('Tahan');
                }
            });
            
                $('#Usia').bind("input", function(){
                       var re = /^[0-9]*$/;

                        var value = $('#Usia').val();
                        $(this).val(value);
                        if(!re.test(value)){
                            $('#Usia').val("");
                        }
                });
            
            $('#KalLife').click(function() {
                var nama = $("#Nama").val();
                var usia = $("#Usia").val();
                var up = $('#UangPertanggunganLife option:Selected').val();

                if(usia < 18 || usia > 64 || usia == '' || nama == '' || up=="null") {
                    alert("Mohon maaf, pastikan usia Anda berada di 18-64 tahun dan pastikan semua inputan Anda benar")
                }else{
                    $.ajax({
                        url : '/landing-life/',
                        type : 'POST',
                        data :{
                            'nama' : nama,
                            'usia' : usia,
                            'up' : up
                        },
                        success : function(data){
                            alert(data);
                            document.location.href='/kalkulator/lifeinsurance';
                        }
                    });
                     //alert('Tahan');
                }
            });
        });
    
    function validateUsia(value){
        if(value>=18 && value <=64)
            return value;
        else
            return null;
    };
    
</script>