<header>
    
    <div class="background">
        <?php $asets=Asset::getByPath('/ajfc/background/bgpendaftaran.jpg');?>
        <img src="<?php echo $asets; ?>" alt="background pendaftaran" class="img-responsive" />
    </div><!--/ .background -->
	<style>
		@media only screen and (max-width:1023px){
			.main-content--header p iframe{
				height: 2700px;
			}
		}
	</style>
    
</header>

<div class="page-wrapper-outer">
	
<section class="page-wrapper mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 pr0">
                
                <div class="main-content">
                    
                    <div class="main-content--header">
                        <h1 class="mb12"><?php echo $this->input('title_page_pendaftaran')?></h1>
                    </div><!--/ .main-content--header -->
                    <?php echo $this->wysiwyg('description-pendaftaran');?>
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->