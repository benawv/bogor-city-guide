<?php

    /**
     * ./includes/page-home.php
     * Created by Falmesino Abdul Hamid(http://be.net/falmesino)
     */

?>

<header>

    <div class="background">
        <img src="./img/bg-home.jpg" alt="Home" class="img-responsive" />
    </div><!--/ .background -->

    <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-3 col-md-offset-9">
                    <div class="box-dent mt32">
                        <div class="box-dent--inner">
                            <h2>AJFC 2015</h2>
                            <p>#1ygterpenting mewujudkan mimpi menjadi kenyataan.</p>
                            <p>
                                Daftarkan anak/kerabat Anda yang berusia 14-16 tahun untuk dilatih oleh pelatih remaja
                                FC Bayern Munchen di Jerman.
                            </p>
                            <a href="#">Daftar Sekarang <i class="fa fa-angle-right"></i></a>
                        </div><!--/ .box-dent--inner -->
                    </div>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container-fluid -->
    </div><!--/ .caption -->

    <nav class="main-navigation floating">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <a href="?p=proses-seleksi" class="nav-item green sitemap">
                        <h4><small>01</small> Proses Seleksi</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <!--
                <div class="col-xs-12 col-md-3">
                    <a href="#" class="nav-item orange trophy">
                        <h4><small>02</small> Hadiah.</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-4">
                    <a href="?p=faq" class="nav-item orange question">
                        <h4><small>02</small> Tanya Jawab</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-4">
                    <a href="?p=daftar-peserta" class="nav-item users">
                        <h4><small>03</small> Sudah Mendaftar? <span>Cek Disini</span></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </nav>

</header>

<!--
<div class="page-wrapper-outer">

    <section class="page-wrapper half mt32 mb72">
-->

<section id="calendar-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 pr0">
                <div id="my-calendar"></div>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-6 calendar-info pl0">
                <div class="calendar-info--inner">
                    <div class="header">
                        <h2>Kalender Event</h2>
                    </div>
                    <div class="body mt32">
                        <h2 id="calendar-title">Wawancara Tahap Pertama</h2>
                        <p><small id="calendar-date">14 Maret 2015</small></p>
                        <p id="calendar-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus,
                            interdum non ipsum nec, vulputate euismod metus. Morbi eget sem sed orci interdum
                            lacinia quis ac orci. Mauris pretium lorem non leo faucibus, id semper nisl placerat.
                            Nulla maximus tempor metus, a pretium velit tempus et. Mauris convallis eros ligula,
                            vitae bibendum sem dapibus finibus.
                        </p>
                    </div><!--/ .body -->
                    <!--
                    <a href="#" class="btn-edge"></a>
                    -->
                </div><!--/.calendar-info-inner -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->

    <script>

        $(function(){

            /**
             * Zabuto Calendar
             * https://github.com/zabuto/calendar
             * Heavily Customized by Otoy
             */

            if( $( '#my-calendar' ).length > 0 )
            {
                /**
                 * Use PHP to populate json variable below or load the JSON
                 * using separate AJAX method
                 * Do not use Zabuto's native ajax data options
                 */

                var eventData = [
                    {
                        "date":"2015-04-01",
                        "badge":true,
                        "title":"April Fools Day",
                        "body":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus, interdum non ipsum nec, vulputate euismod metus. Morbi eget sem sed orci interdum lacinia quis ac orci. Mauris pretium lorem non leo faucibus, id semper nisl placerat. Nulla maximus tempor metus, a pretium velit tempus et"
                    },
                    {
                        "date":"2015-04-14",
                        "badge":true,
                        "title":"Sample",
                        "body":"Booom boom boom~ uye uye uye~"
                    }
                ];

                <?php

                    /**
                     * Zabuto Calendar Show Previous and Next Hacks
                     */

                    $month          = date( 'm' );
                    $months         = array( '04', '05', '06', '07', '08' );
                    $months_key     = array_search( $month, $months );
                    $months_diff    = count( $months ) - ( 1 * $months_key );

                ?>

                $( '#my-calendar' ).zabuto_calendar({
                    language: "en",
                    today: true,
                    year: <?php echo date( 'Y' ); ?>,
                    month: <?php echo date( 'm' ); ?>,
                    show_previous: <?php echo $months_key; ?>,
                    show_next:  <?php echo $months_diff-1; ?>,
                    data: eventData,
                    // ajax: { url: "" }, You shall not use this feature
                    action: function(){ return myDateFunction(this.id); }
                });

                function myDateFunction( id )
                {
                    var date = $( '#' + id ).data( 'date' );
                    var hasEvent = $( '#' + id ).data( 'hasEvent' );
                    if( hasEvent )
                    {
                        $.each(eventData, function(i, v){
                            if( v.date == date )
                            {
                                $( '#calendar-title' ).html( v.title );
                                $( '#calendar-date' ).html( convertDate( v.date ) );
                                $( '#calendar-body' ).html( v.body );
                                return false;
                            }
                        });
                    }
                }

                function convertDate( date )
                {
                    var date_array = date.split( "-" );
                    var months = [ "Januari", "Pebruari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember" ];
                    var y = date_array[ 0 ];
                    var m = date_array[ 1 ];
                    var d = date_array[ 2 ];
                    var output = ( d * 1 ) + ' ' + months[ ( m - 1 ) ] + ' ' + y;
                    return output;
                }

            }
        });
    </script>

