<?php echo $this->template("includes/inv/header.php")?>


<link rel="stylesheet" href="/website/static/inv/js/flaticon/flaticon.css" type="text/css" media="all" />


<link rel="stylesheet" href="/website/static/inv/js/datatable/jquery.dataTable.css" type="text/css" media="all" />    
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/graph.css" type="text/css" media="all" />   

<script src="/website/static/inv/js/rangeslider/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.tools.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.sticky.js" type="text/javascript"></script>
    
<script src="/website/static/inv/js/rangeslider/jquery.min.js" type="text/javascript"></script>     
<script src="/website/static/inv/js/rangeslider/jquery-ui.min.js" type="text/javascript"></script>

<script>$ = jQuery.noConflict();</script>

<script src="/website/static/inv/js/rangeslider/1.7.2-jquery.min.js" type="text/javascript"></script> 
<script src="/website/static/inv/js/rangeslider/jquery.flot.min.js"></script>
<script src="/website/static/inv/js/datatable/jquery.dataTable.min.js" type="text/javascript" language="javascript" ></script>
<script src="/website/static/inv/js/highchart/highcharts.js"></script>
<script src="/website/static/inv/js/highchart/exporting.js"></script>
    
    
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
			     <div class="bg-blue">
                    <h4>NAB Harian</h4>
                    <p></p>
                </div>
            
            </div>	    
            
            <div class="wrap60">
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
                                        echo ($lastmonth/$lastmonth)*100;
                                    }else{
                                        echo ($items['lastdata'][0]['bid']/$items['lastmonth'][0]['bid'])*100;
                                    }
                                ?>
                                %
                            </td> 
                            <td>
                                <?php 
                                    if(empty($items['last3month'][0]['bid'])){
                                        $lastmonth=$items['lastdata'][0]['bid'];
                                        echo ($lastmonth/$lastmonth)*100;
                                    }else{
                                        echo ($items['lastdata'][0]['bid']/$items['last3month'][0]['bid'])*100;
                                    }

                                ?>
                                %
                            </td> 
                            <td>
                                <?php 
                                    if(empty($items['ytd'][0]['bid'])){
                                        $lastmonth=$items['lastdata'][0]['bid'];
                                        echo ($lastmonth/$lastmonth)*100;
                                    }else{
                                        echo ($items['lastdata'][0]['bid']/$items['ytd'][0]['bid'])*100;
                                    }
                                ?>
                                %
                            </td> 
                            <td>
                               <?php 
                                    if(empty($items['last1year'][0]['bid'])){
                                        $lastmonth=$items['lastdata'][0]['bid'];
                                        echo ($lastmonth/$lastmonth)*100;
                                    }else{
                                        echo ($items['lastdata'][0]['bid']/$items['last1year'][0]['bid'])*100;
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
                    <select class="span1 blue-color day1" name="day1" style="width: 100px;">
                        <option value="0" selected="selected">Tanggal</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                   <select class="span1 blue-color month1" name="month1">
                       <option value="0" selected="selected">Bulan</option>
                       <option value="1">Jan</option>
                       <option value="2">Feb</option>
                       <option value="3">Mar</option>
                       <option value="4">Apr</option>
                       <option value="5">May</option>
                       <option value="6">Jun</option>
                       <option value="7">Jul</option>
                       <option value="8">Aug</option>
                       <option value="9">Sep</option>
                       <option value="10">Oct</option>
                       <option value="11">Nop</option>
                       <option value="12">Des</option>
                    </select>
                   <select class="span1 blue-color year1" name="year1">
                        <option value="0" selected="selected">Tahun</option>
                        <?php
                        for($i=date('Y'); $i>2013; $i--) {
                            $selected = '';
                            if ($birthdayYear == $i) $selected = ' selected="selected"';
                            print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
                        }
                        
                        ?>
                    </select>
                </div>
               
               <div class="wrap30 left">
                   <h5 class="top">Hingga</h5>
                    <select class="span1 blue-color day2" style="width: 100px;">
                        <option value="0" selected="selected">Tanggal</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                   <select class="span1 blue-color month2">
                       <option value="0" selected="selected">Bulan</option>
                       <option value="1">Jan</option>
                       <option value="2">Feb</option>
                       <option value="3">Mar</option>
                       <option value="4">Apr</option>
                       <option value="5">May</option>
                       <option value="6">Jun</option>
                       <option value="7">Jul</option>
                       <option value="8">Aug</option>
                       <option value="9">Sep</option>
                       <option value="10">Oct</option>
                       <option value="11">Nop</option>
                       <option value="12">Des</option>
                    </select>
                   <select class="span1 blue-color year2">
                        <option value="0" selected="selected">Tahun</option>
                        <?php
                        for($i=date('Y'); $i>2013; $i--) {
                            $selected = '';
                            if ($birthdayYear == $i) $selected = ' selected="selected"';
                            print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
                        }
                        
                        ?>
                   </select>
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
                   //$no=0;
//
//                     foreach($this->data['dataPerforms'] as $items){
//                       //echo count($items['perform1year']);
//                       for($i=0;$i<count($items['perform1year']);$i++){
//                           if($items['perform1year'][$i-1]['fundname']==$items['perform1year'][$i]['fundname']){
//                            
//                 //               if($i==0){
////                                    echo "[";
////                                }
//                            
//                               echo "'".$items['perform1year'][$i]['bid']."',";
//                                
//                 //               if(($i-1)==count($items['perform1year'])){
////                                    echo "]";
////                                }
// 
//                                                           
//                           }else{
//                                echo "<br>";
//                                    echo $items['perform1year'][$i]['fundname'];
//                                echo "<br>";      
//                                                
//                           }    
//                          
//                        }
//
//                     }
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
                           
                            
                            <script>
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
                                       categories: ['Nov', 'Dec','Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                            'Jul', 'Aug', 'Sep', 'Oct']
                                    },
                                    yAxis: {
                                        title: {
                                            text: 'Bid (Avarage)'
                                        },
                                        plotLines: [{
                                            value: 0,
                                            width: 500,
                                            color: '#808080'
                                        }]
                                    },
                                    tooltip: {
                                        valueSuffix: ''
                                    },
                                    legend: {
                                        //enabled: false,
//                                        floating: true,
//                                        verticalAlign: 'left',
//                                        align:'center',
//                                        y:-30,
//                                        padding:20
                                            layout: 'vertical',
                                            align: 'right',
                                            verticalAlign: 'middle',
                                            borderWidth: 0
                                    },
                                    credits: {
                                          enabled: false
                                    },
                                    series: [
                                        <?php 
                                        
                                        //echo "<pre>";
                                        $i=0;
                                        foreach($this->data['dataPerforms'] as $items){
                                            
                                        ?>
                                        {
                                            name: '<?php echo $items['perform1year'][$i]['fundname'];?>',
                                            data: [<?php print $items['perform1year'][$i]['bid11'];?>, <?php print $items['perform1year'][$i]['bid12'];?>, <?php print $items['perform1year'][$i]['bid1'];?>]
                                        }, 
                                        <?php 
                                        $i++;
                                        } ?>
                                        
                                        {
                                            name: '-',
                                            data: []
                                        }
                                    ]
                                });
                            });
                        </script>   
                        
                               <div id="tablex" style="width: 98%; display: block;">
                                <table id="myTable2" class="display" cellspacing="0" width="100%">
                                    <thead class="title-data"> 
                                    <tr>  
                                        <th class="">FUND NAME</th> 
                                        <th class="">UNIT DATE</th> 
                                        <th class="">BID</th> 
                                        <th class="">OFFER</th>
                                    </tr> 
                                    </thead> 

                                    <div id="title2" style="
                                        top: -3.7%;
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
              
                     
                     
                    var awal=parseInt($('.day1').val())+parseInt($('.month1').val())+parseInt($('.year1').val());
                    var akhir=parseInt($('.day2').val())+parseInt($('.month2').val())+parseInt($('.year2').val())
                     
                    if(akhir<=awal && akhir>13 && akhir!=awal ){
                        alert("Silahkan cek kembali tanggal yang ada masukan")
                    }else{
                    
                    //alert($('.day1').val()+"&month1="+$('.month1').val()+"&year1="+$('.year1').val()+"&day2="+$('.day2').val()+"&month2="+$('.month2').val()+"&year2="+$('.year2').val()+"&fundtype='"+$('.fundtype').val());
                      var dataSets=[];
                      
                      $.ajax({
                            "url" : "/daily-nav/getfilter/",
                            "data" : $(this).serialize() + "&filter=1&day1="+$('.day1').val()+"&month1="+$('.month1').val()+"&year1="+$('.year1').val()+"&day2="+$('.day2').val()+"&month2="+$('.month2').val()+"&year2="+$('.year2').val()+"&fundtype='"+$('.fundtype').val()+"'",
                            "type" : "POST",
                            "success" : function(response){
                                if(response){
                                        var IS_JSON = true;
                                        try
                                        {
    
                                            var new_data = jQuery.parseJSON(response);                                           
                                            var rows;
                                            $('.myTable2_items').html("");
                            
                                            if(new_data.xml_data.length >0){
                                                
                                                for(var i=0; i<new_data.xml_data.length; i++){
                                                    
                        //                                rows+=("<tr>"+ 
//                                                                "<td>"+new_data.xml_data[i]['fundName']+"</td>"+
//                                                                "<td>"+new_data.xml_data[i]['unitdates']+"</td>"+
//                                                                "<td>"+new_data.xml_data[i]['bid']+"</td>"+
//                                                                "<td>"+new_data.xml_data[i]['offer']+"</td>"+
//                                                            "</tr>");
                                                
                                                dataSets.push(new Array(toTitleCase(new_data.xml_data[i]['fundName']),new_data.xml_data[i]['unitdates'],new_data.xml_data[i]['bid'],new_data.xml_data[i]['offer']));
                                            }
                                                
                                            }else{
                                                rows+=("<tr>"+ 
                                                            "<td colspan=4>Data tidak ditemukan</td>"+
                                                        "</tr>");
                                            }
                                           
                                            if ( $.fn.dataTable.isDataTable( '#myTable2' ) ) {
                                                    $('#myTable2').dataTable();
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
                                                  
                                            ///$('.myTable2_items').html(rows);
                                        }
                                        catch(err)
                                        {
                                            IS_JSON = false;
                                        } 
                                        //response action
                                        
                                }
    
                            },
                            "error" : function(response){
    
                            }
                        });//end ajax

                    }
                    
                        
                });

              

               // // Graph Data ##############################################
