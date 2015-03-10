<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Cache-control" content="public" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<?php echo $this->cusMetaTitle.$this->cusMetaDesc.$this->cusMetaImage;?>
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
        
        if($this->document->getKeywords()) {
            $this->headMeta()->appendName('keywords', $this->document->getKeywords());
        }

        /* $this->headTitle()->append("Asuransi Indonesia Terbaik");
        $this->headTitle()->setSeparator(" : "); */

        echo $this->headTitle();
        echo $this->headMeta();
        
    ?>
	
	<?php echo $this->template("includes/metadata.php")?>
	
</head>

<body>
	<?php echo $this->template("includes/header.php")?>
	<div role="main" class="main">
		<?php echo $this->layout()->content; ?>
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
          zoom: 11
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
		//console.log(k+"  "+w);
		$.ajax({
			"url" : "/load-map/",
			"data" : {kantor : "", wilayah : ""},
			"type" : "POST",
			"success" : function(responseData){
			    var entries = responseData;
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
				    //console.log(item);
				    try {
					var jenis = item.tipe.jenis;
				    }
				    catch(e){
					var jenis = null;
				    }
				    if(item.o_key == "allianz-tower")
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
			}
		})
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
	
	function MapLoad2(k,w){
		clearOverlays();
		//console.log(k+"  "+w);
		$.ajax({
			"url" : "/load-map/",
			"data" : {kantor : k, wilayah : w},
			"type" : "POST",
			"success" : function(responseData){
			    var entries = responseData;
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
				    //console.log(item);
				    try {
					var jenis = item.tipe.jenis;
				    }
				    catch(e){
					var jenis = null;
				    }
				    if(item.o_key == "allianz-tower")
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
			}
		})
		
	}
	
	  $(function(){
			//google.maps.event.addDomListener(window, 'load', initialize);
			$('#map-shortcut .kantor').change(function(e){
				var kantor = $('#map-shortcut .kantor').find(":selected").val();
				var wilayah = $('#map-shortcut .wilayah').find(":selected").val();
				MapLoad2(kantor,wilayah);
			});
			$('#map-shortcut .wilayah').change(function(e){
				var kantor = $('#map-shortcut .kantor').find(":selected").val();
				var wilayah = $('#map-shortcut .wilayah').find(":selected").val();
				MapLoad2(kantor,wilayah);
				var attr = $(this).val();
				attr = attr.split(',');
				var longLat = new google.maps.LatLng(attr[0], attr[1])
				map.setCenter(longLat);
				map.setZoom(parseInt(attr[2]));
			});
	  });
      
</script>
</html>
