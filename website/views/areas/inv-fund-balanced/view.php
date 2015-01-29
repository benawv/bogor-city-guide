<div class="container boxes-view">


<ul id="membername" class="navi" style="">
	<li >
		<a href="/allianz-fund/allianz-fund/fund-fact-sheet/equity">
			<div class="nav_menu">
													
			<div style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
													
			<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png);"></div>
													
			<span class="cus_anchor_0">Equity </span>
			</div>
		</a>
	</li>
	<li class="aktif">
		<a href="/allianz-fund/allianz-fund/fund-fact-sheet/fund-balanced">
		<div class="nav_menu">
												
			<div style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
												
			<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png);"></div>
												
			<span class="cus_anchor_1">Balanced </span>
		</div>
		</a>
	</li>
	<li>
		<a href="/allianz-fund/allianz-fund/fund-fact-sheet/fixed-income">
			<div class="nav_menu">
													
				<div style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
													
				<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png);"></div>
													
				<span class="cus_anchor_2">Fixed Income </span>
			</div>
		</a>
	</li>
	<li>

		<a href="/allianz-fund/allianz-fund/fund-fact-sheet/fund-moneymarket">
		<div class="nav_menu">
												
		<div style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
												
		<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png); "></div>
												
		<span class="cus_anchor_3">Money Market </span>
		</div>
		</a>
	</li>
	<li>
		<a href="/allianz-fund/allianz-fund/fund-fact-sheet/savings-plan">
		<div class="nav_menu">
													
		<div style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
													
		<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png); "></div>
													
		<span class="cus_anchor_4">Savings Plan </span>
		</div>
		</a>
	</li>
	<li>
		<a href="/allianz-fund/allianz-fund/fund-fact-sheet/dplk">
		<div class="nav_menu">
													
		<div style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
													
		<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png); "></div>
													
		<span class="cus_anchor_4">DPLK </span>
		</div>
		</a>
	</li>
</ul>

<!-- 770 display mobile menu -->

		<div class="dropdownmobile">

			<div class="dropshow">
				<a href="javascript:void(0);" id="opendropdown">Pilih Fund Fact Sheet :</a>
			</div>
			<div class="drophide">
				<a href="/allianz-fund/allianz-fund/fund-fact-sheet/equity">Equity</a>
			</div>
			<div class="drophide">
				<a href="/allianz-fund/allianz-fund/fund-fact-sheet/fund-balanced">Balanced</a>
			</div>
			<div class="drophide">
				<a href="/allianz-fund/allianz-fund/fund-fact-sheet/fixed-income">Fixed Income</a>
			</div>
			<div class="drophide">
				<a href="/allianz-fund/allianz-fund/fund-fact-sheet/fund-moneymarket">Money Market</a>
			</div>
			<div class="drophide">
				<a href="/allianz-fund/allianz-fund/fund-fact-sheet/savings-plan">Savings Plan</a>
			</div>
			<div class="drophide">
				<a href="/allianz-fund/allianz-fund/fund-fact-sheet/dplk">DPLK</a>
			</div>

		</div>
		<!-- dropdownmobile end -->
		
<script type="text/javascript">
	$(function(){
		$('.year-pick, .month-pick, .type-pick').change(function(){
			//var idFilterSection = $(this).closest('.full-w ').attr('id');
            	      
			var year = $('.year-pick').val(); //$('#'+idFilterSection + " .year-pick").val(); 
			//year = year;
           // alert(year);
            var month = $('.month-pick').val();//$('#'+idFilterSection + " .month-pick").val();	                        
		//	alert(month);
            var typeData = $(".type-pick").val();
            var x = 0;
            
            
			$(".description li").each(function(){
				var itemAttr = $(this).find('a').attr('item');
				splitedItem = itemAttr.split('/');
              //  alert('bulan'+splitedItem[1]+'-'+'tahun'+splitedItem[2]);
				var visible = true;
		visible = visible && (month == '' || month == splitedItem[0]);
		visible = visible && (year == '' || year == splitedItem[1]);
		visible = visible && (typeData  == '' || typeData == splitedItem[2]);
                

				if(visible==true){
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
	<?php
		$assets = new Asset_List();
		$assets->setCondition("filename = 'inv-balanced'");
		foreach($assets as $row1)
		{

			$idAssets = $row1->id;
			$list_tipe = new Asset_List(); 
			$list_tipe ->setCondition("parentId = '".$idAssets."'");
			$year = array();
			$list = array();
			
            
			foreach($list_tipe  as $row2)
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
							$item = $row4->filename."/".substr($row3->filename, 0)."/".$row2->filename;
							$list[] = '<li><a item="'.$item.'" target="_blank" href="'.$isi->path."".$isi->filename.'">'.$isi->filename.'</a></li>';
						}
					}
				}
			}
			$full_data = $list;
			$list_year = array_unique($year);
			asort($list_year);
		}
	?>
	<div class="combo_section">
		<p>
			Pilih Tahun<br />
			<select class="combo-width year-pick" style="color: black;">
				<option value="" selected="selected">--Pilih Semua--</option>
				<?php 
					foreach($list_year  as $key => $row)
					{
						$namaJenis = $row;
						echo '<option value="'.$namaJenis.'">'.strtoupper($namaJenis).'</option>';
					}
				?>
			</select>
		</p>
		<p>
			Pilih Bulan<br />
			<select class="combo-width month-pick" style="color: black;">
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
				<?php 
					/* foreach($bulan as $v)
					{
						$namaBulan = $v->filename;
						echo '<option value="'.$namaBulan.'">'.strtoupper($namaBulan).'</option>';
					} */
				?>
			</select>
		</p>
		<p>
			Pilih Tipe<br />
			<select class="combo-width type-pick" style="color: black;">
				<option value='' selected="selected">--Pilih Semua--</option>
				<?php 
					foreach($list_tipe  as $row)
					{
						$namaJenis = $row->filename;
						$display = str_replace("-", " ", $namaJenis);
						echo '<option value="'.$namaJenis.'">'.ucwords(strtolower($display)).'</option>';
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
		var listItems = $(".description.fundfact ul li");
		listItems.each(function() {
			var str = $(this).find('a').html();
			str = str.replace(/.pdf/g,'');
			var newStr = str.split('-');
			var val = '';
			for(var i=0; i<newStr.length; i++){
				if(newStr[i]){
					if (i == 0) {
						newStr[i] = newStr[i].toUpperCase();
					}
					else{
						newStr[i] = newStr[i].charAt(0).toUpperCase() + newStr[i].substr(1).toLowerCase();	
					}
					
					val = val + ' ' + newStr[i];
				}
			}
			$(this).find('a').html(val);
		});

		$("#opendropdown").click(function(){
			$(".drophide").toggle();
		});
	});
</script>
</div>


<div class="row">
		
	
	<div class="row">

			<div class="container">

    			<div class="title_section">
    			</div>

				<div class="catbox blue">
					<h2><a href="/allianz-fund/allianz-fund/fund-information">Informasi Fund</a></h2>
				</div>

				<div class="catbox blue">
					
					<h2><a href="/allianz-fund/allianz-fund/daily-nav">NAB Harian</a></h2>
				</div>

				<!--<div class="catbox blue">
				
					<h2><a href="/allianz-fund/allianz-fund/fund-fact-sheet">Fund Fact Sheet</a></h2>
				</div>-->
                
                
                
			</div>
			<!-- container end -->

	</div>
		
</div>