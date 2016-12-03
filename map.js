var hydro = {
    lat: 45.539789,
    lng: -73.642431
};
var cologixNorth = {
    lat: 45.599002,
    lng: -73.569594
};

var videotron = {
    lat: 45.501003,
    lng: -73.560329
};

var satellite = {
    lat: 45.541658,
    lng: -73.614472
};
var starbucks = {
    lat: 45.520217,
    lng: -73.595936
};

var destination = hydro;

function initMap() {
    //STYLES MAP
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: hydro,
        gestureHandling: 'cooperative',
        styles: [{
            "elementType": "geometry",
            "stylers": [{
                "color": "#26272d"
            }]
        }, {
            "elementType": "labels",
            "stylers": [{
                "color": "#000000"
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#afafaf"
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "administrative.land_parcel",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#bdbdbd"
            }]
        }, {
            "featureType": "landscape.man_made",
            "stylers": [{
                "color": "#26272d"
            }]
        }, {
            "featureType": "landscape.natural",
            "stylers": [{
                "color": "#26272d"
            }]
        }, {
            "featureType": "poi",
            "stylers": [{
                "color": "#26272d"
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#26272d"
            }]
        }, {
            "featureType": "poi",
            "elementType": "labels.text",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        }, {
            "featureType": "poi.business",
            "stylers": [{
                "color": "#26272d"
            }, {
                "visibility": "off"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#26272d"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }, {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [{
                "color": "#4e4e5c"
            }]
        }, {
            "featureType": "road",
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#4e4e5c"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{
                "color": "#4e4e5c"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#000000"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "road.local",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }, {
            "featureType": "transit",
            "stylers": [{
                "color": "#26272d"
            }, {
                "visibility": "off"
            }]
        }, {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#131315"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }]
    });
    //GEOLOCATION
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
              var currentPosition = new google.maps.Marker({
                position: pos,
                map: map,
                icon: 'images/location_marker.png'
            });

    //SETS MARKER
    var destinationMarker = new google.maps.Marker({
        position: destination,
        map: map,
        icon: 'images/destination_marker.png'
    });

    // var testMarker = new google.maps.Marker({
    //     position: hydro,
    //     map: map,
    //     icon: 'images/destination_marker.png'
    // });

    //FITS MAP TO SCREEN
    var markers = [currentPosition, destinationMarker];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0; i < markers.length; i++) {
        bounds.extend(markers[i].getPosition());
    }
    map.fitBounds(bounds);

    //CIRCLE
    var testCircle = new google.maps.Circle({
        strokeColor: '#A79CB7',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#A79CB7",
        fillOpacity: 0.35,
        map: map,
        center: destination,
        radius: 100
    });

    var bounds = testCircle.getBounds();
    testCircle.bindTo('cologixNorth', destinationMarker, 'cologixNorth');
    console.log(bounds.contains(satellite));

    //LOGO CLICK EVENT
    var logo = document.getElementById('logo');
    var locations = [hydro, cologixNorth, videotron, satellite, starbucks];
    var locationNames = ['hydro', 'cologix', 'videotron', 'south', 'starbucks'];

    var index = 0;
    google.maps.event.addDomListener(logo, 'click', function() {
        if (index < locations.length) {
            // if (bounds.contains(cologixSouth)){
            destinationMarker.setPosition(locations[index]);
            // } else {
            //   alert("not in radius!");
            // }
        } else {
            destinationMarker.setPosition(locations[4]);
        }
        index++;
    });

    for (var i = 0; i < locations.length; i++) {
        showMessage(destinationMarker, locationNames[i])
    }

    });
    }

    //sets Hydro to visible and all other popups to invisible******************************************************************************************
    $('.logo').unbind('click').bind('click',function () {
            
        $(".hydro").css("display", "inline");
        $(".data").css("display", "none");
        $(".isp").css("display", "none");
        $(".sate").css("display", "none");
        $(".last").css("display", "none");
        
    });
}

function showMessage(marker, locationName) {
    var name = new google.maps.InfoWindow({
        content: locationName
    });

    marker.addListener('click', function() {
        name.open(marker.get('map'), marker);
    })
}
