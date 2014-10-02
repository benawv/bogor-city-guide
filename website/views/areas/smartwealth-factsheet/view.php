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

<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white">
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
	<div class="combo_section">
		<p>
			Pilih Tahun<br />
			<select class="combo-width year-pick">
				<option value="" selected="selected">--Pilih Semua--</option>
				<?php 
					$smartlinks = Object_FundFact::getById(307);
					$tahun = $smartlinks->getClass()->getFieldDefinition('tahun')->getOptions();
					foreach($tahun as $y)
					{
						echo '<option value="'.$y['value'].'">'.$y['key'].'</option>';
					}
				?>
			</select>
		</p>
		<p>
			Pilih Bulan<br />
			<select class="combo-width month-pick">
				<option value="" selected="selected">--Pilih Semua--</option>
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
				<option value="" selected="selected">--Pilih Semua--</option>
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
	<div class="description">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<?php echo $this->image('image', array(
								'title' => 'Drag your image here',
								'thumbnail' => 'fundfactsheet'))?>
		<ul>
			<?php
				$relationId = 298;
				//$smartlinks = Object_FundFact::getList();
				$query = new Object_FundFact_List();
				$query->setCondition("asuransi like '%,".$relationId.",%'");
				$smartlinks = $query->load();
				foreach($smartlinks as $v) {
					$types = $v->getFactsheet();
					$type = $types[0];
					$tahun = substr($v->getTahun(), 2);
					$item = $v->getBulan().'/'.$tahun.'/'.$type->getNama();
					echo '<li><a item="'.$item.'" target="_blank" href="'.$v->getFile()->getPath().'">'.$v->getJudul().'</a></li>';
				}
			?>
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.description ul').hide();
	});
</script>