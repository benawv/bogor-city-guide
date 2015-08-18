<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/profil-maker.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<section class="profile-maker">
    <div class="container">
        <?php if($this->editmode) { ?>
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
        </div>
        <?php } ?>
        <div class="row profile-maker--title">
            <div class="col-xs-12">
                <h2><?php echo $this->input("heading");?></h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
        
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


    </div><!--/ .container -->
</section>