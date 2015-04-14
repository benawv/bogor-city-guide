<header>
    
    <div class="background">
        <img src="/website/ajfc/img/bg-faq.jpg" alt="Home" class="img-responsive" />
    </div><!--/ .background -->
    
</header>

<div class="page-wrapper-outer">
	
<section class="page-wrapper mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 pr0">
                
                <div class="main-content">
                    
                    <div class="main-content--header">
                        <h1 class="mb12"><?php echo $this->input('title_page_sudah_submit')?></h1>
                    </div><!--/ .main-content--header -->
                    <?php echo $this->wysiwyg('description-sudah_submit');?>
                
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->
<?php if(!$this->editmode){?>
    <script type="text/javascript">
	$(document).ready(function(){
	    setTimeout(toHome, 13000);
	    function toHome() {
		window.location.href = "http://ajfc.allianz.co.id";
	    }
	});
    </script>
<?php }?>