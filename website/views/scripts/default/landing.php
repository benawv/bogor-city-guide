<?php

    /**
     * ./website/views/scripts/default/landing.php
     * Landing Page Tasbih
     */

?>

<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<section class="landing-tasbih-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <img src="/website/static/images/landing-tasbih/landing-tasbih-header.jpg" alt="Landing Tasbih Header Image">

                <div class="landing-tasbih-header-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-4 col-md-offset-1">

                                <div class="landing-tasbih-header-caption--box">
                                    <h2>Illustrasi Allianz Tasbih</h2>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Uang Pertanggungan" required tabindex="1">
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <select class="form-control" required tabindex="2">
                                                <option value="">Lama Pembayaran Premi</option>
                                                <option value="">3x - Pagi, Siang, Sore</option>
                                                <option value="">6 Bulan</option>
                                                <option value="">12 Bulan</option>
                                                <option value="">18 Bulan</option>
                                                <option value="">24 Bulan</option>
                                                <option value="">35 Bulan</option>
                                            </select>
                                        </div><!--/ .form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default" tabindex="3">
                                                <i class="fa fa-calculator"></i> Hitung Premi Anda
                                            </button>
                                        </div><!--/ .form-group -->
                                    </form>
                                    <div class="trapezoid"></div>
                                </div><!--/ .landing-tasbih-header-caption--box -->
                            </div><!--/ .col-xs-12 -->
                        </div><!--/ .row -->
                    </div><!--/ .container -->
                </div><!--/ .landing-tasbih-header-caption -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-header -->

<section class="landing-tasbih-grid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 pr8">

                <div class="row">

                    <div class="col-xs-12 col-md-6 pr8">
                        <div class="landing-tasbih-grid--item orange">
                            <div class="landing-tasbih-grid--item-inner">
                                <h3>Rukun Islam Sebagai Pondasi Hidup Seorang Muslim</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit&hellip;</p>
                                <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                            </div><!--/ .landing-tasbih-grid--item-inner -->
                        </div><!--/ .landing-tasbih-grid--item -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 pl8">
                        <div class="landing-tasbih-grid--item blue">
                            <div class="landing-tasbih-grid--item-inner">
                                <h3>Kafir Secara Terang-Terangan adalah Ketika Mendengar Adzan</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit&hellip;</p>
                                <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                            </div><!--/ .landing-tasbih-grid--item-inner -->
                        </div><!--/ .landing-tasbih-grid--item -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 pr8">
                        <div class="landing-tasbih-grid--item">
                            <div class="landing-tasbih-grid--item-inner">
                                <h3>10 Tempat Ngabuburit Seru Bersama Teman</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit&hellip;</p>
                                <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                            </div><!--/ .landing-tasbih-grid--item-inner -->
                        </div><!--/ .landing-tasbih-grid--item -->
                    </div><!--/ .col-xs-12 -->

                    <div class="col-xs-12 col-md-6 pl8">
                        <div class="landing-tasbih-grid--item green">
                            <div class="landing-tasbih-grid--item-inner">
                                <h3>10 Tempat Ngabuburit Seru Bersama Teman</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit&hellip;</p>
                                <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                            </div><!--/ .landing-tasbih-grid--item-inner -->
                        </div><!--/ .landing-tasbih-grid--item -->
                    </div><!--/ .col-xs-12 -->

                </div><!--/ .row -->

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-4 pl8">

                <div class="landing-tasbih-map">
                    <div id="map-canvas"></div>
                    <div class="landing-tasbih-map--button">
                        <a href="#"><i class="fa fa-search"></i> Temukan Agen</a>
                    </div><!--/ .landing-tasbih-map--button -->
                </div><!--/ .landing-tasbih-map -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
        <div class="row">
            <div class="col-xs-12 col-md-8 pr8">

                <div class="landing-tasbih-grid--item inline purple">
                    <div class="landing-tasbih-grid--item-image">
                        <img src="/website/static/images/landing-tasbih/info-produk.jpg" alt="Info Produk" class="">
                    </div><!--/ .landing-tasbih-grid--item-image -->
                    <div class="landing-tasbih-grid--item-inner">
                        <h3>Informasi Produk</h3>
                        <p>Pelajari produk-produk Allianz Indonesia lainnya disini!</p>
                        <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                    </div><!--/ .landing-tasbih-grid--item-inner -->
                </div><!--/ .landing-tasbih-grid--item -->

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-4 pl8">

                <div class="landing-tasbih-grid--item red">
                    <div class="landing-tasbih-grid--item-inner">
                        <h3>Frequently Asked Question</h3>
                        <p>&nbsp;</p>
                        <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                    </div><!--/ .landing-tasbih-grid--item-inner -->
                </div><!--/ .landing-tasbih-grid--item -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-grid -->
