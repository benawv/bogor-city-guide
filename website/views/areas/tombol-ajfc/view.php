<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many button you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<30; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
                <?php echo $this->select("buttons",[
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
    $button = 1;
    if(!$this->select("buttons")->isEmpty()){
        $button = (int) $this->select("buttons")->getData();
    }
?>
<nav class="main-navigation">
        <div class="container">
           <div class="row">
               <?php for($loop=1;$loop<=$button;$loop++){ ?>
                <div class="col-xs-12 col-md-4">
                            <?php
                                    $col = $this->select("color_".$loop)->getData();
								    $ic = $this->select('icon_'.$loop)->getData();
							?>
<!--                    <h4><?php echo $col; ?></h4>-->
                    <a href="#" class="nav-item <?php echo $col; ?> <?php echo $ic; ?>">
                        <h4><small>0<?php echo $loop; ?></small><?php echo $this->input("btn-".$loop, array("width" => 125)); ?></h4>
                    </a>
                                    			             
			                        	<?php 
                                            if($this->editmode) {
			                        		echo "Icon: <br />";
			                        		echo $this->select("icon_".$loop,array(
											    "store" => array(
											        array("question", "Question"),
											        array("sitemap", "Sitemap"),
											        array("chat", "Chat"),
											        array("user", "User")
											    ),
                                                "reload" => true
											)); 
										?>
			                        	<br/>
			                        	
				                        <?php 
				                        	echo "Color: <br />";
			                        		echo $this->select("color_".$loop,array(
											    "store" => array(
											         array("blue", "blue"),
											        array("yellow", "yellow"),
											        array("light-blue", "light-Blue"),
											        array("red", "red"),
											        array("green", "green"),
											        array("purple", "purple"),
											        array("orange", "orange")
											    ),
											    "reload" => true
											)); 
                                            }
										?>
			                        	
                </div><!--/ .col-xs-12 -->

               <?php } ?>
            </div><!--/ .row -->
        </div><!--/ .container -->
    </nav>