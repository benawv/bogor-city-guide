<?php echo $this->template("includes/inv/header.php")?>

<div class="main_wrap">
	
	<div class="container">

		<?php echo $this->template("includes/inv/breadcrumb.php")?>

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
			<h2><?php echo $this->input('title')?></h2>
			<?php echo $this->areablock('referensi-object-pdf', array('allowed' => array('investment-daily','investment-outlook','investment-ular','investment-ref-lainnya')))?>
			<p>
				<?php echo $this->wysiwyg('description')?>
			</p>
		</div>



	</div>
	<!-- container end -->


	<div class="row">
		
		<?php echo $this->areablock('resources-object', array('allowed' => array('education','fp_pendidikan','fp_aruskas','fp_asuransi','fp_pensiun', 'fp_investasi','inv_box3', 'inv_box4', 'inv_box5', 'inv_box6', 'inv_balancedsheet','inv_incomestatement','inv_riskprofile','inv-fund-moneymarket', 'inv_finansialrasio')))?>
		
	</div>
	<!-- row end -->
	
</div>

<?php echo $this->template("includes/inv/footer.php")?>
