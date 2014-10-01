
			<html>
				<head>
					<meta property="og:title" content="Allianz SmartMed-Premier" />
					<meta property="og:type" content="website" />
					<meta property="og:description" content="" />
					<meta property="og:image" content="http://allianzcms//smartmed_premier.jpg" />
				</head>
				<body>
					<?php
						if($_SERVER["HTTP_REFERER"] == "https://www.facebook.com/")
						{
							header("Location: http://allianzcms/produk/asuransi-kesehatan");
						}
						$isiPad = (bool) strpos($_SERVER["HTTP_USER_AGENT"],"iPad");
						if($isiPad == 1)
						{
							header("Location: http://allianzcms/produk/asuransi-kesehatan");
						}
					?>
					<img src="http://allianzcms//smartmed_premier.jpg" />
				</body>
			</html>
		