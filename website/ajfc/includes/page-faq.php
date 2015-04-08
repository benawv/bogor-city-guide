<?php

    /**
     * ./includes/page-faq.php
     * Frequently Asked Questions(FAQ) static page
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
                        <h1 class="mb12">Tanya Jawab</h1>
                    </div><!--/ .main-content--header -->

                    <div class="faq-wrapper mt16 pt16">

                        <div class="faq-item">
                            <div class="faq-item--question">
                                <h4>Bagaimana cara mengikuti program Allianz Junior Football Camp?</h4>
                            </div><!--/ .faq-item--question -->
                            <div class="faq-item--answer">
                                <p>
                                    Daftar online dan mengikuti rangkaian seleksi di
                                    <a href="#">www.allianz.co.id/juniorfootballcamp</a> dibuka dari
                                    tanggal 15 April 2014 sampai 18 Juni 2014. Pengiriman soal kuis online
                                    akan berlangsung dari 28 April sampai dengan 18 Juni 2014.
                                </p>
                            </div><!--/ .faq-item--answer -->
                        </div><!--/ .faq-item -->

                        <?php for( $i = 0; $i < 10; $i++ ): ?>

                        <div class="faq-item">
                            <div class="faq-item--question">
                                <h4>Sample Question?</h4>
                            </div><!--/ .faq-item--question -->
                            <div class="faq-item--answer">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div><!--/ .faq-item--answer -->
                        </div><!--/ .faq-item -->

                        <?php endfor; ?>

                    </div><!--/ .faq-wrapper -->

                    <p>Tidak menemukan jawaban untuk pertanyaan kamu? Silahkan hubungi kami melalui <a href="#">facebook</a>!</p>

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
                                <li><a href="?p=pengumuman">Pengumuman</a></li>
                                <li><a href="?p=daftar-peserta">Daftar Peserta</a></li>
                                <li class="active"><a href="?p=faq">Tanya Jawab</a></li>
                                <li><a href="?p=privacy-policy">Kebijakan Privasi</a></li>
                            </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->

                </div><!--/ .sidebar -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->
