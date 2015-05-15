<header>
    
    <div class="background" style="pointer-events:visible;">
        <!--<img src="/website/ajfc/img/bg-home.jpg" alt="Home" class="img-responsive" />-->
        <?php echo $this->image("Banner-Tasbih"); ?>
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
                            <h3><?php echo $this->input('title_page_tanyajawab')?></h3>
                        </div><!--/ .sidebar-item--header -->
                        <div class="sidebar-item--content">
			    <?php echo $this->wysiwyg('sidebar')?>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->
                    
                </div><!--/ .sidebar -->
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->