<div id="slideshow" class="clearfix">
<section class="profile-maker">
    <div class="container">

        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2>Allianz Profile Maker</h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
        <?php //$val = (int) $this->select("jumlah")->getData();
        ?>

        <div class="row">

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Landscaped Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Landscaped Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2">
                            <input type="button" id="template1" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Portrait Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Portrait Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2">
                            <input type="button" id="template2" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Page Cover Square Notepad</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Page Cover Square Notepad.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2">
                            <input type="button" id="template3" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4 id="News Feed Post Template">News Feed Post Template</h4>
                    <img src="/website/static/images/profile-maker/Agent Facebook News Feed Post Template.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2">
                            <input type="button" id="template4" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <!--<a href="/profil-maker-create" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Profile Picture</h4>
                    <img src="/website/static/images/profile-maker/Allianz Agent Facebook Profile Picture.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2">
                            <input type="button" id="template5" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <!--<a href="/profil-maker/2" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

            <div class="col-xs-12 col-md-4">
                <div class="profile-maker--box">
                    <h4>Timeline Post Template</h4>
                    <img src="/website/static/images/profile-maker/Allianz Facebook Timeline Post Template.png" alt="Template Image" class="img-responsive">
                    <div class="pm-buttons">
                        <a href="/profil-maker/page2"> 
                            <input type="button" id="template6" value="Pilih" class="btn btn-primary template"/>
                        </a>
                        <!--a href="/profil-maker/2" id="template1" class="btn btn-primary">Pilih</a>-->
                    </div><!--/ .pm-buttons -->
                </div><!--/ .profile-maker-box -->
            </div><!--/ .col-xs-12 -->

        </div> <!--/.row -->

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

            $(document).ready(function(){
                $(".template").on("click",function(){
                    var ket = $(this).parent().parent().parent().find("h4").text();
                    var id = $(this).attr("id");
                    setCookie("template", id);
                    setCookie("keterangan", ket);
                });
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

    </div><!--/ .container -->
</section><!--/ .profile-maker -->