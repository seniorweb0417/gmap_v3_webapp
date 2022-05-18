var markers = [];

function initialize() {
    var myLatlng = new google.maps.LatLng(40.713956, -74.006653);
  
    var myOptions = {
      zoom: 8,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
    // google.maps.event.addListener(marker, 'dragend', function(event) {
    //   document.getElementById("lat").value = event.latLng.lat();
    //   document.getElementById("long").value = event.latLng.lng();
    // });
  
    google.maps.event.addListener(map, 'click', function(event) {
      var latLng = new google.maps.LatLng(event.latLng.lat(), event.latLng.lng());
    //   document.getElementById("lat").value = event.latLng.lat();
    //   document.getElementById("long").value = event.latLng.lng();

      var marker = new google.maps.Marker({
        draggable: false,
        position: event.latLng,
        map: map,
        title: "Your location"
      });
  
      marker.setPosition(event.latLng);
    });
}

google.maps.event.addDomListener(window, "load", initialize());