<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css-ajfc/hotspot/ajfc.hotspot.css">

<!--<link rel="stylesheet" href="/website/ajfc/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/website/ajfc/css/bootstrap-custom-wcm/bootstrap.css">
<link rel="stylesheet" href="/website/ajfc/css/font-awesome.min.css">
<link rel="stylesheet" href="/website/ajfc/css/style.css">
<link rel="stylesheet" href="/website/ajfc/css/main.css">

<script src="/website/ajfc/js/zabuto_calendar.min.js"></script>
<script src="/website/ajfc/js/javascripts.js"></script>

<style>

    .page-wrapper-outer .sidebar
    {
        background: white;
        border-left: solid 1px #ddd;
    }

    .sidebar .sidebar-item .sidebar-item--header h1,
    .sidebar .sidebar-item .sidebar-item--header h2,
    .sidebar .sidebar-item .sidebar-item--header h3,
    .sidebar .sidebar-item .sidebar-item--header h4,
    .sidebar .sidebar-item .sidebar-item--header h5,
    .sidebar .sidebar-item .sidebar-item--header h6,
    .sidebar .sidebar-item .sidebar-item--header p
    .sidebar .sidebar-item .sidebar-item--content ul > li > a
    {
        color: black;
    }

    .sidebar .sidebar-item .sidebar-item--content ul > li > a > small
    {
        color: #999;
    }

    .sidebar-font-green-h1
    {
       color: #009a44 !important;
       font-weight: bold;
    }

    .box-dent--inner{ background: #009a44; }
    .box-dent::before{ border-top: 28px solid #009a44 !important;}
    .btn-tasbih{ background: #009a44 !important; border: none !important; border-radius: 0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }
    .form-box{ border: solid 1px #ddd; padding: 16px 20px; margin-bottom: 32px; }
    .form-control{ border-radius: 0; }
    nav.main-navigation a.nav-item.home::after { content: "\f015"; }
    nav.main-navigation a.nav-item.chat::after { content: "\f003  "; }
    nav.main-navigation a.nav-item
    {
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

    .list-artikel{
        color: black !important;
        font-weight: bold !important;
    }

    nav.main-navigation a.nav-item.blueA{ background: #003781; }
    nav.main-navigation a.nav-item.greenChat{ background: #B20065; }
    nav.main-navigation a.nav-item.blueA::before{ background: #3122F9; }
    body { text-align: left; }

    .main-content,
    .sidebar
    {
        /* min-height: 0 !important; */
        padding: 24px 36px; /*99999px;*/
    }

    .main-content p:last-child
    {
        margin-bottom: 0 !important;
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
<?php
     foreach($this->newsTasbih as $items){
        /*echo "<pre>";
        print_r($items);
        echo "</pre>";*/
?>
    <header style="margin-top: -20px;">

        <div class="background">
            <img src="<?php echo $items->images->path.$items->images->filename; ?>" alt="" class="img-responsive">
        </div><!--/ .background -->

        <nav class="main-navigation floating" style="bottom: 170px !important; z-index: 3;">
            <div class="container" style="max-width:960px; margin:auto;">
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
            </div>
        </div>
    </nav>
    </header>

    <div class="page-wrapper-outer">

        <section class="page-wrapper mt32 mb72" style="margin-top: -140px !important;">
            <div class="container" style="max-width: 960px;">
            <div class="row">
                <div class="col-xs-12 col-md-8 pr0">

                <div class="main-content">

                    <div class="main-content--header">
                    <h1 class="mb12"><?php echo $items->title; ?></h1>
                    <h5>
                        <span><a href="/tasbih">Home</a> / <a href="#">artikel</a></span>
                        <?php /*
                            $id = $this->document->getId();
                            $parent_id = $this->document->getParentId();
                            $path = $this->document->getPath();
                            $key = $this->document->getKey();
                            // get root node if there is no document defined (for pages which are routed directly through static route)
                            if(!$this->document instanceof Document_Page) {
                                $this->document = Document::getById(1350);
                            }

                            // get the document which should be used to start in navigation | default home
                            $navStartNode = $this->document->getProperty("navigationRoot");
                            if(!$navStartNode instanceof Document_Page) {
                                $navStartNode = Document::getById(1350);
                            }

                            //this is used as id prefix for the html menu element
                            $htmlIdPrefix = "";

                            $navigation = $this->pimcoreNavigation()->getNavigation($this->document, $navStartNode, $htmlIdPrefix);
                            $this->navigation()->menu()->setUseTranslator(false); // to deactivate the translator provided by the view helper
                            $this->navigation($navigation);
                            $this->navigation()->breadcrumbs()->setMinDepth(0);
                            */
                        ?>
                        <?php echo $this->navigation()->breadcrumbs()->setPartial(array('includes/tasbih/breadcrumb-partial.php', 'website'));?>
                    </h5>
                    <p class="meta">Posted on <?php echo $items->newsdate; ?></p>
                    </div><!--/ .main-content--header -->

                    <?php echo $items->content; ?>

                </div><!--/ .main-content -->

                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-4 pl0">

                <div class="sidebar">
                    <div class="sidebar-item">
                    <div class="sidebar-item--header mb16">
                        <h3 class="sidebar-font-green-h1">Baca Juga</h3>
                    </div><!--/ .sidebar-item--header -->
                    <div class="sidebar-item--content">
                        <ul class="sidebar-nav">
                        <?php foreach($this->sidelist as $lists){?>
                                <li><a href="/tasbih/artikel/<?php  echo $lists->o_key."-".$lists->o_id; ?>" class="list-artikel" ><?php  echo $lists->title; ?></a></li>
                        <?php } ?>
                        </ul>
                    </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->

                </div><!--/ .sidebar -->

                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
            </div><!--/ .container -->
        </section>

    </div><!--/ .page-wrapper-outer -->
<?php } ?>
