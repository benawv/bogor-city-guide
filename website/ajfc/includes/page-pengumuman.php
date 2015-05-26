<?php

    /**
     * ./includes/page-pengumuman.php
     * Pengumuman static page
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
                <div class="col-xs-12 col-md-8 pr0">

                    <div class="main-content">

                        <div class="main-content--header">
                            <h1 class="mb12">Pengumuman</h1>
                            <p>Berikut ini adalah <strong>100</strong> anak berbakat yang lolos seleksi tahap pertama Allianz Junior Football Camp 2015, Selamat!</p>
                        </div><!--/ .main-content--header -->

                        <div class="main-content--inner mt32">

                            <?php
                                $datas = array(
                                    array( '01', '#69', 'Mat Jambrong', '01 Maret 2004' ),
                                    array( '02', '#70', 'Mat Solar', '02 Maret 2004' ),
                                    array( '03', '#71', 'Mat Somat', '03 Maret 2004' ),
                                    array( '04', '#72', 'Mat Jackson', '04 Maret 2004' ),
                                    array( '05', '#73', 'Mat Hendrik', '05 Maret 2004' ),
                                    array( '06', '#74', 'Mat Hensen', '06 Maret 2004' ),
                                    array( '07', '#75', 'Mat Royani', '07 Maret 2004' ),
                                );
                            ?>

                            <div class="winner-list">

                                <?php foreach( $datas as $data ): ?>

                                <div class="winner-list--item">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <img src="./img/dummy/<?php echo rand( 1, 8 ); ?>.jpg" alt="" class="img-responsive">
                                        </div><!--/ .col-xs-3 -->
                                        <div class="col-xs-9">
                                            <div class="text">
                                                <h2><?php echo $data[ 2 ]; ?></h2>
                                                <p>
                                                    Running Number: <?php echo $data[ 1 ]; ?><br />
                                                    No.Kepesertaan: <?php echo $data[ 0 ]; ?><br />
                                                    Tgl.Lahir: <?php echo $data[ 3 ]; ?>
                                                </p>
                                            </div><!--/ .text -->
                                        </div><!--/ .col-xs-9 -->
                                    </div><!--/ .row -->
                                </div><!--/ .winner-list--item -->

                                <?php endforeach; ?>

                            </div><!--/ .winner-list -->

                            <div class="mt16">
                                <ul class="ajfc-pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>

                        </div><!--/ .main-content--inner -->

                    </div><!--/ .main-content -->

                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-4 pl0">

                <div class="sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item--header mb16">
                            <h3>AJFC 2015</h3>
                        </div><!--/ .sidebar-item--header -->
                        <div class="sidebar-item--content">
                            <ul class="sidebar-nav">
                                <li><a href="?p=home">Beranda</a></li>
                                <li><a href="?p=galeri">Galeri</a></li>
                                <li><a href="?p=proses-seleksi">Proses Seleksi</a></li>
                                <li class="active"><a href="?p=pengumuman">Pengumuman</a></li>
                                <li><a href="?p=daftar-peserta">Daftar Peserta</a></li>
                                <li><a href="?p=faq">Tanya Jawab</a></li>
                                <li><a href="?p=privacy-policy">Kebijakan Privasi</a></li>
                            </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->

                </div><!--/ .sidebar -->

            </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </section><!--/ .page-wrapper -->
</div><!--/ .page-wrapper-outer -->
