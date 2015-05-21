<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/websit  e/static/css-ajfc/hotspot/ajfc.hotspot.css">

<!--<link rel="stylesheet" href="/website/ajfc/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/website/ajfc/css/bootstrap-custom-wcm/bootstrap.css">
<link rel="stylesheet" href="/website/ajfc/css/font-awesome.min.css">
<link rel="stylesheet" href="/website/ajfc/css/style.css">
<link rel="stylesheet" href="/website/ajfc/css/main.css">

<script src="/website/ajfc/js/zabuto_calendar.min.js"></script>
<script src="/website/ajfc/js/javascripts.js"></script>

<style>
    .page-wrapper-outer .sidebar
    {
        background: white;
        border-left: solid 1px #ddd;
    }

    .sidebar .sidebar-item .sidebar-item--header h1, .sidebar .sidebar-item .sidebar-item--header h2, .sidebar .sidebar-item .sidebar-item--header h3, .sidebar .sidebar-item .sidebar-item--header h4, .sidebar .sidebar-item .sidebar-item--header h5, .sidebar .sidebar-item .sidebar-item--header h6, .sidebar .sidebar-item .sidebar-item--header p
    {
        color: black;
    }

    .sidebar .sidebar-item .sidebar-item--content ul > li > a
    {
        color: black;
    }

    .sidebar .sidebar-item .sidebar-item--content ul > li > a > small
    {
        color: #999;
    }
    .sidebar-font-green-h1{
	color: #009a44 !important;
	font-weight: bold;	
    }
    
    

</style>
<?php
     foreach($this->newsTasbih as $items){
		/*echo "<pre>";
		print_r($items);
		echo "</pre>";*/
?>
	<header style="margin-top: -20px;">
	    <div class="background">
		
		<img src="<?php echo $items->images->path.$items->images->filename; ?>" alt="" class="img-responsive">
	    </div><!--/ .background -->
	    <nav class="main-navigation floating">
        <div class="container" style="max-width: 960px">
           <div class="row">
                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/tasbih" class="nav-item blueA">
                        <h4><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/kalkulator/tasbih" class="nav-item green">
                        <h4><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/tanya-jawab" class="nav-item orange">
                        <h4><small>Tanya Jawab</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.imkepo.com" target="_blank" class="nav-item">
                        <h4><small>Cari Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/inquiry-form" class="nav-item red">
                        <h4><small>Inquiry Form</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </nav>
	</header>
	
	<div class="page-wrapper-outer">
		
		<section class="page-wrapper mt32 mb72" style="margin-top:0 !important ">
		    <div class="container"  style="max-width: 960px">
			<div class="row">
			    <div class="col-xs-12 col-md-8 pr0">
		
				<div class="main-content">
		
				    <div class="main-content--header">
					<h1 class="mb12"><?php echo $items->title; ?></h1>
					<h5>
						<span><a href="/">Home </a></span>
						<?php
							$id = $this->document->getId();
							$parent_id = $this->document->getParentId();
							$path = $this->document->getPath();
							$key = $this->document->getKey();
							// get root node if there is no document defined (for pages which are routed directly through static route)
							if(!$this->document instanceof Document_Page) {
								$this->document = Document::getById(1350);
							}
						 
							// get the document which should be used to start in navigation | default home
							$navStartNode = $this->document->getProperty("navigationRoot");
							if(!$navStartNode instanceof Document_Page) {
								$navStartNode = Document::getById(1350);
							}
						 
							//this is used as id prefix for the html menu element
							$htmlIdPrefix = "";
						
							$navigation = $this->pimcoreNavigation()->getNavigation($this->document, $navStartNode, $htmlIdPrefix);
							$this->navigation()->menu()->setUseTranslator(false); // to deactivate the translator provided by the view helper
							$this->navigation($navigation);
							$this->navigation()->breadcrumbs()->setMinDepth(0);
							
						?>
						<?php echo $this->navigation()->breadcrumbs()->setPartial(array('includes/tasbih/breadcrumb-partial.php', 'website'));?>
					</h5>
					<p class="meta">Posted on <?php echo $items->newsdate; ?></p>
				    </div><!--/ .main-content--header -->
				
				    <?php echo $items->content; ?>
				    
				</div><!--/ .main-content -->
		
			    </div><!--/ .col-xs-12 -->
			    <div class="col-xs-12 col-md-4 pl0">
		
				<div class="sidebar">
				    <div class="sidebar-item">
					<div class="sidebar-item--header mb16">
					    <h3 class="sidebar-font-green-h1">Baca Juga</h3>
					</div><!--/ .sidebar-item--header -->
					<div class="sidebar-item--content">
					    <ul class="sidebar-nav">
						<?php foreach($this->sidelist as $lists){?>
								<li><a href="/tasbih/tasbih-news/<?php  echo $lists->o_id; ?>"><?php  echo $lists->title; ?></a></li>
						<?php } ?>
					    </ul>
					</div><!--/ .sidebar-item--content -->
				    </div><!--/ .sidebar-item -->
				    
				</div><!--/ .sidebar -->
		
			    </div><!--/ .col-xs-12 -->
			</div><!--/ .row -->
		    </div><!--/ .container -->
		</section>
		
	</div><!--/ .page-wrapper-outer -->
<?php } ?>