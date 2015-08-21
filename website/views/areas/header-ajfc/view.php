<!--
<div class="sticky-object">
    <div class="sticky-object-inner">
        <a href="#" class="sticky-object-toggle"><i class="fa fa-angle-right"></i></a>
        <p>Pendaftaran tinggal 1hari lagi lho!</p>
        <a href="<?php echo $this->link("linkDaftar")->getHref();?>" class="sticky-object-cta">Daftar Sekarang!!</a>
    </div>
</div>
-->
<style>
    .gmbr{
          width: 100%;
          height: auto;
          position: relative;
    }
</style>
<header>

<div class="gmbr">
                    <?php 
                        echo $this->image("gallery-carousel-landing", array(
                                'title' 	=> 'Image Size 960x400',
                                 "width" => "100%",
								 "height" =>480,
                                 "id" => "AJFCHead",
								 "class" => "AJFCHead"
                        ));
                    ?>
                </div>
    <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-3 col-md-offset-9">
                    <div class="box-dent mt32">
                            <?php
                                    $pt = $this->select('positionAJFC_')->getData();
								    $ct = $this->select('colorAJFC_')->getData();
                            ?>
                        <div class="box-dent--inner <?php echo $pt; ?> <?php echo $ct; ?>">
                            <h2><?php echo $this->input("JudulAJFC"); ?></h2>
                            
                <?php echo $this->wysiwyg('descriptAJFC')?>
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
											        //array("left", "Left"),
											        //array("right", "Right")
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
											        //array("blue", "blue"),
											        //array("yellow", "yellow"),
											        //array("light-blue", "light-blue"),
											        //array("red", "red"),
											        //array("green", "green"),
											        //array("purple", "purple")
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