<?php

    /**
     * website/views/areas/tasbih-skema/view.php
     * Tasbih Skema
     */

?>

<style>

    section.tasbih-skema
    {
        background: white;
    }

    .tasbih-skema .container
    {
        background: white;
        font-size: 14px;
        font-weight: normal;
    }

    table.tasbih-skema
    {
        min-width: 100%;
        margin: 0 auto;
    }

    table.tasbih-skema > thead
    {
        background: #c3d69b;
        color: black;
    }

    table.tasbih-skema > thead > tr > th
    {
        font-weight: normal;
        padding: 8px 8px;
    }

    table.tasbih-skema > thead > tr:first-child,
    table.tasbih-skema > thead > tr:nth-child(2)
    {
        background: #19791e;
        color: white;
    }

    table.tasbih-skema > thead > tr:nth-child(2) > th
    {
        border: solid 1px #c3d69b;
        border-bottom: none;
    }

    table.tasbih-skema > thead > tr > th > h3
    {
        font-weight: bold;
    }

    table.tasbih-skema > tbody td,
    table.tasbih-skema > tfoot td
    {
        padding: 8px;
        border: solid 1px white;
        background: #eaffd1 !important;
    }

    table.tasbih-skema td.text-center,
    table.tasbih-skema th.text-center
    {
        text-align: center !important;
    }

    table.tasbih-skema td.text-right,
    table.tasbih-skema th.text-right
    {
        text-align: right !important;
    }

    table.tasbih-skema > tbody input[type="text"]
    {
        background: #d9d9d9;
        border: none;
        text-align: right;
        padding: 4px;
        width: 100%;
    }

</style>


<section class="tasbih-skema">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <table class="tasbih-skema" celpadding="3" cellspacing="1">
                    <thead>
                        <tr>
                            <th colspan="2"><h3>Simulasi Asumsi Biaya Untuk Naik Haji</h3></th>
                            <th colspan="3" align="right">
                                - <em>Silahkan pilih tipe ONH Anda</em>.<br />
                                - <em>Silahkan masukan jumlah biaya pada kolom abu-abu</em>.
                            </th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Asumsi Kebutuhan</th>
                            <th>Asumsi Biaya Saat ini(IDR)</th>
                            <th>Asumsi Kenaikan</th>
                            <th>Asumsi Biaya Akan Datang(IDR)</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th><label><input type="radio" value="REG"> Biaya Haji(ONH) Reguler</label></th>
                            <th class="text-right">45,000,000</th>
                            <th class="text-center">5%</th>
                            <th class="text-right">47,250,000</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>
                                <label><input type="radio" value="PLUS"> Biaya Haji(ONH) Plus</label>
                            </th>
                            <th class="text-right">60,000,000</th>
                            <th class="text-center">10%</th>
                            <th class="text-right">66,000,000</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th><strong>Biaya Pendaftaran Haji(Setoran Awal)</strong></th>
                            <th class="text-right">31,500,000</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Kekurangan Biaya ONH</td>
                            <td class="text-right">13,500,000</td>
                            <td class="text-center">5%</td>
                            <td class="text-right">15,750,000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3" class="text-right"><strong>ASUMSI TOTAL SISA PELUNASAN ONH</strong></td>
                            <td class="text-right">34,500,000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3">Biaya-Biaya Lain</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Biaya Tambahan Yayasan</td>
                            <td><input type="text" id="bty" placeholder="0" value="3,000,000"></td>
                            <td class="text-center">5%</td>
                            <td class="text-right"><span id="bty-result">3,150,000</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Biaya Konsumsi 150rb/hari*</td>
                            <td><input type="text" id="bkn" placeholder="0" value="6,000,000"></td>
                            <td class="text-center">5%</td>
                            <td class="text-right"><span id="bkn-result">6,300,000</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Biaya Transportasi 50rb/hari*</td>
                            <td><input type="text" id="btt" placeholder="0" value="2,000,000"></td>
                            <td class="text-center">5%</td>
                            <td class="text-right"><span id="btt-result">2,100,000</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Biaya Pemeriksaan Kesehatan*</td>
                            <td><input type="text" id="bpk" placeholder="0" value="600,000"></td>
                            <td class="text-center">5%</td>
                            <td class="text-right"><span id="bpk-result">630,000</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Biaya Darurat Haji*</td>
                            <td><input type="text" id="bdh" placeholder="0" value="5,000,000"></td>
                            <td class="text-center">5%</td>
                            <td class="text-right"><span id="bdh-result">5,250,000</span></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                <small><em>
                                    Daftar pengeluaran di atas bisa bertambah apabila diperlukan pengurusan dokumen passport<br />
                                    *) Asumsi kisaran jumlah yang diperlukan
                                </em></small>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right"><strong>ASUMSI DANA ONH+LAINNYA YANG DIPERLUKAN</strong></td>
                            <td class="text-right"><strong>64,480,000</strong></td>
                        </tr>
                    </tfoot>
                </table>

                <p><small><em>Sumber untuk biaya haji ONH Reguler: Kementrian Agama R.I, <a href="http://haji.kemenag.go.id/v2" target="_blank">http://haji.kemenag.go.id/v2</a></em></small></p>

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

    </div><!--/ .container -->
</section><!--/ . -->
