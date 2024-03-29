<link rel="stylesheet" href="/website/static/inv/css/form.css" />
<script type="text/javascript" src="/website/static/inv/js/autoNumeric.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.auto').autoNumeric('init', {
        aSep: '.', 
        aDec: ',',
        wEmpty: 'sign',
        aPad: false,
	vMin: '-9999999999.99'
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
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>
                            <tr>
	                            <td>Total Pendapatan</td>
	                            <td><input type="text" id="totalpendapatan" disabled="disabled" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
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
                                <td><input type="text" id="pengeluaran1" class="auto" data-a-sign="Rp " value="Rp 0"></td>
                            </tr>
                            <tr>    
                                <td>Pengeluaran Rutin</td>
                                <td><input type="text" id="pengeluaran2" class="auto" data-a-sign="Rp " value="Rp 0"/></td>
                            </tr>
                            <tr>    
                                <td>Pengeluaran Lainnya</td>
                                <td><input type="text" id="pengeluaran3" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
                            </tr> 
                            <tr>    
                                <td>Pengeluaran Hutang</td>
                                <td><input type="text" id="pengeluaran4" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>
                            <tr>
	                            <td>Total Pengeluaran</td>
	                            <td><input type="text" id="totalpengeluaran" disabled="disabled" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
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
                                <td>PENDAPATAN BERSIH BULANAN <br />(TOTAL PENDAPATAN - TOTAL PENGELUARAN)</td>
                                <td class="right auto" data-a-sign="Rp " id="total_pendapatan_bersih">Rp 0</td>
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
                                <td width="40%">Aset Likuid<p style="margin-top:0px; font-size:18px;">(tabungan & deposito)</p></td>
                                <td><input type="text" id="aset1" class="auto" data-a-sign="Rp " value="Rp 0"></td>
                            </tr>
                            <tr>
                                <td>Aset Investasi <p style="margin-top:0px; font-size:18px;">(reksadana, saham, emas, dsb)</p></td>
                                <td><input type="text" id="aset2" class="auto" data-a-sign="Rp " value="Rp 0"/></td>
                            </tr>
                            <tr>    
                                <td>Aset Pribadi <p style="margin-top:0px; font-size:18px;">(rumah, kendaraan, tanah)</p></td>
                                <td><input type="text" id="aset3" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>
                            <tr>
	                            <td>Total Aset</td>
	                            <td><input type="text" id="subtotalaset" disabled="disabled" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
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
                                <td width="40%">Hutang Jangka Pendek<p style="margin-top:0px; font-size:18px;">(Kartu Kredit, KTA, dsb)</p></td>
                                <td><input type="text" id="hutang1" class="auto" data-a-sign="Rp " value="Rp 0"></td>
                            </tr>
                            <tr>    
                                <td>Hutang Jangka Panjang<p style="margin-top:0px; font-size:18px;">(kredit rumah, kredit kendaraan dsb)</p></td>
                                <td><input type="text" id="hutang2" class="auto" data-a-sign="Rp " value="Rp 0"/></td>
                            </tr>
                            <tr>    
                                <td>Hutang Lainnya</td>
                                <td><input type="text" id="hutang3" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
                            </tr> 
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>
                            <tr>
	                            <td>Total Hutang</td>
	                            <td><input type="text" id="subtotalhutang" disabled="disabled" class="auto" data-a-sign="Rp " value="Rp 0" /></td>
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
                                <td id="total_aset" class="right">Rp 0</td>
                            </tr>
                            
                            <tr>
                                <td>TOTAL HUTANG</td>
                                <td id="total_hutang" class="right">Rp 0</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>
                             <tr>
                                <td>KEKAYAAN BERSIH (TOTAL ASET - TOTAL HUTANG)</td>
                                <td class="right auto" id="kekayaan_bersih" data-a-sign="Rp ">
	                                Rp 0
	                                <input type="hidden" data-a-sign="Rp " class="auto" id="kekayaan_bersih_hidden" />
	                            </td>
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
                        <p>Satu hal terpenting merencanakan keuangan anda adalah dimulai dari menghitung arus kas anda. Hal ini untuk mengetahui kondisi keuangan anda. Setelah itu ketahui dimana profil risiko keuangan dan baru mulai hitung kebutuhan dan tujuan keuangan anda.</p>
                        <p>Berikut merupakan laporan rasio keuangan anda:</p>
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
                                    <th class="">IDEAL</th> 
                                    <th class="">AKTUAL</th>
                                    <th class="">DESKRIPSI</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                <tr> 
                                    <td class="td-blue">LIKUIDITAS</td> 
                                    <td class="td-blue-sky">3 - 6 BULAN</td> 
                                    <td class="td-blue likuiditas"><a href="javascript:void(0);" class="aktual-aruskas">Isi laporan arus kas untuk melengkapi > </a></td> 
                                    <td class="td-blue-sky">Berapa lama tabungan Anda dapat mencukupi pengeluaran bulanan Anda tanpa adanya sumber pendapatan lainnya.</td> 
                                </tr>       
                               <tr> 
                                    <td class="td-blue">ASET LIKUID</td>  
                                    <td class="td-blue-sky">MAKSIMAL 15%</td> 
                                    <td class="td-blue aset_likuid"><a href="javascript:void(0);" class="aktual-aruskas">Isi laporan arus kas untuk melengkapi > </a></td> 
                                    <td class="td-blue-sky">Perbandingan antara jumlah aset yang dalam bentuk kas/setara kas terhadap seluruh jumlah aset. jumlah aset likuid yang berlebih sebaiknya diinvestasikan ke dalam instrumen lain yang lebih produktif</td>
                                </tr>
                                <tr> 
                                    <td class="td-blue">TABUNGAN</td>  
                                    <td class="td-blue-sky">MINIMAL 10%</td> 
                                    <td class="td-blue rasio_tabungan_investasi"><a href="javascript:void(0);" class="aktual-aruskas">Isi laporan arus kas untuk melengkapi > </a></td> 
                                    <td class="td-blue-sky">Perbandingan antara Tabungan & Investasi terhadap Pendapatan.</td>
                                </tr>     
                               <tr> 
                                    <td class="td-blue">HUTANG TERHADAP ASET</td>  
                                    <td class="td-blue-sky">MAKSIMAL 50%</td> 
                                    <td class="td-blue hutang_aset"><a href="javascript:void(0);" class="aktual-neraca">Isi laporan neraca untuk melengkapi > </a></td> 
                                    <td class="td-blue-sky">Perbandingan antara total hutang dengan aset yang menunjukkan kemampuan pelunasan hutang dengan aset yang kita miliki. Semakin sedikit aset yang diperlukan untuk melunasi seluruh hutang semakin baik.</td>
                                </tr>    
                                <tr> 
                                    <td class="td-blue">TOTAL INVESTASI TERHADAP KEKAYAAN BERSIH</td>  
                                    <td class="td-blue-sky">> 50%</td> 
                                    <td class="td-blue investasi"><a href="javascript:void(0);" class="aktual-neraca">Isi laporan neraca untuk melengkapi > </a></td> 
                                    <td class="td-blue-sky">Menunjukkan seberapa besar kekayaan yang kita investasikan. Persentase yang semakin besar menunjukkan potensi produktivitas aset yang semakin tinggi.</td>
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
                                
                                <td>
                                    <h3><b>Likuiditas <span class="sum_likuiditas"> </span></b></h3>
                                    <p class="sum_likuiditas_ket">
                                    Selamat! Anda sudah memiliki dana darurat yang cukup untuk menutupi kebutuhan rutin bulanan Anda antara 3 - 6 bulan. Dana darurat berfungsi untuk menutupi pengeluaran yang bersifat insidentil yang tidak diperhitungkan dalam pengeluaran bulanan Anda. Contoh dari penggunaan dana darurat adalah untuk biaya pengobatan.</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>

                            <tr>
                                
                                <td>
                                    <h3><b>Aset Likuid <span class="sum_aset_likuid"> </span></b></h3>
                                    <p class="sum_aset_likuid_ket">
                                    Selamat! Aset likuid yang Anda miliki sudah dalam rentang yang ideal, yaitu kurang dari 15% total aset Anda. Jumlah aset likuid yang terlalu tinggi akan menurunkan tingkat produktivitas aset Anda.</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>

                             <tr>
                                
                                <td>
                                    <h3><b>Tabungan & Investasi <span class="sum_tabungan_investasi"> </span></b></h3>
                                    <p class="sum_tabungan_investasi_ket">
                                    Porsi pendapatan bulanan yang Anda sisihkan untuk tabungan & investasi masih di bawah angka ideal, yaitu minimal 10% dari pendapatan bulanan. Anda dapat meningkatkan rasio ini dengan menambahkan alokasi bulanan Anda untuk menabung / investasi. Salah satu cara yang dapat dilakukan adalah dengan segera menyisihkan porsi untuk tabungan / investasi setelah mendapatkan pendapatan, sehingga yang Anda tabung / investasikan bukanlah sisa dari pendapatan Anda. Dengan alokasi aset yang konsisten, Anda dapat meningkatkan total aset yang Anda miliki.</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>
                            
                            <tr>
                                
                                <td>
                                    <h3><b>Hutang terhadap aset <span class="sum_hutang_aset"> </span></b></h3>
                                    <p class="sum_hutang_aset_ket">
                                    Selamat! Perbandingan antara total hutang dan aset Anda sudah baik, yaitu di bawah 50%. Dengan kondisi ini apabila hutang Anda harus dilunasi secepatnya, maka maksimal hanya 50% dari aset Anda yang diperlukan untuk melunasinya. Semakin tinggi angka dari rasio ini, maka risiko terjadinya kebangkrutan akan semakin tinggi.</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>

                            <tr>
                                
                                <td>
                                    <h3><b>Total investasi terhadap kekayaan bersih <span class="sum_investasi"></span></b></h3>
                                    <p class="sum_investasi_ket">
                                    Total aset investasi Anda masih kurang dari porsi yang ideal, yaitu minimal 50% total aset Anda. Apabila ada hutang yang harus segera dilunasi dan aset likuid tidak mencukupi, aset investasi Anda tidak dapat menutupi kekurangan tersebut sehingga kondisi finansial Anda akan terdampak. Untuk peningkatan aset investasi, Anda dapat meningkatkan porsi investasi bulanan dari pendapatan yang Anda terima.</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
                            </tr>

                            <tr>
                                
                                <td>
                                    <h3><b>Kirim ke Email</b></h3>
                                    <p>
                                        <input type="email" class="email-user" />&nbsp;
                                        <input type="submit" class='sendEmail' value="Kirim" />    
                                    </p>
                                    <div class="allianz-button" style="text-align: left;">
					                    <input id="keuangan" class="blue-btn" type="button" value="Perencanaan Keuangan">
					                    <input id="kalkulator" class="blue-btn" type="button" value="Kalkulator">
					               </div>
									<div style="color: #003da5;" class="sukses"></div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr size="1" color="#333333" />
                                </td>
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

