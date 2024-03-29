<style>

    .page-wrapper-outer .sidebar
    {
        background: white;
        border-left: solid 1px #ddd;
    }

    .sidebar .sidebar-item .sidebar-item--header h1, .sidebar .sidebar-item .sidebar-item--header h2, .sidebar .sidebar-item .sidebar-item--header h3, .sidebar .sidebar-item .sidebar-item--header h4, .sidebar .sidebar-item .sidebar-item--header h5, .sidebar .sidebar-item .sidebar-item--header h6, .sidebar .sidebar-item .sidebar-item--header p
    {
        color: black;
    }

    .sidebar .sidebar-item .sidebar-item--content ul > li > a
    {
        color: black;
    }

    .sidebar .sidebar-item .sidebar-item--content ul > li > a > small
    {
        color: #999;
    }

    .sidebar .sidebar-item .sidebar-item--content ul > li > a:hover,
    .sidebar .sidebar-item .sidebar-item--content ul > li > a:focus
    {
        color: #003781;
        text-decoration: none;
        outline: none;
    }

    .sidebar .sidebar-item .sidebar-item--content ul > li > a:hover > small,
    .sidebar .sidebar-item .sidebar-item--content ul > li > a:focus > small
    {
        color: #999;
    }

    .main-content > .news-item:not(:last-child)
    {
        padding-bottom: 32px;
        border-bottom: solid 1px #eee;
    }

    .main-content--nav a
    {
        color: inherit;
        text-decoration: none;
    }

    .main-content--nav a:hover,
    .main-content--nav a:focus
    {
        color: #003781;
        text-decoration: none;
        outline: none;
    }

    .news-item
    {
        position: relative;
    }

    .news-item > .image
    {
        display: block;
    }

    .news-item > .image > img
    {
        min-width: 100%;
        max-width: 100%;
        width: 100%;
        height: auto;
        border: none;
    }

    .news-item > .title
    {
        font-size: x-large;
        font-weight: normal;
        color: #000;
    }

    .news-item > .title:hover,
    .news-item > .title:focus
    {
        color: #003781;
        text-decoration: none;
        outline: none;
    }

    .news-item > .title,
    .news-item > p
    {
        margin: 0 0 4px;
        padding: 0;
        line-height: 1.8;
        color: #000;
    }

    .news-item > p.meta > a
    {
        color: inherit;
    }

    .news-item > p.meta > a:hover,
    .news-item > p.meta > a:focus
    {
        color: #003781;
        outline: none;
    }

    @media ( max-width: 992px )
    {
        .main-content,
        .sidebar
        {
            min-height: 0 !important;
            padding: 48px 36px;
        }
    }


</style>

<header style="margin-top: -20px;">
    <div class="background">
        <img src="http://tasbih.imkepo.com/tasbih/background/image_static_hajj.png" alt="" class="img-responsive">
    </div><!--/ .background -->
</header>

<div class="page-wrapper-outer">

