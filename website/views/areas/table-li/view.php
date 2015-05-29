<header>
    
    <div class="background">
        <?php $asets=Asset::getByPath('/ajfc/background/bgkebijakan.jpg');?>
        <img src="<?php echo $asets; ?>" alt="background kebijakan" class="img-responsive" />
    </div><!--/ .background -->
    
</header>

<div class="page-wrapper-outer">

<section class="page-wrapper mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 pr0">
                
                <div class="main-content">
                    
                    <div class="main-content--header">
                        <h1 class="mb12"><?php echo $this->input("titleAjfc");?></h1>
						<?php echo $this->wysiwyg("descAjfc");?>
                        <!--<p>Pernyataan seputar program Allianz Junior Football Camp 2015.</p>-->
                    </div><!--/ .main-content--header -->
                    
                    <div class="main-content--inner mt16">
                    
                        <ol>
			    <?php while ($this->block("rowTable")->loop()) { ?>
				<li>
				    <?php echo $this->wysiwyg('description')?>
				</li>
			    <?php } ?>
                        </ol>
                        
                        <?php echo $this->wysiwyg('description-li')?>
                        
                    </div><!--/ .main-content--inner -->
                    
                </div><!--/ .main-content -->
                
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-4 pl0">
                
                <div class="sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item--header mb16">
                            <h3>AJFC 2015</h3>
                        </div><!--/ .sidebar-item--header -->
                        <div class="sidebar-item--content">
                            <ul class="sidebar-nav">
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/galeri-ajfc">Galeri</a></li>
                                <li><a href="/proses-seleksi">Proses Seleksi</a></li>
								<li><a href="/tanya-jawab">Tanya Jawab</a></li>
								<!--<li class="active"><a href="/kebijakan-privasi">Kebijakan Privasi</a></li>-->
                                <li><a href="/pendaftaran">Pendaftaran</a></li>
								<li><a href="/daftar-peserta">Daftar Peserta</a></li>
								<li><a href="/pengumuman">Pengumuman</a></li>
                                
                                
                            </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->
                    
                </div><!--/ .sidebar -->
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->
