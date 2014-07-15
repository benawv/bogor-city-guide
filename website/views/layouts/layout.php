<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<?php
        // portal detection => portal needs an adapted version of the layout
        $isPortal = false;
        if($this->getParam("controller") == "content" && $this->getParam("action") == "portal") {
            $isPortal = true;
        }

        // output the collected meta-data
        if(!$this->document) {
            // use "home" document as default if no document is present
            $this->document = Document::getById(1);
        }

        if($this->document->getTitle()) {
            // use the manually set title if available
            $this->headTitle()->set($this->document->getTitle());
        }

        if($this->document->getDescription()) {
            // use the manually set description if available
            $this->headMeta()->appendName('description', $this->document->getDescription());
        }

        $this->headTitle()->append("Asuransi Indonesia Terbaik");
        $this->headTitle()->setSeparator(" : ");

        echo $this->headTitle();
        echo $this->headMeta();
    ?>
	
	<?php echo $this->template("includes/metadata.php")?>
</head>

<body>
	<?php echo $this->template("includes/header.php")?>
	<div role="main" class="main">
		<div class="container">
			<?php echo $this->areablock('bannerArea')?>
			<div class="wrapper-special clearfix">
				<?php echo $this->areablock('bannerProduct')?>
				<div id="quicklinks">
					<?php echo $this->areablock('layananKami')?>
				</div>
			</div>
			<!-- Community -->
			<div id="community" class="clearfix">
				<h2>Allianz Community Tips</h2>
				<div class="tips">
					<?php 
						$entries = new Object_Communitytips_List();
						$entries->setLimit("6");
						$entries->setOrderKey("date");
						$entries->setOrder("desc");
						
						foreach($entries as $entry)
						{
					?>
							<div class="tip">
								<div class="photo">
									<img src="<?php echo $entry->getImage()?>" width="298" height="110" />
								</div>
								<div class="description">
									<h3><?php echo $entry->getTitle() ?></h3>
									<div class="meta">
										<div class="date"><?php echo date("d/m/Y", strtotime($entry->getDate())) ?></div>
										<div class="category"><?php echo $entry->getCategory()?></div>
									</div>
								</div>
							</div>
					<?php 
						}
					?>
				</div>
			</div>
			<!-- End Community -->
			<!-- Map -->
			<div class="wrapper clearfix">
				<div id="agent-locator">
					<h2>Marketing Office Location</h2>
					<div id="maparea">
						
					</div>
				</div>
				<?php echo $this->area("mapArea", array("type" => "map-point")); ?>
			</div>
			<!-- End Map -->
			<div class="wrapper clearfix">
				<div id="social-media-activity">
					<script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script>
					<div class="tintup" data-id="sevenova" data-columns="2"  style="height:265px;width:100%;overflow-y: scroll">
						<a href="http://www.tintup.com" style="width:118px;height:31px;background-image:url(//d33w9bm0n1egwm.cloudfront.net/assets/logos/poweredbytintsmall.png);position:absolute;bottom:10px;right: 20px;text-indent: -9999px;z-index:9;">hashtag campaign</a>
					</div>
				</div>
				<div id="videos">
					<?php echo $this->video('videoHome', array('width' => '100%' , "height" => '265')) ?>
				</div>
			</div>
		</div>
	</div>
	<?php echo $this->template("includes/footer.php"); ?>
</body>
<script type="text/javascript">
	var map = new Object();
	var markers = [];
	var infowindow = null;
	var BASEURL = "<?php echo $root; ?>";
	function clearOverlays() {
	  for (var i = 0; i < markers.length; i++ ) {
		markers[i].setMap(null);
		
	  }
	  markers.length = 0;
	}

    function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-6.2297465, 106.829518),
          zoom: 12
        };
        map = new google.maps.Map(document.getElementById("maparea"),mapOptions);
		infowindow = new google.maps.InfoWindow({
			content: "holding...",
			maxWidth: 200
		});
		$('#map-shortcut .kantor').MapLoad();
		

		
    }
	$.fn.MapLoad = function(){
		clearOverlays();
		var valueData = $(this).val() == undefined ? "allianz-utama" :  $(this).val();
		var entries = '<?php echo $this->offices ?>';
		var listLoc = jQuery.parseJSON(entries);
		var image = '/website/static/images/blue-with-shadow.png';
		var marker = [];
		
		$.each(listLoc.objects, function(i, item){
		
			var data_content = '<div class="content">'+
										'<div id="siteNotice"></div>'+
										'<img src="/website/static/images/allianz-eagle-3d.png" height="50" width="50" />'+
										'<h2 id="firstHeading" class="firstHeading">'+item.officeName+'</h2>'+
										'<div id="bodyContent">'+
										'<b>'+item.subName+'</b><br />'+
										'Alamat : '+item.alamat+'<br />'+
										'Telp :'+item.phone+'<br />'+
										'Fax :'+item.fax+''+
										'</div>'+
									'</div>';
									
			if(item.tipe == "kantor-pusat")
			{
				var marker = new google.maps.Marker({
							position: new google.maps.LatLng(item.latitude, item.longitude),
							draggable: false,
							icon: image,
							map: map,
							html: data_content
						});
			}
			else {
				var marker = new google.maps.Marker({
							position: new google.maps.LatLng(item.latitude, item.longitude),
							draggable: false,
							map: map,
							html: data_content
						});
			}
			markers.push(marker);
		});
		
		for(x=0;x < markers.length;x++){
			var marker = markers[x];
			google.maps.event.addListener(marker, 'click', function () {
				infowindow.setContent(this.html);
				infowindow.open(map, this);
			});
		}
		/*
		$.ajax({
			"url" : BASEURL + "data/" + valueData + ".php",
			"data" : "",
			"type" : "GET",
			"success" : function(responseData){
				var listPlace = responseData;
				var image = '_assets/images/blue-with-shadow.png';
				var marker = [];
				
				for(i=0; i<listPlace.length; i++){
					 if ((valueData=="allianz-life") && (i==listPlace.length-1))
					 {
						 var marker = new google.maps.Marker({
							position: new google.maps.LatLng(listPlace[i].latitude, listPlace[i].longitude),
							draggable: false,
							icon: image,
							map: map,
							html: listPlace[i].data_content
						});
					}
					else
					{
						var marker = new google.maps.Marker({
							position: new google.maps.LatLng(listPlace[i].latitude, listPlace[i].longitude),
							draggable: false,
							map: map,
							html: listPlace[i].data_content
						});
					}
					markers.push(marker);
				}
				
				for(x=0;x < markers.length;x++){
					var marker = markers[x];
					google.maps.event.addListener(marker, 'click', function () {
						infowindow.setContent(this.html);
						infowindow.open(map, this);
					});
				}
			}
		})
		*/
		
	}
	
	  $(function(){
			google.maps.event.addDomListener(window, 'load', initialize);
			$('#map-shortcut .kantor').change(function(e){
				$(this).MapLoad();
			});
			$('#map-shortcut .wilayah').change(function(e){
				var attr = $(this).val();
				attr = attr.split(',');
				var longLat = new google.maps.LatLng(attr[0], attr[1])
				map.setCenter(longLat);
				map.setZoom(parseInt(attr[2]));
			});
	  });
      
</script>
</html>