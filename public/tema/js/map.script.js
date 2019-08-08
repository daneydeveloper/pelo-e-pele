//  GOOGLE MAPS PADRAO ========================== //
if(jQuery('#gmap_canvas7').length){
	function init_map7() {
		var myOptions = {
			zoom: 18,
			center: new google.maps.LatLng(-3.7187291, -38.5529223),
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		};
		// ADICINA O LATITUDE E LONGITUDE DO MARKER NO MAPA
		map7 = new google.maps.Map(document.getElementById('gmap_canvas7'), myOptions);
		marker7 = new google.maps.Marker({
			map: map7,
			position: new google.maps.LatLng(-3.7187291, -38.5529223),
			optimized: false,
			// icon: new google.maps.MarkerImage('<?=base_url()?>/public/tema/images/marker.png')
		});

		marker7.setDraggable(true);		
		// INFORMACAO AO CLICAR NO MAPA

		infowindow7 = new google.maps.InfoWindow({
			content: '<strong>Pelo & Pele</strong><br>Av. Francisco Sá, 3190 - Galpão Q - Fortaleza/CE<br>'
		});

		google.maps.event.addListener(marker7, 'click', function() {
			infowindow7.open(map7, marker7);
		});
	}
	google.maps.event.addDomListener(window, 'load', init_map7);
}			