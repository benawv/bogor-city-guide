<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/profil-maker.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>
    .full-w .thumbnail.thumbnail-popup
    {
        background-image: none;
        color: black;
    }
	.profile-maker.full-w.bg-white{
		padding-left:0px;
	}
    @media ( max-width: 768px )
    {
        .desktop-show {
            display : none;
        }
        .mobile-show{
            display : block;
        }
    }
        @media ( min-width: 768px )
    {
        .desktop-show {
            display : block;
        }
        .mobile-show{
            display : none;
        }
    }
    
.multiSlide{margin-bottom:50px;position:relative;}
.multiSlide > ul{margin:0;padding:0;list-style-type:none;}
.multiSlide .slide{width:100%;height:400px;position:relative;}
.multiSlide .slide .photo{}
.multiSlide .slide .stickybox{width:251px;height:231px;position:absolute;right:60px;top:15px;}
.multiSlide .slide h3{font-size:1.6em;font-weight:normal;}
.multiSlide .slide p{font-size:12px;line-height:1.3em;}
.multiSlide .slide .action{}
.multiSlide .flex-direction-nav a{opacity:1 !important;}
.multiSlide .flex-direction-nav .flex-prev{left:0 !important;top:150px;color:#fff;text-shadow:none;background:url('../images/arrows.png');background-position:0 0!important;text-align:center;height:115px;}
.multiSlide .flex-direction-nav .flex-prev:before{font-size:20px;margin:115px 0px;display:block;}
.multiSlide .flex-direction-nav .flex-next{right:0 !important;top:150px;color:#fff;text-shadow:none;background:url('../images/arrows.png');background-position:-86px 0!important;text-align:center;height:115px;}
.multiSlide .flex-direction-nav .flex-next:before{font-size:20px;margin:115px 0px;display:block;}
.multiSlide .flex-control-paging li a{background:#fff;border:1px solid #eee;}
.multiSlide .flex-control-paging li a.flex-active{background:#1ba1e2;border:none;}
    
</style>

<section class="profile-maker full-w bg-white">
    <div class="container">

        <?php if($this->editmode) { ?>
        <div class="row">
            <div class="col-xs-6">
            How many Agent you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=1; $i<=10; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
            <?php echo $this->select("agent",[
                "store" => $selectStore,
                "reload" => true
            ]); ?>
            </div><!--/ .col-xs-6 -->
        </div><!--/ .row -->
        <?php } ?>

        <h2>
            <?php if($this->editmode): ?>
                Icon: <?php echo $this->image('icon_', array(
                                    'title' 	=> 'Image Size 31x31',
                                    'width' 	=> 100,
                                    'height' 	=> 100,
                                    'thumbnail'	=> 'icon')) ?>
            <?php else: ?>
                <?php if($this->image('icon_')->getSrc()):?>
                    <div style="background-image: url('<?php echo $this->image('icon_')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; margin-left: 10px; "></div>
                <?php endif;?>

            <?php endif; ?>
            <?php echo $this->input("heading");?>
        </h2>

        <!--
        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2><?php echo $this->input("heading");?></h2>
            </div>
        </div><!--/ .row -->
<div class="desktop-show">
        <?php
        if(!$this->select("agent")->isEmpty())
            $agent = (int) $this->select("agent")->getData();
        else
            $agent = 1;
        for( $i = 1; $i <= $agent; $i++ ):
            //if($i%5==0){
            //    echo "<div class='row'>";
            //    $temp = "</div>";
            //}else{
                $link = "myLink-link".$i;
                $class = "thumbnail thumbnail-popup id".$i;
                $target = "#modalpdf".$i;
                $gambar = "gambar-tahukah-anda".$i;
                $class_gambar = "thumb1 clickPage".$i;
                // echo '
            ?>
                 <div class="col-xs-12 col-md-20">
                     <div class="profile-maker--box">
                         <h4><?php
                                if($this->editmode) {
                                    echo $this->link($link,array("class" => $class));
                                }else{
                                    $id_agen = $this->link($link,array("class" => $class))->getHref();
                                    if($id_agen != "" && $id_agen != " " && $id_agen != "#"){
                                    $kondisi = array("condition" => "kodeAgent = ".$id_agen);;
                                    $getID = Object_AgentLocatorData::getList($kondisi);
                                    foreach($getID as $row)
                                    {
                                        $id = $row->getO_id();
                                    }

                                    $data = Object_AgentLocatorData::getById($id);
                                    //echo "<pre>";//print_r($data->getO_id());//die();
                                    //if($data->getKantor()[0]->o_id != ""){
                            ?>
                                        <a href="<?php echo '/detail-agent/'.$data->getKantor()[0]->o_id.'-'.$data->getO_id();?>" target="_blank"><?php echo $this->link($link)->getText();?></a>
                            <?php
                                    }
                                    else{
                            ?>
                                        <a href="#"><?php echo $this->link($link)->getText();?></a>
                            <?php
                                    //}
                                    }
                                }
                            ?>
                            <?php
                                /*echo $this->renderlet("artikel".$i, array(
                                "controller" => "agent",
                                "action" => "renderlet",
                                "editmode" => $this->editmode,
                                "title" => "Drag objek agen yang diinginkan."
                                ));*/
                            ?>
                         </h4>
                         <!--<img src="/website/static/images/profil.jpg" alt="Template Image" class="img-responsive">-->
                        <?php
                            echo $this->image($gambar, array("class" => $class_gambar,"title" => "Image Size 166x202","width" => 166,"height" => 202));
                        ?>
                     </div><!--/ .profile-maker-box -->
                 </div><!--/ .col-xs-12 -->
            <?php
                // ';
                //echo '
                //<div class="col-xs-12 col-md-20">
                //    <div class="profile-maker--box">
                //        <h4>'.$this->link($link,array("class" => $class,
                //                                         "data-target" => $target,
                //                                         "data-toggle" => "modal")).'</h4>
                //        '.$this->image($gambar, array("class" => $class_gambar,"title" => "Image Size 166x202","width" => 166,"height" => 202)).'
                //
                //    </div><!--/ .profile-maker-box -->
                //</div><!--/ .col-xs-12 -->
                //';
                //echo $temp;
                //$temp = "";
            //}

        endfor; ?>
        </div>
        
<div class="mobile-show">
            <div class="clearfix multiSlide">
                <ul class="slides">
        <?php
if(!$this->editmode){
        if(!$this->select("agent")->isEmpty())
            $agent2 = (int) $this->select("agent")->getData();
        else
            $agent = 1;
        for( $i = 1; $i <= $agent2; $i++ ):
    
    ?>
                     <li>
                         <div class="slide" style="height : 100% !important;">
                    <?php
            //if($i%5==0){
            //    echo "<div class='row'>";
            //    $temp = "</div>";
            //}else{
                $link = "myLink-link".$i;
                $class = "thumbnail thumbnail-popup id".$i;
                $target = "#modalpdf".$i;
                $gambar = "gambar-tahukah-anda".$i;
                $class_gambar = "thumb1 clickPage".$i;
                // echo '
            ?>
                 <div class="col-xs-12 col-md-20">
                     <div class="profile-maker--box">
                         <h4><?php
                                if($this->editmode) {
                                    echo $this->link($link,array("class" => $class));
                                }else{
                                    $id_agen = $this->link($link,array("class" => $class))->getHref();
                                    if($id_agen != "" && $id_agen != " " && $id_agen != "#"){
                                    $kondisi = array("condition" => "kodeAgent = ".$id_agen);;
                                    $getID = Object_AgentLocatorData::getList($kondisi);
                                    foreach($getID as $row)
                                    {
                                        $id = $row->getO_id();
                                    }

                                    $data = Object_AgentLocatorData::getById($id);
                                    //echo "<pre>";//print_r($data->getO_id());//die();
                                    //if($data->getKantor()[0]->o_id != ""){
                            ?>
                                        <a href="<?php echo '/detail-agent/'.$data->getKantor()[0]->o_id.'-'.$data->getO_id();?>" target="_blank"><?php echo $this->link($link)->getText();?></a>
                            <?php
                                    }
                                    else{
                            ?>
                                        <a href="#"><?php echo $this->link($link)->getText();?></a>
                            <?php
                                    //}
                                    }
                                }
                            ?>
                            <?php
                                /*echo $this->renderlet("artikel".$i, array(
                                "controller" => "agent",
                                "action" => "renderlet",
                                "editmode" => $this->editmode,
                                "title" => "Drag objek agen yang diinginkan."
                                ));*/
                            ?>
                         </h4>
                         <!--<img src="/website/static/images/profil.jpg" alt="Template Image" class="img-responsive">-->
                        <?php
                            echo $this->image($gambar, array("class" => $class_gambar,"title" => "Image Size 166x202","width" => 166,"height" => 202));
                        ?>
                     </div><!--/ .profile-maker-box -->
                 </div><!--/ .col-xs-12 -->
            <?php
                // ';
                //echo '
                //<div class="col-xs-12 col-md-20">
                //    <div class="profile-maker--box">
                //        <h4>'.$this->link($link,array("class" => $class,
                //                                         "data-target" => $target,
                //                                         "data-toggle" => "modal")).'</h4>
                //        '.$this->image($gambar, array("class" => $class_gambar,"title" => "Image Size 166x202","width" => 166,"height" => 202)).'
                //
                //    </div><!--/ .profile-maker-box -->
                //</div><!--/ .col-xs-12 -->
                //';
                //echo $temp;
                //$temp = "";
            //}

        endfor;
}
        ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


    </div><!--/ .container -->
</section>
