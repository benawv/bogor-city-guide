<?php echo $this->template("includes/inv/header.php")?>


<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/ui.theme.css" type="text/css" media="all" />

<link rel="stylesheet" href="/website/static/inv/css/style-o.css" type="text/css" media="all" />

<script src="/website/static/inv/js/rangeslider/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.tools.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/sticky-jquery.js" type="text/javascript"></script>
    
<script src="/website/static/inv/js/rangeslider/jquery.min.js" type="text/javascript"></script>     
<script src="/website/static/inv/js/rangeslider/jquery-ui.min.js" type="text/javascript"></script>     

<script src="/website/static/inv/js/javascripts-o.js" type="text/javascript"></script> 

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

		<div class="row">
			<div class="bread">
				<a href="index.php">Home</a>  
				<i class="fa fa-angle-right"></i> 
				Kalkulator Pendidikan
			</div>
		</div>


		<div class="box_banner_big">

			<div class="textbanner bg_edu h200">
				<h1><?php echo $this->input('title-box')?></h1>
			</div>
			<div class="edge_textbanner edge_edu">
				
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
                <h4>KALKULATOR PENDIDIKAN</h4>
           </div>
           <div class="calc-machine">
               <div id="demo">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4>BIAYA PENDIDIKAN SAAT INI</h4></div>
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
                        <div class="title-box"><h4>ASUMSI TINGKAT INFLASI</h4></div>
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
                        <!--div class="tooltips"><a class="tooltip-left" href="#" data-tooltip="Estimasi biaya pendidikan untuk KB/TK/SD/SMP/PT saat ini *reffer to appendix">?  </a></div-->
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
    <div class="calc-overlay" id="overlayAppendix">
    <div class="calc-overlay-inner">
        <div class="calc-overlay-box">
            <a href="#" class="calc-overlay-close">&times;</a>
            <h3>Appendix - Riset Biaya Pendidikan S1 di Beberapa Negara <small>(Dalam Jutaan)</small></h3>
            <table style="margin: auto;">
                <thead>
                    <tr>
                        <th>Pertahun dalam Rupiah</th>
                        <th>Biaya Sekolah</th>
                        <th>Biaya Hidup</th>
                        <th>Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Australia</td>
                        <td>261.6</td>
                        <td>135.3</td>
                        <td>396.9</td>
                    </tr>
                    <tr>
                        <td>Amerika Serikat</td>
                        <td>259.8</td>
                        <td>107.9</td>
                        <td>367.7</td>
                    </tr>
                    <tr>
                        <td>Inggris</td>
                        <td>198.7</td>
                        <td>113.6</td>
                        <td>312.3</td>
                    </tr>
                    <tr>
                        <td>Uni Emirat Arab</td>
                        <td>220.1</td>
                        <td>61.8</td>
                        <td>281.9</td>
                    </tr>
                    <tr>
                        <td>Kanada</td>
                        <td>190.3</td>
                        <td>77.6</td>
                        <td>267.9</td>
                    </tr>
                    <tr>
                        <td><strong>Singapura</strong></td>
                        <td>153.3</td>
                        <td>96.4</td>
                        <td>249.7</td>
                    </tr>
                    <tr>
                        <td>Hongkong</td>
                        <td>135.7</td>
                        <td>95.3</td>
                        <td>231.0</td>
                    </tr>
                    <tr>
                        <td>Jepang</td>
                        <td>67.4</td>
                        <td>130.2</td>
                        <td>197.6</td>
                    </tr>
                    <tr>
                        <td>China</td>
                        <td>41.0</td>
                        <td>49.2</td>
                        <td>90.2</td>
                    </tr>
                    <tr>
                        <td>Taiwan</td>
                        <td>33.6</td>
                        <td>51.3</td>
                        <td>84.9</td>
                    </tr>
                    <tr>
                        <td>Jerman</td>
                        <td>6.5</td>
                        <td>58.2</td>
                        <td>64.7</td>
                    </tr>
                    <tr>
                        <td><strong>Indonesia (UPH)</strong></td>
                        <td>95</td>
                        <td>50.4</td>
                        <td>145.4</td>
                    </tr>
                    <tr>
                        <td><strong>Indonesia (BINUS)</strong></td>
                        <td>68.9</td>
                        <td>50.4</td>
                        <td>119.3</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <small>Sumber: Riset HSBC Agustus 2013 &amp; ALlianz<br />Biaya untuk Fakultas Management</small>
                        </td>
                    </tr>
                </tfoot>
            </table>
            
        </div><!--/ .calc-overlay-box -->
    </div><!--/ .calc-inner -->
</div><!--/ .calc-overlay -->
</div> 

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

        var edu1_biaya_bulanan = getCookie('edu1_biaya_bulanan');
	edu1_biaya_bulanan = accounting.formatMoney(edu1_biaya_bulanan,'Rp. ',2,'.',',');
	
        function edu1(biaya, asumsi, waktu){
            asumsi = asumsi / 100;
            var formula = 1 * Math.pow(1 + Number(asumsi), Number(waktu));
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
            if (event.keyCode == '8') {
                text = text.substr(0,text.length-1);
            }
            waktu = text;
            $(this).val(text + ' tahun');
        });
        
        $(".orange-btn").click(function(){
            var result = edu1(biaya, asumsi, waktu);
            
            setCookie('edu1_biaya_bulanan',biaya,1);
            setCookie('edu1_asumsi_inflasi',asumsi,1);
            setCookie('edu1_jangka_waktu',waktu,1);
            setCookie('edu1_hasil',result,1);
            
            window.location.href = "/investment/kalkulator/financial-calculators/calculator-education1-result";
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
