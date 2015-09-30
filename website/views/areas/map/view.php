<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"async defer></script>
<?php	
                $id = '';
                $jenis = Object_MarketingOfficeJenis::getList(array("orderKey" => array("jenis"), "order" => array("asc")));
				foreach($jenis as $row)
                {
                    if($row->getJenis() == 'Allianz Utama') $id = $row->getId();
                }
//                echo $id;
                $getStatus = '';
                $sessionCalc = new Zend_Session_Namespace(calc_mobilku);
                $sessionMail = new Zend_Session_Namespace(mobilku_mail);
                $isi =  $sessionCalc->status;
                $isi2 =  $sessionMail->status;
                if( $isi != '') $getStatus = $isi;
                else if($isi2 != '') $getStatus = $isi2;
//                $getStatus = 'mobilku';
                if ($getStatus != ''){


?>
					<script type="text/javascript">
						$(document).ready(function(){
							var masukpemasaran = 'ya';

	                             $.ajax({
	                                url      : '/kantor-pemasaran',
	                                type     : 'POST',
	                                crossDomain: true,
	                                data     : {
	                                            'masukpemasaran' : masukpemasaran
	                                            },
	                                complete  : function(sukses){
	                                       // console.log(sukses);
	                                       // alert(masukpemasaran)
	                                       // window.open('/layanan/hubungi-kami/kantor-pemasaran-allianz', '_blank');
	                                       //document.location.href='/agent-locator';
	                                }
	                            });
                         });
					</script>
<?php
				}
?>

<style>
    <?php if($getStatus == '') { ?>
            #peta-marketing{
                    display : block;
            }
            #map-pemasaran{
                    display : none;
            }
    <?php }else{ ?>
            #peta-marketing{
                    display : none;
            }
            #map-pemasaran{
                display : block;
            }
            <?php Zend_Session::namespaceUnset('calc_mobilku'); ?>
            <?php Zend_Session::namespaceUnset('mobilku_mail'); ?>
    <?php } ?>
</style>

<div id="peta-marketing">
<div class="wrapper clearfix">
	<div id="agent-locator">
		<h2><?php echo $this->input("lokasi_pemasaran", array("width" => 255));?></h2>
		<div id="maparea">

		</div>
	</div>
	<?php //echo $this->area("mapArea", array("type" => "map-point")); ?>
	<div id="map-shortcut">
		<h3>Pilih Jenis Kantor:</h3>
			<select class="combo kantor">
				<option value="">Pilih Semua</option>
			<?php	$jenis = Object_MarketingOfficeJenis::getList(array("orderKey" => array("jenis"), "order" => array("asc")));
				foreach($jenis as $row)
				{
			?>
					<option value="<?php echo $row->getId();?>"><?php echo $row->getJenis();?></option>
			<?php 	} ?>
			</select>
			
		<h3>Pilih wilayah:</h3>
			
			<select class="combo wilayah">
			  <option value="-2.6806246,115.8034375,5,">Pilih Semua</option>
			  <!--<option item="jakarta" value="-6.185772, 106.810804, 11">Jakarta</option>
			  <option value="-2.991103, 104.756701, 12">Sumatera Selatan</option>
			  <option value="0.535365, 101.431576, 12">Riau</option>
			  <option value="-0.494187, 117.156903, 12"">Samarinda</option>
			  <option value="-1.277198, 116.840546, 12">Balikpapan</option>
			  <option value="1.482009, 124.835022, 15">Manado</option>
			  <option value="-6.925385, 107.630928, 8">Jawa Barat</option>
			  <option value="-6.9667, 110.4167, 8">Jawa Tengah</option>
			  <option value="-7.755218, 113.218231, 8">Jawa Timur</option>
			  <option value="-8.683207, 115.527269, 9">Bali dan Nusa Tenggara</option>-->
			  <?php	$wilayah = Object_MarketingOfficeWilayah::getList(array("orderKey" => array("namaWilayah"), "order" => array("asc")));
				foreach($wilayah as $row)
				{
			?>
					<option value="<?php echo $row->getLatitude().",".$row->getLongitude().",".$row->getRuangLingkup().",".$row->getId();?>"><?php echo $row->getNamaWilayah();?></option>
			<?php 	} ?>
			</select>
	</div>
