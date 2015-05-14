<style>

    #profil{
        width:100%;
        
    }
	.btn-sendmail
    {
        margin: 0 auto;
        padding: 5px 10px;
        display: inline-block;
        text-transform: uppercase;
        background-color: #003781;
        border: solid 1px #003781;
        border-radius: 0;
        color: white;
        line-height: 1.5;
    }

    .btn-sendmail:hover,
    .btn-sendmail:focus
    {
        color: white;
        text-decoration: none;
        background: #003da5;
        border: solid 1px #003da5;
    }
    
</style>
<?php

    //$kantor = $this->kantor;

    //echo 'test';
    $agent = $this->agent;
    //echo "<pre>";
    //print_r($agent);
    //die();
    
?>
<div class="container boxes-view">
	<?php //echo $this->template("includes/breadcrumb.php")?>
	<!--<span class="breadcrumb"><h1 class="title"><?php /*echo $this->document->getProperty('navigation_title');*/?></h1></span>-->
                         <div class="wrapper-special clearfix">
		<div id="slideshow" class="clearfix">
            <ul class="slides">
                <?php
					$z = 0;
                    foreach($agent as $row){
						        $kodeAgent = $row->getkodeAgent();
                                $namaAgent = $row->getnamaAgent();
                                $emailAgent = $row->getemail();
                                $kantor = $row->getkantor();
                                $profilAgent = $row->getprofilAgent();
                                $fotoAgent = $row->getfotoAgent()->path.$row->getfotoAgent()->filename;
                                $Facebook = $row->getURLFacebook();
                                $Artikel = $row->getArtikel();
						$x = count($row->getfotoGaleriAgent()->items);
						for($z;$z<$x;$z++){
                ?>
							<li>
								<div class="slide">
									<div class="photo">
										<img src="<?php echo $row->getfotoGaleriAgent()->items[$z]->fotoFotoAgent->path.$row->getfotoGaleriAgent()->items[$z]->fotoFotoAgent->filename;?>" />
									</div>
									
									<div class="fixbox <?php echo $row->getfotoGaleriAgent()->items[$z]->posisiNotepad;?>60">
										<div class="place-bg bg-<?php echo $row->getfotoGaleriAgent()->items[$z]->warnaNotepad;?> place-bg-gallery">
											<div>
												<h2><?php echo $row->getfotoGaleriAgent()->items[$z]->judulNotepad;?></h2>
												<p>
													<?php echo $row->getfotoGaleriAgent()->items[$z]->deskripsiNotepad;?>
												</p>
											</div>
										</div>
										<div class="edge e-<?php echo $row->getfotoGaleriAgent()->items[$z]->warnaNotepad;?>">
											
										</div>
									</div>
								</div>
							</li>
                <?php
						}
					}
                ?>
            </ul>
            </div>
	</div><!-- .wrapper-special -->

	
	
	<div>
		
		<div class="full-w bg-white">

            <h2>
                <span class="judul_section"><strong>PROFIL AGENT</strong></span>
            </h2>
            <div class="description width-66" style="width: 100%">
                <div class="section-left-40">
                    <img src="<?php echo $fotoAgent;?>" width="226" />
                </div>
                <div class="section-right-60">
                    <p>
                    <h3><strong><?php echo "NAMA  :<br/>"; ?></strong></h3>
                        <label><?php echo $namaAgent."<br/><br/>";?></label>
                        <h3><strong><?php echo "PROFIL :<br/>"; ?></strong></h3>
                        <textarea id="profil" class="form-control" rows=10 cols=50 readonly>
                            <?php echo $profilAgent ?>
                        </textarea>
                        <br/>
						
					</p>
					<a href="mailto:<?php echo $emailAgent; ?>?Subject=Hello%20again" target="_top" class="btn btn-sendmail">Call Agent</a>
                </div>
            </div>
        </div>
		<div style="clear: both"></div>
		
        <!--Button to Calc Live Insurance-->
        <div class="items-container">
            <div class="item">
                <div class="heading">
                    <h2 class="title_news">CALCULATOR LIVE INSURANCE</h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <center><a href="#"><img src="/website/static/images/agent_locator/Calc-Live-Insurance.jpg" width="150" height="130" /></a></center>
            </div>
            
             <div class="item">
                <div class="heading">
                    <h2 class="title_news">NEWS</h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <p>
                     <?php
                        if(strlen($Artikel) < 115) echo $Artikel;
                        else echo substr($Artikel,0,115);

                        echo ". . .<br/>";
                    ?>
                </p>
                <div class="description">
                    <a href="#">&gt; Selengkapnya</a>
                </div>
            </div>
            
            <div class="item">
                <div class="heading">
                    <h2 class="title_news">FACEBOOK</h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                

                
                <div class="fb-page" data-href="<?php echo $Facebook; ?>" data-width="304" data-height="130" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/FacebookIndonesia?brand_redir=20531316728"><a href="https://www.facebook.com/FacebookIndonesia?brand_redir=20531316728">Facebook</a></blockquote></div></div>
            </div>
		</div>
        
        
	</div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3&appId=463659440451126";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>