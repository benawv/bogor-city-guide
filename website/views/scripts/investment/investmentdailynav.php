<?php echo $this->template("includes/inv/header.php")?>


<link rel="stylesheet" href="/website/static/inv/js/flaticon/flaticon.css" type="text/css" media="all" />

<link rel="stylesheet" href="/website/static/inv/js/jquery-ui-1.11.2/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/jquery-ui-1.11.2/jquery-ui.theme.css" type="text/css" media="all" />

<link rel="stylesheet" href="/website/static/inv/js/datatable/jquery.dataTable.css" type="text/css" media="all" />    
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/graph.css" type="text/css" media="all" />   

<script src="/website/static/inv/js/rangeslider/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.tools.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.sticky.js" type="text/javascript"></script>
    
<script src="/website/static/inv/js/rangeslider/jquery.min.js" type="text/javascript"></script>     
<script src="/website/static/inv/js/rangeslider/jquery-ui.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/1.7.2-jquery.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>

<script>$ = jQuery.noConflict();</script>

<script src="/website/static/inv/js/rangeslider/jquery.flot.min.js"></script>
<script src="/website/static/inv/js/highchart/highcharts.js"></script>
<!--script src="/website/static/inv/js/highchart/exporting.js"></script-->
<script src="/website/static/inv/js/datatable/jquery.dataTable.min.js" type="text/javascript" language="javascript" ></script>
    


<script>
    
    $(document).ready(function(){
        $("#txtFromDate").datepicker({
            //minDate: 0,
            maxDate:"+30D",
            numberOfMonths: 1,
            onSelect: function(selected) {
              $("#txtToDate").datepicker("option","minDate", selected)
            }
        });
        $("#txtToDate").datepicker({ 
            minDate: 0,
            maxDate:"+30D",
            numberOfMonths: 1,
            onSelect: function(selected) {
               $("#txtFromDate").datepicker("option","maxDate", selected)
            }
        });  
    });


</script>
    
