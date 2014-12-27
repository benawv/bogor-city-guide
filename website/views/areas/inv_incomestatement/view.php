<link rel="stylesheet" href="/website/static/inv/css/form.css" />
<script type="text/javascript" src="/website/static/inv/js/autoNumeric.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.auto').autoNumeric('init', {
        aSep: '.', 
        aDec: ',',
        wEmpty: 'sign',
        aPad: false
    });
});
</script>

<script src="/website/static/inv/js/tablesorter/jquery.tablesorter.js" type="text/javascript"></script>   
<link rel="stylesheet" href="/website/static/inv/js/tablesorter/style.css" /> 
<script type="text/javascript">
    $(function() {      
        $("#myTable").tablesorter({sortList:[[0,0],[2,1]], widgets: ['zebra']});
        $("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
    }); 
</script>  

<div class="main_wrap">
	<div class="row">
        <div class="container">

            
            <div class="box_wiz">
                <div class="head_wiz">
                    <div id="open_head_1" class="head_wiz_1 active">
                        1. Laporan Arus Kas
                    </div>
                    <div id="open_head_2" class="head_wiz_1">
                        2. Laporan Neraca
                    </div>
                    <div id="open_head_3" class="head_wiz_1">
                        3. Rasio Keuangan
                    </div>
                </div>

                <div class="head_1">
                    <div class="head_desc">
                        <p>Laporan arus kas mengungkapkan jumlah uang yang diterima dan dikeluarkan pada satu periode waktu tertentu. Laporan ini akan memberikan gambaran pola pemasukan dan pengeluaran pada periode tersebut.</p>
<p>
Komponen pendapatan berisikan seluruh pendapatan pada suatu periode baik pendapatan tetap ataupun pendapatan insidentil. Sedangakan komponen dari pengeluaran adalah seluruh kegiatan yang menyebabkan uang keluar termasuk memberikan pinjaman dan juga beramal selain belanja kebutuhan periodik.</p>
                    </div>

                    <div class="wiz">
                         <span class="bar_wiz"></span>
                        <ul>
                           
                            <li id="wiz_1" class="cur"><a href="javascript:void(0);">1</a></li>
                            <li id="wiz_2"><a href="javascript:void(0);">2</a></li>
                            <li id="wiz_3"><a href="javascript:void(0);">3</a></li>
                            

                        </ul>
                    </div>
                    <!-- wiz end -->



                    <div class="stepform showform" id="step_1">
                        <h2>Pendapatan Bulanan</h2>

                        <table width="100%">
                            <tr>    
                                <td>Pendapatan Utama</td>
                                <td><input type="text" id="pendapatan1" class="auto" data-a-sign="Rp " value="Rp 0"></td>
                            </tr>
                            <tr>    
                                <td>Pendapatan Investasi</td>
                                <td><input type="text" id="pendapatan2" class="auto" data-a-sign="Rp " value="Rp 0"/></td>
                            </tr>
                            <tr>    
                                <td>Pendapatan Lainnya</td>
                                <td><input type="text" id="pendapatan3" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
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
                        <h2>Pengeluaran Bulanan</h2>

                        <table width="100%">
                            <tr>    
                                <td>Tabungan & Investasi</td>
                                <td><input type="text" id="pendapatan1" class="auto" data-a-sign="Rp " value="Rp 0"></td>
                            </tr>
                            <tr>    
                                <td>Pengeluaran Rutin</td>
                                <td><input type="text" id="pendapatan2" class="auto" data-a-sign="Rp " value="Rp 0"/></td>
                            </tr>
                            <tr>    
                                <td>Pengeluaran Lainnya</td>
                                <td><input type="text" id="pendapatan3" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
                            </tr> 
                            <tr>    
                                <td>Pengeluaran Hutang</td>
                                <td><input type="text" id="pendapatan3" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
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
               

                        <table width="100%">

                            <tr>
                                <td>TOTAL PENDAPATAN</td>
                                <td id="total_pendapatan" class="right">Rp 0</td>
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
                                <td>PENDAPATAN = (BIAYA+HUTANG)</td>
                                <td class="right" id="total_pendapatan_bersih">Rp 0</td>
                            </tr>
                            
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>

                            <tr>    
                                <td>
                                    <a id="prev_2" href="javascript:void(0);">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                                <td class="next_form">
                                     <a id="next_4" href="javascript:void(0);">
                                        <img class="right" src="/website/static/inv/images/next.png">
                                    </a>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <!-- step_3 end -->

                </div>
                <!-- head_1 end -->

                <div class="head_2">
                    <div class="head_desc">
                        <p>Laporan neraca mengindikasikan aset yang dimiliki beserta kewajibannya pada satu tanggal tertentu. Hal yang diperhatikanadalah posisi aset (kekayaan) dan posisi hutang (kewajiban).</p>
<p>
Total kekayaan terdiri dari terdiri dari aset likuid (Kas), aset investasi, serta aset pribadi. Sedangkan total kewajiban terdiri dari hutang jangka pendek dan hutang jangka panjang. Selisih dari total kekayaan dengan total kewajiban disebut dengan kekayaan bersih.</p>
                    </div>

                    <div class="wiz">
                         <span class="bar_wiz"></span>
                        <ul>
                           
                            <li id="wiz_4" class="cur"><a href="javascript:void(0);">4</a></li>
                            <li id="wiz_5"><a href="javascript:void(0);">5</a></li>
                            <li id="wiz_6"><a href="javascript:void(0);">6</a></li>
                            

                        </ul>
                    </div>
                    <!-- wiz end -->



                    <div class="stepform showform" id="step_4">
                        <h2>Aset</h2>

                        <table width="100%">
                            <tr>    
                                <td width="40%">Tabungan & Deposito</td>
                                <td><input type="text" id="pendapatan1" class="auto" data-a-sign="Rp " value="Rp 0"></td>
                            </tr>
                            <tr>    
                                <td>Aset Investasi (reksadana, saham, emas, dsb)</td>
                                <td><input type="text" id="pendapatan2" class="auto" data-a-sign="Rp " value="Rp 0"/></td>
                            </tr>
                            <tr>    
                                <td>Aset Pribadi (rumah, kendaraan, tanah)</td>
                                <td><input type="text" id="pendapatan3" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
                            </tr>
                           
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
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
                    <!-- step_1 end -->

                    <div class="stepform" id="step_5">
                        <h2>Hutang (sisa cicilan hutang)</h2>

                        <table width="100%">
                            <tr>    
                                <td width="40%">Hutang Jangka Pendek (Kartu Kredit, KTA, dsb)</td>
                                <td><input type="text" id="pendapatan1" class="auto" data-a-sign="Rp " value="Rp 0"></td>
                            </tr>
                            <tr>    
                                <td>Hutang Jangka Panjang (kredit rumah, kredit kendaraan dsb)</td>
                                <td><input type="text" id="pendapatan2" class="auto" data-a-sign="Rp " value="Rp 0"/></td>
                            </tr>
                            <tr>    
                                <td>Hutang Lainnya</td>
                                <td><input type="text" id="pendapatan3" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
                            </tr> 
                            
                           
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
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
                    <!-- step_2 end -->

                    <div class="stepform" id="step_6">
               

                        <table width="100%">

                            <tr>
                                <td>TOTAL ASET</td>
                                <td id="total_pendapatan" class="right">Rp 0</td>
                            </tr>
                            
                            <tr>
                                <td>TOTAL HUTANG</td>
                                <td id="total_pengeluaran" class="right">Rp 0</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>
                             <tr>
                                <td>KEKAYAAN BERSIH (TOTAL ASET - TOTAL HUTANG)</td>
                                <td class="right" id="total_pendapatan_bersih">Rp 0</td>
                            </tr>
                            
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
                            <tr>    
                                <td>
                                    <a id="prev_5" href="javascript:void(0);">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                                <td class="next_form">
                                     <a id="next_7" href="javascript:void(0);">
                                        <img class="right" src="/website/static/inv/images/next.png">
                                    </a>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <!-- step_3 end -->

                </div>
                <!-- head_2 end -->

                <div class="head_3">
                    <div class="head_desc">
                        <p>Satu hal terpenting merencanakan keuangan anda adalah dimulai dari menghitung arus kas anda. Hal ini untuk mengetahui kondisi keuangan anda. Setelah itu ketahui dimana profil risiko keuangan dan baru mulai hitung kebutuhan dan tujuan financial anda.</p>
                        <p>Berikut merupakan laporan finansial rasio anda:</p>
                    </div>

                    <div class="wiz">
                         <span class="bar_wiz"></span>
                        <ul>
                           
                            <li id="wiz_7" class="cur"><a href="javascript:void(0);">7</a></li>
                            <li id="wiz_8"><a href="javascript:void(0);">FINISH</a></li>
                            

                        </ul>
                    </div>
                    <!-- wiz end -->

                    <div class="stepform" id="step_7">
                    
                    <div class="table-wrap">
                    
                        <table id="myTable2" class="tablesorter3 tbl-rasio"> 
                            <thead> 
                                <tr>  
                                    <th class=""  style="width: 20%;">RASIO</th> 
                                    <th class="">DESKRIPSI</th> 
                                    <th class="">IDEAL</th> 
                                    <th class="">AKTUAL</th>
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <td class="td-blue">LIKUIDITAS</td> 
                                    <td class="td-blue-sky">Berapa lama tabungan Anda dapat mencukupi pengeluaran bulanan Anda tanpa adanya sumber pendapatan lainnya.</td> 
                                    <td class="td-blue">3 - 6 BULAN</td> 
                                    <td class="td-blue-sky likuiditas"><a href="/financial-planning/cash-flow-tables/income-statement">Isi laporan arus kas untuk melengkapi > </a></td> 
                                    
                                </tr>       
                               <tr> 
                                    <td class="td-blue">ASET LIKUID</td> 
                                    <td class="td-blue-sky">Perbandingan antara jumlah aset yang dalam bentuk kas/setara kas terhadap seluruh jumlah aset. jumlah aset likuid yang berlebih sebaiknya diinvestasikan ke dalam instrumen lain yang lebih produktif</td> 
                                    <td class="td-blue">MAKSIMAL 15%</td> 
                                    <td class="td-blue-sky aset_likuid"><a href="/financial-planning/cash-flow-tables/balanced-sheet">Isi laporan arus kas untuk melengkapi > </a></td> 
                                    
                                </tr>    
                               <tr> 
                                    <td class="td-blue">HUTANG TERHADAP ASET</td> 
                                    <td class="td-blue-sky">Perbandingan antara total hutang dengan aset yang menunjukkan kemampuan pelunasan hutang dengan aset yang kita miliki. Semakin sedikit aset yang diperlukan untuk melunasi seluruh hutang semakin baik.</td> 
                                    <td class="td-blue">MAKSIMAL 50%</td> 
                                    <td class="td-blue-sky hutang_aset"><a href="/financial-planning/cash-flow-tables/balanced-sheet">Isi laporan neraca untuk melengkapi > </a></td> 
                                    
                                </tr>    
                                <tr> 
                                    <td class="td-blue">TOTAL INVESTASI TERHADAP KEKAYAAN BERSIH</td> 
                                    <td class="td-blue-sky">Menunjukkan seberapa besar kekayaan yang kita investasikan. Persentase yang semakin besar menunjukkan potensi produktivitas aset yang semakin tinggi.</td> 
                                    <td class="td-blue">> 50%</td> 
                                    <td class="td-blue-sky investasi"><a href="/financial-planning/cash-flow-tables/balanced-sheet">Isi laporan neraca untuk melengkapi > </a></td> 
                                    
                                </tr>  
                            </tbody> 
                        </table> 

                        <table width="100%">


                            
                            
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
                            <tr>    
                                <td>
                                    <a id="prev_6" href="javascript:void(0);">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                                <td class="next_form">
                                     <a id="next_8" href="javascript:void(0);">
                                        <img class="right" src="/website/static/inv/images/next.png">
                                    </a>
                                </td>
                            </tr>
                        </table>
                       
                        
                    </div>
                        <!--- End Table ------>

                    </div>
                    <!-- step_7 end -->

                    <div class="stepform" id="step_8">
                    
                    

                        <table width="100%">

                             <tr>
                                <td>SUMMARY</td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>
                             <tr>
                                <td>Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus.</td>
                            </tr>
                            
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
                            <tr>    
                                <td>
                                    <a id="prev_7" href="javascript:void(0);">
                                        <img class="left" src="/website/static/inv/images/prev.png">
                                    </a>
                                </td>
                                <td >
                                     
                                </td>
                            </tr>
                        </table>
                       
                        
                    </div>
                        <!--- End Table ------>

                    </div>
                    <!-- step_8 end -->


                    

                </div>
                <!-- head_3 end -->

            </div>
            <!-- box_wiz end-->


        </div>
        <!-- container end -->
	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->

<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){

    $("#open_head_1").click(function(){
        
        $(".head_2").hide();
        $(".head_3").hide();
        $(".head_1").fadeIn();

        $("#open_head_2").removeClass("active");
        $("#open_head_3").removeClass("active");
        $(this).addClass("head_wiz_1 active");

        $(".stepform").hide();
        $("#step_1").fadeIn();
        $(".wiz li").removeClass();
        $("#wiz_1").addClass("cur");

    });
    $("#open_head_2").click(function(){
        
        $(".head_1").hide();
        $(".head_3").hide();
        $(".head_2").fadeIn();
        $("#open_head_1").removeClass("active");
        $("#open_head_3").removeClass("active");
        $(this).addClass("head_wiz_1 active");

        $(".stepform").hide();
        $("#step_4").fadeIn();
        $(".wiz li").removeClass();
        $("#wiz_4").addClass("cur");
        
    });
    $("#open_head_3").click(function(){
        
        $(".head_1").hide();
        $(".head_2").hide();
        $(".head_3").fadeIn();
        $("#open_head_1").removeClass("active");
        $("#open_head_2").removeClass("active");
        $(this).addClass("head_wiz_1 active");

        $(".stepform").hide();
        $("#step_7").fadeIn();
        $(".wiz li").removeClass();
        $("#wiz_7").addClass("cur");
        
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

    $("#prev_3").click(function(){

        $(".head_2").hide();
        $(".head_3").hide();
        $(".head_1").fadeIn();

        $("#open_head_2").removeClass("active");
        $("#open_head_3").removeClass("active");
        $("#open_head_1").addClass("head_wiz_1 active");

        $(".stepform").hide();
        $("#step_3").fadeIn();
        $(".wiz li").removeClass();
        $("#wiz_3").addClass("cur");

    });


    $("#prev_6").click(function(){

        $(".head_1").hide();
        $(".head_3").hide();
        $(".head_2").fadeIn();
        $("#open_head_1").removeClass("active");
        $("#open_head_3").removeClass("active");
        $("#open_head_2").addClass("head_wiz_1 active");

        $(".stepform").hide();
        $("#step_6").fadeIn();
        $(".wiz li").removeClass();
        $("#wiz_6").addClass("cur");

    });

    $("#next_4").click(function(){

        $(".head_1").hide();
        $(".head_3").hide();
        $(".head_2").fadeIn();
        $("#open_head_1").removeClass("active");
        $("#open_head_3").removeClass("active");
        $("#open_head_2").addClass("head_wiz_1 active");

        $(".stepform").hide();
        $("#step_4").fadeIn();
        $(".wiz li").removeClass();
        $("#wiz_4").addClass("cur");
    });

    $("#next_7").click(function(){

       $(".head_1").hide();
        $(".head_2").hide();
        $(".head_3").fadeIn();
        $("#open_head_1").removeClass("active");
        $("#open_head_2").removeClass("active");
        $("#open_head_3").addClass("head_wiz_1 active");

        $(".stepform").hide();
        $("#step_7").fadeIn();
        $(".wiz li").removeClass();
        $("#wiz_7").addClass("cur");
    });

  
  

})
</script>


