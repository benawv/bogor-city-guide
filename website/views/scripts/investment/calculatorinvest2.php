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

<script>   
    
$(function() {           
        
var select = $( "#demo" );
        var slider = $( "<div id='slider'></div>" ).insertAfter( select ).slider({
            min: 1000000,
            max: 100000000,
            value: 1000000,
            range: "min",
change: function(event, ui) { 
         var sliderValue = $( "#slider" ).slider( "option", "value" );
        $('#sliderPosition').val(sliderValue);
        $('#sliderPosition').trigger('input');
        }        
        });
        

$('#increase').click(function() {
var sliderCurrentValue = $( "#slider" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue + 1000000 );
  $('#sliderPosition').trigger('input');
});

$('#decrease').click(function() {
var sliderCurrentValue = $( "#slider" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue - 1000000 );
  $('#sliderPosition').trigger('input');
});
      

}); </script>  

    
<script>   
    
$(function() {           
        
var select = $( "#demo2" );
        var slider = $( "<div id='slider2'></div>" ).insertAfter( select ).slider({
            min: 1,
            max: 100,
        value: 1,
            range: "min",
change: function(event, ui) { 
         var sliderValue = $( "#slider2" ).slider( "option", "value" );
        $('#sliderPosition2').val(sliderValue);
        $('#sliderPosition2').trigger('keyup');
        }        
        });
        

$('#increase2').click(function() {
var sliderCurrentValue = $( "#slider2" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue + 1 );
  $('#sliderPosition2').trigger('keyup');
});

$('#decrease2').click(function() {
var sliderCurrentValue = $( "#slider2" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue - 1 );
  $('#sliderPosition2').trigger('keyup');
});
      

}); </script>   

    
<script>   
    
$(function() {           
        
var select = $( "#demo3" );
        var slider = $( "<div id='slider3'></div>" ).insertAfter( select ).slider({
            min: 1,
            max: 10,
        value: 1,
            range: "min",
change: function(event, ui) { 
         var sliderValue = $( "#slider3" ).slider( "option", "value" );
        $('#sliderPosition3').val(sliderValue);
        $('#sliderPosition3').trigger('keyup');
        }        
        });
        

$('#increase3').click(function() {
var sliderCurrentValue = $( "#slider3" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue + 1 );
  $('#sliderPosition3').trigger('keyup');
});

$('#decrease3').click(function() {
var sliderCurrentValue = $( "#slider3" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue - 1 );
  $('#sliderPosition3').trigger('keyup');
});
      

}); </script>       
    
    
<div role="main" class="main">
    
	<div class="container boxes-view">
		
		<div id="#" class="article-wrap">
            
			<div class="wrap30">
                <h5><span><a href="#">Home</a></span> &rsaquo; <span>KALKULATOR INVESTASI</span> </h5>
                
                <div class="bg-dark-orange">
                    <h4>KALKULATOR INVESTASI</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="wrap60">
               <h4>KALKULATOR INVESTASI</h4>
                
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                
        
            </div>
            			
		</div>
		<!-- merchandise end -->
	
	</div>
    
</div>
    
