<div class="row form-container brown">
		<div class="container" >
	<section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah biaya sekolah anda pada saat SMP?</label></span>
								<input id="q1" name="q1" type="text" value="Rp. 0"/>
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
			function fp_education(biaya){
				var result = Number(biaya) / (1000000 / 30);
				return result.toFixed();
			    }
			    
			var theForm = document.getElementById( 'theForm' );
		
				var biaya = 0;
			$("#q1").bind('input',function(){
				var text = $(this).val();
				text = text.replace(/[^0-9\.]+/g,"");
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				biaya = text;
				text = accounting.formatMoney(text,'Rp. ',0,'.',',');
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
					messageEl.innerHTML = 'Jumlah tersebut saat ini hanya cukup untuk bersekolah selama <br>' + result + ' hari <br><br> FAKTA <br> <h3>Secara rata-rata kenaikan biaya pendidikan di Indonesia dua kali lipat dari kenaikan harga barang-barang secara umum <br><br /> Ingin melakukan check up keuangan anda <br> <a style="color:white;" href= "/investment/kalkulator/financial-calculators/pendidikan"> Mari mulai perencanaan pendidikan anda ></a></h3><h3><a style="color:white;" href="#" onclick="window.location.href=window.location.href">Ulangi lagi ></a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>
