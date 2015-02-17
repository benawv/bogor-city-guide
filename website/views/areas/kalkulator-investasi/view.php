<style>
div.ui-slider-range{background-color:#a50034;}
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
            min: 5000000,
            max: 10000000000,
            value: 5000000,
            range: "min",
            step: 5000000,
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
            max: 50,
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
    
<script>   
    
$(function() {           
        
var select = $( "#demo4" );
        var slider = $( "<div id='slider4'></div>" ).insertAfter( select ).slider({
            min: 1,
            max: 100,
        value: 1,
            range: "min",
change: function(event, ui) { 
         var sliderValue = $( "#slider4" ).slider( "option", "value" );
        $('#sliderPosition4').val(sliderValue);
        $('#sliderPosition4').trigger('keyup');
        }        
        });
        

$('#increase4').click(function() {
var sliderCurrentValue = $( "#slider4" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue + 1 );
  $('#sliderPosition4').trigger('keyup');
});

$('#decrease4').click(function() {
var sliderCurrentValue = $( "#slider4" ).slider( "option", "value" );
  slider.slider( "value", sliderCurrentValue - 1 );
  $('#sliderPosition4').trigger('keyup');
});
      

}); </script>

<div role="main" class="main calc kalk-form1">
    <div class="container boxes-view">
       <div class="calc-wrap">
            <div class="calc-title">
                <h4 style="background-color: #a50034">KALKULATOR ASURANSI</h4>
           </div>
           <div class="calc-machine">
               <div id="demo">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4 style="color: #a50034">BIAYA HIDUP / PENDAPATAN BULANAN SAAT INI</h4></div>
                        <!--<div class="tooltips" style="background-color: #a50034;"><a class="tooltip-left" href="javascript:void(0);" data-tooltip="Biaya yang dikeluarkan setiap bulannya untuk kebutuhan sehari-hari pada saat ini">?  </a></div>-->

                        <div class="sub_form">Biaya yang dikeluarkan setiap bulannya untuk kebutuhan sehari-hari pada saat ini</div>
                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition" class="slider-wrap" style="border-color: #a50034" value="Rp 5.000.000">
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
                        <div class="title-box"><h4 style="color: #a50034">ASUMSI TINGKAT INFLASI</h4></div>
                        <!--<div class="tooltips abs2" style="background-color: #a50034"><a class="tooltip-left" href="javascript:void(0);" data-tooltip="Asumsi dari tingkat rata-rata kenaikan harga barang setiap tahunnya. Rata-rata inflasi 30 tahun terakhir adalah 10% ">?  </a></div>-->

                        <div class="sub_form">Asumsi dari tingkat rata-rata kenaikan harga barang setiap tahunnya. Rata-rata inflasi 30 tahun terakhir adalah 10%</div>
                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition2" class="slider-wrap" style="border-color: #a50034" value="1%">
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
                        <div class="title-box"><h4 style="color: #a50034">ASUMSI IMBAL HASIL TAHUNAN</h4></div>
                        <!--<div class="tooltips abs3" style="background-color: #a50034"><a class="tooltip-left" href="javascript:void(0);" data-tooltip="Asumsi dari imbal hasil yang dihasilkan oleh instrumen investasi.  <8% - Konservatif, 8-15% - Moderat, 15%< - Agresif ">?  </a></div>-->

                        <div class="sub_form">Asumsi dari imbal hasil yang dihasilkan oleh instrumen investasi.  
	                    <br /> &lt; 8% - Konservatif, 
	                    <br /> 8 - 15% - Moderat, 
	                    <br /> &gt; 15%  - Agresif
	                    </div>
                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition3" class="slider-wrap" style="border-color: #a50034" value="1%">
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
               <div id="demo4">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4 style="color: #a50034">JANGKA WAKTU PERTANGGUNGAN</h4></div>
                        <!--<div class="tooltips abs4" style="background-color: #a50034"><a class="tooltip-left" href="javascript:void(0);" data-tooltip="Lamanya masa pensiun yang direncanakan">?  </a></div>-->

                        <div class="sub_form">Lamanya uang pertanggungan mencukupi kebutuhan finansial</div>
                   </div>
                   
                    <div class="calc-box">    
                        <input type="text" id="sliderPosition4" class="slider-wrap" style="border-color: #a50034" value="1 tahun">
                       </input> 
                        
                        <div id="decrease4">
                          <span class="min">  </span>
                        </div>
                   
                        <div id="increase4">
                          <span class="add">  </span>
                        </div>
                        
                    </div><!-- End demo -->
                   
               </div>
           </div> 
           
           <div class="calc-machine">
               <div class="calc-submit bottom">
                    <input class="orange-btn bg_health" type="button" value="Hitung Uang Pertanggungan yang Saya Butuhkan">
                </div>   
           </div>   
               
        </div>
    </div>    
    
</div>

<div role="main" class="main calc formresult" style="display: none">
    <div class="container boxes-view">
       <div class="calc-wrap">
            <div class="calc-title">
                <h4 style="background-color: #a50034">KALKULATOR ASURANSI</h4>
           </div>
            
             <div class="calc-machine">
               <div id="demo">
                   <div class="calc-box-title"> 
                        <div class="title-box"><h4 style="color: #a50034">HASIL KALKULASI UANG PERTANGGUNGAN ANDA</h4></div>
                   </div>
                   
                    <div class="calc-box2">    
                        <div class="count-result">
                            <span id="result" style="color: #a50034">Rp 0</span>
                        </div>
		    </div>
		    <div class="calc-box2">
			<p class="calc-result-description insurance">Dengan asumsi biaya hidup / pendapatan bulanan sebesar <span id="resp1_biaya"></span>, inflasi <span id="resp1_asumsi_inflasi"></span>, serta tingkat imbal hasil yang diharapkan sebesar <span id="resp1_asumsi_imbal"></span>, Anda membutuhkan uang pertanggungan sebesar <span id="resp1_hasil"></span> yang akan mencukupi kebutuhan finansial keluarga yang dicintai selama <span id="resp1_jangka_waktu"></span>.</p>
<p class="calc-result-description insurance">Segera hubungi agen asuransi Allianz untuk memastikan bahwa Anda sudah memiliki uang pertanggungan yang cukup. <a href="http://investment.allianz.co.id/contact-us">Hubungi Kami</a></p>
                        <div class="share">
                            <!--span>Bagikan hasil tersebut dengan teman Anda:</span>
                            <div class="tag-center">
                                <span class='st_sharethis' displayText='ShareThis'></span>
                                <span class='st_facebook' displayText=''></span>
                                <span class='st_twitter' displayText=''></span>
                                <span class='st_linkedin' displayText=''></span>
                                <span class='st_pinterest' displayText=''></span>
                                <span class='st_email' displayText=''></span>
                            </div!--><br />
							<div>
								<span>
									Untuk mendapatkan hasil dan rincian kalkulator
								</span><br />
								<span>
									masuk kan email Anda pada form dibawah.
								</span><br />
								<span>
									Saya bersedia menerima email dari Allianz.
								</span>
							</div>
							<div class="divEmail">
								<input type="text" class="email-user" placeholder="Email" />
								<input type='button' class='sendEmail' value='Send' />
							</div>
							<br />
							<div class="sukses" style="color:#1cbd20;">
								Terima kasih, email Anda sudah terkirim,<br />
								cek inbox atau kotak spam Anda.
							</div>
                            
                            <div style="clear:both"></div>
                            <span><br /><br /><br />
                            <b>Disclaimer: <br /></b>
				Perhitungan diatas merupakan simulasi yang  menggunakan sistem pembulatan.
				<br />
				Untuk hasil lebih tepatnya silakan <a href="/contact-us">hubungi Kami &rsaquo;</a>
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
               <div class="share">
                    <span>Ingin menghitung kembali? <a href="/kalkulator/financial-calculators/pertanggungan">klik disini >></a></span>
                </div>
               
               <div class="allianz-button">
                    <input id="fund_allianz" class="blue-btn" type="button" value="Lihat Fund Allianz">
                    <input id="product_allianz" class="blue-btn" type="button" value="Lihat Produk Allianz">
               </div>
           </div>  
           
               
        </div>
    </div>    
    
</div>    


<!-- End of Footer -->
<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script type="text/javascript">
        var biaya;
	var asumsi_inflasi; 
	var asumsi_imbal;
	var waktu ;
	var result1;
	
        function resp1(biaya, asumsi_inflasi, asumsi_imbal, waktu){
            var new_asumsi = asumsi_imbal - asumsi_inflasi;
            new_asumsi = new_asumsi / 100;
            var formula = 1 * ((1 - Math.pow(1 + Number(new_asumsi), Number(-waktu))) / Number(new_asumsi)) * (1 + Number(new_asumsi));
            if (formula < 99) {
                formula = formula.toFixed(3);
            }
            else{
                formula = formula.toFixed(2);
            }
            var result = Number(biaya) * 12 * formula;
            return result.toFixed(2);
        }
        
        $('#sliderPosition').val("Rp 5.000.000");
        $('#sliderPosition2').val("1,00%");
        $('#sliderPosition3').val("1,00%");
        $('#sliderPosition4').val("1 tahun");
        
        $("#sliderPosition").bind('input',function(){
            var text = clearFormat($(this).val());
            if (text > 100000000000) {
                text = 100000000000;
            }
            text = accounting.formatMoney(text,'Rp ',0,'.',',');
            $(this).val(text);
        });
        
        $("#sliderPosition2").keyup(function(event){
            var text = clearFormat2($(this).val());
            if (event.keyCode == '8') {
                text = text.substr(0,text.length-1);
            }
            $(this).val(text + '%');
        });
        
	$("#sliderPosition3").keyup(function(event){
            var text = clearFormat2($(this).val());
            if (event.keyCode == '8') {
                text = text.substr(0,text.length-1);
            }
            $(this).val(text + '%');
        });
        
        $("#sliderPosition4").keyup(function(event){
            var text = clearFormat($(this).val());
            if (event.keyCode == '8') {
                text = text.substr(0,text.length-1);
            }
            $(this).val(text + ' tahun');
        });
	

		
        $(".orange-btn").click(function(){
		
		biaya = clearFormat($("#sliderPosition").val());
		asumsi_inflasi = clearFormat2($("#sliderPosition2").val());
		asumsi_inflasi = asumsi_inflasi.replace(',','.');
		asumsi_imbal = clearFormat2($("#sliderPosition3").val());
		asumsi_imbal = asumsi_imbal.replace(',','.');
		waktu = clearFormat($("#sliderPosition4").val());
        
	    if (asumsi_inflasi != asumsi_imbal) {
		
		
            
		
                 result1= resp1(biaya,asumsi_inflasi,asumsi_imbal,waktu);
               
                /*
		setCookie('resp1_biaya',biaya,1);
                setCookie('resp1_asumsi_inflasi',asumsi_inflasi,1);
                setCookie('resp1_asumsi_imbal',asumsi_imbal,1);
                setCookie('resp1_jangka_waktu',waktu,1);
                setCookie('resp1_hasil',result,1);
                */
		
                $('.kalk-form1').hide();
		$('.formresult').show();
		
		
		var result = result1;
		result = accounting.formatMoney(result,'Rp ',2,'.',',');
		$('#result').html(result);
		$('#resp1_hasil').html(result);
		
		var resp1_biaya = biaya;
		$('#resp1_biaya').html(accounting.formatMoney(resp1_biaya,'Rp ',2,'.',','));
		var resp1_asumsi_imbal = asumsi_imbal;
		$('#resp1_asumsi_imbal').html(resp1_asumsi_imbal + '%');
		var resp1_asumsi_inflasi = asumsi_inflasi;
		$('#resp1_asumsi_inflasi').html(resp1_asumsi_inflasi + '%');
		var resp1_jangka_waktu = waktu;
		$('#resp1_jangka_waktu').html(resp1_jangka_waktu + ' tahun');
		
		$("#fund_allianz").click(function(){
		    window.location.href = "/allianz-fund";
		});
	     
		$("#product_allianz").click(function(){
		    window.open("http://allianz.co.id/produk",'_blank');
		});
		
		
            }
            else{
                alert('Asumsi imbal hasil tahunan tidak boleh sama dengan asumsi tingkat inflasi');
            }
        });
    
	$(document).ready(function(){
		/* added by Ahmad Somadi 27 Des 2014 */
                		
		$("#sliderPosition").focusout(function(event){
			
			val = this.value;
			val = val.replace("Rp ", "");
			val = val.replace(".", "");
			val = val.replace("0.0", "00");
			//$("#slider").slider( "value" , val);
			
		});
		
		$("#sliderPosition2").focusout(function(event){
			
			val = this.value;
			val = val.replace("%", "");
			//$("#slider2").slider( "value" , val);
			
		});

		$("#sliderPosition3").focusout(function(event){
			
			val = this.value;
			val = val.replace("%", "");
			//$("#slider3").slider( "value" , val);
			
		});
 
 		$("#sliderPosition4").focusout(function(event){
			
			val = this.value;
			val = val.replace(" tahun", "");
			$("#slider4").slider( "value" , val);
			
		});

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
		
		$('.sukses').hide();
		$('.sendEmail').click(function(){
			if($('.email-user').val() != "")
			{
				$.ajax({
					type: 'POST',
					url: '/sendkalkulator',
					data: {
						kalkulator : 'Asuransi',
						biaya: accounting.formatMoney(getCookie('resp1_biaya'),'Rp ',2,'.',','),
						result_1: accounting.formatMoney(getCookie('resp1_hasil'),'Rp ',2,'.',','),
						asumsi_inflasi: getCookie('resp1_asumsi_inflasi'),
						asumsi_imbalan : getCookie('resp1_asumsi_imbal'),
						jangka_waktu: getCookie('resp1_jangka_waktu'),
						risiko: getCookie('resp1_asumsi_imbal'),
						email : $('.email-user').val()
					},
					success: function()
					{
						$('.divEmail').hide();
						$('.sukses').show();
						//var url = window.location.origin+'/website/static/inv-fbshare/'+response;
						//alert("Email telah dikirim, silahkan cek email Anda");
					}
				});
			}
			else{
				alert("Alamat email harus diisi.");
			}
		});
	});
</script>

