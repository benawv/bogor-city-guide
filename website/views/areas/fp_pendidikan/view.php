<div class="row form-container brown">
		<div class="container" >
	<section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah biaya pendidikan tahunan saat ini?</label></span>
								<input id="q1" name="q1" type="text" value="Rp 0"/>
							</li>
							
						</ol><!-- /questions -->
						<button class="submit" type="submit">Send answers</button>
						<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
							<span class="error-message"></span>
						</div><!-- / controls -->
					</div><!-- /simform-inner -->
					<span class="final-message"></span>
				</form><!-- /simform -->	


			</section>

</div>
		<!-- container end -->

	</div>
	<!-- row end -->
    <script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
        <script src="/website/static/inv/css/form/js/classie.js"></script>
		<script src="/website/static/inv/css/form/js/stepsForm.js"></script>
		<script>
			/*
			function fp_education(biaya){
				var result = Number(biaya) / (1000000 / 30);
				return result.toFixed();
			    }
			*/
			
			function fp_education(biaya){
				var asumsi = 15 / 100;
				var waktu = 4;
				var formula = 1 * Math.pow(1 + Number(asumsi), Number(waktu));	
				
				if (formula < 99) {
                formula = formula.toFixed(3);
	            }
	            else{
	                formula = formula.toFixed(2);
	            }
	            var result = Number(biaya) * formula;

				var month_result = ( biaya / result ) * 12;
				
				return Math.floor(month_result);
			}
			    
			var theForm = document.getElementById( 'theForm' );
		
				var biaya = 0;
			$("#q1").bind('input',function(){
				var text = $(this).val();
				text = text.replace(/[^0-9\.]+/g,"");
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				biaya = text;
				text = accounting.formatMoney(text,'Rp ',0,'.',',');
				$(this).val(text);
			    });
			
			new stepsForm( theForm, {
				onSubmit : function( form ) {
					// hide form
					classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

					/*
					form.submit()
					or
					AJAX request (maybe show loading indicator while we don't have an answer..)
					*/

					// let's just simulate something...
					var result = fp_education(biaya);
					var messageEl = theForm.querySelector( '.final-message' );
					/*messageEl.innerHTML = '<h3>Jumlah tersebut saat ini hanya cukup untuk bersekolah selama </h3><br><h1 style="margin:0px;">'+result+' hari</h1><h3>FAKTA</h3><h3>Secara rata-rata kenaikan biaya pendidikan di Indonesia dua kali lipat dari kenaikan harga barang-barang secara umum <br><br /> Ingin melakukan kalkulasi biaya pendidikan Anda? <br> <a href= "/kalkulator/financial-calculators/pendidikan"> Mari mulai perencanaan pendidikan Anda ></a></h3><h3><a  href="#" onclick="window.location.href=window.location.href">Ulangi lagi ></a></h3>';*/
					messageEl.innerHTML = '<h3>Jumlah tersebut dalam 4 tahun lagi hanya cukup untuk bersekolah selama </h3><h2 style="margin:0px;">'+result+' bulan</h2><h3> Secara rata-rata kenaikan biaya pendidikan di Indonesia dua kali lipat dari kenaikan harga barang-barang secara umum <br><br /> Ingin melakukan kalkulasi biaya pendidikan Anda?<br/><br><a href= "/kalkulator/financial-calculators/pendidikan"> Mari mulai perencanaan pendidikan Anda ></a></h3><div class="fp_separator"></div><h3 style="margin-top:0px;"><a  href="#" onclick="window.location.href=window.location.href">Ulangi lagi ></a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>
