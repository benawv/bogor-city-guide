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
                for($i=1; $i<30; $i++) {
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
                <h2>Rekomendasi Agen</h2>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
        
        <?php 
        if(!$this->select("agent")->isEmpty())
            $agent = (int) $this->select("agent")->getData();
        else
            $agent = 1;
        for( $i = 1; $i <= $agent; $i++ ): 
            if($i%5==0){
                echo "<div class='row'>";
                $temp = "</div>";
            }else{
                $link = "myLink-link".$i;
                $class = "thumbnail thumbnail-popup id".$i;
                $target = "#modalpdf".$i;
                $gambar = "gambar-tahukah-anda".$i;
                $class_gambar = "thumb1 clickPage".$i;
                // echo '
                // <div class="col-xs-12 col-md-20">
                //     <div class="profile-maker--box">
                //         <h4>Your Name '.$this->link("myLink-link1",array("class" => "thumbnail thumbnail-popup id1",
                //                                          "data-target" => "#modalpdf1",
                //                                          "data-toggle" => "modal")).'</h4>
                //         <img src="/website/static/images/profil.jpg" alt="Template Image" class="img-responsive">
                        
                //     </div><!--/ .profile-maker-box -->
                // </div><!--/ .col-xs-12 -->
                // ';
                echo '
                <div class="col-xs-12 col-md-20">
                    <div class="profile-maker--box">
                        <h4>'.$this->link($link,array("class" => $class,
                                                         "data-target" => $target,
                                                         "data-toggle" => "modal")).'</h4>
                        '.$this->image($gambar, array("class" => $class_gambar,"title" => "Image Size 166x202","width" => 166,"height" => 202)).'
                        
                    </div><!--/ .profile-maker-box -->
                </div><!--/ .col-xs-12 -->
                ';
                echo $temp;
                $temp = "";
            }

        endfor; ?>


    </div><!--/ .container -->
</section>