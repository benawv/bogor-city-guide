<link rel="stylesheet" href="/website/static/inv/css/form.css" />
<script type="text/javascript" src="/website/static/inv/js/autoNumeric.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.auto').autoNumeric('init');
});
</script>

<div class="main_wrap">
	<div class="row bg_grey">
        <div class="container">

            <div class="form_cont">

            <h1>Income Statement</h1>

            <div class="stepform showform" id="step_1">
                <h2>Pendapatan Bulanan</h2>

                <table width="100%">
                    <tr>    
                        <td>Gaji Bersih</td>
                        <td><input type="text" id="pendapatan1" class="auto" data-a-sign="Rp "></td>
                    </tr>
                    <tr>    
                        <td>Komisi</td>
                        <td><input type="text" id="pendapatan2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Pendapatan Bunga</td>
                        <td><input type="text" id="pendapatan3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Deviden</td>
                        <td><input type="text" id="pendapatan4" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Pendapatan Lainnya</td>
                        <td><input type="text" id="pendapatan5" class="auto" data-a-sign="Rp " /></td>
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
                <h2>Pengeluaran Bulanan: Biaya Hidup</h2>
                <h3>Kebutuhan</h3>

                <table width="100%">
                    <tr>    
                        <td>Makanan &amp; Minuman</td>
                        <td><input type="text" id="kebutuhan1" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya Air</td>
                        <td><input type="text" id="kebutuhan2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya Listrik</td>
                        <td><input type="text" id="kebutuhan3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya Telepon</td>
                        <td><input type="text" id="kebutuhan4" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya Transportasi</td>
                        <td><input type="text" id="kebutuhan5" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                     <tr>    
                        <td>Asuransi</td>
                        <td><input type="text" id="kebutuhan6" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                     <tr>    
                        <td>Biaya Lainnya</td>
                        <td><input type="text" id="kebutuhan7" class="auto" data-a-sign="Rp " /></td>
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
                <h2>Pengeluaran Bulanan: Biaya Hidup</h2>
                <h3>Keinginan</h3>

                <table width="100%">
                    <tr>    
                        <td>Pakaian</td>
                        <td><input type="text" id="kegiatan1" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya TV Berlangganan</td>
                        <td><input type="text" id="kegiatan2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Makan di Luar</td>
                        <td><input type="text" id="kegiatan3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Hobby</td>
                        <td><input type="text" id="kegiatan4" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Liburan</td>
                        <td><input type="text" id="kegiatan5" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                     <tr>    
                        <td>Amal</td>
                        <td><input type="text" id="kegiatan6" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                     <tr>    
                        <td>Lainnya</td>
                        <td><input type="text" id="kegiatan7" class="auto" data-a-sign="Rp " /></td>
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
                <h2>Angsuran Hutang</h2>

                <table width="100%">
                    <tr>    
                        <td>Rumah</td>
                        <td><input type="text" id="angsuran1" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Kendaraan</td>
                        <td><input type="text" id="angsuran2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>KTA</td>
                        <td><input type="text" id="angsuran3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Kartu Kredit</td>
                        <td><input type="text" id="angsuran4" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Hutang Lainnya</td>
                        <td><input type="text" id="angsuran5" class="auto" data-a-sign="Rp " /></td>
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
                <h2>Biaya Lainnya</h2>

                <table width="100%">
                    <tr>    
                        <td>Pajak</td>
                        <td><input type="text" id="lainnya1" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Uang sekolah anak</td>
                        <td><input type="text" id="lainnya2" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Uang saku anak</td>
                        <td><input type="text" id="lainnya3" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    
                    <tr>    
                        <td>Lainnya</td>
                        <td><input type="text" id="lainnya4" class="auto" data-a-sign="Rp " /></td>
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
                <h2>Financial Ratio</h2>

                <table width="100%">

                    <tr>
                        <td>TOTAL PENDAPATAN</td>
                        <td id="total_pendapatan" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>TOTAL BIAYA HIDUP</td>
                        <td id="total_biaya_hidup" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>TOTAL ANGSURAN HUTANG</td>
                        <td id="total_angsuran_hutang" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>TOTAL BIAYA LAINNYA</td>
                        <td id="total_biaya_lainnya" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td>TOTAL PENGELUARAN</td>
                        <td id="total_pengeluaran" class="right">Rp 0</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>
                     <tr>
                        <td>PENDAPATAN - PENGELUARAN</td>
                        <td class="right" id="total_pendapatan_bersih">Rp 0</td>
                    </tr>
                    
                    <tr>    
                        <td><a id="prev_5" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                          <a href="/investasi/investment-homepage/financial-planning/cash-flow-tables/balanced-sheet" class="right">Lanjutkan dengan mengisi Balance Sheet &#187;</a>
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
    
    $( "#next_6" ).click(function(){
    var total_pendapatan=0;
    var pendapatan1=0;
    var pendapatan2=0;
    var pendapatan3=0;
    var pendapatan4=0;
    var pendapatan5=0;
    
    var total_biaya_hidup=0;
    var kebutuhan1=0;
    var kebutuhan2=0;
    var kebutuhan3=0;
    var kebutuhan4=0;
    var kebutuhan5=0;
    var kebutuhan6=0;
    var kebutuhan7=0;
   
   var total_angsuran_hutang=0;
    var kegiatan1=0;
    var kegiatan2=0;
    var kegiatan3=0;
    var kegiatan4=0;
    var kegiatan5=0;
    var kegiatan6=0;
    var kegiatan7=0;
   
   var total_biaya_lainnya=0;
    var angsuran1=0;
    var angsuran2=0;
    var angsuran3=0;
    var angsuran4=0;
    var angsuran5=0;
    
    var total_pengeluaran=0;
    var lainnya1=0;
    var lainnya2=0;
    var lainnya3=0;
    var lainnya4=0;
    
    var total_pendapatan_bersih=0;
    
            var text = $("#pendapatan1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pendapatan1 = $('#pendapatan1').autoNumeric('get');
                

            var text = $("#pendapatan2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pendapatan2 = $('#pendapatan2').autoNumeric('get');
            
            var text = $("#pendapatan3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pendapatan3 = $('#pendapatan3').autoNumeric('get');

            var text = $("#pendapatan4").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pendapatan4 = $('#pendapatan4').autoNumeric('get');

            var text = $("#pendapatan5").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			pendapatan5 = $('#pendapatan5').autoNumeric('get');

            total_pendapatan=(parseInt(pendapatan1)+parseInt(pendapatan2)+parseInt(pendapatan3)+parseInt(pendapatan4)+parseInt(pendapatan5));
            $( "#total_pendapatan" ).html( accounting.formatMoney(total_pendapatan,'Rp. ',2,'.',','));
            
            
            var text = $("#kebutuhan1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kebutuhan1 = $('#kebutuhan1').autoNumeric('get');
                

            var text = $("#kebutuhan2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kebutuhan2 = $('#kebutuhan2').autoNumeric('get');
            
            var text = $("#kebutuhan3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kebutuhan3 = $('#kebutuhan3').autoNumeric('get');

            var text = $("#kebutuhan4").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kebutuhan4 = $('#kebutuhan4').autoNumeric('get');

            var text = $("#kebutuhan5").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kebutuhan5 = $('#kebutuhan5').autoNumeric('get');

            var text = $("#kebutuhan6").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kebutuhan6 = $('#kebutuhan6').autoNumeric('get');

            var text = $("#kebutuhan7").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kebutuhan7 = $('#kebutuhan7').autoNumeric('get');

            total_biaya_hidup=(parseInt(kebutuhan1)+parseInt(kebutuhan2)+parseInt(kebutuhan3)+parseInt(kebutuhan4)+parseInt(kebutuhan5)+parseInt(kebutuhan6)+parseInt(kebutuhan7));
            $( "#total_biaya_hidup" ).html( accounting.formatMoney(total_biaya_hidup,'Rp. ',2,'.',','));
    

            var text = $("#kegiatan1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kegiatan1 = $('#kegiatan1').autoNumeric('get');
                

            var text = $("#kegiatan2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kegiatan2 = $('#kegiatan2').autoNumeric('get');
            
            var text = $("#kegiatan3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kegiatan3 = $('#kegiatan3').autoNumeric('get');

            var text = $("#kegiatan4").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kegiatan4= $('#kegiatan4').autoNumeric('get');

            var text = $("#kegiatan5").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kegiatan5 = $('#kegiatan5').autoNumeric('get');

            var text = $("#kegiatan6").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kegiatan6 = $('#kegiatan6').autoNumeric('get');

            var text = $("#kegiatan7").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			kegiatan7 = $('#kegiatan7').autoNumeric('get');

            total_angsuran_hutang=(parseInt(kegiatan1)+parseInt(kegiatan2)+parseInt(kegiatan3)+parseInt(kegiatan4)+parseInt(kegiatan5)+parseInt(kegiatan6)+parseInt(kegiatan7));
            $( "#total_angsuran_hutang" ).html( accounting.formatMoney(total_angsuran_hutang,'Rp. ',2,'.',','));
        

            var text = $("#angsuran1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			angsuran1 = $('#angsuran1').autoNumeric('get');
                

            var text = $("#angsuran2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			angsuran2 = $('#angsuran2').autoNumeric('get');
            
            var text = $("#angsuran3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			angsuran3 = $('#angsuran3').autoNumeric('get');

            var text = $("#angsuran4").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			angsuran4= $('#angsuran4').autoNumeric('get');

            var text = $("#angsuran5").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			angsuran5 = $('#angsuran5').autoNumeric('get');

            total_biaya_lainnya=(parseInt(angsuran1)+parseInt(angsuran2)+parseInt(angsuran3)+parseInt(angsuran4)+parseInt(angsuran5));
            $( "#total_biaya_lainnya" ).html( accounting.formatMoney(total_biaya_lainnya,'Rp. ',2,'.',','));
    

            var text = $("#lainnya1").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			lainnya1 = $('#lainnya1').autoNumeric('get');
                

            var text = $("#lainnya2").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			lainnya2 = $('#lainnya2').autoNumeric('get');
            
            var text = $("#lainnya3").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			lainnya3 = $('#lainnya3').autoNumeric('get');

            var text = $("#lainnya4").val();
			text = text.replace('Rp. ','');
			text = text.replace(/\./g,'');
			text = text.replace(/,/g,'');
			lainnya4= $('#lainnya4').autoNumeric('get');


            total_pengeluaran=(parseInt(lainnya1)+parseInt(lainnya2)+parseInt(lainnya3)+parseInt(lainnya4));
            $( "#total_pengeluaran" ).html( accounting.formatMoney(total_pengeluaran,'Rp. ',2,'.',','));
            
            total_pendapatan_bersih=total_pendapatan+total_biaya_hidup+total_angsuran_hutang+total_biaya_lainnya+total_pengeluaran
            $( "#total_pendapatan_bersih" ).html( accounting.formatMoney(total_pendapatan_bersih,'Rp. ',2,'.',','));

/**/
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

  $("#submit").click(function(){
    $(".stepform").hide();
    $("#step_7").fadeIn();
  });
  

})
</script>

