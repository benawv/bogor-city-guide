<div>
	<div class="text_section">
		<?php 
			echo $this->image("image-berita-kiri", array(
					"title" => "Drag your image here",
					'width' 	=> 599,
					'height'    => 375
			));
		?>
	</div>
	<div class="isi_kanan_berita">
		<?php echo $this->wysiwyg('summary')?>
	</div>
</div>