<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/profil-maker.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>
    .progress-bar.animate { width: 100%; }
    .modal { position: relative; overflow-y: auto; }
    .modal-body { padding: 0; }
    .modal-dialog { width: 100%; margin: 0 auto 20px auto; }
    .progress { margin: 20px 0; }
    .modal-content { box-shadow: none; }
    .progress-striped .bar {
        background-color: #00397D;
        background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        -webkit-background-size: 40px 40px;
        -moz-background-size: 40px 40px;
        -o-background-size: 40px 40px;
        background-size: 40px 40px;
    }
    .progress .bar {
        width: 0%;
        height: 100%;
        padding: 3px 0;
        color: #ffffff;
        float: left;
        font-size: 12px;
        text-align: center;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        background-color: #00397D;
        background-image: -moz-linear-gradient(top, #149bdf, #0480be);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#149bdf), to(#0480be));
        background-image: -webkit-linear-gradient(top, #149bdf, #0480be);
        background-image: -o-linear-gradient(top, #149bdf, #0480be);
        background-image: linear-gradient(to bottom, #149bdf, #0480be);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff149bdf', endColorstr='#ff0480be', GradientType=0);
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
        -moz-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: width 0.6s ease;
        -moz-transition: width 0.6s ease;
        -o-transition: width 0.6s ease;
        transition: width 0.6s ease;
    } 
    .ui-progressbar {
        position: relative;
        overflow: hidden;
        margin: 20px 0;
    }
    .progress-label {
        position: absolute;
        left: 42%;
        top: 4px;
        font-weight: bold;
        /*text-shadow: 1px 1px 0 #fff;*/
        display:none;
    }
    .ui-progressbar .ui-progressbar-value {
        border-radius: 0;
        margin: 0;
    }
</style>

<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('preview').src=e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}


function checkfiles(){
    var fup = document.getElementById('imgfile');
    var fileName = fup.value;
    var ext = fileName.substring(fileName.lastIndexOf('.')+1);

    if (ext == ""){
        document.getElementById('test').innerHTML = "Tidak ada file yang dipilih";
        //var msg ="Tidak ada file yang dipilih";
        fup.focus();
        return false;
    }else if (ext == "JPG" || ext == "PNG" || ext == "jpg" || ext == "png" || ext == "jpeg" || ext == "JPEG"){

        $('#test').hide();
        $("body").prepend("<div id='dvLoading'></div>");
        // $( "#progressbar" ).progressbar();
        // var progressbar = $( "#progressbar" ),
        //     progressLabel = $( ".progress-label" );
        //     progressLabel.show();
        //     progressbar.progressbar({
        //       value: false,
        //       change: function() {
        //         progressLabel.text( progressbar.progressbar( "value" ) + "%" );
        //       },
        //       complete: function() {
        //         //progressLabel.text( "Complete!" );
        //         //window.location="<?php echo $this->link("link-template")->getHref()?>";
        //       }
        //     });
     
        //     function progress() {
        //       var val = progressbar.progressbar( "value" ) || 0;
        //       progressbar.progressbar( "value", val + 1 );
        //        if ( val < 99 ) {
        //             setTimeout( progress, 50 );
        //        }
        //     }
        //     setTimeout( progress, 10 );

        // var modal = $('.js-loading-bar'),
        //     bar = modal.find('.progress-bar');
              
        //     modal.modal('show');
        //     bar.addClass('animate');

        //     setTimeout(function() {
        //         bar.removeClass('animate');
        //         modal.modal('hide');
        //     }, 2000);
            
           //Interval  
        // var progress = setInterval(function () {
        //     var bar = $('.bar');
        //     var barwidth = $('.progress');
        //     console.log(barwidth.width());

        //     if ( bar.width() >= barwidth.width() ) {
        //         clearInterval(progress);
        //         $('.progress').removeClass('active');
        //     } else {
        //         bar.width(bar.width() + 40);
        //     }
        //     bar.text(bar.width() / 4 + "%");
        // }, 800);

        return true;

    }else{
        document.getElementById('test').innerHTML = "File tidak di dukung";
        //var msg ="Tidak ada file yang dipilih";
        fup.focus();
        return false;
    }
}
</script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.2/jquery-ui.js"></script>

<section class="profile-maker">
    <div class="container">

        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2><script>
                document.write(getCookie("keterangan"));
            </script></h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-xs-12">

                <div class="profile-maker--uploader">
                    <p>
                        <!--Upload your files here. Supported formats: JPG and PNG,<br />-->
                        Upload fotomu disini, dengan format JPG atau PNG dengan resolusi minimal
                        <script>
                            document.write(getCookie("res"));
                        </script>
                        <br />
                        <script>
                            document.write(getCookie("keterangan"));
                        </script>
                    </p>

                    <form role="form" action="/upload-image/" method="post" enctype="multipart/form-data" onsubmit="return checkfiles();">
                        <div class="form-group">
                            <!--<img id="preview" src="#" alt="your image" width="100" height="100" />-->
                            
                            <input id="imgfile" type="file" name="uploadFoto" /> 
                            <input id="redirect" type="hidden" name="urlRedirect" value="<?php echo $this->link("link-template")->getHref()?>"/>
                            <!--<input type="file" required>-->
                        </div><!--/ .form-group -->
                        <div style="color:red" id="test"></div>
                        <p></p>

                        <!-- Modal Progressbar -->
                        <!-- <div class="modal js-loading-bar">
                         <div class="modal-dialog">
                           <div class="modal-content">
                             <div class="modal-body">
                               <div class="progress progress-popup">
                                <div class="progress-bar"></div>
                               </div>
                             </div>
                           </div>
                         </div>
                        </div> -->

                        <!-- <div class="progress progress-striped active">
                            <div class="bar" style="width: 0%;"></div>
                        </div> -->

                        <div id="progressbar"><div class="progress-label">Loading...</div></div>

                        <div class="form-group" id="test">
                            <!--<a href="/profil-maker/page3" class="btn btn-primary">-->
                                <input id="bar" type="submit" name="submit" value="Unggah" class="btn btn-primary" />
                    </form>
                            <!--</a>-->
                            <a href="javascript:history.go(-1);" class="btn btn-default">Kembali</a>
                            <br />
                            <?php if($this->editmode) { ?>
                                <?php echo $this->link("link-template")?>
                            <?php } ?>
                        </div><!--/ .form-group -->

                        
                    
                </div><!--/ .profile-maker--uploader -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
        
        <div class="row">
            <div class="col-xs-12">
                <h4><b>Panduan Pengguna</b></h4>
                <p>
                    <ul>
                        <li>Kami sarankan untuk menggunakan aplikasi ini dengan Google Chrome Minimal Ver.45 atau Mozilla Firefox Minimal Ver.38.</li>
                        <li>Untuk mendapatkan hasil yang maksimal, mohon menggunakan PC atau Tablet Anda.</li>
                        <li>Bagi pengguna yang menggunakan iPad dan iPhone, silahkan download image yang dihasilkan setelah menekan tombol "simpan gambar" dengan menekan pada hasil gambar dan tekan tombol "Save Image".</li>
                        
                    </ul>
                </p>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <script type="text/javascript">
            function setCookie(cname, cvalue) {
                document.cookie = cname + "=" + cvalue + "; ";
            }

            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for(var i=0; i<ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1);
                    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
                }
                return "";
            }
            /*function getId(obj) {
                var id=obj;
                alert("idnya"+id);
                setCookie("image", id);
            }*/

           //function myImg(){
           // var preview = document.getElementById("preview").src;
           // setCookie("preview", preview);
           //}
            //alert("preview : "+preview);
            getCookie("template");

            // Setup
            this.$('.js-loading-bar').modal({
              backdrop: 'static',
              show: false
            });

        </script>

    </div><!--/ .container -->
</section><!--/ .profile-maker -->