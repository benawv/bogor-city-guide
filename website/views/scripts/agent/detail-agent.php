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

    .custom-section
    {
        padding: 0 !important;
    }

    .custom-section > h2
    {
        margin: 0 auto !important;
        padding: 12px 25px !important;
        background: #003781;
        color: white;
    }

    .custom-section > h2 > custom-section
    {
        margin: 0 !important;
        padding: 0 !important;
    }

    .custom-section .description
    {
        padding: 0;
    }

    .custom-section .description .section-left-40
    {
        padding: 0;
        background: #111;
    }

    .custom-section .description .section-left-40 img
    {
        min-width: 100%;
    }

    .custom-section .description .section-right-60
    {
        padding: 25px 25px !important;
    }

    .custom-section .description .section-right-60 p
    {
        color: #666;
        line-height: 1.8;
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

        <div class="full-w bg-white custom-section">
            <h2>
                <span class="judul_section">Profil Agent</span>
            </h2>
            <div class="description width-66">
                <div class="section-left-40">
                    <img src="<?php echo $fotoAgent; ?>" alt="<?php echo $namaAgent; ?>">
                    <!--
                    <img src="http://placekitten.com/g/256/256" alt="Gambar" />
                    -->
                </div><!--/ .section-left-40 -->
                <div class="section-right-60">
                    <h2><?php echo $namaAgent; ?></h2>
                    <p><?php echo $profilAgent."<br />"; ?></p>
                    <a href="mailto:<?php echo $emailAgent; ?>?Subject=Hello%20again" target="_top" class="btn btn-sendmail">Call Agent</a>
                </div><!--/ .section-right-60 -->
            </div><!--/ .description-width-66 -->
        </div><!--/ .full-w -->

        <div style="clear: both"></div>

        <!--Button to Calc Live Insurance-->
        <div class="items-container">
            <div class="item">
                <div class="heading">
                    <!--<h2 class="title_news">CALCULATOR LIVE INSURANCE</h2>-->
                    <h2 class="title_news">Artikel</h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <!--<center><a href="#"><img src="/website/static/images/agent_locator/Calc-Live-Insurance.jpg" width="150" height="130" /></a></center>-->
                <center><a href="#"><img src="/website/static/images/agent_locator/Agent_Profile_Picture_article.png" /></a></center>
                <div class="description">
                    <a href="#">&gt; Selengkapnya</a>
                </div>
            </div>

             <div class="item">
                <div class="heading">
                    <!--<h2 class="title_news">NEWS</h2>-->
                    <h2 class="title_news">Produk Asuransi Jiwa</h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <!--<p>
                     <?php
                        //if(strlen($Artikel) < 115) echo $Artikel;
                        //else echo substr($Artikel,0,115);
                        //
                        //echo ". . .<br/>";
                    ?>
                </p>-->
                <center><a href="#"><img src="/website/static/images/agent_locator/asuransi-jiwa-allianz-flexi-account-plus.jpg" /></a></center>
                <div class="description">
                    <a href="#">&gt; Selengkapnya</a>
                </div>
            </div>

            <div class="item">
                <div class="heading">
                    <!--<h2 class="title_news">FACEBOOK</h2>-->
                    <h2 class="title_news">Agent Facebook Fan Page</h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <center><a href="#"><img src="/website/static/images/agent_locator/Agent_Profile_Picture_SocialMedia.png" /></a></center>
                <div class="description">
                    <a href="#">&gt; Selengkapnya</a>
                </div>


                <!--<div class="fb-page" data-href="<?php echo $Facebook; ?>" data-width="304" data-height="130" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/FacebookIndonesia?brand_redir=20531316728"><a href="https://www.facebook.com/FacebookIndonesia?brand_redir=20531316728">Facebook</a></blockquote></div></div>-->
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
