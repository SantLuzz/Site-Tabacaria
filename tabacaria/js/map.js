window.onload = function(){
	var map;

	function initialize(){
		var mapProp = {
			center: new google.maps.LatLng(-19.119475, -51.731030),
			scrollwheel:false,
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		}

		map = new google.maps.Map(document.getElementById("map"),mapProp);
	}

	function addMarker(lat,long,icon,content,click){
		var latLng = {'lat':lat,'lng':long};

		var marker = new google.maps.Marker({
			position:latLng,
			map:map,
			icon:icon
		});

		var infoWindow = new google.maps.InfoWindow({
			content:content,
			maxWidth:200,
			pixelOffset: new google.maps.Size(0,20)
		});

		if(click == true){
			google.maps.event.addListener(marker,'click',function(){
				infoWindow.open(map,marker);
			});
		}else{
			infoWindow.open(map,marker);
		}
		
	}

	setTimeout(function(){
		initialize();
		var conteudo = '<p style="text-align: center;color:black;font-size:13px;padding:10px 0; font-weight:bold;">Tabacaria Império Hookah Lounge</p>'
	addMarker(-19.119475, -51.731030,'',conteudo,true);
	},2000)
	

	

}
