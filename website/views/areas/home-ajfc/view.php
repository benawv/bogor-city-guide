<header>

    <div class="background">
        <img src="/website/static/images/ajfc/background/background.jpg" alt="Home" class="img-responsive" />
    </div><!--/ .background -->
    <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-3 col-md-offset-9">
                    <div class="box-dent mt32">
                        <div class="box-dent--inner">
                            <h2>AJFC 2015</h2>
                            <p>#1ygterpenting mewujudkan mimpi menjadi kenyataan.</p>
                <p>Daftarkan anak/kerabat Anda yang berusia 14-16 tahun untuk dilatih oleh pelatih remaja FC Bayern Munchen di Jerman.</p>
                            <?php
                if($this->editmode)
                {
                    echo $this->link("linkDaftar");
                }
                else{
                ?>
                <a href="<?php echo $this->link("linkDaftar")->getHref();?>"><?php echo $this->link("linkDaftar")->getText();?> <i class="fa fa-angle-right"></i></a>
                <?php
                }
                ?>
            </div><!--/ .box-dent--inner -->
                    </div>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container-fluid -->
    </div><!--/ .caption -->

    <nav class="main-navigation">
        <div class="container">
           <div class="row">
                <div class="col-xs-12 col-md-4">
                    <a href="/proses-seleksi" class="nav-item green sitemap">
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
                    <a href="/tanya-jawab" class="nav-item orange question">
                        <h4><small>02</small> Tanya Jawab</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-4">
                    <a href="/daftar-peserta" class="nav-item users">
                        <h4><small>03</small> Sudah Mendaftar? <span>Cek Disini</span></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </nav>

</header>

<section id="calendar-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 pr0">
                <div id="my-calendar"></div>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-6 calendar-info pl0">
                <div class="calendar-info--inner">
                    <?php
                        $bulanInd = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        $entries = new Object_CalenderAJFC_List();
                        $entries->setCondition("date >= ?", array(time()));
                        $entries->setLimit(1);
                        $entries->setOrderKey("date");
                        $entries->setOrder("asc");
                        if(count($entries)<0){
                            $entries = new Object_CalenderAJFC_List();
                            $entries->setCondition("date <= ?", array(time()));
                            $entries->setLimit(1);
                            $entries->setOrderKey("date");
                            $entries->setOrder("asc");
                        }
                        foreach ($entries as $key) {
                            $d = date("d",strtotime($key->date));
                            $m = date("m",strtotime($key->date));
                            $y = date("Y",strtotime($key->date));
                            $title = $key->title;
                            $event = $key->event;
                        }
                    ?>
                    <div class="header">
                        <h2>Kalender Event</h2>
                    </div>
                    <div class="body">
                        <h2 id="calendar-title"><?php echo $title; ?></h2>
                        <p><small id="calendar-date"><?php echo $d.' '.$bulanInd[$m-1].' '.$y; ?></small></p>
                        <div id="calendar-body">
                            <?php echo $event; ?>
                        </div>
                    </div><!--/ .body -->
                    <!--<a href="#" class="btn-edge"></a>-->
                </div><!--/.calendar-info-inner -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->

<?php
    $entries = new Object_CalenderAJFC_List();
    $entries ->setOrderKey("date");
    $entries ->setOrder("desc");
    $count = count($entries);
    $no = 1;
    $temp = "";
    foreach ($entries as $key) {
        $date = date("Y-m-d",strtotime($key->date));
        $title = $key->title;
        $event = $key->event;
        if($no == 1)
            $a = array(array("date"=>$date,
                    "badge"=>true,
                    "title"=>$title,
                    "body"=>$event));
        else
            array_push($a,array("date"=>$date,
                    "badge"=>true,
                    "title"=>$title,
                    "body"=>$event)
                );
        $no++;
    }
    $encode = json_encode($a);

    $default = 0;
    $no = 1;
    $temp = "";
    $entries = new Object_DataPesertaAJFC_List();
    $entries ->setLimit(10);
    $entries->setOrderKey("o_creationDate");
    $entries->setOrder("desc");
    $entries->setCondition("statusSubmitKuis LIKE 1 AND approve LIKE 1");
    $count = count($entries);
    $sisa = 8 - $count;
    //echo $count;
    if($count < 8){
        $n = 1;
    }else{
        $n = 2;
    }
    while($n<=2){
        if($n==2){
            $entries = new Object_DataPesertaAJFCDefault_List();
            $entries->setLimit($sisa);
            $default = 1;
        }
        foreach ($entries as $key) {
            $img = (string)$key->fotoPeserta;
            $ptg = ucfirst($key->satuTerpenting);
            $nama = ucwords($key->namaLengkap);
            $tgll = date("Y", strtotime($key->tanggalLahir));
            $nyear = date("Y",time());
            $umur = $nyear-$tgll;
            $asl = ucwords($key->tempatLahir);
            $prop = ucwords($key->propinsi);
            $content = $umur.' Tahun - '.$asl.', '.$prop;
            if($default==1){
                $content = "";
                $nama = $ptg;
                $ptg = "";
            }
            if($no == 1){
                $b = array(array(0=>"#",1=>$img));
                $c = array(array(0=>"#",1=>$nama,2=>$ptg,3=>$content));
            }else{
                array_push($b,array(0=>"#",1=>$img));
                if($no<=5)
                    array_push($c,array(0=>"/galeri-ajfc",1=>$nama,2=>$ptg,3=>$content));
            }
            if($no >= 10)
                break;
            $no++;
        }
        $n++;
    }

    $edaftar = json_encode($b);
    $eisi = json_encode($c);
