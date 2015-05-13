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
	</header>
		
		
	<div class="page-wrapper-outer">
		
		<section class="page-wrapper mt32 mb72">
		    <div class="container">
			<div class="row">
			    <div class="col-xs-12 col-md-8 pr0">
		
				<div class="main-content">
		
				    <div class="main-content--header">
					<h1 class="mb12"><?php echo $items->title; ?></h1>
					<p class="meta">Posted on <?php echo $items->newsdate; ?></p>
				    </div><!--/ .main-content--header -->
				
				    <?php echo $items->content; ?>
				    
				</div><!--/ .main-content -->
		
			    </div><!--/ .col-xs-12 -->
			    <div class="col-xs-12 col-md-4 pl0">
		
				<div class="sidebar">
				    <div class="sidebar-item">
					<div class="sidebar-item--header mb16">
					    <h3>Baca Juga</h3>
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