<div role="main" class="main no-gutter">
    
    <div class="bg100 blue-color">
       <div class="container">
           <h1 class="article-title">Daily Nav</h1> 
        </div>   
        
    </div> 
    
	<div class="container boxes-view">
		
		<div id="#" class="article-wrap">
            
			<div class="wrap30">
                <h5><span><a href="#">Home</a></span> &rsaquo; <span>Daily Nav</span></h5>
                        <div class="box_banner_big">
			     			<div class="textbanner <?php echo $this->select('color')->getData()?$this->select('color')->getData():'blue'?> h200">
                				<h1><?php echo $this->input('title-note')?></h1>
                				
                
                				<h3>
                					<?php echo $this->wysiwyg('desc-note')?>
                				</h3>
                			
                				<p>
                					<?php 
                						if($this->editmode)
                						{
                	                    	echo "Color: ";
                	                		echo $this->select("color",array(
                							    "store" => array(
                							        array("red", "Red"),
                							        array("purple", "Purple"),
                							        array("blue", "Blue"),
                							        array("brown", "Brown"),
                							        array('darkbrown', "Dark Brown"),
                							        array('green', "Green")
                							    ),
                							    "reload" => true
                							)); 
                						}
                					?>
                				</p>
                
                			</div>
                            <div class="edge_textbanner edge_<?php echo $this->select('color')->getData()?$this->select('color')->getData():'blue'; ?>"></div>
                        </div>
            </div>	    
            <div class="wrap60" style="width: 55%;">
                <h4>NAB Harian</h4>
                <p></p>
                <p>Lihat NAB harian terbaru atau pilih NAB berdasar jenis fund anda.</p>
                
                <div class="table-wrap">
                    
                    <table id="fundtype" class="display" cellspacing="0" width="100%">
                        
                        <thead class="table-head"> 
                        <tr> 
                             
                            <th class="header headerSortDown">Fund Name</th> 
                            <th class="header">Bid</th> 
                            <th class="header">1M</th> 
                            <th class="header">3M</th> 
                            <th class="header">YTD</th>
                            <th class="header">1Y</th>
                        </tr> 
                        </thead> 
                        <tbody class="table-body"> 
                        <?php  
                            
                            foreach($this->data['ytd'] as $items){ 

                        ?>
                        <tr> 
                            <td><a href="#"><?php echo  ucwords(strtolower($items['today'][0]['fundname']))?></a></td> 
                            <td>
                                <?php echo $items['today'][0]['bid']; ?>
                            </td> 
                            <td>
                                <?php 
                                    if(empty($items['lastmonth'][0]['bid'])){
                                        $lastmonth=$items['lastdata'][0]['bid'];
                                        echo round(($lastmonth/$lastmonth)*100);
                                    }else{
                                        echo round(($items['lastdata'][0]['bid']/$items['lastmonth'][0]['bid'])*100);
					echo "beda";
                                    }
                                ?>
                                %
                            </td> 
                            <td>
                                <?php 
                                    if(empty($items['last3month'][0]['bid'])){
                                        $lastmonth=$items['lastdata'][0]['bid'];
                                        echo round(($lastmonth/$lastmonth)*100);
                                    }else{
                                        echo round(($items['lastdata'][0]['bid']/$items['last3month'][0]['bid'])*100);
					echo "beda";
                                    }

                                ?>
                                %
                            </td> 
                            <td>
                                <?php 
                                    if(empty($items['ytd'][0]['bid'])){
                                        $lastmonth=$items['lastdata'][0]['bid'];
                                        echo round(($lastmonth/$lastmonth)*100);
                                    }else{
                                        echo round(($items['lastdata'][0]['bid']/$items['ytd'][0]['bid'])*100);
					echo "beda";
                                    }
                                ?>
                                %
                            </td> 
                            <td>
                               <?php 
                                    if(empty($items['last1year'][0]['bid'])){
                                        $lastmonth=$items['lastdata'][0]['bid'];
                                        echo round(($lastmonth/$lastmonth)*100);
                                    }else{
                                        echo round(($items['lastdata'][0]['bid']/$items['last1year'][0]['bid'])*100);
					echo "beda";
                                    }
                                ?>
                                %
                            </td> 
                        </tr>
                       <?php } ?>     
                        
                        </tbody> 
                    </table> 

                    
                </div>
                    <!--- End Table ------>
                
			</div>	
            			
	    </div>
		
		<!-- article end -->
        <div id="#" class="article-wrap bottom">
           <div class="form-wrap bottom">
                
               <h5>Tentukan jangka waktu dan jenis fund</h5>
               
               <div class="wrap30 left">
                   <h5 class="top">Dari</h5>
                   <input type="text" id="txtFromDate" />
                </div>
               
               <div class="wrap30 left">
                   <h5 class="top">Hingga</h5>
                   <input type="text" id="txtToDate" />
                </div>
               
               <div class="wrap30 left">
                   <h5 class="top">Jenis Fund</h5>
                    <select class="span2 blue-color fundtype">
                        <option value="0" selected="selected">Jenis Fund</option>
                    <?php  foreach($this->data['ytd'] as $items){ ?>
                        <option value="<?php echo $items['today'][0]['fundname']; ?>"><?php echo  ucwords(strtolower($items['today'][0]['fundname'])); ?></option>
                    <?php } ?>    
                    </select>
                   
                </div>
               
               <div class="wrap10 left">
                   <h5 class="top" style="visibility:hidden">Dari</h5>
                    <input class="select-btn blue-color filter_harga" type="button" value="Lihat harga unit" />
               
                </div>
               
            </div>
            
        </div>
        <!-------Article end ---------->


        <div id="#" class="article-wrap bottom">
           
               <div class="table-wrap">
                   
                     <div id="title" class="title-chart" style="display:none" >
                            <span class="date-range"></span>
                            <a href="#" id="bars"><span></span></a>
                            <a href="#" id="lines" class="active"><span></span></a>
                    </div> 
                   
                   <?php 
 
