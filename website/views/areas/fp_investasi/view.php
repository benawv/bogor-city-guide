<div class="row" style="background:#ccc;">
		<div class="container" >
	<section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah  pengeluaran anda untuk hiburan dalam sebulan?</label></span>
								<input id="q1" name="q1" type="text"/>
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
				var asumsi = 0.10;
				var result = Number(biaya) * (Math.pow(1 + Number(asumsi), Number(waktu)));
				result = result * 30 / 100;
				return result.toFixed(2);
			    }
	
			var theForm = document.getElementById( 'theForm' );

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
					var result = fp_investment($('#q1').val());
					result = accounting.formatMoney(result,'Rp. ',2,'.',',');
					messageEl.innerHTML = 'FAKTA <br> <h3>30% dari jumlah yang sama setiap bulannya sudah dapat memberikan Anda <br />' + result + '<br /> Melalui instrumen investasi dengan rata-rata imbal hasil tahunan sebesar 12% selama 5 tahun <br> <a href= "#"> Mari mulai perencanaan arus kas anda </a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>