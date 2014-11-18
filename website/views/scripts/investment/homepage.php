<?php echo $this->template("includes/inv/header.php")?>

<div class="homebanner banner_portal">
	<div class="container">


		<div class="box_banner">

			<div class="textbanner bg_green">
				<h1>1 Yang Terpenting!</h1>
				<p>Selamat datang <input type="text" name="putname" id="putname" /><br />
					pilih 1 yang terpenting untuk anda,</p>



				<!--<div class="box_choose">
					<ul>
						<li><a class="bg_edu" href="#">Education</a></li>
						<li><a class="bg_fund" href="#">Fund</a></li>
						<li><a class="bg_health" href="#">Health</a></li>
						<li><a class="bg_future" href="#">Future</a></li>
						<li><a class="bg_pension"  href="#">Pension</a></li>
						<li><a class="bg_guideme" href="#">Guide Me</a></li>
					</ul>	
				</div>-->

				<p>
					
                        <?php 
                            $i=1; 
                            foreach($this->data as $entrie){
                                 $id=$entrie->investment;
                                if($id==1){
                                    $investmentname="Education";
                                    $investmentcolor="bg_edu";    
                                }elseif($id==2){
                                    $investmentname="Fund";
                                     $investmentcolor="bg_fund";
                                }elseif($id==3){
                                    $investmentname="Health";
                                     $investmentcolor="bg_health lastone";
                                }elseif($id==4){
                                    $investmentname="Future";
                                     $investmentcolor="bg_future";
                                }elseif($id==5){
                                     $investmentname="Pension";
                                     $investmentcolor="bg_pension";
                                }elseif($id==6){
                                    $investmentname="Guide Me";
                                    $investmentcolor="bg_guideme lastone";
                                }
                                
                                
                        ?>
                              <input type="radio" id="rd_<?php echo $i; ?>" name="rd" value="<?php echo $i; ?>" />
                              <label for="rd_1"><?php echo $investmentname; ?></label> <br />
                        <?php
                                $i++; 
                        } ?>
						<!--input type="radio" id="rd_2" name="rd" value="2" />
						<label for="rd_2">Fund</label> <br />

						<input type="radio" id="rd_3" name="rd" value="3" />
						<label for="rd_3">Health</label> <br />


						<input type="radio" id="rd_4" name="rd" value="4" />
						<label for="rd_4">Future</label> <br />

						<input type="radio" id="rd_5" name="rd" value="5" />
						<label for="rd_5">Pension</label> <br />

						<input type="radio" id="rd_6" name="rd" value="6" />
						<label for="rd_6">Guide Me</label> <br /-->

				</p>
			</div>
            
			<div class="edge_textbanner edge_green">
				<input type="button" class='send_customer' value="Klik Disini"></input>
			</div>

		</div>



	</div>
	<!-- container end -->
</div>
<!-- homebanner end -->


<div class="box_cat">

	<div class="box_c bg_1">
		<div class="box_c_img left">
			<img src="/website/static/inv/images/box_1_img.jpg" />
		</div>
		<div class="box_c_text right">
			<h2>Perencana Keuangan</h2>
			<p>Bagaimana saya dapat mencapai segala tujuan finansial saya?</p>
			<a href="#">Selengkapnya <i class="fa fa-angle-right"></i></a>
		</div>

	</div>

	<div class="box_c bg_2">

		<div class="box_c_img left">
			<img src="/website/static/inv/images/box_2_img.jpg" />
		</div>
		<div class="box_c_text right">
			<h2>Fund Allianz</h2>
			<p>Bagaimana Allianz dapat membantu saya mencapai tujuan finansial saya?</p>
			<a href="#">Selengkapnya <i class="fa fa-angle-right"></i></a>
		</div>

	</div>

	<div class="box_c bg_3">

		<div class="box_c_img right">
			<img src="/website/static/inv/images/box_3_img.jpg" />
		</div>
		<div class="box_c_text left">
			<h2>Kalkulator</h2>
			<p>Hitung berbagai tujuan finansial Anda di sini!</p>
			<a href="#">Selengkapnya <i class="fa fa-angle-right"></i></a>
		</div>

	</div>

	<div class="box_c bg_4">

		<div class="box_c_img right">
			<img src="/website/static/inv/images/box_4_img.jpg" />
		</div>
		<div class="box_c_text left">
			<h2>Artikel</h2>
			<p>Saya ingin tahu lebih banyak tentang kebutuhan finansial saya!</p>
			<a href="/investment-main-article/">Selengkapnya <i class="fa fa-angle-right"></i></a>
		</div>

	</div>

</div>
<!-- box_cat end -->

<?php echo $this->template("includes/inv/footer.php")?>
