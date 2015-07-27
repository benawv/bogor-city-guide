<div id="slideshow" class="clearfix">
<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many images you want to show?

            <?php
                
                $select= [];
                for($i=1; $i<30; $i++) {
                    $select[] = [$i, $i];
                }
              ?>
            <?php echo $this->select("jumlah",[
                "store" => $select,
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
        <?php $val = (int) $this->select("jumlah")->getData();
        ?>

        <?php for( $i = 0; $i < $val; $i++ ): ?>

        <!--<div class="row">-->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2"> <input type="button" id="template1" onclick="getId(this.id)" value="Pilih" class="btn btn-primary"/></a>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <!--<div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2">
                            <input type="button" id="template2" onclick="getId(this.id)" value="Pilih" class="btn btn-primary"/>
                        </a>
                        <!--<a href="/profil-maker-create" class="btn btn-primary">Pilih</a>
                    </div><!--/ .pm-buttons 
                </div><!--/ .profile-maker-box 
            </div><!--/ .col-xs-12 

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="http://placehold.it/640x320" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2">
                            <input type="button" id="template3" onclick="getId(this.id)" value="Pilih" class="btn btn-primary"/>
                        </a>
                        <!--<a href="/profil-maker/2" class="btn btn-primary">Pilih</a>
                    </div><!--/ .pm-buttons 
                </div><!--/ .profile-maker-box 
            </div><!--/ .col-xs-12 -->

        <!--/</div> .row -->

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

        <?php endfor; ?>

    </div><!--/ .container -->
</section><!--/ .profile-maker -->