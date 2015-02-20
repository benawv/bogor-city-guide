<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white">
	<h2>
		<?php if($this->editmode): ?>
			Icon: <?php echo $this->image('icon', array(
								'title' 	=> 'Image Size 31x31',
								'width' 	=> 100,
								'height' 	=> 100,
								'thumbnail'	=> 'icon')) ?>
			<?php echo $this->input('title', ["width" => 250])?>
		<?php else: ?>
			<?php if($this->image('icon')->getSrc()):?>
				<div style="background-image: url('<?php echo $this->image('icon')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div>
			<?php endif;?>
			<?php echo $this->input('title')?>
		<?php endif; ?>
	</h2>
	<div class="description">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<div class="section-left-40">
			<?php echo $this->image('image-kiri', array(
									'title' 	=> 'Image Size 295x200',
									'width' 	=> 295,
									'height' 	=> 200
									/*'thumbnail' => 'product'*/))?>
		</div>
		<div class="section-right-60">
			<div class="table_cv">
				<div class="row">
					<div class="left cell_left"><?php echo $this->input('text-row-1', array("width" => "auto"))?></div>
					<div class="left cell_right">
						<?php echo $this->wysiwyg("data-row-1");?>
					</div>
					<br clear="all"/>
				</div>
				<div class="hideme">
					<div class="row">
						<div class="left cell_left"><?php echo $this->input('text-row-2',array("width" => "auto"))?></div>
						<div class="left cell_right">
							<?php echo $this->wysiwyg("data-row-2");?>
						</div>
						<br clear="all"/>
					</div>
					<div class="row">
						<div class="left cell_left"><?php echo $this->input('text-row-3', array("width" => "auto"))?></div>
						<div class="left cell_right">
							<?php echo $this->wysiwyg("data-row-3");?>
						</div>
						<br clear="all"/>
					</div>
					<?php if($this->editmode) { ?>
					<div class="row">
						<div class="left cell_left"><?php echo $this->input('text-row-4', array("width" => "auto"))?></div>
						<div class="left cell_right">
							<?php echo $this->wysiwyg("data-row-4");?>
						</div>
						<br clear="all"/>
					</div>
					<?php } else { ?>
						<?php if($this->input('text-row-4')->text) { ?>
							<div class="row">
								<div class="left cell_left"><?php echo $this->input('text-row-4', array("width" => "auto"))?></div>
								<div class="left cell_right">
									<?php echo $this->wysiwyg("data-row-4");?>
								</div>
								<br clear="all"/>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
				<button class="v"><span class="xicon down"></span></button>
			</div>
		</div>
	</div>
</div>