<?php

    /**
     * ./includes/page-kuis.php
     * Quiz static page
     * Created by Falmesino Abdul Hamid(http://be.net/falmesino)
     */

?>

<script src="/website/static/mobilku/jquery.validate.min.js"></script>

<div class="loading">
    <div class="loading-inner">
        <i class="fa fa-refresh fa-2x fa-spin"></i>
    </div><!--/ .loading-inner -->
</div><!--/ .loading -->

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

                    <div class="quiz-pages">

                        <div class="quiz-page active" id="qp1">

                            <div class="quiz-page--title">
                                <h2>FORM KELENGKAPAN DATA PESERTA AJFC 2015</h2>
                            </div><!--/ .quiz-page--title -->

                            <div class="quiz-page--form pt16">

                                <div class="row mb16">
                                    <div class="col-xs-12 col-md-6">

                                        <input type="hidden" name="idPeserta" value="<?php // echo $row->getO_id()."-".$row->getIdPeserta(); ?>" />
                                        <div class="form-group mb16">
                                            <label>Nama Lengkap<span>*</span> (Sesuai akte kelahiran/Passport)</label>
                                            <input type="text" readonly="readonly" class="form-control" id="nama" value="<?php // echo $row->getNamaLengkap();?>" name="nama" placeholder="Nama Lengkap">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Tempat/Tanggal Lahir<span>*</span> (Kota, DD/MM/YYY)</label>
                                            <div class="controls form-inline">
                                            <input type="text" name="tmp" value="<?php // echo $row->getTempatLahir();?>" class="form-control ttl" id="tmp-lahir" placeholder="Tempat">
                                            <input type="text" name="tgl" readonly="readonly" value="<?php // echo date("d / m / Y",strtotime($row->getTanggalLahir()));?>"class="form-control ttl" id="tgl-lahir" placeholder="DD/MM/YYYY">
                                            </div>
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Jenis Kelamin<span>*</span></label>
                                            <?php
                                                /*
                                                if($row->getJenisKelamin() == "Laki-laki"){
                                                    $checked1 = "checked='checked'";
                                                    $checked2 = "";
                                                }else{
                                                    $checked2 = "checked='checked'";
                                                    $checked1 = "";
                                                }
                                                */
                                            ?>
                                            <div class="form-group">
                                                <label class="radio-inline">
                                                    <input <?php // echo $checked1;?> type="radio" name="radio" id="laki-laki" value="Laki-laki" /> Laki-laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input <?php // echo $checked2;?> type="radio" name="radio" id="perempuan" value="Perempuan" /> Perempuan
                                                </label>
                                            </div><!--/ .form-group -->
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Apakah kamu memiliki Passport?<span>*</span></label>
                                            <div class="message-info">
                                                <div class="form-group">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="pasport" id="ya" value="Ya"> Ya
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="pasport" id="tidak" value="Tidak"> Tidak
                                                    </label>
                                                </div><!--/ .form-group -->
                                                <div class="info-error"></div>
                                            </div><!--/ .message-info -->
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Email<span>*</span></label>
                                            <input readonly="readonly" type="text" class="form-control" name="email" id="email" value="<?php // echo $row->getEmail();?>" placeholder="Email">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Nomor Telepon/HP<span>*</span></label>
                                            <div class="message-info">
                                                <input value="<?php // echo $row->getNoHp();?>" type="text" class="form-control" name="no-telp" id="no-tlp" placeholder="Nomor Telepon/HP">
                                                <div class="info-error"></div>
                                            </div><!--/ .message-info -->
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Kota/Propinsi<span>*</span></label>
                                            <div class="message-info">
                                                <select name="propinsi" class="form-control">
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

                                        <div class="form-group mb16">
                                            <label>Alamat Tinggal<span>*</span></label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="3" style="height:70px !important" placeholder="Alamat Tinggal"></textarea>
                                        </div><!--/ .form-group -->

                                    </div><!--/ .col-xs-12 -->
                                    <div class="col-xs-12 col-md-6">

                                        <div class="form-group mb16">
                                            <label>Nama Orang Tua/Wali<span>*</span></label>
                                            <input type="text" class="form-control" name="namaOrtu" id="nama-ortu" placeholder="Nama Orang Tua/Wali">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>No. HP Orang Tua/Wali<span>*</span></label>
                                            <input type="text" class="form-control" name="noHp" id="hp-ortu" placeholder="No.HP Orang Tua/Wali">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Email Orang Tua</label>
                                            <input type="text" class="form-control" name="emailOrtu" id="email-ortu" placeholder="Email Orang Tua">
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Alamat Orang Tua<span>*</span></label>
                                            <textarea class="form-control" rows="3" name="alamatOrtu" style="height:70px !important" placeholder="Alamat Orang Tua"></textarea>
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Pekerjaan Orang Tua<span>*</span></label>
                                            <div class="message-info">
                                                <div class="form-group">
                                                    <div class="form-group nomargin">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="pekerjaan" id="kary-swasta" value="Karyawan Swasta"> Karyawan Swasta
                                                        </label>
                                                    </div>
                                                    <div class="form-group nomargin">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="pekerjaan" id="pns" value="Pegawai Negeri"> Pegawai Negeri
                                                        </label>
                                                    </div>
                                                    <div class="form-group nomargin">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="pekerjaan" id="wirausaha" value="Wirausaha"> Wirausaha
                                                        </label>
                                                    </div>
                                                    <div class="form-group nomargin">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="pekerjaan" id="lainnya" value="Lainnya"> Lainnya
                                                            <div class="form-group mt16">
                                                                <input type="text" class="form-control" name="pekerjaan-lain" id="txt-lainnya" placeholder="Pekerjaan Lain">
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/ .form-group -->

                                        <div class="form-group mb16">
                                            <label>Dari mana kamu mendapatkan informasi mengenai kamp ini?<span>*</span></label>
                                            <div class="checkbox-info">
                                                <div class="form-group">
                                                    <div class="form-group nomargin">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="info[]" id="reklame" value="Papan Reklame"> Papan Reklame
                                                        </label>
                                                    </div>
                                                    <div class="form-group nomargin">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="info[]" id="medsos" value="Media Sosial"> Media Sosial (Facebook, Twitter, dll)
                                                        </label>
                                                    </div>
                                                    <div class="form-group nomargin">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="info[]" id="web" value="Website Allianz"> Website Allianz
                                                        </label>
                                                    </div>
                                                    <div class="form-group nomargin">
                                                        <label class="checkbox-inline">
                                                        <input type="checkbox" name="info[]" id="kunjungan" value="Kunjungan Sekolah"> Kunjungan Sekolah/ SSB
                                                        </label>
                                                    </div>
                                                    <div class="form-group nomargin">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="info[]" id="ortu" value="Orang Tua"> Orang Tua/ Teman/ Saudara
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/ .form-group -->
                                    </div><!--/ .col-xs-12 -->
                                </div><!--/ .row -->

                                <div class="row mb16">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="checkbox-inline" style="padding-top: 0px;">
                                                <input type="checkbox" id="checkbox-term" name="term">
                                                Saya setuju dengan ketentuan yang berlaku.
                                            </label>
                                            <span class="backClose" data-toggle="modal" data-target="#syarat">Baca syarat dan ketentuan.</span>
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
                                <h2>FORM KELENGKAPAN DATA PESERTA AJFC 2015</h2>
                            </div><!--/ .quiz-page--title -->

                            <div class="quiz-page--form pt16">

                                <div class="row mb16">
                                    <div class="col-xs-12 col-md-6">

                                        <div class="form-group">
                                            <label for="1terpenting">
                                                Apa 1 hal terpenting bagi kamu dalam bermain bola?<span>*</span>
                                            </label>
                                            <textarea class="form-control" rows="3" name="halTerpenting" required="required" style="height:100px !important" placeholder="Apa 1 hal terpenting bagi kamu dalam bermain bola?"></textarea>
                                        </div><!--/ .form-group -->

                                        <div class="form-group">
                                            <label for="pilih">Pilih Foto</label>
                                            <div class="pilih">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-primary btn-file btn-choose">
                                                            Pilih <input type="file" name="uploadFoto" class="image_peserta" />
                                                        </span><!--/ .btn -->
                                                    </span><!--/ .input-group-btn -->
                                                    <input type="text" class="form-control choose" readonly>
                                                </div><!--/ .input-group -->
                                            </div><!--/ .pilih -->
                                            <br />
                                            <div class="image_peserta_preview"></div>
                                        </div><!--/ .form-group -->

                                        <div class="form-group">
                                            <label for="pilih">Like Facebook Fanpage</label>
                                            <a href="https://www.facebook.com/AJFCIndonesia" target="_blank" class="fbAJFC">
                                                <div class="fb-like">
                                                    <img src="/website/static/images/ajfc/fb-like.png" alt="FB Like" />
                                                </div><!--/ .fb-like -->
                                                <div class="fb-link">AJFC Indonesia</div>
                                                <input style="border: 0 solid #fff;box-shadow: inherit;pointer-events:none;" readonly="readonly" type="text" name="clickFB" class="form-control" id="clickFB" value="" />
                                            </a>
                                        </div><!--/ .form-group -->

                                    </div><!--/ .col-xs-12 -->
                                </div><!--/ .row -->

                            </div><!--/ .quiz-page--form -->

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
                                <button name="finish" id="finish" class="pull-right btn-finish">Selesai <i class="fa fa-angle-right"></i></button>
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

