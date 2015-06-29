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
                
                    <?php 
                        echo $this->image("gallery-lifeInsurance", array(
                                "thumbnail" => "staticBanner",
                                'title' 	=> 'lifeInsurance',
                                 "width" => "1020px", "height" => "400px",
                                 "id" => "lifeInsurance"
                        ));
                    ?>

                <div class="landing-tasbih-header-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-4 col-md-offset-1">

                                <div class="landing-tasbih-header-caption--box">
                                    <h2>Illustrasi Allianz</h2>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Uang Pertanggungan" required tabindex="1">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2" id="JenisAsuransi" onfocusout="this.value=ubahJenis(this.value)">
                                                <option value="tasbih">Tasbih</option>
                                                <option value="lifeInsurance">Life Insurance</option>
                                                <option value="payment">Payment</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default" tabindex="3">
                                                <i class="fa fa-calculator"></i> Hitung Premi Anda
                                            </button>
                                        </div><!--/ .form-group -->
                                    </form>
                                    <div class="trapezoid"></div>
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

    alert('test');
         
    function ubahJenis(value){
         var value = $('#JenisAsuransi option:Selected').val();
         if(value == lifeInsurance){
            document.getElementById('tasbih').style.display= 'none';
            document.getElementById('lifeInsurance').style.display= 'block';
         }else{
            document.getElementById('tasbih').style.display= 'block';
            document.getElementById('lifeInsurance').style.display= 'none';
         }
    };
         
    
</script>