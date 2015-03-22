<div class="container">
	<?php echo $this->areablock('bannerArea', array(
				'allowed' => array('gallery-carousel')))?>
	<div class="wrapper-special clearfix noArrow">
		<?php /* echo $this->areablock('bannerProduct', array(
				'allowed' => array('banner', 'static-banner'))) */?>
		<div id="best-products">
			<div style="overflow: hidden; position: relative;" class="flex-viewport">
			<ul style="width: 1600%; transition-duration: 0.6s; transform: translate3d(-2540px, 0px, 0px);" class="slides">

			<li style="width: 635px; float: left; display: block;" class="">
				<div class="product">
					<!-- <div class="photo">
						<img draggable="false" alt="" src="/website/static/images/static_image/image_static_allianz_global.png" height="380" width="635">
					</div>
					<div class="fixbox right60">
						<div class="place-bg bg-blue">
								<h1>Allianz Global Benefits</h1>
								<p>
                                	Allianz Global Benefits helps multinational corporations to optimize their employee benefit programs across countries.
                                </p>
						</div>
						<div class="edge e-blue">
							<a href="/produk/asuransi-kesehatan/allianz-global">Info selengkapnya</a>
						</div>
					</div> -->
					<div class="photo">
						<?php $i = "static";$id = "idStatic";
							  echo $this->image("image_".$i, ["thumbnail" => "galleryCarouselStatic", "dropClass" => $id . "-" . $i, 'title' 	=> 'Image Size 635x310']);
						?>
					</div>
					<?php
						$extra = $this->image("image_".$i)->getHotspots();
						//$pos = $extra[0]['data'][0]['value'];
						//$color = $extra[0]['data'][1]['value'];
						$pos = $this->select('position_'.$i)->getData();
						$color = $this->select('color_'.$i)->getData();
					?>
					<div class="fixbox <?php echo $pos?>60">
						<div class="place-bg bg-<?php echo $color?>">
								<?php if($this->editmode || !$this->input("caption-title-" . $i)->isEmpty()) { ?>
		                            <h1><?php echo $this->input("caption-title-" . $i, ["width" => 251]) ?></h1>
		                        <?php } ?>
		                        <?php if($this->editmode || !$this->textarea("caption-text-" . $i)->isEmpty()) { ?>
		                            <p>
		                                <?php echo $this->textarea("caption-text-" . $i, ["width" => 251, "height" => 100]) ?>
		                            </p>
		                        <?php } ?>
		                        <?php if($this->editmode) { ?>
		                        	<p>
		                        	<?php 
		                        		echo "Position: <br />";
		                        		echo $this->select("position_".$i,array(
										    "store" => array(
										        array("left", "Left"),
										        array("right", "Right")
										    )
										)); 
									?>
		                        	</p>
		                        	<p>
			                        <?php 
			                        	echo "Color: <br />";
		                        		echo $this->select("color_".$i,array(
										    "store" => array(
										        array("red", "Red"),
										        array("lightgreen", "Light Green"),
										        array("purple", "Purple"),
										        array("blue", "Blue"),
										        array("orange", "Orange")
										    ),
										    "reload" => true
										)); 
									?>
		                        	</p>
		                        <?php } ?>
							</div>
							<div class="edge e-<?php echo $color?>">
								<?php echo $this->link("boxlink_".$i); ?>
							</div>
						</div>
				</div>
			</li>
					
					
			</ul>
			</div>
		</div>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
				'allowed' => array('layanankami-quicklinks', 'blank-tile-quicklinks-static')))?>
		</div>
	</div>
	<?php
		function limit_words($string, $word_limit)
		{
			$words = explode(" ",$string);
			return implode(" ",array_splice($words,0,$word_limit));
		}
	?>
	<div class="container boxes-view">
	<div class="items-container custom_item_home">
	<!-- Community -->
		<?php echo $this->areablock('jurnalAllianz', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
	
		<?php echo $this->areablock('tahukahAnda', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
				
		<?php echo $this->areablock('communityTips', array(
				'allowed' => array('jurnal-allianz','tahukah-anda','community-tips')))?>
	
	<!-- End Community -->
	</div> <!-- .items-container -->
	</div>
	<?php
		$value = strtotime(date("YmdHis")).rand();
		
		if($_COOKIE["user"]=="")
		{
			setcookie("user", $value);
		}
	?>
	
	<!-- Map -->
	<!--<div class="wrapper clearfix">
			<div class="wrap30 l left">
			   <h1 class="top">Jenis Fund</h1>
			    <select class="span2 blue-color fundtype">
				<option value="0" selected="selected">Jenis Fund</option>
				<option value="AlliSya  Rupiah Equity Fund">Allisya  Rupiah Equity Fund</option>
				<option value="AlliSya Rupiah Balanced Fund">Allisya Rupiah Balanced Fund</option>
				<option value="AlliSya Rupiah Fixed Income Fund">Allisya Rupiah Fixed Income Fund</option>
				<option value="GUARDIA DANA PENDAPATAN TETAP">Guardia Dana Pendapatan Tetap</option>
				<option value="SMARTWEALTH BEST OF BEST INDONESIA FUND">Smartwealth Best Of Best Indonesia Fund</option>
				<option value="SMARTWEALTH EQUITY INDOASIA FUND">Smartwealth Equity Indoasia Fund</option>
				<option value="SMARTWEALTH EQUITY INDOASIA FUND (USD)">Smartwealth Equity Indoasia Fund (usd)</option>
				<option value="SMARTWEALTH LIQUIFLEX LQ45">Smartwealth Liquiflex Lq45</option>
				<option value="SmartWealth Equity IndoGlobal Fund">Smartwealth Equity Indoglobal Fund</option>
				<option value="Smartlink Dollar Managed Fund">Smartlink Dollar Managed Fund</option>
				<option value="Smartlink Rupiah Balanced Fund">Smartlink Rupiah Balanced Fund</option>
				<option value="Smartlink Rupiah Balanced Plus Fund">Smartlink Rupiah Balanced Plus Fund</option>
				<option value="Smartlink Rupiah Equity Fund">Smartlink Rupiah Equity Fund</option>
				<option value="Smartlink Rupiah Fixed Income Fund">Smartlink Rupiah Fixed Income Fund</option>
				<option value="Smartlink Rupiah Money Market Fund">Smartlink Rupiah Money Market Fund</option>
				<option value="Smartwealth Equity Indoconsumer Fund">Smartwealth Equity Indoconsumer Fund</option>
				<option value="Smartwealth Equity Infrastructure Fund">Smartwealth Equity Infrastructure Fund</option>
				<option value="Smartwealth Equity Small Medium Capital Fund">Smartwealth Equity Small Medium Capital Fund</option>
			    </select>
			   
			</div>
		       
			<div class="wrap10 r left hidden-btn">
			   <h5 class="top" style="visibility:hidden">hidden</h5>
			    <input class="select-btn blue-color filter_harga btn" type="button" value="Lihat harga unit" />
			</div>
			
			<div id="containerNav" style="width:100%; height:400px;float: left;"></div>
			<!--<h2><?php //echo $this->input("judul_map", array("width" => 255));?></h2>-->
			<!--<div id="maparea">
				
			</div>-->
		<?php //echo $this->area("mapArea", array("type" => "map-point")); ?>
	<!--</div>-->
	<!-- End Map -->

	<?php echo $this->areablock('modal-box-home', array('allowed' => array('modal-home')));?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(this).on('click', '.filter_harga', function(e){
			//var awal= $('#txtFromDate').val();
			//var akhir=$('#txtToDate').val();       
			//var arr_awal = awal.split('/');            
			//var arr_akhir = akhir.split('/');            
			//var formfundtype=$('.fundtype').val();
			$.ajax({
				"url" : "/dataNab",
				//"data" : $(this).serialize() + "&filter=1&day1="+arr_awal[1]+"&month1="+arr_awal[0]+"&year1="+arr_awal[2]+"&day2="+arr_akhir[1]+"&month2="+arr_akhir[0]+"&year2="+arr_akhir[2]+"&fundtype='"+formfundtype+"'",
				"success" : function(response){
						var new_data = JSON.parse(response);
						
						var fund_name = "";
						var date_awal;
						var data_bid;
						var databid = new Array();
						var z = 0;
						$.each(new_data.data_fund, function(key, index){
							fund_name = index.fundname;
							tgl = (index.last_3_month).split("-");
							//console.log(date_awal);
							//if (z == 0) {
							//	data_bid = parseInt(index.bid);
							//}else{
							//	data_bid = data_bid+","+parseInt(index.bid);
							//}
							
							databid[z]={x: Date.UTC(tgl[0], tgl[1], tgl[2]), y: parseInt(index.bid)};
							z++;
						});
						
						//var databid = "["+data_bid+"]";
						//console.log(databid);
					//var rows;
					//
					//if(new_data.xml_data.length >0){
					//    
					//    for(var i=0; i<new_data.xml_data.length; i++){
					//	dataSets.push(new Array(new_data.xml_data[i]['last_3_month'],new_data.xml_data[i]['bid'],new_data.xml_data[i]['offer']));
					//    }
					//
					//}else{
					//    rows+=("<tr>"+ 
					//		"<td colspan=4>Data tidak ditemukan</td>"+
					//	    "</tr>");
					//}
					//console.log(dataSets);
					//var fundname=new_data.resume_graph.fundname.toString();
					//var fundbid=new_data.resume_graph.fundbid;
					//
					//console.log(fundname);
					//console.log(fundbid);
					//
					//var databid=new Array();
					//
					//for(var d=0;d<new_data.resume_graph.bidyear.length; d++){
					//    
					//    databid[d]={x: Date.UTC(new_data.resume_graph.bidyear[d], new_data.resume_graph.bidmonth[d]-1, new_data.resume_graph.bidday[d]), y: new_data.resume_graph.fundbid[d]};
					//    
					//    //console.log("y:"+new_data.resume_graph.bidyear[d]+","+new_data.resume_graph.bidmonth[d]+","+new_data.resume_graph.bidday[d]+",y:"+new_data.resume_graph.fundbid[d]);						
					//    //console.log(databid[d]);
					//}
					var date_awal=Date.UTC(2015,1,20);
					//    //console.log(date_awal);
					    //console.log(databid.length);
						 
						$(function () {
						    $('#containerNav').highcharts({
							    chart: {
								zoomType: 'x',
								type: "spline",
								panning: true,
								panKey: 'shift',
								renderTo: 'containerNav'
							    },
							    title:{
								 text: ''
							    },
							    subtitle: {
								text: 'Click and drag to zoom in. Hold down shift key to pan.'
							    },
							    xAxis: {
								    type: 'datetime',
								    minRange: 14 * 24 * 3600000 // fourteen days
								},
							    yAxis: {
								title: {
								    text: 'Nilai Bid'
								}
							    },
							    legend: {
								layout: 'vertical',
								align: 'middle',
								verticalAlign: 'bottom',
								borderWidth: 0
							    },
							    plotOptions: {
								spline: {
								    turboThreshold: databid.length,
								},
								area: {
								    fillColor: {
									linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1},
									stops: [
									    [0, Highcharts.getOptions().colors[0]],
									    [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
									]
								    },
								    marker: {
									radius: 2
								    },
								    lineWidth: 1,
								    states: {
									hover: {
									    lineWidth: 1
									}
								    }
								}
							    },
							    series: [{
								//pointInterval: 1,
								//pointStart: Date.UTC(arr_awal[2], arr_awal[0], arr_awal[1]),
								//pointInterval: 24 * 3600 * 1000,
								pointInterval: 24 * 3600 * 1000,
								pointStart: date_awal,
								name: fund_name,
								data: databid
							    }]
						    });
						});
						///$('.myTable2_items').html(rows);
						//$('.return-foot').html('<p class="return-foot" style="font-size: 14px;">Return: '+formfundtype+' sejak '+arr_awal[0]+'/'+arr_awal[1]+'/'+arr_awal[2]+' hingga '+arr_akhir[0]+'/'+arr_akhir[1]+'/'+arr_akhir[2]+' adalah '+((((new_data.xml_data[new_data.xml_data.length-1]['bid']/new_data.xml_data[0]['bid'])-1)*100).toFixed(2))+'% '+'</p>')
					     
					    //response action
										    
					    //$('.date-range').html("Fund name: "+formfundtype+". Periode: "+awal+" s/d "+akhir);
					    //$('.table-range').html("Fund name: "+formfundtype+". Periode: "+awal+" s/d "+akhir);
					   
				    
		
				},
				"error" : function(response){
		
				}
			    });//end ajax
		
		 
		    });
	});
</script>