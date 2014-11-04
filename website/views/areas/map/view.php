<div class="wrapper clearfix">
	<div id="agent-locator">
		<h2><?php echo $this->input("lokasi_pemasaran", array("width" => 255));?></h2>
		<div id="maparea">

		</div>
	</div>
	<?php echo $this->area("mapArea", array("type" => "map-point")); ?>
</div>