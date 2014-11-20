<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<!-- Meta Tags -->
<meta charset="utf-8">
<title>Allianz Investment</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="author" content="Allianz">
<meta name="description" content="Asuransi Allianz Indonesia adalah perusahaan asuransi terbaik dan terpercaya di dunia.">
<meta name="keywords" content="Asuransi Indonesia, Allianz Indonesia, Asuransi Terbaik, Asuransi Terpercaya">
<!--[if IE 8 ]><html class="ie8"> 
	<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="http://allianz.co.id/_assets/css/css-ie8/screen-ie8.css">
	<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="http://allianz.co.id/_assets/css/css-ie8/main-ie8.css">
<![endif]-->

<!-- icons & favicon -->
<link rel="shortcut icon" href="/website/static/inv/images/favicon.ico" type="image/x-icon">



<!-- css -->

<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/inv/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/inv/css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/inv/css/screen.css">

<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/inv/css/main.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/inv/css/respon.css">


<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- javascript -->
<script src="/website/static/inv/js/modernizr.js" type="text/javascript"></script>
<script src="/website/static/inv/js/jquery-1.9.1.min.js" type="text/javascript"></script>

<script src="/website/static/inv/js/main.js" type="text/javascript"></script>

</head>

<body>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

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
<!-- End of Footer -->
<link rel="stylesheet" type="text/css" media="all" href="/website/static/css/css-ie8/isr.css">


<!-- plugins -->
<script src="/website/static/inv/js/jquery.flexslider.min.js" type="text/javascript"></script>

<script src="/website/static/inv/js/resizeimagetoparent.js"></script>
<script src="/website/static/inv/js/javascripts.js"></script>
</body>
</html>