<div id="" class="full-w bg-white">
	<h2>
		<?php if($this->editmode): ?>
			Icon: <?php echo $this->image('icon', array(
								'title' 	=> 'Drag your icon here',
								'width' 	=> 100,
								'height' 	=> 100,
								'thumbnail'	=> 'icon')) ?>
			<?php echo $this->input('title', ["width" => 250])?>
		<?php else: ?>
			<?php if($this->image('icon')->getSrc()):?>
				<div style="background-image: url('<?php echo $this->image('icon')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div>
			<?php endif;?>
			Smartlink
		<?php endif; ?>
	</h2>
	<div class="combo_section">
		<p>
			Pilih Tahun<br />
			<?php 
				$smartlinks = Object_FundFact::getById(307);
				$tahun = $smartlinks->getClass()->getFieldDefinition('tahun')->getOptions();
				echo '<select class="combo-width year-pick">';
				foreach($tahun as $y)
				{
					echo '<option value="'.$y['value'].'">'.$y['key'].'</option>';
				}
				echo '</select>';
			?>
		</p>
		<p>
			Pilih Bulan<br />
			<select class="combo-width year-pick">
				<?php 
					$bulan = $smartlinks->getClass()->getFieldDefinition('bulan')->getOptions();
					foreach($bulan as $v)
					{
						echo '<option value="'.$v['value'].'">'.$v['key'].'</option>';
					}
				?>
			</select>
		</p>
		<p>
			Pilihan Jenis Fact Sheet<br />
			<select class="combo-width type-pick">
				<?php 
					$jenis = Object_FundFactJenisSheet::getList();
					foreach($jenis as $v)
					{
						echo '<option value="'.$v->getNama().'">'.$v->getNama().'</option>';
					}
				?>
			</select>
		</p>
	</div>
</div>