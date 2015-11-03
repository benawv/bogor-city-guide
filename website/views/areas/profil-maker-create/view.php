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

    /**
     * Progress Bar Styling
     * http://www.sanwebe.com/2012/05/ajax-image-upload-with-progressbar-with-jquery-and-php
     */

    #progressbox
    {
        border: solid 1px #ddd; /*#00397D;*/
        /*border-top: none;*/
        border-radius: 0;
        margin: 0 auto 16px;
        padding: 0;
        width: 100%;
        height: 32px;
        position: relative;
        display: block;
    }

    #progressbar
    {
        background-color: #00397D;
        width: 1%;
        height: 100%;
    }

    #statustxt
    {
        top: 0;
        left: 0;
        width: 100%;
        position: absolute;
        display: block;
        color: #999;
        margin: 0 auto;
        padding: 0;
        line-height: 32px;
        text-align: center;
    }

    #output
    {
        display: none;
        visibility: hidden;
        opacity: 0;
    }

    /**
     * stoop-upload
     * World's best file input
     */

    .stoop-upload
    {
        position: relative;
        border: solid 1px #ccc;
        min-height: 48px;
    }

    .stoop-upload:hover .stoop-upload__label
    {
        background: #002654;
    }

    .stoop-upload .stoop-upload__label
    {
        position: absolute;
        top: 0px;
        right: 0px;
        height: 100%;
        line-height: 48px;
        padding: 0 32px;
        text-transform: uppercase;
        background: #00397D;
        color: white;
        z-index: 4;
        font-weight: normal;
        pointer-events: none;
        text-align: center;
    }
    /*
    .stoop-upload .stoop-upload__label span
    {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        min-width 100% !important;
        height: 100%;
        background: red;
        margin: 0 auto;
        z-index: 3;
    }
    */
    .stoop-upload .stoop-upload__filename
    {
        border-radius: 0;
        box-shadow: 0 0 0 transparent;
        border: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 0 32px;
        pointer-events: none;
        cursor: default;
    }

    .stoop-upload input[type="file"]
    {
        width: 100%;
        height: 48px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;
    }

    @media (max-width: 767px)
    {
        .stoop-upload
        {
        }

        .stoop-upload .stoop-upload__label
        {
            width: 100%;
            text-align: center;
        }
    }

</style>

