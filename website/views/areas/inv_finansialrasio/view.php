
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

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "16852030-1a9b-4882-8731-4afd4c1cfd9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>    


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
                            <td class="td-blue-sky">Total Aset Likuid / Total Pengeluaran Bulana</td> 
                            <td class="td-blue">3 - 6 BULAN</td> 
                            <td class="td-blue-sky likuiditas"><a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/income-statement">Isi laporan arus kas untuk melengkapi > </a></td> 
                            
                        </tr>       
                       <tr> 
                            <td class="td-blue">ASET LIKUID</td> 
                            <td class="td-blue-sky">Total Aset Liqud / Nilai Bersih Kekayaan</td> 
                            <td class="td-blue">MAKSIMAL 15%</td> 
                            <td class="td-blue-sky aset_likuid"><a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/income-statement">Isi laporan arus kas untuk melengkapi > </a></td> 
                            
                        </tr>    
                       <tr> 
                            <td class="td-blue">HUTANG TERHADAP ASET</td> 
                            <td class="td-blue-sky">Hutang / Aset</td> 
                            <td class="td-blue">MAKSIMAL 50%</td> 
                            <td class="td-blue-sky hutang_aset"><a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/balanced-sheet">Isi laporan neraca untuk melengkapi > </a></td> 
                            
                        </tr>    
                        <tr> 
                            <td class="td-blue">TOTAL INVESTASI TERHADAP KEKAYAAN BERSIH</td> 
                            <td class="td-blue-sky">Total Aset Investasi/Nilai Bersih Kekayaan</td> 
                            <td class="td-blue">> 50%</td> 
                            <td class="td-blue-sky investasi"><a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/balanced-sheet">Isi laporan neraca untuk melengkapi > </a></td> 
                            
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
        
         var is_cbalanced=getCookie('cbalanced');
         var is_cincomestatment=getCookie('cincomestatment'); 
         
         var getCbalanced=JSON.parse(is_cbalanced);
         var getCincomestatment=JSON.parse(is_cincomestatment);
         
         var liquid=getCbalanced.total_liquid;
         var kekayaan_bersih=getCbalanced.kekayaan_bersih;
         var tbulanan=getCincomestatment.total_pengeluaran;
         var thutang=getCbalanced.total_hutang;
         var thutang=getCbalanced.total_hutang;
         var tasset=getCbalanced.total_asset;
         
            //Total Aset Likuid / Total Pengeluaran Bulana
            var akhir1=
             $('.likuiditas').html(parseInt(liquid)/parseInt(tbulanan));
             $('.aset_likuid').html(Math.round(parseInt(liquid)/parseInt(kekayaan_bersih)*100)+"%");
             $('.hutang_aset').html(Math.round(parseInt(thutang)/parseInt(kekayaan_bersih)*100)+"%");
             $('.investasi').html(Math.round(parseInt(tasset)/parseInt(kekayaan_bersih)*100)+"%");
//         console.log(is_cincomestatment); 

           
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

