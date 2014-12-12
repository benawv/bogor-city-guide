<?php echo $this->template("includes/inv/header.php")?>

<div class="main_wrap">
	
	<div class="container">

		<div class="row">
			<!--div class="bread">
				<a href="index.php">Home</a>  
				<i class="fa fa-angle-right"></i> 
				<a href="artikel.php">Article</a>

				<i class="fa fa-angle-right"></i>
				<a href="artikel.php">Artikel Index Future</a>

				<i class="fa fa-angle-right"></i>
				Judul Artikel
			</div-->
		</div>


		<div class="box_banner_big">

			<div class="textbanner <?php echo $this->select('color')->getData()?$this->select('color')->getData():'blue'?> h200">
				<h1><?php echo $this->input('title-note')?></h1>
				

				<h3>
					<?php echo $this->wysiwyg('desc-note')?>
				</h3>
			
				<p>
					<?php 
						if($this->editmode)
						{
	                    	echo "Color: ";
	                		echo $this->select("color",array(
							    "store" => array(
							        array("red", "Red"),
							        array("purple", "Purple"),
							        array("blue", "Blue"),
							        array("brown", "Brown"),
							        array('darkbrown', "Dark Brown"),
							        array('green', "Green")
							    ),
							    "reload" => true
							)); 
						}
					?>
				</p>

			</div>
			<div class="edge_textbanner edge_<?php echo $this->select('color')->getData()?$this->select('color')->getData():'blue'; ?>">
				
			</div>

		</div>

		<div class="desc_page">
			<h1><?php echo $this->input('title')?></h1>
			<p>
				<?php echo $this->wysiwyg('description')?>
			</p>
		</div>



	</div>
	<!-- container end -->


	<div class="row">
		
		<?php echo $this->areablock('resources-object', array('allowed' => array('education','fp_pendidikan','fp_aruskas','fp_asuransi','fp_pensiun', 'fp_investasi','inv_box3', 'inv_box4', 'inv_box5', 'inv_box6', 'inv_balancedsheet','inv_incomestatement','inv_riskprofile','inv-fund-moneymarket')))?>
		
	</div>
	<!-- row end -->
	
</div>

<?php echo $this->template("includes/inv/footer.php")?>