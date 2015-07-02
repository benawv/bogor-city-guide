<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>
    #agent-locator
    {
        position: relative;
        max-width: 100% !important;
        min-width: 100% !important;
        width: 100% !important;
        float: none;
    }

    #agent-locator #maparea
    {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        height: 480px;
    }

    #agent-locator .searchbox
    {
        margin-bottom: 20px;
    }

    #agent-locator .searchbox > input[type="search"],
    #agent-locator .searchbox > input[type="text"]
    {
        width: 78%;
        border: solid 1px #ddd;
        font-size: small;
        padding: 12px 24px;
        margin: 0 auto;
        line-height: 1.5;
    }

    #agent-locator .searchbox > button.search-btn {
      width: 22%;
      margin: 0 auto;
      font-size: small;
      padding: 14px 2px;
      display: inline-block;
      text-transform: uppercase;
      background-color: #003781;
      border: solid 1px #003781;
      border-radius: 0;
      color: white;
      line-height: 0;
      float: right;
    }

    /* Respsonsive */

    @media ( max-width: 767px )
    {
        #agent-locator .searchbox > input[type="search"],
        #agent-locator .searchbox > input[type="text"]
        {
            width: 100%;
            display: block;
        }

        #agent-locator .searchbox > button.search-btn
        {
            width: 100%;
            display: block;
            margin-top: 16px;
        }
    }
</style>

<section class="landing-tasbih-grid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 pr8">

                <div class="landing-tasbih-grid--item inline purple">
                    <div class="landing-tasbih-grid--item-image">
                        <?php 
                        echo $this->image("gallery-informasi", array(
                                "thumbnail" => "staticBanner",
                                'title' 	=> 'informasi',
                                 "width" => "349.125px", "height" => "163.297px"
                        ));
                    ?>
                    </div><!--/ .landing-tasbih-grid--item-image -->
                    <div class="landing-tasbih-grid--item-inner">
                        <h3><?php echo $this->wysiwyg('title-box-section-informasi')?></h3>
                        <p><?php echo $this->wysiwyg('title-box-description-informasi')?></p>
                        <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                    </div><!--/ .landing-tasbih-grid--item-inner -->
                </div><!--/ .landing-tasbih-grid--item -->

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-4 pl8">

                <div class="landing-tasbih-grid--item red">
                    <div class="landing-tasbih-grid--item-inner">
                        <h3><?php echo $this->wysiwyg('title-box-section-item')?></h3>
                        <p><?php echo $this->wysiwyg('title-box-description-item')?></p>
                        <a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>
                    </div><!--/ .landing-tasbih-grid--item-inner -->
                </div><!--/ .landing-tasbih-grid--item -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-grid -->
