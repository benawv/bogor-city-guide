<?php echo $this->template("includes/inv/header.php")?>

<div class="header_page bg_future">
	<div class="container">
		Fund Fact Sheet
	</div>
</div>

<div class="main_wrap">

	<div class="row">
		<div class="container">
			
			<!-- SMARTLINK -->
			
			<div id="smartlink" class="full-w bg-white">
				
				<div class="icon-tentang-kami icon-section">&nbsp;</div><h1>Smartlink</h1>
				
				<div class="combo_section">
					<p>Pilih Tahun
					<br />
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
					<img src="/website/static/inv/images/fund/Image_Smartlink.jpg" />
					<ul>
						<?php
							$relationId = 294;
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
			
			<!-- SYARIAH END -->
						
			<div id="syariah" class="full-w bg-white">
				
				<div class="icon-tentang-kami icon-section">&nbsp;</div><h1>Syariah</h1>
				
				<div class="combo_section">
					<p>Pilih Tahun
					<br />
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
					<img src="/website/static/inv/images/fund/Image_Syariah.jpg" />
					<ul>
						<?php
							$relationId = 295;
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
			<!-- SYARIAH END -->
			
			<!-- PENSION END -->
						
			<div id="pension" class="full-w bg-white">
				
				<div class="icon-tentang-kami icon-section">&nbsp;</div><h1>Pension</h1>
				
				<div class="combo_section">
					<p>Pilih Tahun
					<br />
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
					<img src="/website/static/inv/images/fund/Image_Pension.jpg" />
					<ul>
						<?php
							$relationId = 296;
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
			<!-- PENSION END -->
			
			<!-- Saving END -->
						
			<div id="saving" class="full-w bg-white">
				
				<div class="icon-tentang-kami icon-section">&nbsp;</div><h1>Saving</h1>
				
				<div class="combo_section">
					<p>Pilih Tahun
					<br />
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
					<img src="/website/static/inv/images/fund/Image_Saving.jpg" />
					<ul>
						<?php
							$relationId = 297;
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
			<!-- SAVING END -->
			
			<!-- SMARTWEALTH END -->
						
			<div id="smartwealth" class="full-w bg-white">
				
				<div class="icon-tentang-kami icon-section">&nbsp;</div><h1>Smartwealth</h1>
				
				<div class="combo_section">
					<p>Pilih Tahun
					<br />
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
					<img src="/website/static/inv/images/fund/Image_Smartwealth.jpg" />
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
			<!-- SMARTWEALTH END -->
			
			
		</div>
		<!-- container end -->

	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->

<script type="text/javascript">
	$(function(){
		$('.year-pick, .month-pick, .type-pick').change(function(){
			var idFilterSection = $(this).closest('.full-w ').attr('id');
			
			var year = $('#'+idFilterSection + " .year-pick").val();
			console.log(year);
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
	$(document).ready(function(){
		$('.description ul').hide();
	});
</script>

<?php echo $this->template("includes/inv/footer.php")?>