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
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 0 56px;
            z-index: 1;
            line-height: 52px;
            min-height: 52px;
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

        @media only screen and (max-width : 640px) { 
            .cropit1 {
                width: 100%;
                background-position: 0px;
            } 
            section.profile-maker .timelineContainer {
                width: 100%;
                max-width: 100%;
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

</script>


<script src="/website/static/profil-maker/js/jquery.validate.min.js"></script>


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
                        <div id="cropped" class="cropit-image-preview-container">
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

                    <div id="timelineBackground" class="page-maker--placeholdermain">
                        <?php
                                 $session = new Zend_Session_Namespace('srcImage');
                        ?>
                       <img src="<?php echo $session->src;?>" alt="Page Cover Landscaped Notepad" id="timelineBGload" class="headerimage ui-corner-all ui-draggable img-responsive" />

                    </div><!--/ .page-maker--placeholder -->

                    <div id="place" class="portrait facebook-caption rightside">
                        <div id="notepad" class="facebook-caption--inner portrait-bg bg-orange">

                            <h3><span id="judul">Headline</span></h3> <br />
                            <span id="konten">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                Ut wisi enim ad minim veniam
                            </span> <br />
                            
                        </div><!--/ .facebook-caption--inner -->
                        <!-- <div class="facebook-caption-trapezoid"></div> -->

                        <div id="edge-note" class="edge e-orange">
                            <span id="nama">Robbi Nugraha</span>
                        </div> 

                    </div> <!--/ .facebook-caption -->

                    <div class="shade" id="timelineShade">
                        <form id="bgimageform" name="newad" method="post" enctype="multipart/form-data" action="">
                            
                        </form> <!--/ #bgimageform -->
                    </div> <!--/ #shade -->

                </div> <!--/ #timelineContainer -->

                <div id="cover3" class="timelineContainer" style="display: none">

                    <div id="timelineBackground" class="page-maker--placeholdermain">
                        <!-- <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive"> -->
                        <?php
                                 $session = new Zend_Session_Namespace('srcImage');
                        ?>
                       <img src="<?php echo $session->src;?>" alt="Page Cover Landscaped Notepad" id="timelineBGload" class="headerimage ui-corner-all ui-draggable img-responsive" />

                    </div><!--/ .page-maker--placeholder -->

                    <div id="place" class="square facebook-caption leftside">
                        <div id="notepad" class="facebook-caption--inner square-bg bg-blue">

                            <h3><span id="judul">Headline</span></h3> <br />
                            <span id="konten">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                Ut wisi enim ad minim veniam
                            </span> <br />
                            
                        </div><!--/ .facebook-caption--inner -->
                        <!-- <div class="facebook-caption-trapezoid"></div> -->

                        <div id="edge-note" class="edge e-orange">
                            <span id="nama">Robbi Nugraha</span>
                        </div> 

                    </div> <!--/ .facebook-caption -->

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
                                <div class="cropit-image-preview cropit-ava1">
                                    <div id="avacapture1" class="avatar-caption">
                                        <div class="avatar-caption--logo">
                                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="slider-wrapper">
                                <i class="fa fa-file-image-o"></i>
                                    <input type="range" class="cropit-image-zoom-input custom" min="0" max="1" step="0.01">
                                <i class="fa fa-file-image-o fa-2x"></i>    
                            </div>             
                        </div> 
                </div> 

                <!-- when mobile condition -->
                <div id="ava1-m" class="page-maker--placeholder fluid" style="display: none">
                    <div id="avatar1" class="avatar-m w300">
                        <div id="avacapture1" class="avatar-caption">
                            <div class="avatar-caption--logo">
                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                            </div><!--/ .avatar-caption--logo -->
                        </div><!--/ .avatar-caption -->
                        <?php
                            $session = new Zend_Session_Namespace('srcImage');
                        ?>
                        <div id="draggableHelper-ava1-m" style="display:inline-block;">
                            <img src="<?php echo $session->src;?>" alt="Profile Picture" class="ava-img img-responsive">
                        </div>    
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div id="ava21" class="page-maker--placeholder" style="display: none">
                     <div id="image-cropper-ava21">
                            <div id="cropped-ava21" class="cropit-image-preview-container">
                                <div class="cropit-image-preview cropit-ava21">
                                    <div id="avacapture2" class="avatar-caption">
                                        <div class="avatar-caption--logo">
                                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                                        </div>
                                    </div>
                                    <div class="avatar-caption--footer" id = "imgid">
                                        <img src="/website/static/images/profile-maker/fb.png" alt=""  style="position: absolute; width: 29px; left: 19px; top: 11px;">
                                        <!-- <i class="fa fa-facebook-square fa-2x"></i> --> &nbsp;
                                        <span>Allianz Indonesia</span>&nbsp;
                                        <strong><span id="cname">&lt;First Name&gt; &lt;Last Name&gt;</span></strong>
                                    </div><!--/ .avatar-caption-footer -->
                                </div>
                                
                            </div>
                            <div class="slider-wrapper">
                                <i class="fa fa-file-image-o"></i>
                                    <input type="range" class="cropit-image-zoom-input custom" min="0" max="1" step="0.01">
                                <i class="fa fa-file-image-o fa-2x"></i>    
                            </div>             
                        </div>
                </div><!--/ .page-maker--placeholder -->

                <!-- when mobile condition -->
                <div id="ava2-m" class="page-maker--placeholder" style="display: none">
                    <div id="image-cropper-ava2">
                            <div id="cropped-ava2" class="cropit-image-preview-container">
                                <div class="cropit-image-preview cropit-ava2">
                                    <div id="avacapture2" class="avatar-caption">
                                        <div class="avatar-caption--logo">
                                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                                        </div>
                                    </div>
                                    <div class="avatar-caption--footer">
                                        <img src="/website/static/images/profile-maker/fb.png" alt="" style="position: absolute; width: 29px; left: 19px; top: 11px;">
                                        <!-- <i class="fa fa-facebook-square fa-2x"></i> --> &nbsp;
                                        <span>Allianz Indonesia</span>&nbsp;
                                        <strong><span id="cname-m">&lt;First Name&gt; &lt;Last Name&gt;</span></strong>
                                    </div> <!--/ .avatar-caption-footer -->
                                </div>
                                
                            </div>
                            <div class="slider-wrapper">
                                <i class="fa fa-file-image-o"></i>
                                    <input type="range" class="cropit-image-zoom-input custom" min="0" max="1" step="0.01">
                                <i class="fa fa-file-image-o fa-2x"></i>    
                            </div>             
                        </div>
                </div> 

                <div id="ava31" class="page-maker--placeholder" style="display: none">
                    <div id="image-cropper-ava31">
                            <div id="cropped-ava31" class="cropit-image-preview-container">
                                <div class="cropit-image-preview cropit-ava31">
                                    <div id="avacapture3" class="avatar-caption">
                                        <div class="avatar-caption--logo">
                                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                                        </div>
                                    </div>
                                    <div class="avatar-caption--footer">
                                        <img src="/website/static/images/profile-maker/fb.png" alt="" style="position: absolute; width: 29px; left: 19px; top: 11px;">
                                        <!-- <i class="fa fa-facebook-square fa-2x"></i> --> &nbsp;
                                        <span>Allianz Indonesia</span>&nbsp;
                                        <strong><span id="cname">&lt;First Name&gt; &lt;Last Name&gt;</span></strong>
                                    </div><!--/ .avatar-caption-footer -->
                                </div>
                                
                            </div>
                            <div class="slider-wrapper">
                                <i class="fa fa-file-image-o"></i>
                                    <input type="range" class="cropit-image-zoom-input custom" min="0" max="1" step="0.01">
                                <i class="fa fa-file-image-o fa-2x"></i>    
                            </div>             
                        </div> 
                </div><!--/ .page-maker--placeholder -->

                <div id="ava3-m" class="page-maker--placeholder" style="display: none">
                    <div id="image-cropper-ava3">
                            <div id="cropped-ava3" class="cropit-image-preview-container">
                                <div class="cropit-image-preview cropit-ava3">
                                    <div id="avacapture3" class="avatar-caption">
                                        <div class="avatar-caption--logo">
                                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                                        </div>
                                    </div>
                                    <div class="avatar-caption--footer">
                                        <img src="/website/static/images/profile-maker/fb.png" alt="" style="position: absolute; width: 29px; left: 19px; top: 11px;">
                                        <!-- <i class="fa fa-facebook-square fa-2x"></i> --> &nbsp;
                                        <span>Allianz Indonesia</span>&nbsp;
                                        <strong><span id="cname">&lt;First Name&gt; &lt;Last Name&gt;</span></strong>
                                    </div> <!--/ .avatar-caption-footer -->
                                </div>
                                
                            </div>
                            <div class="slider-wrapper">
                                <i class="fa fa-file-image-o"></i>
                                    <input type="range" class="cropit-image-zoom-input custom" min="0" max="1" step="0.01">
                                <i class="fa fa-file-image-o fa-2x"></i>    
                            </div>             
                        </div>
                </div> 

                <div id="fillform" class="page-maker--form">
                    <div class="page-maker--form-title">
                        <h3>Notepad</h3>
                    </div><!--/ .page-maker--form-title -->
                    <div class="page-maker--form-inner">
                        <form id="formx" role="form">
                            <div id="input1" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Headline</label>
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
                                    <a href="/profil-maker/page2" class="customHref">
                                            <input type="button" class="btn btn-default btn-block" value="Ganti Gambar">
                                    </a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-sm-3">
                                    <!-- <input type="button" id="pilih" class="btn btn-default btn-block" value="Pilih Template"> -->
                                    <!--<a id="pilih" href="/profil-maker/page1" class="btn btn-default btn-block">Pilih Template</a>-->
                                    <a href="/profil-maker/page1" class="customHref">
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
                                    <a href="/profil-maker/page2" class="customHref">
                                            <input type="button" class="btn btn-default btn-block" value="Ganti Gambar">
                                    </a>
                                    <!--<input type="button" class="btn btn-default btn-block" value="Pilih Template">-->
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <a href="/profil-maker/page1" class="customHref">
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

        <div class="row">
           
           <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4 id="News Feed Post Template">News Feed Post Template</h4>
                    <img src="/website/static/images/profile-maker/Agent Facebook News Feed Post Template.png" alt="Template Image" class="img-responsive" >
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template4" res="472x394px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>Mobile Friendly</span>
                        <!--<a href="/profil-maker-create" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Profile Picture</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Facebook Profile Picture.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template5" res="300x300px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>Mobile Friendly</span>
                        <!--<a href="/profil-maker/2" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Timeline Post Template</h4>
                    <img src="/website/static/images/profile-maker/Allianz Facebook Timeline Post Template.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3"> 
                            <input type="button" id="template6" res="504x504px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>Mobile Friendly</span>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Landscaped Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template1" res="851x315px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>Desktop Only</span>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Portrait Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Portrait Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template2" res="851x315px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>Desktop Only</span>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Square Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Square Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page3">
                            <input type="button" id="template3" res="851x315px" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <span>Desktop Only</span>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

        </div> <!--/.row -->

        <?php //endfor; ?>

        <div class="row">
            <div class="col-xs-12">
                    <div id="imaged"></div>

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

    </div><!--/ .container -->
</section><!--/ .profile-maker -->
                    
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>

<?php
    $session = new Zend_Session_Namespace('srcImage');
?>
<script>
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

        /* Resize with cropit */
            $('#image-cropper-ava2').cropit({ 
                //exportZoom: 2,
                imageState: {
                    src: '<?php echo $session->src ?>',
                },
                imageBackground: true,
                imageBackfroundBorderWidth: 1,
                smallImage: 'allow',
                freeMove: true,
                onOffsetChange: function(offset) {
                      var pos = (offset.x*rasioX)+"px "+(offset.y*rasioY)+"px";
                      //$("#duplicate .cropit-image-preview").css("background-position",pos);
                      // $("# image-cropper-ava21.cropit-image-background").css("left",(offset.x*rasioX)+"px");
                      //$("#duplicate .cropit-image-background").css("top",(offset.y*2)+"px");
					$("#image-cropper-ava21 .cropit-image-preview").css("background-position",pos);
					$("#image-cropper-ava21 .cropit-image-background").css("left",(offset.x*rasioX)+"px");
					$("#image-cropper-ava21 .cropit-image-background").css("top",(offset.y*rasioY)+"px");
                    
                    var val_ava = $("#image-cropper-ava2 .cropit-image-preview").css("background-size");
                     var result1 = val_ava.split(' ');
                     // console.log(result1);
                     var result21 = result1[0].split('px');
                     var result22 = result1[1].split('px');
                     var size = (result21[0]*rasioX)+"px "+(result22[0]*rasioY)+"px";
                     $("#image-cropper-ava21 .cropit-image-preview").css("background-size",size);
                    
                },
                onZoomChange:function(value){
                     var val_ava = $("#image-cropper-ava2 .cropit-image-preview").css("background-size");
                     var val_ava_left = $("#image-cropper-ava2 .cropit-image-background").css("left").split('px');
                     var val_ava_top = $("#image-cropper-ava2 .cropit-image-background").css("top").split('px');
                     var val_ava_height = $("#image-cropper-ava2 .cropit-image-background").css("height").split('px');
                     var val_ava_width = $("#image-cropper-ava2 .cropit-image-background").css("width").split('px');
                     //console.log(val_ava);
                     var result1 = val_ava.split(' ');
                     // console.log(result1);
                     var result21 = result1[0].split('px');
                     var result22 = result1[1].split('px');
                     var size = (result21[0]*rasioX)+"px "+(result22[0]*rasioY)+"px";
                     $("#image-cropper-ava21 .cropit-image-preview").css("background-size",size);
                     // console.log(val_ava_left[0]*2);
                     // console.log(val_ava_top[0]*2);
                     $("#image-cropper-ava21 .cropit-image-background").css("left",(val_ava_left[0]*rasioX)+"px");
                     $("#image-cropper-ava21 .cropit-image-background").css("top",(val_ava_top[0]*rasioY)+"px");
                     $("#image-cropper-ava21 .cropit-image-background").css("height",(val_ava_height[0]*rasioY)+"px");
                     $("#image-cropper-ava21 .cropit-image-background").css("width",(val_ava_width[0]*rasioX)+"px");
					 // console.log(rasioX);
                     //$("#duplicate .cropit-image-background").css("left",(result21[0]*2)+"px");
                     //$("#duplicate .cropit-image-background").css("top",(result22[0]*2)+"px");
                     //var val_ava2 = $("#duplicate .cropit-image-zoom-input.custom").val(val_ava);
                     //console.log(val_ava2);
                }
            });
 /* Resize with cropit */
           $('#image-cropper-ava3').cropit({ 
                //exportZoom: 2,
                imageState: {
                    src: '<?php echo $session->src ?>',
                },
                imageBackground: true,
                imageBackfroundBorderWidth: 1,
                smallImage: 'allow',
                freeMove: true,
                onOffsetChange: function(offset) {
                      var pos = (offset.x*rasioX_ava3)+"px "+(offset.y*rasioY_ava3)+"px";
                      //$("#duplicate .cropit-image-preview").css("background-position",pos);
                      // $("# image-cropper-ava21.cropit-image-background").css("left",(offset.x*rasioX)+"px");
                      //$("#duplicate .cropit-image-background").css("top",(offset.y*2)+"px");
					$("#image-cropper-ava31 .cropit-image-preview").css("background-position",pos);
					$("#image-cropper-ava31 .cropit-image-background").css("left",(offset.x*rasioX)+"px");
					$("#image-cropper-ava31 .cropit-image-background").css("top",(offset.y*rasioY)+"px");
					 var val_ava3 = $("#image-cropper-ava3 .cropit-image-preview").css("background-size");
					 var result2 = val_ava3.split(' ');
                    
                     var result31 = result2[0].split('px');
                     var result32 = result2[1].split('px');
					 
				    var size = (result31[0]*rasioX_ava3)+"px "+(result32[0]*rasioY_ava3)+"px";
                     $("#image-cropper-ava31 .cropit-image-preview").css("background-size",size);
                },
                onZoomChange:function(value){
                     var val_ava3 = $("#image-cropper-ava3 .cropit-image-preview").css("background-size");
                     var val_ava3_left = $("#image-cropper-ava3 .cropit-image-background").css("left").split('px');
                     var val_ava3_top = $("#image-cropper-ava3 .cropit-image-background").css("top").split('px');
                     var val_ava3_height = $("#image-cropper-ava3 .cropit-image-background").css("height").split('px');
                     var val_ava3_width = $("#image-cropper-ava3 .cropit-image-background").css("width").split('px');
                     //console.log(val_ava);
                     var result2 = val_ava3.split(' ');
                    
                     var result31 = result2[0].split('px');
                     var result32 = result2[1].split('px');
					 
				    var size = (result31[0]*rasioX_ava3)+"px "+(result32[0]*rasioY_ava3)+"px";
                     $("#image-cropper-ava31 .cropit-image-preview").css("background-size",size);
                     // console.log(val_ava_left[0]*2);
                     // console.log(val_ava_top[0]*2);
                     $("#image-cropper-ava31 .cropit-image-background").css("left",(val_ava3_left[0]*rasioX_ava3)+"px");
                     $("#image-cropper-ava31 .cropit-image-background").css("top",(val_ava3_top[0]*rasioY_ava3)+"px");
                     $("#image-cropper-ava31 .cropit-image-background").css("height",(val_ava3_height[0]*rasioY_ava3)+"px");
                     $("#image-cropper-ava31 .cropit-image-background").css("width",(val_ava3_width[0]*rasioX_ava3)+"px");
					 // console.log(rasioX);
                     //$("#duplicate .cropit-image-background").css("left",(result21[0]*2)+"px");
                     //$("#duplicate .cropit-image-background").css("top",(result22[0]*2)+"px");
                     //var val_ava2 = $("#duplicate .cropit-image-zoom-input.custom").val(val_ava);
                     //console.log(val_ava2);
                }
            });
            
			$('#image-cropper, #image-cropper-ava1').cropit({ 
                //exportZoom: 2,
                imageState: {
                    src: '<?php echo $session->src ?>',
                },
                imageBackground: true,
                imageBackfroundBorderWidth: 1,
                smallImage: 'allow',
                freeMove: true,
            });
			
            $('#image-cropper-ava21, #image-cropper-ava31').cropit({ 
                imageState: {
                    src: '<?php echo $session->src ?>',
                },
                imageBackground: true,
                imageBackfroundBorderWidth: 1,
                smallImage: 'allow',
                freeMove: true
            });
            
            var imageCropper = $('#image-cropper, #image-cropper-ava1, #image-cropper-ava2, #image-cropper-ava3');
                imageCropper.cropit('imageSrc');
            //$('body').on('click','#download',function(){
            //          var imageData = $('#image-cropper-ava2').cropit('export');
            //          console.log(imageData);
            //          window.open(imageData);
            //});
            
            // $('.export').click(function() {
            //     var imageData = $('#image-cropper, #image-cropper-ava1, #image-cropper-ava2, #image-cropper-ava3').cropit('export');
            //         window.open(imageData);
            // });

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
                        
</script>

