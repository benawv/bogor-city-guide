<?php

    /**
     * ./website/views/scripts/default/profil-maker.php
     * Profil Maker Static Pages
     */

?>

<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/profil-maker.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<?php
    //include '/website/static/profil-maker/db.php';
    //session_start();
    //$session_uid='1'; // $_SESSION['user_id'];
    //include '/website/static/profil-maker/userUpdates.php';
    //$userUpdates = new userUpdates($db);

    //$userData=$userUpdates->userDetails($session_uid);
    //$username=$userData['username'];
    //$name=$userData['name'];
    //$profile_background=$userData['profile_background'];
    //$profile_background_position=$userData['profile_background_position']; 
?> 

<?php if( $this->idHalaman == 1 ): ?>

<section class="profile-maker">
    <div class="container">

        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2>Allianz Profile Maker</h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <?php for( $i = 0; $i < 2; $i++ ): ?>

        <div class="row">

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/2" class="btn btn-primary">Create</a>
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/2" class="btn btn-primary">Create</a>
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/2" class="btn btn-primary">Create</a>
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

        </div><!--/ .row -->

        <?php endfor; ?>

    </div><!--/ .container -->
</section><!--/ .profile-maker -->

<?php elseif( $this->idHalaman == 2 ): ?>

<section class="profile-maker">
    <div class="container">

        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2>Page Cover Landscaped Notepad</h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-xs-12">

                <div class="profile-maker--uploader">
                    <p>
                        Upload your files here. Supported formats: JPG and PNG,<br />
                        Page cover landscaped notepad<br />
                        (851 x 351)
                    </p>
                    <form role="form" name="newad" method="post" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <input type="file" name="image" required>
                        </div><!--/ .form-group -->
                        <div class="form-group">
                            <!-- <a href="/profil-maker/3" class="btn btn-primary">Upload</a> -->
                            <input name="Submit" type="submit" value="Upload image">
                            <a href="javascript:history.go(-1);" class="btn btn-default">Kembali</a>
                        </div><!--/ .form-group -->
                    </form>
                </div><!--/ .profile-maker--uploader -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

    </div><!--/ .container -->
</section><!--/ .profile-maker -->

