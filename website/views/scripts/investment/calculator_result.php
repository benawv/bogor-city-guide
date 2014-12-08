<?php echo $this->template("includes/inv/header.php")?>


<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />

<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/ui.theme.css" type="text/css" media="all" />

<script src="/website/static/inv/js/rangeslider/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.tools.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/sticky-jquery.js" type="text/javascript"></script>
    
<script src="/website/static/inv/js/rangeslider/jquery.min.js" type="text/javascript"></script>     
<script src="/website/static/inv/js/rangeslider/jquery-ui.min.js" type="text/javascript"></script>     
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
        $('#sliderPosition').html(sliderValue);
        }        
        });
        

$('#increase').click(function() {
var sliderCurrentValue = $( "#slider" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue + 1000000 );
});

$('#decrease').click(function() {
var sliderCurrentValue = $( "#slider" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue - 1000000 );
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
        $('#sliderPosition2').html(sliderValue);
        }        
        });
        

$('#increase2').click(function() {
var sliderCurrentValue = $( "#slider2" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue + 1 );
});

$('#decrease2').click(function() {
var sliderCurrentValue = $( "#slider2" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue - 1 );
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
        $('#sliderPosition3').html(sliderValue);
        }        
        });
        

$('#increase3').click(function() {
var sliderCurrentValue = $( "#slider3" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue + 1 );
});

$('#decrease3').click(function() {
var sliderCurrentValue = $( "#slider3" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue - 1 );
});
      

}); </script>       
    
    
<div role="main" class="main">
    
	<div class="container boxes-view">
		
		<div id="#" class="article-wrap">
            
			<div class="wrap30">
                <h5><span><a href="#">Home</a></span> &rsaquo; <span>Finansial Calculator Education</span> </h5>
                
                <div class="bg-dark-orange">
                    <h4>Finansial Calculator Education</h4>
                    <p></p>
                </div>
            </div>
            
            <div class="wrap60">
               <h4>Finansial Calculator Education</h4>
                
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
                <h4>KALKULATOR PENDIDIKAN</h4>
           </div>
            
             <div class="calc-machine">
               <div id="demo">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4>HASIL KALKULASI BIAYA PENDIDIKAN DI MASA DEPAN ANDA ADALAH</h4></div>
                        <div class="tooltips"><a class="tooltip-left" href="#" data-tooltip="Estimasi biaya pendidikan untuk KB/TK/SD/SMP/PT saat ini *reffer to appendix">?</a></div>
                   </div>
                   
                    <div class="calc-box2">    
                        <div class="count-result">
                            <span>Rp. 50.000.000</span>
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
               <div class="calc-submit">
                    <input class="orange-color" type="button" value="BAGAIMANA MENCAPAINYA?">
                </div>  
               <div class="share">
                    <span>Ingin menghitung kembali? <a href="/investasi/investment-homepage/tools/calculator">klik disini >></a></span>
                </div>
               
               <div class="allianz-button">
                    <input class="blue-color" type="button" value="Lihat Fund Allianz">
                     <input class="blue-color" type="button" value="Lihat Produk Allianz">
               </div>
           </div>  
           
               
        </div>
    </div>    
    
</div>      
<script type="text/javascript">
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