<style>
          img { max-width: none; }
          .cropit-image-preview {

          }
          .avatar-caption {
            position: absolute;
            right: 16px;
            top: 16px;
          }
          .avatar-caption--footer {
            background: #b4b4b4;
            color: #3b579d;
            position: absolute;
            width: 100%;
            padding: 0 56px;
            z-index: 1;
            line-height: 52px;
            min-height: 52px;
            /*top: 342px;*/
            bottom: 0;
          }
          #ava2-m .avatar-caption--footer, #ava3-m .avatar-caption--footer {
            line-height: 15px;
            padding: 6px 45px;
            min-height: 41px;
            font-size: 9px;
          }
          #ava2-m .avatar-caption, #ava3-m .avatar-caption { right: 11px; top: 11px; }
          #ava2-m .avatar-caption--logo img, #ava3-m .avatar-caption--logo img { width: 37px; }
          #ava2-m .avatar-caption--footer img, #ava3-m .avatar-caption--footer img {
            width: 20px !important;
            left: 15px !important;
          }
          #ava21 img { display: none; }

        @media only screen and (max-width : 480px) {
            .cropit1 {
                width: 100%;
                background-position: 0px;
            }
            #cropped-ava21 {
                width: 100%;
                height: auto;
            }
            #canvas-ava21, .canvas-container, .upper-canvas {
                width: 100% !important;
                height: auto !important;
            }
            section.profile-maker .timelineContainer {
                width: 100%;
                max-width: 100%;
            }
        }

        /**
         * AVA31 Responsive Fixes
         */
        @media (max-width: 560px)
        {
            #ava31
            {
            }

            #ava31 #cropped-ava31
            {
                position: relative;
            }

            #ava31 #cropped-ava31,
            #ava31 #cropped-ava31 .cropit-image-background-container
            {
                width: 100%;
                max-width: 100%;
                min-width: 100%;
                height: auto;
            }

            #ava31 .cropit-ava31,
            #ava31 #canvas-ava31
            {
                min-width: 100%;
                max-width: 100%;
                width: 100%;
            }

            section.profile-maker .page-maker--form
            {
                /*
                margin-top: 120px !important;
                */
            }
        }

        @media (max-width: 480px)
        {
            section.profile-maker .page-maker--form
            {
                margin: 0 auto 32px;
            }
        }

    </style>

