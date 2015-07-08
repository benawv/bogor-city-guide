<?php

    /**
     * ./website/views/scripts/default/rs-map.php
     * Direktori Rumah Sakit
     */

?>

<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/rs-map.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
    function initialize()
    {
        var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
        var mapOptions = {
            zoom: 4,
            center: myLatlng,
            scrollwheel: false
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>


<section class="rs-map">

    <div class="map-container">
        <div id="map-canvas"></div>
    </div><!--/ .map-container -->

    <section class="rs-map--body">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="rs-map--body-content">

                        <div class="title-box">
                            <h2>Direktori Rumah Sakit </h2>
                            <p><small>Temukan Rumah Sakit Terdekat Dengan Anda</small></p>
                        </div><!--/ .title-box -->

                        <div class="directory-lists">
                            <?php for( $i = 0; $i < 10; $i++ ): ?>
                            <div class="directory-item">
                                <h3>RS.Harapan Bapak</h3>
                                <p><i class="fa fa-map-marker"></i>&nbsp;Jl.Ahmad Heriyawan No.13, Cihereuy, Bogor.</p>
                                <p><i class="fa fa-phone"></i>&nbsp;<a href="tel:+62251123456">0251-8220-9XX</a></p>
                                <a href="#" class="btn btn-sm">Lihat Peta</a>
                                <a href="#" class="btn btn-sm">Petunjuk Arah</a>
                            </div><!--/ .directory-item -->
                            <?php endfor; ?>
                        </div><!--/ .directory-lists -->

                    </div><!--/ .rs-map--body-content -->
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-4">
                    <div class="rs-map--body-sidebar">

                    </div><!--/ .rs-map--body-sidebar -->
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </section><!--/ .rs-map--body -->

</section><!--/ .rs-map -->
