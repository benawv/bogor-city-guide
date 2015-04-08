<header>
    
    <div class="background">
        <img src="/website/ajfc/img/bg-faq.jpg" alt="Home" class="img-responsive" />
    </div><!--/ .background -->
    
</header>

<div class="page-wrapper-outer">
	
<section class="page-wrapper mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 pr0">
                
                <div class="main-content">
                    
                    <div class="main-content--header">
                        <h1 class="mb12"><?php echo $this->input('title_page_faq')?></h1>
                    </div><!--/ .main-content--header -->
                    
                    <div class="faq-wrapper mt16 pt16">
                        <?php while ($this->block("rowTable")->loop()) { ?>
                        <div class="faq-item">
                            <div class="faq-item--question">
                                <h4><?php echo $this->input('title_faq')?></h4>
                            </div><!--/ .faq-item--question -->
                            <div class="faq-item--answer">
                                <?php echo $this->wysiwyg('description')?>
                            </div><!--/ .faq-item--answer -->
                        </div><!--/ .faq-item -->
			<?php } ?>
                        
                    </div><!--/ .faq-wrapper -->
                    
                    <p>Tidak menemukan jawaban untuk pertanyaan kamu? Silahkan hubungi kami melalui <a href="https://www.facebook.com/pages/Allianz-Indonesia/137119663084291">facebook</a>!</p>
                    
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
                                <li><a href="?p=home">Beranda</a></li>
                                <li><a href="#">Galeri</a></li>
                                <li><a href="?p=proses-seleksi">Proses Seleksi</a></li>
                                <li><a href="#">Pengumuman</a></li>
                                <li class="active"><a href="?p=faq">FAQ</a></li>
                                <li><a href="?p=privacy-policy">Kebijakan Privasi</a></li>
                            </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->
                    
                </div><!--/ .sidebar -->
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->