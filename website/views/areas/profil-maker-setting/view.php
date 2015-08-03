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

                <div id="cover1" class="timelineContainer" style="display: none">

                    <div id="timelineBackground" class="page-maker--placeholdermain">
                        <!-- <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive"> -->
                        <?php
                                 $session = new Zend_Session_Namespace('srcImage');
                        ?>
                       <img src="<?php echo $session->src;?>" alt="Page Cover Landscaped Notepad" id="timelineBGload" class="headerimage ui-corner-all ui-draggable img-responsive" />

                    </div><!--/ .page-maker--placeholder -->

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

                    <div class="shade" id="timelineShade">
                        <form id="bgimageform" name="newad" method="post" enctype="multipart/form-data" action="">
                            
                        </form> <!--/ #bgimageform -->
                    </div> <!--/ #shade -->

                    <!-- <div id="timelineProfilePic">
                        <div style="padding:5px">
                            <img src="/website/static/images/profile-maker/Allianz Agent Facebook Profile Picture.png" style="width:100%">
                        </div>
                    </div> --> <!--/ #timelineProfilePic -->

                </div> <!--/ #timelineContainer --> 

                <div id="cover2" class="timelineContainer" style="display: none">

                    <div id="timelineBackground" class="page-maker--placeholdermain">
                        <!-- <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive"> -->
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

                    <!-- <div id="timelineProfilePic">
                        <div style="padding:5px">
                            <img src="/website/static/images/profile-maker/Allianz Agent Facebook Profile Picture.png" style="width:100%">
                        </div>
                    </div> --> <!--/ #timelineProfilePic -->

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

                    <!-- <div id="timelineProfilePic">
                        <div style="padding:5px">
                            <img src="/website/static/images/profile-maker/Allianz Agent Facebook Profile Picture.png" style="width:100%">
                        </div>
                    </div> --> <!--/ #timelineProfilePic -->

                </div> <!--/ #timelineContainer -->


                <div id="ava1" class="page-maker--placeholder" style="display: none">
                    <div class="avatar">
                        <div id="avacapture1" class="avatar-caption">
                            <div class="avatar-caption--logo">
                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                            </div><!--/ .avatar-caption--logo -->
                        </div><!--/ .avatar-caption -->
                        <?php
                            $session = new Zend_Session_Namespace('srcImage');
                        ?>
                        <img src="<?php echo $session->src;?>" alt="Profile Picture" class="ava-img img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div id="ava2" class="page-maker--placeholder" style="display: none">
                    <div id="avatar2" class="avatar">
                        <div id="avacapture2" class="avatar-caption">
                            <div class="avatar-caption--logo">
                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                            </div><!--/ .avatar-caption--logo -->
                            <div class="avatar-caption--footer">
                                <img src="/website/static/images/profile-maker/fb.png" alt="" style="position: absolute; width: 29px; left: 19px; top: 11px;">
                                <!-- <i class="fa fa-facebook-square fa-2x"></i> --> &nbsp;
                                <span>Allianz Indonesia</span>&nbsp;
                                <strong><span id="cname">&lt;First Name&gt; &lt;Last Name&gt;</span></strong>
                            </div><!--/ .avatar-caption-footer -->
                        </div><!--/ .avatar-caption -->
                         <?php
                            $session = new Zend_Session_Namespace('srcImage');
                         ?>
                        <img src="<?php echo $session->src;?>" alt="Profile Picture" class="ava-img img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

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
                                    <input type="text" name="headline" id="atas" class="form-control">
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input2" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Description</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <!-- <div class="highlighter" id="overflowText"></div> -->
                                    <textarea class="form-control" name="content" id="tengah" maxlength="200" rows="5"></textarea>
                                    <div id="counter">Letters remaining: <span id="char">180</span></div>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input3" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>First Name</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" name="first_name" id="bawah1" class="form-control">
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input4" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Last Name</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" name="last_name" id="bawah2" class="form-control">
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div id="input5" class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Notepad Color</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <select id="color" class="form-control">
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
                                    <select id="position" class="form-control" >
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
                                    <input type="button" id="gambar" class="btn btn-default btn-block" value="Ganti Gambar" style="display: none">
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-sm-3">
                                    <input type="button" id="pilih" class="btn btn-default btn-block" value="Pilih Template" style="display: none">
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                        </form>

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
                                    <a id="cancel" href="#fillform" class="btn btn-default btn-block">Batal</a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-6 col-sm-3">
                                    <a id="download" href="#top" class="btn btn-primary btn-block">Simpan</a>    
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-sm-3">
                                    <input type="button" class="btn btn-default btn-block" value="Pilih Template">
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                        </form>

                    </div><!--/ .page-maker--form-inner -->

                </div><!--/ .page-maker--form -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <?php for( $i = 0; $i < 2; $i++ ): ?>

        <div class="row">

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a id="landscape" href="#" class="btn btn-primary">Create</a>
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Portrait Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a id="portrait" href="#" class="btn btn-primary">Create</a>
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Square Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a id="square" href="#" class="btn btn-primary">Create</a>
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

        </div><!--/ .row -->

        <?php endfor; ?>

        <div class="row">
            <div class="col-xs-12">

                <div id="imaged"></div>

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

    </div><!--/ .container -->
</section><!--/ .profile-maker -->

<script>

    var temp = getCookie("template");
    console.log(temp);

    if(temp == "template1") {
        //alert("landscape");
        $("#cover1").show();
        $("#place").prop('class', 'landscape facebook-caption leftside');
        $("#notepad").prop('class', 'facebook-caption--inner landscape-bg bg-blue');
    }
    else if(temp == "template2") {
        //alert("portrait");
        $("#cover1").show();
        $("#place").prop('class', 'portrait facebook-caption leftside');
        $("#notepad").prop('class', 'facebook-caption--inner portrait-bg bg-blue');
    }
    else if(temp == "template3") {
        //alert("square");
        $("#cover1").show();
        $("#place").prop('class', 'square facebook-caption leftside');
        $("#notepad").prop('class', 'facebook-caption--inner square-bg bg-blue');
    }
    else if(temp == "template4" || temp == "template6") {
        //alert("ava2");
        $("#ava2").css("display", "block");
        $("#input1, #input2, #input5, #input6").hide();
    }
    else if(temp == "template5") {
        //alert("ava1");
        $("#ava1").css("display", "block");
        $("#input1, #input2, #input3, #input4, #input5, #input6").hide();
    }
    

</script>