</section><!--/ #calendar -->

<section class="mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 pl30 pr30">

                <div class="row social-feeds row-eq-height">

                    <div class="col-xs-12 col-md-6 nopadding bl bt">
                        <div class="social-feeds--box twitter">
                            <div class="header">
                                <i class="fa fa-twitter pull-left"></i>
                                <!--
                                <a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>
                                -->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                Jangan lupa shalat 5 waktu <a href="#">#1ygterpenting</a>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="http://placehold.it/48x48" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p>@falmesino</p>
                                        <p><small>Rabu, 1 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 nopadding br bt">
                        <div class="social-feeds--box facebook">
                            <img src="./img/dummy-stadium.jpg" alt="" class="bg-image" />
                            <div class="header">
                                <i class="fa fa-facebook pull-left"></i>
                                <!--
                                <a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>
                                -->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                Jangan lupa shalat 5 waktu <a href="#">#1ygterpenting</a>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="http://placehold.it/48x48" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p>Falmesino Abdul Hamid</p>
                                        <p><small>Rabu, 1 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                </div><!--/ .social-feeds -->

                <div class="row social-feeds row-eq-height">

                    <div class="col-xs-12 col-md-6 nopadding br bt">
                        <div class="social-feeds--box facebook">
                            <img src="./img/dummy-wasit.jpg" alt="" class="bg-image" />
                            <div class="header">
                                <i class="fa fa-facebook pull-left"></i>
                                <!--
                                <a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>
                                -->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                Jangan lupa shalat 5 waktu <a href="#">#1ygterpenting</a>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="http://placehold.it/48x48" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p>Falmesino Abdul Hamid</p>
                                        <p><small>Rabu, 1 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 nopadding bl bt">
                        <div class="social-feeds--box twitter">
                            <div class="header">
                                <i class="fa fa-twitter pull-left"></i>
                                <!--
                                <a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>
                                -->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                Jangan lupa shalat 5 waktu <a href="#">#1ygterpenting</a>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="http://placehold.it/48x48" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p>@falmesino</p>
                                        <p><small>Rabu, 1 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                </div><!--/ .social-feeds -->

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-6 news-feeds">

                <div class="row row-eq-height">
                    <div class="col-xs-6 nopadding bl bt">
                        <a href="#" class="news-feeds--image">
                            <img src="./img/yangterpenting.jpg" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-6 nopadding br bt">
                        <a href="#" class="news-feeds--image" id="imageBoxA">
                            <img src="./img/dummy-wasit.jpg" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->

                <div class="row row-eq-height">
                    <div class="col-xs-6 nopadding bl bb">
                        <a href="#" class="news-feeds--image" id="imageBoxB">
                            <img src="./img/dummy-stadium.jpg" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-6 nopadding br bb">
                        <div class="text" id="textBoxC">
                            <h3 class="tbc-title"><a href="#">Judul Berita</a></h3>
                            <p class="text-muted"><small class="tbc-date">Rabu, 14 Mei 2015</small></p>
                            <p class="tbc-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus, interdum non ipsum nec, vulputate euismod metus. Morbi eget sem sed orci interdum lacinia quis ac orci.</p>
                        </div><!--/ .text -->
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->

                <script>
                    $(function(){

                        var images = [
                            [ '#', './img/dummy-wasit.jpg' ],
                            [ '#', './img/dummy-stadium.jpg' ],
                            [ '#', './img/dummy/1.jpg' ],
                            [ '#', './img/dummy/2.jpg' ],
                            [ '#', './img/dummy/3.jpg' ],
                            [ '#', './img/dummy/4.jpg' ],
                            [ '#', './img/dummy/5.jpg' ],
                            [ '#', './img/dummy/6.jpg' ],
                            [ '#', './img/dummy/7.jpg' ],
                            [ '#', './img/dummy/8.jpg' ]
                        ];

                        var imagesLength = images.length;

                        var news = [
                            [ '#', 'Berita ke 1', 'Lorem ipsum dolor sit amet, consectetur adip...', '<?php echo date( 'D, d F Y' ); ?>' ],
                            [ '#', 'Berita ke 2', 'Lorem ipsum dolor sit amet, consectetur adip...', '<?php echo date( 'D, d F Y' ); ?>' ],
                            [ '#', 'Berita ke 3', 'Lorem ipsum dolor sit amet, consectetur adip...', '<?php echo date( 'D, d F Y' ); ?>' ],
                            [ '#', 'Berita ke 4', 'Lorem ipsum dolor sit amet, consectetur adip...', '<?php echo date( 'D, d F Y' ); ?>' ],
                            [ '#', 'Berita ke 5', 'Lorem ipsum dolor sit amet, consectetur adip...', '<?php echo date( 'D, d F Y' ); ?>' ],
                        ];
                        var newsLength  = news.length;

                        var imageBoxA   = $( '#imageBoxA' );
                        var iba_current = 0;
                        var iba_interval= 8000;
                        var iba_loop    = setInterval(function(){
                            imageBoxA.stop().fadeOut( 'fast', function(){
                                $( this ).parent().attr( 'href', images[ iba_current ][ 0 ] );
                                $( this ).find( 'img' ).attr( 'src', images[ iba_current ][ 1 ] );
                                $( this ).stop().fadeIn( 'fast', function(){
                                    // do nothing
                                });
                            });
                            //console.log( iba_current + ' ' + imagesLength );
                            if( iba_current < ( imagesLength - 1 ) )
                            {
                                iba_current++;
                            }
                            else
                            {
                                iba_current = 0;
                            }
                        }, iba_interval);

                        var imageBoxB   = $( '#imageBoxB' );
                        var ibb_current = 0;
                        var ibb_interval= 18000;
                        var ibb_loop    = setInterval(function(){
                            imageBoxB.stop().fadeOut( 'fast', function(){
                                $( this ).parent().attr( 'href', images[ ibb_current ][ 0 ] );
                                $( this ).find( 'img' ).attr( 'src', images[ ibb_current ][ 1 ] );
                                $( this ).stop().fadeIn( 'fast', function(){
                                    // do nothing
                                });
                            });
                            //console.log( iba_current + ' ' + imagesLength );
                            if( ibb_current < ( imagesLength - 1 ) )
                            {
                                ibb_current++;
                            }
                            else
                            {
                                ibb_current = 0;
                            }
                        }, ibb_interval);

                        var textBoxC    = $( '#textBoxC' );
                        var tbc_title   = textBoxC.find( '.tbc-title' );
                        var tbc_date    = textBoxC.find( '.tbc-date' );
                        var tbc_body    = textBoxC.find( '.tbc-body' );
                        var tbc_interval= 5000;
                        var tbc_current = 0;
                        var tbc_loop    = setInterval(function(){
                            tbc_title.stop().fadeOut( 'fast', function(){
                                $( this ).html( '<a href="' + news[ tbc_current ][ 0 ] + '">' + news[ tbc_current ][ 1 ] + '</a>' );
                                $( this ).stop().fadeIn( 'fast' );
                            });
                            tbc_date.stop().fadeOut( 'fast', function(){
                                $( this ).html( news[ tbc_current ][ 3 ] );
                                $( this ).stop().fadeIn( 'fast' );
                            });
                            tbc_body.stop().fadeOut( 'fast', function(){
                                $( this ).html( news[ tbc_current ][ 2 ] );
                                $( this ).stop().fadeIn( 'fast' );
                            });
                            if( tbc_current < newsLength-1 )
                            {
                                tbc_current++;
                            }
                            else
                            {
                                tbc_current = 0;
                            }
                        }, tbc_interval);


                    });
                </script>

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

<!--    </section><!--/ page-wrapper -->

<!--</div><!--/ .page-wrapper-outer -->
