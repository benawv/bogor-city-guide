<header>
    <style>
        /* Override AJFC's feature box color */
        .box-dent--inner{ background: #009a44; }
        .box-dent::before{ border-top: 28px solid #009a44 !important;}
        .social-feeds .social-feeds--box.twitter{ background: #009a44 !important;}
        .social-feeds .social-feeds--box.facebook{background: #73c898!important;}
        .backg{width:960px; margin:auto;}
    </style>
     <div class="backg">
        <!--<img src="/website/ajfc/img/bg-home.jpg" alt="Home" class="img-responsive" />-->
        <div id="slideshow" class="clearfix">
<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many images you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<30; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
                <?php echo $this->select("slides",[
                    "store" => $selectStore,
                "reload" => true
            ]); ?>
        </div>
    </div>

    <style type="text/css">
        .gallery .item {
            min-height: 377px;
        }
        .place-bg-gallery{
        	height: 265px !important;
        }
    </style>
<?php } ?>
<?php 
	$id = "gallery-carousel-".uniqid();
	$slides = 2;
	if(!$this->select("slides")->isEmpty()){
        $slides = (int) $this->select("slides")->getData();
    }
    $seq = [];
    for($a=1; $a<=$slides; $a++) {
        $selectSeq[] = [$a, $a];
    }
?>
<ul class="slides">
	<?php
		for($z=0;$z<$slides;$z++) {
			for($i=0;$i<$slides;$i++) { 
				$v = $this->select('seq_'.$i)->getData() ? $this->select('seq_'.$i)->getData() : 1;
				$w = $z+1;
				if($w == $v){
?>
					<li>
						<?php
						    if(!$this->editmode){
							if($i!=0){
							    $hide = "hide";
							}
							else{
							    $hide = "";
							}
						    }
						    else{
							$hide = "";
						    }
						?>
						<div class="slide <?php echo $hide;?>">
							<div>
								<?php echo $this->image("image_".$i, ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "title" => "Image Size 960x400"])?>
							</div>
							<?php
								$extra = $this->image("image_".$i)->getHotspots();
								//$pos = $extra[0]['data'][0]['value'];
								//$color = $extra[0]['data'][1]['value'];
								$pos = $this->select('position_'.$i)->getData();
								$color = $this->select('color_'.$i)->getData();
							?>
							<div class="fixbox <?php echo $pos?>60">
								<div class="place-bg bg-<?php echo $color?> place-bg-gallery">
								    <div>
									<?php if($this->editmode || !$this->input("caption-title-" . $i)->isEmpty()) { ?>
			                            <h1><?php echo $this->input("caption-title-" . $i, ["width" => 251]) ?></h1>
			                        <?php } ?>
			                        <?php if($this->editmode || !$this->textarea("caption-text-" . $i)->isEmpty()) { ?>
			                            <p>
			                                <?php echo $this->textarea("caption-text-" . $i, ["width" => 251, "height" => 100, "maxlength" => 140]) ?>
			                            </p>
			                        <?php } ?>
			                        <?php if($this->editmode) { ?>
			                        	<p>
				                        <?php 
				                        	echo "Sequence: <br />";
			                        		echo $this->select("seq_".$i,array(
											    "store" => $selectSeq,
			                        			"reload" => true
											    )
											); 
										?>
			                        	</p>
			                        	<p>
			                        	<?php 
			                        		echo "Position: <br />";
			                        		echo $this->select("position_".$i,array(
											    "store" => array(
											        array("left", "Left"),
											        array("right", "Right")
											    )
											)); 
										?>
			                        	</p>
			                        	<p>
				                        <?php 
				                        	echo "Color: <br />";
			                        		echo $this->select("color_".$i,array(
											    "store" => array(
											        array("red", "Red"),
											        array("lightgreen", "Light Green"),
                                                                                                array("green", "Green"),
											        array("purple", "Purple"),
											        array("blue", "Blue"),
											        array("orange", "Orange")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
			                        <?php } ?>
								    </div>
								</div>
								<div class="edge e-<?php echo $color?>">
									<?php echo $this->link("boxlink_".$i); ?>
								</div>
							</div>
						</div>
					</li>

	<?php 		} 
			}
		}
	?>
	
</ul>
</div>
    </div><!--/ .background -->
    <nav class="main-navigation">
        <div class="container">
           <div class="row">
                <div class="col-xs-12 col-md-3">
                    <a href="/kalkulator/tasbih" class="nav-item green sitemap">
                        <h4><small>01</small>Ilustrasi</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3">
                    <a href="/tasbih/tanya-jawab" class="nav-item orange question">
                        <h4><small>02</small>Tanya Jawab Produk</h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3">
                    <a href="/tasbih/cari-agen-syariah" class="nav-item users">
                        <h4><small>03</small> Cari Agen Syariah </h4>
                    </a>
                </div><!--/ .col-xs-12 -->
                
                <div class="col-xs-12 col-md-3">
                    <a href="/tasbih/inqury-form" class="nav-item red users">
                        <h4><small>04</small> Inquiry Form</h4>
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
                        $entries = new Object_TasbihCalender_List();
                        $entries->setCondition("date >= ?", array(time()));
                        $entries->setLimit(1);
                        $entries->setOrderKey("date");
                        $entries->setOrder("asc");
                        if(count($entries)<0){
                            $entries = new Object_TasbihCalender_List();
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
                        <h2>Kalender Hijriah</h2>
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
    $entries = new Object_TasbihCalender_List();
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
            $ptg = ucfirst(strtolower($key->satuTerpenting));
            $nama = ucwords(strtolower($key->namaLengkap));
            $tgll = date("Y", strtotime($key->tanggalLahir));
            $nyear = date("Y",time());
            $umur = $nyear-$tgll;
            $asl = ucwords(strtolower($key->tempatLahir));
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

                /*
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
                */

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
<?php 

                    $listnews = new Object_TasbihNews_List();
                    $listnews->setLimit(4);
                    $listnews->setOrder('desc');
                    
                    $i++;
                    foreach($listnews as $items){
                        $news_stack[$i]=array("date"=>$items->newsdate,
                                "teaser"=>$items->deskripsisingkat,
                                "link"=>"/tasbih/tasbih-news/".$items->o_id,
                                "title"=> $items->title,
                                "images"=>$items->images->path.$items->images->filename                                
                                );
                        array_push($news_stack[$i]);
                        $i++;
                    }
                    //echo "<pre>";
                    //print_r($news_stack);
                    //echo "</pre>";
                
                
                    ?>
<section class="mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 pl30 pr30">
                
                <div class="row social-feeds row-eq-height">
                    
                    <div class="col-xs-12 col-md-6 nopadding bl bt">
                        <div class="social-feeds--box facebook">
                            <img src="<?php echo $news_stack[1][images]; ?>" alt="" class="bg-image">
                            <div class="header">
                                <i class="fa fa-book pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-thumbs-o-up"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <a href="<?php echo $news_stack[1][link]; ?>" >
                                <h2><?php echo $news_stack[1][title]; ?></h2>
                                <p><?php echo $news_stack[1][teaser]; ?></p>
                                </a>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">     
                                    </div><!--/ .media-left -->
                                    <div class="media-body">                                        
                                        <p><small><?php echo $news_stack[1][date]; ?></small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 nopadding br bt">
                        <div class="social-feeds--box twitter">
                            <img src="<?php echo $news_stack[2][images]; ?>" alt="" class="bg-image">
                            <div class="header">
                                <i class="fa fa-book pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <a href="<?php echo $news_stack[2][link]; ?>" >
                                <h2><?php echo $news_stack[2][title]; ?></h2>
                                <p><?php echo $news_stack[2][teaser]; ?></p>
                                </a>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">   
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><small><?php echo $news_stack[2][date]; ?></small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                </div><!--/ .social-feeds -->

                <div class="row social-feeds row-eq-height">

                    <div class="col-xs-12 col-md-6 nopadding br bt">
                        <div class="social-feeds--box twitter">
                            <img src="<?php echo $news_stack[3][images]; ?>" alt="" class="bg-image">
                            <div class="header">
                                <i class="fa fa-book pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-retweet"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <a href="<?php echo $news_stack[3][link]; ?>" > 
                                <h2><?php echo $news_stack[3][title]; ?></h2>
                                <p><?php echo $news_stack[3][teaser]; ?></p>
                                </a>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">                                        
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><small> <?php echo $news_stack[3][date]; ?></small></p>
                                    </div><!--/ .media-body -->
                                </div><!--/ .media -->
                            </div><!--/ .footer -->
                        </div><!--/ .social-feeds--box -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 nopadding bl bt">
                        <div class="social-feeds--box facebook">
                            <img src="<?php echo $news_stack[4][images]; ?>" alt="" class="bg-image">
                            <div class="header">
                                <i class="fa fa-book pull-left"></i>
                                <!--<a href="#" class="pull-right"><i class="fa fa-thumbs-o-up"></i></a>-->
                            </div><!--/ .header -->
                            <div class="clearfix"></div>
                            <div class="body">
                                <a href="<?php echo $news_stack[4][link]; ?>" > 
                                    <h2><?php echo $news_stack[4][title]; ?></h2>
                                    <p><?php echo $news_stack[4][teaser]; ?></p>
                                </a>
                            </div><!--/ .body -->
                            <div class="footer">
                                <div class="media">
                                    <div class="media-left">
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><small><?php echo $news_stack[4][date]; ?></small></p>
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
                        <a href="/galeri-ajfc" class="news-feeds--image" id="imageBoxA" style="display: block;">
                            <img src="/tasbih/background/yangterpenting1.jpg" alt="">
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-12 col-md-6 nopadding br bt" href="#">
                        <a href="/galeri-ajfc" class="news-feeds--image" id="imageBoxA" style="display: block;">
                            <img src="/tasbih/background/informasiseputarmekah.png" alt="">
                        </a>
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->

                <div class="row row-eq-height">
                    <div class="col-xs-12 col-md-6 nopadding bl bb" href="#">
                        <a href="/galeri-ajfc" class="news-feeds--image" id="imageBoxB" style="display: block;">
                            <img src="/tasbih/background/jadwalkeberangkatan.png" alt="">
                        </a>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-12 col-md-6 nopadding br bb">
                        <a href="/galeri-ajfc" class="news-feeds--image" id="imageBoxB" style="display: block;">
                            <img src="/tasbih/background/yangterpenting.jpg" alt="">
                        </a>
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->

            </div>
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>
