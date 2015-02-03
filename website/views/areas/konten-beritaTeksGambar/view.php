<div>
	<div class="text_section">
		<?php echo $this->wysiwyg('konten-beritaTeksGambar')?>
	</div>
	<div class="isi_kanan_berita">
		<?php 
			echo $this->image("image-berita-kanan", array(
					"title" => "Image Size 300x275",
					'width' 	=> 300,
					'height'    => 275
			));
		?>
	</div>
</div>