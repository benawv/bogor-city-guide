<link rel="stylesheet" href="/website/static/css/bootstrap-grid-only.css">
<link rel="stylesheet" href="/website/static/css/landing-tasbih.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



<style>
    #agent-locator
    {
        position: relative;
        max-width: 100% !important;
        min-width: 100% !important;
        width: 100% !important;
        float: none;
    }

    #agent-locator #maparea
    {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        height: 328px !important;
    }

    #agent-locator .searchbox
    {
        margin-bottom: 20px;
    }

    #agent-locator .searchbox > input[type="search"],
    #agent-locator .searchbox > input[type="text"]
    {
        width: 78%;
        border: solid 1px #ddd;
        font-size: small;
        padding: 12px 24px;
        margin: 0 auto;
        line-height: 1.5;
    }

    #agent-locator .searchbox > button.search-btn {
      width: 22%;
      margin: 0 auto;
      font-size: small;
      padding: 14px 2px;
      display: inline-block;
      text-transform: uppercase;
      background-color: #003781;
      border: solid 1px #003781;
      border-radius: 0;
      color: white;
      line-height: 0;
      float: right;
    }

    /* Respsonsive */

    @media ( max-width: 767px )
    {
        #agent-locator .searchbox > input[type="search"],
        #agent-locator .searchbox > input[type="text"]
        {
            width: 100%;
            display: block;
        }

        #agent-locator .searchbox > button.search-btn
        {
            width: 100%;
            display: block;
            margin-top: 16px;
        }
    }
    

</style>


                	<?php if($this->editmode) { ?>
	            How many box you want to show?
	
	            <?php
	                // prepare the store
	                $selectStore = [];
	                for($i=2; $i<=8; $i++) {
	                    $selectStore[] = [$i, $i];
	                }
	            ?>
	            <?php echo $this->select("slides",[
	                "store" => $selectStore,
	                "reload" => true
	            ]); ?>

	<?php } ?>
	<?php 
		$id = "container-carousel-".uniqid();
		$slides = 1;
		if(!$this->select("slides")->isEmpty()){
	        $slides = (int) $this->select("slides")->getData();
	    }
	?>
<section class="landing-tasbih-grid">
    <div class="container">
        
<!--
        <div class="row">
            <div class="col-xs-12 col-md-8 pr8">
-->

                <div class="row">
                    <?php for($i=1;$i<$slides+1;$i++) { ?>
                    <?php
								$color = $this->select('color_'.$i)->getData();
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="landing-tasbih-grid--item <?php echo $color;?>">
                            <div class="landing-tasbih-grid--item-inner">
                                        <?php echo $this->renderlet("artikel".$i, array(
                                            "controller" => "landing",
                                            "action" => "renderlet",
											"editmode" => $this->editmode,
                                            "title" => "Drag objek artikel",
                                            "height" => 200,
                                            "maxlength" => 10
                                        )); ?>
                                <!--<a href="#"><i class="fa fa-chevron-circle-right"></i> Selengkapnya</a>-->
                            </div><!--/ .landing-tasbih-grid--item-inner -->
                            <?php if($this->editmode) { ?>
			                        	
			                        	<p>
				                        <?php 
				                        	echo "Color: <br />";
			                        		echo $this->select("color_".$i,array(
											    "store" => array(
											        array("red", "Red"),
											        array("lightgreen", "Light Green"),
                                                    array("green", "Green"),
											        array("purple", "Purple"),
											        array("blue", "Blue"),
											        array("orange", "Orange")
											    ),
											    "reload" => true
											)); 
										?>
			                        	</p>
			                        <?php } ?>
                        </div><!--/ .landing-tasbih-grid--item -->
                    </div><!--/ .col-xs-12 -->
<?php }?>
                    

                </div><!--/ .row -->
                                    

<!--            </div>/ .col-xs-12 -->
<!--                        <div class="col-xs-12 col-md-4 pl8">-->

<!--                <div class="landing-tasbih-map" style="height:335px !important;">-->
<!--                    <div id="agent-locator">-->
<!--                        <div id="maparea"></div>-->
<!--                    </div>/ #agent-locator -->
<!--                    <div class="landing-tasbih-map--button">-->
<!--                        <a href='http://agen.imkepo.com/' target="_blank"><i class="fa fa-search"></i> Temukan Agen</a>-->
<!--                    </div>/ .landing-tasbih-map--button -->
<!--                </div>/ .landing-tasbih-map -->

<!--            </div>/ .col-xs-12 -->
<!--        </div>/ .row -->
        
    </div><!--/ .container -->