<script type="text/javascript">

    function readURL(input)
    {
        if (input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                document.getElementById('preview').src=e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function checkfiles()
    {
        var fup = document.getElementById('imgfile');
        var fileName = fup.value;
        var ext = fileName.substring(fileName.lastIndexOf('.')+1);

        if(ext == "")
        {
            document.getElementById('test').innerHTML = "Tidak ada file yang dipilih";
            //var msg ="Tidak ada file yang dipilih";
            fup.focus();
            return false;
        }
        else if (ext == "JPG" || ext == "PNG" || ext == "jpg" || ext == "png" || ext == "jpeg" || ext == "JPEG")
        {
            // $('#test').hide();
            // $("body").prepend("<div id='dvLoading'></div>");
            return true;
        }
        else
        {
            document.getElementById('test').innerHTML = "File tidak di dukung";
            //var msg ="Tidak ada file yang dipilih";
            fup.focus();
            return false;
        }
    }

    function setCookie(cname, cvalue)
    {
        document.cookie = cname + "=" + cvalue + "; ";
    }

    function getCookie(cname)
    {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++)
        {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }

    getCookie("template");

    /*
    this.$('.js-loading-bar').modal({
        backdrop: 'static',
        show: false
    });
    */

</script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.2/jquery-ui.js" async></script>

<section class="profile-maker">
    <div class="container">

        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2><script>document.write(getCookie("keterangan"));</script></h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="profile-maker--uploader">
                    <p>
                        <!--Upload your files here. Supported formats: JPG and PNG,<br />-->
                        Upload fotomu disini, dengan format JPG atau PNG dengan resolusi minimal
                        <script>document.write(getCookie("res"));</script>
                        <br />
                        <script>document.write(getCookie("keterangan"));</script>
                    </p>

                    <form role="form" action="/upload-image/" method="post" enctype="multipart/form-data" id="profilMakerForm">

                        <div class="form-group">
                            <!--<img id="preview" src="#" alt="your image" width="100" height="100" />-->
                            <div class="stoop-upload">
                                <label class="stoop-upload__label" id="imglabel">Pilih Gambar</label>
                                <input type="text" id="imgname" class="form-control disabled stoop-upload__filename" readonly value="Belum ada gambar terpilih">
                                <input id="imgfile" type="file" name="uploadFoto" required/>
                            </div><!--/ .stoop-upload -->
                            <input id="redirect" type="hidden" name="urlRedirect" value="<?php echo $this->link("link-template")->getHref()?>"/>
                        </div><!--/ .form-group -->

                        <div style="color:red" id="test"></div>

                        <div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                        <div id="output"></div>

                        <div class="form-group" id="test">
                            <!-- <input id="bar" type="submit" name="submit" value="Unggah" class="btn btn-primary" /> -->
                            <input type="submit" name="" value="Unggah" class="btn btn-primary" />
                            <!--<a href="/profil-maker/page3" class="btn btn-primary"></a>-->
                            <a href="javascript:history.go(-1);" class="btn btn-default">Kembali</a>
                            <br />
                            <?php if($this->editmode) { ?>
                                <?php echo $this->link("link-template")?>
                            <?php } ?>
                        </div><!--/ .form-group -->
                    </form>

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

    </div><!--/ .container -->
</section><!--/ .profile-maker -->

<script src="/website/static/js/jquery.form.js" async></script>
<script>
    $(function(){

        /**
         * jQuery Form Plugin
         * http://malsup.com/jquery/form/#file-upload
         * http://stackoverflow.com/questions/15410265/file-upload-progress-bar-with-jquery
         */
        $('form#profilMakerForm').submit(function(e){
            e.preventDefault();
            if(checkfiles() === true)
            {
                $(this).ajaxSubmit({
                    /*
                     * More info about the options
                     * http://malsup.com/jquery/form/#options-object
                     */
                    target: '#output',
                    beforeSubmit: function(){
                        $('#progressbox').stop().slideDown('fast');
                    },
                    uploadProgress: OnProgress, //upload progress callback
                    success:function(){
                        //alert('Done, now reidrect.'); // change this line
                        $('#statustxt').html('Mengalihkan...');
                        document.location.href = "http://"+window.location.host+'<?php echo $this->link("link-template")->getHref();?>'; // change the url
                    },
                    resetForm: true,
                    forceSync: true
                });
            }
            return false;
        });
        
        function OnProgress(event, position, total, percentComplete)
        {
            //Progress bar
            $('#progressbar').css('width', percentComplete + '%'); //update progressbar percent complete
            $('#statustxt').html(percentComplete + '%'); //update status text
            if(percentComplete>50)
            {
                $('#statustxt').css('color','#fff'); //change status text to white after 50%
            }
            if(percentComplete > 99)
            {
                $('#statustxt').html('Harap tunggu...');
            }
            console.log('Uploading: ' + percentComplete + '%');
        }

        /**
         * Get tmp_name when file input changed
         */
        $('#imgfile').change(function(){
            console.log('file input changed');
            $('#imgname').val($('#imgfile').val());
            if($(window).outerWidth() < 768)
            {
                $('#imglabel').html($('#imgfile').val());
            }
        });

    });

        $(document).ready(function () {
                var intputElements = document.getElementById("imgfile");
                    intputElements.oninvalid = function (e) {
                        e.target.setCustomValidity("");
                        if (!e.target.validity.valid) {
                            e.target.setCustomValidity("Silahkan pilih gambar");
                        }
                    };
        })
</script>
