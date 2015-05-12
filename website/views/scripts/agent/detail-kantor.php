<?php
    $kantor = $this->kantor;
    $agent = $this->agent;
?>
<div class="container boxes-view">
	<?php //echo $this->template("includes/breadcrumb.php")?>
	<!--<span class="breadcrumb"><h1 class="title"><?php /*echo $this->document->getProperty('navigation_title');*/?></h1></span>-->
	
	<div class="wrapper-special clearfix">
		<div id="slideshow" class="clearfix">
            <ul class="slides">
                <?php
                    $x = count($kantor->fotoGaleriKantor->items);
                    for($z=0;$z<$x;$z++){
                ?>
                        <li>
                            <div class="slide">
                                <div class="photo">
                                    <img src="<?php echo $kantor->fotoGaleriKantor->items[$z]->fotoFotoKantor->path.$kantor->fotoGaleriKantor->items[$z]->fotoFotoKantor->filename;?>" />
                                </div>
                                
                                <div class="fixbox right60">
                                    <div class="place-bg bg-blue place-bg-gallery">
                                        <div>
                                            <h2>Lorem Ipsum</h2>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="edge e-blue">
                                        <!--Link-->
                                    </div>
                                </div>
                            </div>
                        </li>
                <?php
                    }
                ?>
            </ul>
            </div>
	</div><!-- .wrapper-special -->
	
	<div>
		<?php
			function limit_words($string, $word_limit)
			{
				$words = explode(" ",$string);
				return implode(" ",array_splice($words,0,$word_limit));
			}
		?>
		<div class="full-w bg-white">
            <h2>
                <span class="judul_section">Profil Kantor</span>
            </h2>
            <div class="description width-66">
                <div class="section-left-40">
                    <img src="<?php echo $kantor->fotoKantor->path.$kantor->fotoKantor->filename?>" width="226" />
                </div>
                <div class="section-right-60">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </div>
            </div>
        </div>
		<div style="clear: both"></div>
		
        <div class="items-container">
		<?php foreach($agent as $ag){?>
            <div class="item">
                <div class="heading">
                    <h2 class="title_news"><?php echo ucwords(strtolower($ag->getNamaAgent()));?></h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <img src="<?php echo $ag->getFotoAgent();?>" width="304" />
                <div class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </div>
            </div>
        <?php }?>
		</div>
	</div>
</div>