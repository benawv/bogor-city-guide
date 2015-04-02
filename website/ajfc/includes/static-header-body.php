<?php

    /**
     * ./includes/static-header-body.php
     * Only for Static Page
     */

?>
<header role="banner" class="banner">

    <div class="container" style="max-width: 960px;">

        <h1 class="weblogo">
            Allianz<span onclick="window.location.href='?p=home'"></span>
        </h1><!--/ .weblogo -->

        <nav class="primary" role="primarynavigation">
            <h3 class="toggle-menu"><span>Main Navigation</span></h3>
            <div class="menu-level1">
                <ul class="clearfix">
                    <li><a href="?p=home">Beranda</a></li>
                    <li><a href="?p=galeri">Galeri</a></li>
                    <li><a href="?p=proses-seleksi">Proses Seleksi</a></li>
                    <li><a href="?p=pengumuman">Pengumuman</a></li>
                    <li><a href="?p=faq">FAQ</a></li>
                    <li><a href="?p=privacy-policy">Kebijakan Privasi</a></li>
                    <li><a href="?p=kuis">Kuis</a></li>
                </ul><!--/ .clearfix-->
            </div>
        </nav>

        <div class="minibar clearfix">
            <nav class="toolbar">
                <ul class="clearfix">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </nav>
        </div><!--/ .minibar -->

    </div><!--/ .container -->

</header>

<script type="text/javascript">
    $(document).ready(function(){
        $(".dropdown img.flag").addClass("flagvisibility");

        $(".dropdown dt a").click(function(){
            $(".dropdown dd ul").toggle();
        });

        $(".dropdown dd ul li a").click(function(){
            var text = $(this).html();
            $(".dropdown dt a span").html(text);
            $(".dropdown dd ul").hide();
            $("#result").html("Selected value is: " + getSelectedValue("sample"));
        });

        function getSelectedValue(id){
            return $("#" + id).find("dt a span.value").html();
        }

        $(document).bind('click', function(e){
            var $clicked = $(e.target);
            if (! $clicked.parents().hasClass("dropdown"))
                $(".dropdown dd ul").hide();
        });


        $("#flagSwitcher").click(function(){
            $(".dropdown img.flag").toggleClass("flagvisibility");
        });
    });
</script>
