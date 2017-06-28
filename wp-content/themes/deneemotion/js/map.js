var geocoder;
var map;

var styles = [
                {
                    "featureType": "administrative.locality",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#2c2e33"
                        },
                        {
                            "saturation": 7
                        },
                        {
                            "lightness": 19
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#ffffff"
                        },
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 100
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#ffffff"
                        },
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 100
                        },
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#bbc0c4"
                        },
                        {
                            "saturation": -93
                        },
                        {
                            "lightness": 31
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "hue": "#bbc0c4"
                        },
                        {
                            "saturation": -93
                        },
                        {
                            "lightness": 31
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "hue": "#bbc0c4"
                        },
                        {
                            "saturation": -93
                        },
                        {
                            "lightness": -2
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#e9ebed"
                        },
                        {
                            "saturation": -90
                        },
                        {
                            "lightness": -8
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#e9ebed"
                        },
                        {
                            "saturation": 10
                        },
                        {
                            "lightness": 69
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#e9ebed"
                        },
                        {
                            "saturation": -78
                        },
                        {
                            "lightness": 67
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                }
            ];

var options = {

  center: new google.maps.LatLng(25.081350, 55.144075),
  streetViewControl: false,
  mapTypeControl: false,
  zoom: 15,
  scrollwheel: false,
  draggable: false,
  mapTypeId: 'Styled'

};

var div = document.getElementById('googleMap');

var map = new google.maps.Map(div, options);

var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
map.mapTypes.set('Styled', styledMapType);

function locationMap() {
geocoder = new google.maps.Geocoder();

var latlng = new google.maps.LatLng(25.081350, 55.144075);

var image = 'http://deneemotionae.iriepixel.co/wp-content/themes/deneemotion/images/pin_small.png';
var marker = new google.maps.Marker({
  map: map,
  position: latlng,
  icon: image
});
var infowindow = new google.maps.InfoWindow({
        content: 'Deneemotion UAE<br />'+
                  'Dubai Marina<br />'+
                  'Dubai<br />'+
                  'United Arab Emirates<br />'
        });
google.maps.event.addListener(marker, 'click', function() {
infowindow.open(map,marker);
});
}

// Resize stuff...
google.maps.event.addDomListener(window, 'resize', function() {
  var center = map.getCenter();
  google.maps.event.trigger(map, 'resize');
  map.setCenter(center);
});

window.onload = locationMap();