<div>
	<div class="text_section cus_img">
		<?php 
			echo $this->image("image-berita-kiri", array(
					"title" => "Drag your image here",
					'width' 	=> 599,
					'height'    => 375
			));
		?>
	</div>
	<div class="isi_kanan_berita">
		<?php echo $this->wysiwyg('konten-beritaGambarTeks')?>
	</div>
</div>