</div>
</div>

<div id="map-pemasaran">
<?php	
                $id = '';
                $jenis = Object_MarketingOfficeJenis::getList(array("orderKey" => array("jenis"), "order" => array("asc")));
				foreach($jenis as $row)
                {
                    if($row->getJenis() == 'Allianz Utama') $id = $row->getId();
                }
//                echo $id;
?>
<style>

    #agent-locator2
    {
        position: relative;
        max-width: 100% !important;
        min-width: 100% !important;
        width: 100% !important;
        float: none;
    }

    #agent-locator2 #maparea2
    {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        height: 480px;
    }

    #agent-locator2 .searchbox
    {
        margin-bottom: 20px;
    }

    #agent-locator2 .searchbox > input[type="search"],
    #agent-locator2 .searchbox > input[type="text"]
    {
        width: 78%;
        border: solid 1px #ddd;
        font-size: larger;
        padding: 12px 24px;
        margin: 0 auto;
        line-height: 1.5;
    }

    #agent-locator2 .searchbox > button.search-btn
    {
        width: 20%;
        margin: 0 auto;
        font-size: larger;
        padding: 12px 24px;
        display: inline-block;
        text-transform: uppercase;
        background-color: #003781;
        border: solid 1px #003781;
        border-radius: 0;
        color: white;
        line-height: 1.5;
        float: right;
    }

    /* Respsonsive */

    @media ( max-width: 767px )
    {
        #agent-locator2 .searchbox > input[type="search"],
        #agent-locator2 .searchbox > input[type="text"]
        {
            width: 100%;
            display: block;
        }

        #agent-locator2 .searchbox > button.search-btn
        {
            width: 100%;
            display: block;
            margin-top: 16px;
        }
    }

</style>
<div class="wrapper clearfix">
	<div id="agent-locator2">
        <div class="searchbox">
            <input type="search" name="search" id="search" placeholder="Cari agen terdekat dari lokasi anda">
            <button type="button" name="search-btn" id="search-btn" class="search-btn">
                Search <i class="fa fa-search"></i>
            </button>
            <div class="clearfix"></div>
        </div><!--/ .searchbox -->
<!--		<h2><?php echo $this->input("lokasi_pemasaran", array("width" => 255));?></h2>-->
		<div id="maparea2">

		</div>
	</div>

</div>
</div>


