<div class="tab-wrapper">
	<div id="tab-quicklinks" class="tab-content">
		<?php echo $this->wysiwyg("content-quicklinks1") ?>
	</div>
	<div id="tab-contact" class="tab-content">
		<?php echo $this->wysiwyg("content-quicklinks2") ?>
	</div>
	<div id="tab-socialmedia" class="tab-content">
		<?php echo $this->wysiwyg("content-quicklinks3") ?>
	</div>
	<div id="tab-download" class="tab-content">
		<?php echo $this->wysiwyg("content-quicklinks4") ?>
	</div>
	

	<!--<div class="tab-button">
		<ul>
			<li><a href="#tab-quicklinks">Quick Links</a></li>
			<li><a href="#tab-contact">Contact</a></li>
			<li><a href="#tab-socialmedia">Social Media</a></li>
			<li><a href="#tab-download">Download</a></li>
		</ul>
	</div>-->

	<div class="tab_button">
		<ul>
			<li><a class="tab-layanan-anda" href="#tab-quicklinks"><?php echo $this->input("quicklinks1")?></a></li>
			<li><a class="tab-kontak" href="#tab-contact"><?php echo $this->input("quicklinks2")?></a></li>
			<li><a class="tab-sosmed" href="#tab-socialmedia"><?php echo $this->input("quicklinks3")?></a></li>
			<li class="last"><a class="tab-download" href="#tab-download"><?php echo $this->input("quicklinks4")?></a></li>
		</ul>
	</div>

</div>