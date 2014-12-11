<div class="row" style="background:#ccc;">
		<div class="container" >
	<section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah biaya hidup bulanan Anda saat ini?</label></span>
								<input id="q1" name="q1" type="text"/>
							</li>
							<li>
								<span><label for="q2">Berapa lama lagi sebelum Anda memustuskan untuk pensiun?</label></span>
								<input id="q2" name="q2" type="text"/>
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
		function fp_retirement(pendapatan, usia){
				var new_usia = 55 - usia;
				var new_asumsi = 0.02;
				var result = Number(pendapatan) * 12 * ((1 - Math.pow(1 + Number(new_asumsi), Number(-new_usia))) / Number(new_asumsi)) * (1 + Number(new_asumsi));
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
					var result = fp_retirement($('#q1').val(),$('#q2').val());
					result = accounting.formatMoney(result,'Rp. ',2,'.',',');
					messageEl.innerHTML = 'FAKTA <br> <h3>Anda membutuhkan <br />'+result+'<br /> Untuk menikmati gaya hidup Anda saat ini di masa pensiun setiap bulannya <br> <a href= "#"> Mari mulai perencanaan arus kas anda </a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>