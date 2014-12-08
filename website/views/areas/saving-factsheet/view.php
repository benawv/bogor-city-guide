<script type="text/javascript">
	$(function(){
		$('.year-pick, .month-pick, .type-pick').change(function(){
			var idFilterSection = $(this).closest('.full-w ').attr('id');
			
			var year = $('#'+idFilterSection + " .year-pick").val();
			year = year.substr(2);
			
			var month = $('#'+idFilterSection + " .month-pick").val();
			
			var typeData = $('#'+idFilterSection + " .type-pick").val();
			var x = 0;
			$('#'+idFilterSection + " .description li").each(function(){
				var itemAttr = $(this).find('a').attr('item');
				splitedItem = itemAttr.split('/');
				var visible = true;
				visible = visible && (month == '' || month == splitedItem[0]);
				visible = visible && (year == '' || year == splitedItem[1]);
				visible = visible && (typeData  == '' || typeData == splitedItem[2]);
				console.log(year);
				if(visible){
					$(this).fadeIn('slow');
					x++;
				}
				else{
					$(this).hide();
				}
				
			});
			if(x != 0)
			{
				$(this).parent().parent().siblings('.description').find('ul').fadeIn('slow');
			}
		});
	});
</script>

<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white cus_full-w">
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
			Saving
		<?php endif; ?>
	</h2>
	<?php
		$assets = new Asset_List();
		$assets->setCondition("filename = 'saving'");
		foreach($assets as $row1)
		{
			$idAssets = $row1->id;
			$jenis = new Asset_List();
			$jenis->setCondition("parentId = '".$idAssets."'");
			$year = array();
			$list = array();
			
			foreach($jenis as $row2)
			{
				$idJenis = $row2->id;
				$tahun = new Asset_List();
				$tahun->setCondition("parentId = '".$idJenis."'");
				
				foreach($tahun as $row3)
				{
					$year[] = $row3->filename;
					$x++;
					$idTahun = $row3->id;
					
					$bulan = new Asset_List();
					$bulan->setCondition("parentId = '".$idTahun."'");
					foreach($bulan as $row4)
					{
						$idBulan = $row4->id;
						
						$data = new Asset_List();
						$data->setCondition("parentId = '".$idBulan."'");
						foreach($data as $isi)
						{
							$item = $row4->filename."/".substr($row3->filename, 2)."/".$row2->filename;
							$list[] = '<li><a item="'.$item.'" target="_blank" href="'.$isi->path."".$isi->filename.'">'.$isi->filename.'</a></li>';
						}
					}
				}
			}
			$full_data = $list;
			$Listtahun = array_unique($year);
			asort($Listtahun);
		}
	?>
	<div class="combo_section">
		<p>
			Pilih Tahun<br />
			<select class="combo-width year-pick">
				<option value="" selected="selected">--Pilih Semua--</option>
				<?php 
					foreach($Listtahun as $key => $val)
					{
						$namaTahun = $val;
						echo '<option value="'.$namaTahun.'">'.strtoupper($namaTahun).'</option>';
					}
				?>
			</select>
		</p>
		<p>
			Pilih Bulan<br />
			<select class="combo-width month-pick">
				<option value="" selected="selected">--Pilih Semua--</option>
				<option value="januari">Januari</option>
				<option value="februari">Februari</option>
				<option value="maret">Maret</option>
				<option value="april">April</option>
				<option value="mei">Mei</option>
				<option value="juni">Juni</option>
				<option value="juli">Juli</option>
				<option value="agustus">Agustus</option>
				<option value="september">September</option>
				<option value="oktober">Oktober</option>
				<option value="november">November</option>
				<option value="desember">Desember</option>
			</select>
		</p>
		<p>
			Pilihan Jenis Fact Sheet<br />
			<select class="combo-width type-pick">
				<option value="" selected="selected">--Pilih Semua--</option>
				<?php 
					foreach($jenis as $row)
					{
						$namaJenis = $row->filename;
						echo '<option value="'.$namaJenis.'">'.strtoupper($namaJenis).'</option>';
					}
				?>
			</select>
		</p>
	</div>
	<div class="description fundfact">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<?php echo $this->image('image', array(
								'title' => 'Drag your image here',
								'thumbnail' => 'fundfactsheet'))?>
		<ul>
			<?php
				foreach($full_data as $listData) {
					echo $listData;
				}
			?>
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.description.fundfact ul').hide();
	});
</script>