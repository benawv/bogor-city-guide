<?php echo $this->template("includes/inv/header.php")?>
<?php
	if(!$this->editmode) { 
		$url = $_SERVER['REQUEST_URI'];
		$uri = explode("/", $url);
		
		for($x = 1; $x < count($uri); $x++)
		{
			$title = explode("-", $uri[$x]);
			$textTitle = "";
			$text = "";
			for ($y = 0; $y < count($title); $y++)
			{
				$textTitle = " <span class='upperText'>".substr($title[$y], 0, 1)."</span>".substr($title[$y], 1);
				$text .= $textTitle;
			}
		}
		$menu = explode("-", $uri[1]);
		$textTitle2 = "";
		$text2 = "";
		for ($y = 0; $y < count($menu); $y++)
		{
			$textTitle2 = " <span class='upperText'>".substr($menu[$y], 0, 1)."</span>".substr($menu[$y], 1);
			$text2 .= $textTitle2;
		}
	}
	else{
		$text = "";
	}
?>
<div class="main_wrap">
	
	<div class="container">

		<div class="row">
			<div class="bread">
				<a href="<?php echo "/".$uri[1]."/".$uri[2]?>">Home</a>  
				<?php
					$tmp = array();
					$array_path = array();
					for($x = 3; $x < count($uri); $x++)
					{
						$z = $x;
						if(in_array($uri[$z], $tmp))
						{
							
						}
						else{
							$path = "";
							for ($y=1;$y<$z;$y++)
							{
								$path .= "/".$uri[$y];
							}
							$tmp[] = $uri[$z];
							$array_path[] = $path."/";
						}
					}
					for($z = 0; $z < count($tmp); $z++){
							$list = new Document_List();
							$list->setCondition("`key` = '".$tmp[$z]."' AND `path`= '".$array_path[$z]."'");
							foreach ($list as $data)
							{
				?>
								<i class="fa fa-angle-right"></i> 
								<a href="<?php echo $data->path."".$data->key;?>"><?php echo $data->title;?></a>
				<?php
							}
					}
				?>
			</div>
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