<section class="mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 pl30 pr30">

                <div class="row social-feeds row-eq-height">
                    <div class="col-xs-12 col-md-6 nopadding bl bt">

                        <?php

                            $fb_feed1 = new Object_SocialMediaFeed_List();
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
                                    $getStrId=explode('_',$fb_StreamId1);
                                    $strId1=$getStrId[1];
                                    $feedDateFb1=date('dS, F Y h:i:s A', strtotime($fb_CreateDate1));

                                }
                                $fb1++;
                                }
                            }

                            $fb_feed2 = new Object_SocialMediaFeed_List();
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
                                    $getStrId=explode($fb_StreamId2,'_');
                                    $strId2=$getStrId[1];
                                    $feedDateFb2=date('dS, F Y h:i:s A', strtotime($fb_CreateDate2));

                                    }
                                $fb2++;
                                }

                            }

                            $tw_feed1 = new Object_SocialMediaFeed_List();
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
                                    $feedDateTw1=date('dS, F Y h:i:s A', strtotime($tw_CreateDate1));
                                    }
                                   $tw1++;
                                }
                            }


                            $tw_feed2 = new Object_SocialMediaFeed_List();
                            $tw2 = 1;
                            $NoDada = "";
                            foreach($tw_feed2 as $items4)
                            {
                                if($items4->socialMediaType->socialMediaType=='twitter'){
                                   if($tw2==2){

                                    $tw_StreamId2   =$items4->StreamId;
                                    $tw_CreateDate2 =$items4->CreateDate;
                                    $tw_From2       =$items4->From;
                                    $tw_UserImages2  =$items4->UserImages;
                                    $tw_FromId2     =$items4->FromId;
                                    $tw_LinkAsset2  =$items4->LinkAsset;
                                    $tw_TypeAsset2  =$items4->TypeAsset;
                                    $tw_LinkFeed2   =$items4->LinkFeed;
                                    $tw_Messages2   =$items4->Messages;
                                    $feedDateTw2=date('dS, F Y h:i:s A', strtotime($tw_CreateDate2));
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
                                        <a href="https://www.facebook.com/164934653709133/posts/<?php echo $strId1; ?>" target="_blank">
                                            <img class="media-object img-responsive" src="<?php echo $fb_UserImages;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $fb_From1;?></p>
                                        <p><small><?php echo $feedDateFb1; ?></small></p>
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
                                        <p><small><?php echo $feedDateFb2; ?></small></p>
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
                                        <p><small><?php echo $feedDateTw1; ?></small></p>
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
                                        <a href="https://www.facebook.com/164934653709133/posts/<?php echo $strId2; ?>" target="_blank">
                                            <img class="media-object img-responsive" src="<?php echo $fb_UserImages2;?>" alt="Profile Picture">
                                        </a>
                                    </div><!--/ .media-left -->
                                    <div class="media-body">
                                        <p><?php echo $fb_From2;?></p>
                                        <p><small><?php echo $feedDateTw2;?></small></p>
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
                            <p class="text-muted"><small class="tbc-date"><?php echo $c[0][2]; ?></small></p>
                            <p class="tbc-body"><?php echo $c[0][3]; ?></p>
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
