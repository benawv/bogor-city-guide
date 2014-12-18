<?php
		$filename = $_POST['filename'];
		$title = $_POST['title_fb'];
		$desc = $_POST['description'];
		$link_in_fb = 'http://'.$_POST['link_in_fb'];
		$url = $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
		$url = explode('/',$url);
		
		$url = "http://".$url[0];
		
		/*if($media == 'upload')
			$image = BASE_URL.UPLOAD_PATH."files/".$image_name;
		else
			$image = $image_name;
		*/
		$file = fopen($filename.".php", "w");
		$html = '
			<html>
				<head>
					<meta property="og:title" content="Allianz - '.$title.'" />
					<meta property="og:type" content="website" />
					<meta property="og:description" content="'.$desc.'" />
				</head>
				<body>
					<?php
						if($_SERVER["HTTP_REFERER"] == "https://www.facebook.com/")
						{
							header("Location: '.$link_in_fb.'");
						}
						if($_SERVER["HTTP_REFERER"] == "http://m.facebook.com" || $_SERVER["HTTP_REFERER"] == "http://m.facebook.com/" || $_SERVER["HTTP_REFERER"] == "https://m.facebook.com/" || $_SERVER["HTTP_REFERER"] == "https://m.facebook.com")
						{
							header("Location: '.$link_in_fb.'");
						}
						$isiPad = (bool) strpos($_SERVER["HTTP_USER_AGENT"],"iPad");
						if($isiPad == 1)
						{
							header("Location: '.$link_in_fb.'");
						}
					?>
				</body>
			</html>
		';
		fwrite($file, $html);
		fclose($file);
		
		echo $filename.".php";
?>
