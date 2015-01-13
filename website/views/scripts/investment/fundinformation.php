	<?php echo $this->template("includes/inv/header.php")?>

<div class="header_page bg_future" style="background-color: #003DA5;">
	<div class="container">
		Fund Information
	</div>
</div>

<div class="main_wrap">

	<div class="row">
		<div class="container">


<ul id="membername" class="navi" style="">
	<li >
		<a href="/allianz-fund/allianz-fund/fund-information/equity">
			<div class="nav_menu">
													
			<div style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
													
			<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png);"></div>
													
			<span class="cus_anchor_0">Equity </span>
			</div>
		</a>
	</li>
	<li class="aktif">
		<a href="/allianz-fund/allianz-fund/fund-information/balanced">
		<div class="nav_menu">
												
			<div style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
												
			<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png);"></div>
												
			<span class="cus_anchor_1">Balanced </span>
		</div>
		</a>
	</li>
	
	<li>

		<a href="/allianz-fund/allianz-fund/fund-information/fixed-income">
		<div class="nav_menu">
												
		<div style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
												
		<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png); "></div>
												
		<span class="cus_anchor_3">Fix Income </span>
		</div>
		</a>
	</li>
	<li>
		<a href="/allianz-fund/allianz-fund/fund-information/money-market">
		<div class="nav_menu">
													
		<div style="margin-bottom: 3px; width: 25px; height: 25px; display: block; background-image: url(http://www.allianz.co.id/icon_anchor/icon-inactive/tentang_allianz.png);"></div>
													
		<div class="white_image" style="margin-bottom: 3px; width: 25px; height: 25px; display: none; background-image: url(http://www.allianz.co.id/icon_anchor/icon-active/tentang-kami.png); "></div>
													
		<span class="cus_anchor_4">Money Market </span>
		</div>
		</a>
	</li>
	
</ul>

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


<div class="row">
		
	
	<div class="row">

			<div class="container">

    			<div class="title_section">
    			</div>

				<!--<div class="catbox blue">
					<h2><a href="/allianz-fund/allianz-fund/fund-information">Informasi Fund</a></h2>
				</div>-->

				<div class="catbox blue">
					
					<h2><a href="/allianz-fund/allianz-fund/daily-nav">NAB Harian</a></h2>
				</div>

				<div class="catbox blue">
				
					<h2><a href="/allianz-fund/allianz-fund/fund-fact-sheet">Fund Fact Sheet</a></h2>
				</div>
                
                
                
			</div>
			<!-- container end -->

	</div>
		
</div>


<?php echo $this->template("includes/inv/footer.php")?>