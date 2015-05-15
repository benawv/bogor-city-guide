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
						$fotoProf = $row->getFotoKantor()->path.$row->getFotoKantor()->filename;
						$namaLokasi = ucwords(strtolower($row->getNamaLokasi()));
						$alamat = ucwords(strtolower($row->getAlamat1()." ".$row->getAlamat2()." ".$row->getAlamat3()));
						$telp = $row->getKodeAreaTelepon()." ".$row->getNomorTelepon();
						$fax = $row->getKodeAreaFax()." ".$row->getNomorFax();
						$x = count($row->getFotoGaleriKantor()->items);
						$email = $row->getEmailKantor();
						for($z;$z<$x;$z++){
                ?>
                            <li>
                                <div class="slide">
                                    <div class="photo">
                                        <img src="<?php echo $row->getFotoGaleriKantor()->items[$z]->fotoFotoKantor->path.$row->getFotoGaleriKantor()->items[$z]->fotoFotoKantor->filename;?>" />
                                    </div><!--/ .photo -->
                                    <div class="fixbox <?php echo $row->getFotoGaleriKantor()->items[$z]->posisiNotepad;?>60">
                                        <div class="place-bg bg-<?php echo $row->getFotoGaleriKantor()->items[$z]->warnaNotepad;?> place-bg-gallery">
                                            <div>
                                                <h2><?php echo $row->getFotoGaleriKantor()->items[$z]->judulNotepad;?></h2>
                                                <p><?php echo $row->getFotoGaleriKantor()->items[$z]->deskripsiNotepad;?></p>
                                            </div>
                                        </div><!--/ .place-bg -->
                                        <div class="edge e-<?php echo $row->getFotoGaleriKantor()->items[$z]->warnaNotepad;?>"></div>
                                    </div><!--/ .fixbox -->
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
		<div class="full-w bg-white">
            <h2>
                <span class="judul_section">Profil Kantor</span>
            </h2>
            <div class="description width-66">
                <div class="section-left-40">
                    <img src="<?php echo $fotoProf;?>" width="226" />
                </div><!--/ .section-left-40 -->
                <div class="section-right-60">
                    <p>
                        <?php
                            echo $namaLokasi."<br />";
                            echo $alamat."<br />";
                            echo "Telp. ".$telp."<br />";
                            echo "Fax. ".$fax;
                        ?>
                    </p>
                    <a href="mailto:<?php echo $email;?>?Subject=Call%20Kantor" target="_top" class="btn btn-sendmail">Send Mail</a>
                </div><!--/ .section-right-60 -->
            </div><!--/ .description-width-66 -->
        </div><!--/ .full-w -->

        <div style="clear: both"></div>

        <div class="items-container">
        <?php foreach( $agent as $ag ){ ?>
            <div class="item">
                <div class="heading">
                    <h2 class="title_news"><?php echo ucwords(strtolower($ag->getNamaAgent()));?></h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div><!--/ .heading -->
                <img src="<?php echo $ag->getFotoAgent();?>" width="304" />
                <div class="description">
                    <a href="/detail-agent/<?php echo $ag->getO_key()."-".$ag->getO_id();?>">&gt; Selengkapnya</a>
                </div>
            </div>
        <?php }?>
		</div>
	</div>
</div>
