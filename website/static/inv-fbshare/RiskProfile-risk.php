
			<html>
				<head>
					<meta property="og:title" content="Allianz - Risk Profile" />
					<meta property="og:type" content="website" />
					<meta property="og:description" content="Moderat : Anda memiliki toleransi yang sedang terhadap resiko dan berinvestasi secar moderat. Anda dapat menerima fluktuasi pergerakan nilai aset, sebagai imbalan untuk memperoleh peningkatan dalam jangka panjang." />
				</head>
				<body>
					<?php
						if($_SERVER["HTTP_REFERER"] == "https://www.facebook.com/")
						{
							header("Location: http://allianzcms/investasi/investment-homepage/financial-planning/risk-profile/risk-profile");
						}
						if($_SERVER["HTTP_REFERER"] == "http://m.facebook.com" || $_SERVER["HTTP_REFERER"] == "http://m.facebook.com/" || $_SERVER["HTTP_REFERER"] == "https://m.facebook.com/" || $_SERVER["HTTP_REFERER"] == "https://m.facebook.com")
						{
							header("Location: http://allianzcms/investasi/investment-homepage/financial-planning/risk-profile/risk-profile");
						}
						$isiPad = (bool) strpos($_SERVER["HTTP_USER_AGENT"],"iPad");
						if($isiPad == 1)
						{
							header("Location: http://allianzcms/investasi/investment-homepage/financial-planning/risk-profile/risk-profile");
						}
					?>
				</body>
			</html>
		