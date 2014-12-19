<div class="row darkbrown_light">
		<div class="container" >
	<section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah biaya hidup bulanan Anda saat ini?</label></span>
								<input id="q1" name="q1" type="text" value="Rp. 0"/>
							</li>
							<li>
								<span><label for="q2">Berapa lama lagi sebelum Anda memustuskan untuk pensiun?</label></span>
								<input id="q2" name="q2" type="text" value="0 tahun"/>
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
				var new_asumsi = 0.10;
				var formula = 1 * Math.pow(1 + Number(new_asumsi), Number(waktu));
				formula = formula.toFixed(3);
				var result = Number(pendapatan) * formula;
				return result.toFixed(2);
			    }
	
			var theForm = document.getElementById( 'theForm' );

			var waktu = 0;
			var pendapatan = 0;
			$("#q1").bind('input',function(){
				var text = $(this).val();
				text = text.replace(/[^0-9\.]+/g,"");
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				pendapatan = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
				$(this).val(text);
			    });
			$("#q2").keyup(function(event){
				var text = $(this).val();
				text = text.replace(/[^0-9\.]+/g,"");
				if (event.keyCode == '8') {
				    text = text.substr(0,text.length-1);
				}
				if (isNaN(parseInt(text))) {
						text = 0;
				}
				waktu = text;
				$(this).val(parseInt(text) + ' tahun');
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
					var result = fp_retirement(pendapatan,waktu);
					result = accounting.formatMoney(result,'Rp. ',2,'.',',');
					messageEl.innerHTML = 'FAKTA <br> <h3>Anda membutuhkan <br />'+result+'<br /> Untuk menikmati gaya hidup Anda saat ini di masa pensiun setiap bulannya <br> <a style="color:#CD7A3F" href= "/kalkulator/financial-calculators/pensiun"> Mari mulai perencanaan pensiun anda ></a></h3><h3><a href="#" style="color:#CD7A3F" onclick="window.location.href=window.location.href">Ulangi lagi ></a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>
