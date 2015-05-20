
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>

<header>
    <style>
        /* Override AJFC's feature box color */
        .box-dent--inner{ background: #009a44; }
        .box-dent::before{ border-top: 28px solid #009a44 !important;}
        .social-feeds .social-feeds--box.twitter{ background: #009a44 !important;}
        .social-feeds .social-feeds--box.facebook{background: #73c898!important;}
        .backg{max-width:1140px; position:relative; margin:auto;}
        #backg{max-width:1140px; position:relative; margin:auto;}
        .foto{width:100%; height:auto;}
        #but-size{width:292.5px;}
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
  font-size: 45px;
  pointer-events: none;
}
        
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
    
    @media only screen and (min-width: 1140px){
        body {
          font-size: initial !important;
        }
    }

</style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>INQUIRY FORM</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Nama</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="name" class="form-control" id="nama" placeholder="Nama" required /> 
                            <label id="notif-nama" style="display:none; color: #f00;">
                                Mohon maaf Anda belum atau salah memasukkan nama
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                   
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Jenis Kelamin</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="JenisKelamin" id="JenisKelamin">
                                <option value="p">Pria</option>
                                <option value="w">Wanita</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->


                    <div class="form-group">
                        <div class="col-md-4">
                            <label>DOB</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="DOB" value="" placeholder="Tanggal Lahir" />
                            <label id="notif-DOB" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>No Handphone (Min. 8 digit)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="phone" class="form-control" id="nohp" name="nohp" placeholder="0812345678" required onfocusout="this.value=validateNumber(this.value)" />
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
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required onfocusout="this.value=validateEMAIL(this.value)" />
                            <label id="notifemail" style="display:none; color: #f00;">
                                Mohon maaf email yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Provinsi</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" name="provinsi" id="provinsi_id" required>
                                <?php
                                    
                                    $getProv=new Object_MarketingOfficeWilayah_List();                                    
                                    foreach($getProv as $items){
                                        ?>
                                            <option value= "<?php echo $items->o_id; ?> "><?php echo $items->namaWilayah; ?></option>
                                        <?php
                                    }
                                
                                ?>
                                
                            
                            </select>
                            <label id="notifProvinsi" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->


                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-4">
                            <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih inquiry-send" id="Submit" name="Submit" value="Submit">
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>
                

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->
    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">
        


<!--
</div>
--></div>
        <div style="clear:both; "></div>
<nav class="main-navigation">
            <div class="row">

                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/tasbih" class="nav-item blueA sitemap">
                        <h4><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/kalkulator/tasbih" class="nav-item green sitemap">
                        <h4><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/tanya-jawab" class="nav-item orange question">
                        <h4><small>Tanya Jawab Produk</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.imkepo.com" target="_blank" class="nav-item users">
                        <h4><small>Cari Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/inquiry-form" class="nav-item red users">
                        <h4><small>Inquiry Form</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div>
            <div class="row">
                
            </div>
    </nav>
        <div class="items-container">
                    </div><!--/ .container -->

    </div>
</div><!--/ .container -->


<script type="text/javascript">
    $(document).ready(function(){

        $( 'li.aktif .nav_menu div' ).css( 'display', 'none' );
        $( 'li .nav_menu .white_image' ).css( 'display', 'none' );
        $( 'li.aktif .nav_menu .white_image' ).css( 'display', 'block' );
        var hash = window.location.hash.substring(1);

        if( hash != '' )
        {
            var target = '#modal-' + hash;
            $( target ).modal( 'show' );
        }
        
        $(this).on('click', '.inquiry-send', function(e){
            
            var nama=$('#nama').val();
            var kelamin=$('#JenisKelamin').val();
            var bod=$('#DOB').val();
            var email=$('#email').val();
            var nohp=$('#nohp').val();
            var prov=$('#provinsi_id').val();
            
            //alert(bod);
            
            if( nama == '' || email == '' || nohp == '' || bod == '' ||  nohp.length <= 8 || prov == ''){
                    if( nama == ''  )
                        document.getElementById('notif-nama').style.display= 'block';
                    if( email == '' )
                        document.getElementById('notifemail').style.display= 'block';
                    if( bod == '')
                        document.getElementById('notif-DOB').style.display= 'block';
                    if( prov == '' )
                        document.getElementById('notif-tgllahir').style.display= 'block';
                    if( nohp.length <= 8 || nohp == '')
                        document.getElementById('notifNoHP').style.display='block';
                    alert("Mohon Periksa Inputan Anda");
            }else{
            e.preventDefault();
            $.ajax({
                 "url" : "/inquriy-tasbih/",
                 "type" : "POST",
                 "data" : "nama="+ nama +
                          "&kelamin="+kelamin+
                          "&bod="+bod+
                          "&email="+email+
                          "&nohp="+nohp+
                          "&prov="+prov,
                 "success" : function(response){
                    alert("Inquiry Send");
                 }
             });
            }
            e.preventDefault();
        });

        $( ".pagenav .navi li" ).click(function(){
            $(".pagenav .navi li").removeClass('aktif');
            $(".pagenav .navi li .nav_menu div").css('display','block');
            $(".pagenav .navi li .nav_menu .white_image").css('display','none');
            $(this).addClass('aktif');
            $('li.aktif .nav_menu div').css('display', 'none');
            $('li.aktif .nav_menu .white_image').css('display', 'block');
            var data = $(this).attr('class');
            var id = data.split(' ');
            //alert($(".heading").offset().top);
            if(Math.floor( $(".heading").offset().top)<=212)
            {
                $('html, body').animate({scrollTop:$("#"+id[0]).offset().top-190}, 500);
            }
            else
            {
                $('html, body').animate({scrollTop:$("#"+id[0]).offset().top-90}, 500);
            }
        });
        
        $('#DOB').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0"
        });
        
    });
    
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
            return value;
        }else{
            document.getElementById('notifNoHP').style.display= 'none';
            return value;
        }
    };
</script>

	</div>

