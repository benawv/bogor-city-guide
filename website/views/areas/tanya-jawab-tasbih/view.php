<style>

    .addPadding15{
    padding-top: 15px;
    }


        /* Override AJFC's feature box color */
        .box-dent--inner{ background: #009a44; }
        .box-dent::before{ border-top: 28px solid #009a44 !important;}
        .social-feeds .social-feeds--box.twitter{ background: #009a44 !important;}
        .social-feeds .social-feeds--box.facebook{background: #73c898!important;}
        .news-feed{ background: none repeat scroll 0 0 white;
    border: 1px solid #ddd;
    min-height: 260px;
    padding: 24px;
    position: relative;}
            nav.main-navigation a.nav-item {
  display: block;
  position: relative;
  height: 50px;
  background: #d31f42;
}
        nav.main-navigation a.nav-item::after {
  content: "";
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  color: rgba(255, 255, 255, 0.5);
  font-size: 45px;
  pointer-events: none;
}
    nav.main-navigation a.nav-item.blueA{
      background: #003781;}

</style>

<div class="row addPadding15">

    <div class="container boxes-view" style="max-width: 960px; padding-left: 0; padding-right: 0;">
        <div class="wrapper-special clearfix">
            <div id="best-products" class="banner_products" style="min-height: 100px; width:635px; margin:auto;">
            <?php
                echo $this->image("staticBanner", array(
                        "thumbnail" => "staticBanner",
                        'title' 	=> 'Banner 635x310',
                        'width' 	=> 635,
                        'height' 	=> 310
                ));
            ?>
            </div>
            <div id="quicklinks">
                <?php
                $style = 'overflow: scroll;';
                ?>
                <div class="tab-wrapper" style="<?php echo $this->editmode?$style:''?>">
                    <div id="tab-quicklinks" class="tab-content">
                        <h3>Layanan Kami</h3>
                        <ul class="nav">
                        <li><a href="/layanan/klaim#prosedur-klaim" target="_blank" onclick="navigateMe('prosedur-klaim')">Prosedur Klaim</a></li>
                        <li><a href="/layanan/customer-service#cara-premi" target="_blank" onclick="navigateMe('cara-premi')">Info Cara Pembayaran Premi</a></li>
                        <li><a href="https://www.allianzlife.co.id/CustomerOnlinePortal/" target="_blank">Customer Online Portal</a></li>
                        <li><a href="/layanan/customer-service#cara-beli" onclick="navigateMe('cara-beli')">Info Cara Membeli</a></li>
                        <li><a href="http://investment.allianz.co.id/allianz-fund/allianz-fund/nab-navs">Harga Unit</a></li>
                        <li><a href="https://www.allianzlife.co.id/eBancassurance/" target="_blank">BancAssurance Portal</a></li>
                        <li><a href="https://www.allianzlife.co.id/ePension/" target="_blank">e-Pension</a></li>
                        <li><a href="/layanan/allianz-platinum">Allianz Platinum</a></li>
                        <li><a href="/layanan/hubungi-kami/faq">FAQ</a></li>
                        </ul>
                    </div>
                    <div id="tab-contact" class="tab-content">
                        <h3>Kontak</h3>
                        <p>Asuransi Jiwa:<br></p>

                        <ul>
                            <li>Tel: +6221-2926 9999</li>
                            <li>Fax: +6221-2926 8080</li>
                            <li>contactus@allianz.co.id</li>
                        </ul>

                        <p>&nbsp;</p>

                        <p>Asuransi Umum:<br></p>

                        <ul>
                            <li>Tel: +6221-2926 9999</li>
                            <li>Fax: +6221-2926 9090</li>
                            <li>Feedback@allianz.co.id</li>
                        </ul>

                        <p>&nbsp;</p>

                    </div>
                    <div id="tab-socialmedia" class="tab-content">
                        <h3>Social Media</h3>
                        <p>
                        <ul class="nav">
                        <li><a href="http://www.facebook.com/AllianzIndonesiaCommunity" target="_blank" style="color:white">Facebook : AllianzIndonesiaCommunity</a></li>
                        <li><a href="http://www.twitter.com/AllianzID" target="_blank" style="color:white">Twitter: AllianzID</a></li>
                        <li><a href="http://instagram.com/allianzindonesia" target="_blank" style="color:white">Instagram : AllianzIndonesia</a></li>
                        </ul>
                        </p>
                    </div>
                    <div id="tab-download" class="tab-content">
                        <h3>Download</h3>
                        <p>
                        <ul class="nav">
                            <li><a href="/tentang-kami/finansial#keuangan" onclick="navigateMe('report')" style="color:white">Laporan Keuangan</a></li>
                            <li><a href="/layanan/download#laporan-unit-link" onclick="navigateMe('laporan-unit-link')" style="color:white">Laporan Perkembangan Unit Link Tahun 2013</a></li>
                            <li><a href="/layanan/customer-service#daftar-rs" onclick="navigateMe('daftar-rs')" style="color:white">Daftar Rekanan Rumah Sakit</a></li>
                            <li><a href="/layanan/download#formulir-klaim-asuransi-jiwa" onclick="navigateMe('formulir-klaim-asuransi-jiwa')" style="color:white">Download Formulir-formulir Penting</a></li>
                            <li><a href="/layanan/download#newsletter-allianz" onclick="navigateMe('newsletter')" style="color:white">Newsletter</a></li>
                        </ul>
                        </p>
                    </div>


                    <!--<div class="tab-button">
                        <ul>
                            <li><a href="#tab-quicklinks">Quick Links</a></li>
                            <li><a href="#tab-contact">Contact</a></li>
                            <li><a href="#tab-socialmedia">Social Media</a></li>
                            <li><a href="#tab-download">Download</a></li>
                        </ul>
                    </div>-->
                    <?php if(!$this->editmode) { ?>
                    <div class="tab_button">
                        <ul>
                            <li><a class="tab-layanan-anda" href="#tab-quicklinks">Layanan Kami</a></li>
                            <li><a class="tab-kontak" href="#tab-contact">Kontak</a></li>
                            <li><a class="tab-sosmed" href="#tab-socialmedia">Social Media</a></li>
                            <li class="last"><a class="tab-download" href="#tab-download">Download</a></li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <?php if($this->editmode){ ?>
                <!--Tab gantung -->
                    <div class="tab-wrapper-hold">
                        <div class="tab-button">
                            <ul>
                                <li><a href="#tab-quicklinks" class="accordion-tab" onclick="changeHeader(this)">Layanan Kami</a></li>
                                <li><a href="#tab-contact" class="accordion-tab" onclick="changeHeader(this)">Kontak</a></li>
                                <li><a href="#tab-socialmedia" class="accordion-tab" onclick="changeHeader(this)">Social Media</a></li>
                                <li><a href="#tab-download" class="accordion-tab" onclick="changeHeader(this)">Download</a></li>

                            </ul>
                        </div>
                    </div>
                <!--Tab gantung -->
                <?php } ?>
            </div>
        </div><!-- .wrapper-special -->
    </div>

<nav class="main-navigation" style="max-width:960px; margin:auto;">
            <div class="row">

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/tasbih" class="nav-item blueA">
                        <h4><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/kalkulator/tasbih" class="nav-item green">
                        <h4><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/tanya-jawab" class="nav-item orange">
                        <h4><small>Tanya Jawab</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.imkepo.com" target="_blank" class="nav-item">
                        <h4><small>Cari Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/tasbih/inquiry-form" class="nav-item red">
                        <h4><small>Inquiry Form</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->
            </div>
            <div class="row">

            </div>
    </nav>

<div class="page-wrapper-outer">
    <div class="container" style="max-width: 960px;">
        <div class="row">
            <div class="col-xs-12 col-md-12 pr0">

                <div class="main-content">

                    <div class="main-content--header">
                        <h1 class="mb12"><?php echo $this->input('title_page_faq')?></h1>
                    </div><!--/ .main-content--header -->

                    <div class="faq-wrapper mt16 pt16">
                        <?php
            $l=0;
            while ($this->block("rowTable")->loop()) {
            $l++;
                ?>
                        <div class="faq-item">

                <div class="faq-item--question" style="padding-right: 20px;">
                                <ol start="<?php echo $l; ?>">
                    <li><h4><?php echo $this->input('title_faq')?></h4></li>
                </0l>
                            </div><!--/ .faq-item--question -->
                            <div class="faq-item--answer">
                                <?php echo $this->wysiwyg('description')?>
                            </div><!--/ .faq-item--answer -->
                        </div><!--/ .faq-item -->
            <?php

            } ?>

                    </div><!--/ .faq-wrapper -->

            <?php echo $this->wysiwyg('description-bottom')?>
                    <!--<p>Tidak menemukan jawaban untuk pertanyaan kamu? Silahkan hubungi kami melalui <a href="https://www.facebook.com/AJFCIndonesia">facebook</a>!</p>-->

                </div><!--/ .main-content -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->

</div><!--/ .page-wrapper-outer -->
