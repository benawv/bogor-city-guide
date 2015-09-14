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


function checkfiles(){
    var fup = document.getElementById('imgfile');
    var fileName = fup.value;
    var ext = fileName.substring(fileName.lastIndexOf('.')+1);

    if (ext == ""){
        document.getElementById('test').innerHTML = "Tidak ada file yang dipilih";
        //var msg ="Tidak ada file yang dipilih";
        fup.focus();
        return false;
    }else if (ext == "JPG" || ext == "PNG" || ext == "jpg" || ext == "png"){
        return true;
    }else{
        document.getElementById('test').innerHTML = "File tidak di dukung";
        //var msg ="Tidak ada file yang dipilih";
        fup.focus();
        return false;
    }
}
</script>
<section class="profile-maker">
    <div class="container">

        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2><script>
                document.write(getCookie("keterangan"));
            </script></h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="row">
            <div class="col-xs-12">

                <div class="profile-maker--uploader">
                    <p>
                        <!--Upload your files here. Supported formats: JPG and PNG,<br />-->
                        Upload fotomu disini, dengan format JPG atau PNG dengan resolusi minimal
                        <script>
                            document.write(getCookie("res"));
                        </script>
                        <br />
                        <script>
                            document.write(getCookie("keterangan"));
                        </script>
                    </p>
                    <form role="form" action="/upload-image/" method="post" enctype="multipart/form-data" onsubmit="return checkfiles();">
                        <div class="form-group">
                            <!--<img id="preview" src="#" alt="your image" width="100" height="100" />-->
                            
                            <input id="imgfile" type="file" name="uploadFoto" /> 
                            <!--<input type="file" required>-->
                        </div><!--/ .form-group -->
                        <div style="color:red" id="test"></div>
                        <p></p>
                        <div class="form-group" id="test">
                            <!--<a href="/profil-maker/page3" class="btn btn-primary">-->
                                <input type="submit" name="submit" value="Unggah" class="btn btn-primary" />
                    </form>
                            <!--</a>-->
                            <a href="javascript:history.go(-1);" class="btn btn-default">Kembali</a>
                        </div><!--/ .form-group -->

                    
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

           //function myImg(){
           // var preview = document.getElementById("preview").src;
           // setCookie("preview", preview);
           //}
            //alert("preview : "+preview);
            getCookie("template");


        </script>

    </div><!--/ .container -->
</section><!--/ .profile-maker -->