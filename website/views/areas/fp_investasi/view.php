<div class="row form-container blue" style="background-color: #003da5;">
		<div class="container" >
	<section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah  pengeluaran Anda untuk hiburan dalam sebulan?</label></span>
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
    
        <script src="/website/static/inv/css/form/js/classie.js"></script>
		<script src="/website/static/inv/css/form/js/stepsForm.js"></script>
		<script src="/website/static/inv/js/accounting.min.js"></script>
		<script>
			function fp_investment(biaya){
				var waktu = 5
				var asumsi = 0.12;
				var formula = ((Math.pow(1 + Number(asumsi), Number(waktu)) - 1) / Number(asumsi));
				formula = formula.toFixed(3);
				var result = Number(biaya) * 12 * 30 / 100 * formula;
				return result.toFixed(2);
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
					var messageEl = theForm.querySelector( '.final-message' );
					var result = fp_investment(biaya);
					result = accounting.formatMoney(result,'Rp ',2,'.',',');
					messageEl.innerHTML = '<h2>FAKTA</h2><h3>30% dari jumlah yang sama setiap bulannya sudah dapat memberikan Anda </h3><h1 style="margin:0px;">'+result+'</h1><h3> Melalui instrumen investasi dengan rata-rata imbal hasil tahunan sebesar 12% selama 5 tahun <br> <a href= "/kalkulator/financial-calculators/calculator-invest"> Mari mulai perencanaan investasi Anda ></a></h3><h3><a href="#" onclick="window.location.href=window.location.href">Ulangi lagi ></a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>
