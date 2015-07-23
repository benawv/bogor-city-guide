<?php
    $kantor = $this->kantor;
    $agent  = $this->agent;
?>

<style>
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
    .btn.btn-sendmail.hide{
        display: none;
    }
    .marginKantor{
        margin-left:34px;
    }
    @media (max-width: 768px) {
        .btn.btn-sendmail{
            display: block;
            text-align: left;
        }
        .btn.btn-sendmail.hide{
            display: block;
        }
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

<div class="container boxes-view">

    <?php //echo $this->template("includes/breadcrumb.php")?>
    <!--<span class="breadcrumb"><h1 class="title"><?php /*echo $this->document->getProperty('navigation_title');*/?></h1></span>-->

    <div class="wrapper-special clearfix">
        <div id="slideshow" class="clearfix">
            <ul class="slides">
                <?php
                    $z = 0;
                    foreach($kantor as $row){
                        $o_Id = $row->getO_id();
                        $fotoProf = $row->getFotoKantor()->path.$row->getFotoKantor()->filename;
                        $namaLokasi = ucwords(strtolower($row->getNamaLokasi()));
                        $alamat = ucwords(strtolower($row->getAlamat1()."<br /> ".$row->getAlamat2()."<br /> ".$row->getAlamat3()));
                        $telp = "(".$row->getKodeAreaTelepon().") ".$row->getNomorTelepon();
                        $telpKantor = str_replace(" ","",$row->getNomorTelepon());
                        $expTelp = explode("-",$telpKantor);
                        //echo "<pre>";
                        //foreach($expTelp as $key => $val)
                        //{
                        //    echo $val."<br />";
                        //}
                        //die();
                        $fax = "(".$row->getKodeAreaFax().") ".$row->getNomorFax();
                        $x = count($row->getFotoGaleriKantor()->items);
                        if($x>0)
                        {
                            $x = 1;
                        }
                        $email = strtolower($row->getEmailKantor());
                        for($z;$z<$x;$z++){
                ?>
                            <li>
                                <div class="slide">
                                    <div class="photo">
                                        <img src="<?php echo $row->getFotoGaleriKantor()->items[$z]->fotoFotoKantor->path.$row->getFotoGaleriKantor()->items[$z]->fotoFotoKantor->filename;?>" />
                                    </div><!--/ .photo -->
                                    <?php if($row->getFotoGaleriKantor()->items[$z]->posisiNotepad != ""){?>
                                    <div class="fixbox <?php echo $row->getFotoGaleriKantor()->items[$z]->posisiNotepad;?>60">
                                        <div class="place-bg bg-<?php echo $row->getFotoGaleriKantor()->items[$z]->warnaNotepad;?> place-bg-gallery">
                                            <div>
                                                <h2><?php echo $row->getFotoGaleriKantor()->items[$z]->judulNotepad;?></h2>
                                                <p><?php echo $row->getFotoGaleriKantor()->items[$z]->deskripsiNotepad;?></p>
                                            </div>
                                        </div><!--/ .place-bg -->
                                        <div class="edge e-<?php echo $row->getFotoGaleriKantor()->items[$z]->warnaNotepad;?>"></div>
                                    </div><!--/ .fixbox -->
                                    <?php }else{?>
                                    <style>
                                        @media (max-width: 600px) {
                                            #slideshow .flex-direction-nav .flex-next,#slideshow .flex-direction-nav .flex-prev{
                                                top:20px !important;
                                            }
                                          }
                                    </style>
                                    <?php }?>
                                </div><!--/ .slide -->
                            </li>
                <?php
                        }
                    }
                ?>
            </ul>
            </div>
    </div><!-- .wrapper-special -->

    <div>
        <h5>
			<span><a href="/">Home </a></span>
            &rsaquo; <span class='currentPage'>Detail Kantor</span>
		</h5>
        <div class="full-w bg-white custom-section">
            <h2>
                <span class="judul_section">Profil Kantor</span>
            </h2>
            <div class="description width-66">
                <div class="section-left-40">
                    <img src="<?php echo $fotoProf;?>" alt="<?php echo $namaLokasi; ?>"/>
                    <!--
                    <img src="http://placekitten.com/g/256/256" alt="Gambar" />
                    -->
                </div><!--/ .section-left-40 -->
                <div class="section-right-60">
                    <h2><?php echo $namaLokasi; ?></h2>
                    <p>
                        <?php
                            echo $alamat."<br />";
                            echo "Telp. ";
                            $x = 1;
                            foreach($expTelp as $key => $val){
                                if($x > 1){
                                    echo "<span class='marginKantor'>(".$row->getKodeAreaTelepon().") ".$val."</span><br />";
                                }
                                else{
                                    $callKantor = "(".$row->getKodeAreaTelepon().") ".$val;
                                    echo "(".$row->getKodeAreaTelepon().") ".$val."<br />";
                                }
                                $x++;
                            }
                            echo "Fax. ".$fax;
                        ?>
                    </p>
                    <a href="mailto:<?php echo $email;?>?Subject=Call%20Kantor" target="_top" class="btn btn-sendmail">Kirim eMail</a><br />
                    <a href="tel:<?php echo $callKantor;?>" target="_top" class="btn btn-sendmail hide">Hubungi Kantor</a>
                </div><!--/ .section-right-60 -->
            </div><!--/ .description-width-66 -->
        </div><!--/ .full-w -->

        <div style="clear: both"></div>

        <div class="items-container">
        <?php foreach( $agent as $ag ){ ?>
            <div class="item">
                <div class="heading">
                    <h2 class="title_news"><a href="<?php echo $this->url(array($o_Id ,$ag->getO_id()),"detail-agent");?>"><?php echo ucwords(strtolower($ag->getNamaAgent()));?></a></h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div><!--/ .heading -->
                <img src="<?php echo $ag->getFotoAgent();?>" width="304" />
                <div class="description">
                    <a href="<?php echo $this->url(array($o_Id ,$ag->getO_id()),"detail-agent");?>">&gt; Selengkapnya</a>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
</div>