<script type="text/javascript"> 
	var map = new Object();
	var map2 = new Object();
	var markers = [];
	var markers2 = [];
	var infowindow = null;
    var infowindow2 = null;
	var BASEURL = "";
	function clearOverlays() {
	  for (var i = 0; i < markers.length; i++ ) {
		markers[i].setMap(null);
		
	  }
	  markers.length = 0;
	}	
    
    function clearOverlays2() {
	  for (var i = 0; i < markers2.length; i++ ) {
		markers2[i].setMap(null);
		
	  }
	  markers2.length = 0;
	}

    function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-6.2297465, 106.829518),
          zoom: 11
        };
        map = new google.maps.Map(document.getElementById("maparea"),mapOptions);
        map2 = new google.maps.Map(document.getElementById("maparea2"),mapOptions);
		infowindow = new google.maps.InfoWindow({
			content: "holding...",
			maxWidth: 200
		});		
        infowindow2 = new google.maps.InfoWindow({
			content: "holding...",
			maxWidth: 200
		});
		$('#map-shortcut .kantor').MapLoad();
		

		
    }
    
	$.fn.MapLoad = function(){
        var cekID = "<?php echo $getStatus; ?>";
        if( cekID != ""){
            initMap();
        }
        
        
        
	    clearOverlays();
		//console.log(k+"  "+w);
		$.ajax({
			"url" : "/load-map/",
			"data" : {kantor : "", wilayah : ""},
			"type" : "POST",
			"success" : function(responseData){
			    var entries = responseData;
			    var listLoc = jQuery.parseJSON(entries);
                var img = '/website/static/images/blue-with-shadow.png';
			    var image = '/website/static/images/pointer-blue.png';
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
								    icon: img,
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

//    clearOverlays2();
//        $.ajax({
//			"url" : "/load-map2/",
//			"data" : {kantor : "<?php echo $id ?>", wilayah : ""},
//			"type" : "POST",
//			"success" : function(responseData){
//			    var entries = responseData;
//			    var listLoc = jQuery.parseJSON(entries);
//			    var image2 = '/website/static/images/blue-with-shadow.png';
//			    var marker2 = [];
//			    
//			    $.each(listLoc.objects, function(i, item){
//			    
//				    var data_content2 = '<div class="content">'+
//											    '<div id="siteNotice"></div>'+
//											    '<img src="/website/static/images/allianz-eagle-3d.png" height="50" width="50" />'+
//											    '<h2 id="firstHeading" class="firstHeading">'+item.officeName+'</h2>'+
//											    '<div id="bodyContent">'+
//											    '<b>'+item.subName+'</b><br />'+
//											    'Alamat : '+item.alamat+'<br />'+
//											    'Telp :'+item.phone+'<br />'+
//											    'Fax :'+item.fax+''+
//											    '</div>'+
//										    '</div>';
//				    //console.log(item);
//				    try {
//					var jenis2 = item.tipe.jenis;
//				    }
//				    catch(e){
//					var jenis2 = null;
//				    }
//				    if(item.o_key == "allianz-tower")
//				    {
//					    var marker2 = new google.maps.Marker({
//								    position: new google.maps.LatLng(item.latitude, item.longitude),
//								    draggable: false,
//								    icon: image2,
//								    map: map2,
//								    html: data_content2
//							    });
//				    }
//				    else {
//					    var marker2 = new google.maps.Marker({
//								    position: new google.maps.LatLng(item.latitude, item.longitude),
//								    draggable: false,
//								    map: map2,
//								    html: data_content2
//							    });
//				    }
//				    markers2.push(marker2);
//			    });
//			    
//			    for(x=0;x < markers2.length;x++){
//				    var marker2 = markers2[x];
//				    google.maps.event.addListener(marker2, 'click', function () {
//					    infowindow2.setContent(this.html);
//					    infowindow2.open(map2, this);
//				    });
//			    }
//			}
//		});
	function MapLoad3(k,w,s,l1,l2){
        
        var imageCurrentMarker = '/website/static/images/map-pointer-green.png';
        var image2 = '/website/static/images/allianz-map-marker-shadow_2.png';
		clearOverlays();
		//console.log(k+"  "+w);
		$.ajax({
			"url" : "/load-map/",
			"data" : {kantor : k, wilayah : w},
			"type" : "POST",
			"success" : function(responseData){
			    var entries = responseData;
			    var listLoc = jQuery.parseJSON(entries);
			    var image = '/website/static/images/pointer-blue.png';
//                var imageSearchMarker = '/website/static/images/pointer-blue.png';
			    var marker = [];
			    
			    $.each(listLoc.objects, function(i, item){
			    
				    var data_content2 = '<div class="content">'+
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
								    icon: image2,
								    map: map2,
								    html: data_content2
							    });
				    }
				    else {
					    var marker = new google.maps.Marker({
								    position: new google.maps.LatLng(item.latitude, item.longitude),
								    draggable: false,
								    icon: image2,
								    map: map2,
								    html: data_content2
							    });
				    }
				    markers.push(marker);
			    });
                
                for(x=0;x < markers.length;x++){
				    var marker = markers[x];
				    google.maps.event.addListener(marker, 'click', function () {
					    infowindow2.setContent(this.html);
					    infowindow2.open(map2, this);
				    });
			    }
                
                if (s == "found") {
                    var marker2 = new google.maps.Marker({
                        position: new google.maps.LatLng(l1, l2),
                        draggable: false,
                        icon: imageCurrentMarker,
                        map: map2,
                        html: "Lokasi Anda saat ini."
                    });
                    markers2.push(marker2);
                }else if( s == "searched"){
                    var marker2 = new google.maps.Marker({
                        position: new google.maps.LatLng(l1, l2),
                        draggable: false,
                        icon: image,
                        map: map2
                    });
                    markers2.push(marker2);
                }
			    
                for(x=0;x < markers.length;x++){
				    var marker = markers2[x];
				    google.maps.event.addListener(marker, 'click', function () {
//					    infowindow2.setContent(this.html);
//					    infowindow2.open(map2, this);
				    });
			    }
			}
		})

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
			    var image = '/website/static/images/pointer-blue.png';
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
								    icon: img,
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
//                alert(kantor);
				var wilayah = $('#map-shortcut .wilayah').find(":selected").val();
//                alert(wilayah);
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
      
    $("#search-btn").click(function(){
			searchSubmit();
		});
    
    function searchSubmit() {
			var latitude = null;
			var longitude = null;
			var addresscity=document.getElementById("search").value;
			var geocoder = new google.maps.Geocoder();
		    var options = {
              types: ['(cities)'],
              componentRestrictions: {country: 'fr'}
            };
			geocoder.geocode({ 'address': addresscity }, function (results, status) {
				 
				if (status == google.maps.GeocoderStatus.OK)
				{
					lat = results[0].geometry.location.lat();
					long = results[0].geometry.location.lng();
					var titik = radius(lat, long);
                    //titikMarker = "search";
                    var mapOptions = {
					   center: new google.maps.LatLng(lat, long),
					   zoom: 13
				    };
//                    alert(lat);
                    map2 = new google.maps.Map(document.getElementById("maparea2"),mapOptions);
//					MapLoad(titik, lat, long, titikMarker);
                    var st = "searched";    		
                    var kant = "<?php echo $id; ?>";
                    var wil = "-2.6806246,115.8034375,5,";
                    MapLoad3(kant,wil,st,lat,long);
				 }
			});
        

		}

    function radius(lat, lng){
		var degreeRadius = 5/111.32;
		var kordinat = (lat - degreeRadius) +"#"+ (lng - degreeRadius) +"#"+ (lat + degreeRadius) +"#"+ (lng + degreeRadius);
		return kordinat;
	}
    
    //Fungsi Share Current Location
    
    function initMap() {
            var kant = "<?php echo $id; ?>";
            var wil = "-2.6806246,115.8034375,5,";
            MapLoad3(kant,wil);
//            map2 = new google.maps.Map(document.getElementById('maparea2'));
//            var infoWindow3 = new google.maps.InfoWindow({map: map2});

              // Try HTML5 geolocation.
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
              }

            }

//            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
//              infoWindow.setPosition(pos);
//              infoWindow.setContent(browserHasGeolocation ?
//                                    'Error: The Geolocation service failed.' :
//                                    'Error: Your browser doesn\'t support geolocation.');
//    }

    function showPosition(position) {
    var l1 = position.coords.latitude; 
    var l2 = position.coords.longitude;
    
//    alert(l1);
    var mapOptions = {
					   center: new google.maps.LatLng(l1, l2),
					   zoom: 13
    };
//                    alert(lat);
    map2 = new google.maps.Map(document.getElementById("maparea2"),mapOptions);
    
//    var datacont = '<font>Lokasi Anda Sekarang</font>';
//    
//    var marker = new google.maps.Marker({
//				position: new google.maps.LatLng(l1, l2),
//				draggable: false,
//				map: map2,
//				html: data_content2
//    });
//    
//    markers.push(marker);
        
    
    var stats = "found";    
    var kant = "<?php echo $id; ?>";
    var wil = "-2.6806246,115.8034375,5,";
    MapLoad3(kant,wil,stats,l1,l2);
}
    
//Akhir Fungsi Share Current Location
</script>