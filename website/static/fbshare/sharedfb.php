<?php
		$filename = $_POST['filename'];
		$judul = "-".$_POST['judul'];
		$title = $_POST['title_fb'];
		$image_name = $_POST['image_name'];
		$desc = $_POST['description'];
		$url = 'http://'.$_POST['url'];
		$link_in_fb = 'http://'.$_POST['link_in_fb'];
		$url = $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
		$url = explode('/',$url);
		
		$url = "http://".$url[0];
		
		/*if($media == 'upload')
			$image = BASE_URL.UPLOAD_PATH."files/".$image_name;
		else
			$image = $image_name;
		*/
		$file = fopen($filename."".$judul.".php", "w");
		$html = '
			<html>
				<head>
					<meta property="og:title" content="Allianz - '.$title.'" />
					<meta property="og:type" content="website" />
					<meta property="og:description" content="'.$desc.'" />
					<meta property="og:image" content="'.$url.'/'.$image_name.'" />
				</head>
				<body>
					<?php
						if($_SERVER["HTTP_REFERER"] == "https://www.facebook.com/")
						{
							header("Location: '.$link_in_fb.'");
						}
						$isiPad = (bool) strpos($_SERVER["HTTP_USER_AGENT"],"iPad");
						if($isiPad == 1)
						{
							header("Location: '.$link_in_fb.'");
						}
					?>
					<img src="'.$url.'/'.$image_name.'" />
				</body>
			</html>
		';
		fwrite($file, $html);
		fclose($file);
		
		echo $filename.".php";
?>