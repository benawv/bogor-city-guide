<div class="row">
		<div class="container">


			<div class="title_section">
				Informasi Fund
			</div>


				<div class="catbox" style="background-color: <?php echo $this->select('color1')->getData()?$this->select('color1')->getData():'blue'?>;">
					<a href="/investasi/investment-homepage/allianz-fund/allianz-fund/fund-information/money-market">
						<?php echo $this->image('image1', array(
								'width' 	=> 400,
								'thumbnail'	=> 'image1')) ?>
					</a>
					<a href="/investasi/investment-homepage/allianz-fund/allianz-fund/fund-information/money-market"><h2><?php echo $this->input('title-box-1')?></h2></a>
					<?php 
						if($this->editmode)
						{
	                    	echo "Color: ";
	                		echo $this->select("color1",array(
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
                </div>

				<div class="catbox" style="background-color: <?php echo $this->select('color2')->getData()?$this->select('color2')->getData():'blue'?>;">
					<a href="/investasi/investment-homepage/allianz-fund/allianz-fund/fund-information/fixed-income">
						<?php echo $this->image('image2', array(
								'width' 	=> 400,
								'thumbnail'	=> 'image2')) ?>
					</a>
					<a href="/investasi/investment-homepage/allianz-fund/allianz-fund/fund-information/balanced"><h2><?php echo $this->input('title-box-2')?></h2></a>
					<?php 
						if($this->editmode)
						{
	                    	echo "Color: ";
	                		echo $this->select("color2",array(
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
                </div>

				<div class="catbox" style="background-color: <?php echo $this->select('color3')->getData()?$this->select('color3')->getData():'blue'?>;">
					<a href="/investasi/investment-homepage/allianz-fund/allianz-fund/fund-information/balanced">
						<?php echo $this->image('image3', array(
								'width' 	=> 400,
								'thumbnail'	=> 'image3')) ?>
					</a>
					<a href="/investasi/investment-homepage/allianz-fund/allianz-fund/fund-information/balanced"><h2><?php echo $this->input('title-box-3')?></h2></a>
					<?php 
						if($this->editmode)
						{
	                    	echo "Color: ";
	                		echo $this->select("color3",array(
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
                </div>

				<div class="catbox" style="background-color: <?php echo $this->select('color4')->getData()?$this->select('color4')->getData():'blue'?>;">
					<a href="/investasi/investment-homepage/allianz-fund/allianz-fund/fund-information/equity">
						<?php echo $this->image('image4', array(
								'width' 	=> 400,
								'thumbnail'	=> 'image4')) ?>
					</a>
					<a href="/investasi/investment-homepage/allianz-fund/allianz-fund/fund-information/equity"><h2><?php echo $this->input('title-box-4')?></h2></a>
					<?php 
						if($this->editmode)
						{
	                    	echo "Color: ";
	                		echo $this->select("color4",array(
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
                </div>
				



		</div>
		<!-- container end -->

	</div>