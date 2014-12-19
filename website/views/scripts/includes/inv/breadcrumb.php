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
		<h5 style="margin-bottom: 23px;">
			<span><a href="<?php echo "/".$uri[1]?>">Home</a></span>  
				<?php
					$tmp = array();
					$array_path = array();
					for($x = 2; $x < count($uri); $x++)
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
								<span><a href="<?php echo $data->path."".$data->key;?>"><?php echo $data->getProperty('navigation_title');?></a></span>
				<?php
							}
					}
				?>
		</h5>