<div class="container boxes-view">
	<h5><a href="/"><span>Home</span></a> &rsaquo; <?php echo $this->navigation()->breadcrumbs()->setMinDepth(null); ?></h5>
	<span class="breadcrumb"><a href="#"><?php echo $this->document->getTitle()?></a></span>
	
	<div class="heading clearfix pagenav">
		<?php echo $this->areablock('anchorarea', array('allowed' => array('anchor'))); ?>
		<div id="quicklinks">
			<?php echo $this->areablock('quicklinks', array('allowed' => array('tile-quicklinks', 'layanankami-quicklinks')))?>
		</div>
	</div>
	
</div>