
<script src="/website/static/inv/js/tablesorter/jquery.tablesorter.js" type="text/javascript"></script>   
<link rel="stylesheet" href="/website/static/inv/js/tablesorter/style.css" /> 

<link rel="stylesheet" href="/website/static/inv/css/form.css" />
<script type="text/javascript" src="/website/static/inv/js/autoNumeric.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.auto').autoNumeric('init');
});
</script>

<script type="text/javascript">
	$(function() {		
		$("#myTable").tablesorter({sortList:[[0,0],[2,1]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	});	
</script>    

<div class="row bg_grey">
        <div class="container">
        <div id="#" class="article-wrap bottom">
           
            <div class="tag-non-top-border">
                    <div class="tag-left">
                        <h4>Tabel Laporan Keuangan</h4>
                    </div>
                    <div class="tag-right">
                        <span class='st_sharethis' displayText='ShareThis'></span>
                        <span class='st_facebook' displayText=''></span>
                        <span class='st_twitter' displayText=''></span>
                        <span class='st_linkedin' displayText=''></span>
                        <span class='st_pinterest' displayText=''></span>
                        <span class='st_email' displayText=''></span>
                    </div>
            </div>
            
             <div class="table-wrap">
                    
                    <table id="myTable2" class="tablesorter3 tbl-rasio"> 
                        <thead> 
                        <tr>  
                            <th class="">RASIO</th> 
                            <th class="">PERHITUNGAN</th> 
                            <th class="">IDEAL</th> 
                            <th class="">AKTUAL</th>
                        </tr> 
                        </thead> 
                        <tbody> 
                        <tr> 
                            <td class="td-blue">LIKUIDITAS</td> 
                            <td class="td-blue-sky">KAS DAN SETARA KAS PENGELUARAN</td> 
                            <td class="td-blue">3 - 6 BULAN</td> 
                            <td class="td-blue-sky"><a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/income-statement">Isi laporan arus kas untuk melengkapi > </a></td> 
                            
                        </tr>       
                       <tr> 
                            <td class="td-blue">ASET LIKUID</td> 
                            <td class="td-blue-sky">KAS DAN SETARA KAS PENGELUARAN</td> 
                            <td class="td-blue">MAKSIMAL 15%</td> 
                            <td class="td-blue-sky"><a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/income-statement">Isi laporan arus kas untuk melengkapi > </a></td> 
                            
                        </tr>    
                       <tr> 
                            <td class="td-blue">DEBT TO ASSET</td> 
                            <td class="td-blue-sky">KAS DAN SETARA KAS PENGELUARAN</td> 
                            <td class="td-blue">MAKSIMAL 50%</td> 
                            <td class="td-blue-sky"><a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/balanced-sheet">Isi laporan neraca untuk melengkapi > </a></td> 
                            
                        </tr>    
                        <tr> 
                            <td class="td-blue">NET INVESTMENT ASSET TO NET WORTH RATIO</td> 
                            <td class="td-blue-sky">KAS DAN SETARA KAS PENGELUARAN</td> 
                            <td class="td-blue">> 50%</td> 
                            <td class="td-blue-sky"><a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/balanced-sheet">Isi laporan neraca untuk melengkapi > </a></td> 
                            
                        </tr>  
                        
                        </tbody> 
                    </table> 
                   
                    
                </div>
                    <!--- End Table ------>
            			
		</div>
		<!-- merchandise end -->

        </div>
        <!-- container end -->
	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->

<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
            }
            return "";
        }
        
         var is_cincomestatment=getCookie('cincomestatment'); 
         if(is_cincomestatment!=''){
            $(".next_form").html("<a href='/investasi/investment-homepage/financial-planning/cash-flow-tables/rasio-finansial' class='right'>Lanjutkan Financial rasio</a>");
         }   
        
        
        /*=========ENDSET Cookies kue kue============*/
            
        
    $("#prev_1").click(function(){
    $(".stepform").hide();
    $("#step_1").fadeIn();
  });

$("#prev_2").click(function(){
    $(".stepform").hide();
    $("#step_2").fadeIn();
  });

  $("#prev_3").click(function(){
    $(".stepform").hide();
    $("#step_3").fadeIn();
  });

  $("#prev_4").click(function(){
    $(".stepform").hide();
    $("#step_4").fadeIn();
  });

  $("#prev_5").click(function(){
    $(".stepform").hide();
    $("#step_5").fadeIn();
  });

  $("#prev_6").click(function(){
    $(".stepform").hide();
    $("#step_6").fadeIn();
  });

  $("#prev_7").click(function(){
    $(".stepform").hide();
    $("#step_7").fadeIn();
  });

  $("#prev_8").click(function(){
    $(".stepform").hide();
    $("#step_8").fadeIn();
  });

  $("#next_2").click(function(){
    $(".stepform").hide();
    $("#step_2").fadeIn();
  });

  $("#next_3").click(function(){
    $(".stepform").hide();
    $("#step_3").fadeIn();
  });

  $("#next_4").click(function(){
    $(".stepform").hide();
    $("#step_4").fadeIn();
  });

  $("#next_5").click(function(){
    $(".stepform").hide();
    $("#step_5").fadeIn();
  });

  $("#next_6").click(function(){
    $(".stepform").hide();
    $("#step_6").fadeIn();
  });

  $("#next_7").click(function(){
    $(".stepform").hide();
    $("#step_7").fadeIn();
  }); 
  $("#next_8").click(function(){
    $(".stepform").hide();
    $("#step_8").fadeIn();
  });

  $("#next_9").click(function(){
    $(".stepform").hide();
    $("#step_9").fadeIn();
  });

  $("#submit").click(function(){
    $(".stepform").hide();
    $("#step_7").fadeIn();
  });
  

})
</script>