<section class="page-wrapper mt32 mb72">
    <div class="container" style="max-width: 960px">
        <div class="row">
            <div class="col-xs-12 col-md-8 pr0">

                <div class="main-content">

                    <!--
                    <div class="main-content--header">
                        <h1 class="mb12">Tasbih News</h1>
                    </div><!--/ .main-content--header -->

                    <?php for( $i = 0; $i < 5; $i++ ): ?>

                    <div class="news-item mb32">
                        <a href="/tasbih-news-detail" class="image mb12">
                            <img src="/website/ajfc/img/bg-home2.jpg" alt="Sample Image" class="img-responsive">
                        </a>
                        <a href="/tasbih-news-detail" class="title">Judul Beritanya</a>
                        <p class="meta">Posted by <a href="#">Administrator</a> on Fri, 15 May 2015 19:30</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus, interdum non ipsum nec, vulputate euismod metus. Morbi eget sem sed orci interdum lacinia quis ac orci. Mauris pretium lorem non leo faucibus, id semper nisl placerat. Nulla maximus tempor metus, a pretium velit tempus et. Mauris convallis eros ligula, vitae bibendum sem dapibus finibus. Nullam vel tellus mollis, iaculis sapien et, convallis dui. Vestibulum ullamcorper vitae quam at ultricies. Cras ultricies tincidunt gravida. Nulla placerat egestas lorem, non tincidunt ipsum tempus et. Vivamus vel dolor velit. Nullam enim neque, efficitur ultricies purus nec, bibendum semper tellus. Aliquam dapibus vestibulum est a volutpat.
                        </p>
                    </div><!--/ .news-item -->

                    <?php endfor; ?>

                    <div class="main-content--nav">
                        <a href="#" class="pull-left">&laquo; Sebelumnya</a>
                        <a href="#" class="pull-right">Selanjutnya &raquo;</a>
                        <div class="clearfix"></div>
                    </div><!--/ .main-content--nav -->

                </div><!--/ .main-content -->

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-4 pl0">

                <div class="sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item--header mb16">
                            <h3>Baca Juga</h3>
                        </div><!--/ .sidebar-item--header -->
                        <div class="sidebar-item--content">
                            <ul class="sidebar-nav">
                                            <li>
                                                <?php
                                                    
                                                    $sideList[0] = new Object_TasbihNews_List();
                                                    $sideList[0]->setCondition("o_path LIKE '/tasbih-news/have-hajj-saving/have-insurance/'");
                                                    $sideList[0]->setOrderKey("RAND()", false);
                                                    $sideList[0]->setLimit(1);
                                                    //print_r($sideList[0]);
                                                    foreach ($sideList[0] as $key) {
                                                    //print_r($key);
                                                 ?>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                                <?php } ?>
                                            </li>
                                                                                    <li>
                                                <?php
                                                    
                                                    $sideList[1] = new Object_TasbihNews_List();
                                                    $sideList[1]->setCondition("o_path LIKE '/tasbih-news/have-hajj-saving/no-insurance/'");
                                                    $sideList[1]->setOrderKey("RAND()", false);
                                                    $sideList[1]->setLimit(1);
                                                    //print_r($sideList[0]);
                                                    foreach ($sideList[1] as $key) {
                                                    //print_r($key);
                                                 ?>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                                <?php } ?>
                                            </li>
                                                                                    <li>
                                                <?php
                                                    
                                                    $sideList[2] = new Object_TasbihNews_List();
                                                    $sideList[2]->setCondition("o_path LIKE '/tasbih-news/no-hajj-saving/have-insurance/'");
                                                    $sideList[2]->setOrderKey("RAND()", false);
                                                    $sideList[2]->setLimit(1);
                                                    //print_r($sideList[0]);
                                                    foreach ($sideList[2] as $key) {
                                                    //print_r($key);
                                                 ?>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                                <?php } ?>
                                            </li>
                                                                                    <li>
                                                <?php
                                                    
                                                    $sideList[3] = new Object_TasbihNews_List();
                                                    $sideList[3]->setCondition("o_path LIKE '/tasbih-news/no-hajj-saving/no-insurance/'");
                                                    $sideList[3]->setOrderKey("RAND()", false);
                                                    $sideList[3]->setLimit(1);
                                                    //print_r($sideList[0]);
                                                    foreach ($sideList[3] as $key) {
                                                    //print_r($key);
                                                 ?>
                                                <a href="/produk/asuransi-syariah/tasbih/artikel/<?php echo $key->o_key."-".$key->o_id; ?>">
                                                    <?php echo $key->title; ?>
                                                </a>
                                                <div class="news-date"><?php echo date("D, d M Y,",strtotime($key->newsdate)); ?></div>
                                                <?php } ?>
                                            </li>
                            </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->
                    <div class="sidebar-item">
                        <div class="sidebar-item--header mb16">
                            <h3>Populer</h3>
                        </div><!--/ .sidebar-item--header -->
                        <div class="sidebar-item--content">
                            <ul class="sidebar-nav">
                                <li><a href="#">10 Alasan mengapa masuk islam itu tindakan yang benar <small><em>Rab, 14 Feb 2015</em></small></a></li>
                                <li><a href="#">Berani Mengatakan Tiada Tuhan Selain Allah di Depan Densus 88? <small>Sen, 12 Feb 2015</small></a></li>
                                <li><a href="#">Jihad Tidak Hanya Perang <small>Sen, 12 Feb 2015</small></a></li>
                                <li><a href="#">Syariat Islam Harga Mati <small>Ming, 11 Feb 2015</small></a></li>
                                <li><a href="#">Komunis Dilestarikan, Islam Dihancurkan Pelan-Pelan <small>Sab, 10 Feb 2015</small></a></li>
                                <li><a href="#">Shalat Berjamaah di Masjid itu Fardu Ain <small>Sab, 10 Feb 2015</small></a></li>
                                <li><a href="#">Katanya "Janganlah Kamu Mendekati Zina" Mendekati Aja Udah Jangan, Gimana Kalo Lewat? <small>Kam, 8 Feb 2015</small></a></li>
                            </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->
                </div><!--/ .sidebar -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->
