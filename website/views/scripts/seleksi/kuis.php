<link rel="stylesheet" href="/website/static/css-ajfc/style.css" />
<link rel="stylesheet" href="/website/static/mobilku/wizard-step.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css-ajfc/bootstrap.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css" />
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css" />
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/data-table-1.10.4/media/css/jquery.dataTables.css" />

<!-- AJFC -->
<link rel="stylesheet" type="text/css" href="/website/ajfc/css/style.css" />
<script src="/website/ajfc/js/javascripts.js"></script>
<style type="text/css">
    .stepwizard
    {
        text-align: center;
        position: relative;
        display: block;
    }

    .stepwizard::before
    {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 4px;
        margin-top: -2px;
        background: #ccc;
    }

    .stepwizard > .stepwizard-row
    {
        display: block;
    }

    .stepwizard > .stepwizard-row::before
    {
        content: none;
    }

    .stepwizard > .stepwizard-row > .stepwizard-step
    {
        display: inline-block;
        margin: 0 16px;
    }

    .btn-froze
    {
        pointer-events: none;
        opacity: 0.4;
    }

    @media ( max-width: 767px )
    {
        .container.boxes-view
        {
            padding: 0 !important;
        }
        .cusSoal
        {
            padding: 0 !important;
        }
    }
    @media ( max-width: 480px )
    {
        .wizard-footer .pull-left, .wizard-footer .pull-right, .wizard-footer .pull-left input[type="button"], .wizard-footer .pull-right input[type="button"], wizard-footer .pull-right .btn-finish
        {
            width: 100% !important;
            margin: 3px 0;
        }
        .nextBtn.next-question{
            margin: 3px 0px;
        }
        .fbAJFC .fb-link{
            padding: 8px 0px;
        }
        .form-group .radio-inline{
            padding-left: 15px;
        }
    }

</style>

<!-- Plugins -->
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="/website/static/mobilku/wizard.js"></script>
<script src="/website/static/mobilku/data-table-1.10.4/media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="/website/static/mobilku/jquery.validate.min.js"></script>

<div class="loading-ajfc">
    <div class="loading-inner">
        <i class="fa fa-refresh fa-2x fa-spin"></i>
    </div><!--/ .loading-inner -->
</div><!--/ .loading-ajfc -->

<header>
    <div class="background">
        <?php $asets=Asset::getByPath('/ajfc/background/bgkuis.jpg');?>
        <img src="<?php echo $asets; ?>" alt="background kuis" class="img-responsive" />
    </div><!--/ .background -->
</header>

<div class="page-wrapper-outer">
    <section class="page-wrapper mt32 mb72">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="main-content nopadding">

