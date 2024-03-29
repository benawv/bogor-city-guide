
    <div class="row form-container purple">
		<div class="container" >
	       <section>
				<form id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<span><label for="q1">Berapakah pendapatan Anda saat ini?</label></span>
								<input id="q1" name="q1" type="text" value="Rp 0"/>
							</li>
							<li>
								<span><label for="q2">Berapa yang dapat Anda sisihkan setiap bulannya untuk menabung?</label></span>
								<input id="q2" name="q2" type="text" value="Rp 0"/>
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
			function fp_cashflow(pendapatan, tabungan){
				var result = Number(tabungan) / Number(pendapatan) * 100;
				return result.toFixed(2);
			    }

			var theForm = document.getElementById( 'theForm' );

			var pendapatan = 0;
			var tabungan = 0;
			$("#q1").bind('input',function(){
				var text = $(this).val();
				text = text.replace(/[^0-9\.]+/g,"");
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				pendapatan = text;
				text = accounting.formatMoney(text,'Rp ',0,'.',',');
				$(this).val(text);
			    });
			$("#q2").bind('input',function(){
				var text = $(this).val();
				text = text.replace(/[^0-9\.]+/g,"");
				text = text.replace(/\./g,'');
				text = text.replace(/,/g,'');
				tabungan = text;
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
					var result = fp_cashflow(pendapatan, tabungan);
					var color = '#FFFFFF';
					if (result < 10.00) {
						color = '#FF0000';
					}
					messageEl.innerHTML = '<h2>FAKTA</h2> <h3>Idealnya, seseorang dapat menyisihkan 10% <br>dari pendapatan bulanannya untuk tabungan yang disebut dengan rasio tabungan investasi. <br><br>Rasio tabungan investasi Anda adalah </h3><h1 style="color:'+color+'; margin:0px;">'+result+'%</h1><h3> Ingin melakukan check up keuangan Anda <br> <a href="/financial-planning/cash-flow-tables/income-statement#step_1"> Mari mulai perencanaan arus kas Anda ></a></h3><div class="fp_separator"></div><h3 style="margin-top:0px;"><a href="#" onclick="window.location.href=window.location.href">Ulangi lagi ></a></h3>';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>
