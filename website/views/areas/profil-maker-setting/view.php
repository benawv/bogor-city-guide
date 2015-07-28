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

        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2>Page Cover Landscaped Notepad</h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-xs-12">

                <div id="timelineContainer">

                    <div id="timelineBackground" class="page-maker--placeholdermain">
                        <!-- <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive"> -->
                        <?php
                                 $session = new Zend_Session_Namespace('srcImage');
                        ?>
                       <img src="<?php echo $session->src;?>" alt="Page Cover Landscaped Notepad" id="timelineBGload" class="headerimage ui-corner-all ui-draggable img-responsive" />

                    </div><!--/ .page-maker--placeholder -->

                    <div id="place" class="square facebook-caption leftside">
                        <div id="notepad" class="facebook-caption--inner bg-blue">

                            <h3><span id="judul">Headline</span></h3> <br />
                            <span id="konten">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                Ut wisi enim ad minim veniam
                            </span> <br />
                            <span id="nama">Robbi Nugraha</span>

                        </div><!--/ .facebook-caption--inner -->
                        <!-- <div class="facebook-caption-trapezoid"></div> -->

                        <div id="edge-note" class="edge e-blue"></div> 

                    </div> <!--/ .facebook-caption -->

                    <div class="shade" id="timelineShade">
                        <form id="bgimageform" name="newad" method="post" enctype="multipart/form-data" action="">
                            
                            <!-- <div class="uploadFile timelineUploadBG col-lg-2 col-sm-2 col-12 pull-right">
                                <span class="file-input btn btn-primary btn-file">
                                    Upload <input type="file" name="image" id="bgphotoimg" class=" custom-file-input" original-title="Change Cover Picture" multiple>
                                </span>
                                <input name="Submit" type="submit" value="Upload image"> 
                            </div> -->
                        </form> <!--/ #bgimageform -->
                    </div> <!--/ #shade -->

                    <!-- <div id="timelineProfilePic">
                        <div style="padding:5px">
                            <img src="/website/static/images/profile-maker/Allianz Agent Facebook Profile Picture.png" style="width:100%">
                        </div>
                    </div> --> <!--/ #timelineProfilePic -->

                </div> <!--/ #timelineContainer -->    

                <div id="cover1" class="page-maker--placeholder" style="">
                    <div class="facebook">
                        <!-- <div class="facebook-profile">
                            <p>Profile Picture</p>
                        </div> --><!--/.facebook-profile -->
                        <!-- <div class="facebook-clear-area left"></div>
                        <div class="facebook-clear-area right"></div> -->
                        <div class="facebook-caption right square no-dent red">
                            <!--
                                .right      Supaya caption-nya ada di kanan
                                .no-dent    Supaya 'penyok'-nya ilang
                                .condensed  Ukurannya jadi lebih imut
                                .green      Jadi ijo
                                .light_blue Jadi biru cerah
                                .red        Jadi merah
                                .orange     Jadi jingga / oranye
                                .purple     Jadi Jandaaaa
                            -->
                            <div class="facebook-caption--inner">
                                <h3>Headline</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p><span>&lt;First Name&gt;</span> <span>&lt;Last Name&gt;</span></p>
                            </div><!--/ .facebook-caption--inner -->
                            <div class="facebook-caption-trapezoid"></div>
                        </div><!--/ .facebook-caption -->
                        <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div id="cover2" class="page-maker--placeholder" style="">
                    <div class="facebook">
                        <!-- <div class="facebook-profile">
                            <p>Profile Picture</p>
                        </div> --><!--/.facebook-profile -->
                        <!-- <div class="facebook-clear-area left"></div>
                        <div class="facebook-clear-area right"></div> -->
                        <div class="facebook-caption right portrait no-dent green">
                            <!--
                                .right      Supaya caption-nya ada di kanan
                                .no-dent    Supaya 'penyok'-nya ilang
                                .condensed  Ukurannya jadi lebih imut
                                .green      Jadi ijo
                                .light_blue Jadi biru cerah
                                .red        Jadi merah
                                .orange     Jadi jingga / oranye
                                .purple     Jadi Jandaaaa
                            -->
                            <div class="facebook-caption--inner">
                                <h3>Headline</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p><span>&lt;First Name&gt;</span> <span>&lt;Last Name&gt;</span></p>
                            </div><!--/ .facebook-caption--inner -->
                            <div class="facebook-caption-trapezoid"></div>
                        </div><!--/ .facebook-caption -->
                        <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div id="cover3" class="page-maker--placeholder" style="">
                    <div class="facebook">
                        <!-- <div class="facebook-profile">
                            <p>Profile Picture</p>
                        </div> --><!--/.facebook-profile -->
                        <!-- <div class="facebook-clear-area left"></div>
                        <div class="facebook-clear-area right"></div> -->
                        <div class="facebook-caption right landscape no-dent red">
                            <!--
                                .right      Supaya caption-nya ada di kanan
                                .no-dent    Supaya 'penyok'-nya ilang
                                .condensed  Ukurannya jadi lebih imut
                                .green      Jadi ijo
                                .light_blue Jadi biru cerah
                                .red        Jadi merah
                                .orange     Jadi jingga / oranye
                                .purple     Jadi Jandaaaa
                            -->
                            <div class="facebook-caption--inner">
                                <h3>Headline</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p><span>&lt;First Name&gt;</span> <span>&lt;Last Name&gt;</span></p>
                            </div><!--/ .facebook-caption--inner -->
                            <div class="facebook-caption-trapezoid"></div>
                        </div><!--/ .facebook-caption -->
                        <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div id="ava1" class="page-maker--placeholder" style="">
                    <div class="avatar">
                        <div id="avacapture" class="avatar-caption">
                            <div class="avatar-caption--logo">
                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                            </div><!--/ .avatar-caption--logo -->
                        </div><!--/ .avatar-caption -->
                        <img src="http://placehold.it/472x394" alt="Profile Picture" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div id="ava2" class="page-maker--placeholder" style="">
                    <div class="avatar">
                        <div id="avacaptioncapture" class="avatar-caption">
                            <div class="avatar-caption--logo">
                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                            </div><!--/ .avatar-caption--logo -->
                            <div class="avatar-caption--footer">
                                <i class="fa fa-facebook-square fa-2x"></i>&nbsp;
                                <span>Allianz Indonesia</span>&nbsp;
                                <strong><span id="cname">&lt;First Name&gt; &lt;Last Name&gt;</span></strong>
                            </div><!--/ .avatar-caption-footer -->
                        </div><!--/ .avatar-caption -->
                        <img src="http://placehold.it/472x394" alt="Profile Picture" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div id="fillform" class="page-maker--form">
                    <div class="page-maker--form-title">
                        <h3>Notepad</h3>
                    </div><!--/ .page-maker--form-title -->
                    <div class="page-maker--form-inner">
                        <form id="formx" role="form">
                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Headline</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" name="headline" id="atas" class="form-control">
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Description</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <textarea class="form-control" name="content" id="tengah" rows="5"></textarea>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>First Name</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" name="first_name" id="bawah1" class="form-control">
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div class="row">
                                <div class="col-xs-12 col-md-3">
                                    <label>Last Name</label>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" name="last_name" id="bawah2" class="form-control">
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->
                            <div class="row">
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
                            <div class="row">
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
                                    <a id="preview" href="#" class="btn btn-default btn-block">Pratinjau</a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-6 col-sm-3">
                                    <a id="save" href="#ask" class="btn btn-primary btn-block">Simpan</a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-sm-3">
                                    <input type="button" class="btn btn-default btn-block" value="Ganti Gambar">
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-12 col-sm-3">
                                    <input type="button" class="btn btn-default btn-block" value="Pilih Template">
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
                                    <!-- <input type="submit" class="btn btn-primary btn-block" value="Simpan"> -->
                                    <!-- <a id="" href="/website/static/profil-maker/download.php?filename=banner2.jpg" class="btn btn-primary btn-block">Simpan</a> -->
                                    <a id="download" href="#" class="btn btn-primary btn-block">Simpan</a>
                                    
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

