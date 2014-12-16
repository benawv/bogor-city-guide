<?php echo $this->template("includes/inv/header.php")?>


<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />

<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/ui.theme.css" type="text/css" media="all" />

<script src="/website/static/inv/js/rangeslider/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.tools.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/sticky-jquery.js" type="text/javascript"></script>
    
<script src="/website/static/inv/js/rangeslider/jquery.min.js" type="text/javascript"></script>     
<script src="/website/static/inv/js/rangeslider/jquery-ui.min.js" type="text/javascript"></script>     

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "16852030-1a9b-4882-8731-4afd4c1cfd9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


    
<div role="main" class="main">
    
        <div class="container">
    
    		<div class="row">
    			<div class="bread">
    				<a href="/investasi/investment-homepage">Home</a>  
    				<i class="fa fa-angle-right"></i> 
   			        Kalkulator Investasi  
               	</div>
    		</div>
    
    
           <div class="box_banner_big">

    			<div class="textbanner blue h200">
    			    <h1><?php echo $this->input('title-desc1')?></h1>
    				<h3></h3>
                    <p></p>
			     </div>
			<div class="edge_textbanner edge_blue">
				
			</div>

		</div>
    
    		<div class="desc_page">
	                <h1><?php echo $this->input('title-desc')?></h1>
                    <?php echo $this->wysiwyg('desc-box')?>
    		</div>
    
   	</div>
    
</div>
    
<div role="main" class="main calc">
    <div class="container boxes-view">
       <div class="calc-wrap">
            <div class="calc-title">
                <h4 style="background-color: #113388">KALKULATOR INVESTASI</h4>
           </div>
            
             <div class="calc-machine">
               <div id="demo">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4 style="color: #113388">HASIL KALKULASI BIAYA KEBUTUHAN ANDA DI MASA DEPAN ADALAH</h4></div>
                        <!--div class="tooltips" style="background-color: #113388"><a class="tooltip-left" href="#" data-tooltip="Estimasi biaya pendidikan untuk KB/TK/SD/SMP/PT saat ini *reffer to appendix">?</a></div-->
                   </div>
                   
                    <div class="calc-box2">    
                        <div class="count-result">
                            <span id="result" style="color: #113388">Rp. 0</span>
                        </div>
                        <div class="share">
                            <span>Bagikan hasil tersebut dengan teman Anda:</span>
                            <div class="tag-center">
                                <span class='st_sharethis' displayText='ShareThis'></span>
                                <span class='st_facebook' displayText=''></span>
                                <span class='st_twitter' displayText=''></span>
                                <span class='st_linkedin' displayText=''></span>
                                <span class='st_pinterest' displayText=''></span>
                                <span class='st_email' displayText=''></span>
                            </div>
                            
                            <div style="clear:both"></div>
                            <span>
                            <b>Disclaimer: <br /></b>
                        Perhitungan di atas merupakan simulasi, dimana nilai riil akan di berikan setelah proses verifikasi
                            </span>
                            
                        </div>
                        <!--div class="socmed">
                            <a href="#">
                                <div class="fb-box"><span class="flaticon-facebook6">Share</span></div>
                            </a>
                            <a href="#">
                                <div class="twit-box"><span class="flaticon-social">Share</span></div>
                            </a>
                        </div-->
                        
                    </div><!-- End demo -->
                   
               </div>
           </div>   
           
           
           <div class="calc-machine">
               <div class="calc-submit">
                    <input id="investment2" class="orange-btn" type="button" value="BAGAIMANA MENCAPAINYA?">
                </div>
               <div class="share">
                    <span>Ingin menghitung kembali? <a href="/investment/kalkulator/financial-calculators/calculator-invest">klik disini >></a></span>
                </div>
               
               <div class="allianz-button">
                    <input id="fund_allianz" class="blue-btn" type="button" value="Lihat Fund Allianz">
                    <input id="product_allianz" class="blue-btn" type="button" value="Lihat Produk Allianz">
               </div>
           </div>  
           
               
        </div>
    </div>    
    
</div>    
<!-- End of Main -->



<!-- End of Footer -->
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script type="text/javascript">
	function setCookie(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = cname + "=" + cvalue + "; " + expires;
	}
	
	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
	    }
	    return "";
	}

	var result = getCookie('investment1_hasil');
	result = accounting.formatMoney(result,'Rp. ',2,'.',',');
	$('#result').html(result);
	
	$("#investment2").click(function(){
	    window.location.href = "/investment/kalkulator/financial-calculators/calculator-investment2";
        });
	
    $("#fund_allianz").click(function(){
	    window.location.href = "/investment/allianz-fund";
     });
     
    $("#product_allianz").click(function(){
	    window.location.href = "http://allianz.co.id/produk";
     });
	function navigateMe(anchor)
	{
	
			$(".pagenav .navi li").removeClass('aktif');
			var element = $("." + anchor);
			element.addClass('aktif');
		
			//alert($(".heading").offset().top);
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
		      	$('html, body').animate({scrollTop:$("#"+anchor).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+anchor).offset().top-90}, 500);
			}
	}
	
	$(document).ready(function(){
		$(".pagenav .navi li").click(function(){
			$(".pagenav .navi li").removeClass('aktif');
			$(this).addClass('aktif');
			
	      	var data = $(this).attr('class');
	      	var id = data.split(' ');
	      	//alert($(".heading").offset().top);
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
		      	$('html, body').animate({scrollTop:$("#"+id[0]).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+id[0]).offset().top-90}, 500);
			}
		});
		var hash = document.URL.substr(document.URL.indexOf('#'));
		var id_hash = hash.split('#');
		
		if(id_hash.length=='1')
		{
			
		}
		else
		{
			$(".pagenav .navi li").removeClass('aktif');
			var element = $("." + id_hash[1]);
			element.addClass('aktif');
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
			$('html, body').animate({scrollTop:$("#"+id_hash[1]).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+id_hash[1]).offset().top-90}, 500);
			}
		}
		
		$('.kiri .tab').click(function(){
			$('.kiri .tab').removeClass('aktif_tab');
			$(this).addClass('aktif_tab');
			$('.kiri .tab span').removeClass('row');
			$('.kiri .tab span').addClass('icon');
			$('.kiri .aktif_tab span').removeClass('icon');
			$('.kiri .aktif_tab span').addClass('row');
			var id = $(this).attr('id');
			
			$('.kanan div').removeClass('aktif_konten');
			$('.kanan div').addClass('hidden');
			$('.kanan .'+id).removeClass('hidden');
			$('.kanan .'+id).addClass('aktif_konten');
		});
		
		
		$('.kiri2 .tab').click(function(){
			$('.kiri2 .tab').removeClass('aktif_tab');
			$(this).addClass('aktif_tab');
			$('.kiri2 .tab span').removeClass('row');
			$('.kiri2 .tab span').addClass('icon');
			$('.kiri2 .aktif_tab span').removeClass('icon');
			$('.kiri2 .aktif_tab span').addClass('row');
			var id = $(this).attr('id');
			
			$('.kanan2 div').removeClass('aktif_konten');
			$('.kanan2 div').addClass('hidden');
			$('.kanan2 .'+id).removeClass('hidden');
			$('.kanan2 .'+id).addClass('aktif_konten');
		});
	});
</script>
<?php echo $this->template("includes/inv/footer.php")?>    
