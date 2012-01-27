<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
  function initialize() {
   var latlng = new google.maps.LatLng(52.415264,-4.086813);
    var myOptions = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
   
   var marker = new google.maps.Marker({
      position: latlng, 
      map: map,
      title:"Open in new window"
  });
  
  var infowindow = new google.maps.InfoWindow(
      { content: "Ultracomida <br /> 31 Pier Street, Aberstwyth <br /> Wales, SY23 2LN ",
        size: new google.maps.Size(20,20)
      });
  google.maps.event.addListener(marker, 'click', function() {
     newwindow = window.open('http://localhost/ultracomida/map.html','map', 'width=600,height=600');
     	if (window.focus) {newwindow.focus()}
			return false;
		
   /*infowindow.open(map,marker);*/
  });
  
    infowindow.open(map,marker);
  }

</script>