<!-- Modal Syarat dan Ketentuan -->
<div class="modal fade" id="syarat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Syarat dan Ketentuan</h4>
            </div><!--/ .modal-header -->
            <div class="modal-body cus-body">
                <ol>
                    <li>
                        Kamu berusia 14-16 tahun (tanggal lahir pada 25 Agustus 1999 s/d 1 September 2001, kamu
                        harus sudah berusia 14 tahun atau masih berusia 16 tahun pada tanggal 25 Agustus 2015)
                    </li>
                    <li>
                        Sehat jasmani (tidak mengidap penyakit pernapasan, penyakit atau cacat bawaan,
                        penyakit menular dan segala kondisi yang mempengaruhi kondisi fisik untuk berolahraga)
                    </li>
                    <li>Memiliki akun email, facebook dan/atau twitter aktif</li>
                    <li>
                        Menyediakan informasi mengenai orangtua berupa nomor telepon dan email sebagai
                        persetujuan dari orangtua untuk mengikuti program ini
                    </li>
                    <li>
                        Bagi kamu yang menjadi pemenang Asia Camp dan Munich Camp, diwajibkan untuk membuat
                        paspor sebelum Asia dan Munich Camp diselenggarakan
                    </li>
                    <li>Data yang dikirimkan sepenuhnya milik Allianz dan digunakan untuk kepentingan Allianz</li>
                    <li>
                        Data dan foto yang sudah kamu unggah akan diikutsertakan dalam lomba
                        foto dan seleksi mengikuti Allianz Junior Football Camp 2015.
                    </li>
                    <li>Jika data yang diberikan tidak sesuai, maka pihak Allianz berhak mendiskualifikasi peserta tersebut.</li>
                    <li>
                        7 Remaja akan mengikuti Asia Camp, dan 3 Remaja diantaranya akan berkesempatan
                        untuk mengunjungi Allianz Arena dan berlatih bersama pelatih remaja FC Bayern Munchen.
                    </li>
                    <li>Dan masih banyak hadiah menarik lainnya berupa souvenir FC Bayern Munchen yang dapat kamu menangkan.</li>
                </ol>
            </div><!--/ .modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-fill btn-warning btn-wd btn-sm" data-dismiss="modal">Close</button>
            </div><!--/ .modal-footer -->
        </div><!--/ .modal-content -->
    </div><!--/ .modal-dialog -->
