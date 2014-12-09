<div class="row" style="background:#ccc;">
		<div class="container" >
	<section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah usia Anda?</label></span>
								<input id="q1" name="q1" type="text"/>
							</li>
							<li>
								<span><label for="q2">Berapakah pendapatan Anda per bulan?</label></span>
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
			function fp_insurance(usia, pendapatan){
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
					var result = fp_insurance($('#q1').val(),$('#q2').val());
					messageEl.innerHTML = 'FAKTA <br> <h3>Pertanggungan sebesar <br /> Rp. ' + result + ' <br> akan memastikan apa bila risiko meninggal dunia terjadi mereka yang dicintai tetap akan terdukung secara finansial hingga memasuki masa pensiun Anda <br> <a href= "/investasi/investment-homepage/tools/financial-calculators/pertanggungan"> Mari mulai perencanaan pertanggungan anda </a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>