</section><!--/ .landing-tasbih-grid -->
<script type="text/javascript">
    var map = new Object();
    var imageCurrentMarker = '/website/static/images/map-pointer-green.png';
    var imageSearchMarker = '/website/static/images/pointer-blue.png';
    var markers = [];
    var titikMarker = "";
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
          zoom: 15
        };

        map = new google.maps.Map(document.getElementById("maparea"),mapOptions);
        infowindow = new google.maps.InfoWindow({
            content: "holding...",
            maxWidth: 200
        });
        titikMarker = "null";
        var titik = radius(-6.2297465, 106.829518);
        MapLoad(titik, -6.2297465, 106.829518, titikMarker);

        // Try HTML5 geolocation
        if(navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = new google.maps.LatLng(position.coords.latitude,
                                             position.coords.longitude);
            var titik = radius(pos.lat(), pos.lng());
            titikMarker = "marker";
            MapLoad(titik, pos.lat(), pos.lng(), titikMarker);
            //var infowindow = new google.maps.InfoWindow({
            //  zoom: 11,
            //  position: pos,
            //  content: 'Location found using HTML5.'
            //});

            //map.setCenter(pos);
          }, function() {
            handleNoGeolocation(true);
          });
        } else {
          // Browser doesn't support Geolocation
          handleNoGeolocation(false);
        }
        function handleNoGeolocation(errorFlag) {
            if (errorFlag) {
              var content = 'Error: The Geolocation service failed.';
            } else {
              var content = 'Error: Your browser doesn\'t support geolocation.';
            }

            var options = {
              //map: map,
              //zoom: 11,
              position: new google.maps.LatLng(-6.2297465, 106.829518)/*,
              content: content*/
            };

            var infowindow = new google.maps.InfoWindow(options);
            map.setCenter(options.position);
        }
        //END Try HTML5 geolocationz

        map = new google.maps.Map(document.getElementById("maparea"),mapOptions);
        infowindow = new google.maps.InfoWindow({
            content: "holding...",
            maxWidth: 200
        });

        // Create the search box and link it to the UI element.
        var input = /** @type {HTMLInputElement} */(
            document.getElementById('search'));
        //map.controls.push(input);

        var searchBox = new google.maps.places.SearchBox(
          /** @type {HTMLInputElement} */(input));

        google.maps.event.addListener(searchBox, 'places_changed', function() {
            mapSearch();
        });

        //// [START region_getplaces]
        //// Listen for the event fired when the user selects an item from the
        //// pick list. Retrieve the matching places for that item.
        //google.maps.event.addListener(searchBox, 'places_changed', function() {
        //	var places = searchBox.getPlaces();
        //	var lat, long;
        //	$.each(places, function(i, item){
        //		lat = item.geometry.location.A;
        //		long = item.geometry.location.F;
        //	});
        ////var titik = radius(lat, long);
        ////$('#map-shortcut .kantor').MapLoad(titik);
        //	if (places.length == 0) {
        //	  return;
        //	}
        //	for (var i = 0, marker; marker = markers[i]; i++) {
        //	  marker.setMap(null);
        //	}
        //
        //	// For each place, get the icon, place name, and location.
        //	markers = [];
        //	var bounds = new google.maps.LatLngBounds();
        //	for (var i = 0, place; place = places[i]; i++) {
        //	  var image = {
        //		url: place.icon,
        //		size: new google.maps.Size(71, 71),
        //		origin: new google.maps.Point(0, 0),
        //		anchor: new google.maps.Point(17, 34),
        //		scaledSize: new google.maps.Size(25, 25)
        //	  };
        //
        //	  // Create a marker for each place.
        //	  var marker = new google.maps.Marker({
        //		map: map,
        //		//icon: image,
        //		title: place.name,
        //		position: place.geometry.location,
        //	  });
        //
        //	  markers.push(marker);
        //
        //	  bounds.extend(place.geometry.location);
        //	}
        //
        //	map.fitBounds(bounds);
        //	var titik2 = radius(lat, long);
        //	$('#map-shortcut .kantor').MapLoad(titik2);
        //});

        var mapSearch = function() {

            var searchLatitude = null;
            var searchLongitude = null;
            var mySearchLatlng = null;

            var places = searchBox.getPlaces();
            $.each(places, function(i, item){
                lat = item.geometry.location.A;
                long = item.geometry.location.F;
            });
            titikMarker = "search";
            var titik = radius(lat, long);
            MapLoad(titik, lat, long, titikMarker);
            //
            //var marker, i;
            //
            //for (i = 0; i < locations.length; i++) {
            //	marker = new google.maps.Marker({
            //		position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            //		map: map,
            //		icon: 'http://agen.imkepo.com//css/img/map-pointer-green.png',
            //		title: locations[i][3] + ' - ' + locations[i][4]
            //	});
            //
            //	setMarkerListener(marker, locations[i][0], locations[i][5], locations[i][4]);
            //}
            //
            //searchMarker = new google.maps.Marker({
            //			  position: mySearchLatlng,
            //			  map: map,
            //			  icon: 'http://agen.imkepo.com//css/img/pointer-blue.png'
            //			});
            //
            //if ( google.maps.geometry.poly.containsLocation(mySearchLatlng, jakartaPoly ) ) {
            //	$("#error-cntnr-id").css("display", "none");
            //} else {
            //	$("#error-cntnr-id").removeAttr("style");
            //}
            //
            //if (places.length == 0) {
            //	return;
            //}
            //for (var i = 0, marker; marker = markers[i]; i++) {
            //	marker.setMap(null);
            //}
            //
            //// For each place, get the icon, place name, and location.
            //var bounds = new google.maps.LatLngBounds();
            //for (var i = 0, place; place = places[i]; i++) {
            //	var image = {
            //		url: place.icon,
            //		size: new google.maps.Size(71, 71),
            //		origin: new google.maps.Point(0, 0),
            //		anchor: new google.maps.Point(17, 34),
            //		scaledSize: new google.maps.Size(25, 25)
            //	};
            //
            //	bounds.extend(place.geometry.location);
            //}
            //
            //map.fitBounds(bounds);
            //
            //var zoomValue = 22;
            //map.setZoom(zoomValue);
            //
            //for (j = 0; j < 22; j++) {
            //	var outerLoop = false;
            //	for (i = 0; i < locations.length; i++) {
            //		if(map.getBounds().contains( new google.maps.LatLng(locations[i][1],locations[i][2]))){
            //			outerLoop = true;
            //		}
            //	}
            //	if(outerLoop){
            //		break;
            //	}
            //	zoomValue = zoomValue - 1;
            //	map.setZoom(zoomValue);
            //
            //}
        }
		$("#search-btn").click(function(){
			searchSubmit();
		});
		function searchSubmit() {
			var latitude = null;
			var longitude = null;
			var addresscity=document.getElementById("search").value;
			var geocoder = new google.maps.Geocoder();
		 
			geocoder.geocode({ 'address': addresscity }, function (results, status) {
				 
				if (status == google.maps.GeocoderStatus.OK)
				{
					lat = results[0].geometry.location.lat();
					long = results[0].geometry.location.lng();
					var titik = radius(lat, long);
                    titikMarker = "search";
					MapLoad(titik, lat, long, titikMarker);
				 }
			});
		}
    }
	
	function radius(lat, lng){
		var degreeRadius = 5/111.32;
		var kordinat = (lat - degreeRadius) +"#"+ (lng - degreeRadius) +"#"+ (lat + degreeRadius) +"#"+ (lng + degreeRadius);
		return kordinat;
	}
    
	var MapLoad = function(titik, lat, long, titikMarker){
	    clearOverlays();
		//console.log(k+"  "+w);
		$.ajax({
			"url" : "/load-map-agent/",
			"data" : {kordinat : titik},
			"type" : "POST",
			"success" : function(responseData){
				var entries = responseData;
                var listLoc = jQuery.parseJSON(entries);
				var image = '/website/static/images/allianz-map-marker-shadow-105.png';
				var image2 = '/website/static/images/allianz-map-marker-shadow_2.png';
			    var marker = [];
			    var mapOptions = {
					center: new google.maps.LatLng(lat, long),
					zoom: 13
				};
				  
				map = new google.maps.Map(document.getElementById("maparea"),mapOptions);
			    $.each(listLoc, function(i, item){
					if (item.alamat1 != null) {
						alamat1 = item.alamat1;
					}
					else{
						alamat1 = "-";
					}
					if (item.alamat2 != null) {
						alamat2 = item.alamat2;
					}
					else{
						alamat2 = "-";
					}
					if (item.alamat3 != null) {
						alamat3 = item.alamat3;
					}
					else{
						alamat3 = "-";
					}
					
					var tmpAlamat = alamat1+" "+alamat2+" "+alamat3;
					var alamat = tmpAlamat.toLowerCase();
					
					if (item.namaLokasi != null) {
						NamaLokasi = item.namaLokasi;
					}
					else{
						NamaLokasi = "-";
					}
					
					if (alamat != null) {
						Alamat = ucwords(alamat);
					}
					else{
						Alamat = "-";
					}
					
					if (item.kodeAreaTelepon != null) {
						kodeTelepon = item.kodeAreaTelepon;
					}
					else{
						kodeTelepon = "-";
					}
					
					if (item.nomorTelepon != null) {
						nomorTelepon = item.nomorTelepon;
					}
					else{
						nomorTelepon = "-";
					}
					
					if (item.kodeAreaFax != null) {
						kodeFax = item.kodeAreaFax;
					}
					else{
						kodeFax = "-";
					}
					
					if (item.nomorFax != null) {
						nomorFax = item.nomorFax;
					}
					else{
						nomorFax = "-";
					}
                    var jumSubKordinat = item.sub_kordinat.length;
                    if (jumSubKordinat > 1) {
                        if (item.namaLokasi != null) {
                            tmpNamaLokasi = item.namaLokasi.split('-');
                            NamaLokasi = tmpNamaLokasi[1];
                            if (NamaLokasi != undefined) {
                                tmpNamaLokasi2 = NamaLokasi.split(' ');
                                NamaLokasi = "";
                                NamaLokasi = tmpNamaLokasi2[1]+" "+tmpNamaLokasi2[2];
                            }
                        }
                        else{
                            NamaLokasi = "-";
                        }
                        var loop = 0;
                        var satuGedung = "";
                        for(loop;loop < jumSubKordinat;loop++){
                            tmpNamaLokasi2 = item.sub_kordinat[loop].namaLokasi.split('-');
                            NamaLokasi2 = tmpNamaLokasi2[1];
                            //console.log(item.sub_kordinat[loop]);
                            satuGedung = satuGedung+'<a href="/detail-kantor/'+item.sub_kordinat[loop].o_key+"-"+item.sub_kordinat[loop].o_id+'" style="display:block;margin-top:5px;"><strong>'+NamaLokasi2+'</strong></a>';
                        }
                        var data_content = '<div class="content cusContent" style="width:165px;max-height:200px;overflow-y:scroll;">'+
											'<div id="siteNotice"></div>'+
											'<img src="/website/static/images/allianz-eagle-3d.png" height="50" width="50" />'+
											'<h2 id="firstHeading" class="firstHeading">'+NamaLokasi+'</h2>'+
											'<div id="bodyContent">'+
											//'<b>'+item.kodeLokasi+'</b><br />'+
											//'Alamat : '+Alamat+'<br />'+
											'Telp :'+kodeTelepon+" "+nomorTelepon+'<br />'+
											'Fax :'+kodeFax+" "+nomorFax+''+
											satuGedung+
											'</div>'+
										'</div>';
                    }
					
				    else{
                        var data_content = '<div class="content">'+
											'<div id="siteNotice"></div>'+
											'<img src="/website/static/images/allianz-eagle-3d.png" height="50" width="50" />'+
											'<h2 id="firstHeading" class="firstHeading">'+NamaLokasi+'</h2>'+
											'<div id="bodyContent">'+
											//'<b>'+item.kodeLokasi+'</b><br />'+
											//'Alamat : '+Alamat+'<br />'+
											'Telp :'+kodeTelepon+" "+nomorTelepon+'<br />'+
											'Fax :'+kodeFax+" "+nomorFax+''+
											'<a href="/detail-kantor/'+item.o_key+"-"+item.o_id+'" style="display:block;margin-top:5px;"><strong>&gt; Homepage Kantor</strong></a>'+
											'</div>'+
										'</div>';
                    }
                    
					if(item.o_key == "allianz-tower")
				    {
					    var marker = new google.maps.Marker({
								    position: new google.maps.LatLng(item.titikKordinat.latitude, item.titikKordinat.longitude),
								    draggable: false,
								    icon: image,
								    map: map
							    });
				    }
				    else {
					    var marker = new google.maps.Marker({
								    position: new google.maps.LatLng(item.titikKordinat.latitude, item.titikKordinat.longitude),
								    draggable: false,
									icon: image2,
								    map: map
							    });
				    }
				    markers.push(marker);
			    });
			    
			    for(x=0;x < markers.length;x++){
				    var marker = markers[x];
				    google.maps.event.addListener(marker, 'click', function () {
					    //infowindow.setContent(this.html);
					    //infowindow.open(map, this);
						window.open('http://agen.imkepo.com/', '_blank');
						//window.location.href = "http://agen.imkepo.com/";
				    });
			    }
                
                if (titikMarker == "marker") {
                    var marker2 = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, long),
                        draggable: false,
                        icon: imageCurrentMarker,
                        map: map,
                        html: "Lokasi Anda saat ini."
                    });
                    google.maps.event.addListener(marker2, 'click', function () {
                        //infowindow.setContent(this.html);
                        //infowindow.open(map, this);
						window.open('http://agen.imkepo.com/', '_blank');
                    });
                }
                
                if (titikMarker == "search") {
                    var marker2 = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, long),
                        draggable: false,
                        icon: imageSearchMarker,
                        map: map
                    });
                    google.maps.event.addListener(marker2, 'click', function () {
                        
                    });
                }
                
			}
		})
	}
	
	function ucwords(str) {
		return (str + '')
		  .replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1) {
			return $1.toUpperCase();
		  });
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
											    //'Alamat : '+item.alamat+'<br />'+
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
					    //infowindow.setContent(this.html);
					    //infowindow.open(map, this);
						window.open('http://agen.imkepo.com/', '_blank');
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
