<!--
<div class="sticky-object">
    <div class="sticky-object-inner">
        <a href="#" class="sticky-object-toggle"><i class="fa fa-angle-right"></i></a>
        <p>Pendaftaran tinggal 1hari lagi lho!</p>
        <a href="<?php echo $this->link("linkDaftar")->getHref();?>" class="sticky-object-cta">Daftar Sekarang!!</a>
    </div>
</div>
-->
                        <?php
                                    $pt = $this->select('positionAJFC_')->getData();
								    $ct = $this->select('colorAJFC_')->getData();

                                    if($ct == 'blue') $ct = '#003781';
                        ?>
<style>
    #gmbr{
          width: 100%;
          height: auto;
          position: relative;
    }
    
    header .caption .box-dent::before, div.header .caption .box-dent::before{
        
        border-top-color : <?php echo $ct; ?> !important;
    }
    
    header .caption .box-dent, div.header .caption .box-dent{
        background : <?php echo $ct; ?> !important;
    }
    @media only screen and (min-width: 768px){
        #note-ajfc{
                width :1170px;
                margin-left : -97px !important;
        }
        
        .body, .media{
            font-size :14px;
        }
    }


</style>
<header>

<div class="background" id="gmbr">
    
    <?php if($this->editmode){ ?>
                    <?php 
                        echo $this->image("gallery-carousel-landing", array(
                                'title' 	=> 'Image Size 960x480',
                                 "width" =>960,
								 "height" => 480,
                                 "id" => "AJFCHead",
								 "class" => "AJFCHead"
                        ));
                    ?>
    <?php }else{ ?>
            <img src="<?php echo $this->image("gallery-carousel-landing")->getSrc(); ?>" style="width:100% !important; min-height:100% !important;">
    <?php } ?>

                </div>
    <div class="caption">
        <div class="container">
            <div class="row" id="note-ajfc">

                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-3 col-md-offset-<?php if($pt == 'left') echo 0; else echo 9; ?>">
                    <div class="box-dent mt32">

                        <div class="box-dent--inner">
                            <h1 class="customH2" style="font-weight: bold !important;"><?php echo $this->input("JudulAJFC"); ?></h1>
                            
                            <span style="font-size:16px"><?php echo $this->wysiwyg('descriptAJFC')?></span>
                            <?php
				function limit_words($string, $word_limit)
				{
					$words = explode(" ",$string);
					return implode(" ",array_splice($words,0,$word_limit));
				}
				
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
                        <?php if($this->editmode) { ?>
			                 <p>
			                        	<?php 
			                        		echo "Position: <br />";
			                        		echo $this->select("positionAJFC_",array(
											    "store" => array(
											        array("left", "Left"),
											        array("right", "Right")
											    ),
                                                
											    "reload" => true
											)); 
										?>
			                 </p>
                            <p>
				                        <?php 
				                        	echo "Color: <br />";
			                        		echo $this->select("colorAJFC_",array(
											    "store" => array(
											        array("blue", "blue"),
											        array("yellow", "yellow"),
											        array("red", "red"),
											        array("green", "green"),
											        array("purple", "purple")
											    ),
											    "reload" => true
											)); 
										?>
			                 </p>
                        <?php } ?>
                    </div>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container-fluid -->
    </div><!--/ .caption -->

</header>