<div class="header" style="margin-top:-20px;">

    <div class="background" style="pointer-events:visible;">
        <!--<img src="/website/ajfc/img/bg-home.jpg" alt="Home" class="img-responsive" />-->
        <?php echo $this->image("Banner-Tasbih"); ?>
    </div><!--/ .background -->

        <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-4 col-md-offset-8">
                    <div class="box-dent mt32">
                        <div class="box-dent--inner">
                            <h2><?php echo $this->input("titleTasbih");?></h2>
                            <?php echo $this->wysiwyg("descTasbih");?>
                            <?php if($this->editmode){
                                echo $this->link("linkTasbih");
                            }else{
                                $linkT = $this->link("linkTasbih")->getHref();
                                $target = $this->link("linkTasbih")->getTarget();
                                $textT = $this->link("linkTasbih")->getText();
                                if($linkT != "")
                                {
                                    $href = $linkT;
                                }
                                else{
                                    $href = "#";
                                }
                            ?>
                                <a href="<?php echo $href;?>" target="<?php echo $target;?>"><?php echo $textT;?> <i class="fa fa-angle-right"></i></a>
                            <?php }?>
                        </div><!--/ .box-dent--inner -->
                    </div>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container-fluid -->
    </div><!--/ .caption -->



<div class="container boxes-view">

    <div>

        
        <div class="pimcore_area_tasbih pimcore_area_content"><link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css">
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
</style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>Inqury Form</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Nama</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nama" placeholder="Nama" required="" onfocusout="this.value=validateNama(this.value)"> 
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
                                <option value="l">Pria</option>
                                <option value="p">Wanita</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->


                    
                    
                                        <div class="form-group">
                        <div class="col-md-4">
                            <label>DOB</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="DOB" value="" placeholder="DOB">
                            <label id="notif-asuransijiwa" style="display:none; color: #f00;">
                                Mohon maaf inputan yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

<div class="form-group">
                        <div class="col-md-4">
                            <label>Email</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="" onfocusout="this.value=validateEMAIL(this.value)">
                            <label id="notifemail" style="display:none; color: #f00;">
                                Mohon maaf email yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    


            

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Kontribusi Berkala/ Premi pertahun</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="email" class="form-control" id="kontribusi-berkala" placeholder="0" readonly="">
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    
                     <div class="form-group">
                        <div class="col-md-4">
                            <label>No Handphone (Min. 8 digit)</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Handphone" required="" onfocusout="this.value=validateNumber(this.value)">
                            <label id="notifNoHP" style="display:none; color: #f00;">
                                Mohon maaf No HP yang Anda masukkan belum benar
                            </label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-4">
                            <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Submit" name="Submit" value="SUbmit">
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



<!--
</div>
--></div>
        <div style="clear:both; "></div>

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
    });
</script>

	</div>