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
                    <a href="/ajfc/proses-seleksi" class="nav-item green sitemap">
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
                    <a href="/ajfc/tanya-jawab" class="nav-item orange question">
                        <h4><small>02</small> Tanya Jawab</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-4">
                    <a href="/ajfc/daftar-perserta" class="nav-item users">
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
            <div class="col-xs-12 col-md-6">
                
                <div class="row social-feeds">
                    <div class="col-xs-12 col-sm-6 col-md-6 pr0">
                
                        <?php
                        
                            $fb_feed1 = new Object_socialMediaFeed_List();
                            $fb_feed1->setLimit(1);
                            $fb_feed1->setOrder("asc");
                            $x = 1;
                            
                            $NoDada = "";
                            foreach($fb_feed1 as $items1)
                            {
                                $fb_stream_id1=$items1->stream_id;
                                $fb_username1=$items1->from;
                                $fb_messages1=$items1->messages;
                                $fb_link1=$items1->link_feed;
                                $fb_link_aset1=$items1->link_asset;
                            }
                            
                            $fb_feed2 = new Object_socialMediaFeed_List();
                            $fb_feed2->setLimit(2);
                            $fb_feed2->setOrder("asc");
                            $fb2 = 1;
                            $NoDada = "";
                            foreach($fb_feed2 as $items2)
                            {
                                if($fb2==2){
                                $fb_stream_id2=$items2->stream_id;
                                $fb_username2=$items2->from;
                                $fb_messages2=$items2->messages;
                                $fb_link2=$items2->link_feed;
                                $fb_link_aset2=$items1->link_asset;
                                }
                                $fb2++;
                            }
                            
                            $tw_feed1 = new Object_socialMediaFeed_List();
                            $tw_feed1->setLimit(1);
                            $tw_feed1->setOrder("asc");
                            $tw1 = 1;
                            $NoDada = "";
                            foreach($tw_feed1 as $items3)
                            {
                               
                                    $tw_stream_id3=$items3->stream_id;
                                    $tw_username3=$items3->from;
                                    $tw_messages3=$items3->messages;
                                    $tw_link3=$items3->link_feed;
                              
                            }
                            
                            
                            $tw_feed2 = new Object_socialMediaFeed_List();
                            $tw_feed2->setLimit(1);
                            $tw_feed2->setOrder("asc");
                            $tw2 = 1;
                            $NoDada = "";                          
                            foreach($tw_feed2 as $items4)
                            {
                                if($tw2==2){
                                    $tw_stream_id4=$items4->stream_id;
                                    $tw_username4=$items4->from;
                                    $tw_messages4=$items4->messages;
                                    $tw_link4=$items4->link_feed;
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
                                        <a href="<?php echo $fb_link1; ?>">
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
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 pl0">
                        <div class="social-feeds--box twitter">
                            <div class="header">
                                <i class="fa fa-twitter pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <?php echo $tw_messages3; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="http://placehold.it/48x48" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $tw_username3;?></p>
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
                                <!--<a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <?php echo $tw_messages4; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="http://placehold.it/48x48" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $tw_username4;?></p>
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
                                <!--<a href="#" class="pull-right"><i class="fa fa-thumbs-o-up"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <?php echo $fb_messages2; ?>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo $fb_link2; ?>">
                                            <img class="media-object img-responsive" src="<?php echo $fb_link_aset1;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $fb_username2;?></p>
                                        <p><small>Rabu, 1 Mar 2015</small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->
                    
                </div><!--/ .social-feeds -->
                
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-6 news-feeds">
                <?php 
                    $entries = new Object_DataPesertaAJFCDefault_List();
                    $entries->setLimit(1);
                    foreach ($entries as $key) {
                        $img = $key->fotoPeserta;
                        $ptg = ucfirst($key->satuTerpenting);
                        $nama = ucwords($key->namaLengkap);
                        $tgll = date("Y", strtotime($key->tanggalLahir));
                        $nyear = date("Y",time());
                        $umur = $nyear-$tgll;
                        $asl = ucwords($key->tempatLahir);
                        $prop = ucwords($key->propinsi);
                ?>
                <div class="news-feeds--box">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 hidden-xs hidden-sm image">
                            <img src="<?php echo $img; ?>" alt="" class="" />
                        </div><!--/ .col-xs-12 -->
                        <div class="col-xs-12 col-md-6 content">
                            <div class="news-feeds--box---content">
                                <h3><?php echo $ptg; ?></h3>
                                <p><?php echo $nama.', '.$umur.' Tahun<br />'.$asl.', '.$prop; ?></p>
                            </div><!--/ .news-feeds-box--content -->
                            <!--<a href="galeri-ajfc" class="btn-edge"></a>-->
                        </div><!--/ .col-xs-12 -->
                    </div><!--/ .row -->
                </div><!--/ .news-feeds--box -->
                <?php
                    }
                    $entries = new Object_DataPesertaAJFC_List();
                    $entries->setLimit(1);
                    $jml = count($entries);
                    if($jml < 1){
                        $entries = new Object_DataPesertaAJFCDefault_List();
                        $entries->setLimit(1);
                    }
                    $no=1;
                    foreach ($entries as $key) {
                        $img = $key->fotoPeserta;
                        $ptg = ucfirst($key->satuTerpenting);
                        $nama = ucwords($key->namaLengkap);
                        $tgll = date("Y", strtotime($key->tanggalLahir));
                        $nyear = date("Y",time());
                        $umur = $nyear-$tgll;
                        $asl = ucwords($key->tempatLahir);
                        $prop = ucwords($key->propinsi);
                  
                ?>
                <div class="news-feeds--box">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 content">
                            <div class="news-feeds--box---content">
                                <h3><?php echo $ptg; ?></h3>
                                <p><?php echo $nama.', '.$umur.' Tahun<br />'.$asl.', '.$prop; ?></p>
                            </div><!--/ .news-feeds-box--content -->
                            <!--<a href="#" class="btn-edge"></a>-->
                        </div><!--/ .col-xs-12 -->
                        <div class="col-xs-12 hidden-xs hidden-sm col-md-6 image">
                            <img src="<?php echo $img; ?>" alt="" class="" />
                        </div><!--/ .col-xs-12 -->
                    </div><!--/ .row -->
                </div><!--/ .news-feeds--box -->
                <?php
                    }
                ?>
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>