//                var graphData = [{
//                                        // Visits
//
//                                        // Returning Visits
//                                        data: [ [0, 10],[1, 20],[2, 30],[2, 10],[3, 20],[4, 50],[5, 20],[6, 30],[7, 50],[8, 30],[9, 40],[10, 20],[11, 20],[12, 50], [13, 21], [14, 33], [16, 33], [17, 40], [18, 29], [19, 20], [20, 30], [21, 40],[22, 33], [23, 33], [24, 20], [25, 50] ],
//                                        color: '#77b7c5',
//                                        points: { radius: 4, fillColor: '#77b7c5' }
//                                    }
//                                ];
//
//                // Lines Graph #############################################
//                $.plot($('#graph-lines'), graphData, {
//                    series: {
//                        points: {
//                            show: true,
//                            radius: 1
//                        },
//                        lines: {
//                            show: true
//                        },
//                        shadowSize: 0
//                    },
//                    grid: {
//                        color: '#646464',
//                        borderColor: 'transparent',
//                        borderWidth: 25,
//                        hoverable: true
//                    },
//                    xaxis: {
//                        tickColor: 'transparent',
//                        tickDecimals: 0
//                    },
//                    yaxis: {
//                        tickSize: 2
//                    }
//                });
              

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

                   
                    <!--<p>Return: 3.24% ffff sejak 'dd/mm/yyyy' hingga 'dd/mm/yyyy' adalah xx%</p>-->
                    
                </div>
                    <!--- End Table ------>
                
                
        </div> 
            <!-------Article end ---------->
        
	</div>  
                
</div>
<!-- End of Main -->

<link rel="stylesheet" type="text/css" href="/website/static/inv/js/datatable/jquery.dataTable.css" />
<?php echo $this->template("includes/inv/footer.php")?>    