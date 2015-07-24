<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/profil-maker.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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

                <div class="profile-maker--uploader">
                    <p>
                        Upload your files here. Supported formats: JPG and PNG,<br />
                        Page cover landscaped notepad<br />
                        (851 x 351)
                    </p>
                    <form role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <img id="preview" src="#" alt="your image" width="100" height="100" />
                            <p>
                            </p>
                            <input id="imgfile" type="file" onchange="readURL(this)"; /> 
                            <!--<input type="file" required>-->
                        </div><!--/ .form-group -->
                        <div class="form-group">
                            <a href="/profil-maker-setting/" class="btn btn-primary"><input type="button" onclick="myImg()" value="Upload" class="btn btn-primary"/>
                            </a>
                            <a href="javascript:history.go(-1);" class="btn btn-default">Kembali</a>
                        </div><!--/ .form-group -->
                    </form>
                </div><!--/ .profile-maker--uploader -->

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

           function myImg(){
            var preview = document.getElementById("preview").src;
            setCookie("preview", preview);
           }
            //alert("preview : "+preview);

           //alert(getCookie("template"));

        </script>

    </div><!--/ .container -->
</section><!--/ .profile-maker -->