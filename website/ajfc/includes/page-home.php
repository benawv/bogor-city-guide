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
                <div class="col-xs-8 col-xs-offset-4 col-md-3 col-md-offset-9">
                    <div class="box-dent mt32">
                        <div class="box-dent--inner">
                            <h2>AJFC 2015</h2>
                            <p>#1ygterpenting mewujudkan mimpi menjadi kenyataan</p>
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

                $( '#my-calendar' ).zabuto_calendar({
                    language: "en",
                    today: true,
                    year: 2015,
                    month: 4,
                    show_previous: false,
                    show_next: 4,
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
            <div class="col-xs-12 col-md-6">

                <div class="row social-feeds">
                    <div class="col-xs-12 col-sm-6 col-md-6 pr0">
                        <div class="social-feeds--box facebook">
                            <div class="header">
                                <i class="fa fa-facebook pull-left"></i>
                                <!--
                                <a href="#" class="pull-right"><i class="fa fa-thumbs-o-up"></i></a>
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

                    <div class="col-xs-12 col-sm-6 col-md-6 pl0">
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
                                        <p>Falmesino Abdul Hamid</p>
                                        <p><small>Rabu, 1 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                </div><!--/ .social-feeds -->

                <div class="row social-feeds">

                    <div class="col-xs-12 col-sm-6 col-md-6 pr0">
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
                                        <p>Falmesino Abdul Hamid</p>
                                        <p><small>Rabu, 1 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-sm-6 col-md-6 pl0">
                        <div class="social-feeds--box facebook">
                            <div class="header">
                                <i class="fa fa-facebook pull-left"></i>
                                <!--
                                <a href="#" class="pull-right"><i class="fa fa-thumbs-o-up"></i></a>
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

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-6 news-feeds">

                <div class="news-feeds--box" id="newsFeedsBox1">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 hidden-xs hidden-sm image">
                            <img src="./img/dummy-wasit.jpg" alt="" class="" />
                        </div><!--/ .col-xs-12 -->
                        <div class="col-xs-12 col-md-6 content">
                            <div class="news-feeds--box---content">
                                <h3 class="news-feed--box---content-title">Wasit, siapa mereka?</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus,
                                    non ipsum nec, vulputate euismod metus.
                                </p>
                            </div><!--/ .news-feeds-box--content -->
                            <!--
                            <a href="#" class="btn-edge"></a>
                            -->
                        </div><!--/ .col-xs-12 -->
                    </div><!--/ .row -->
                </div><!--/ .news-feeds--box -->

                <div class="news-feeds--box" id="newsFeedsBox2">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 content">
                            <div class="news-feeds--box---content">
                                <h3 class="news-feed--box---content-title">Berkunjung ke Allianz Arena di Munich</h3>
                                <p>
                                    Vestibulum accumsan, metus quis lacinia malesuada, lacus diam tincidunt magna,
                                    nec tincidunt velit sapien vitae ligula.
                                </p>
                            </div><!--/ .news-feeds-box--content -->
                            <!--
                            <a href="#" class="btn-edge"></a>
                            -->
                        </div><!--/ .col-xs-12 -->
                        <div class="col-xs-12 hidden-xs hidden-sm col-md-6 image">
                            <img src="./img/dummy-stadium.jpg" alt="" class="" />
                        </div><!--/ .col-xs-12 -->
                    </div><!--/ .row -->
                </div><!--/ .news-feeds--box -->

                <script>
                    $(function(){

                        var news =[
                            [
                                'Berkunjung ke Allianz Arena di Munich',
                                'Vestibulum accumsan, metus quis lacinia malesuada, lacus diam',
                                './img/dummy-stadium.jpg'
                            ],
                            [
                                'Wasit, siapa mereka?',
                                'Vestibulum accumsan, metus quis lacinia malesuada, lacus diam',
                                './img/dummy-wasit.jpg'
                            ],
                            [
                                'Hukum bermain bola ketika maghrib',
                                'Haram jika shalat maghrib-nya dilewat.',
                                './img/dummy-stadium.jpg'
                            ],
                            [
                                'Mengapa bola berbentuk bundar?',
                                'Ahli fisika mengatakan jika bola berbentuk kotak sudut tajamnya dapat melukai kaki pemain...',
                                './img/dummy-wasit.jpg'
                            ],
                            [
                                'Kebiasaan buruk rakyat Indonesia, nyampah',
                                'Menonton pertandingan bola memang menyenangkan, tapi kesenangan itu hanya milik...',
                                './img/dummy-stadium.jpg'
                            ],
                            [
                                'Berkunjung ke Allianz Arena di Munich',
                                'Vestibulum accumsan, metus quis lacinia malesuada, lacus diam...',
                                './img/dummy-stadium.jpg'
                            ],
                            [
                                'Berita nomor tujuh',
                                'Vestibulum accumsan, metus quis lacinia malesuada, lacus diam...',
                                './img/dummy-stadium.jpg'
                            ],
                            [
                                'Berita nomor delapan',
                                'Vestibulum accumsan, metus quis lacinia malesuada, lacus diam...',
                                './img/dummy-wasit.jpg'
                            ],
                            [
                                'Berita nomor sembilan',
                                'Vestibulum accumsan, metus quis lacinia malesuada, lacus diam...',
                                './img/dummy-stadium.jpg'
                            ],
                            [
                                'Berita nomor sepuluh',
                                'Vestibulum accumsan, metus quis lacinia malesuada, lacus diam...',
                                './img/dummy-wasit.jpg'
                            ]
                        ];

                        var news_length = news.length;
                        var interval    = 8000;

                        /*
                        var box_a_pos   = 1;
                        var box_a       = $( '#newsFeedsBox1' );
                        var box_a_image = box_a.find( '.image' ).find( 'img' );
                        var box_a_title = box_a.find( '.news-feed--box---content-title' );
                        var box_a_body  = box_a.find( 'p' );
                        var loop_a      = setInterval(function(){

                            if( news[ box_a_pos ] != undefined )
                            {
                                var item = news[ box_a_pos ];
                                box_a_image.stop().fadeOut( 'medium', function(){
                                    $( this ).attr( 'src', news[ box_a_pos ][ 2 ] );
                                    $( this ).stop().fadeIn( 'medium', function(){
                                        // do nothing
                                        box_a_title.stop().fadeOut( 'fast', function(){
                                            $( this ).html( news[ box_a_pos ][ 0 ] );
                                            $( this ).stop().fadeIn( 'fast', function(){
                                                // do nothing
                                                box_a_body.stop().fadeOut( 'fast', function(){
                                                    $( this ).html( news[ box_a_pos ][ 1 ] );
                                                    $( this ).stop().fadeIn( 'fast', function(){
                                                        // do nothing
                                                    });
                                                });
                                            });
                                        });
                                    });
                                });
                                // console.log( box_a_pos + ' < ' + ( news_length / 2 ) );
                                if( box_a_pos < ( news_length / 2 ) -1 )
                                {
                                    box_a_pos++;
                                }
                                else
                                {
                                    box_a_pos = 0;
                                }
                            }
                            //console.table( news[ box_a_pos ] );
                        }, interval);
                        */
                        var box_b_pos   = 0; //( news_length / 2 ) + 1;
                        var box_b       = $( '#newsFeedsBox2' );
                        var box_b_image = box_b.find( '.image' ).find( 'img' );
                        var box_b_title = box_b.find( '.news-feed--box---content-title' );
                        var box_b_body  = box_b.find( 'p' );

                        var loop_b      = setInterval(function(){

                            if( news[ box_b_pos ] != undefined )
                            {
                                var item = news[ box_b_pos ];
                                box_b_image.stop().fadeOut( 'medium', function(){
                                    $( this ).attr( 'src', news[ box_b_pos ][ 2 ] );
                                    $( this ).stop().fadeIn( 'medium', function(){
                                        // do nothing
                                        box_b_title.stop().fadeOut( 'fast', function(){
                                            $( this ).html( news[ box_b_pos ][ 0 ] );
                                            $( this ).stop().fadeIn( 'fast', function(){
                                                // do nothing
                                                box_b_body.stop().fadeOut( 'fast', function(){
                                                    // console.log( '' );
                                                    $( this ).html( news[ box_b_pos ][ 1 ] );
                                                    $( this ).stop().fadeIn( 'fast', function(){
                                                        // do nothing
                                                    });
                                                });
                                            });
                                        });
                                    });
                                });
                                // console.log( box_b_pos + ' < ' + news_length-1 );
                                if( box_b_pos < news_length-1 )
                                {
                                    box_b_pos++;
                                }
                                else
                                {
                                    box_b_pos = 0; // ( news_length / 2 );
                                }
                                //console.table( news[ box_a_pos ] );
                            }
                        }, interval);
                    });
                </script>

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

<!--    </section><!--/ page-wrapper -->

<!--</div><!--/ .page-wrapper-outer -->
