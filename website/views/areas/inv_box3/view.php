<div class="row">

		<div class="container">

    			<div class="title_section">
    				<?php echo $this->input('title-section')?>
    			</div>
				<div class="catbox" style="background-color: <?php echo $this->select('color1')->getData()?$this->select('color1')->getData():'blue'?>;">
					<a href="">
						<?php echo $this->image('image1', array(
								'width' 	=> 400,
								'thumbnail'	=> 'image1')) ?>
					</a>
					<h2><?php echo $this->link('title-1')?></h2>
					<?php 
						if($this->editmode)
						{
	                    	echo "Color: ";
	                		echo $this->select("color1",array(
							    "store" => array(
							        array("red", "Red"),
							        array("purple", "Purple"),
							        array("blue", "Blue"),
							        array("blue_light", "Light Blue"),
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
					<a href="">
						<?php echo $this->image('image2', array(
								'width' 	=> 400,
								'thumbnail'	=> 'image2')) ?>
					</a>
					<h2><?php echo $this->link('title-2')?></h2>
					<?php 
						if($this->editmode)
						{
	                    	echo "Color: ";
	                		echo $this->select("color2",array(
							    "store" => array(
							        array("red", "Red"),
							        array("purple", "Purple"),
							        array("blue", "Blue"),
							        array("blue_light", "Blue Light"),
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
					<a href="">
						<?php echo $this->image('image3', array(
								'width' 	=> 400,
								'thumbnail'	=> 'image3')) ?>
					</a>
					<h2><?php echo $this->link('title-3')?></h2>
					<?php 
						if($this->editmode)
						{
	                    	echo "Color: ";
	                		echo $this->select("color3",array(
							    "store" => array(
							        array("red", "Red"),
							        array("purple", "Purple"),
							        array("blue", "Blue"),
							        array("blue_light", "Blue Light"),
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