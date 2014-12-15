	<?php echo $this->template("includes/inv/header.php")?>

<div class="header_page bg_future">
	<div class="container">
		Fund Information
	</div>
</div>

<div class="main_wrap">

	<div class="row">
		<div class="container">

			<?php echo $this->areablock('container', array('allowed' => array('teks-tabs'))) ?>			

		</div>
		<!-- container end -->

	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->

<script type="text/javascript">
	$(document).ready(function(){
		
		$(".menutab_dekstop li").each(function(x){

			$("#opentab_"+x).click(function(){

				$('.menutab_dekstop li a').removeClass("active");
				$('a#opentab_'+x).addClass("active");
				$('.show_1').hide();
				$('#tabcontent_'+x).show();
				
				if($('#tabcontent_'+x).find("ul").height() != null) {
					
					if($('#tabcontent_'+x).find("ul").height() > 500) {
						
						$('#tabcontent_'+x).find("ul").addClass("tab_bca");
						
					}
					
				}
			});
			
		});
		
		$('.social-icon').remove();
		
	});
</script>

<?php echo $this->template("includes/inv/footer.php")?>