<div id="<?php echo $this->input('anchor-related-product-3-section')->text?>" class="full-w bg-white detail-border" style="padding: 15px">
	<h3 class="judul-kotak">
		<?php echo $this->input('title-related-product-3-section')?>
	</h3>
	<div class="isi-kotak">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor-related-product-3-section', array("width" => 250))?>
		<?php endif;?>
		<div class="kotak_kiri">
			<div class="description">
				<h3><?php echo $this->input('judul-kiri-related-product-3-section')?></h3>
				<p><?php echo $this->wysiwyg('teks-kiri-related-product-3-section')?></p>
			</div>
		</div>
		<div class="kotak_tengah">
			<div class="description">
				<h3><?php echo $this->input('judul-tengah-related-product-3-section')?></h3>
				<p><?php echo $this->wysiwyg('teks-tengah-related-product-3-section')?></p>
			</div>
		</div>
		<div class="kotak_kanan">
			<div class="description">
				<h3><?php echo $this->input('judul-kanan-related-product-3-section')?></h3>
				<p><?php echo $this->wysiwyg('teks-kanan-related-product-3-section')?></p>
			</div>
		</div>
	</div>
</div>