</div><!--/ .modal -->

<script>
    $(document).ready(function(){

        /* Display loading animation */
        if( $( '.btn-finish' ).length > 0 )
        {
            $( '.btn-finish' ).click(function(e){
                e.preventDefault();
                if( $( '.loading' ).length > 0 )
                {
                    $( '.loading' ).stop().fadeIn( 'fast', function(){
                        $( this ).addClass( 'active' );
                    });
                }
                return false;
            });
        }

        /* Facebook AJFC */
        if( $( '.fbAJFC' ).length > 0 )
        {
            $( '.fbAJFC' ).click(function(e){
                e.preventDefault();
                $( '#clickFB' ).remove();
                $( '.fbAJFC' ).find( '.error' ).remove();
                return false;
            });
        }

        /* File Button */
        if( $( '.btn-file' ).length > 0 )
        {
            $('.btn-file :file').on('fileselect', function(event, numFiles, label){
                var input   = $(this).parents('.input-group').find(':text'),
                    log     = numFiles > 1 ? numFiles + ' files selected' : label;
                if( input.length ){
                    input.val(log);
                }else{
                    if( log ) alert(log);
                }
            });
        }

        /* Validate */
        $( '#myform' ).validate(
          {
            rules:
            {
                pasport:
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
              noHp:
              {
                required: true,
                number: true
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
                    required: true
              },
                    pekerjaan:
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
                required: "Mohon pilih apakah anda memiliki passport?"
              },
              alamat:
              {
                required: "Mohon masukan alamat Anda"
              },
              'no-telp':
              {
                required: "Mohon masukan no telepon Anda"
              },
              namaOrtu:
              {
                required: "Mohon masukan nama Orang tua Anda"
              },
              noHp:
              {
                required: "Mohon masukan nomor telepon Anda"
              },
              propinsi:
              {
                required: "Mohon pilih propinsi"
              },
              clickFB:
              {
                required: "Mohon untuk me-Like FB AJFC Indonesia"
              },
               emailOrtu:
              {
                email: "Mohon masukan email Orang tua yang benar"
              },
                alamatOrtu:
              {
                required: "Mohon masukan alamat Orangtua"
              },
                halTerpenting:
              {
                required: "Mohon masukan hal yang terpenting dalam bermain bola"
              },
                uploadFoto:
              {
                required: "Mohon pilih foto"
              },
                pekerjaan:
              {
                required: "Mohon pilih pekerjaan"
              },
              'info[]':
              {
                required: "Mohon pilih informasi"
              },
                term:
              {
                required: "Mohon centang persetujuan yang berlaku"
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

    $(document).on( 'change', '.btn-file :file', function(){
        var input   = $(this),
        numFiles    = input.get(0).files ? input.get(0).files.length : 1,
        label       = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });

</script>
