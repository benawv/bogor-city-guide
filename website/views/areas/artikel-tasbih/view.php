<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



<style>
    #agent-locator
    {
        position: relative;
        max-width: 100% !important;
        min-width: 100% !important;
        width: 100% !important;
        float: none;
    }

    #agent-locator #maparea
    {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        height: 328px !important;
    }

    #agent-locator .searchbox
    {
        margin-bottom: 20px;
    }

    #agent-locator .searchbox > input[type="search"],
    #agent-locator .searchbox > input[type="text"]
    {
        width: 78%;
        border: solid 1px #ddd;
        font-size: small;
        padding: 12px 24px;
        margin: 0 auto;
        line-height: 1.5;
    }

    #agent-locator .searchbox > button.search-btn {
      width: 22%;
      margin: 0 auto;
      font-size: small;
      padding: 14px 2px;
      display: inline-block;
      text-transform: uppercase;
      background-color: #003781;
      border: solid 1px #003781;
      border-radius: 0;
      color: white;
      line-height: 0;
      float: right;
    }

    /* Respsonsive */

    @media ( max-width: 767px )
    {
        #agent-locator .searchbox > input[type="search"],
        #agent-locator .searchbox > input[type="text"]
        {
            width: 100%;
            display: block;
        }

        #agent-locator .searchbox > button.search-btn
        {
            width: 100%;
            display: block;
            margin-top: 16px;
        }
    }
    

</style>


                    <?php if($this->editmode) { ?>
                How many box you want to show?
    
                <?php
                    // prepare the store
                    $selectStore = [];
                    for($i=2; $i<=8; $i++) {
                        $selectStore[] = [$i, $i];
                    }
                ?>
                <?php echo $this->select("slides",[
                    "store" => $selectStore,
                    "reload" => true
                ]); ?>

    <?php } ?>
    <?php 
        $id = "container-carousel-".uniqid();
        $slides = 1;
        if(!$this->select("slides")->isEmpty()){
            $slides = (int) $this->select("slides")->getData();
        }
    ?>
<section class="landing-tasbih-grid">
    <div class="container" style="max-width:990px; margin:auto;">
        
<!--
        <div class="row">
            <div class="col-xs-12 col-md-8 pr8">
-->

                <div class="row">
                    <?php for($i=1;$i<$slides+1;$i++) { ?>
                    <?php
                                $color = $this->select('color_'.$i)->getData();
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="landing-tasbih-grid--item <?php echo $color;?>">
                            <div style="width:306; height:506px;">
                                        <?php echo $this->renderlet("artikel".$i, array(
                                            "controller" => "landing",
                                            "action" => "renderlet",
                                            "editmode" => $this->editmode,
                                            "title" => "Drag objek artikel",
                                            "height" => 200,
                                            "maxlength" => 10
                                        )); ?>
                                <!--<a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>-->
                            </div><!--/ .landing-tasbih-grid--item-inner -->
                            <?php if($this->editmode) { ?>
                                        
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
                                                    array("orange", "Orange"),
                                                    array("white", "White")
                                                ),
                                                "reload" => true
                                            )); 
                                        ?>
                                        </p>
                                    <?php } ?>
                        </div><!--/ .landing-tasbih-grid--item -->
                    </div><!--/ .col-xs-12 -->
<?php }?>
                    

                </div><!--/ .row -->
                                    

<!--            </div>/ .col-xs-12 -->
<!--                        <div class="col-xs-12 col-md-4 pl8">-->

<!--                <div class="landing-tasbih-map" style="height:335px !important;">-->
<!--                    <div id="agent-locator">-->
<!--                        <div id="maparea"></div>-->
<!--                    </div>/ #agent-locator -->
<!--                    <div class="landing-tasbih-map--button">-->
<!--                        <a href='http://agen.imkepo.com/' target="_blank"><i class="fa fa-search"></i> Temukan Agen</a>-->
<!--                    </div>/ .landing-tasbih-map--button -->
<!--                </div>/ .landing-tasbih-map -->

<!--            </div>/ .col-xs-12 -->
<!--        </div>/ .row -->
        
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-grid -->