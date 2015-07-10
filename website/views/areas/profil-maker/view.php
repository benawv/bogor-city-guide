<?php 
setcookie("gettamplate","value",time()+$int);
?>


<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/profil-maker.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
                        <input type="button" id="template1" onclick="getId(this.id)" value="Pilih" class="btn btn-primary"/>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <input type="button" id="template2" onclick="getId(this.id)" value="Pilih" class="btn btn-primary"/>
                        <!--<a href="/profil-maker-create" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <input type="button" id="template3" onclick="getId(this.id)" value="Pilih" class="btn btn-primary"/>
                        <!--<a href="/profil-maker/2" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

        </div><!--/ .row -->

        <script type="text/javascript">
           function getId(obj) {
                var id=obj;
                alert(id);
           }
        </script>

        <?php endfor; ?>

    </div><!--/ .container -->
</section><!--/ .profile-maker -->