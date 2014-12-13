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
    
	<div class="container boxes-view">
		
		<div id="#" class="article-wrap">
            
			<div class="wrap30">
                <h5><span><a href="#">Home</a></span> &rsaquo; <span>Kalkulator Finansial Pendidikan</span> </h5>
                
                <div class="bg-dark-orange">
                    <h4>Kalkulator Finansial Pendidikan</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="wrap60">
               <h4>Kalkulator Finansial Pendidikan</h4>
                
                <p>Ketahuilah berapa besar dana pendidikan yang dibutuhkan putra putri Anda sebelum menentukan di mana akan menginvestasikan dana pendidikan tersebut. Akan lebih maksimal jika Anda sudah menyiapkan dana pendidikan anak Anda sejak masih dalam kandungan. Investasi dana pendidikan bisa dilakukan melalui tabungan, asuransi, properti atau reksadana.</p>
                
            </div>
            			
		</div>
		<!-- merchandise end -->
	
	</div>
    
</div>
    
<div role="main" class="main calc">
    <div class="container boxes-view">
       <div class="calc-wrap">
            <div class="calc-title">
                <h4>KALKULATOR PENDIDIKAN</h4>
           </div>
            
             <div class="calc-machine">
               <div id="demo">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4>INVESTASI TAHUNAN YANG DIPERLUKAN ADALAH</h4></div>
                        <div class="tooltips"><a class="tooltip-left" href="#" data-tooltip="Estimasi biaya pendidikan untuk KB/TK/SD/SMP/PT saat ini *reffer to appendix">?</a></div>
                   </div>
                   
                    <div class="calc-box2">    
                        <div class="count-result">
                            <span id="result_year">Rp. 0</span>
                        </div>
		    </div>
		    <div class="calc-box-title"> 
                        <div class="title-box"><h4>INVESTASI BULANAN YANG DIPERLUKAN ADALAH</h4></div>
                        <div class="tooltips"><a class="tooltip-left" href="#" data-tooltip="Estimasi biaya pendidikan untuk KB/TK/SD/SMP/PT saat ini *reffer to appendix">?</a></div>
                   </div>
                   
		    <div class="calc-box2">    
                        <div class="count-result">
                            <span id="result_month">Rp. 0</span>
                        </div>
		        <div class="share">
                            <span>Bagikan hasil tersebut dengan teman Anda:</span>
                        </div>
                        <div class="socmed">
                            <a href="#">
                                <div class="fb-box"><span class="flaticon-facebook6">Share</span></div>
                            </a>
                            <a href="#">
                                <div class="twit-box"><span class="flaticon-social">Share</span></div>
                            </a>
                        </div>
                        
                    </div><!-- End demo -->
                   
               </div>
           </div>   
           
           
           <div class="calc-machine">
               <div class="share">
                    <span>Ingin menghitung kembali? <a href="/investasi/investment-homepage/kalkulator/financial-calculators/pendidikan">klik disini >></a></span>
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

	var result_year = getCookie('edu2_hasil_tahunan');
	var result_month = getCookie('edu2_hasil_bulanan')
	$('#result_year').html(accounting.formatMoney(result_year,'Rp. ',2,'.',','));
	$('#result_month').html(accounting.formatMoney(result_month,'Rp. ',2,'.',','));
	
	$("#edu2").click(function(){
	    window.location.href = "http://localhost/allianzcoid/allianz-investment-calculator-education2.php";
        });
	
     $("#fund_allianz").click(function(){
	    window.location.href = "http://beta.allianz.co.id/investasi/investment-homepage/allianz-fund";
     });
     
     $("#product_allianz").click(function(){
	    window.location.href = "http://beta.allianz.co.id/produk";
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