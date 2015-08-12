<?php 
	$style = 'overflow: scroll;';
?>
<style>
	.cusLi
	{
		list-style: none;
		padding:0px;
		margin:0px;
		font-weight: bold;
	}
    #quicklinks .tab-button ul li.active a {
        display:block !important;
    }
</style>
<script>
	<?php if(!$this->editmode){?>
		function changeHeader(object)
		{
			$(".judul-quicklink").html("");
			$(".judul-quicklink").html(object.text);
		}
	<?php }?>
</script>
<?php if($this->editmode){ ?>
<div class="tab-wrapper" style="<?php echo $this->editmode?$style:''?>">
	<div id="tab-quicklinks" class="tab-content">
		<h3 class="judul-quicklink"><?php echo $this->input("judul-quicklink-static", array("width" => 200));?></h3>
        <ul class="nav">
			<?php while ($this->block("linkblock-layanankami")->loop()) { ?>
						    <li><?php echo $this->link("myLink-layanankami"); ?></li>
			<?php } ?>

		</ul>
	</div>
	<div id="tab-contact" class="tab-content">
		<h3 class="judul-quicklink"></h3>
        <?php echo $this->wysiwyg('kontak')?>
	</div>
	<div id="tab-socialmedia" class="tab-content">
		<h3 class="judul-quicklink"></h3>
        <p>
		<ul class="nav">
			<?php while ($this->block("linkblock-socialmedia")->loop()) { ?>
						    <li><?php echo $this->link("myLink-socialmedia"); ?></li>
			<?php } ?>
		</ul>
		</p>
	</div>
	<div id="tab-download" class="tab-content">
		<h3 class="judul-quicklink"></h3>
        <p>
			<ul class="nav">
			<?php while ($this->block("linkblock-download")->loop()) { ?>
						    <li><?php echo $this->link("myLink-download"); ?></li>
			<?php } ?>

			</ul>
		</p>

	</div>
<?php }?>
	<?php if(!$this->editmode) { ?>
		<div class="tab_button">
			<ul>
				<li><a class="tab-layanan-anda" href="#tab-quicklinks" onclick="changeHeader(this)"><?php echo $this->input("tab1-quicklink-static");?></a></li>
				<li><a class="tab-kontak" href="#tab-contact" onclick="changeHeader(this)"><?php echo $this->input("tab2-quicklink-static");?></a></li>
				<li><a class="tab-sosmed" href="#tab-socialmedia" onclick="changeHeader(this)"><?php echo $this->input("tab3-quicklink-static");?></a></li>
				<li class="last"><a class="tab-download" href="#tab-download" onclick="changeHeader(this)"><?php echo $this->input("tab4-quicklink-static");?></a></li>
			</ul>
		</div>
	<?php } ?>
		
</div>
<?php if($this->editmode){ ?>
<!--Tab gantung -->
		<div class="tab-wrapper-hold">
			<div class="tab-button">
				<ul>
					<li><a href="#tab-quicklinks" class="accordion-tab" onclick="changeHeader(this)"><?php echo $this->input("tab1-quicklink-static", array("width" => 80));?></a></li>
					<li><a href="#tab-contact" class="accordion-tab" onclick="changeHeader(this)"><?php echo $this->input("tab2-quicklink-static", array("width" => 80));?></a></li>
					<li><a href="#tab-socialmedia" class="accordion-tab" onclick="changeHeader(this)"><?php echo $this->input("tab3-quicklink-static", array("width" => 80));?></a></li>
					<li><a href="#tab-download" class="accordion-tab" onclick="changeHeader(this)"><?php echo $this->input("tab4-quicklink-static", array("width" => 80));?></a></li>
					
				</ul>
			</div>
		</div>
<!--Tab gantung -->
<?php } ?>