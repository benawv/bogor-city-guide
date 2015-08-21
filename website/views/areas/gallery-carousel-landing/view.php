<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>

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
<style>
.landing-tasbih-header-caption, .landing-tasbih-header-caption .container, .landing-tasbih-header-caption .container .row{
										height: 0px !important;
}
</style>
<?php } ?>

<style>
    .gmbr{
          width: 100%;
          height: auto;
          position: relative;
    }
</style>
<section class="landing-tasbih-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                
                <div class="gmbr">
                    <?php 
                        echo $this->image("gallery-carousel-landing", array(
                                'title' 	=> 'Image Size 960x400',
                                 "width" => 960,
								 "height" =>400,
                                 "id" => "tasbih",
								 "class" => "tasbih"
                        ));
                    ?>
                </div>


                
            </div><!--/ .col-xs-12 -->
<?php
                                    $jenis = $this->select('jenis_')->getData();
            ?>
                <div class="landing-tasbih-header-caption">
                    <div class="container">
                        <div class="row">
                            
                                
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
									$kat = $this->select('kategori_')->getData();
							?>
                            <!--<div class="col-xs-12 col-md-4 col-md-offset-<?php if($pt == 'left') echo '1'; else echo '7' ?>" id="fixboxTasbih" style=" display:<?php if($jenis=="tasbih") echo "block"; else echo "none"; ?>">-->
							<div class="col-xs-12 col-md-4 col-md-offset-<?php if($pt == 'left') echo '1'; else echo '7' ?>" id="fixboxTasbih" style=" display:<?php echo "none"; ?>">
                                <div class="landing-tasbih-header-caption--box <?php echo $ct; ?>" >
                                    <h2><span id="title">Ilustrasi Allianz Tasbih</span></h2>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Uang Pertanggungan" required tabindex="1" id="uangpertanggunganTasbih">
                                        </div><!--/ .form-group -->
										<input type="hidden" value="<?php echo $kat;?>" name="kategori" />
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="lamapembayaranTasbih">
                                                <option value="null">Lama Pembayaran</option>
                                                <option value="5">5 tahun</option>
                                                <option value="10">10 tahun</option>
                                                <option value="15">15 tahun</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <button type="button" class="btn btn-default" tabindex="3" id="KalTasbih" >
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
											        array("blue", "blue"),
											        array("yellow", "yellow"),
											        array("light-blue", "light-blue"),
											        array("red", "red"),
											        array("green", "green"),
											        array("purple", "purple")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
<p>
				                        <?php 
				                        	echo "Kategori: <br />";
			                        		echo $this->select("kategori_",array(
											    "store" => array(
											        array("have-hajj-saving-have-insurance", "Have Hajj Saving Have Insurance"),
											        array("no-hajj-saving-have-insurance", "No Hajj Saving Have Insurance"),
											        array("have-hajj-saving-no-insurance", "Have Hajj Saving No Insurance"),
											        array("no-hajj-saving-no-insurance", "No Hajj Saving No Insurance")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
			                        <?php } ?>
                                    
                                    <div class="trapezoid" style="color:#009a44;"></div>
                                </div><!--/ .landing-tasbih-header-caption--box -->
                                </div><!--/ .col-xs-12 -->
                                 </form>
                                
        <!-- Pembatas -->
                                  <?php
                                    $colorLife = $this->select('colorLife_')->getData();
								    $posLife = $this->select('positionLife_')->getData();
							?>
                            <div class="col-xs-12 col-md-4 col-md-offset-<?php if($posLife == 'left') echo '1'; else echo '7' ?>" id="fixboxLifeinsurance" style=" display:<?php if($jenis=="life") echo "block"; else echo "none"; ?>">
                                <div class="landing-tasbih-header-caption--box <?php echo $colorLife; ?>" >
                                    
                                    <h2><span id="title">Ilustrasi Allianz Life Insurance</span></h2>
                                    <form role="form">

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama" id="Nama" required tabindex="1" onfocusout="this.value=validateNama(this.value)">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="tgl-lahir" name="tgl-lahir" placeholder="Tanggal Lahir"  required>
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
                                            <button type="button" class="btn btn-default" tabindex="3" id="KalLife" >
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
											         array("blue", "blue"),
											        array("yellow", "yellow"),
											        array("light-blue", "light-Blue"),
											        array("red", "red"),
											        array("green", "green"),
											        array("purple", "purple")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
										<?php } ?>
                                    
                                    <div class="trapezoid" style="color:#009a44;"></div>
                                </div><!--/ .landing-tasbih-header-caption--box -->
                                </div><!--/ .col-xs-12 -->
                                 </form>

                        </div><!--/ .row -->
                    </div><!--/ .container -->
                </div><!--/ .landing-tasbih-header-caption -->


        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-header -->



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

            
                    $('#tgl-lahir').on('change', function() {

            var dob = new Date(this.value);
            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            if(age < 18) {
                $(this).val('');
                alert('Anda belum berumur 18 tahun ke atas');
               //document.getElementById('notif-tgllahir').style.display= 'none';
            }
        });
             $( "#uangpertanggunganTasbih" ).bind( "input", function() {
                 var value = $("#uangpertanggunganTasbih").val();
                 var conv = accounting.formatMoney(value, "Rp ", 0,",");
                 $(this).val(conv);
             });   
            
            $('#KalTasbih').click(function() {
                var value = $("#uangpertanggunganTasbih").val();
                var unc = accounting.unformat(value,0,",");
                var lp = $('#lamapembayaranTasbih option:Selected').val();
                
                //alert(lp);
                //alert(value)
                
                if(unc < 50000000 || lp=="null") {
                    alert("Mohom maaf, pastikan uang pertanggungan Anda masukkan minimal 50 juta dan lama pembayaran telah Anda pilih")
                    //return false;
                }else{
                    $.ajax({
                        url : '/landtasbih/',
                        type : 'POST',
                        data :{
                            'up' : value,
                            'lp' : lp,
							'kategori' : "<?php echo $kat;?>"
                        },
                        success : function(data){
                            //alert(data);
                                    document.location.href=window.location.protocol+"//"+window.location.host+'/produk/asuransi-syariah/tasbih/kalkulator/ilustrasi';
                        }
                    });
                     //alert(lp);
                     //alert(unc);
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
                //var usia = $("#Usia").val();
                var up = $('#UangPertanggunganLife option:Selected').val();
                var tanggal = $('#tgl-lahir').val();
                
                var dob=new Date(tanggal);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
               // alert(tanggal);

                if(age < 18 || age > 64 || nama == '' || up=="null") {
                    alert("Mohon maaf, pastikan usia Anda berada di 18-64 tahun dan pastikan semua inputan Anda benar")
                }else{
                    $.ajax({
                        url : '/landlife/',
                        type : 'POST',
                        data :{
                            'nama' : nama,
                            'bod' : age,
                            'up' : up,
                            'tanggal' :tanggal
                        },
                        success : function(data){
                           // alert(data);
                            document.location.href=window.location.protocol+"//"+window.location.host+'/kalkulator/lifeinsurance';
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