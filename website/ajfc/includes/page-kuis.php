<?php

    /**
     * ./includes/page-kuis.php
     * Quiz static page
     * Created by Falmesino Abdul Hamid(http://be.net/falmesino)
     */

?>

<header>

    <div class="background">
        <img src="./img/bg-home.jpg" alt="Home" class="img-responsive" />
    </div><!--/ .background -->

</header>

<div class="page-wrapper-outer">

<section class="page-wrapper mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <div class="main-content pt16 pb72">

                    <!--
                    <div class="main-content--header">
                        <h1 class="mb12">Kuis</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus,
                            interdum non ipsum nec, vulputate euismod metus. Morbi eget sem sed orci interdum
                            lacinia quis ac orci. Mauris pretium lorem non leo faucibus.
                        </p>
                    </div><!--/ .main-content--header -->

                    <div class="quiz-wrapper">

                        <div class="quiz-steps mb32">
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#qp1" class="active"><span>Tahap 1</span></a>
                                </div><!--/ .col-xs-4 -->
                                <div class="col-xs-4">
                                    <a href="#qp2"><span>Tahap 2</span></a>
                                </div><!--/ .col-xs-4 -->
                                <div class="col-xs-4">
                                    <a href="#qp3"><span>Tahap 3</span></a>
                                </div><!--/ .col-xs-4 -->
                            </div><!--/ .row -->
                        </div><!--/ .quiz-steps -->

                        <div class="quiz-banner mb16">
                            <img src="http://placehold.it/910x357" alt="Banner" class="img-responsive">
                        </div><!--/ .quiz-banner -->

                    </div><!--/ .quiz-wrapper -->

                    <form id="myform" method="post" action="/save-kuis" enctype="multipart/form-data">

                        <input type="hidden" name="idPeserta" value="" />

                    <div class="quiz-pages">

                        <div class="quiz-page active" id="qp1">

                            <div class="quiz-page--title">
                                <h2>FORM KELENGKAPAN DATA PESERTA AJFC 2015</h2>
                            </div><!--/ .quiz-page--title -->

                            <div class="quiz-page--form pt16">

                                <div class="row mb16">
                                    <div class="col-xs-12 col-md-6">

                                        <div class="form-group mb16">
                                            <label>Nama Lengkap<span>*</span> (Sesuai akte kelahiran/Passport)</label>
                                            <input type="text" readonly="readonly" class="form-control" name="nama" id="nama" value="" placeholder="Nama Lengkap">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Tempat/Tanggal Lahir<span>*</span> (Kota, DD/MM/YYY)</label>
                                            <div class="">
                                                <input type="text" class="form-control ttl" id="tmp-lahir" placeholder="Kota">
                                                <input type="text" class="form-control ttl" id="tgl-lahir" placeholder="DD/MM/YYYY">
                                            </div><!--/  -->
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Jenis Kelamin<span>*</span></label>
                                            <div class="form-group">
                                                <label class="radio-inline">
                                                    <input type="radio" name="radio" id="laki-laki" value="Laki-laki"> Laki-laki
                                                </label><!--/ .radio-inline -->
                                                <label class="radio-inline">
                                                    <input type="radio" name="radio" id="perempuan" value="Perempuan"> Perempuan
                                                </label><!--/ .radio-inline -->
                                            </div><!--/ .form-group -->
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Apakah kamu memiliki Passport?<span>*</span></label>
                                            <div class="form-group">
                                                <label class="radio-inline">
                                                    <input type="radio" name="radio-yt" id="ya" value="Ya"> Ya
                                                </label><!--/ .radio-inline -->
                                                <label class="radio-inline">
                                                    <input type="radio" name="radio-yt" id="tidak" value="Tidak"> Tidak
                                                </label><!--/ .radio-inline -->
                                            </div><!--/ .form-group -->
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Email<span>*</span></label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Nomor Telepon/HP<span>*</span></label>
                                            <input type="text" class="form-control" id="no-tlp" placeholder="Nomor Telepon/HP">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Kota/Propinsi<span>*</span></label>
                                            <input type="text" readonly="readonly" class="form-control" id="nama" value="" name="nama" placeholder="Nama Lengkap">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Alamat Tinggal<span>*</span></label>
                                            <textarea class="form-control" rows="3" style="height:70px !important" placeholder="Alamat Tinggal"></textarea>
                                        </div><!--/ .form-group -->

                                    </div><!--/ .col-xs-12 -->
                                    <div class="col-xs-12 col-md-6">

                                        <div class="form-group mb16">
                                            <label>Nama Orang Tua/Wali<span>*</span></label>
                                            <input type="text" class="form-control" id="nama-ortu" placeholder="Nama Orang Tua/Wali">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>No. HP Orang Tua/Wali<span>*</span></label>
                                            <input type="text" class="form-control" id="hp-ortu" placeholder="No.HP Orang Tua/Wali">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Email Orang Tua</label>
                                            <input type="email" class="form-control" id="email-ortu" placeholder="Email Orang Tua">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Alamat Orang Tua<span>*</span></label>
                                            <textarea class="form-control" rows="3" style="height:70px !important" placeholder="Alamat Orang Tua"></textarea>
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Pekerjaan Orang Tua<span>*</span></label>
                                            <div class="form-group">
                                            <div class="form-group nomargin">
                                            <label class="radio-inline">
                                            <input type="radio" name="radio-job" id="kary-swasta" value="Ya"> Karyawan Swasta
                                            </label>
                                            </div>
                                            <div class="form-group nomargin">
                                            <label class="radio-inline">
                                            <input type="radio" name="radio-job" id="pns" value="Ya"> Pegawai Negeri
                                            </label>
                                            </div>
                                            <div class="form-group nomargin">
                                            <label class="radio-inline">
                                            <input type="radio" name="radio-job" id="wirausaha" value="Ya"> Wirausaha
                                            </label>
                                            </div>
                                            <div class="form-group nomargin">
                                            <label class="radio-inline">
                                            <input type="radio" name="radio-job" id="lainnya" value="Ya"> Lainnya

                                            <div class="form-group mt16">
                                            <input type="text" class="form-control" id="txt-lainnya" placeholder="Pekerjaan Lain">
                                            </div>
                                            </label>
                                            </div>
                                            </div>
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Dari mana kamu mendapatkan informasi mengenai kamp ini?<span>*</span></label>
                                            <div class="form-group">
                                            <div class="form-group nomargin">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkbox1" id="reklame" value="Papan Reklame"> Papan Reklame
                                            </label>
                                            </div>
                                            <div class="form-group nomargin">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkbox2" id="medsos" value="Media Sosial"> Media Sosial (Facebook, Twitter, dll)
                                            </label>
                                            </div>
                                            <div class="form-group nomargin">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkbox3" id="web" value="Website Allianz"> Website Allianz
                                            </label>
                                            </div>
                                            <div class="form-group nomargin">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkbox4" id="kunjungan" value="Kunjungan Sekolah"> Kunjungan Sekolah/ SSB
                                            </label>
                                            </div>
                                            <div class="form-group nomargin">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="checkbox5" id="ortu" value="Orang Tua"> Orang Tua/ Teman/ Saudara
                                            </label>
                                            </div>
                                            </div>
                                        </div><!--/ .form-group -->
                                    </div><!--/ .col-xs-12 -->
                                </div><!--/ .row -->

                                <div class="row mb16">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="checkbox-term" value="Term">
                                                Saya setuju dengan ketentuan yang berlaku. Baca syarat dan ketentuan.
                                            </label>
                                        </div><!--/ .form-group -->
                                    </div><!--/ .col-xs-12 -->
                                </div><!--/ .row -->

                            </div><!--/ .quiz-page--form -->

                            <div class="quiz-page--nav">
                                <a href="#qp2" class="pull-right">Selanjutnya <i class="fa fa-angle-right"></i></a>
                                <div class="clearfix"></div>
                            </div><!--/ .quiz-page--nav -->

                        </div><!--/ .quiz-page#qp1 -->

                        <div class="quiz-page" id="qp2">

                            <div class="quiz-page--title">
                                <h2>Page 2</h2>
                            </div><!--/ .quiz-page--title -->

                            <div class="quiz-page--nav">
                                <a href="#qp1" class="pull-left"><i class="fa fa-angle-left"></i> Sebelumnya</a>
                                <a href="#qp3" class="pull-right">Selanjutnya <i class="fa fa-angle-right"></i></a>
                                <div class="clearfix"></div>
                            </div><!--/ .quiz-page--nav -->

                        </div><!--/ .quiz-page#qp2 -->

                        <div class="quiz-page" id="qp3">

                            <div class="quiz-page--title">
                                <h2>Page 3</h2>
                            </div><!--/ .quiz-page--title -->

                            <div class="quiz-page--nav">
                                <a href="#qp2" class="pull-left"><i class="fa fa-angle-left"></i> Sebelumnya</a>
                                <button name="finish" id="finish" class="pull-right">Selesai <i class="fa fa-angle-right"></i></button>
                                <div class="clearfix"></div>
                            </div><!--/ .quiz-page--nav -->

                        </div><!--/ .quiz-page#qp3 -->

                    </div><!--/ .quiz-pages -->

                    </form><!--/ #myform -->

                </div><!--/ .main-content -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->
