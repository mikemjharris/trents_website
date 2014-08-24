
var myMaps = myMaps || {};

myMaps.load = function() {
 var myLatlng = new google.maps.LatLng(51.5215064, -0.10996290000002773)
  var mapOptions = {
    center: myLatlng,
    zoom: 15,
    streetViewControl: true,
    mapTypeControl: false
  }

  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions) ;
  var contentString = '<img alt="picture of trents" id="trentlogo" src="./pics/trents_logo.jpg" >'

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Trents'
  });

  infowindow.open(map,marker);

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
  
}

// // myMaps.addMarker = function (map) {
// //   var position = new google.maps.LatLng(51.522, -0.1095)
// //   var marker = new google.maps.Marker({
// //       position: position,
// //       map: map,
// //       title: "GA London"
// //     });
// //   map.setCenter(position);
// //   }

// myMaps.addMarkerFromGeocode = function(map) {
//   var geocoder = new google.maps.Geocoder();
//   var geocoderResultCallback = function(results, status) {
//     if (status == google.maps.GeocoderStatus.OK) {
//       console.log(results)
//       var marker = new google.maps.Marker({
//         position: results[0].geometry.location,
//         map: map,
//         title: "Trents",
//         inforwindow: "trents"
//       });
//       console.log(results)
//       map.setCenter(results[0].geometry.location)
//     }
//   }
  
  
//     geocoder.geocode({address: "90 Leather Lane, London, EC1N 7TT"}, geocoderResultCallback)


// }

google.maps.event.addDomListener(window, 'load', myMaps.load);