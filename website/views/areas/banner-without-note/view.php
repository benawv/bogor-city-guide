<div class="row">
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
                            <div class="foto">
                                <?php echo $this->image("image_".$i, ["thumbnail" => "galleryCarousel", "dropClass" => $id . "-" . $i, "title" => "Image Size 1020x400", "width" => 635, "height" => 310])?>
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
    </div>


<script>
    $('#slideshow').width(635);
</script>