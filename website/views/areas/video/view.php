<style type="text/css">
	/* VIDEO PIMCORE */
	.pimcore_tag_video
	{
	   float: none;
	   clear: both;
	   width: 100%;
	   position: relative;
	   padding-bottom: 56.25%;
	   padding-top: 25px;
	   height: 0;
	   margin-bottom: 12px;
	}
	.pimcore_tag_video > iframe 
	{
	    position: absolute;
	    top: 0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	}
</style>
<?php
	if($this->editmode) {
?>
<style type="text/css">
	.pimcore_iframe_mask{
		z-index: -1 !important;
	}
</style>
<?php
	}
?>
<div class="text_section">
	<?php 
				echo $this->video("video", array(
			    "width" => 499,
			    "height" => 262,
			    "attributes" => ["frameborder" => "0"]
				)); 
	?>
</div>