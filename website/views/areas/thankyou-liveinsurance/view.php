<?php
//call session yang di buat di controller kalkulatortassbihControler function saveAction()
  $session = new Zend_Session_Namespace('liveinsurance');
?>
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">

<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/tasbih/tasbih.css" />
<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/wizard-step.css" />

<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->

<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>

<header>
<style>
    /* Override AJFC's feature box color */
    .box-dent--inner{ background: #009a44; }
    .box-dent::before{ border-top: 28px solid #009a44 !important;}
    .btn-tasbih{ background: #009a44 !important; border: none !important; border-radius: 0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }
    .form-box{ border: solid 1px #ddd; padding: 16px 20px; margin-bottom: 32px; }
    .form-control{ border-radius: 0; }
        nav.main-navigation a.nav-item.home::after {
      content: "\f015"; }        
    nav.main-navigation a.nav-item.chat::after {
      content: "\f003  "; }
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
        nav.main-navigation a.nav-item.blueA{
      background: #003781;}        
    
    nav.main-navigation a.nav-item.greenChat{
      background: #B20065;}

      nav.main-navigation a.nav-item.blueA::before {
        background: #3122F9; }
</style>


</header>

<div id="newsletter-allianz" class="full-w bg-white nopadding">
    
    <div class="description">

        <div class="header-calc">
            <h1>ILUSTRASI PRODUK ALLIANZ LIVE INSURANCE</h1>
        </div><!--/ .header-calc -->

        <div class="content-calc">
            <div class="col-md-12">

<div class="form-box" id="notif-confirm">
    <h1 style="text-align:center">TERIMA KASIH</h1>
    <h3  style=" color:black; text-align:center;"><strong>Hasil kalkulasi Anda adalah <?php echo 'Rp'.$session->premi; ?> Kalkulasi ilustrasi produk Allianz Live Insurance (sudah dikirimkan ke alamat email Anda)</strong></h3>
    <!--<h3 style=" color:black; text-align:center;"><strong>Temukan agen terdekat: </strong></h3>-->
   <br />
    <center><input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="cari-agen" name="next" value="Cari Agen"></center>
  </div>

     

                   

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->
    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<link rel="stylesheet" href="/website/static/mobilku/jquery-ui.css">
<script src="/website/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/jquery-ui.js" type="text/javascript"></script>
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script>

$(document).ready(function(){

        $('#cari-agen').click(function() {
            
            
           
                          document.location.href='/agent-locator';
                       
              });            
    });

  

</script>


<!--
</div>
-->
