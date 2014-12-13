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

            <h1>ASET &amp; KEWAJIBAN</h1>

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
                <h2>Financial Ratio</h2>

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
                        <td>
                          <a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/income-statement" class="right">Lanjutkan dengan mengisi Income Statement &#187;</a>
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
            
           
            var text = $("#liquid2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
            liquid2 =  $('#liquid2').autoNumeric('get');

           	var text = $("#liquid3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
            liquid3=  $('#liquid3').autoNumeric('get');
            
           	var text = $("#liquid4").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			liquid4 = $('#liquid3').autoNumeric('get');

		    total_liquid=(parseInt(liquid1)+parseInt(liquid2)+parseInt(liquid3)+parseInt(liquid4));
            $( "#total_liquid" ).html( accounting.formatMoney(total_liquid,'Rp. ',2,'.',','));
            
            
            var text = $("#investasi1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			investasi1 = $('#investasi1').autoNumeric('get');
            
            var text = $("#investasi2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			investasi2 = $('#investasi2').autoNumeric('get');
            
            var text = $("#investasi3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			investasi3 = $('#investasi3').autoNumeric('get');
            
            var text = $("#investasi4").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			investasi4 = $('#investasi4').autoNumeric('get');
   
            var text = $("#investasi5").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			investasi5 = $('#investasi5').autoNumeric('get');

            total_investasi=(parseInt(investasi1)+parseInt(investasi2)+parseInt(investasi3)+parseInt(investasi4)+parseInt(investasi5));
            $( "#total_investasi" ).html( accounting.formatMoney(total_investasi,'Rp. ',2,'.',','));
  
           
            var text = $("#tetap1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			tetap1 = $('#tetap1').autoNumeric('get');
                

            var text = $("#tetap2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			tetap2 = $('#tetap2').autoNumeric('get');
            
            var text = $("#tetap3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			tetap3 = $('#tetap3').autoNumeric('get');
            
            total_tetap=(parseInt(tetap1)+parseInt(tetap2)+parseInt(tetap3));
            $( "#total_tetap" ).html( accounting.formatMoney(total_tetap,'Rp. ',2,'.',','));

            var text = $("#pribadi1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pribadi1 = $('#pribadi1').autoNumeric('get');

            var text = $("#pribadi2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pribadi2 = $('#pribadi2').autoNumeric('get');

            var text = $("#pribadi3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pribadi3 = $('#pribadi3').autoNumeric('get');

            var text = $("#pribadi4").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pribadi4 = $('#pribadi4').autoNumeric('get');

            total_pribadi=(parseInt(pribadi1)+parseInt(pribadi2)+parseInt(pribadi3)+parseInt(pribadi4));
            $( "#total_pribadi" ).html( accounting.formatMoney(total_pribadi,'Rp. ',2,'.',','));
           
            
            var text = $("#pensiun1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pensiun1 = $('#pensiun1').autoNumeric('get');
            
            var text = $("#pensiun2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pensiun2 = $('#pensiun2').autoNumeric('get');
            
            var text = $("#pensiun3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pensiun3 = $('#pensiun3').autoNumeric('get');
           
            total_pensiun=(parseInt(pensiun1)+parseInt(pensiun2)+parseInt(pensiun3));
            $( "#total_pensiun" ).html( accounting.formatMoney(total_pensiun,'Rp. ',2,'.',','));


            var text = $("#hjp1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			hjp1 = $('#hjp1').autoNumeric('get');
            
            var text = $("#hjp2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			hjp2 = $('#hjp2').autoNumeric('get');
            
            var text = $("#hjp2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			hjp2 = $('#hjp2').autoNumeric('get');
           
            total_hjp=(parseInt(hjp1)+parseInt(hjp2)+parseInt(hjp3));
            $( "#total_hjp" ).html( accounting.formatMoney(total_hjp,'Rp. ',2,'.',','));

            var text = $("#hjpa1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			hjpa1 = $('#hjpa1').autoNumeric('get');
            
            var text = $("#hjpa2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			hjpa2 = $('#hjpa2').autoNumeric('get');
            
            var text = $("#hjpa3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			hjpa3 = $('#hjpa3').autoNumeric('get');
           
            total_hjpa=(parseInt(hjpa1)+parseInt(hjpa2)+parseInt(hjpa3));
            $( "#total_hjpa" ).html( accounting.formatMoney(total_hjpa,'Rp. ',2,'.',','));
                
            var text = $("#lainya1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			lainya1 = $('#lainya1').autoNumeric('get');
            
            total_lainnya=(parseInt(lainya1));
            $( "#total_lainnya" ).html( accounting.formatMoney(total_lainnya,'Rp. ',2,'.',','));

            
            var total_asset=total_liquid+total_investasi+total_tetap+total_pribadi+total_pensiun;
            $( "#total_asset" ).html( accounting.formatMoney(total_asset,'Rp. ',2,'.',','));

           var total_hutang=total_hjp+total_hjpa+total_lainnya;
           $( "#total_hutang" ).html( accounting.formatMoney(total_hutang,'Rp. ',2,'.',','));
            
            var kekayaan_bersih=total_asset-total_hutang;
            $( "#kekayaan_bersih" ).html( accounting.formatMoney(kekayaan_bersih,'Rp. ',2,'.',','));
            });
                /*
                


                $("#hjp1").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
                 
                 
                $("#hjp2").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   


                $("#hjp3").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   


                $("#hjpa1").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   

                $("#hjpa2").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
                
                $("#hjpa3").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });
                
                $("#hjpa4").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });
                
                $("#lainya1").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });
*/
  //              total_liquid=
  //  });
    
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
