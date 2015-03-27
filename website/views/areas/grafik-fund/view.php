<script src="/website/static/inv/js/highchart/highcharts.js"></script>
<div class="wrapper clearfix">
	<div class="wrap30 l left">
		<?php if($this->editmode): ?>
			Icon: <?php echo $this->image('icon-graph', array(
								'title' 	=> 'Image Size 31x31',
								'width' 	=> 100,
								'height' 	=> 100,
								'thumbnail'	=> 'icon')) ?>
			<?php echo $this->input('title-graph', ["width" => 250])?>
		<?php else: ?>
			<div style="background-image: url('<?php echo $this->image('icon-graph')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div>
			<h2 class="top"><?php echo $this->input('title-graph')?></h2>
		<?php endif; ?>
		
		<div class="button-mobile">
			<div class="cus_select">
				<select class="span2 blue-color fundtype">
				    <option value="0" selected="selected">Pilih Jenis Fund</option>
				    <option value="Smartlink Rupiah Equity Fund">Smartlink Rupiah Equity Fund</option>
				    <option value="Smartlink Rupiah Balanced Fund">Smartlink Rupiah Balanced Fund</option>
				    <option value="Smartlink Rupiah Fixed Income Fund">Smartlink Rupiah Fixed Income Fund</option>
				</select>
			</div>
			
			<button class="select-btn blue-color filter_harga btn gradien-grey">
				<span class=icon-panah></span>&nbsp;<span>Lihat harga unit</span>
			</button>
			<a class="linkInv" href="http://investment.allianz.co.id/allianz-fund/allianz-fund/nab-navs" target="_blank">
				<button class="select-btn blue-color btn gradien-grey">
					<span class=icon-panah></span>&nbsp;<span>Selengkapnya</span>
				</button>
			</a>
			<div class="clear"></div>
		</div>
	</div>
	
	<!--<div class="title-chart">
		<div class="lines"></div>
	</div>-->
	<div id="containerNav" style="width:100%; height:auto;float: left;"></div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(this).on('click', '.filter_harga', function(e){
			//var awal= $('#txtFromDate').val();
			//var akhir=$('#txtToDate').val();       
			//var arr_awal = awal.split('/');            
			//var arr_akhir = akhir.split('/');            
			var formfundtype=$('.fundtype').val();
			if (formfundtype == 0) {
				alert("Silahkan pilih jenis fund.");
			}
			else{
			$.ajax({
				"url" : "/dataNab",
				"data" : {fundName: formfundtype},
				"type" : "POST",
				"success" : function(response){
						var new_data = JSON.parse(response);
						
						var fund_name = "";
						var date_awal;
						var data_bid;
						var databid = new Array();
						var z = 0;
						//console.log(new_data);
						$.each(new_data.data_fund, function(key, index){
							fund_name = index.fundname;
							tgl = (index.last_3_month).split("-");
							//console.log(date_awal);
							//if (z == 0) {
							//	data_bid = parseInt(index.bid);
							//}else{
							//	data_bid = data_bid+","+parseInt(index.bid);
							//}
							//console.log(tgl[0]+"-"+tgl[1]+"-"+tgl[2]);
							databid[z]=[Date.UTC(parseInt(tgl[0]), parseInt(tgl[1])-1, parseInt(tgl[2])), parseFloat(index.bid)];
							//console.log(databid[z]);
							z++;
						});
						var reverse = databid.reverse()
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
					var date_awal=Date.UTC(2014,12,20);
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
							    credits: {
								text: 'Data fund merupakan harga 2 hari sebelumnya.',
								position: {
								    align: 'left',
								    x: 15 // position of credits
								},
								style: {
									fontStyle: 'italic', // you can style it!
									fontSize: '10px'
								}
							    },
							    series: [{
								//pointInterval: 1,
								//pointStart: Date.UTC(arr_awal[2], arr_awal[0], arr_awal[1]),
								//pointInterval: 24 * 3600 * 1000,
								pointInterval: 24 * 3600 * 1000,
								//pointStart: date_awal,
								name: fund_name,
								data: reverse
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
			}
		 
		    });
		
		$.ajax({
			"url" : "/dataNab",
			"data" : {fundName: "Smartlink Rupiah Equity Fund"},
			"type" : "POST",
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
						//console.log(tgl[0]+"-"+tgl[1]+"-"+tgl[2]);
						databid[z]=[Date.UTC(parseInt(tgl[0]), parseInt(tgl[1])-1, parseInt(tgl[2])), parseFloat(index.bid)];
						//console.log(databid[z]);
						z++;
					});
					var reverse = databid.reverse()
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
				var date_awal=Date.UTC(2014,12,20);
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
						credits: {
							text: 'Data fund merupakan harga 2 hari sebelumnya.',
							position: {
							    align: 'left',
							    x: 15 // position of credits
							},
							style: {
								fontStyle: 'italic', // you can style it!
								fontSize: '10px'
							}
						    },
						    series: [{
							//pointInterval: 1,
							//pointStart: Date.UTC(arr_awal[2], arr_awal[0], arr_awal[1]),
							//pointInterval: 24 * 3600 * 1000,
							pointInterval: 24 * 3600 * 1000,
							//pointStart: date_awal,
							name: fund_name,
							data: reverse
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
</script>