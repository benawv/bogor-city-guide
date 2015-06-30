<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>
    .landing-tasbih-header-caption--box .blue .left {
        left:60px;
        background:#003781;
    }
    
    .landing-tasbih-header .landing-tasbih-header-caption .landing-tasbih-header-caption--box .landing-tasbih-header-caption--box .blue .right{
        right:60px !important;
        background:#003781 !important;
    }
    
    .landing-tasbih-header-caption--box .green .left {
        left:60px;
        background:#009a44;
    }
    
    .landing-tasbih-header-caption--box .green .right{
        right:60px;
        background:#009a44;
    }
    
    
</style>

<section class="landing-tasbih-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                    <?php 
                        echo $this->image("gallery-tasbih", array(
                                "thumbnail" => "staticBanner",
                                'title' 	=> 'Tasbih',
                                 "width" => "1020px", "height" => "400px",
                                 "id" => "tasbih"
                        ));
                    ?>
                


                <div class="landing-tasbih-header-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-4 col-md-offset-1">
                                <?php
                                    $pos = $this->select('position_')->getData();
								    $color = $this->select('color_')->getData();
							?>
                                <div class="landing-tasbih-header-caption--box <?php echo $color; ?> <?php echo $pos; ?>" id="fixbox" style="display:block;">
                                    <h3>Pilih Jenis Asuransi</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="JenisAsuransi" onfocusout="this.value=ubahJenis(this.value)">
                                                <option value="null">Pilih</option>
                                                <option value="tasbih">Tasbih</option>
                                                <option value="lifeInsurance">Life Insurance</option>
                                                <option value="payment">Payment</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                    </form>
                                    <?php if($this->editmode) { ?>
			                        	<p>
			                        	<?php 
			                        		echo "Position: <br />";
			                        		echo $this->select("position_",array(
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
			                        		echo $this->select("color_",array(
											    "store" => array(
											        array("green", "Green"),
											        array("blue", "Blue")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
			                        <?php } ?>
                                    <div class="trapezoid"></div>
                                </div><!--/ .landing-tasbih-header-caption--box -->

                            <?php
                                    $posTasbih = $this->select('positionTasbih_')->getData();
								    $colorTasbih = $this->select('colorTasbih_')->getData();
							?>
                                <div class="landing-tasbih-header-caption--box <?php echo $colorTasbih; ?> <?php echo $posTasbih; ?>" id="fixboxTasbih" style=" display:none;">
                                    <h2><span id="title">Ilustrasi Allianz Tasbih</span></h2>
                                    <form role="form">
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="JenisAsuransi1" onfocusout="this.value=ubahJenis1(this.value)">
                                                <option value="null">Pilih</option>
                                                <option value="tasbih">Tasbih</option>
                                                <option value="lifeInsurance">Life Insurance</option>
                                                <option value="payment">Payment</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Uang Pertanggungan" required tabindex="1">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2">
                                                <option value="null">Lama Pembayaran</option>
                                                <option value="5">5 tahun</option>
                                                <option value="10">10 tahun</option>
                                                <option value="15">15 tahun</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default" tabindex="3">
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
                                    $posLife = $this->select('positionLife_')->getData();
								    $colorLife = $this->select('colorLife_')->getData();
							?>
                                
                                <div class="landing-tasbih-header-caption--box <?php echo $colorLife; ?> <?php echo $posLife; ?>" id="fixboxLifeinsurance" style="display:none;">
                                    <h2><span id="title">Ilustrasi Allianz Life Insurance</span></h2>
                                    <form role="form">
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="JenisAsuransi2" onfocusout="this.value=ubahJenis2(this.value)">
                                                <option value="null">Pilih</option>
                                                <option value="tasbih">Tasbih</option>
                                                <option value="lifeInsurance">Life Insurance</option>
                                                <option value="payment">Payment</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama" id="Nama" required tabindex="1" onfocusout="this.value=validateNama(this.value)">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Usia" id="Usia" required tabindex="1">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="UangPertanggungan">
                                                <option value="null">Uang Pertanggungan</option>
                                                <option value="1000">1 Milyar</option>
                                                <option value="500">500 Juta</option>
                                                <option value="250">250 Juta</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default" tabindex="3">
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

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-header -->



<script>

    //alert('test');
         
    function ubahJenis(value){
         var value = $('#JenisAsuransi option:Selected').val();
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
         var value = $('#JenisAsuransi1 option:Selected').val();
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
         var value = $('#JenisAsuransi2 option:Selected').val();
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
    
//Tooltip
this.tooltip=function(){xOffset=10;yOffset=20;$("a.tooltip,img.tooltip,p.tooltip").hover(function(e){this.t=this.title;this.title="";$("body").append("<p id='tooltip'>"+this.t+"</p>");$("#tooltip").css("top",e.pageY-xOffset+"px").css("left",e.pageX+yOffset+"px").fadeIn("fast")},function(){this.title=this.t;$("#tooltip").remove()});$("a.tooltip,img.tooltip,p.tooltip").mousemove(function(e){$("#tooltip").css("top",e.pageY-xOffset+"px").css("left",e.pageX+yOffset+"px")})};$(document).ready(function(){tooltip()})
       
//Validasi
    
    function validateNama(nama){
        var re = /^[a-zA-Z ]*$/;
        if(!re.test(nama)){
            return null;
        }else{
            return nama;
        }
    };
    
</script>