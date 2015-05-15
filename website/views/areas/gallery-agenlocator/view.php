<style type="text/css">     
    #header {
		border:1px solid #bbb;
		height:80px;
		padding:10px;
	}
	#content {
		margin-top:10px;
		padding-bottom:10px;
	}
	#content div {
		padding:10px;
		border:1px solid #bbb;
		float:left;
	}
	#content-left {
		width:30%;
	}
	#content-main {
		margin-left:10px;
		width:30%;
	}
	#content-right {
		margin-left:10px;
		width:30%;
	}
	#footer {
		float:left;
		margin-top:10px;
		margin-bottom:10px;
		padding:10px;
		border:1px solid #bbb;
		width:878px;
	}
	#bottom {
		clear:both;
		text-align:right;
	}
</style>
<div id="wrapper">

	<div id="content">
		<div id="content-left">
            <?php echo $this->image('image-kiri', array(
									'title' => 'Image Size 226x200',
									'width' => 230,
									'height' => 200
									/*'thumbnail' => 'product'*/))?>
        </div>
		<div id="content-main">2</div>
		<div id="content-right">
    <h2><center>NEWS FEED</center></h2>        
    <?php

  $showStatus = 1;

  $xml = simplexml_load_file("http://fbrss.com/feed/2badcab68f4b1c9f18445c287ae098198d94ab75.xml");

  $counter = 1;

  foreach($xml->channel->item as $data)

  {

  echo "<p>";

  echo substr($data->pubDate,0,9)."<br>";

  echo $data->title."<br>";

  echo $data->description;

  echo "</p>";

  if ($counter == $showStatus) break;

  else $counter++;

  }

?>
</div>
	</div>

</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3&appId=463659440451126";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>