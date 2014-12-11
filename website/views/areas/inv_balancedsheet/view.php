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
                        <td><input type="text" class="auto" id="hjp2" data-a-sign="Rp " /></td>
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
                        <td id="total_liquid" class="right">Rp 3,000,000,0000</td>
                    </tr>
                    <tr>
                        <td>Total Aset Investasi</td>
                        <td id="total_invest" class="right">Rp 4,000,000,000</td>
                    </tr>
                    <tr>
                        <td>Total Aset Tetap</td>
                        <td id="total_tetap"  class="right">Rp 1,600,000,000</td>
                    </tr>
                    <tr>
                        <td>Total Aset Pribadi</td>
                        <td id="total_pribadi" class="right">Rp 4,500,000,000</td>
                    </tr>
                    <tr>
                        <td>Total Aset masa Pensiun</td>
                        <td id="total_pensiun" class="right">Rp 3,000,000,000</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>
                    <tr>
                        <td><b>TOTAL ASET</b></td>
                        <td id="total_aset" class="right"><b>Rp 16,100,000,000</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>

                    <tr>
                        <td>Total Hutang Jangka Pendek</td>
                        <td id="total_hjpedek" class="right">Rp 1,000,000,000</td>
                    </tr>
                    <tr>
                        <td>Total Hutang Jangka Panjang</td>
                        <td id="total_hjpanjang" class="right">Rp 2,000,000,000</td>
                    </tr>
                    <tr>
                        <td>Total Hutang lainnya</td>
                        <td id="total_lainnya" class="right">Rp 100,000,000</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>
                    <tr>
                        <td><b>TOTAL HUTANG</b></td>
                        <td class="right" id="total_hutang"><b>Rp 3,100,000,000</b></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>
                     <tr>
                        <td><b>Kekayaan bersih = Aset - kewajiban</b></td>
                        <td class="right" id="kekayaan_bersih"><b>Rp 5,200,000,000</b></td>
                    </tr>
                    
                    <tr>    
                        <td><a id="prev_8" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                          <a href="incomestatement.php" class="right">Lanjutkan dengan mengisi Income Statement &#187;</a>
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

<script type="text/javascript">
$(document).ready(function(){
    
    $( "#next_9" ).click(function(){
        var total_liquid=$("#liquid1").val()+$("#liquid2").val()+$("#liquid3").val()+$("#liquid4").val();
        
       	function fp_cashflow(pendapatan, tabungan){
				var result = Number(tabungan) / Number(pendapatan) * 100;
				return result.toFixed(2);
			    }

			var theForm = document.getElementById( 'theForm' );

			var pendapatan = 0;
			var tabungan = 0;
            
			$("#liquid1").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				pendapatan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });
                
			$("#liquid2").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });

	           $("#liquid3").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });
                
               	$("#liquid4").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });          
                
           	    ("#investasi1").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
                
                $("#investasi2").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
                
                $("#investasi3").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
                
                $("#investasi4").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
                
                $("#investasi5").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
      	
                $("#tetap1").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
                
                $("#tetap2").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
      	
                $("#tetap3").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
      	         
                $("#pribadi1").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
      	         
                $("#pribadi2").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
      	         
                $("#pribadi3").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
      	         
                $("#pribadi4").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });   
      	         
                $("#pribadi5").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });         
               
                               $("#pribadi5").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });    
                
                                $("#pribadi5").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });    
                
                                $("#pribadi5").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });    
                
                $("#pensiun1").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    }); 
                
                $("#pensiun2").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });
                
                
                $("#pensiun3").bind('input',function(){
				var text = $(this).val();
				text = text.replace('Rp. ','');
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });
                
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

 
    });
    
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

