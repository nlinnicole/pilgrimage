var hydro = {
    lat: 45.491629,
    lng: -73.570761
};
var data = {
    lat: 45.497700,
    lng: -73.571034
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
    lat: 45.535858,
    lng: -73.616522
};

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
                icon: 'images/current_location_small.png'
            });

            //LISTS OF LOCATIONS
            var logo = document.getElementById('logo');
            var locations = [hydro, data, videotron, satellite, starbucks];
            var locationPics = ['images/tower_small.png', 'images/data_small.png', 'images/isp_small.png', 'images/satelite_small.png', 'images/wifi_small.png'];
            var popUps = ['hydro', 'data', 'isp', 'sate', 'last'];
            var continueButtons = ['cont01', 'cont02', 'cont03', 'cont04', 'last'];

            //DEMO
            var demoIndex = 0;
            google.maps.event.addDomListener(demo, 'click', function() {
                if (demoIndex < locations.length) {
                    currentPosition.setPosition(locations[demoIndex]);
                }
                demoIndex++;
            });

            //SETS MARKER
            var destinationMarker = new google.maps.Marker({
                position: locations[0],
                map: map,
                icon: locationPics[0]
            });

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
                center: locations[0],
                radius: 100
            });

            //BEGINNING POPUP
            var start = document.getElementById('start');
            document.getElementById("begin").style.display = "inline";
            google.maps.event.addDomListener(start, 'click', function() {
                document.getElementById("begin").style.display = "none";
            });

            //LOGO CLICK EVENT
            var index = 0;
            var popIndex = 0;
            var continueButton = document.getElementById(continueButtons[index]);

            google.maps.event.addDomListener(logo, 'click', function() {
                if (testCircle.getBounds().contains(currentPosition.getPosition())) {
                    document.getElementById(popUps[popIndex]).style.display = "inline";
                    index++;

                    google.maps.event.addDomListener(continueButton, 'click', function() {
                        document.getElementById(popUps[popIndex]).style.display = "none";
                        continueButton = document.getElementById(continueButtons[index]);
                        destinationMarker.setPosition(locations[index]);
                        destinationMarker.setIcon(locationPics[index]);
                        testCircle.setCenter(locations[index]);
                        var markers = [currentPosition, destinationMarker];
                        var bounds = new google.maps.LatLngBounds();

                        for (var i = 0; i < markers.length; i++) {
                            bounds.extend(markers[i].getPosition());
                        }
                        map.fitBounds(bounds);
                        popIndex++;

                        var finishButton = document.getElementById('finishButton');
                        google.maps.event.addDomListener(finishButton, 'click', function(){
                          document.getElementById('over').style.display = "inline";
                          console.log("last");
                        });
                    });
                } else {
                    document.getElementById('radius').style.display = "inline";
                    google.maps.event.addDomListener(radiusContinue, 'click', function() {
                        document.getElementById('radius').style.display = "none";
                    });
                }
            });
        });
    }
};
// $('.logo').unbind('click').bind('click', function() {
//     $(".hydro").css("display", "none");
//     $(".data").css("display", "none");
//     $(".isp").css("display", "inline");
//     $(".sate").css("display", "none");
//     $(".last").css("display", "none");
// });