//                    echo "<pre>";
//                    print $this->data['dataGraph'][0]['biddate'];
////                     foreach($this->data['dataGraph'][0]['biddate'] as $items){
////                        print_r($items);
////                     }
//                     echo "</pre>";
                   ?>
                    <!-- Graph HTML -->
                    <div id="graph-wrapper">
                        
                        <!--<div class="graph-info">

                            <a href="javascript:void(0)" class="visitors">Visitors</a>
                            <a href="javascript:void(0)" class="returning">Returning Visitors</a>



                            <a href="#" id="bars"><span></span></a>
                            <a href="#" id="lines" class="active"><span></span></a>

                        </div>-->

                        <div id="graph-height" class="graph-container">
                            
                                <div id="graph-lines"></div>
                                <div id="graph-bars"></div>

                                <!--------- Table nab daily----------------->
                            <div id="container" style="min-width: 900px; height: 500px; margin: 0 auto; padding: 20px; display:none"></div>
    
                               <div id="tablex" style="width: 98%; display: block;">
                               <div id="title" class="title-chart" style="
                                    top: -19px;
                                    width: 102.2%;
                                    position: relative;
                                    right: 21px;
                                ">
                                                            
                               <span></span>
                              <div class="table-range" style="position: absolute;top: 12px;left: 12px;"></div>
                               </div>
                                <table id="myTable2" class="display" cellspacing="0" width="100%">
                    
                                    <thead class="title-data"> 
                                    <tr>  
                                        <th class="">UNIT DATE</th> 
                                        <th class="">BID</th> 
                                        <th class="">OFFER</th>
                                    </tr> 
                                    </thead> 

                                    <div id="title2" style="
                                        top: -11.7%;
                                        width: 102%;
                                        left: -19px;
                                        position: relative;">
                                           <a href="#" id="bars" class="active" style="
                                                position: relative;
                                                top: 12px;
                                                left: -28px;
                                            "><span></span></a>
                                            <a href="#" id="lines2" style="
                                            position: relative;
                                            top: 12px;
                                            left: -27px;
                                            "><span></span></a>
                                    </div>
                                    <tbody class="table-body-2 myTable2_items"> 
                                    <?php                    
                                   foreach($this->data['defult_data'] as $items){
                                    ?>
                                        <tr> 
                                            <td><?php echo ucwords(strtolower($items["fundName"])); ?></td> 
                                            <td><?php echo $items["unitdates"]; ?></td> 
                                            <td><?php echo $items["bid"]; ?></td> 
                                            <td><?php echo $items["offer"]; ?></td> 
                                        </tr>    
                                    <?php } ?>      
                                    
                                    </tbody>
                                   
                                </table>
                            </div>
                                
                                <!--<p class="footnote">Return: 3.24% ffff sejak 'dd/mm/yyyy' hingga 'dd/mm/yyyy' adalah xx%</p>-->

                                <!--------- Table nab daily----------------->

                           
                        </div>    
                    </div>
                    <!-- end Graph HTML -->
                   
                   
                   <script>
                   
                  
 
    $(document).ready(function () {
 
                 
            //datatable ##############################################
            $('#fundtype').DataTable({
                    "oLanguage": {
                      "sSearch": "Cari:",
                      "sLengthMenu": "Tampilkan _MENU_ baris",            
                      "sInfo": "Tota _TOTAL_ baris, ditampilan dari (_START_ s/d _END_)",
                      "oPaginate": {
                        "sPrevious": "Sebelumnya"
                      }
                    }
           } );
           
            
            function toTitleCase(str)
                {
                    return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
                }
            
            $(this).on('click', '.filter_harga', function(e){
              
                
                    var awal= $('#txtFromDate').val();
                    var akhir=$('#txtToDate').val();       
                    var arr_awal = awal.split('/');            
                    var arr_akhir = akhir.split('/');            
                    var formfundtype=$('.fundtype').val();
                    
                    
                    
                    if(formfundtype =='0'){
                        alert("Silahkan pilih jenis fund");
                    }else{
                    
                    //alert($('.day1').val()+"&month1="+$('.month1').val()+"&year1="+$('.year1').val()+"&day2="+$('.day2').val()+"&month2="+$('.month2').val()+"&year2="+$('.year2').val()+"&fundtype='"+$('.fundtype').val());
                      var dataSets=[];
                      
                      $.ajax({
                            "url" : "/daily-nav/getfilter/",
                            "data" : $(this).serialize() + "&filter=1&day1="+arr_awal[1]+"&month1="+arr_awal[0]+"&year1="+arr_awal[2]+"&day2="+arr_akhir[1]+"&month2="+arr_akhir[0]+"&year2="+arr_akhir[2]+"&fundtype='"+formfundtype+"'",
                            "type" : "POST",
                            "success" : function(response){
                                if(response){
                                        //console.log(jQuery.parseJSON(response));
                                        var IS_JSON = true;
                                        try
                                        {
    
                                            var new_data = jQuery.parseJSON(response);                                           
                                            var rows;
                                            $('.myTable2_items').html("");
                            
                                            if(new_data.xml_data.length >0){
                                                
                                                for(var i=0; i<new_data.xml_data.length; i++){
                                                    dataSets.push(new Array(new_data.xml_data[i]['unitdates'],new_data.xml_data[i]['bid'],new_data.xml_data[i]['offer']));
                                                }
                                                
                                            }else{
                                                rows+=("<tr>"+ 
                                                            "<td colspan=4>Data tidak ditemukan</td>"+
                                                        "</tr>");
                                            }
                                           
                                            if ( $.fn.dataTable.isDataTable( '#myTable2' ) ) {
                                                    $('#myTable2').dataTable({
                                                        destroy: true,
                                                    "oLanguage": {
                                                      "sSearch": "Cari:",
                                                      "sLengthMenu": "Tampilkan _MENU_ baris",            
                                                      "sInfo": "Tota _TOTAL_ baris, ditampilan dari (_START_ s/d _END_)",
                                                      "oPaginate": {
                                                        "sPrevious": "Sebelumnya"
                                                      }
                                                    },
                                                    "searching": false,
                                                    "bLengthChange": false,
                                                    "data": dataSets                               
                                                });
                                            }else {
                                            
                                                $('#myTable2').dataTable( {
                                                    "oLanguage": {
                                                      "sSearch": "Cari:",
                                                      "sLengthMenu": "Tampilkan _MENU_ baris",            
                                                      "sInfo": "Tota _TOTAL_ baris, ditampilan dari (_START_ s/d _END_)",
                                                      "oPaginate": {
                                                        "sPrevious": "Sebelumnya"
                                                      }
                                                    },
                                                    "searching": false,
                                                    "bLengthChange": false,
                                                    "data": dataSets                               
                                                });
                                            }
//                                             console.log(new_data.resume_graph.fundname);
//                                             console.log(new_data.resume_graph.biddate);
//                                             console.log(new_data.resume_graph.fundbid);
                                             
                                            var fundname=new_data.resume_graph.fundname.toString();
                                            var biddate=new_data.resume_graph.biddate;
                                            var fundbid=new_data.resume_graph.fundbid;
                                            
                                            $(function () {
                                                $('#container').highcharts({
                                                    title: {
                                                        text: ' ',
                                                        x: -20 //center
                                                    },
                                                    //subtitle: {
                                                    //    text: 'Source: WorldClimate.com',
                                                     //   x: -20
                                                    //},
                                                    xAxis: {
                                                        categories: biddate
                                                    },
                                                    yAxis: {
                                                        title: {
                                                            text: ' '
                                                        },
                                                        plotLines: [{
                                                            value: 0,
                                                            width: 1,
                                                            color: '#808080'
                                                        }]
                                                    },
                                                    tooltip: {
                                                        valueSuffix: ''
                                                    },
                                                    legend: {
                                                        layout: 'vertical',
                                                        align: 'middle',
                                                        verticalAlign: 'bottom',
                                                        borderWidth: 0
                                                    },
                                                    series: [{
                                                        name: fundname,
                                                        data: fundbid
                                                    }]
                                                });
                                            });     
                                            ///$('.myTable2_items').html(rows);
                                        }
                                        catch(err)
                                        {
                                            IS_JSON = false;
                                        } 
                                        //response action
                                        
                                        $('.date-range').html("Fund name: "+formfundtype+". Periode: "+awal+" s/d "+akhir);
                                        $('.table-range').html("Fund name: "+formfundtype+". Periode: "+awal+" s/d "+akhir);
                                        $('.return-foot').html('<p class="return-foot">Return: 3.24% '+formfundtype+' sejak '+arr_awal[0]+'/'+arr_awal[1]+'/'+arr_awal[2]+' hingga '+arr_akhir[0]+'/'+arr_akhir[1]+'/'+arr_akhir[2]+' adalah xx%</p>')
                                }
    
                            },
                            "error" : function(response){
    
                            }
                        });//end ajax

                    }
                    
                        
                });

                // Graph Toggle ############################################
                $('#graph-lines').hide();
                $('#title').hide();

                $('#lines').on('click', function (e) {
                    $('#bars').removeClass('active');
                    $('#graph-bars').fadeOut();
                    $(this).addClass('active');
                    $('#graph-lines').fadeIn();
                    e.preventDefault();
                });
                
                $('#lines2').on('click', function (e) {
//                                alert('hai');
                    $('#container').fadeIn();
                    $('#bars').removeClass('active');
                    $('#graph-bars').hide();
                    $('#tablex').hide();
                    $('#title').fadeIn();
                    $(this).addClass('active');
                    $('#graph-lines').fadeIn();
                    e.preventDefault();
                });

                $('#bars').on('click', function (e) {
                     $('#container').hide();
                    $('#lines2').removeClass('active');
                    $('#graph-lines').hide();
                    $(this).addClass('active');
                    $('#tablex').fadeIn().removeClass('hidden');
                    $('#title').hide();
                    e.preventDefault();
                });

                // Tooltip #################################################
                function showTooltip(x, y, contents) {
                    $('<div id="tooltip">' + contents + '</div>').css({
                        top: y - 16,
                        left: x + 20
                    }).appendTo('body').fadeIn();
                }

                var previousPoint = null;

                $('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;
                            $('#tooltip').remove();
                            var x = item.datapoint[0],
                                y = item.datapoint[1];
                                showTooltip(item.pageX, item.pageY, y + '  at ' + x + '.day');
                        }
                    } else {
                        $('#tooltip').remove();
                        previousPoint = null;
                    }
                });

            });
            </script>

                   
                    <p class="return-foot"></p>
                    
                </div>
                    <!--- End Table ------>
                
                
        </div> 
            <!-------Article end ---------->
        
	</div>  
                
</div>
<!-- End of Main -->

<div class="row">
		
	
	<div class="row">

			<div class="container">

    			<div class="title_section">
    			</div>

				<div class="catbox blue">
					<h2><a href="/allianz-fund/allianz-fund/fund-information">Informasi Fund</a></h2>
				</div>

				<!--<div class="catbox blue">
					
					<h2><a href="/allianz-fund/allianz-fund/daily-nav">NAB Harian</a></h2>
				</div>-->

				<div class="catbox blue">
				
					<h2><a href="/allianz-fund/allianz-fund/fund-fact-sheet">Fund Fact Sheet</a></h2>
				</div>
                
                
                
			</div>
			<!-- container end -->

	</div>
		
</div>

<link rel="stylesheet" type="text/css" href="/website/static/inv/js/datatable/jquery.dataTable.css" />
<?php echo $this->template("includes/inv/footer.php")?>    
