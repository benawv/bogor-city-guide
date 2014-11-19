<?php echo $this->template("includes/inv/header.php")?>

<div class="header_page bg_future">
	<div class="container">
		Fund Information
	</div>
</div>

<div class="main_wrap">

	<div class="row">
		<div class="container">

			<div class="full-w bg-white">

				<div class="tabwrap">
					
					<div class="menutab_dekstop">
						<ul>
							<?php if($this->data) { ?>
								<?php $i = 0;?>
								<?php foreach($this->data as $entry) { ?>
									<li>
										<a id="opentab_<?php echo $i ?>" href="javascript:void(0)" class="<?php echo $i==0?'active':''?>"><?php echo $entry->judul ?></a>
									</li>
									<?php $i++ ?>
								<?php } ?>
							<?php } ?>
						</ul>
					</div>
					<div class="tabcontent">
						<ul>
							<?php if($this->data) { ?>
								<?php $i = 0;?>
								<?php foreach($this->data as $entry) { ?>
									<li>
										<div id="tabcontent_<?php echo $i ?>" class="content_show <?php echo $i==0?'showme':''?> show_1">
											<?php echo $entry->deskripsi?>
										</div>
									</li>
									<?php $i++ ?>
								<?php } ?>
							<?php } ?>
						</ul>
					</div>
				</div>

			</div>
			<!-- listarticle end -->			

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
		
	});
</script>

<?php echo $this->template("includes/inv/footer.php")?>