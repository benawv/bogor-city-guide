<link rel="stylesheet" href="/website/static/inv/css/form.css" />
<script type="text/javascript" src="/website/static/inv/js/autoNumeric.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.auto').autoNumeric('init');
});
</script>

<div class="row bg_grey">
        <div class="container">

            <div class="form_cont">
            
            <div class="wiz">
                <span class="bar_wiz"></span>
                <ul>
                    <li><a href="/investment/financial-planning/cash-flow-tables/income-statement">< IS</a></li>
                    <li id="wiz_1" class="cur"><a href="javascript:void(0);">1</a></li>
                    <li id="wiz_2"><a href="javascript:void(0);">2</a></li>
                    <li id="wiz_3"><a href="javascript:void(0);">3</a></li>
                    <li id="wiz_4"><a href="javascript:void(0);">4</a></li>
                    <li id="wiz_5"><a href="javascript:void(0);">5</a></li>
                    <li id="wiz_6"><a href="javascript:void(0);">6</a></li>
                    <li id="wiz_7"><a href="javascript:void(0);">7</a></li>
                    <li id="wiz_8"><a href="javascript:void(0);">8</a></li>
                    <li id="wiz_9"><a href="javascript:void(0);">9</a></li>

                </ul>
            </div>
            <!-- wiz end -->

            <h1>ASET & KEWAJIBAN</h1>

            <div class="stepform showform" id="step_1">
                <h2>Aset Liquid</h2>

                <table width="100%">
                    <tr>    
                        <td>Kas Tunai</td>
                        <td><input type="text" id="liquid1" class="auto" data-a-sign="Rp "></td>
                    </tr>
                    <tr>    
                        <td>Tabungan</td>
                        <td><input type="text" id="liquid2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Deposito</td>
                        <td><input type="text" id="liquid3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Lainnya</td>
                        <td><input type="text" id="liquid4" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                   
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>    
                        <td></td>
                        <td>
                            <a id="next_2" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- step_1 end -->

            <div class="stepform" id="step_2">
                <h2>Aset Investasi</h2>

                <table width="100%">
                    <tr>    
                        <td>Reksa Dana</td>
                        <td><input type="text" id="investasi1" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Saham</td>
                        <td><input type="text" id="investasi2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Obgligasi</td>
                        <td><input type="text" id="investasi3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Unit Link</td>
                        <td><input type="text" id="investasi4" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Asset Keuangan Lainnya</td>
                        <td><input type="text" id="investasi5" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>    
                        <td><a id="prev_1" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                            <a id="next_3" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- step_2 end -->

            <div class="stepform" id="step_3">
                <h2>Aset Tetap</h2>

                <table width="100%">
                    <tr>    
                        <td>Rumah Investasi</td>
                        <td><input type="text" id="tetap1" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Kendaraan Investasi</td>
                        <td><input type="text" id="tetap2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Lainnya</td>
                        <td><input type="text" id="tetap3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                   
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>    
                        <td><a id="prev_2" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                            <a id="next_4" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- step_3 end -->

            <div class="stepform" id="step_4">
                <h2>Aset Pribadi</h2>

                <table width="100%">
                    <tr>    
                        <td>Rumah Tinggal</td>
                        <td><input type="text" id="pribadi1" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Emas dan Perhiasan</td>
                        <td><input type="text" id="pribadi2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Aset pribadi lainnya</td>
                        <td><input type="text" id="pribadi3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Kendaraan</td>
                        <td><input type="text" id="pribadi4" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                   
                    
                    <tr>    
                        <td><a id="prev_3" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                            <a id="next_5" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- step_4 end -->

            <div class="stepform" id="step_5">
                <h2>Aset Masa Pensiun</h2>

                <table width="100%">
                    <tr>    
                        <td>Jamsostek</td>
                        <td><input type="text" class="auto" id="pensiun1" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Dana Pensiun </td>
                        <td><input type="text" class="auto" id="pensiun2" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Aset Pensiun lainnya</td>
                        <td><input type="text" class="auto" id="pensiun3" data-a-sign="Rp " /></td>
                    </tr>
                    
                   
                    
                    <tr>    
                        <td><a id="prev_4" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                           <a id="next_6" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- step_5 end -->

            <div class="stepform" id="step_6">
                <h2>Hutang Jangka Pendek</h2>

                <table width="100%">
                    <tr>    
                        <td>Kartu Kredit</td>
                        <td><input type="text" class="auto" id="hjp1" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Kredit Tanpa Agunan  </td>
                        <td><input type="text" class="auto" id="hjp2" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Pinjaman lain-lain</td>
                        <td><input type="text" class="auto" id="hjp3" data-a-sign="Rp " /></td>
                    </tr>
                    
                   
                    
                    <tr>    
                        <td><a id="prev_5" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                           <a id="next_7" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- step_6 end -->

             <div class="stepform" id="step_7">
                <h2>Hutang Jangka Panjang</h2>

                <table width="100%">
                    <tr>    
                        <td>Perumahan</td>
                        <td><input type="text" class="auto" id="hjpa1" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Kendaraan  </td>
                        <td><input type="text" class="auto" id="hjpa2" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Pinjaman lain-lain</td>
                        <td><input type="text" class="auto" id="hjpa3" data-a-sign="Rp " /></td>
                    </tr>
                    
                    <tr>    
                        <td><a id="prev_6" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                           <a id="next_8" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- step_7 end -->

            <div class="stepform" id="step_8">
                <h2>Hutang Lainnya</h2>

                <table width="100%">
                    <tr>    
                        <td>Pajak tahunan</td>
                        <td><input type="text" class="auto" id="lainya1" data-a-sign="Rp " /></td>
                    </tr>
                   
                    
                    <tr>    
                        <td><a id="prev_7" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                           <a id="next_9" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png">
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
            <!-- step_8 end -->





            <div class="stepform" id="step_9">
               
                <table width="100%">

                    <tr>
                        <td>Total Aset Liquid</td>
                        <td id="total_liquid" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>Total Aset Investasi</td>
                        <td id="total_investasi" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>Total Aset Tetap</td>
                        <td id="total_tetap"  class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>Total Aset Pribadi</td>
                        <td id="total_pribadi" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>Total Aset masa Pensiun</td>
                        <td id="total_pensiun" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>
                    <tr>
                        <td><b>TOTAL ASET</b></td>
                        <td id="total_asset" class="right"><b>Rp 0</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>

                    <tr>
                        <td>Total Hutang Jangka Pendek</td>
                        <td id="total_hjp" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>Total Hutang Jangka Panjang</td>
                        <td id="total_hjpa" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>Total Hutang lainnya</td>
                        <td id="total_lainnya" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>
                    <tr>
                        <td><b>TOTAL HUTANG</b></td>
                        <td class="right" id="total_hutang"><b>Rp 0</b></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>
                     <tr>
                        <td><b>Kekayaan bersih = Aset - kewajiban</b></td>
                        <td class="right" id="kekayaan_bersih"><b>Rp 0</b></td>
                    </tr>
                    
                    <tr>    
                        <td><a id="prev_8" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td class="next_form">
                          <a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/income-statement" class="right">
                                <img class="right" src="/website/static/inv/images/next.png" />
                          </a>
                        </td>

                    </tr>
                </table>

            </div>
            <!-- step_5 end -->

            </div>

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
            document.cookie = cname + "=" + JSON.stringify(cvalue)+ "; " + expires;
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
            $(".next_form").html("<a href='/investasi/investment-homepage/financial-planning/cash-flow-tables/rasio-finansial' class='right'><img class='right' src='/website/static/inv/images/next.png' /></a>");
         }   
        
        
        $( "#next_9" ).click(function(){
          
        		var liquid1 = 0;
    			var liquid2 = 0;
    			var liquid3 = 0;
    			var liquid4 = 0;
                var total_liquid=0;
                
                 var investasi1 = 0;
    			var investasi2 = 0;
    			var investasi3 = 0;
    			var investasi4 = 0;
    			var investasi5 = 0;
                var total_investasi=0;
                
                var tetap1 = 0;
    			var tetap2 = 0;
    			var tetap3 = 0;
    			var tetap4 = 0;
    			var tetap5 = 0;
                var total_tetap=0;
                
                var pribadi1 = 0;
    			var pribadi2 = 0;
    			var pribadi3 = 0;
    			var pribadi4 = 0;
    			var pribadi5 = 0;
                var total_pribadi=0;
                
                var pensiun1 = 0;
    			var pensiun2 = 0;
    			var pensiun3 = 0;
    			var pensiun4 = 0;
    			var pensiun5 = 0;
                var total_pensiun=0;
                
                var hjp1 = 0;
    			var hjp2 = 0;
    			var hjp3 = 0;
                var total_hjp=0;
                
                var hjpa1 = 0;
    			var hjpa2 = 0;
    			var hjpa3 = 0;
                var total_hjpa=0;
                
                var lainya1 = 0;
                var total_lainya=0;
                
               	var text = $("#liquid1").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			liquid1 =  $('#liquid1').autoNumeric('get');
                if(liquid1==''){
                    liquid1=0;
                }
                
                var text = $("#liquid2").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
                liquid2 =  $('#liquid2').autoNumeric('get');
                if(liquid2==''){
                    liquid2=0;
                }
    
    
               	var text = $("#liquid3").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
                liquid3=  $('#liquid3').autoNumeric('get');
                if(liquid3==''){
                    liquid3=0;
                }
                
               	var text = $("#liquid4").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			liquid4 = $('#liquid3').autoNumeric('get');
                if(liquid4==''){
                    liquid4=0;
                }
    
    		    total_liquid=(parseInt(liquid1)+parseInt(liquid2)+parseInt(liquid3)+parseInt(liquid4));
                $( "#total_liquid" ).html( accounting.formatMoney(total_liquid,'Rp. ',2,'.',','));
                
                
                var text = $("#investasi1").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			investasi1 = $('#investasi1').autoNumeric('get');
                if(investasi1==''){
                    investasi1=0;
                }
                
                var text = $("#investasi2").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			investasi2 = $('#investasi2').autoNumeric('get');
                if(investasi2==''){
                    investasi2=0;
                }
                
                var text = $("#investasi3").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			investasi3 = $('#investasi3').autoNumeric('get');
                if(investasi3==''){
                    investasi3=0;
                }
                
                var text = $("#investasi4").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			investasi4 = $('#investasi4').autoNumeric('get');
                if(investasi4==''){
                    investasi4=0;
                }
                
                var text = $("#investasi5").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			investasi5 = $('#investasi5').autoNumeric('get');
                if(investasi5==''){
                    investasi5=0;
                }
                
                total_investasi=(parseInt(investasi1)+parseInt(investasi2)+parseInt(investasi3)+parseInt(investasi4)+parseInt(investasi5));
                $( "#total_investasi" ).html( accounting.formatMoney(total_investasi,'Rp. ',2,'.',','));
      
               
                var text = $("#tetap1").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			tetap1 = $('#tetap1').autoNumeric('get');
                if(tetap1==''){
                    tetap1=0;
                }    
    
                var text = $("#tetap2").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			tetap2 = $('#tetap2').autoNumeric('get');
                if(tetap2==''){
                    tetap2=0;
                }
                
                var text = $("#tetap3").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			tetap3 = $('#tetap3').autoNumeric('get');
                if(tetap3==''){
                    tetap3=0;
                }
                
                total_tetap=(parseInt(tetap1)+parseInt(tetap2)+parseInt(tetap3));
                $( "#total_tetap" ).html( accounting.formatMoney(total_tetap,'Rp. ',2,'.',','));
    
                var text = $("#pribadi1").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			pribadi1 = $('#pribadi1').autoNumeric('get');
                if(pribadi1==''){
                    pribadi1=0;
                }
                var text = $("#pribadi2").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			pribadi2 = $('#pribadi2').autoNumeric('get');
                if(pribadi2==''){
                    pribadi2=0;
                }
                
                var text = $("#pribadi3").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			pribadi3 = $('#pribadi3').autoNumeric('get');
                if(pribadi3==''){
                    pribadi3=0;
                }
                
                var text = $("#pribadi4").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			pribadi4 = $('#pribadi4').autoNumeric('get');
                if(pribadi4==''){
                    pribadi4=0;
                }
                
                total_pribadi=(parseInt(pribadi1)+parseInt(pribadi2)+parseInt(pribadi3)+parseInt(pribadi4));
                $( "#total_pribadi" ).html( accounting.formatMoney(total_pribadi,'Rp. ',2,'.',','));
               
                
                var text = $("#pensiun1").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			pensiun1 = $('#pensiun1').autoNumeric('get');
                if(pensiun1==''){
                    pensiun1=0;
                }
                
                var text = $("#pensiun2").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			pensiun2 = $('#pensiun2').autoNumeric('get');
                if(pensiun2==''){
                    pensiun2=0;
                }
                
                var text = $("#pensiun3").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			pensiun3 = $('#pensiun3').autoNumeric('get');
                if(pensiun3==''){
                    pensiun3=0;
                }
                
                total_pensiun=(parseInt(pensiun1)+parseInt(pensiun2)+parseInt(pensiun3));
                $( "#total_pensiun" ).html( accounting.formatMoney(total_pensiun,'Rp. ',2,'.',','));
    
    
                var text = $("#hjp1").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			hjp1 = $('#hjp1').autoNumeric('get');
                if(hjp1==''){
                    hjp1=0;
                }
                
                var text = $("#hjp2").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			hjp2 = $('#hjp2').autoNumeric('get');
                if(hjp2==''){
                    hjp2=0;
                }
                
                var text = $("#hjp2").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			hjp2 = $('#hjp2').autoNumeric('get');
                if(hjp2==''){
                    hjp2=0;
                }
                
                total_hjp=(parseInt(hjp1)+parseInt(hjp2)+parseInt(hjp3));
                $( "#total_hjp" ).html( accounting.formatMoney(total_hjp,'Rp. ',2,'.',','));
    
                var text = $("#hjpa1").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			hjpa1 = $('#hjpa1').autoNumeric('get');
                if(hjpa1==''){
                    hjpa1=0;
                }
                
                var text = $("#hjpa2").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			hjpa2 = $('#hjpa2').autoNumeric('get');
                if(hjpa2==''){
                    hjpa2=0;
                }
                
                
                var text = $("#hjpa3").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			hjpa3 = $('#hjpa3').autoNumeric('get');
                if(hjpa3==''){
                    hjpa3=0;
                }
                
                total_hjpa=(parseInt(hjpa1)+parseInt(hjpa2)+parseInt(hjpa3));
                $( "#total_hjpa" ).html( accounting.formatMoney(total_hjpa,'Rp. ',2,'.',','));
                    
                var text = $("#lainya1").val();
    			text = text.replace('Rp. ','');
    			text = text.replace(/\./g,'');
    			text = text.replace(/,/g,'');
    			lainya1 = $('#lainya1').autoNumeric('get');
                if(lainya1==''){
                    lainya1=0;
                }
                
                total_lainnya=(parseInt(lainya1));
                $( "#total_lainnya" ).html( accounting.formatMoney(total_lainnya,'Rp. ',2,'.',','));
    
                
                var total_asset=total_liquid+total_investasi+total_tetap+total_pribadi+total_pensiun;
                $( "#total_asset" ).html( accounting.formatMoney(total_asset,'Rp. ',2,'.',','));
    
                var total_hutang=total_hjp+total_hjpa+total_lainnya;
                $( "#total_hutang" ).html( accounting.formatMoney(total_hutang,'Rp. ',2,'.',','));
                
                var kekayaan_bersih=total_asset-total_hutang;
                $( "#kekayaan_bersih" ).html( accounting.formatMoney(kekayaan_bersih,'Rp. ',2,'.',','));
                
                /*===========SET Cookies kue kue============*/
           
                var q1= {"form1": liquid1, "form2":liquid2, "form3":liquid3, "form4":liquid4};
                var q2= {"form1": investasi1, "form2":investasi2, "form3":investasi3, "form4":investasi4, "form5":investasi5};
                var q3= {"form1": tetap1, "form2":tetap2, "form3":tetap3};
                var q4= {"form1": pribadi1, "form2": pribadi2, "form3": pribadi3, "form4": pribadi4};
                var q5= {"form1": pensiun1, "form2": pensiun2, "form3": pensiun3};
                var q6= {"form1": hjp1, "form2": hjp2, "form3": hjp3};
                var q7= {"form1": hjpa1, "form2": hjpa2, "form3": hjpa3};
                var q8= {"form1": lainya1};
     
                var cbalanced={ "question1":q1, 
                                "question2":q2, 
                                "question3":q3, 
                                "question4":q4, 
                                "question5":q5, 
                                "question6":q6, 
                                "question7":q7, 
                                "question8":q8,
                                "total_liquid":total_liquid,
                                "total_hutang":total_hutang,
                                "kekayaan_bersih":kekayaan_bersih,
                                "total_asset":total_asset
                                }
                setCookie('cbalanced',cbalanced,1); 
                
                /*=========ENDSET Cookies kue kue============*/
            
            });

        
        
    <?php
        for ($i = 1; $i <= 10; $i++) {
    ?>
        $("#next_<?php echo $i ?>").click(function(){
            $(".stepform").hide();
            $("#step_<?php echo $i ?>").fadeIn();
            $(".wiz li").removeClass();
            $("#wiz_<?php echo $i ?>").addClass("cur");
          });
    <?php
        }
    ?>

    <?php
        for ($i = 1; $i <= 10; $i++) {
    ?>
        $("#prev_<?php echo $i ?>").click(function(){
            $(".stepform").hide();
            $("#step_<?php echo $i ?>").fadeIn();
            $(".wiz li").removeClass();
            $("#wiz_<?php echo $i ?>").addClass("cur");
          });
    <?php
        }
    ?>

    <?php
        for ($i = 1; $i <= 10; $i++) {
    ?>
        $("#wiz_<?php echo $i ?>").click(function(){
            $(".stepform").hide();
            $("#step_<?php echo $i ?>").fadeIn();
            $(".wiz li").removeClass();
            $("#wiz_<?php echo $i ?>").addClass("cur");
          });
    <?php
        }
    ?>

 

  $("#submit").click(function(){
    $(".stepform").hide();
    $("#step_7").fadeIn();
  });
  

})
</script>

