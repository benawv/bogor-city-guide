<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
                                
                                <div class="landing-tasbih-header-caption--box" id="fixbox" style="background:white; display:block;">
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
                                </div><!--/ .landing-tasbih-header-caption--box -->

                                <div class="landing-tasbih-header-caption--box" id="fixbox-tasbih" style="background:#009a44; display:none;">
                                    <h2><span id="title">Ilustasi Allianz Tasbih</span></h2>
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
                                                <option value="null">lama Pembayaran</option>
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
                                    </form>
                                    
                                </div><!--/ .landing-tasbih-header-caption--box -->
                                
                                <div class="landing-tasbih-header-caption--box" id="fixbox-lifeinsurance" style="background:#003781; display:none;">
                                    <h2><span id="title">Ilustasi Allianz Life Insurance</span></h2>
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
                                            <input type="text" class="form-control" placeholder="Nama" id="Nama" required tabindex="1">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Usia" id="Usia" required tabindex="1">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="UangPertanggungan">
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
                                    </form>
                                    
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
            document.getElementById('fixbox-tasbih').style.display = 'none';
            document.getElementById('fixbox-lifeinsurance').style.display = 'block';
         }else if(value == "tasbih"){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixbox-tasbih').style.display = 'block';
            document.getElementById('fixbox-lifeinsurance').style.display = 'none';
         }else{
            document.getElementById('fixbox').style.display = 'block';
            document.getElementById('fixbox-tasbih').style.display = 'none';
            document.getElementById('fixbox-lifeinsurance').style.display = 'none';
         }
    };
    
    function ubahJenis1(value){
         var value = $('#JenisAsuransi1 option:Selected').val();
         if(value == 'lifeInsurance'){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixbox-tasbih').style.display = 'none';
            document.getElementById('fixbox-lifeinsurance').style.display = 'block';
         }else if(value == "tasbih"){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixbox-tasbih').style.display = 'block';
            document.getElementById('fixbox-lifeinsurance').style.display = 'none';
         }else{
            document.getElementById('fixbox').style.display = 'block';
            document.getElementById('fixbox-tasbih').style.display = 'none';
            document.getElementById('fixbox-lifeinsurance').style.display = 'none';
         }
    };
    
    function ubahJenis2(value){
         var value = $('#JenisAsuransi2 option:Selected').val();
         if(value == 'lifeInsurance'){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixbox-tasbih').style.display = 'none';
            document.getElementById('fixbox-lifeinsurance').style.display = 'block';
         }else if(value == "tasbih"){
            document.getElementById('fixbox').style.display = 'none';
            document.getElementById('fixbox-tasbih').style.display = 'block';
            document.getElementById('fixbox-lifeinsurance').style.display = 'none';
         }else{
            document.getElementById('fixbox').style.display = 'block';
            document.getElementById('fixbox-tasbih').style.display = 'none';
            document.getElementById('fixbox-lifeinsurance').style.display = 'none';
         }
    };
         
    
</script>