<div role="main" class="main calc">
    <div class="container boxes-view">
       <div class="calc-wrap">
            <div class="calc-title">
                <h4>KALKULATOR INVESTASI</h4>
           </div>
           <div class="calc-machine">
               <div id="demo">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4>BIAYA YANG DIBUTUHKAN</h4></div>
                        <div class="tooltips"><a class="tooltip-left" href="#" data-tooltip="Estimasi biaya pendidikan untuk KB/TK/SD/SMP/PT saat ini *reffer to appendix">?  </a></div>
                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition" class="slider-wrap" value="Rp. 1.000.000">
                       </input> 
                        
                        <div id="decrease">
                          <span class="min">  </span>
                        </div>
                   
                        <div id="increase">
                          <span class="add">  </span>
                        </div>
                        
                    </div><!-- End demo -->
                   
               </div>
           </div>
            
             <div class="calc-machine">
               <div id="demo2">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4>ASUMSI TINGKAT IMBAL HASIL</h4></div>
                        <div class="tooltips"><a class="tooltip-left" href="#" data-tooltip="Estimasi biaya pendidikan untuk KB/TK/SD/SMP/PT saat ini *reffer to appendix">?  </a></div>
                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition2" class="slider-wrap" value="1%">
                       </input> 
                        
                        <div id="decrease2">
                          <span class="min">  </span>
                        </div>
                   
                        <div id="increase2">
                          <span class="add">  </span>
                        </div>
                        
                    </div><!-- End demo -->
                   
               </div>
           </div>   
           
           <div class="calc-machine">
               <div id="demo3">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4>JANGKA WAKTU</h4></div>
                        <div class="tooltips"><a class="tooltip-left" href="#" data-tooltip="Estimasi biaya pendidikan untuk KB/TK/SD/SMP/PT saat ini *reffer to appendix">?  </a></div>
                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition3" class="slider-wrap" value="1 tahun">
                       </input> 
                        
                        <div id="decrease3">
                          <span class="min">  </span>
                        </div>
                   
                        <div id="increase3">
                          <span class="add">  </span>
                        </div>
                        
                    </div><!-- End demo -->
                   
               </div>
           </div> 
           
           <div class="calc-machine">
               <div class="calc-submit bottom">
                    <input class="orange-btn" type="button" value="HITUNG">
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
        
        var investment1_hasil = getCookie('investment1_hasil');
	investment1_hasil = accounting.formatMoney(investment1_hasil,'Rp. ',2,'.',',');
	var investment1_jangka_waktu = getCookie('investment1_jangka_waktu');

        $('#sliderPosition').val(investment1_hasil);
        $('#sliderPosition3').val(investment1_jangka_waktu + ' tahun');

        
        function investment3(biaya, asumsi, waktu){
            asumsi = asumsi / 100;
            var result = Number(biaya) / ((Math.pow(1 + Number(asumsi), Number(waktu)) - 1) / Number(asumsi));
            return result.toFixed(2);
        }
        
        var biaya = 1000000;
        var asumsi = 1;
        var waktu = 1;
        $("#sliderPosition").bind('input',function(){
            var text = $(this).val();
            text = text.replace('Rp. ','');
            text = text.replace(/\./g,'');
            text = text.replace(/,/g,'');
            biaya = text;
            text = accounting.formatMoney(text,'Rp. ',0,'.',',');
            $(this).val(text);
        });
        
        $("#sliderPosition2").keyup(function(){
            var text = $(this).val();
            text = text.replace('%','');
            text = text.replace(/\./g,'');
            text = text.replace(/,/g,'');
            if (event.keyCode == '8') {
                text = text.substr(0,text.length-1);
            }
            asumsi = text;
            $(this).val(text + '%');
        });
        
        $("#sliderPosition3").keyup(function(){
            var text = $(this).val();
            text = text.replace(' tahun','');
            text = text.replace(' tahu','');
            text = text.replace(/\./g,'');
            text = text.replace(/,/g,'');
            if (event.keyCode == '8') {
                text = text.substr(0,text.length-1);
            }
            waktu = text;
            $(this).val(text + ' tahun');
        });

        $(".orange-btn").click(function(){
            var result = investment3(biaya,asumsi,waktu);
            
            setCookie('investment2_biaya',biaya,1);
            setCookie('investment2_asumsi_imbal_hasil',asumsi,1);
            setCookie('investment2_jangka_waktu',waktu,1);
            setCookie('investment2_hasil_tahunan',result,1);
            setCookie('investment2_hasil_bulanan',result * 0.09,1);
            
            window.location.href = "/investasi/investment-homepage/tools/financial-calculators/calculator-investment2-result";
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