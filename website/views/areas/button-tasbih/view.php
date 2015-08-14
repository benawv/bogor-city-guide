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


<?php } ?> 
<?php 
    $button = 1;
    if(!$this->select("buttons")->isEmpty()){
        $button = (int) $this->select("buttons")->getData();
    }
?>    
<nav class="main-navigation" style="max-width:960px; margin:auto;">
            <div class="row">
                <?php for($loop=1;$loop<=$button;$loop++){ ?>
                <div class="col-xs-12 col-md-3" style="min-width:20%; min-height:50px; margin:auto; !important">
                    
                    <?php
                                    $col = $this->select("color_".$loop)->getData();
								    $ic = $this->select('icon_'.$loop)->getData();
				    ?>
                    
                    <a href="#" class="nav-item <?php echo $col; ?> <?php echo $ic; ?>">
                        <h4 style="font-size:18px"><small><?php echo $this->input("btn-".$loop, array("width" => 65)); ?></small></h4>
                    </a>
                    
                    <?php 
                                            if($this->editmode) {
			                        		echo "Icon: <br />";
			                        		echo $this->select("icon_".$loop,array(
											    "store" => array(
											        array("question", "Question"),
											        array("sitemap", "Sitemap"),
											        array("chat", "Chat"),
											        array("users", "Users")
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
											        array("grey", "grey"),
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
            </div>

    </nav>