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
                        <td><input type="text" class="auto" data-a-sign="Rp "></td>
                    </tr>
                    <tr>    
                        <td>Komisi</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Pendapatan Bunga</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Deviden</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Pendapatan Lainnya</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
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
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya Air</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya Listrik</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya Telepon</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya Transportasi</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                     <tr>    
                        <td>Asuransi</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                     <tr>    
                        <td>Biaya Lainnya</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>    
                        <td><a id="prev_1" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png" />
                            </a></td>
                        <td>
                            <a id="next_3" href="javascript:void(0);">
                                <img class="right" src="/website/static/inv/images/next.png" />
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
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Biaya TV Berlangganan</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Makan di Luar</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Hobby</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Liburan</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                     <tr>    
                        <td>Amal</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                     <tr>    
                        <td>Lainnya</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
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
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Kendaraan</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>KTA</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Kartu Kredit</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Hutang Lainnya</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
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
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Uang sekolah anak</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    <tr>    
                        <td>Uang saku anak</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
                    </tr>
                    
                    <tr>    
                        <td>Lainnya</td>
                        <td><input type="text" class="auto" data-a-sign="Rp " /></td>
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
                        <td class="right">Rp 150,000,000</td>
                    </tr>
                    <tr>
                        <td>TOTAL BIAYA HIDUP</td>
                        <td class="right">Rp 85,000,000</td>
                    </tr>
                    <tr>
                        <td>TOTAL ANGSURAN HUTANG</td>
                        <td class="right">Rp 24,000,000</td>
                    </tr>
                    <tr>
                        <td>TOTAL BIAYA LAINNYA</td>
                        <td class="right">Rp 9,000,000</td>
                    </tr>
                    <tr>
                        <td>TOTAL PENGELUARAN</td>
                        <td class="right">Rp 118,000,000</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="1" color="#333333" />
                        </td>
                    </tr>
                     <tr>
                        <td>PENDAPATAN - PENGELUARAN</td>
                        <td class="right">Rp 32,000,000</td>
                    </tr>
                    
                    <tr>    
                        <td><a id="prev_5" href="javascript:void(0);">
                                <img class="left" src="/website/static/inv/images/prev.png">
                            </a></td>
                        <td>
                          <a href="balancedsheet.php" class="right">Lanjutkan dengan mengisi Balance Sheet &#187;</a>
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