<script type="text/javascript">
           function setCookie(cname, cvalue) {
                document.cookie = cname + "=" + cvalue;
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
            ///alert(<?php echo $_COOKIE["uploadImage"]?>);

    function ava_resize_square(target)
    {
        var target_height = target.outerHeight();
        var target_width = target.outerWidth();
        var img_bg = target.find('.cropit-image-background');
        var canvas = target.find('.lower-canvas');

        target.css('height', target_width + 'px');
        img_bg.css('height', target_width + 'px');
        canvas.css('height', target_width + 'px');
        target.parent().parent().css('height', target_width + 'px');
        console.log(target_width + '/' + target_height);
    }

    $(function(){
        ava_resize_square($('.cropit-ava31'));
        /**
         * canvas height fix
         */
        setTimeout(function(){
            ava_resize_square($('.cropit-ava31'));
        }, 400);
    });

    $(window).resize(function(){
        ava_resize_square($('.cropit-ava31'));
    });

</script>


<script src="/website/static/profil-maker/js/jquery.validate.min.js"></script>
<script src="/website/static/profil-maker/js/jquery.keep-ratio.js"></script>

<section class="profile-maker">
    <div class="container">

        <div id="top" class="row profile-maker--title">
            <div class="col-xs-12">
                <h2><script>
                    var title = getCookie("keterangan");
                    document.write(title);
                </script></h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-xs-12">

            <script src="/website/static/profil-maker/js/jquery-ui-1.11.1.js"></script>
            <script src="/website/static/profil-maker/js/jquery.cropbox.js"></script>
            <script src="/website/static/profil-maker/js/jquery.cropit.js"></script>

                <div id="cover1" class="timelineContainer" style="display: none">

                    <!-- <div id="timelineBackground" class="page-maker--placeholdermain">
                        <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive">
                        <?php
                                 $session = new Zend_Session_Namespace('srcImage');
                        ?>
                        <div id="images" style="display:inline-block;">
                            <img src="<?php echo $session->src;?>" alt="Page Cover Landscaped Notepad" id="timelineBGload" class="headerimage ui-corner-all ui-draggable img-responsive" />
                        </div>

                    </div> --><!--/ .page-maker--placeholder -->

                    <div id="image-cropper">
                        <div id="cropped-1" class="cropit-image-preview-container">
                            <div class="cropit-image-preview cropit1">
                                <!-- <img src="website/static/images/profile-maker/banner2.jpg"> -->
                            </div>
                            <div id="place" class="landscape facebook-caption leftside">
                                <div id="notepad" class="facebook-caption--inner landscape-bg bg-blue">

                                    <h3><span id="judul">&lt;Title&gt;</span></h3> <br />

                                    <span id="konten">
                                        &lt;Description&gt;
                                    </span> <br />

                                </div><!--/ .facebook-caption--inner -->
                                <!-- <div class="facebook-caption-trapezoid"></div> -->

                                <div id="edge-note" class="edge e-blue">
                                    <span id="nama">&lt;Name&gt;</span>
                                </div>

                            </div> <!--/ .facebook-caption -->
                        </div>

                        <div class="slider-wrapper">
                            <!-- <span class="icon icon-image small-image"></span> -->
                            <i class="fa fa-file-image-o"></i>
                                <input type="range" class="cropit-image-zoom-input custom" min="0" max="1" step="0.01">
                            <i class="fa fa-file-image-o fa-2x"></i>
                            <!-- <span class="icon icon-image large-image"></span> -->
                        </div>

                    </div>

                    <div class="shade" id="timelineShade">
                        <form id="bgimageform" name="newad" method="post" enctype="multipart/form-data" action="">

                        </form> <!--/ #bgimageform -->
                    </div> <!--/ #shade -->

                </div> <!--/ #timelineContainer -->

                <div id="cover2" class="timelineContainer" style="display: none">

                    <div id="image-cropper">
                        <div id="cropped-2" class="cropit-image-preview-container">
                            <div class="cropit-image-preview cropit1">
                                <!-- <img src="website/static/images/profile-maker/banner2.jpg"> -->
                            </div>
                            <div id="place" class="portrait facebook-caption leftside">
                                <div id="notepad" class="facebook-caption--inner portrait-bg bg-blue" style="width: 80%;">

                                    <h3><span id="judul">&lt;Title&gt;</span></h3> <br />

                                    <span id="konten">
                                        &lt;Description&gt;
                                    </span> <br />

                                </div><!--/ .facebook-caption--inner -->
                                <!-- <div class="facebook-caption-trapezoid"></div> -->

                                <div id="edge-note" class="edge e-blue" style="width: 80%;">
                                    <span id="nama">&lt;Name&gt;</span>
                                </div>

                            </div> <!--/ .facebook-caption -->
                        </div>

                        <div class="slider-wrapper">
                            <!-- <span class="icon icon-image small-image"></span> -->
                            <i class="fa fa-file-image-o"></i>
                                <input type="range" class="cropit-image-zoom-input custom" min="0" max="1" step="0.01">
                            <i class="fa fa-file-image-o fa-2x"></i>
                            <!-- <span class="icon icon-image large-image"></span> -->
                        </div>

                    </div>

                    <div class="shade" id="timelineShade">
                        <form id="bgimageform" name="newad" method="post" enctype="multipart/form-data" action="">

                        </form> <!--/ #bgimageform -->
                    </div> <!--/ #shade -->

                </div> <!--/ #timelineContainer -->

                <div id="cover3" class="timelineContainer" style="display: none">

                    <div id="image-cropper">
                        <div id="cropped-3" class="cropit-image-preview-container">
                            <div class="cropit-image-preview cropit1">
                                <!-- <img src="website/static/images/profile-maker/banner2.jpg"> -->
                            </div>
                            <div id="place" class="square facebook-caption leftside">
                                <div id="notepad" class="facebook-caption--inner square-bg bg-blue">

                                    <h3><span id="judul">&lt;Title&gt;</span></h3> <br />

                                    <span id="konten">
                                        &lt;Description&gt;
                                    </span> <br />

                                </div><!--/ .facebook-caption--inner -->
                                <!-- <div class="facebook-caption-trapezoid"></div> -->

                                <div id="edge-note" class="edge e-blue">
                                    <span id="nama">&lt;Name&gt;</span>
                                </div>

                            </div> <!--/ .facebook-caption -->
                        </div>

                        <div class="slider-wrapper">
                            <!-- <span class="icon icon-image small-image"></span> -->
                            <i class="fa fa-file-image-o"></i>
                                <input type="range" class="cropit-image-zoom-input custom" min="0" max="1" step="0.01">
                            <i class="fa fa-file-image-o fa-2x"></i>
                            <!-- <span class="icon icon-image large-image"></span> -->
                        </div>

                    </div>

                    <div class="shade" id="timelineShade">
                        <form id="bgimageform" name="newad" method="post" enctype="multipart/form-data" action="">

                        </form> <!--/ #bgimageform -->
                    </div> <!--/ #shade -->

                </div> <!--/ #timelineContainer -->

                <!-- when mobile condition -->
                <div id="cover-m" class="timelineContainer fluid" style="display: none">

                    <div id="timelineBackground" class="page-maker--placeholdermain fluid">
                        <!-- <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive"> -->
                        <?php
                                 $session = new Zend_Session_Namespace('srcImage');
                        ?>
                        <div id="draggableHelper-m" style="display:inline-block;">
                            <img src="<?php echo $session->src;?>" alt="Page Cover Landscaped Notepad" id="timelineBGload" class="headerimage ui-corner-all ui-draggable img-responsive" />
                        </div>
                    </div><!--/ .page-maker--placeholder -->

                    <div id="place-m" class="landscape-m facebook-caption leftside">
                        <div id="notepad-m" class="facebook-caption--inner landscape-m-bg bg-blue">

                            <h3><span id="judul-m">&lt;Title&gt;</span></h3> <br />

                            <span id="konten-m">
                                &lt;Description&gt;
                            </span> <br />

                            <!-- <span id="nama">Akbar Fachriansyahasfsghsjsfsgsdgsdgrgdgdfgrhr</span> -->

                        </div><!--/ .facebook-caption--inner -->
                        <!-- <div class="facebook-caption-trapezoid"></div> -->

                        <div id="edge-note-m" class="edge e-blue">
                            <span id="nama-m">&lt;Name&gt;</span>
                        </div>

                    </div> <!--/ .facebook-caption -->

                    <div class="shade" id="timelineShade">
                        <form id="bgimageform" name="newad" method="post" enctype="multipart/form-data" action="">

                        </form> <!--/ #bgimageform -->
                    </div> <!--/ #shade -->

                </div> <!--/ #timelineContainer -->

                <!-- cropit avatar -->


                 <div id="ava1" class="page-maker--placeholder" style="display: none">
                        <div id="image-cropper-ava1">

	                        <div id="cropped-ava1" class="cropit-image-preview-container">
		                        <canvas id="canvas-ava1" width="300" height="300" style="border: 1px solid #ccc">
		                        </canvas>
	                        </div>
	                        
                        </div> 
                </div> 

                <div id="ava21" class="page-maker--placeholder" style="display: none">
                     <div id="image-cropper-ava21">
                            <div id="cropped-ava21" class="cropit-image-preview cropit-ava21">
                                <?php $session = new Zend_Session_Namespace('srcImage'); ?>

                                <canvas id="canvas-ava21" width="472" height="394" style="border:1px solid #ccc">
                                <img src="<?php echo $session->src?>" id="myImg">
                                
                            </div>
                        </div>
                </div><!--/ .page-maker--placeholder -->

                <div id="ava31" class="page-maker--placeholder" style="display: none">
                    <div id="image-cropper-ava31">
                            <!--<div id="cropped-ava31" class="cropit-image-preview-container">-->
                            <div id="cropped-ava31" class="cropit-image-preview cropit-ava31">

                                <canvas id="canvas-ava31" width="504" height="504" style="border:1px solid #ccc">
                                <img src="<?php echo $session->src?>" id="myImg31">
                                

                            </div>
                            
                    </div>
                </div><!--/ .page-maker--placeholder -->

                <div id="fillform" class="page-maker--form">
                    <div class="page-maker--form-title">
                        <h3>Notepad</h3>
                    </div><!--/ .page-maker--form-title -->
                    <div class="page-maker--form-inner">
                        <form id="formx" role="form">
                            <div id="input1" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Title</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" name="headline" id="atas" maxlength="30" class="form-control headlineCover" required>
                                    <div id="counter2">Letters remaining: <span id="char2">20</span></div>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input2" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Description</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <!-- <div class="highlighter" id="overflowText"></div> -->
                                    <textarea class="form-control contentCover" name="content" id="tengah" maxlength="200" rows="5" required></textarea>
                                    <div id="counter">Letters remaining: <span id="char">180</span></div>

                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input3" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>First Name</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" name="first_name" id="bawah1" class="form-control nama1Cover" required>

                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input4" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Last Name</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" name="last_name" id="bawah2" class="form-control nama2Cover" required>

                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input5" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Notepad Color</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <select id="color" class="form-control" required>
                                        <option value"blue" selected> Blue </option>
                                        <option value"orange"> Orange </option>
                                        <option value"red"> Red </option>
                                    </select>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input6" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Notepad Position</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <select id="position" class="form-control" required>
                                        <option value"left" selected> Left </option>
                                        <option value"right"> Right </option>
                                    </select>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div class="row" style="margin-top: 16px;">
                                <div class="col-xs-6 col-sm-3">
                                    <a id="preview" href="#top" class="btn btn-default btn-block">Pratinjau</a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-6 col-sm-3">
                                    <a id="save" href="#ask" class="btn btn-primary btn-block">Simpan</a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-sm-3">
                                    <!-- <input type="button" id="gambar" class="btn btn-default btn-block" value="Ganti Gambar"> -->
                                    <!--<a id="gambar" href="/profil-maker/page2" class="btn btn-default btn-block">Ganti Gambar</a>-->
                                    <?php 
	                                    $doc = Document::getById($this->document->getParentId());
                                    ?>
                                    <a href="<?php echo $doc->getFullPath()?>" class="customHref">
                                            <input type="button" class="btn btn-default btn-block" value="Ganti Gambar">
                                    </a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-sm-3">
                                    <!-- <input type="button" id="pilih" class="btn btn-default btn-block" value="Pilih Template"> -->
                                    <!--<a id="pilih" href="/profil-maker/page1" class="btn btn-default btn-block">Pilih Template</a>-->
                                    <a href="/template-maker" class="customHref">
                                            <input type="button" class="btn btn-default btn-block" value="Pilih Template">
                                    </a>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                        </form>

                            <script>
                            // just for the demos, avoids form submit
                                jQuery.validator.setDefaults({
                                  debug: true,
                                  success: "valid"
                                });
                                var form = $( "#formx" );
                                form.validate();
                                $( "#preview" ).click(function() {
                                  form.valid();
                                });
                            </script>


                    </div><!--/ .page-maker--form-inner -->

                </div><!--/ .page-maker--form -->

                <div id="ask" class="page-maker--form" style="display: none">
                    <div class="page-maker--form-title">
                        <h3>Notepad Detail</h3>
                    </div><!--/ .page-maker--form-title -->
                    <div class="page-maker--form-inner">
                        <form role="form">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>Apakah anda yakin dengan gambar ini?</p>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div class="row" style="margin-top: 16px;">
                                <div class="col-xs-6 col-sm-3">
                                    <a id="cancel" href="#fillform" class="btn btn-default btn-block">Tidak</a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-6 col-sm-3">
                                    <a id="download" href="#top" class="btn btn-primary btn-block">Ya</a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-sm-3">
	                                <?php 
	                                    $doc = Document::getById($this->document->getParentId());
                                    ?>
                                    <a href="<?php echo $doc->getFullPath()?>" class="customHref">
                                            <input type="button" class="btn btn-default btn-block" value="Ganti Gambar">
                                    </a>
                                    <!--<input type="button" class="btn btn-default btn-block" value="Pilih Template">-->
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <a href="/template-maker" class="customHref">
                                            <input type="button" class="btn btn-default btn-block" value="Pilih Template">
                                    </a>
                                    <!--<input type="button" class="btn btn-default btn-block" value="Pilih Template">-->
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                        </form>

                    </div><!--/ .page-maker--form-inner -->

                </div><!--/ .page-maker--form -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <?php //for( $i = 0; $i < 2; $i++ ): ?>
		<!--
        <div class="row">

           <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4 id="News Feed Post Template">News Feed Post Template</h4>
                    <img src="/website/static/images/profile-maker/Agent Facebook News Feed Post Template.png" alt="Template Image" class="img-responsive" >
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template4" res="472x394px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>(Mobile Friendly)</span>
                        <!--<a href="/profil-maker-create" class="btn btn-primary">Pilih</a>
                    </div><!--/ .pm-buttons
                </div><!--/ .profile-maker-box 
            </div><!--/ .col-xs-12 

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Profile Picture</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Facebook Profile Picture.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template5" res="300x300px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>(Mobile Friendly)</span>
                        <!--<a href="/profil-maker/2" class="btn btn-primary">Pilih</a>
                    </div><!--/ .pm-buttons 
                </div><!--/ .profile-maker-box 
            </div><!--/ .col-xs-12 

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Timeline Post Template</h4>
                    <img src="/website/static/images/profile-maker/Allianz Facebook Timeline Post Template.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template6" res="504x504px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>(Mobile Friendly)</span>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>
                    </div><!--/ .pm-buttons 
                </div><!--/ .profile-maker-box 
            </div><!--/ .col-xs-12 

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Landscaped Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template1" res="851x315px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>(Desktop Only)</span>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>
                    </div><!--/ .pm-buttons 
                </div><!--/ .profile-maker-box 
            </div><!--/ .col-xs-12

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Portrait Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Portrait Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template2" res="851x315px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>(Desktop Only)</span>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>
                    </div><!--/ .pm-buttons 
                </div><!--/ .profile-maker-box 
            </div><!--/ .col-xs-12 

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Square Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Square Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template3" res="851x315px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>(Desktop Only)</span>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>
                    </div><!--/ .pm-buttons 
                </div><!--/ .profile-maker-box 
            </div><!--/ .col-xs-12 

        </div> <!--/.row 
      	-->

        <?php //endfor; ?>

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

        <div class="row">
            <div class="col-xs-12">
                    <div id="imaged"></div>

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

    </div><!--/ .container -->
</section><!--/ .profile-maker -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>

<!-- Call FabricJS File -->
<script src="/website/static/profil-maker/js/fabric.min.js"></script>

<?php
    $session = new Zend_Session_Namespace('srcImage');
?>
<script>
	var temp = getCookie("template");
	
	/* 
		Template 5 (Profile Picture Template) Profile maker using FabricJS
		Added By Handri Pangestiaji
		Created at Sept 29 2015
	======================================================================
	*/
	
	// Create canvas profile picture
	var cvAva1 = new fabric.Canvas('canvas-ava1', {
		backgroundColor: 'white'
	});
	
	ca1W = cvAva1.getWidth();
	ca1H = cvAva1.getHeight();
	
	// Add Allianz icon on top right of canvas
	cvAva1.setOverlayImage('/website/static/images/profile-maker/allianz-logo.png', cvAva1.renderAll.bind(cvAva1), {
		left: 240,
		top: 10,
		originX: 'left',
		originY: 'top'
	});
	
	// Add uploaded image in canvas
	fabric.Image.fromURL('<?php echo $session->src?>', function(img_ava1){
			
			//get original image size
		    ih = img_ava1.height;
		    iw = img_ava1.width;
		    
		    //keep aspect ratio pas render image
		    width_ratio  = ca1W  / iw;
		    height_ratio = ca1H / ih;
		    if (width_ratio > height_ratio) {
		        fw = iw * width_ratio;
		        fh = ih * fw / iw;
		        //alert("if");
		    } else {
		        fh = ih * height_ratio;
		        fw = iw * fh / ih;
		        //alert("else");  
		    }
		    
		    img_ava1.set({
		        width: fw,
		        height: fh
		    });
		        
		    //set visibility resizer
		    
		    img_ava1.setControlsVisibility ({
		        mt: false,
		        mr: false,
		        mb: false,
		        ml: false
		    });
		    
			cvAva1.add(img_ava1);
		    cvAva1.centerObject(img_ava1);
		    cvAva1.sendToBack(img_ava1);
			cvAva1.setActiveObject(img_ava1);
		}, 
		{
			lockUniScaling: true
		}
	);

/*
        Template 4 (News Feed Post Template) Profile maker using FabricJS
        Added By Handri Pangestiaji
        Created at Sept 28 2015
    ======================================================================
    */
    var temp = getCookie("template");
    if(temp == "template4") {
    var canvas = new fabric.Canvas('canvas-ava21', {
        backgroundColor: 'white'
    });

    //take img tag by id
    imgElement = document.getElementById('myImg');

    //get canvas size
    cvsW = canvas.getWidth();
    cvsH = canvas.getHeight();

    // Add Grey Rectangle object bottom of canvas
    var rect = new fabric.Rect({
        width: cvsW,
        height: 52,
        fill: 'rgb(180, 180, 180)',
        selectable: false,
        top: 342,
        originY: "top"
    });
    canvas.add(rect);
    //canvas.sendToBack(rect);
    canvas.bringForward(rect);

    // Add FB Icon bottom of canvas
    var fb = new fabric.Image.fromURL('/website/static/images/profile-maker/fb.png', function(img){
        img.scaleToWidth(30);
        canvas.add(img);
    }, {
        top: 352,
        left: 20,
        originY: 'top',
        selectable: false
    });

    //Add Text Allianz Indonesia on bottom of canvas
    var text = new fabric.Text("Allianz Indonesia", {
        fill: 'rgb(59, 87, 157)',
        selectable: false,
        fontFamily: 'Arial, Helvetica, sans-serif',
        top: 358,
        left: 65,
        fontSize: 16
    });

    canvas.add(text);

    // Add Allianz icon on top right of canvas
    var logo = canvas.setOverlayImage('/website/static/images/profile-maker/allianz-logo.png', canvas.renderAll.bind(canvas), {
        left: 410,
        top: 10,
        originX: 'left',
        originY: 'top'
    });

    //Add uploaded image in canvas
    // var imgInstance = new fabric.Image.fromURL('<?php echo $session->src?>', function(img){
    // 		canvas.add(img);
    // 		canvas.centerObject(img);
    // 		canvas.sendToBack(img);
    // 		canvas.setActiveObject(img);
    // 	},
    // 	{
    // 		lockUniScaling: true
    // 	}
    // );

    //get original image size
    ih = imgElement.naturalHeight;
    iw = imgElement.naturalWidth;

    //keep aspect ratio pas render image
    width_ratio  = cvsW  / iw;
    height_ratio = cvsH / ih;
    if (width_ratio > height_ratio) {
        fw = iw * width_ratio;
        fh = ih * fw / iw;
        //alert("if");
    } else {
        fh = ih * height_ratio;
        fw = iw * fh / ih;
        //alert("else");
    }

    // //manggil image yang aspect ratio ke canvas
    var imgInstance = new fabric.Image(imgElement);
        imgInstance.set({
        width: fw,
        height: fh
    });

    //set visibility resizer
    imgInstance.setControlsVisibility ({
        mt: false,
        mr: false,
        mb: false,
        ml: false
    });
    canvas.add(imgInstance);
    canvas.centerObject(imgInstance);
    canvas.sendToBack(imgInstance);
    canvas.setActiveObject(imgInstance);
    canvas.renderAll();

    // Binding click for Pratinjau and Simpan Button
    $('#preview, #save').click(function(){
        nama1 = $('#bawah1').val();
        nama2 = $('#bawah2').val();

        text.setText("Allianz Indonesia "+ nama1 + " " + nama2);
        canvas.add(text);
    });
    
    }
    
    // Click Event on Ya button
    $('body').on('click','#download',function(){
        if(temp == "template4") {

            canvas.deactivateAll().renderAll();

            var dataURL = canvas.toDataURL({
              format: 'png'
            });

            //window.location.href = "/profil-maker/profil-thankyou";
            window.location.href = "/asn/allianz-social-media-for-sales/template-maker/news-feed-post/thankyou";

            var link = document.createElement('a');
            link.href = dataURL;
            link.download = "News Feed Post Allianz.png";
            document.body.appendChild(link);
            link.click();
        }
		else if(temp == "template5") {
			cvAva1.deactivateAll().renderAll();
			
			var dataURL = cvAva1.toDataURL({
				format: 'png'
			});
			
			//window.location.href = "/profil-maker/profil-thankyou";
            window.location.href = "/asn/allianz-social-media-for-sales/template-maker/profile-picture/thankyou";

			var link = document.createElement('a');
			link.href = dataURL;
			link.download = "Profil Picture Allianz.png";
			document.body.appendChild(link);
			link.click();
			
		}
    });
    
    //======================= End of template 4 ============================

    /*
        Template 6 (News Feed Post Template) Profile maker using FabricJS
        Added By Robbi
        Created at Oct 01 2015
    ======================================================================
    */
    if(temp == "template6") {

    var canvas = new fabric.Canvas('canvas-ava31', {
        backgroundColor: 'white'
    });

    //take img tag by id
    imgElement = document.getElementById('myImg31');

    //get canvas size
    cvsW = canvas.getWidth();
    cvsH = canvas.getHeight();

    // Add Grey Rectangle object bottom of canvas
    var rect = new fabric.Rect({
        width: cvsW,
        height: 52,
        fill: 'rgb(180, 180, 180)',
        selectable: false,
        top: 452,
        originY: "top"
    });
    canvas.add(rect);
    //canvas.sendToBack(rect);
    canvas.bringForward(rect);

    // Add FB Icon bottom of canvas
    var fb = new fabric.Image.fromURL('/website/static/images/profile-maker/fb.png', function(img){
        img.scaleToWidth(30);
        canvas.add(img);
    }, {
        top: 462,
        left: 20,
        originY: 'top',
        selectable: false
    });

    //Add Text Allianz Indonesia on bottom of canvas
    var text = new fabric.Text("Allianz Indonesia", {
        fill: 'rgb(59, 87, 157)',
        selectable: false,
        fontFamily: 'Arial, Helvetica, sans-serif',
        top: 468,
        left: 65,
        fontSize: 16
    });

    canvas.add(text);

    // Add Allianz icon on top right of canvas
    var logo = canvas.setOverlayImage('/website/static/images/profile-maker/allianz-logo.png', canvas.renderAll.bind(canvas), {
        left: 440,
        top: 10,
        originX: 'left',
        originY: 'top'
    });


    //get original image size
    ih = imgElement.naturalHeight;
    iw = imgElement.naturalWidth;

    //keep aspect ratio pas render image
    width_ratio  = cvsW  / iw;
    height_ratio = cvsH / ih;
    if (width_ratio > height_ratio) {
        fw = iw * width_ratio;
        fh = ih * fw / iw;
        //alert("if");
    } else {
        fh = ih * height_ratio;
        fw = iw * fh / ih;
        //alert("else");
    }

    // //manggil image yang aspect ratio ke canvas
    var imgInstance = new fabric.Image(imgElement);
        imgInstance.set({
        width: fw,
        height: fh
    });

    //set visibility resizer
    imgInstance.setControlsVisibility ({
        mt: false,
        mr: false,
        mb: false,
        ml: false
    });
    canvas.add(imgInstance);
    canvas.centerObject(imgInstance);
    canvas.sendToBack(imgInstance);
    canvas.setActiveObject(imgInstance);
    canvas.renderAll();

    // Binding click for Pratinjau and Simpan Button
    $('#preview, #save').click(function(){
        nama1 = $('#bawah1').val();
        nama2 = $('#bawah2').val();

        text.setText("Allianz Indonesia "+ nama1 + " " + nama2);
        canvas.add(text);
    });

    // Click Event on Ya button
    $('body').on('click','#download',function(){
        if(temp == "template6") {

            canvas.deactivateAll().renderAll();

            var dataURL = canvas.toDataURL({
              format: 'png'
            });

            window.location.href = "/asn/allianz-social-media-for-sales/template-maker/timeline-post/thankyou";

            var link = document.createElement('a');
            link.href = dataURL;
            link.download = "Timeline Post Allianz.png";
            document.body.appendChild(link);
            link.click();
        }
    });
    }
    //======================= End of template 6 ============================
	
	  var img = document.getElementById('imgid'); 
						  var height =$(".cropit-ava2 ").height();
						  var width = $(".cropit-ava2").width();
						  var height_ava3 =$(".cropit-ava3 ").height();
						  var width_ava3 = $(".cropit-ava3").width();
						  var rasioX = 472/width;
						  var rasioY = 394/height;
						  var rasioX_ava3 = 504/width_ava3;
						  var rasioY_ava3 = 504/height_ava3;
     //Draggable & Resizable option
    $(function() {
        $( "#draggableHelper, #draggableHelper2, #draggableHelper3, #draggableHelper4" ).resizable({
            aspectRatio: true,
            handles: 'ne, se, sw, nw, n, e, s, w'
        });
        $( "#draggableHelper, #draggableHelper2, #draggableHelper3, #draggableHelper4" ).draggable();
    });

    //Resize available
    $('.ui-resizable-handle').css("display", "none");
    $( ".ui-resizable-handle, img#timelineBGload, img.ava-img" )
            .mouseenter(function() {
                            $('.ui-resizable-handle').fadeIn(100);
                        })
            .mouseleave(function() {
                            $('.ui-resizable-handle').fadeOut(100);
                        });

    $(document).ready(function(){
        $(".template").on("click",function(){
        var ket = $(this).parent().parent().parent().find("h4").text();
        var id = $(this).attr("id");
        var res = $(this).attr("res");

            setCookie("template", id);
            setCookie("keterangan", ket);
            setCookie("res", res);
        });

     
            $('#image-cropper, #image-cropper-ava1').cropit({
                //exportZoom: 2,
                imageState: {
                    src: '<?php echo $session->src ?>',
                },
                imageBackground: true,
                imageBackgroundBorderWidth: 1,
                smallImage: 'allow',
                freeMove: true,
            });

            //$('#image-cropper-ava31').cropit({
            //    imageState: {
            //        src: '<?php echo $session->src ?>',
            //    },
            //    imageBackground: true,
            //    imageBackgroundBorderWidth: 1,
            //    smallImage: 'allow',
            //    freeMove: true
            //});

            var imageCropper = $('#image-cropper, #image-cropper-ava1, #image-cropper-ava2, #image-cropper-ava3');
                imageCropper.cropit('imageSrc');

    });

    function getId(obj) {
    var id=obj;
        //alert("idnya"+id);
        setCookie("template", id);
        //document.cookie = id;
        //var x = document.cookie
        //alert(x);
        //alert(id);
    }

    $(function(){
          if(temp == "template4") {
            if($(window).width() < 480) {

                $('#cropped-ava21').keepRatio({ ratio: 4/3, calculate: 'height' });
                $('section.profile-maker .page-maker--placeholder').css('margin-bottom', '45px');

                setTimeout(function(){
                    $('#cropped-ava21').keepRatio({ ratio: 4/3, calculate: 'height' });
                }, 400);

                
            }
            
        }
    });

    $(window).resize(function(){
        $('#cropped-ava21').keepRatio({ ratio: 4/3, calculate: 'height' });
        $('section.profile-maker .page-maker--form').css('margin-top', '9%');
    });


</script>