<div class="container boxes-view">
    <div id="newsletter-allianz" class="full-w bg-white">
        <div class="description">
            <div class="wizard-container">
                <form id="myform" method="post" action="/save-kuis" enctype="multipart/form-data">

                    <div class="card wizard-card ct-wizard-blue" id="wizard">

                        <!--
                        You can switch "ct-wizard-orange" with one of the next bright
                        colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"
                        -->

                        <div class="wizard-header"></div>

                        <ul>
                            <li class="first"><a href="#tahap1" data-toggle="tab">Tahap 1</a></li>
                            <li class="second"><a href="#tahap2" data-toggle="tab">Tahap 2</a></li>
                            <li class="third"><a href="#tahap3" data-toggle="tab">Tahap 3</a></li>
                        </ul>

                        <br />

                        <img src="#" alt="banner-ajfc" class="banner-ajfc" />

                        <div class="tab-content">
                            <div class="tab-pane" id="tahap1">
                                <div class="form-title">FORM KELENGKAPAN DATA PESERTA AJFC 2015</div>
                                <div class="container-fluid">
                                    <div class="row ta-left fc666">
                                        <div class="col-md-6">
                                            <?php foreach( $this->peserta as $row ){
                                                    $propinsi = ucwords(strtolower($row->getPropinsi()));
                                                    $val_pekerjaan = ucwords(strtolower($row->getPekerjaanOrtu()));
                                                    $pendidikanAyah = strtoupper($row->getPendidikanAyah());
                                                    $pendidikanIbu = strtoupper($row->getPendidikanIbu());
                                                    $informasi = explode(",",ucwords(strtolower($row->getInformasi())));
                                            ?>
                                            <input type="hidden" name="idPeserta" value="<?php echo $row->getO_id()."-".$row->getIdPeserta(); ?>" />

                                            <div class="form-group">
                                                <label for="nama" name="nama">Nama Lengkap<span class="spanRed">*</span> (Sesuai akte kelahiran/Passport)</label>
                                                <input type="text" readonly="readonly" class="form-control" id="nama" value="<?php echo $row->getNamaLengkap();?>" name="nama" placeholder="Nama Lengkap*">
                                            </div><!--/ .form-group -->

                                            <div class="message-info">
                                                <div class="form-group">
                                                    <label for="exampleInputName2" name="ttl">Tempat/ Tanggal Lahir<span class="spanRed">*</span> (Kota, DD/MM/YYYY)</label>
                                                    <div class="controls form-inline">
                                                        <input type="text" name="tmp" value="<?php echo $row->getTempatLahir();?>" class="form-control ttl" id="tmp-lahir" placeholder="">
                                                        <input type="text" name="tgl" readonly="readonly" value="<?php echo date("d / m / Y",strtotime($row->getTanggalLahir()));?>"class="form-control ttl" id="tgl-lahir" placeholder="DD/MM/YYYY">
                                                    </div>
                                                </div><!--/ .form-group -->
                                                <div class="info-error"></div>
                                            </div><!--/ .message-info -->

                                            <div class="form-group">
                                                <label for="tgl-lahir">Jenis Kelamin<span class="spanRed">*</span></label>
                                                <?php
                                                if($row->getJenisKelamin() == "Laki-laki")
                                                {
                                                    $checked1 = "checked='checked'";
                                                    $checked2 = "";
                                                }
                                                elseif($row->getJenisKelamin() == "Perempuan")
                                                {
                                                    $checked2 = "checked='checked'";
                                                    $checked1 = "";
                                                }
                                                else
                                                {
                                                    $checked1 = "";
                                                    $checked2 = "";
                                                }
                                                ?>
                                                <div class="message-info">
                                                    <div class="form-group">
                                                        <label class="radio-inline">
                                                            <input <?php echo $checked1;?> type="radio" name="radioJK" id="laki-laki" value="Laki-laki" /> Laki-laki
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input <?php echo $checked2;?> type="radio" name="radioJK" id="perempuan" value="Perempuan" /> Perempuan
                                                        </label>
                                                    </div><!--/ .form-group -->
                                                    <div class="info-error"></div>
                                                </div><!--/ .message-info -->
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="nama" name="nama">Jumlah Saudara Kandung Termasuk Kamu</label>
                                                <label class="cusError">
                                                    <!--<input type="text" class="form-control" id="jumSaudara" name="jumSaudara" placeholder="">-->
                                                    <?php
                                                        $jumSaudara = $row->getJumSaudara();
                                                    ?>
                                                    <select name="jumSaudara" class="form-control" id="jumSaudara">
                                                        <option value="">Jumlah Saudara</option>
                                                        <?php
                                                            for( $x = 1; $x <= 10; $x++ ){
                                                                if($x == $jumSaudara ){
                                                                    echo '<option value="' . $x . '" selected="selected">';
                                                                }
                                                                else{
                                                                    echo '<option value="' . $x . '">';
                                                                }
                                                                echo $x . '</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                    <span class="spanOrg">Orang</span>
                                                </label>
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="tgl-lahir">Apakah kamu memiliki Passport<span class="spanRed">*</span></label>
                                                <?php
                                                    $passport = $row->getPasport();
                                                    if($passport == "Ya")
                                                    {
                                                        $checked1 = "checked='checked'";
                                                        $checked2 = "";
                                                    }
                                                    elseif($passport == "Tidak")
                                                    {
                                                        $checked2 = "checked='checked'";
                                                        $checked1 = "";
                                                    }
                                                    else
                                                    {
                                                        $checked1 = "";
                                                        $checked2 = "";
                                                    }
                                                ?>
                                                <div class="message-info">
                                                    <div class="form-group">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="pasport" id="ya" value="Ya" <?php echo $checked1;?> /> Ya
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="pasport" id="tidak" value="Tidak" <?php echo $checked2;?> /> Tidak
                                                        </label>
                                                    </div><!--/ .form-group -->
                                                    <div class="info-error"></div>
                                                </div><!--/ .message-info -->
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">Email<span class="spanRed">*</span></label>
                                                <input readonly="readonly" type="text" class="form-control" name="email" id="email" value="<?php echo $row->getEmail();?>" placeholder="Email*">
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">Nomer Telepon / HP<span class="spanRed">*</span></label>
                                                <div class="message-info">
                                                    <input value="<?php echo $row->getNoHp();?>" type="text" class="form-control" name="no-telp" id="no-tlp" placeholder="Nomer Telepon / HP*">
                                                    <div class="info-error"></div>
                                                </div><!--/ .message-info -->
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">Kota / Propinsi<span class="spanRed">*</span></label><br />
                                                <div class="message-info">
                                                    <select name="propinsi" class="form-control" id="propinsi">
                                                        <option value="">Pilih Propinsi</option>
                                                        <option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
                                                        <option value="Sumatera Utara">Sumatera Utara</option>
                                                        <option value="Sumatera Barat">Sumatera Barat</option>
                                                        <option value="Riau">Riau</option>
                                                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                                                        <option value="Jambi">Jambi</option>
                                                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                                                        <option value="Bangka Belitung">Bangka Belitung</option>
                                                        <option value="Bengkulu">Bengkulu</option>
                                                        <option value="Lampung">Lampung</option>
                                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                                        <option value="Jawa Barat">Jawa Barat</option>
                                                        <option value="Banten">Banten</option>
                                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                                        <option value="DI Yogyakarta">DI Yogyakarta</option>
                                                        <option value="Jawa Timur">Jawa Timur</option>
                                                        <option value="Bali">Bali</option>
                                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                        <option value="Gorontalo">Gorontalo</option>
                                                        <option value="Maluku">Maluku</option>
                                                        <option value="Maluku Utara">Maluku Utara</option>
                                                        <option value="Papua Barat">Papua Barat</option>
                                                        <option value="Papua">Papua</option>
                                                    </select>
                                                    <div class="info-error"></div>
                                                </div><!--/ .message-info -->
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">
                                                    Alamat Tempat Tinggal Saat Ini<span class="spanRed">*</span>
                                                </label>
                                                <textarea class="form-control" name="alamat" id="alamat" rows="3" style="height:70px !important" placeholder="Alamat Tempat Tinggal Saat Ini*"><?php echo $row->getAlamat();?></textarea>
                                            </div><!--/ .form-group -->

                                            <?php } ?>

                                        </div><!--/ .col-md-6 -->
                                        <div class="col-md-6 padleft40">

                                            <div class="form-group">
                                                <label for="exampleInputName2">Nama Orang Tua/ Wali<span class="spanRed">*</span></label>
                                                <input type="text" class="form-control" name="namaOrtu" id="nama-ortu" placeholder="Nama Orang Tua/ Wali*" value="<?php echo $row->getNamaOrtu();?>" />
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">No. Telepon Orang Tua/ Wali<span class="spanRed">*</span></label>
                                                <input type="text" class="form-control" name="noHp" id="hp-ortu" placeholder="No. Telepon Orang Tua/ Wali*" value="<?php echo $row->getNoHpOrtu();?>" />
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">Email Orang Tua</label>
                                                <input type="text" class="form-control" name="emailOrtu" id="email-ortu" placeholder="Email Orang Tua" value="<?php echo $row->getEmailOrtu();?>" />
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">Alamat Lengkap Orang Tua<span class="spanRed">*</span></label>
                                                <textarea class="form-control" rows="3" name="alamatOrtu" style="height:70px !important" placeholder="Alamat Lengkap Orang Tua"><?php echo $row->getAlamatOrtu();?></textarea>
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="tgl-lahir">Pekerjaan Orang Tua<span class="spanRed">*</span></label>
                                                <div class="message-info">
                                                    <div class="form-group" id="pekerjaan_ortu">
                                                        <div class="form-group nomargin">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="pekerjaan" id="kary-swasta" value="Karyawan Swasta"> Karyawan Swasta
                                                            </label>
                                                        </div><!--/ .form-group -->
                                                        <div class="form-group nomargin">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="pekerjaan" id="pns" value="Pegawai Negeri"> Pegawai Negeri
                                                            </label>
                                                        </div><!--/ .form-group -->
                                                        <div class="form-group nomargin">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="pekerjaan" id="wirausaha" value="Wirausaha"> Wirausaha
                                                            </label>
                                                        </div><!--/ .form-group -->
                                                        <div class="form-group nomargin">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="pekerjaan" id="lainnya" value="Lainnya"> Lainnya
                                                                <!--<div class="form-group">
                                                                    <input type="text" class="form-control" name="pekerjaan-lain" id="txt-lainnya" placeholder="Pekerjaan Lain">
                                                                </div>--><!--/ .form-group -->
                                                            </label>
                                                            <div class="radio-inline kerja-lain" style="padding: 0;position: absolute;">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="pekerjaan-lain" id="txt-lainnya" placeholder="Pekerjaan Lain">
                                                                </div>
                                                            </div>
                                                        </div><!--/ .form-group -->
                                                    </div><!--/ .form-group -->
                                                </div><!--/ .message-info -->
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">
                                                    Usia Orang Tua<span class="spanRed">*</span>
                                                </label>
                                                <div class="message-info">
                                                    <div class="controls form-inline">
                                                        <table>
                                                            <tr>
                                                                <td>Ayah</td>
                                                                <td>: &nbsp;</td>
                                                                <td><input type="text" name="usiaAyah" class="form-control ttl" id="usiaAyah" placeholder="Tahun" maxlength="2" value="<?php echo $row->getUsiaAyah();?>" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ibu</td>
                                                                <td>: &nbsp;</td>
                                                                <td><input type="text" name="usiaIbu" class="form-control ttl" id="usiaIbu" placeholder="Tahun" maxlength="2" value="<?php echo $row->getUsiaIbu();?>" /></td>
                                                            </tr>
                                                        </table>
                                                    </div><!--/ .controls -->
                                                </div>
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">
                                                    Pendidikan Terakhir Orang Tua<span class="spanRed">*</span>
                                                </label>
                                                <div class="message-info">
                                                    <div class="controls form-inline">
                                                        <table>
                                                            <tr>
                                                                <td>Ayah</td>
                                                                <td>:&nbsp;</td>
                                                                <td>
                                                                    <select name="pendidikanAyah" class="form-control" id="pendidikanAyah">
                                                                        <option value="">Pendidikan Ayah</option>
                                                                        <option value="SD">SD</option>
                                                                        <option value="SMP">SMP</option>
                                                                        <option value="SMA">SMA</option>
                                                                        <option value="D1">D1</option>
                                                                        <option value="D2">D2</option>
                                                                        <option value="D3">D3</option>
                                                                        <option value="S1">S1</option>
                                                                        <option value="S2">S2</option>
                                                                        <option value="S3">S3</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ibu</td>
                                                                <td>:&nbsp;</td>
                                                                <td>
                                                                    <select name="pendidikanIbu" class="form-control" id="pendidikanIbu">
                                                                        <option value="">Pendidikan Ibu</option>
                                                                        <option value="SD">SD</option>
                                                                        <option value="SMP">SMP</option>
                                                                        <option value="SMA">SMA</option>
                                                                        <option value="D1">D1</option>
                                                                        <option value="D2">D2</option>
                                                                        <option value="D3">D3</option>
                                                                        <option value="S1">S1</option>
                                                                        <option value="S2">S2</option>
                                                                        <option value="S3">S3</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div><!--/ .message-info -->
                                                <div class="info-error"></div>
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="exampleInputName2">Pengeluaran Orang Tua</label>
                                                <div class="controls form-inline">
                                                    Rp.<input type="text" name="pengeluaran" class="form-control ttl" id="pengeluaran" value="<?php echo number_format($row->getPengeluaranOrtu(),0,",",".");?>" /> / bulan
                                                </div><!--/ .controls -->
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="tgl-lahir">
                                                    Dari mana kamu dapat informasi tentang kamp ini?
                                                    <span class="spanRed">*</span>
                                                </label>
                                                <div class="checkbox-info" id="informasi_kamp">
                                                    <div class="form-group">
                                                        <div class="form-group nomargin">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="info[]" id="reklame" value="Papan Reklame"> Papan Reklame
                                                            </label>
                                                        </div><!--/ .form-group -->
                                                        <div class="form-group nomargin">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="info[]" id="medsos" value="Media Sosial"> Media Sosial (Facebook, Twitter, dll)
                                                            </label>
                                                        </div><!--/ .form-group -->
                                                        <div class="form-group nomargin">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="info[]" id="web" value="Website Allianz"> Website Allianz
                                                            </label>
                                                        </div><!--/ .form-group -->
                                                        <div class="form-group nomargin">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="info[]" id="kunjungan" value="Kunjungan Sekolah"> Kunjungan Sekolah/ SSB
                                                            </label>
                                                        </div><!--/ .form-group -->
                                                        <div class="form-group nomargin">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="info[]" id="ortu" value="Orang Tua"> Orang Tua/ Teman/ Saudara
                                                            </label>
                                                        </div><!--/ .form-group -->
                                                    </div><!--/ .form-group -->
                                                </div><!--/ .checkbox-info -->
                                            </div><!--/ .form-group -->

                                        </div><!--/ .col-md-6 -->
                                        <div class="col-md-12 term">

                                            <div class="checkbox-info">
                                                <div class="form-group">
                                                    <!--Silahkan berikan tanda centang pada pernyataan dibawah ini <br />-->
                                                    <label class="checkbox-inline" style="padding-top: 0px;">
                                                        <input type="checkbox" id="checkbox-term" name="term">
                                                        Saya setuju dengan syarat dan ketentuan yang berlaku.
                                                    </label>
                                                    <span class="backClose" data-toggle="modal" data-target="#syarat">
                                                        Baca syarat dan ketentuan.
                                                    </span>
                                                </div><!--/ .form-group -->
                                            </div><!--/ .checkbox-info -->
                                        </div><!--/ .col-md-12 -->

                                    </div><!--/ .row -->

                                </div><!--/ .container-fluid -->

                            </div><!--/ .tab-pane#tahap1 -->

                            <div class="tab-pane" id="tahap2">
                                <div class="form-title">FORM KELENGKAPAN DATA PESERTA AJFC 2015</div>
                                <div class="container-fluid">
                                    <div class="row ta-left fc666">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="1terpenting">Ceritakan #1ygterpenting untuk memotivasi diri kamu dan tim dalam menghadapi pertandingan?</label>
                                                <textarea class="form-control" rows="3" name="halTerpenting" required="required" style="height:100px !important"></textarea>
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="pilih">Pilih Foto (ukuran file foto maksimal 1 MB)</label>
                                                <div class="pilih">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <span class="btn btn-primary btn-file btn-choose">
                                                                Pilih <input type="file" name="uploadFoto" class="image_peserta" accept="image/x-png, image/jpeg" />
                                                            </span>
                                                        </span>
                                                        <input type="text" class="form-control choose" readonly>
                                                    </div><!--/ .input-group -->
                                                </div><!--/ .pilih -->
                                                <br />
                                                <div class="image_peserta_preview"></div>
                                            </div><!--/ .form-group -->

                                            <div class="form-group">
                                                <label for="pilih">Like Facebook Fanpage</label>
                                                <a href="https://www.facebook.com/AJFCIndonesia" target="_blank" class="fbAJFC">
                                                    <div class="fb-like"><img src="/website/static/images/ajfc/fb-like.png" /></div>
                                                    <div class="fb-link">AJFC Indonesia</div>
                                                    <input style="border: 0 solid #fff;box-shadow: inherit;pointer-events:none;" readonly="readonly" type="text" name="clickFB" class="form-control" id="clickFB" value="" />
                                                </a>
                                            </div><!--/ .form-group -->

                                        </div><!--/ .col-md-6 -->
                                    </div><!--/ .row -->
                                </div><!--/ .container-fluid -->
                            </div><!--/ .tab-pane#tahap2 -->

                            <div class="tab-pane" id="tahap3">
                                <div class="stepwizard hidden-xs">
                                    <div class="stepwizard-row setup-panel">
                                        <?php
                                            $soal   = new Object_Quiz_List();
                                            $number = 1;
                                            foreach( $soal as $row ):
                                                if($number == 1):
                                                    $disable = '';
                                                    $class = 'class="btn btn-primary btn-circle"';
                                                else:
                                                    $disable = 'disabled="disabled"';
                                                    $class = 'class="btn btn-default btn-circle"';
                                                endif;
                                                $attribute = $class . ' ' . $disable;
                                        ?>
                                        <div class="stepwizard-step">
                                            <a href="#step-<?php echo $number; ?>" type="button" <?php echo $attribute; ?>>
                                                <?php echo $number; ?>
                                            </a>
                                        </div><!--/ .stepwizard-step -->
                                        <?php
                                            $number++;
                                        endforeach;
                                        ?>
                                    </div><!--/ .stepwizard-row -->
                                </div><!--/ .stepwizard -->

                                <form role="form">
                                    <?php
                                    $soal   = new Object_Quiz_List();
                                    $number = 1;
                                    foreach( $soal as $row ):
                                        $sum_choice = count( $row->answer->items );
                                    ?>
                                    <div class="row setup-content" id="step-<?php echo $number;?>">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="row cusSoal">
                                                    <div class="form-group gap ta-left">
                                                        <label><?php echo $number.". ".$row->getQuestion();?></label>
                                                        <div class="form-group">
                                                            <?php for( $x = 0; $x < $sum_choice; $x++ ): ?>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" id="no1a" name="soal<?php echo $number;?>" value="<?php echo $row->answer->items[$x]->index; ?>">
                                                                    <?php echo $row->answer->items[$x]->getIsi_jawaban();?>
                                                                </label>
                                                            </div>
                                                            <?php endfor; ?>
                                                        </div><!--/ .form-group -->
                                                    </div><!--/ .form-group -->
                                                </div><!--/ .row -->
                                            </div><!--/ .form-group -->

                                            <button class="prevBtn next-question pull-left <?php if( ! ( $number > 1 ) ): echo ' btn-froze '; endif; ?>" type="button" style="margin-right: 8px !important;">Sebelumnya</button>

                                                <button class="nextBtn next-question pull-left <?php if( !( $number != count( $soal ) ) ): echo ' btn-froze'; endif; ?>" type="button" >Selanjutnya</button>

                                        </div><!--/ .col-xs-12 -->
                                    </div><!--/ .row -->

                                    <?php
                                        $number++;
                                    endforeach;
                                    ?>

                                </form>

                            </div><!--/ .tab-pane#tahap3 -->
                        </div><!--/ .tab-content -->

                        <div class="wizard-footer">
                            <div class="pull-left">
                                <input type="button" class="btn btn-previous btn-fill btn-warning btn-wd btn-sm" name="previous" value="Tahap Sebelumnya" />
                            </div><!--/ .pull-left -->
                            <div class="pull-right">
                                <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm" name="next" value="Tahap Selanjutnya" />
                                <input type="submit" class="btn btn-finish btn-fill btn-warning btn-wd btn-sm hide" name="finish" value="Selesai" />
                            </div><!--/ .pull-right -->
                            <div class="clearfix"></div>
                        </div><!--/ .wizard-footer -->

                    </div><!--/ .card#wizard -->
                </form> <!--form ajfc-->
            </div><!--/ .wizard container -->

        </div><!--/ .description -->

    </div><!--/ #newsletter-allianz -->

</div><!--/ .container -->

                    </div><!--/ .main-content -->
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </section><!--/ .page-wrapper -->
</div><!--/ .page-wrapper-outer -->

<!--
</div><!--/ lebih satu -->

<!-- Modal -->
<div class="modal fade modal-quiz" id="syarat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Syarat dan Ketentuan AJFC 2015</h4>
            </div><!--/ .modal-header -->
            <div class="modal-body cus-body">
                <ol>
                    <li>Kamu berusia 14-16 tahun (Tanggal lahir pada 19 Agustus 1998 s/d 12 Agustus 2001,
                        kamu harus sudah berusia 14 tahun atau masih berusia 16 tahun pada tanggal 13 Agustus 2015).</li>
                    <li>Belum pernah menjadi pemenang di AJFC tahun sebelumnya.</li>
                    <li>Sehat jasmani (tidak mengidap penyakit pernapasan, penyakit atau cacat bawaan lahir,
                        penyakit menular dan segala kondisi yang dapat mempengaruhi kondisi fisik untuk berolahraga).</li>
                    <li>Memberikan informasi mengenai orangtua berupa nomor telepon dan email secara benar dan
                        dapat dipercaya sebagai persetujuan dari orangtua untuk mengikuti program ini.</li>
                    <li>Memiliki akun email, facebook, dan/atau twitter aktif.</li>
                    <li>Bagi kamu yang lolos tahap ke-1 dan harus mengikuti tahap ke-2 di Jakarta, maka biaya
                        transportasi dan akomodasi menjadi tanggungan peserta masing-masing.</li>
                    <li>Bagi kamu yang menjadi pemenang Munich Camp 2015, diwajibkan untuk memiliki/membuat paspor
                        sebelum Munich Camp diselenggarakan.</li>
                    <li>Data yang dikirmkan sepenuhnya milik Allianz dan dapat digunakan untuk kepentingan Allianz.</li>
                    <li>Data dan foto yang sudah kamu unggah sepenuhnya menjadi milik Allianz dan dapat digunakan
                        untuk kepentingan Allianz.</li>
                    <li>Jika data yang diberikan tidak sesuai dengan syarat seharusnya, maka pihak Allianz
                        berhak mendiskualifikasi peserta tersebut.</li>
                    <li>Syarat dan ketentuan program Allianz Junior Football Camp 2015 dapat berubah
                        sewaktu-waktu tanpa pemberitahuan sebelumnya.</li>
                </ol>
            </div><!--/ .modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-fill btn-warning btn-wd btn-sm" data-dismiss="modal">Tutup</button>
            </div><!--/ .modal-footer -->
        </div><!--/ .modal-content -->
    </div><!--/ .modal-dialog -->
</div><!--/ .modal#syarat -->

<script type="text/javascript">

$( document ).ready(function(){
    var option_propinsi = $("#propinsi").find("[value='<?php echo $propinsi;?>']");
    option_propinsi.attr('selected', 'selected');
    
    var pendidikanAyah = $("#pendidikanAyah").find("[value='<?php echo $pendidikanAyah;?>']");
    pendidikanAyah.attr('selected', 'selected');
    
    var pendidikanIbu = $("#pendidikanIbu").find("[value='<?php echo $pendidikanIbu;?>']");
    pendidikanIbu.attr('selected', 'selected');
    
    $( '.radio-inline input[type=text]' ).hide();

    $( 'input[type="radio"][name="pekerjaan"]' ).change(function(){
        if (this.value == 'Lainnya')
        {
            $('.radio-inline input[type="text"]').show();
        }
        else
        {
            $('.radio-inline input[type="text"]').hide();
            $('.kerja-lain .error').css( 'display', 'none' );
        }
    });
    
    var val_pekerjaan = "<?php echo $val_pekerjaan;?>";
    var radio_pekerjaan = $("#pekerjaan_ortu").find("[value='<?php echo $val_pekerjaan;?>']");
    if(radio_pekerjaan.val() != undefined && val_pekerjaan != ""){ //undefined
        radio_pekerjaan.attr('checked', true);
    }
    else if (radio_pekerjaan.val() == undefined && val_pekerjaan != "") {
        $("#pekerjaan_ortu").find("[value='Lainnya']").attr('checked', true);
        $("#txt-lainnya").show();
        $("#txt-lainnya").val(val_pekerjaan);
    }
            //var infomasi_kamp = $("#informasi_kamp").find("[value='<?php echo $informasi[1];?>']");
            //infomasi_kamp.attr('checked', 'checked');
    
    <?php for($x=0;$x<count($informasi);$x++){?>
            var infomasi_kamp = $("#informasi_kamp").find("[value='<?php echo ltrim($informasi[$x]);?>']");
            infomasi_kamp.attr('checked', 'checked');
    <?php }?>

    function shuffle(o)
    {
        for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
        return o;
    };

    function validateNumeral( e )
    {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    }

    $( '#pengeluaran' ).keypress(function(e){
        return validateNumeral(e);
    });

    $("#hp-ortu").keypress(function(e){
        return validateNumeral(e);
    });

    $("#jumSaudara").keypress(function(e){
        return validateNumeral(e);
    });

    $("#no-tlp").keypress(function(e){
        return validateNumeral(e);
    });

    $("#usiaAyah").keypress(function(e){
        return validateNumeral(e);
    });

    $("#usiaIbu").keypress(function(e){
        return validateNumeral(e);
    });

    var navListItems    = $( 'div.setup-panel div a' );
    var allWells        = $( '.setup-content' );
    var allNextBtn      = $( '.nextBtn' );
    var allPrevBtn      = $( '.prevBtn' );

    allWells.hide();

    $( '.btn-finish' ).on( 'click', function(){
        $( '.loading-ajfc' ).show();
    });

    $( '.btn-previous' ).on( 'click', function(e){
        e.preventDefault();
        $( 'html, body' ).stop().animate({
            scrollTop: $( '.first' ).offset().top
        }, 500, function(){
            resizePageWrapper();
        });
        return false;
    });

    $( '.btn-next' ).on( 'click', function(e){
        e.preventDefault();
        $( 'html, body' ).stop().animate({
            scrollTop: $( '.first' ).offset().top
        }, 500, function(){
            resizePageWrapper();
        });
        return false;
    });

    $( '.next-question' ).click(function(e){
        <?php
            $items = new Asset_List();
            $items->setOrderKey("RAND()", false);
            $items->setCondition("path = '/ajfc/galeri-kuis-910x357/'");
            $x = 1;
            foreach($items as $row):
                $img[] = $row->getPath().$row->getFilename();
                $x++;
            endforeach;
            $tmp        = json_encode( $img );
            $jmlImage   = rand( 0, ( count( $items ) ) - 1 );
        ?>
        var image           = <?php echo $tmp; ?>;
        var shuffleImage    = shuffle(image);
        var indexImage      = <?php echo $jmlImage; ?>;
        var no              = parseInt( $( ".stepwizard-step" ).find( ".btn-circle.btn-primary" ).text() ) + 1;
        if ( no == <?php echo count( $soal ); ?> )
        {
            $( '.btn-finish' ).removeClass( 'hide' );
        }
        else
        {
            $( '.btn-finish' ).addClass( 'hide' );
        }
        if( ( no % 2 ) == 1 )
        {
            $( '.banner-ajfc' ).stop().fadeOut( 'slow', function(){
                $( this ).attr( 'src', shuffleImage[ indexImage ] );
                $( this ).stop().fadeIn( 'slow' );
            });
        }
    });

    $( '.btn-circle' ).click(function(){
        var no = $ (this ).text();
        if( no == <?php echo count( $soal ); ?> )
        {
            $( '.btn-finish' ).removeClass( 'hide' );
        }
        else
        {
            $( '.btn-finish' ).addClass( 'hide' );
        }
        <?php
            $items = new Asset_List();
            $items->setOrderKey("RAND()", false);
            $items->setCondition("path = '/ajfc/galeri-kuis-910x357/'");
            $x = 1;
            foreach($items as $row)
            {
                $img[] = $row->getPath().$row->getFilename();
                $x++;
            }
            $tmp        = json_encode($img);
            $jmlImage   = rand(0,(count($items))-1);
        ?>
        var image           = <?php echo $tmp; ?>;
        var shuffleImage    = shuffle( image );
        var indexImage      = <?php echo $jmlImage; ?>;
        if( ( no % 2 ) == 1 )
        {
            $( '.banner-ajfc' ).fadeOut( 'slow', function(){
                $( this ).attr( 'src', shuffleImage[ indexImage ] );
                $( this ).stop().fadeIn( 'slow' );
            });
        }
    });

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allPrevBtn.click(function(e){
        e.preventDefault();
        var curStep         = $( this ).closest( '.setup-content' );
        var curStepBtn      = curStep.attr( 'id' );
        var prevStepNum     = curStepBtn.replace( 'step-', '' );
        var prevStepEl      = $( '#step-' + ( ( 1 * prevStepNum ) - 1 ) );
        if( $( prevStepEl ).length > 0 )
        {
            $( 'div.setup-panel div a[href="#' + prevStepEl.attr( 'id' ) + '"]' ).trigger( 'click' );
        }
        return false;
    });

    allNextBtn.click(function(){
        var curStep         = $( this ).closest( '.setup-content' );
        var curStepBtn      = curStep.attr( 'id' );
        var nextStepWizard  = $( 'div.setup-panel div a[href="#' + curStepBtn + '"]') .parent().next().children( 'a' );
        var curInputs       = curStep.find("input[type='text'],input[type='url'],input[type='radio']");
        var isValid         = true;
        $( ".form-group" ).removeClass( "has-error" );
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }
        if (isValid)
        {
            nextStepWizard.removeAttr('disabled').trigger('click');
        }
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

</script>

<script>

    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
    });

    function readImage(file) {

        var reader = new FileReader();
        var image  = new Image();

        reader.readAsDataURL(file);
        reader.onload = function(_file) {
            image.src    = _file.target.result; // url.createObjectURL(file);
            image.onload = function() {
                var w = this.width,
                    h = this.height,
                    t = file.type, // ext only: file.type.split('/')[1],
                    n = file.name,
                    s = ~~(file.size/1024);
                    if (s > 1024) {
                        $('.image_peserta_preview .error').remove();
                        $('.image_peserta_preview').append('<label class="error">Ukuran file foto maksimal 1 MB.</label>');
                        $(".image_peserta").val("");
                        $(".choose").val("");
                    }
                    else
                    {
                        $('.image_peserta_preview .error').remove();
                    }
            };
            image.onerror= function() {
                alert('Invalid file type: '+ file.type);
                $(".image_peserta").val("");
                $(".choose").val("");
            };
        };

    }
    $(".image_peserta").change(function (e) {
        if(this.disabled) return alert('File upload not supported!');
        var F = this.files;
        if(F && F[0]) for(var i=0; i<F.length; i++) readImage( F[i] );
    });

    $(document).ready( function() {
        $(".fbAJFC").on("click",function(){
            $("#clickFB").remove();
            $(".fbAJFC").find(".error").remove();
        });
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;
            if( input.length )
            {
                input.val(log);
            }
            else
            {
                if( log ) alert(log);
            }
        });
        setTimeout(function(){ resizePageWrapper(); }, 1000);
    });

