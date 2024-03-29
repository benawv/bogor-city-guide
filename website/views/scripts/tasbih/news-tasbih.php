<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css-ajfc/hotspot/ajfc.hotspot.css">

<!--<link rel="stylesheet" href="/website/ajfc/css/bootstrap.min.css">-->
<link rel="stylesheet" href="/website/ajfc/css/bootstrap-custom-wcm/bootstrap.css">
<link rel="stylesheet" href="/website/ajfc/css/font-awesome.min.css">
<link rel="stylesheet" href="/website/ajfc/css/style.css">
<link rel="stylesheet" href="/website/ajfc/css/main.css">

<script src="/website/ajfc/js/zabuto_calendar.min.js"></script>
<!--<script src="/website/ajfc/js/javascripts.js"></script> -->

<style>
    
    @media (max-width : 480px)
    .sck480{
       display:inline-block !important;
    }
    .scl480{
       display:none !important;
    }

    @media (min-width : 480px){
    .sck480{
       display:none !important;
    }
    .scl480{
       display:inline-block !important;
    }
    }

    .page-wrapper-outer .sidebar
    {
        background: white;
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
    
        nav.main-navigation a.nav-item.red::before {background: #780DEB;}
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
    /* override icon style */
    nav.main-navigation a.nav-item h1, nav.main-navigation a.nav-item h2, nav.main-navigation a.nav-item h3, nav.main-navigation a.nav-item h4, nav.main-navigation a.nav-item h5, nav.main-navigation a.nav-item h6 {
        bottom: 12px !important;
    }
    
    <!-- Script Media Query by Bastian 10-07-2015 -->

    @media ( max-width: 992px )
    {
        .main-content,
        .sidebar
        {
            height : 100% !important;
            min-height: 130% !important;
            padding: 48px 36px;
        }
    }
    .main-content, .sidebar{
          min-height: 737px !important;
    }
    
    .fa-facebook, .fa-twitter,fa-envelope{
        font-size:25px !important;
    }
    
    a.tw-share{
        font-size:26px !important;
    }
    
    .fa{
        font: normal normal normal 25px/1 FontAwesome !important;
    }
    
    @media screen and (max-width : 991px ){
            .page-wrapper-outer .sidebar
        {
            border-left: solid 0px #ddd;
        }
        
        .mobileH{
            padding-top: 15px !important;
        }
        

    }
    
    @media screen and (min-width : 992px ){
            .page-wrapper-outer .sidebar
        {
            border-left: solid 1px #ddd;
        }
        
        .mobileH{
            padding-top: 0px !important;
        }
        

        
    }

</style>
<?php
     foreach($this->newsTasbih as $items){

        /*echo "<pre>";
        print_r($items);
        echo "</pre>";*/
?>
<script>

</script>
<div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Silahkan Masukkan Email Anda</h4>
                    </div>
                    <div class="modal-body">
                      <input type="email" class="form-control" placeholder="Alamat E-Mail" id="email" tabindex="6" maxlength="32">
                        <label id="notif-email" style="display:none; color: #f00;">Maaf Anda Belum Memasukkan Email</label>
                    </div>
                    <div class="modal-footer">
                      <button type="button" id="sendingemail" class="btn btn-info" data-dismiss="modal" style="background-color:#23527c">Kirim</button>
                    </div>
                  </div>

                </div>
              </div>
    <header style="/*margin-top: -20px;*/">

        <div class="background">
            <img id="backart" src="<?php echo $items->images->path.$items->images->filename; ?>" alt="" class="img-responsive">
        </div><!--/ .background -->

        <nav class="main-navigation floating" style="bottom: 170px !important; z-index: 3;">
            <div class="container" style="max-width:960px; margin:auto;">
                <div class="row">

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px;margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih" class="nav-item blueA home">
                        <h4 style="font-size:18px"><small>Beranda</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/info-produk" class="nav-item orange question">
                        <h4 style="font-size:18px"><small>Informasi produk</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/kalkulator/ilustrasi" class="nav-item green sitemap">
                        <h4 style="font-size:18px"><small>Ilustrasi</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="http://agen.allianz.co.id" target="_blank" class="nav-item red users" style="background:#5F259F;">
                        <h4 style="font-size:18px"><small>Lokasi Agen</small></h4>
                    </a>
                </div><!--/ .col-xs-12 -->

                <div class="col-xs-12 col-md-2" style="min-width:20%; min-height:50px; margin:auto; !important">
                    <a href="/produk/asuransi-syariah/tasbih/minta-informasi" class="nav-item grey chat">
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
                    <h1 class="mb12" id="judul"><?php echo $items->title; ?></h1>
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
                        <div class="community-btn" style="width:103.938px !important; height:29px !important; float:right !important;">
										<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
										<a href="javascript:void(0);" class="twshare" style="
    padding-left: 15px;
"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:void(0);" class="emailshare" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" style="
    padding-left: 15px;
"></i></a>
								</div>
                    </h5>
                        <font class="meta">Posted on<span id="date" style="display:block;"> <?php echo $items->newsdate; ?></span></font>
                                
                    </div><!--/ .main-content--header -->

                    <div id="desc" style="display:block;"><?php echo $items->content; ?></div>
                    <br/>
                    <p>Untuk informasi lebih lengkap mengenai produk allianz tasbih klik :</p>
                    <button class="btn btn-primary" onclick="location.href='/produk/asuransi-syariah/tasbih/info-produk';" type="button">Informasi Produk Allianz Tasbih</button>
                    
                    
                </div><!--/ .main-content -->

                </div><!--/ .col-xs-12 -->
                <div class="col-xs-12 col-md-4 pl0 mobileH"><!--mobile H di ambil dari jquery-->

                <div class="sidebar">
                    <div class="sidebar-item">
                    <div class="sidebar-item--header mb16">
                        <h3 class="sidebar-font-green-h1">Baca Juga</h3>
                    </div><!--/ .sidebar-item--header -->
                    <div class="sidebar-item--content">
                        <ul class="sidebar-nav">
                        <?php 
                        $nsidelist = count($this->sidelist);
                        for($i=0;$i<$nsidelist;$i++){
                            foreach($this->sidelist[$i] as $lists){?>
                                <li><a href="/produk/asuransi-syariah/tasbih/artikel/<?php  echo $lists->o_key."-".$lists->o_id; ?>" class="list-artikel" ><?php  echo $lists->title; ?></a></li>
                        <?php 
                            }
                        }?>
                        </ul>
                    </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->

                </div><!--/ .sidebar -->

                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
            </div><!--/ .container -->
        </section>

    </div><!--/ .page-wrapper-outer -->



<script type="text/javascript">
    

    
        var getWidht=$( document ).width();
    var columnHeight=$( ".main-content" ).height(); 

    if(getWidht < 995){
        $('.sidebar').css('height', 100 + '%');
        $('.main-content, .sidebar').css('min-height', 100 + 'px');

        $( '.main-content, .sidebar' ).each(function () {
            this.style.setProperty( 'min-height', '130%', 'important' );
        });



        var page_wrapper=$( ".sidebar" ).height(); 
        var maincontent=$( ".main-content" ).height(); 
        
        $('.page-wrapper-outer').css('min-height', maincontent+page_wrapper+75 + 'px');




    }else{
        columnHeight=columnHeight-88;
        var maincontent=$(".main-content").height(); 
        //alert(maincontent);
        $('.sidebar').css('height', columnHeight+135 + 'px');
        $('.page-wrapper-outer').height(maincontent);
    }  

$( document ).ready(function(){

//alert('TEST');
    var description = $('div').find('p').text();
    //var desc = $("div.desc").find('p');
    //alert(desc);
    var desc = description.substring(0,50)+"...";
    var postDesc = description.substring(0,400)+"...";
    var judul = $('#judul').html();
    var title = judul.toLowerCase();
    var image = document.getElementById("backart").src;
    var image2 = "<?php echo $items->images->path.$items->images->filename; ?>";
    var img = image2.substring(1);
    var link = window.location.pathname;
    var url = window.location.hostname+window.location.pathname;
    var tanggal = $('#date').html();
    //alert(url);
        $('#sendingemail').click(function() {
        var email = $('#email').val();
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if(email == "" || (!re.test(email)) ){
            document.getElementById('notif-email').style.display= 'block';
            alert("Mohon Maaf Email Anda Tidak Valid");
        }else{
            $.ajax({
                type: "POST",
                url: "/share-email/",
                data: {
                    postImg : image,
                    postTitle : judul,
                    postDesc : postDesc,
                    postTanggal : tanggal,
                    postLink : link,
                    email :email
                },
                success: function(data){
                    alert(data);
                }
            });
        }
    });
    
    		$('.community-btn .twshare').on("click",function(){
        
	        
            //alert(isiText);
	        var subT = title+" "+url;
	        //var tweet = title+" : "+isiText+url;
	        var encodeTweet = encodeURIComponent(subT);
	        window.open('https://twitter.com/intent/tweet?text='+encodeTweet, 'sharer', 'width=626,height=436');
		  });

    $('.community-btn .fbshare').on("click",function(){
        //alert(url);
       //var url ="http://beta.allianz.co.id/produk/asuransi-syariah/tasbih/artikel/prioritas-keuangan-dalam-rencana-naik-haji-26386";
       // alert(description.substring(3,80)+"...");
        //var desc = description.substring(0,80)+"...";
        //alert(desc);
        var name = (title.replace(/[^a-zA-Z()]/g,''))+"-artikel-tasbih";
        var filename = name.replace(/\s/g,'-');
        //alert(filename);
        //alert(title);
                $.ajax({
					type: 'POST',
					url: window.location.origin+'/website/static/fbshare/sharedfb.php',
					data: {
						filename: filename,
						title_fb : title,
						image_name: img,
						description: desc,
						url: window.location.host,
						link_in_fb : window.location.host+window.location.pathname
					},
					success: function(response)
                    //console.log(response);
					{
                        //print_r(response);
						var url = window.location.origin+'/website/static/fbshare/'+response;
						window.open('http://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), 'sharer', 'width=626,height=436');
					}
				});
    });
            
});


</script>
<?php } ?>