<?php elseif( $this->idHalaman == 3 ): ?>

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

                    <div id="timelineBackground" class="page-maker--placeholder">
                        <!-- <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive"> -->

                       <img src="/website/static/images/profile-maker/banner2.jpg" alt="Page Cover Landscaped Notepad" id="timelineBGload" class="headerimage ui-corner-all ui-draggable img-responsive" />

                    </div><!--/ .page-maker--placeholder -->

                    <div id="place" class="facebook-caption leftside">
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

                    <div id="timelineProfilePic">
                        <div style="padding:5px">
                            <img src="/website/static/images/profile-maker/Allianz Agent Facebook Profile Picture.png" style="width:100%">
                        </div>
                    </div> <!--/ #timelineProfilePic -->

                </div> <!--/ #timelineContainer -->    

                <div class="page-maker--placeholder" style="display: none">
                    <div class="facebook">
                        <div class="facebook-profile">
                            <p>Profile Picture</p>
                        </div><!--/.facebook-profile -->
                        <div class="facebook-clear-area left"></div>
                        <div class="facebook-clear-area right"></div>
                        <div class="facebook-caption">
                            <div class="facebook-caption--inner">
                                <h3>Headline</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris posuere vitae nulla et commodo.
                                </p>
                                <p><span>&lt;First Name&gt;</span> <span>&lt;Lasr Name&gt;</span></p>
                            </div><!--/ .facebook-caption--inner -->
                            <div class="facebook-caption-trapezoid"></div>
                        </div><!--/ .facebook-caption -->
                        <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div class="page-maker--placeholder" style="display: none">
                    <div class="facebook">
                        <div class="facebook-profile">
                            <p>Profile Picture</p>
                        </div><!--/.facebook-profile -->
                        <div class="facebook-clear-area left"></div>
                        <div class="facebook-clear-area right"></div>
                        <div class="facebook-caption right">
                            <div class="facebook-caption--inner">
                                <h3>Headline</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris posuere vitae nulla et commodo.
                                </p>
                                <p><span>&lt;First Name&gt;</span> <span>&lt;Lasr Name&gt;</span></p>
                            </div><!--/ .facebook-caption--inner -->
                            <div class="facebook-caption-trapezoid"></div>
                        </div><!--/ .facebook-caption -->
                        <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div class="page-maker--placeholder" style="display: none">
                    <div class="facebook">
                        <div class="facebook-profile">
                            <p>Profile Picture</p>
                        </div><!--/.facebook-profile -->
                        <div class="facebook-clear-area left"></div>
                        <div class="facebook-clear-area right"></div>
                        <div class="facebook-caption right condensed no-dent red">
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
                                <p><span>&lt;First Name&gt;</span> <span>&lt;Lasr Name&gt;</span></p>
                            </div><!--/ .facebook-caption--inner -->
                        </div><!--/ .facebook-caption -->
                        <img src="http://placehold.it/851x315" alt="Page Cover Landscaped Notepad" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div class="page-maker--placeholder" style="display: none">
                    <div class="avatar">
                        <div class="avatar-caption">
                            <div class="avatar-caption--logo">
                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                            </div><!--/ .avatar-caption--logo -->
                        </div><!--/ .avatar-caption -->
                        <img src="http://placehold.it/256/256" alt="Profile Picture" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div class="page-maker--placeholder" style="display: none">
                    <div class="avatar">
                        <div class="avatar-caption">
                            <div class="avatar-caption--logo">
                                <img src="/website/static/images/profile-maker/allianz-logo.png" alt="">
                            </div><!--/ .avatar-caption--logo -->
                            <div class="avatar-caption--footer">
                                <i class="fa fa-facebook-square fa-2x"></i>&nbsp;
                                <span>Allianz Indonesia</span>&nbsp;
                                <strong>&lt;First Name&gt;</strong>&nbsp;
                                <strong>&lt;Last Name&gt;</strong>
                            </div><!--/ .avatar-caption-footer -->
                        </div><!--/ .avatar-caption -->
                        <img src="http://placehold.it/256/256" alt="Profile Picture" class="img-responsive">
                    </div><!--/ .facebook -->
                </div><!--/ .page-maker--placeholder -->

                <div id="fillform" class="page-maker--form">
                    <div class="page-maker--form-title">
                        <h3>Notepad</h3>
                    </div><!--/ .page-maker--form-title -->
                    <div class="page-maker--form-inner">
                        <form role="form">
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
                        <a href="/profil-maker/2" class="btn btn-primary">Create</a>
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/2" class="btn btn-primary">Create</a>
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/2" class="btn btn-primary">Create</a>
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

<?php elseif( $this->idHalaman == 4 ): ?>

<section class="profile-maker">
    <div class="container">

        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2>Page Cover Landscaped Notepad</h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-xs-12">

                <div class="page-maker--placeholder">
                    <img src="http://placehold.it/851x351" alt="Page Cover Landscaped Notepad" class="img-responsive">
                </div><!--/ .page-maker--placeholder -->

                <div class="page-maker--form">
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
                                    <a href="javascript:history.go(-1);" class="btn btn-default btn-block">Batal</a>
                                </div><!--/ .col-xs-12 -->
                                <div class="col-xs-6 col-sm-3">
                                    <input type="submit" class="btn btn-primary btn-block" value="Simpan">
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

        
    </div><!--/ .container -->
</section><!--/ .profile-maker -->



<?php endif; ?>


<!-- <script src="/website/static/profil-maker/js/jquery.min.js"></script> -->
<script src="/website/static/profil-maker/js/jquery-ui.min.js"></script>
<script src="/website/static/profil-maker/js/jquery.wallform.js"></script>
<script src="/website/static/profil-maker/js/javascript.js"></script>
<script src="http://html2canvas.hertzen.com/build/html2canvas.js"></script>