/* =============== Added by Handri Pangestiaji 28 Desember 2014 ================= */

	/* ====================== Pendapatan Segment ======================== */
	    
	$("#pendapatan1").focusout(function(event){
		
		var p_utama = $('#pendapatan1').autoNumeric('get');
		var p_investasi = $('#pendapatan2').autoNumeric('get');
		var p_lainnya = $('#pendapatan3').autoNumeric('get');
		
		var total = "";
		
		total = parseInt(p_utama) + parseInt(p_investasi) + parseInt(p_lainnya);
		
		$('#totalpendapatan').autoNumeric('set', total);
		
	});
	
	
	$('#pendapatan2').focusout(function(event){
		var p_utama = $('#pendapatan1').autoNumeric('get');
		var p_investasi = $('#pendapatan2').autoNumeric('get');
		var p_lainnya = $('#pendapatan3').autoNumeric('get');
		
		var total = "";
		
		total = parseInt(p_utama) + parseInt(p_investasi) + parseInt(p_lainnya);
		
		$('#totalpendapatan').autoNumeric('set', total);
	});
	
	$('#pendapatan3').focusout(function(event){
		var p_utama = $('#pendapatan1').autoNumeric('get');
		var p_investasi = $('#pendapatan2').autoNumeric('get');
		var p_lainnya = $('#pendapatan3').autoNumeric('get');
		
		var total = "";
		
		total = parseInt(p_utama) + parseInt(p_investasi) + parseInt(p_lainnya);
		
		$('#totalpendapatan').autoNumeric('set', total);
	});
	
	/* ================= End of Pendapatan Segment ================== */
	
	/* ==================== Pengeluaran Segment ===================== */
	
	$('#pengeluaran1').focusout(function(e){
		
		var tab_investasi = $('#pengeluaran1').autoNumeric('get');
		var p_rutin = $('#pengeluaran2').autoNumeric('get');
		var p_lainnya = $('#pengeluaran3').autoNumeric('get');
		var p_hutang = $('#pengeluaran4').autoNumeric('get');
		
		var total = "";
		
		total = parseInt(tab_investasi) + parseInt(p_rutin) + parseInt(p_lainnya) + parseInt(p_hutang);
		
		$('#totalpengeluaran').autoNumeric('set', total);
	});
	
	$('#pengeluaran2').focusout(function(e){
		
		var tab_investasi = $('#pengeluaran1').autoNumeric('get');
		var p_rutin = $('#pengeluaran2').autoNumeric('get');
		var p_lainnya = $('#pengeluaran3').autoNumeric('get');
		var p_hutang = $('#pengeluaran4').autoNumeric('get');
		
		var total = "";
		
		total = parseInt(tab_investasi) + parseInt(p_rutin) + parseInt(p_lainnya) + parseInt(p_hutang);
		
		$('#totalpengeluaran').autoNumeric('set', total);
	});
	
	$('#pengeluaran3').focusout(function(e){
		
		var tab_investasi = $('#pengeluaran1').autoNumeric('get');
		var p_rutin = $('#pengeluaran2').autoNumeric('get');
		var p_lainnya = $('#pengeluaran3').autoNumeric('get');
		var p_hutang = $('#pengeluaran4').autoNumeric('get');
		
		var total = "";
		
		total = parseInt(tab_investasi) + parseInt(p_rutin) + parseInt(p_lainnya) + parseInt(p_hutang);
		
		$('#totalpengeluaran').autoNumeric('set', total);
	});
	
	$('#pengeluaran4').focusout(function(e){
		
		var tab_investasi = $('#pengeluaran1').autoNumeric('get');
		var p_rutin = $('#pengeluaran2').autoNumeric('get');
		var p_lainnya = $('#pengeluaran3').autoNumeric('get');
		var p_hutang = $('#pengeluaran4').autoNumeric('get');
		
		var total = "";
		
		total = parseInt(tab_investasi) + parseInt(p_rutin) + parseInt(p_lainnya) + parseInt(p_hutang);
		
		$('#totalpengeluaran').autoNumeric('set', total);
	});
	
	/* ================== End of Pengeluaran Segment ==================== */
	
	/* ================== Arus Kas ====================================== */
	
	$('#next_3').click(function(){
		
		$('#total_pendapatan').html($('#totalpendapatan').val());
		
		$('#total_pengeluaran').html($('#totalpengeluaran').val());
		
		var total_bersih = parseInt($('#totalpendapatan').autoNumeric('get')) - parseInt($('#totalpengeluaran').autoNumeric('get'));
		var color = 'green';
		if (total_bersih < 0) {
		    color = 'red';
		}
		$('#total_pendapatan_bersih').autoNumeric('set', total_bersih);
		$('#total_pendapatan_bersih').css('color',color);
	});
	
	$('#wiz_3').click(function(){
		
		$('#total_pendapatan').html($('#totalpendapatan').val());
		
		$('#total_pengeluaran').html($('#totalpengeluaran').val());
		
		var total_bersih = parseInt($('#totalpendapatan').autoNumeric('get')) - parseInt($('#totalpengeluaran').autoNumeric('get'));
		
		$('#total_pendapatan_bersih').autoNumeric('set', total_bersih);
		
	});
	
	/* ================= End of Arus Kas ================================ */
	
	/* ================= Aset Segment on Laporan Necara ================= */
	
	$('#aset1').focusout(function(e){
		
		var tab_deposito = $('#aset1').autoNumeric('get');
		var aset_investasi = $('#aset2').autoNumeric('get');
		var aset_pribadi = $('#aset3').autoNumeric('get');
		
		total = "";
		
		total = parseInt(tab_deposito) + parseInt(aset_investasi) + parseInt(aset_pribadi);
		
		$('#subtotalaset').autoNumeric('set', total);
		
	});
	
	$('#aset2').focusout(function(e){
		
		var tab_deposito = $('#aset1').autoNumeric('get');
		var aset_investasi = $('#aset2').autoNumeric('get');
		var aset_pribadi = $('#aset3').autoNumeric('get');
		
		total = "";
		
		total = parseInt(tab_deposito) + parseInt(aset_investasi) + parseInt(aset_pribadi);
		
		$('#subtotalaset').autoNumeric('set', total);
		
	});
	
	$('#aset3').focusout(function(e){
		
		var tab_deposito = $('#aset1').autoNumeric('get');
		var aset_investasi = $('#aset2').autoNumeric('get');
		var aset_pribadi = $('#aset3').autoNumeric('get');
		
		total = "";
		
		total = parseInt(tab_deposito) + parseInt(aset_investasi) + parseInt(aset_pribadi);
		
		$('#subtotalaset').autoNumeric('set', total);
		
	});
	
	/* ================= End of Aset segment ============================ */
	
	/* ================= Hutang Segment on Laporan Necara =============== */
	
	$('#hutang1').focusout(function(e){
		
		var hutang_pendek = $('#hutang1').autoNumeric('get');
		var hutang_panjang = $('#hutang2').autoNumeric('get');
		var hutang_lainnya = $('#hutang3').autoNumeric('get');
		
		total = "";
		
		total = parseInt(hutang_pendek) + parseInt(hutang_panjang) + parseInt(hutang_lainnya);
		
		$('#subtotalhutang').autoNumeric('set', total);
		
	});
	
	$('#hutang2').focusout(function(e){
		
		var hutang_pendek = $('#hutang1').autoNumeric('get');
		var hutang_panjang = $('#hutang2').autoNumeric('get');
		var hutang_lainnya = $('#hutang3').autoNumeric('get');
		
		total = "";
		
		total = parseInt(hutang_pendek) + parseInt(hutang_panjang) + parseInt(hutang_lainnya);
		
		$('#subtotalhutang').autoNumeric('set', total);
		
	});
	
	$('#hutang3').focusout(function(e){
		
		var hutang_pendek = $('#hutang1').autoNumeric('get');
		var hutang_panjang = $('#hutang2').autoNumeric('get');
		var hutang_lainnya = $('#hutang3').autoNumeric('get');
		
		total = "";
		
		total = parseInt(hutang_pendek) + parseInt(hutang_panjang) + parseInt(hutang_lainnya);
		
		$('#subtotalhutang').autoNumeric('set', total);
		
	});
	
	/* ================= End of Hutang Segment on Laporan Necara ========= */
	
	/* ================= Laporan Neraca ================================== */
	
	$('#next_6').click(function(e){
		
		$('#total_aset').html($('#subtotalaset').val());
		
		$('#total_hutang').html($('#subtotalhutang').val());
		
		var kekayaan_bersih = parseInt($('#subtotalaset').autoNumeric('get')) - parseInt($('#subtotalhutang').autoNumeric('get'));
		
		var color = 'green';
		if (kekayaan_bersih < 0) {
		    color = 'red';
		}
		$('#kekayaan_bersih').autoNumeric('set', kekayaan_bersih);
		$('#kekayaan_bersih').css('color',color);
		
		$('#kekayaan_bersih_hidden').autoNumeric('set', kekayaan_bersih);
	});
	
	$('#wiz_6').click(function(e){
		
		$('#total_aset').html($('#subtotalaset').val());
		
		$('#total_hutang').html($('#subtotalhutang').val());
		
		var kekayaan_bersih = parseInt($('#subtotalaset').autoNumeric('get')) - parseInt($('#subtotalhutang').autoNumeric('get'));
		
		$('#kekayaan_bersih').autoNumeric('set', kekayaan_bersih);
		
		$('#kekayaan_bersih_hidden').autoNumeric('set', kekayaan_bersih);
	});
	
	/* ================= End of Laporan Neraca ============================ */
	
	/* ================= Rasio Keuangan ================================== */
	
	$('#next_7').click(function(e){
		
		var aset_likuid = $('#aset1').autoNumeric('get');
		var total_aset = $('#subtotalaset').autoNumeric('get');
		var total_pengeluaran = $('#totalpengeluaran').autoNumeric('get');
		var kekayaan_bersih = $('#kekayaan_bersih').autoNumeric('get');
		var total_hutang = $('#subtotalhutang').autoNumeric('get');
		var tabungan_investasi = $('#pengeluaran1').autoNumeric('get');
		var total_pendapatan = $('#totalpendapatan').autoNumeric('get');
		var aset_investasi = $('#aset2').autoNumeric('get');
		
		
		/* --------- Likuiditas ---------- */
		
		var x = parseInt(aset_likuid) / parseInt(total_pengeluaran);
		var likuiditas = Math.floor(x);
		var likuiditas_teks = "";
		var likuiditas_ket = "";
		
		if(likuiditas < 3 || likuiditas > 6) 
		{
			if(likuiditas > 6)
			{
				likuiditas_teks = "<div style='font-size: 18px;'>"+likuiditas+" bulan</div>";
				likuiditas_ket = "Selamat! Dana Darurat yang Anda miliki lebih dari cukup untuk menutupi kebutuhan rutin bulanan Anda antara 3 - 6 bulan. Dana darurat berfungsi untuk menutupi pengeluaran yang bersifat insidentil yang tidak diperhitungkan pengeluaran bulanan Anda. Contoh dari penggunaan dana darurat adalah untuk biaya pengobatan. Dana darurat yang berlebih dapat Anda investasikan agar aset Anda lebih produktif.";
			}
			else {
				likuiditas_teks = "<div style='color:red; font-size: 18px;'>"+likuiditas+" bulan</div>";
				likuiditas_ket = "Anda belum memiliki dana darurat yang cukup untuk menutupi kebutuhan rutin bulanan Anda antara 3 - 6 bulan. Dana darurat berfungsi untuk menutupi pengeluaran yang bersifat insidentil yang tidak diperhitungkan dalam pengeluaran bulanan Anda. Contoh dari penggunaan dana darurat adalah untuk biaya pengobatan. Sebaiknya Anda terlebih dahulu meningkatkan dana darurat Anda sebelum mulai berinvestasi";
			}
		}
		else {
			if(isNaN(likuiditas) == false)
			{
				likuiditas_teks = "<div style='font-size: 18px;'>"+likuiditas+" bulan</div>";
				likuiditas_ket = "Selamat! Anda sudah memiliki dana darurat yang cukup untuk menutupi rutin bulanan Anda antara 3 - 6 bulan. Dana darurat berfungsi untuk menutupi pengeluaran yang bersifat insidentil yang tidak diperhitungkan dalam pengeluaran bulanan Anda.";
			}
		}
		
		if(likuiditas_teks!="")
		{
			$('.likuiditas').html(likuiditas_teks);
			$('.likuiditas_ket').html(likuiditas_ket);
			$('.sum_likuiditas').html("<span> Anda bernilai "+likuiditas+" bulan</span>");
			$('.sum_likuiditas_ket').html(likuiditas_ket);
		}
		
		/* ---------- Aset Likuid --------- */
		
		var rasio_aset_likuid = Math.round( ( parseInt(aset_likuid) / parseInt(total_aset) ) * 100 );
		var aset_likuid_teks = "";
		var aset_likuid_ket = "";
		
		if(rasio_aset_likuid > 15) 
		{
			aset_likuid_teks = "<div style='color:red; font-size: 18px;'>"+rasio_aset_likuid+"%</div>";
			aset_likuid_ket = "Aset yang Anda miliki lebih tinggi dibandingkan porsi idealnya, yaitu 15% dari total aset Anda. Jumlah aset likuid yang terlalu tinggi akan menurunkan tingkat produktivitas aset. Anda dapat melakukan realokasi aset likuid ke dalam bentuk investasi yang lebih produktif";
		}
		else 
		{
			if(isNaN(rasio_aset_likuid) == false)
			{
				aset_likuid_teks = "<div style='font-size: 18px;'>"+rasio_aset_likuid+"%</div>";
				aset_likuid_ket = "Selamat! Aset likuid yang Anda miliki sudah dalam rentang yang ideal, yaitu kurang dari 15% total aset Anda. Jumlah aset likuid yang terlalu tinggi akan menurunkan tingka produktivitas aset Anda.";
			}
		}
		
		if(aset_likuid_teks!="")
		{
			$('.aset_likuid').html(aset_likuid_teks);
			$('.aset_likuid_ket').html(aset_likuid_ket);
			$('.sum_aset_likuid').html("<span> Anda bernilai "+rasio_aset_likuid+"%</span>");
			$('.sum_aset_likuid_ket').html(aset_likuid_ket);
		}
			
		/* ---------- Tabungan & Investasi ------- */
		
		var rasio_tabungan_investasi = Math.round( ( parseInt(tabungan_investasi) / parseInt(total_pendapatan) ) * 100 );
		var tabungan_investasi_teks = "";
		var tabungan_investasi_ket = "";
		if(rasio_tabungan_investasi < 10)
		{
			tabungan_investasi_teks = "<div style='color:red; font-size: 18px;'>"+rasio_tabungan_investasi+"%</div>";
			tabungan_investasi_ket = "Porsi pendapatan bulanan yang Anda sisihkan untuk tabungan & investasi masih di bawah angka ideal, yaitu minimal 10% dari pendapatan bulanan. Anda dapat meningkatkan rasio ini dengan menambahkan alokasi bulanan Anda untuk menabung / investasi. Salah satu cara yang dapat dilakukan adalah dengan segera menyisihkan porsi untuk tabungan / investasi setelah mendapatkan pendapatan, sehingga yang Anda tabung / investasikan bukanlah sisa dari pendapatan Anda. Dengan alokasi aset yang konsisten, Anda dapat meningkatkan total aset yang Anda miliki.";
		}
		else 
		{
			if(isNaN(rasio_tabungan_investasi) == false)
			{
				tabungan_investasi_teks = "<div style='font-size: 18px;'>"+rasio_tabungan_investasi+"%</div>";
				tabungan_investasi_ket = "Selamat! Porsi pendapatan bulanan yang Anda sisihkan untuk tabungan & investasi sudah baik, yaitu minimal 10% dari pendapatan bulanan. Dengan alokasi aset yang konsisten, Anda akan meningkatkan total aset yang Anda miliki.";
			}
		}
		
		if(tabungan_investasi_teks!="")
		{
			$('.rasio_tabungan_investasi').html(tabungan_investasi_teks);
			$('.tabungan_investasi_ket').html(tabungan_investasi_ket);
			$('.sum_tabungan_investasi').html("<span> Anda bernilai "+rasio_tabungan_investasi+"%</span>");
			$('.sum_tabungan_investasi_ket').html(tabungan_investasi_ket);
		}
		
		/* ---------- Hutang Terhadap Aset ---- */
		
		var hutang_aset = Math.round( ( parseInt(total_hutang) / parseInt(total_aset) ) * 100 );
		var hutang_aset_teks = "";
		var hutang_aset_ket = "";
		
		if(hutang_aset > 50)
		{
			hutang_aset_teks = "<div style='color:red; font-size: 18px;'>" + hutang_aset + "%</div>";
			hutang_aset_ket = "Perbandingan antara total hutang dan aset Anda melebihi angka ideal, yaitu di bawah 50%. Dengan kondisi ini apabila hutang Anda harus dilunasi secepatnya, maka diperlukan lebihdari 50% aset Anda untuk melunasinya. Semakin tinggi angka dari rasio ini, maka risiko terjadinya kebangkrutan akan semakin tinggi. Untuk menekan angka rasio ini, sebaiknya hutang konsumtif dikurangi. Apabila Anda masih memiliki porsi lebih dari pendapatan yang belum dialokasikan maka segerakan pelunasan cicilah hutang Anda.";
		}
		else
		{
			if(isNaN(hutang_aset) == false)
			{
				hutang_aset_teks = "<div style='font-size: 18px;'>" + hutang_aset + "%</div>";
				hutang_aset_ket = "Selamat! Perbandingan antara total hutang dan aset Anda sudah baik, yaitu di bawah 50%. Dengan kondisi ini apabila hutang Anda harus dilunasi secepatnya, maka maksimal hanya 50% dari aset Anda yang diperlukan untuk melunasinya. Semakin tinggi angka dari rasio ini, maka risiko terjadinya kebangkrutan akan semakin tinggi.";
			}
		}
		
		if(hutang_aset_teks!="")
		{
			$('.hutang_aset').html(hutang_aset_teks);
			$('.hutang_aset_ket').html(hutang_aset_ket);
			$('.sum_hutang_aset').html("<span> Anda bernilai "+hutang_aset+"%</span>");
			$('.sum_hutang_aset_ket').html(hutang_aset_ket);
		}
		
		/* ---------- Total Investasi Terhadap Kekayaan Bersih -------- */
		
		var total_investasi = Math.round( ( parseInt(aset_investasi) / parseInt(kekayaan_bersih) ) * 100 );
		var total_investasi_teks = "";
		var total_investasi_ket = "";
		
		if(total_investasi < 50)
		{
			total_investasi_teks = "<div style='color:red; font-size: 18px;'>" + total_investasi + "%</div>";
			total_investasi_ket = "Total aset investasi Anda masih kurang dari porsi yang ideal, yaitu minimal 50% total aset Anda. Apabila ada hutang yang harus segera dilunasi dan aset likuid tidak mencukupi, aset investasi Anda tidak dapat menutupi kekurangan tersebut sehingga kondisi finansial Anda akan terdampak. Untuk peningkatan aset investasi, Anda dapat meningkatkan porsi investasi bulanan dari pendapatan yang Anda terima.";
		}
		else
		{
			if(isNaN(total_investasi) == false)
			{
				total_investasi_teks = "<div style='font-size: 18px'>" + total_investasi + "%</div>";
				total_investasi_ket = "Selamat! Total aset investasi Anda sudah berada pada porsi yang ideal, yaitu lebih dari 50% total aset Anda. Apabila ada hutang yang harus segera dilunasi dan aset likuid tidak mencukupi, Anda masih dapat menggunakan aset investasi sehingga kondisi finansial Anda akan tetap stabil. Dengan alokasi aset investasi yang konsisten, Anda akan memiliki produktivitas aset yang tinggi.";
			}
		}
		
		if(total_investasi_teks!="")
		{
			$('.investasi').html(total_investasi_teks);
			$('.investasi_ket').html(total_investasi_ket);
			$('.sum_investasi').html("<span> Anda bernilai "+total_investasi+"%</span>");
			$('.sum_investasi_ket').html(total_investasi_ket);
		}
		
	});
	
	$('#open_head_3').click(function(e){
		
		var aset_likuid = $('#aset1').autoNumeric('get');
		var total_aset = $('#subtotalaset').autoNumeric('get');
		var total_pengeluaran = $('#totalpengeluaran').autoNumeric('get');
		var kekayaan_bersih = $('#kekayaan_bersih').autoNumeric('get');
		var total_hutang = $('#subtotalhutang').autoNumeric('get');
		var tabungan_investasi = $('#pengeluaran1').autoNumeric('get');
		var total_pendapatan = $('#totalpendapatan').autoNumeric('get');
		var aset_investasi = $('#aset2').autoNumeric('get');
		
		
		/* --------- Likuiditas ---------- */
		
		var x = parseInt(aset_likuid) / parseInt(total_pengeluaran);
		var likuiditas = Math.floor(x);
		var likuiditas_teks = "";
		var likuiditas_ket = "";
		
		if(likuiditas < 3 || likuiditas > 6) 
		{
			if(likuiditas > 6)
			{
				likuiditas_teks = "<div style='font-size: 18px;'>"+likuiditas+" bulan</div>";
				likuiditas_ket = "Selamat! Dana Darurat yang Anda miliki lebih dari cukup untuk menutupi kebutuhan rutin bulanan Anda antara 3 - 6 bulan. Dana darurat berfungsi untuk menutupi pengeluaran yang bersifat insidentil yang tidak diperhitungkan pengeluaran bulanan Anda. Contoh dari penggunaan dana darurat adalah untuk biaya pengobatan. Dana darurat yang berlebih dapat Anda investasikan agar aset Anda lebih produktif.";
			}
			else {
				likuiditas_teks = "<div style='color:red; font-size: 18px;'>"+likuiditas+" bulan</div>";
				likuiditas_ket = "Anda belum memiliki dana darurat yang cukup untuk menutupi kebutuhan rutin bulanan Anda antara 3 - 6 bulan. Dana darurat berfungsi untuk menutupi pengeluaran yang bersifat insidentil yang tidak diperhitungkan dalam pengeluaran bulanan Anda. Contoh dari penggunaan dana darurat adalah untuk biaya pengobatan. Sebaiknya Anda terlebih dahulu meningkatkan dana darurat Anda sebelum mulai berinvestasi";
			}
		}
		else {
			if(isNaN(likuiditas) == false)
			{
				likuiditas_teks = "<div style='font-size: 18px;'>"+likuiditas+" bulan</div>";
				likuiditas_ket = "Selamat! Anda sudah memiliki dana darurat yang cukup untuk menutupi rutin bulanan Anda antara 3 - 6 bulan. Dana darurat berfungsi untuk menutupi pengeluaran yang bersifat insidentil yang tidak diperhitungkan dalam pengeluaran bulanan Anda.";
			}
		}
		
		if(likuiditas_teks!="")
		{
			$('.likuiditas').html(likuiditas_teks);
			$('.likuiditas_ket').html(likuiditas_ket);
			$('.sum_likuiditas').html("<span> Anda bernilai "+likuiditas+" bulan</span>");
			$('.sum_likuiditas_ket').html(likuiditas_ket);
		}
		
		/* ---------- Aset Likuid --------- */
		
		var rasio_aset_likuid = Math.round( ( parseInt(aset_likuid) / parseInt(total_aset) ) * 100 );
		var aset_likuid_teks = "";
		var aset_likuid_ket = "";
		
		if(rasio_aset_likuid > 15) 
		{
			aset_likuid_teks = "<div style='color:red; font-size: 18px;'>"+rasio_aset_likuid+"%</div>";
			aset_likuid_ket = "Aset yang Anda miliki lebih tinggi dibandingkan porsi idealnya, yaitu 15% dari total aset Anda. Jumlah aset likuid yang terlalu tinggi akan menurunkan tingkat produktivitas aset. Anda dapat melakukan realokasi aset likuid ke dalam bentuk investasi yang lebih produktif";
		}
		else 
		{
			if(isNaN(rasio_aset_likuid) == false)
			{
				aset_likuid_teks = "<div style='font-size: 18px;'>"+rasio_aset_likuid+"%</div>";
				aset_likuid_ket = "Selamat! Aset likuid yang Anda miliki sudah dalam rentang yang ideal, yaitu kurang dari 15% total aset Anda. Jumlah aset likuid yang terlalu tinggi akan menurunkan tingka produktivitas aset Anda.";
			}
		}
		
		if(aset_likuid_teks!="")
		{
			$('.aset_likuid').html(aset_likuid_teks);
			$('.aset_likuid_ket').html(aset_likuid_ket);
			$('.sum_aset_likuid').html("<span> Anda bernilai "+rasio_aset_likuid+"%</span>");
			$('.sum_aset_likuid_ket').html(aset_likuid_ket);
		}
			
		/* ---------- Tabungan & Investasi ------- */
		
		var rasio_tabungan_investasi = Math.round( ( parseInt(tabungan_investasi) / parseInt(total_pendapatan) ) * 100 );
		var tabungan_investasi_teks = "";
		var tabungan_investasi_ket = "";
		if(rasio_tabungan_investasi < 10)
		{
			tabungan_investasi_teks = "<div style='color:red; font-size: 18px;'>"+rasio_tabungan_investasi+"%</div>";
			tabungan_investasi_ket = "Porsi pendapatan bulanan yang Anda sisihkan untuk tabungan & investasi masih di bawah angka ideal, yaitu minimal 10% dari pendapatan bulanan. Anda dapat meningkatkan rasio ini dengan menambahkan alokasi bulanan Anda untuk menabung / investasi. Salah satu cara yang dapat dilakukan adalah dengan segera menyisihkan porsi untuk tabungan / investasi setelah mendapatkan pendapatan, sehingga yang Anda tabung / investasikan bukanlah sisa dari pendapatan Anda. Dengan alokasi aset yang konsisten, Anda dapat meningkatkan total aset yang Anda miliki.";
		}
		else 
		{
			if(isNaN(rasio_tabungan_investasi) == false)
			{
				tabungan_investasi_teks = "<div style='font-size: 18px;'>"+rasio_tabungan_investasi+"%</div>";
				tabungan_investasi_ket = "Selamat! Porsi pendapatan bulanan yang Anda sisihkan untuk tabungan & investasi sudah baik, yaitu minimal 10% dari pendapatan bulanan. Dengan alokasi aset yang konsisten, Anda akan meningkatkan total aset yang Anda miliki.";
			}
		}
		
		if(tabungan_investasi_teks!="")
		{
			$('.rasio_tabungan_investasi').html(tabungan_investasi_teks);
			$('.tabungan_investasi_ket').html(tabungan_investasi_ket);
			$('.sum_tabungan_investasi').html("<span> Anda bernilai "+rasio_tabungan_investasi+"%</span>");
			$('.sum_tabungan_investasi_ket').html(tabungan_investasi_ket);
		}
		
		/* ---------- Hutang Terhadap Aset ---- */
		
		var hutang_aset = Math.round( ( parseInt(total_hutang) / parseInt(total_aset) ) * 100 );
		var hutang_aset_teks = "";
		var hutang_aset_ket = "";
		
		if(hutang_aset > 50)
		{
			hutang_aset_teks = "<div style='color:red; font-size: 18px;'>" + hutang_aset + "%</div>";
			hutang_aset_ket = "Perbandingan antara total hutang dan aset Anda melebihi angka ideal, yaitu di bawah 50%. Dengan kondisi ini apabila hutang Anda harus dilunasi secepatnya, maka diperlukan lebihdari 50% aset Anda untuk melunasinya. Semakin tinggi angka dari rasio ini, maka risiko terjadinya kebangkrutan akan semakin tinggi. Untuk menekan angka rasio ini, sebaiknya hutang konsumtif dikurangi. Apabila Anda masih memiliki porsi lebih dari pendapatan yang belum dialokasikan maka segerakan pelunasan cicilah hutang Anda.";
		}
		else
		{
			if(isNaN(hutang_aset) == false)
			{
				hutang_aset_teks = "<div style='font-size: 18px;'>" + hutang_aset + "%</div>";
				hutang_aset_ket = "Selamat! Perbandingan antara total hutang dan aset Anda sudah baik, yaitu di bawah 50%. Dengan kondisi ini apabila hutang Anda harus dilunasi secepatnya, maka maksimal hanya 50% dari aset Anda yang diperlukan untuk melunasinya. Semakin tinggi angka dari rasio ini, maka risiko terjadinya kebangkrutan akan semakin tinggi.";
			}
		}
		
		if(hutang_aset_teks!="")
		{
			$('.hutang_aset').html(hutang_aset_teks);
			$('.hutang_aset_ket').html(hutang_aset_ket);
			$('.sum_hutang_aset').html("<span> Anda bernilai "+hutang_aset+"%</span>");
			$('.sum_hutang_aset_ket').html(hutang_aset_ket);
		}
		
		/* ---------- Total Investasi Terhadap Kekayaan Bersih -------- */
		
		var total_investasi = Math.round( ( parseInt(aset_investasi) / parseInt(kekayaan_bersih) ) * 100 );
		var total_investasi_teks = "";
		var total_investasi_ket = "";
		
		if(total_investasi < 50)
		{
			total_investasi_teks = "<div style='color:red; font-size: 18px;'>" + total_investasi + "%</div>";
			total_investasi_ket = "Total aset investasi Anda masih kurang dari porsi yang ideal, yaitu minimal 50% total aset Anda. Apabila ada hutang yang harus segera dilunasi dan aset likuid tidak mencukupi, aset investasi Anda tidak dapat menutupi kekurangan tersebut sehingga kondisi finansial Anda akan terdampak. Untuk peningkatan aset investasi, Anda dapat meningkatkan porsi investasi bulanan dari pendapatan yang Anda terima.";
		}
		else
		{
			if(isNaN(total_investasi) == false)
			{
				total_investasi_teks = "<div style='font-size: 18px'>" + total_investasi + "%</div>";
				total_investasi_ket = "Selamat! Total aset investasi Anda sudah berada pada porsi yang ideal, yaitu lebih dari 50% total aset Anda. Apabila ada hutang yang harus segera dilunasi dan aset likuid tidak mencukupi, Anda masih dapat menggunakan aset investasi sehingga kondisi finansial Anda akan tetap stabil. Dengan alokasi aset investasi yang konsisten, Anda akan memiliki produktivitas aset yang tinggi.";
			}
		}
		
		if(total_investasi_teks!="")
		{
			$('.investasi').html(total_investasi_teks);
			$('.investasi_ket').html(total_investasi_ket);
			$('.sum_investasi').html("<span> Anda bernilai "+total_investasi+"%</span>");
			$('.sum_investasi_ket').html(total_investasi_ket);
		}
		
	});
	
	$(".aktual-aruskas").click(function(){
        
        $(".head_2").hide();
        $(".head_3").hide();
        $(".head_1").fadeIn();

        $("#open_head_2").removeClass("active");
        $("#open_head_3").removeClass("active");
        $("#open_head_1").addClass("head_wiz_1 active");

        $(".stepform").hide();
        $("#step_1").fadeIn();
        $(".wiz li").removeClass();
        $("#wiz_1").addClass("cur");

    });
    
    $(".aktual-neraca").click(function(){
        
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
    
    /* ================= End of Rasio Keuangan ====================== */
    
    $('.sendEmail').click(function(){
	    if($('.email-user').val() != "")
	    {
	      $.ajax({
	        type: 'POST',
	        url: '/send_finansial_rasio',
	        data: {
	          email : $('.email-user').val(),
	          likuiditas : $('.likuiditas').text(),
	          aset_likuid : $('.aset_likuid').text(),
	          tabungan_investasi : $('.rasio_tabungan_investasi').text(),
	          hutang_aset : $('.hutang_aset').text(),
	          investasi : $('.investasi').text(),
	          likuiditas_ket : $('.sum_likuiditas_ket').text(),
	          aset_likuid_ket : $('.sum_aset_likuid_ket').text(),
	          tabungan_investasi_ket : $('.sum_tabungan_investasi_ket').text(),
	          hutang_aset_ket : $('.sum_hutang_aset_ket').text(),
	          investasi_ket : $('.sum_investasi_ket').text()
	          
	        },
	        success: function()
	        {
		      $('.sukses').html('<p> Email telah terkirim, silahkan cek email Anda </p>');
	          //var url = window.location.origin+'/website/static/inv-fbshare/'+response;
	          //alert("Email telah dikirim, silahkan cek email Anda");
	        }
	      });
	    }
	    else{
	      alert("Alamat email harus diisi.");
	    }
	});
	
/* =============== Added by Handri Pangestiaji 28 Desember 2014 ================= */

/* =============== Added by Bena 05 Jan 2015 ================= */
$(".auto").keyup(function(event){	
	    var nilai = $(this).autoNumeric('get');
	    $(this).autoNumeric('set', nilai);
	});
/* =============== Added by Bena 05 Jan 2015 ================= */

})

/* =============== Added by Handri Pangestiaji 8 Jan 2015 ======================= */
$("#keuangan").click(function(){
    window.location.href = "/financial-planning/financial-planning";
 });
 
$("#kalkulator").click(function(){
    window.location.href = "/kalkulator";
 }); 
/* =============== Added by Handri Pangestiaji 8 Jan 2015 ======================= */
</script>


