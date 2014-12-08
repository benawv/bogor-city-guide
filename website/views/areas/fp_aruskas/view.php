<div class="row" style="background:#ccc;">
		<div class="container" >
	<section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah pendapatan anda saat ini??</label></span>
								<input id="q1" name="q1" type="text"/>
							</li>
							<li>
								<span><label for="q2">Berapa yang dapat anda sisihkan setiap bulannya untuk menabung?</label></span>
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
		<script>
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
					messageEl.innerHTML = 'FAKTA <br> <h3>Idealnya, seseorang dapat menyisihkan 10% <br>dari pendapatan bulanannya untuk tabungan yang disebut dengan financial ratio. <br>Financial ratio Anda adalah <br><br /> Ingin melakukan check up keuangan anda <br> <a href= "#"> Mari mulai perencanaan arus kas anda </a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>