<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white detail-border" style="padding: 15px">
	<h3 class="judul-kotak">
		<?php echo $this->input('title')?>
	</h3>
	<div class="isi-kotak">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<div class="kotak_kiri">
			<div class="description">
				<h3><?php echo $this->input('judul-kiri')?></h3>
				<p><?php echo $this->wysiwyg('teks-kiri')?></p>
			</div>
		</div>
		<div class="kotak_tengah">
			<div class="description">
				<h3><?php echo $this->input('judul-tengah')?></h3>
				<p><?php echo $this->wysiwyg('teks-tengah')?></p>
			</div>
		</div>
		<div class="kotak_kanan">
			<div class="description">
				<h3><?php echo $this->input('judul-kanan')?></h3>
				<p><?php echo $this->wysiwyg('teks-kanan')?></p>
			</div>
		</div>
	</div>
</div>