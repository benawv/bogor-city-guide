<?php echo $this->template("includes/inv/header.php")?>


<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/ui.theme.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/flaticon/flaticon.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/component.css" type="text/css" media="all" />    
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/demo.css" type="text/css" media="all" />  
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/normalize.css" type="text/css" media="all" />  
<link rel="stylesheet" href="/website/static/inv/js/tablesorter/style.css" type="text/css" media="all" /> 

<script src="/website/static/inv/js/rangeslider/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.tools.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.sticky.js" type="text/javascript"></script>
    
<script src="/website/static/inv/js/rangeslider/jquery.min.js" type="text/javascript"></script>     
<script src="/website/static/inv/js/rangeslider/jquery-ui.min.js" type="text/javascript"></script>
     
<script src="/website/static/inv/js/tablesorter/jquery-latest.js" type="text/javascript"></script>
<script src="/website/static/inv/js/tablesorter/jquery.tablesorter.js" type="text/javascript"></script>   


<script type="text/javascript">
	$(function() {		
		$("#myTable").tablesorter({sortList:[[0,0],[2,1]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	});	
</script>  
    
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "16852030-1a9b-4882-8731-4afd4c1cfd9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

    
<div role="main" class="main no-gutter">
    
    <div class="bg100 blue-color">
       <div class="container">
           <h1 class="article-title">Daily Nav</h1> 
        </div>   
        
    </div> 
    
	<div class="container boxes-view">
		
		<div id="#" class="article-wrap">
            <?php echo $this->template("includes/inv/breadcrumb.php")?>
			<div class="wrap30">
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
                    
                    <table id="myTable" class="tablesorter"> 
                        <thead> 
                        <tr> 
                            <th></th> 
                            <th class="header headerSortDown">Fund Name</th> 
                            <th class="header">Type</th> 
                            <th class="header">1M</th> 
                            <th class="header">3M</th> 
                            <th class="header">YTD</th>
                            <th class="header">1Y</th>
                        </tr> 
                        </thead> 
                        <tbody> 
                        <tr> 
                            <td><input type="checkbox"></td>
                            <td class="blue-type">AAA Enhanced Strategy Fund</td> 
                            <td>EF (RU)</td> 
                            <td>1.14</td> 
                            <td>-0.59</td> 
                            <td>25.40</td> 
                            <td>24.85</td> 
                        </tr>     
                        <tr> 
                            <td><input type="checkbox"></td>
                            <td class="blue-type" >AAA Enhanced Strategy Fund2</td> 
                            <td>EF (RU)</td> 
                            <td>1.14</td> 
                            <td>-0.59</td> 
                            <td>25.40</td> 
                            <td>24.85</td> 
                        </tr> 
                        <tr> 
                            <td><input type="checkbox"></td>
                            <td class="blue-type" >AAA Enhanced Strategy Fund3</td> 
                            <td>EF (RU)</td> 
                            <td>1.14</td> 
                            <td>-0.59</td> 
                            <td>25.40</td> 
                            <td>24.85</td> 
                        </tr> 
                        <tr> 
                            <td><input type="checkbox"></td>
                            <td class="blue-type">AAA Enhanced Strategy Fund4</td> 
                            <td>EF (RU)</td> 
                            <td>1.14</td> 
                            <td>-0.59</td> 
                            <td>25.40</td> 
                            <td>24.85</td> 
                        </tr> 
                        <tr> 
                            <td><input type="checkbox"></td>
                            <td class="blue-type">AAA Enhanced Strategy Fund5</td> 
                            <td>EF (RU)</td> 
                            <td>1.14</td> 
                            <td>-0.59</td> 
                            <td>25.40</td> 
                            <td>24.85</td> 
                        </tr> 
                        <tr> 
                            <td><input type="checkbox"></td>
                            <td class="blue-type">AAA Enhanced Strategy Fund6</td> 
                            <td>EF (RU)</td> 
                            <td>1.14</td> 
                            <td>-0.59</td> 
                            <td>25.40</td> 
                            <td>24.85</td> 
                        </tr> 
                        <tr> 
                            <td><input type="checkbox"></td>
                            <td class="blue-type">AAA Enhanced Strategy Fund7</td> 
                            <td>EF (RU)</td> 
                            <td>1.14</td> 
                            <td>-0.59</td> 
                            <td>25.40</td> 
                            <td>24.85</td> 
                        </tr>  
                        <tr> 
                            <td><input type="checkbox"></td>
                            <td class="blue-type">AAA Enhanced Strategy Fund8</td> 
                            <td>EF (RU)</td> 
                            <td>1.14</td> 
                            <td>-0.59</td> 
                            <td>25.40</td> 
                            <td>24.85</td> 
                        </tr> 
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
                    <select class="span1 blue-color">
                        <option>1</option>
                        <option>2</option>
                    </select>
                   <select class="span1 blue-color">
                        <option>Jan</option>
                       <option>Feb</option>
                       <option>Mar</option>
                       <option>Apr</option>
                       <option>May</option>
                       <option>Jun</option>
                       <option>Jul</option>
                       <option>Aug</option>
                       <option>Sep</option>
                       <option>Oct</option>
                       <option>Nop</option>
                       <option>Des</option>
                    </select>
                   <select class="span1 blue-color">
                        <option>2014</option>
                    </select>
                </div>
               
               <div class="wrap30 left">
                   <h5 class="top">Hingga</h5>
                    <select class="span1 blue-color">
                        <option>1</option>
                        <option>2</option>
                    </select>
                   <select class="span1 blue-color">
                        <option>Jan</option>
                       <option>Feb</option>
                       <option>Mar</option>
                       <option>Apr</option>
                       <option>May</option>
                       <option>Jun</option>
                       <option>Jul</option>
                       <option>Aug</option>
                       <option>Sep</option>
                       <option>Oct</option>
                       <option>Nop</option>
                       <option>Des</option>
                    </select>
                   <select class="span1 blue-color">
                        <option>2014</option>
                    </select>
                </div>
               
               <div class="wrap30 left">
                   <h5 class="top">Jenis Fund</h5>
                    <select class="span2 blue-color">
                        <option>SmartWealth Equity Fund</option>
                        <option>SmartWealth Equity Fund</option>
                    </select>
                   
                </div>
               
               <div class="wrap10 left">
                   <h5 class="top" style="visibility:hidden">Dari</h5>
                    <input class="select-btn blue-color" type="button" value="Lihat harga unit">
                   
                </div>
               
            </div>
            
        </div> 
            <!-------Article end ---------->

<script src="_assets/css/rangeslider/1.7.2-jquery.min.js"></script>
<script src="_assets/css/rangeslider/jquery.flot.min.js"></script>  
        
        <div id="#" class="article-wrap bottom">
           
               <div class="table-wrap">
                   
                     <div class="title-chart">
                            Nav Graph for Bond FUND (01/11/2014 - 08/12/2014)
                            <a href="#" id="bars"><span></span></a>
                            <a href="#" id="lines" class="active"><span></span></a>
                    </div>
                   
                    <!-- Graph HTML -->
                    <div id="graph-wrapper">
<!--
                        <div class="graph-info">

                            <a href="javascript:void(0)" class="visitors">Visitors</a>
                            <a href="javascript:void(0)" class="returning">Returning Visitors</a>



                            <a href="#" id="bars"><span></span></a>
                            <a href="#" id="lines" class="active"><span></span></a>

                        </div>
-->

                        <div class="graph-container">
                            <div id="graph-lines"></div>
                            <div id="graph-bars"></div>
                            
                            <!--------- Table nab daily----------------->
                   
                           <table id="myTable2" class="tablesorter2"> 
                                <thead> 
                                <tr>  
                                    <th class="">FUND NAME</th> 
                                    <th class="">UNIT DATE</th> 
                                    <th class="">BID</th> 
                                    <th class="">OFFER</th>
                                    <th class="">
                                        <a href="#" id="bars" class="active"><span></span></a>
                                        <a href="#" id="lines2"><span></span></a>
                                    </th>
                                    
                                </tr> 
                                </thead> 
                                <tbody> 
                                <tr> 
                                    <td>IDR - SmartWealth Equity Fund</td> 
                                    <td>12/01/2014</td> 
                                    <td>2,235.1000</td> 
                                    <td>2,235.1000</td> 
                                    <td> </td>
                                    
                                </tr>     
                                <tr> 
                                    <td>IDR - SmartWealth Equity Fund</td> 
                                    <td>12/01/2014</td> 
                                    <td>2,235.1000</td> 
                                    <td>2,235.1000</td> 
                                    <td> </td>
                                    
                                </tr>  
                                <tr> 
                                    <td>IDR - SmartWealth Equity Fund</td> 
                                    <td>12/01/2014</td> 
                                    <td>2,235.1000</td> 
                                    <td>2,235.1000</td>
                                    <td> </td>
                                    
                                </tr>  
                                <tr> 
                                    <td>IDR - SmartWealth Equity Fund</td> 
                                    <td>12/01/2014</td> 
                                    <td>2,235.1000</td> 
                                    <td>2,235.1000</td> 
                                    <td> </td>
                                    
                                </tr>  
                                <tr> 
                                    <td>IDR - SmartWealth Equity Fund</td> 
                                    <td>12/01/2014</td> 
                                    <td>2,235.1000</td> 
                                    <td>2,235.1000</td> 
                                    <td> </td>
                                    
                                </tr>  
                                <tr> 
                                    <td>IDR - SmartWealth Equity Fund</td> 
                                    <td>12/01/2014</td> 
                                    <td>2,235.1000</td> 
                                    <td>2,235.1000</td> 
                                    <td> </td>
                                    
                                </tr>  
                                <tr> 
                                    <td>IDR - SmartWealth Equity Fund</td> 
                                    <td>12/01/2014</td> 
                                    <td>2,235.1000</td> 
                                    <td>2,235.1000</td> 
                                    <td> </td>
                                    
                                </tr>  
                                <tr> 
                                    <td>IDR - SmartWealth Equity Fund</td> 
                                    <td>12/01/2014</td> 
                                    <td>2,235.1000</td> 
                                    <td>2,235.1000</td>
                                    <td> </td>
                                    
                                </tr>  
                                </tbody> 
                            </table> 
                            
<!--                            <p class="footnote">Return: 3.24% ffff sejak 'dd/mm/yyyy' hingga 'dd/mm/yyyy' adalah xx%</p>-->

                            <!--------- Table nab daily----------------->
                            
                        </div>
                    </div>
                    <!-- end Graph HTML -->
                   
                   
                    <script>
                    $(document).ready(function () {

                        // Graph Data ##############################################
                        var graphData = [{
                                // Visits
                                
                                // Returning Visits
                                data: [ [0, 50], [1, 21], [1.3, 33], [2.1, 33], [2.6, 40], [3, 29], [4, 20], [5, 30], [5.2, 40],[5.9, 33], [6.6, 33], [7, 20], [7.5, 50] ],
                                color: '#77b7c5',
                                points: { radius: 4, fillColor: '#77b7c5' }
                            }
                        ];

                        // Lines Graph #############################################
                        $.plot($('#graph-lines'), graphData, {
                            series: {
                                points: {
                                    show: true,
                                    radius: 5
                                },
                                lines: {
                                    show: true
                                },
                                shadowSize: 0
                            },
                            grid: {
                                color: '#646464',
                                borderColor: 'transparent',
                                borderWidth: 20,
                                hoverable: true
                            },
                            xaxis: {
                                tickColor: 'transparent',
                                tickDecimals: 0
                            },
                            yaxis: {
                                tickSize: 5
                            }
                        });

                        // Bars Graph ##############################################
                        $.plot($('#graph-bars'), graphData, {
                            series: {
                                bars: {
                                    show: true,
                                    barWidth: .9,
                                    align: 'center'
                                },
                                shadowSize: 0
                            },
                            grid: {
                                color: '#646464',
                                borderColor: 'transparent',
                                borderWidth: 20,
                                hoverable: true
                            },
                            xaxis: {
                                tickColor: 'transparent',
                                tickDecimals: 2
                            },
                            yaxis: {
                                tickSize: 1000
                            }
                        });

                        // Graph Toggle ############################################
                        $('#graph-bars').hide();
                        $('#myTable2').hide();
                        $('.footnote').hide();

                        $('#lines').on('click', function (e) {
                            $('#bars').removeClass('active');
                            $('#myTable2').fadeOut();
                            $(this).addClass('active');
                            $('#graph-lines').show();
                            $('.footnote').hide();
                            e.preventDefault();
                        });
                        
                        $('#lines2').on('click', function (e) {
                            $('#bars').removeClass('active');
                            $('#myTable2').hide();
                            $(this).addClass('active');
                            $('#graph-lines').show();
                            $('.title-chart').show();
                            $('.footnote').hide();
                            e.preventDefault();
                        });
                        
                        $('#bars').on('click', function (e) {
                            $('#lines').removeClass('active');
                            $('#graph-lines').hide();
                            $('.title-chart').hide();
                            $(this).addClass('active');
                            $('#myTable2').show().removeClass('hidden');
                            $('.footnote').fadeIn().removeClass('hidden');
                            e.preventDefault();
                        });
                        
                        

                        // Tooltip #################################################
                        function showTooltip(x, y, contents) {
                            $('<div id="tooltips">' + contents + '</div>').css({
                                top: y - 16,
                                left: x + 20
                            }).appendTo('body').fadeIn();
                        }

                        var previousPoint = null;

                        $('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
                            if (item) {
                                if (previousPoint != item.dataIndex) {
                                    previousPoint = item.dataIndex;
                                    $('#tooltips').remove();
                                    var x = item.datapoint[0],
                                        y = item.datapoint[1];
                                        showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
                                }
                            } else {
                                $('#tooltips').remove();
                                previousPoint = null;
                            }
                        });

                    });
                    </script>
                   
                   <p>Return: 3.24% ffff sejak 'dd/mm/yyyy' hingga 'dd/mm/yyyy' adalah xx%</p>
                    
                </div>
                    <!--- End Table ------>
                
                
        </div> 
            <!-------Article end ---------->
        
	</div>  
                
</div>
<!-- End of Main -->


<!-- End of Footer -->
<script type="text/javascript">
	function navigateMe(anchor)
	{
	
			$(".pagenav .navi li").removeClass('aktif');
			var element = $("." + anchor);
			element.addClass('aktif');
		
			//alert($(".heading").offset().top);
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
		      	$('html, body').animate({scrollTop:$("#"+anchor).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+anchor).offset().top-90}, 500);
			}
	}
	
	$(document).ready(function(){
		$(".pagenav .navi li").click(function(){
			$(".pagenav .navi li").removeClass('aktif');
			$(this).addClass('aktif');
			
	      	var data = $(this).attr('class');
	      	var id = data.split(' ');
	      	//alert($(".heading").offset().top);
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
		      	$('html, body').animate({scrollTop:$("#"+id[0]).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+id[0]).offset().top-90}, 500);
			}
		});
		var hash = document.URL.substr(document.URL.indexOf('#'));
		var id_hash = hash.split('#');
		
		if(id_hash.length=='1')
		{
			
		}
		else
		{
			$(".pagenav .navi li").removeClass('aktif');
			var element = $("." + id_hash[1]);
			element.addClass('aktif');
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
			$('html, body').animate({scrollTop:$("#"+id_hash[1]).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+id_hash[1]).offset().top-90}, 500);
			}
		}
		
		$('.kiri .tab').click(function(){
			$('.kiri .tab').removeClass('aktif_tab');
			$(this).addClass('aktif_tab');
			$('.kiri .tab span').removeClass('row');
			$('.kiri .tab span').addClass('icon');
			$('.kiri .aktif_tab span').removeClass('icon');
			$('.kiri .aktif_tab span').addClass('row');
			var id = $(this).attr('id');
			
			$('.kanan div').removeClass('aktif_konten');
			$('.kanan div').addClass('hidden');
			$('.kanan .'+id).removeClass('hidden');
			$('.kanan .'+id).addClass('aktif_konten');
		});
		
		
		$('.kiri2 .tab').click(function(){
			$('.kiri2 .tab').removeClass('aktif_tab');
			$(this).addClass('aktif_tab');
			$('.kiri2 .tab span').removeClass('row');
			$('.kiri2 .tab span').addClass('icon');
			$('.kiri2 .aktif_tab span').removeClass('icon');
			$('.kiri2 .aktif_tab span').addClass('row');
			var id = $(this).attr('id');
			
			$('.kanan2 div').removeClass('aktif_konten');
			$('.kanan2 div').addClass('hidden');
			$('.kanan2 .'+id).removeClass('hidden');
			$('.kanan2 .'+id).addClass('aktif_konten');
		});
	});
</script>
<?php echo $this->template("includes/inv/footer.php")?>    