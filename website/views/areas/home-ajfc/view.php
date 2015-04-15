<header>
    
    <div class="background">
        <img src="/website/static/images/ajfc/background/background.jpg" alt="Home" class="img-responsive" />
    </div><!--/ .background -->
    <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-4 col-md-3 col-md-offset-9">
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
                        $entries->setCondition("date > ?", array(time()));
                        $entries->setLimit(1);
                        $entries->setOrderKey("date");
                        $entries->setOrder("asc");
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
                    array_push($c,array(0=>"/ajfc/galeri-ajfc",1=>$nama,2=>$ptg,3=>$content));
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
                                if($items1->socialMediaType->socialMediaType=='facebook'){
                                if($fb1==1){                                
                                    $fb_StreamId1   =$items1->StreamId;
                                    $fb_CreateDate1 =$items1->CreateDate;
                                    $fb_From1       =$items1->From;
                                    $fb_UserImages  =$items1->UserImages;
                                    $fb_FromId1     =$items1->FromId;
                                    $fb_LinkAsset1  =$items1->LinkAsset;
                                    $fb_TypeAsset1  =$items1->TypeAsset;
                                    $fb_LinkFeed1   =$items1->LinkFeed;
                                    $fb_Messages1   =$items1->Messages;                                    
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
                                if($items2->socialMediaType->socialMediaType=='facebook'){
                                    if($fb2==2){
                                     
                                    $fb_StreamId2   =$items2->StreamId;
                                    $fb_CreateDate2 =$items2->CreateDate;
                                    $fb_From2       =$items2->From;
                                    $fb_UserImages2 =$items2->UserImages;
                                    $fb_FromId2     =$items2->FromId;
                                    $fb_LinkAsset2  =$items2->LinkAsset;
                                    $fb_TypeAsset2  =$items2->TypeAsset;
                                    $fb_LinkFeed2   =$items2->LinkFeed;
                                    $fb_Messages2   =$items2->Messages;
                                    
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
                                if($items3->socialMediaType->socialMediaType=='twitter'){
                                   if($tw1==1){
                                    
                                    $tw_StreamId1   =$items3->StreamId;
                                    $tw_CreateDate1 =$items3->CreateDate;
                                    $tw_From1       =$items3->From;
                                    $tw_UserImages1 =$items3->UserImages;
                                    $tw_FromId1     =$items3->FromId;
                                    $tw_LinkAsset1  =$items3->LinkAsset;
                                    $tw_TypeAsset1  =$items3->TypeAsset;
                                    $tw_LinkFeed1   =$items3->LinkFeed;
                                    $tw_Messages1   =$items3->Messages;
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
                                if($items4->socialMediaType->socialMediaType=='twitter'){
                                   if($tw2==1){
                                   
                                    $tw_StreamId2   =$items4->StreamId;
                                    $tw_CreateDate2 =$items4->CreateDate;
                                    $tw_From2       =$items4->From;
                                    $tw_UserImages2  =$items4->UserImages;
                                    $tw_FromId2     =$items4->FromId;
                                    $tw_LinkAsset2  =$items4->LinkAsset;
                                    $tw_TypeAsset2  =$items4->TypeAsset;
                                    $tw_LinkFeed2   =$items4->LinkFeed;
                                    $tw_Messages2   =$items4->Messages;
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
                                <?php echo $fb_Messages1; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo $fb_LinkFeed1; ?>" target="_blank">
                                            <img class="media-object img-responsive" src="<?php echo $fb_UserImages;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $fb_From1;?></p>
                                        <p><small><?php echo $fb_CreateDate1; ?></small></p>
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
                                <?php echo $tw_Messages1; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo "https://twitter.com/user/status/".$tw_StreamId1; ?>" target="_blank">
                                            <img class="media-object img-responsive"  src="<?php echo $tw_UserImages1;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $tw_From1;?></p>
                                        <p><small><?php echo $tw_CreateDate1; ?></small></p>
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
                                <?php echo $tw_Messages2; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo "https://twitter.com/user/status/".$tw_StreamId2; ?>">
                                            <img class="media-object img-responsive"  src="<?php echo $tw_UserImages2;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $tw_From2;?></p>
                                        <p><small><?php echo $tw_CreateDate2; ?></small></p>
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
                                <?php echo $fb_Messages2; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo $fb_LinkFeed2; ?>" target="_blank">
                                            <img class="media-object img-responsive" src="<?php echo $fb_UserImages2;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $fb_From2;?></p>
                                        <p><small><?php echo $fb_CreateDate2;?></small></p>
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
                        <a href="/ajfc/galeri-ajfc" class="news-feeds--image">
                            <img src="/website/static/images/dummy/yangterpenting.jpg" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-12 col-md-6 nopadding br bt">
                        <a href="/ajfc/galeri-ajfc" class="news-feeds--image" id="imageBoxA">
                            <img src="<?php echo $b[0][1]; ?>" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->

                <div class="row row-eq-height">
                    <div class="col-xs-12 col-md-6 nopadding bl bb">
                        <a href="/ajfc/galeri-ajfc" class="news-feeds--image" id="imageBoxB">
                            <img src="<?php echo $b[1][1]; ?>" alt="" />
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-12 col-md-6 nopadding br bb">
                        <div class="text" id="textBoxC">
                            <h3 class="tbc-title"><a href="/ajfc/galeri-ajfc"><?php echo $c[0][1]; ?></a></h3>
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
