<header>
    
    <div class="background">
        <?php $asets=Asset::getByPath('/ajfc/background/bgtanya-jawab.jpg');?>
        <img src="<?php echo $asets; ?>" alt="background tanya jawab" class="img-responsive" />
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
                        <?php
			$l=0;
			while ($this->block("rowTable")->loop()) {
			$l++;
			    ?>
                        <div class="faq-item">
                            
			    <div class="faq-item--question" style="padding-right: 20px;">
                                <ol start="<?php echo $l; ?>">
				    <li><h4><?php echo $this->input('title_faq')?></h4></li>
				</0l>
                            </div><!--/ .faq-item--question -->
                            <div class="faq-item--answer">
                                <?php echo $this->wysiwyg('description')?>
                            </div><!--/ .faq-item--answer -->
                        </div><!--/ .faq-item -->
			<?php
			
			} ?>
                        
                    </div><!--/ .faq-wrapper -->
                    
		    <?php echo $this->wysiwyg('description-bottom')?>
                    <!--<p>Tidak menemukan jawaban untuk pertanyaan kamu? Silahkan hubungi kami melalui <a href="https://www.facebook.com/AJFCIndonesia">facebook</a>!</p>-->
                    
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
                		<li class="active"><a href="/tanya-jawab">Tanya Jawab</a></li>
                		<li><a href="/kebijakan-privasi">Kebijakan Privasi</a></li>
                                <li><a href="/pendaftaran">Pendaftaran</a></li>
				<li><a href="/daftar-peserta">Daftar Peserta</a></li>                                
                            </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->
                    
                </div><!--/ .sidebar -->
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->