?>
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

                var eventData = <?php echo $encode; ?>;

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
                    var months = [ "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember" ];
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

                        <?php

                            $fb_feed1 = new Object_SocialMediaFeed_List();
                            $fb_feed1->setLimit(4);
                            $fb_feed1->setOrder("asc");
                            $fb1 = 1;

                            $NoDada = "";
                            foreach($fb_feed1 as $items1)
                            {
                                if($items1->socialMediaType[0]->socialMediaType=='facebook'){
                                if($fb1==1){

                                $fb_stream_id1=$items1->stream_id;
                                $fb_username1=$items1->from;
                                $fb_messages1=$items1->messages;
                                $fb_link1=$items1->link_feed;
                                $fb_link_aset1=$items1->link_asset;
                                }
                                $fb1++;
                                }
                            }

                            $fb_feed2 = new Object_SocialMediaFeed_List();
                            $fb_feed2->setLimit(4);
                            $fb_feed2->setOrder("asc");
                            $fb2 = 1;
                            $NoDada = "";
                            foreach($fb_feed2 as $items2)
                            {
                                if($items2->socialMediaType[0]->socialMediaType=='facebook'){
                                    if($fb2==2){

                                    $fb_stream_id2=$items2->stream_id;
                                    $fb_username2=$items2->from;
                                    $fb_messages2=$items2->messages;
                                    $fb_link2=$items2->link_feed;
                                    $fb_link_aset2=$items2->link_asset;
                                    }
                                $fb2++;
                                }

                            }

                            $tw_feed1 = new Object_SocialMediaFeed_List();
                            $tw_feed1->setLimit(4);
                            $tw_feed1->setOrder("asc");
                            $tw1 = 1;
                            $NoDada = "";
                            foreach($tw_feed1 as $items3)
                            {
                                if($items3->socialMediaType[0]->socialMediaType=='twitter'){
                                   if($tw1==1){

                                    $tw_stream_id1=$items3->stream_id;
                                    $tw_username1=$items3->from;
                                    $tw_messages1=$items3->messages;
                                    $tw_link1=$items3->link_feed;
                                    $tw_link_aset1=$items3->link_asset;
                                   }
                                   $tw1++;
                                }
                            }


                            $tw_feed2 = new Object_SocialMediaFeed_List();
                            $tw_feed2->setLimit(4);
                            $tw_feed2->setOrder("asc");
                            $tw2 = 1;
                            $NoDada = "";
                            foreach($tw_feed2 as $items4)
                            {
                                 if($items4->socialMediaType[0]->socialMediaType=='twitter'){
                                   if($tw2==2){

                                    $tw_stream_id2=$items4->stream_id;
                                    $tw_username2=$items4->from;
                                    $tw_messages2=$items4->messages;
                                    $tw_link2=$items4->link_feed;
                                    $tw_link_aset2=$items4->link_asset;
                                    }
                                 $tw2++;
                                }

                            }


                        ?>
                        <div class="social-feeds--box facebook">
                            <div class="header">
                                <i class="fa fa-facebook pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-thumbs-o-up"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <?php echo $fb_messages1; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo $fb_link1; ?>" target="_blank">
                                            <img class="media-object img-responsive" src="<?php echo $fb_link_aset1;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $fb_username1;?></p>
                                        <p><small>Rabu, 1 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 nopadding br bt">
                        <div class="social-feeds--box twitter">
                            <div class="header">
                                <i class="fa fa-twitter pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <?php echo $tw_messages1; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" target="_blank">
                                            <img class="media-object img-responsive"  src="<?php echo $tw_link_aset1;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $tw_username1;?></p>
                                        <p><small>18 Feb 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                </div><!--/ .social-feeds -->

                <div class="row social-feeds row-eq-height">

                    <div class="col-xs-12 col-md-6 nopadding br bt">
                        <div class="social-feeds--box twitter">
                            <div class="header">
                                <i class="fa fa-twitter pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <?php echo $tw_messages2; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive"  src="<?php echo $tw_link_aset2;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $tw_username2;?></p>
                                        <p><small>Rabu, 2 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 nopadding bl bt">
                        <div class="social-feeds--box facebook">
                            <div class="header">
                                <i class="fa fa-facebook pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-thumbs-o-up"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <?php echo $fb_messages2; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo $fb_link2; ?>" target="_blank">
                                            <img class="media-object img-responsive" src="<?php echo $fb_link_aset2;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $fb_username2;?></p>
                                        <p><small>Rabu,  Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                </div><!--/ .social-feeds -->

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-6 news-feeds">
                <div class="row row-eq-height">
                    <div class="col-xs-12 col-md-6 nopadding bl bt">
                        <a href="/galeri-ajfc" class="news-feeds--image">
                            <img src="/website/static/images/dummy/yangterpenting.jpg" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-12 col-md-6 nopadding br bt">
                        <a href="/galeri-ajfc" class="news-feeds--image" id="imageBoxA">
                            <img src="<?php echo $b[0][1]; ?>" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->

                <div class="row row-eq-height">
                    <div class="col-xs-12 col-md-6 nopadding bl bb">
                        <a href="/galeri-ajfc" class="news-feeds--image" id="imageBoxB">
                            <img src="<?php echo $b[1][1]; ?>" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-12 col-md-6 nopadding br bb">
                        <div class="text" id="textBoxC">
                            <h3 class="tbc-title"><a href="/galeri-ajfc"><?php echo $c[0][1]; ?></a></h3>
                            <p class="text-muted"><small class="tbc-date"><?php echo $b[0][2]; ?></small></p>
                            <p class="tbc-body"><?php echo $b[0][3]; ?></p>
                        </div><!--/ .text -->
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->

                <script>
                    $(function(){

                        var images = <?php echo $edaftar; ?>;

                        var imagesLength = images.length;

                        var news = <?php echo $eisi; ?>;
                        var newsLength  = news.length;

                        var imageBoxA   = $( '#imageBoxA' );
                        var iba_current = 2;
                        var iba_interval= 15000;
                        var iba_loop    = setInterval(function(){
                            imageBoxA.stop().fadeOut( 'fast', function(){
                                $( this ).parent().attr( 'href', images[ iba_current ][ 0 ] );
                                $( this ).find( 'img' ).attr( 'src', images[ iba_current ][ 1 ] );
                                $( this ).stop().fadeIn( 'fast', function(){
                                    // do nothing
                                });
                            });
                            //console.log( iba_current + ' ' + imagesLength );
                            if( iba_current < ( imagesLength - 2 ) )
                            {
                                iba_current +=2;
                            }
                            else
                            {
                                iba_current = 0;
                            }
                            console.log('a'+iba_current+'->'+images[ ibb_currentb ][ 1 ]);
                        }, iba_interval);

                        var imageBoxB   = $( '#imageBoxB' );
                        var ibb_currentb = 3;
                        var ibb_interval= 21000;
                        var ibb_loop    = setInterval(function(){
                            imageBoxB.stop().fadeOut( 'fast', function(){
                                $( this ).parent().attr( 'href', images[ ibb_currentb ][ 0 ] );
                                $( this ).find( 'img' ).attr( 'src', images[ ibb_currentb ][ 1 ] );
                                $( this ).stop().fadeIn( 'fast', function(){
                                    // do nothing
                                });
                            });
                            //console.log( iba_current + ' ' + imagesLength );
                            if( ibb_currentb < ( imagesLength - 2 ) )
                            {
                                ibb_currentb += 2;
                            }
                            else
                            {
                                ibb_currentb = 1;
                            }
                            console.log('b'+ibb_currentb+'->'+imagesLength);
                        }, ibb_interval);

                        var textBoxC    = $( '#textBoxC' );
                        var tbc_title   = textBoxC.find( '.tbc-title' );
                        var tbc_date    = textBoxC.find( '.tbc-date' );
                        var tbc_body    = textBoxC.find( '.tbc-body' );
                        var tbc_interval= 8000;
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
