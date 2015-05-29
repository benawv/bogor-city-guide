<style>
    /* Override AJFC's feature box color */
    .box-dent--inner{ background: #009a44; }
    .box-dent::before{ border-top: 28px solid #009a44 !important;}
    .btn-tasbih{ background: #009a44 !important; border: none !important; border-radius: 0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }
    .form-box{ border: solid 1px #ddd; padding: 16px 20px; margin-bottom: 32px; }
    .form-control{ border-radius: 0; }
    nav.main-navigation a.nav-item.home::after { content: "\f015"; }
    nav.main-navigation a.nav-item.chat::after { content: "\f003  "; }
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
        font-size: 20px;
        pointer-events: none;
    }
    nav.main-navigation a.nav-item.blueA{ background: #003781; }
    nav.main-navigation a.nav-item.greenChat{ background: #B20065; }
    nav.main-navigation a.nav-item.blueA::before { background: #3122F9; }
    body { text-align: left; }

    .faq-item--answer
    {
        padding-left: 16px;
        padding-right: 16px;
    }

    .faq-item--question h4
    {
        color: #003781;
        font-weight: bold;
    }

    .content-widget
    {
        border-top: 1px solid #DDD;
        padding: 16px 20px;
        margin-bottom: 32px;
    }

    .content-widget h4
    {
        margin-bottom: 8px;
    }

    .content-widget ul,
    .content-widget ol,
    .content-widget li,
    {
        margin: 0 auto !important;
        padding: 0 !important;
    }

    .content-widget li
    {
        margin: 0;
        padding: 0;
        /*display: block;*/
        list-style: circle;
        position: relative;
        line-height: 30px;
    }

    .content-widget li a
    {
        color: black;
        text-decoration: none;
        font-weight: bold;
        position: relative;
    }

    .content-widget li a:hover,
    .content-widget li a:focus
    {
        text-decoration: none;
        outline: none;
        color: #009a44;
    }

    .content-widget li a small,
    .content-widget li a span
    {
        color: #999;
        font-size: x-small;
        font-weight: normal;
    }
    .content-widget h4{
        color: #009a44;
        font-weight: bold;
        font-size: 17px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .news-date{
        color: #999;
        font-size: x-small;
        font-weight: normal;
        margin-top: -10px;
    }

</style>

<header>
    <nav class="main-navigation" style="max-width:960px; margin: 0 auto;">
        <div class="row">
            <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                <a href="/tasbih" class="nav-item blueA home">
                    <h4 style="font-size:18px"><small>Beranda</small></h4>
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                <a href="/kalkulator/tasbih" class="nav-item green sitemap">
                    <h4 style="font-size:18px"><small>Ilustrasi</small></h4>
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                <a href="/tasbih/tanya-jawab" class="nav-item orange question">
                    <h4 style="font-size:18px"><small>Informasi produk</small></h4>
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                <a href="http://agen.imkepo.com" target="_blank" class="nav-item red users">
                    <h4 style="font-size:18px"><small>Cari Agen</small></h4>
                </a>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                <a href="/tasbih/inquiry-form" class="nav-item grey chat">
                    <h4 style="font-size:18px"><small>Minta Informasi</small></h4>
                </a>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </nav><!--/ .main-navigation -->
</header>

<div class="page-wrapper-outer">
    <div class="container" style="max-width: 960px; background: white;">
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
                                </ol>
                            </div><!--/ .faq-item--question -->
                            <div class="faq-item--answer">
                                <?php echo $this->wysiwyg('description')?>
                            </div><!--/ .faq-item--answer -->
                        </div><!--/ .faq-item -->
                        <?php } ?>
                    </div><!--/ .faq-wrapper -->

                    <?php echo $this->wysiwyg('description-bottom')?>
                    <!--<p>Tidak menemukan jawaban untuk pertanyaan kamu? Silahkan hubungi kami melalui <a href="https://www.facebook.com/AJFCIndonesia">facebook</a>!</p>-->

                    <div class="content-widget">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4><strong>BACA JUGA</strong></h4>
                                <ol>
                                    <?php
                                        $entries = new Object_TasbihNews_List();
                                        $entries->setLimit(4);
                                        $entries->setOrderKey("o_creationDate");
                                        $entries->setOrder("desc");
                                        foreach ($entries as $key) {
                                     ?>
                                        <li>
                                            <a href="tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                <?php echo $key->title; ?>
                                            </a>
                                            <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                        </li>
                                    <?php } ?>
                                </ol>
                            </div><!--/ .col-xs-12 -->
                        </div><!--/ .row -->
                    </div><!--/ .content-widget -->

                </div><!--/ .main-content -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</div><!--/ .page-wrapper-outer -->
