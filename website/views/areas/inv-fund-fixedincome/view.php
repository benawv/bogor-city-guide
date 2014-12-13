<div class="container boxes-view">
<script type="text/javascript">
	$(function(){
		$('.year-pick, .month-pick, .type-pick').change(function(){
			var idFilterSection = $(this).closest('.full-w ').attr('id');
            	      
			var year = $('.year-pick').val(); //$('#'+idFilterSection + " .year-pick").val(); 
			year = year.substr();
           // alert(year);
            var month = $('.month-pick').val();//$('#'+idFilterSection + " .month-pick").val();	                        
		//	alert(month);
            
            var x = 0;
            
            
			$(" .description li").each(function(){
				var itemAttr = $(this).find('a').attr('item');
				splitedItem = itemAttr.split('/');
              //  alert('bulan'+splitedItem[1]+'-'+'tahun'+splitedItem[2]);
				var visible = true;
				
                if(month==splitedItem[1]){
                    visible2=true;
                }else if(month==' '){
                    visible2=true;
                }else{
                    visible2=false;
                }
               // alert(visible2);
                 visible = visible && visible2;
                 
                
                if(year==splitedItem[2]){
                    visible3=true;
                }else if(year==' '){
                     visible3=true;
                }else{
                    visible3=false;
                }
                //alert(visible3);
                 visible = visible && visible3;
               
                //console.log(visible);

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
		$assets->setCondition("filename = 'inv-fixed-income'");
		foreach($assets as $row1)
		{

			$idAssets = $row1->id;
			$list_year = new Asset_List(); 
			$list_year ->setCondition("parentId = '".$idAssets."'");
			$year = array();
			$list = array();
			
            
			foreach($list_year  as $row2)
			{
		 
                $years[] = $row2->filename;
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
                        
                            $item = $row4->filename."/".substr($row3->filename, 0)."/".$row2->filename;
							$list[] = '<li><a item="'.$item.'" target="_blank" href="'.$row4->path."".$row4->filename.'">'.$row4->filename.'</a></li>';
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
			<select class="combo-width year-pick" style="color: black;">
				<option value="" selected="selected">--Pilih Semua--</option>
				<?php 
					foreach($list_year  as $row)
					{
						$namaJenis = $row->filename;
						echo '<option value="'.$namaJenis.'">'.strtoupper($namaJenis).'</option>';
					}
				?>
			</select>
		</p>
		<p>
			Pilih Bulan<br />
			<select class="combo-width month-pick" style="color: black;">
				<option value=" " selected="selected">--Pilih Semua--</option>
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
</div>