</script>

<script>
$(function() {
    $("#myform").validate(
      {
        rules:
        {
            pasport:
            {
                  required: true
            },
            radioJK:
            {
                  required: true
            },
          alamat:
          {
            required: true
          },
          'no-telp':
          {
            required: true
          },
          tmp:
          {
            required: true
          },
          namaOrtu:
          {
            required: true
          },
          propinsi:
          {
            required: true
          },
          clickFB:
          {
            required: true
          },
          usiaAyah:
          {
            required: true
          },
          usiaIbu:
          {
            required: true
          },
          pendidikanAyah:
          {
            required: true
          },
          pendidikanIbu:
          {
            required: true
          },
          //pengeluaran:
          //{
          //  required: true
          //},
          noHp:
          {
            required: true,
            number: true
          },
          jumSaudara:
          {
            required: true
          },
           emailOrtu:
          {
                        //required: true,
            email: true
          },
           alamatOrtu:
          {
            required: true
          },
                halTerpenting:
          {
                required: true
          },
                uploadFoto:
          {
                //validators: {
                //    file: {
                //        extension: 'jpeg,png',
                //        type: 'image/jpeg,image/png',
                //        maxSize: 1024,   // 2048 * 1024
                //        message: 'The selected file is not valid'
                //    }
                //},
                required: true
          },
                pekerjaan:
          {
                required: true
          },
            'pekerjaan-lain':
          {
                required: true
          },
                'info[]':
          {
                required:true
          },
          term:
          {
                required:true
          }
        },
        messages:
        {
          pasport:
          {
            required: "Mohon pilih apakah kamu memiliki passport?"
          },
          radioJK:
          {
            required: "Mohon pilih jenis kelamin."
          },
          alamat:
          {
            required: "Mohon masukkan alamat tinggal saat ini."
          },
          tmp:
          {
            required: "Mohon masukkan tempat lahir kamu."
          },
          'no-telp':
          {
            required: "Mohon masukkan no telepon kamu."
          },
          usiaAyah:
          {
            required: "Mohon masukkan usia Ayah kamu."
          },
          usiaIbu:
          {
            required: "Mohon masukkan usia Ibu kamu."
          },
          pendidikanAyah:
          {
            required: "Mohon pilih pendidikan terakhir Ayah kamu."
          },
          pendidikanIbu:
          {
            required: "Mohon pilih pendidikan terakhir Ibu kamu."
          },
          //pengeluaran:
          //{
          //  required: "Mohon isi pengeluaran orang tua per bulan"
          //},
          namaOrtu:
          {
            required: "Mohon masukkan nama orang tua kamu."
          },
          noHp:
          {
            required: "Mohon masukkan nomor telepon kamu.",
            number: "Mohon masukkan angka."
          },
          jumSaudara:
          {
            required: "Mohon masukkan jumlah saudara kandung termasuk kamu."
          },
          propinsi:
          {
            required: "Mohon pilih kota/propinsi."
          },
          clickFB:
          {
            required: "Mohon untuk me-Like FB AJFC Indonesia"
          },
           emailOrtu:
          {
            email: "Mohon masukkan email orang tua kamu."
          },
            alamatOrtu:
          {
            required: "Mohon masukkan alamat lengkap orang tua"
          },
            halTerpenting:
          {
            required: "Ceritakan #1ygterpenting untuk memotivasi diri kamu dan tim."
          },
            uploadFoto:
          {
            required: "Mohon upload foto kamu."
          },
            pekerjaan:
          {
            required: "Mohon pilih pekerjaan orang tua."
          },
          'pekerjaan-lain':
          {
                required: "Mohon isi pekerjaan orang tua."
          },
          'info[]':
          {
            required: "Mohon pilih kamu dapat informasi tentang kamp."
          },
            term:
          {
            required: "Mohon centang kamu setuju dengan syarat dan ketentuan yang berlaku."
          }
        },
        errorPlacement: function(error, element)
        {
            if ( element.is(":radio") )
            {
                error.appendTo( element.parents('.message-info') );
            }
            else if ( element.is(":checkbox") )
            {
                error.appendTo ( element.parents('.checkbox-info') );
            }
            else if ( element.is(":file") )
            {
                error.appendTo ( element.parents('.pilih') );
            }
            else
            { // This is the default behavior
                error.insertAfter( element );
            }
         }

      });
});
</script>
