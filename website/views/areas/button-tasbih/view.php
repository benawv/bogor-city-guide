<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/css-ie8/isr.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>
    .bg-yellow{background: #F16410 !important;}
    .bg-purple{background: #850AA0 !important;}
    .bg-lightgreen{background: #B3BE25 !important;}
    .bg-green{background: #009B49 !important;}
    .bg-red{background: #A40033 !important;}
    .bg-blue{background: #113388 !important;}

</style>

<?php if($this->editmode) { ?>
    <div class="alert alert-info" style="height: 75px">
        <div class="col-xs-6">
            How many button you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<=5; $i++) {
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
    $button = 2;
    if(!$this->select("buttons")->isEmpty()){
        $button = (int) $this->select("buttons")->getData();
    }
?>    
<nav class="main-navigation" style="max-width:960px; margin:auto;">
            <div class="row">
                <?php $jcol = 12 / $button; ?>
                <?php for($loop=1;$loop<=$button;$loop++){ ?>
                <div class="col-xs-12 col-md-<?php echo (int)$jcol; ?>" style="min-width:20%; min-height:50px; margin:auto; !important">
                    
                    <?php
                                    $col = $this->select("color_".$loop)->getData();
								    $ic = $this->select('icon_'.$loop)->getData();
                    ?>
                    <?php 
                                    if($this->editmode){ 
                                        echo $this->link("link_".$loop);
                                        $link = '#';
                                    }else{
                                        $link = $this->link("link_".$loop)->getHref();
                                    }
				    ?>
                    
                    <a <?php if(!($this->editmode)){ ?> href="<?php echo $link; ?>" <?php } ?> class="nav-item bg-<?php echo $col; ?> <?php echo $ic; ?>">
                    
                        <h4 style="font-size:18px"><small><?php echo $this->input("btn-".$loop, array("width" => 200)); ?></small></h4>
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
											        array("purple", "purple")
											    ),
											    "reload" => true
											)); 
                                            }
										?>
                </div><!--/ .col-xs-12 -->

                <?php } ?>
            </div>

    </nav>