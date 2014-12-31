<?php echo $this->template("includes/inv/header.php")?>
<style>
div.ui-slider-range{background-color:#113388;}
</style>

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
            max: 1000000000,
            value: 1000000,
            range: "min",
            step: 1000000,
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
      

}); 


</script>  

    
<script>   
    
$(function() {           
        
var select = $( "#demo2" );
        var slider = $( "<div id='slider2'></div>" ).insertAfter( select ).slider({
            min: 1,
            max: 20,
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
            max: 100,
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
    
    <div class="container">
    
    		<?php echo $this->template("includes/inv/breadcrumb.php")?>

    
    
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
                        <div class="title-box"><h4 style="color: #113388">BIAYA SAAT INI</h4></div>
                        <!--<div class="tooltips" style="background-color: #113388"><a class="tooltip-left" href="#" style="color: white" data-tooltip="Biaya yang dibutuhkan untuk membeli / memiliki kebutuhan tersebut saat ini">?  </a></div>-->
 
                        <div class="sub_form">Biaya yang dibutuhkan untuk membeli / memiliki kebutuhan tersebut saat ini</div>
                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition" class="slider-wrap" style="border-color: #113388" value="Rp. 1.000.000">
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
                        <div class="title-box"><h4 style="color: #113388">ASUMSI TINGKAT INFLASI</h4></div>
                        

                        <div class="sub_form">Asumsi dari tingkat rata-rata kenaikan harga barang setiap tahunnya. Rata-rata inflasi 30 tahun terakhir adalah 10%</div>

                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition2" class="slider-wrap" style="border-color: #113388" value="1%">
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
                        <div class="title-box"><h4 style="color: #113388">JANGKA WAKTU</h4></div>
                        

                        <div class="sub_form">Lamanya masa berinvestasi yang diinginkan untuk mencapai tujuan investasi</div>

                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition3" class="slider-wrap" style="border-color: #113388" value="1 tahun">
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
                    <input class="orange-btn bg_fund" type="button" value="Hitung Biaya Kebutuhan Saya di Masa Depan">
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
        
        function investment1(biaya, asumsi, waktu){
            asumsi = asumsi / 100;
            var formula = 1 * (Math.pow(1 + Number(asumsi), Number(waktu)));
            if (formula < 99) {
                formula = formula.toFixed(3);
            }
            else{
                formula = formula.toFixed(2);
            }
            var result = Number(biaya) * formula;
            return result.toFixed(2);
        }
        
        $('#sliderPosition').val("Rp. 1.000.000");
        $('#sliderPosition2').val("1%");
        $('#sliderPosition3').val("1 tahun");
        var biaya = 1000000;
        var asumsi = 1;
        var waktu = 1;
        $("#sliderPosition").bind('input',function(){
            var text = $(this).val();
            text = text.replace(/[^0-9\.]+/g,"");
            text = text.replace(/\./g,'');
            text = text.replace(/,/g,'');
            biaya = text;
            text = accounting.formatMoney(text,'Rp. ',0,'.',',');
            $(this).val(text);
        });
        
        $("#sliderPosition2").keyup(function(event){
            var text = $(this).val();
            text = text.replace(/[^0-9\.]+/g,"");
            text = text.replace(/\./g,'');
            text = text.replace(/,/g,'');
            if (text == 0) {
                text = 1;
            }
            if (event.keyCode == '8') {
                text = text.substr(0,text.length-1);
            }
            asumsi = text;
            $(this).val(text + '%');
        });
        
        $("#sliderPosition3").keyup(function(event){
            var text = $(this).val();
            text = text.replace(/[^0-9\.]+/g,"");
            text = text.replace(/\./g,'');
            text = text.replace(/,/g,'');
            if (text == 0) {
                text = 1;
            }
            if (event.keyCode == '8') {
                text = text.substr(0,text.length-1);
            }
            waktu = text;
            $(this).val(text + ' tahun');
        });

        $(".orange-btn").click(function(){
            var result = investment1(biaya,asumsi,waktu);
            
            setCookie('investment1_biaya',biaya,1);
            setCookie('investment1_asumsi_inflasi',asumsi,1);
            setCookie('investment1_jangka_waktu',waktu,1);
            setCookie('investment1_hasil',result,1);
            
            window.location.href = "/kalkulator/financial-calculators/calculator-investment1-result";
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
		

		/* added by Handri Pangestiaji 24 Des 2014 */
		
		$("#sliderPosition").focusout(function(event){
			
			val = this.value;
			val = val.replace("Rp. ", "");
			val = val.replace(".", "");
			val = val.replace("0.0", "00");
			$("#slider").slider( "value" , val);
			
		});
		
		$("#sliderPosition2").focusout(function(event){
			
			val = this.value;
			val = val.replace("%", "");
			$("#slider2").slider( "value" , val);
			
		});
		
		$("#sliderPosition3").focusout(function(event){
			
			val = this.value;
			val = val.replace(" tahun", "");
			$("#slider3").slider( "value" , val);
			
		});
		
	});
</script>
<?php echo $this->template("includes/inv/footer.php")?>    
