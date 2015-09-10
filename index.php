
<!DOCTYPE html>
<html lang="hr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dario Munđar" />
    <title>Prirodne ljepote</title>
    <!-- stilovi -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
   	<link href="css/materialize.css" rel="stylesheet" />
    <link href="css/stil.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" /> 
    <link rel="stylesheet" type="text/css" href="css/set2.css" />
    <link rel="stylesheet" type="text/css" href="css/component1.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" />
    <!-- javascript -->	
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://pupunzi.com/mb.components/mb.YTPlayer/demo/inc/jquery.mb.YTPlayer.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
  
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.lazyload.min.js"></script>
    <script src="js/script.js"></script>
  	<script src="js/materialize.min.js"></script>
  	<script src="js/bootstrap.js"></script>
  	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  	 <script type="text/javascript">
            
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
			    var latlng2 = new google.maps.LatLng(37.741249,-25.675594);
			    var latlng3 = new google.maps.LatLng(45.542635,18.926626);
			    var latlng4 = new google.maps.LatLng(-25.352594,131.034361);
			    var latlng5 = new google.maps.LatLng(25.075889,111.655839);
			    var latlng6 = new google.maps.LatLng(5.939674,-62.560959);
			    var latlng7 = new google.maps.LatLng(1.977247,73.536103);
			    var latlng8 = new google.maps.LatLng(36.086288,-112.121486);
			    var latlng9 = new google.maps.LatLng(37.918609,29.110307);
			    var latlng10 = new google.maps.LatLng(12.463420,53.823738);
			    var latlng11 = new google.maps.LatLng(-20.163764,-67.570854);
			    var latlng12 = new google.maps.LatLng(20.894509,107.001659);
				    var myOptions2 =
				    {
				        zoom: 4,
				        center: latlng2,
				                        styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };

				    var myOptions3 =
				    {
				        zoom: 5,
				        center: latlng3,
				                        styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };

				    var myOptions4 =
				    {
				        zoom: 5,
				        center: latlng4,
				                         styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };

				    var myOptions5 =
				    {
				        zoom: 5,
				        center: latlng5,
				                         styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };

				    var myOptions6 =
				    {
				        zoom: 5,
				        center: latlng6,
				                         styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };

				    var myOptions7 =
				    {
				        zoom: 5,
				        center: latlng7,
				                         styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };
				     var myOptions8 =
				    {
				        zoom: 5,
				        center: latlng8,
				                         styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };
				     var myOptions9 =
				    {
				        zoom: 5,
				        center: latlng9,
				                         styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };
				     var myOptions10 =
				    {
				        zoom: 5,
				        center: latlng10,
				                         styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };
				     var myOptions11 =
				    {
				        zoom: 5,
				        center: latlng11,
				                         styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };
				     var myOptions12 =
				    {
				        zoom: 5,
				        center: latlng12,
				                        styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]
				    };

				                var mapOptions = {
				                    // How zoomed in you want the map to start at (always required)
				                    zoom: 5,

				                    // The latitude and longitude to center the map (always required)
				                    center: new google.maps.LatLng(44.865397, 15.582012), // New York

				                    // How you would like to style the map. 
				                    // This is where you would paste any style found on Snazzy Maps.
				                    styles: [
				    {
				        "featureType": "administrative",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#444444"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "road",
				        "elementType": "all",
				        "stylers": [
				            {
				                "saturation": -100
				            },
				            {
				                "lightness": 45
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "simplified"
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "all",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "all",
				        "stylers": [
				            {
				                "color": "#46bcec"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    }
				]};

                var mapElement = document.getElementById('map');

                var map = new google.maps.Map(mapElement, mapOptions);

		  	  	var map2 = new google.maps.Map(document.getElementById("map_canvas_2"), myOptions2);

		    	var map3 = new google.maps.Map(document.getElementById("map_canvas_3"), myOptions3);

		    	var map4 = new google.maps.Map(document.getElementById("map_canvas_4"), myOptions4);

		    	var map5 = new google.maps.Map(document.getElementById("map_canvas_5"), myOptions5);

		    	var map6 = new google.maps.Map(document.getElementById("map_canvas_6"), myOptions6);

		    	var map7 = new google.maps.Map(document.getElementById("map_canvas_7"), myOptions7);

				var map8 = new google.maps.Map(document.getElementById("map_canvas_8"), myOptions8);

		    	var map9 = new google.maps.Map(document.getElementById("map_canvas_9"), myOptions9);

		    	var map10 = new google.maps.Map(document.getElementById("map_canvas_10"), myOptions10);

		    	var map11 = new google.maps.Map(document.getElementById("map_canvas_11"), myOptions11);

		    	var map12 = new google.maps.Map(document.getElementById("map_canvas_12"), myOptions12);
               
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(44.865397, 15.582012),
                    map: map,
                    title: 'Plitvička jezera'
                });
			    var myMarker2 = new google.maps.Marker(
			    {
			        position: latlng2,
			        map: map2,
			        title:"Azori"
			    });
			                  var myMarker3 = new google.maps.Marker(
			    {
			        position: latlng3,
			        map: map3,
			        title:"Dunav"
			    });

			    var myMarker4 = new google.maps.Marker(
			    {
			        position: latlng4,
			        map: map4,
			        title:"Uluru"
			    });

			    var myMarker5 = new google.maps.Marker(
			    {
			        position: latlng5,
			        map: map5,
			        title:"Tianzi planine"
			    });

			    var myMarker6 = new google.maps.Marker(
			    {
			        position: latlng6,
			        map: map6,
			        title:"Anđelov vodopad"
			    });

			    var myMarker7 = new google.maps.Marker(
			    {
			        position: latlng7,
			        map: map7,
			        title:"Maldivi"
			    });
			   	var myMarker8 = new google.maps.Marker(
			    {
			        position: latlng8,
			        map: map8,
			        title:"Grand Canyon"
			    });
			    var myMarker9 = new google.maps.Marker(
			    {
			        position: latlng9,
			        map: map9,
			        title:"Pamukkale"
			    });

			    var myMarker10 = new google.maps.Marker(
			    {
			        position: latlng10,
			        map: map10,
			        title:"Sokotra"
			    });

			    var myMarker11 = new google.maps.Marker(
			    {
			        position: latlng11,
			        map: map11,
			        title:"Salar De Yuyni"
			    });

			    var myMarker12 = new google.maps.Marker(
			    {
			        position: latlng12,
			        map: map12,
			        title:"Zaljev Ha Long"
			    });
            }
        </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- navigacija -->
<header class="header-fixed">
	<a href="#naslovna"><img  class="logo_slika" src="logo.png" width="40" height="40" /></a>
	<div class="header-limiter">

		<h1><a href="#naslovna">Prirodne ljepote</a></h1>

		<nav>
			<a href="#priroda">Priroda</a>
			<a href="#galerija">Galerija</a>
			<a href="#parkovi">Parkovi</a>
			<a href="#videos">Video priče</a>
			<a href="#zanimljivosti">Zanimljivo</a>   
		</nav>

	</div>

</header>

<div class="header-fixed-placeholder"></div>

    <!-- polazna stranica, naslovna slika -->
	    <section class="naslovna" id="naslovna">
	    <div class="container">
		    <div class="row">
		    	<div class="col-md-4">
		     		<br/>
		       </div>
		       <div class="col-md-4 ">
		      	 	<div class="tekst wow swing" data-wow-duration="3s">
		      	 		<h1> Priroda inspirira </h1> 
		      	 	</div>
		       </div>
		       <div class="col-md-4">
		        	<br/>
		       </div>
		    </div>
		    </div>
	     </section>

<!-- citat -->     
   		<section class="opis" id="priroda">
   			<div class="container">
		    <div class="row">
		    	<h1 class="center"> Priroda </h1>
		     <div class="col-md-1">
		     <br/>
		    </div>
		    <div class="col-md-6 ">
		   
	
			<blockquote>
				<p>
					Pogledaj dublje u prirodu i sve ćeš bolje razumjeti.
				</p>
			</blockquote>
			<div class="mb-attribution">
				<p class="mb-author">Albert Einstein</p>	
			</div>
			<hr/>
			<blockquote>
				<p>
					Priroda je jedina knjiga koja na svim listovima nudi mnogo sadržaja.
				</p>
			</blockquote>
			<div class="mb-attribution">
				<p class="mb-author"> Goethe</p>	
			</div>
			<hr/>
			<blockquote>
				<p>
					Čuvajmo Zemlju i prirodu na njoj, jer ih nismo naslijedili od svojih djedova i očeva, nego smo ih posudili od svojih potomaka.
				</p>
			</blockquote>
			<div class="mb-attribution">
				<p class="mb-author">Poglavica Bik Koji Sjedi</p>	
			</div>
			
		    </div>
			    <div class="col-md-5">
			        <br/>
			        <img src="img/download10.jpg" width="450" height="300" />
			    </div>
		    </div>
		    </div>
    	</section>

<!-- sekcija s video pričama -->
		<section class="content-section video-section">
		  <div class="pattern-overlay">
		  <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=mcixldqDIEQ',containment:'.video-section',autoPlay:true, mute:false, startAt:0, opacity:1,mute: true,showControls:false, optimizeDisplay:true}">bg</a>
		    <div class="container">
		      <div class="row">
		       <div class="col-md-4">
		       </div>
		        <div class="col-md-4">
		        <div class="tekst2 center">
			        <h1 class="wow fadeIn" data-wow-duration="3s">Priroda se budi</h1>  
			    </div>
			   </div>
			    <div class="col-md-4">
			    </div>
		      </div>
		    </div>
		  </div>
		</section>

<!-- galerija slika prirodnih ljepota -->
	  	<section class="galerija" id="galerija">
	  		<div class="container">
	    		<div class="row">
	    			<h1 class="center"> Galerija </h1>
	    			<hr/>
				    <div class="row wow fadeInUp" data-wow-duration="2s" >
					    <div class="col-md-3">
							<a class="gallery-item" href="img/download/slika1.jpg">
								<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"  data-original="img/download/slika1.jpg"  height="200" width="250" alt="slika1" />
							</a>
					    </div>
					    <div class="col-md-3">
						    <a class="gallery-item" href="img/download/slika2.jpg">	
						    	<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika2.jpg"  height="200" width="250" alt="slika2"/>
						    </a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika3.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika3.jpg"  height="200" width="250" alt="slika3"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika4.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika4.jpg"  height="200" width="250" alt="slika4"/>
					    	</a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s">
					    <div class="col-md-3">
						    <a class="gallery-item" href="img/download/slika5.jpg">
						    	<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"  data-original="img/download/slika5.jpg"  height="200" width="250" alt="slika5"/>
						    </a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika6.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"  data-original="img/download/slika6.jpg"  height="200" width="250" alt="slika6"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika7.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika7.jpg"  height="200" width="250" alt="slika7"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
						    <a class="gallery-item" href="img/download/slika8.jpg">
						    	<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika8.jpg"  height="200" width="250" alt="slika8"/>
						    </a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
					    <div class="col-md-3">
						    <a class="gallery-item" href="img/download/slika9.jpg">
						    	<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika9.jpg" height="200" width="250" alt="slika9"/>
						    </a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika10.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika10.jpg"  height="200" width="250" alt="slika10"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
						    <a class="gallery-item" href="img/download/slika11.jpg">
						    	<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika11.jpg"  height="200" width="250" alt="slika11"/>
						    </a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika12.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika12.jpg"  height="200" width="250" alt="slika12"/>
					    	</a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika13.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika13.jpg"  height="200" width="250" alt="slika13"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika14.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika14.jpg"  height="200" width="250" alt="slika14"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika15.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika15.jpg"  height="200" width="250" alt="slika15"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika16.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika16.jpg"  height="200" width="250" alt="slika16"/>
					    	</a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika17.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika17.jpg"  height="200" width="250" alt="slika17"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika18.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika18.jpg"  height="200" width="250" alt="slika18"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika19.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika19.jpg"  height="200" width="250" alt="slika19"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika20.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika20.jpg"  height="200" width="250" alt="slika20"/>
					    	</a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika21.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika21.jpg"  height="200" width="250" alt="slika21"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika22.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika22.jpg"  height="200" width="250" alt="slika22"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika23.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika23.jpg" height="200" width="250" alt="slika23"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika24.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika24.jpg"  height="200" width="250" alt="slika24"/>
					    	</a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika25.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika25.jpg"  height="200" width="250" alt="slika25"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika26.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"  data-original="img/download/slika26.jpg"  height="200" width="250" alt="slika26"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika27.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika27.jpg"  height="200" width="250" alt="slika27"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika28.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika28.jpg"  height="200" width="250" alt="slika28"/>
					    	</a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika29.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika29.jpg"  height="200" width="250" alt="slika29"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika30.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika30.jpg"  height="200" width="250" alt="slika30"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika31.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika31.jpg"  height="200" width="250" alt="slika31"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika32.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"  data-original="img/download/slika32.jpg" height="200" width="250" alt="slika32"/>
					    	</a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika33.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"  data-original="img/download/slika33.jpg" height="200" width="250" alt="slika33"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika34.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika34.jpg"  height="200" width="250" alt="slika34"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika35.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"  data-original="img/download/slika35.jpg"  height="200" width="250" alt="slika35"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika36.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika36.jpg"  height="200" width="250" alt="slika36"/>
					    	</a>
					    </div>
				    </div>
				    <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika37.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika37.jpg"  height="200" width="250" alt="slika37"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika38.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika38.jpg"  height="200" width="250" alt="slika38"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika39.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika39.jpg"  height="200" width="250" alt="slika39"/>
					    	</a>
					    </div>
					    <div class="col-md-3">
					    	<a class="gallery-item" href="img/download/slika40.jpg">
					    		<img class="slike lazy" src="http://www.qwertledesigns.com/wp-content/uploads/2014/04/placeholder3.png"   data-original="img/download/slika40.jpg"  height="200" width="250" alt="slika40"/>
					    	</a>
					    </div>
				    </div>
	       		</div>
	       </div>
		</section>
   <!-- dodavanje nove slike -->
		<section class="dodaj">
			<div class="container">
				<div class="row">
				<div id="triangle-down">
				</div>
					<h1 class="center"> Dodaj sliku </h1>
				<div class="col-md-4">
				</div>
					<div class="col-md-4">
						<div class="skupa zanimljivo">
							<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
								<div id="image_preview">
									<img id="previewing" src="img/polaroids.png" />
								</div>
								<hr/>
								<div id="selectImage">
									<label>Odaberite sliku...</label><br/>
									<input type="file" name="file" id="file" required />
								</div>
								<hr/>
								<div>
								  	<button class="btn waves-effect waves-light" type="submit" name="action">Pošalji
							  		</button>
								</div>
							</form>
						</div>
						<h4 id='loading' >učitavanje..</h4>
						<div id="message"></div>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</div>
		</section>
<!--nacionalni parkovi, slike s opisima -->
		<section class="parkovi" id="parkovi">
			<div class="container">
				 <div class="row">
				 <div id="triangle-down2">
				</div>
				 	<h1 class="center"> Nacionalni parkovi u Hrvatskoj </h1>
				 	<hr/>
					<ol>
				 		<div class="row">
			     			<div class="col-md-6">
			      				<li><div>Brijuni <br/><a class="gallery-item2" href="img/parkovi/brijuni.jpg">
			       				<img src="img/parkovi/brijuni.jpg" width="500" height="350" /></a></div></li>
			     			</div>
			    			<div class="col-md-6">
			     				<br/>
			      				<br/>
			     				<p>
							     	Brijuni su otočje i nacionalni park u Jadranskom moru, na hrvatskom dijelu Jadrana.
									Nalaze se koji kilometar zapadno od istarske obale, nasuprot mjesta Fažana, te se sastoje od 14 otoka i otočića ukupne površine 33,9 km kvadratna (površina otoka i akvatorija; na brijunski akvatorij otpada 80% ukupne površine).
									Dva najveća otoka su Veliki Brijun 7 km2 i Mali Brijun 1,7 km2, a manji su Sveti Marko, Gaz, Okrugljak, Šupin, Šupinić, Galija, Grunj, Vanga, Madona, Vrsar, Kozada i Sveti Jerolim.
			 					</p>
			 					<p>
			 						Brijuni imaju bogatu povijest: prvi, zasada nama poznati tragovi ljudskog djelovanja na Brijunima, sežu u treće tisućljeće prije Krista, kada su na Brijunima živjeli etnički nepoznati stanovnici koji su se bavili ratarstvom, stočarstvom, lovom i ribolovom, a oružje i oruđe izrađivali su od kamena, kostiju i pruća... Za vrijeme velike Egejske seobe naroda u prvom tisućljeću prije Krista na Brijune dolazi ilirsko pleme Histri, po kojima je kasnije Istra i dobila ime. Nakon kojih su došli Rimljani, a od VI. do VIII. st. otočjem su (kao i Istrom) vladali Bizantinci. Na Brijunima postoje mnogi kulturno-povijesni ostaci od kojih su najpoznatiji i najsačuvaniji: rimski ladanjski dvorac iz I.-II. st. s termama, Venerinim hramom, zatim Bizantski kastrum, te bazilika Sv. Marije iz V.-VI. stoljeća, crkva Sv. Germana iz XV. stoljeća.
			 					</p>
			 					<div>
			 						<h4> Izvor: <a target="new" href="https://hr.wikipedia.org/wiki/Brijuni">NP Brijuni </a></h4>
			 					 </div>
			     			</div>
			       		</div>
			       		<div class="row">
			         		<div class="col-md-6">
			      				<li><div>Kornati <br/><a class="gallery-item2" href="img/parkovi/kornati.jpg"> 
			      				<img src="img/parkovi/kornati.jpg" width="500" height="350" /></a></div></li>
			     			</div>
			     			<div class="col-md-6">
			     				<br/>
			      				<br/>
			     				<p> 
			     					Nacionalni park Kornati čini veći dio grupe otoka Kornati u hrvatskom dijelu Jadrana u srednjoj Dalmaciji, zapadno od Šibenika, u Šibensko-kninskoj županiji.
			     				</p>
			     				<p>
			     					Nacionalnim parkom je proglašen 1980. i tada je stavljen pod zaštitu. Ukupna površina parka je oko 220 km² a sastoji se od 89 otoka, otočića i hridi. Od površine parka, samo oko 1/4 je kopno, dok je preostali dio morski ekosustav.
									Obiluje prirodnim i kulturnim posebnostima. Okomite litice "krune" kornatskih otoka okrenute prema otvorenom moru najpopularniji su fenomen ovoga parka. One su i staništa rijetkih vrsta.
									Svijet kornatskoga podmorja otkriva pak neke druge zadivljujuće priče. A dobro je znati i to da je kopneni dio Parka u privatnom vlasništvu.
			     				</p>

				 				<div>
				 					<h4> Izvor: <a target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Kornati">NP Kornati </a></h4>
				 				</div>
			    			</div>
			       		</div>
			       	 	<div class="row">
			       	  		<div class="col-md-6">
			      				<li><div>Krka<br/><a class="gallery-item2" href="img/parkovi/krka.jpg">
			       				<img src="img/parkovi/krka.jpg" width="500" height="350" /></a></div></li>
			    			</div>
			     			<div class="col-md-6">
			     				<br/>
			      				<br/>
			     				<p>
			     					Krka je sedmi nacionalni park u Hrvatskoj poznat po velikom broju jezera i slapova. Dobio je ime po rijeci Krki koja je dio parka. Nacionalni park je lociran u središnjoj Dalmaciji nizvodno od Miljevaca, a samo par kilometara sjeveroistočno od grada Šibenika. Obuhvaća područje uz rijeku Krku koja izvire u podnožju planine Dinare kod Knina, teče kroz kanjon dug 75 km, protječe kroz Prokljansko jezero, te utječe u Šibenski zaljev. Prostire na 142 kvadratna kilometra, od kojih 25,6 kvadratnih kilometara čini vodena površina. Rijeka Krka danas ima 7 sedrenih slapova i njezine ljepote predstavljaju prirodni krški fenomen, koji se preporučuje posjetiti u proljeće i ljeti jer je tada u punom sjaju, a možete se i osvježiti u čistoj vodi.
			     				</p>
			     				<p>
			     					Krka je postao nacionalni park 24. siječnja 1985. godine i sedmi je po redu nacionalni park u Hrvatskoj. Poznat je po velikom broju jezera i slapova.
									Hidroelektrana Jaruga ispod slapa Skradinskog buka je druga najstarija hidroelektrana u svijetu i prva u Europi. Sagrađena je 28. kolovoza 1895., samo tri dana nakon prve svjetske hidroelektrane na slapovima Niagare.
			     				</p>
						     	<div>
						     		<h4> Izvor: <a target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Krka">NP Krka </a></h4>
						     	</div>
						    </div>
			       		</div>
			       		<div class="row">
			        		<div class="col-md-6">
								<li><div>Mljet<br/><a class="gallery-item2" href="img/parkovi/mljet.jpeg">
								 <img src="img/parkovi/mljet.jpeg" width="500" height="350" /></a></div></li>
			     			</div>
			     			<div class="col-md-6">
			     				<br/>
			      				<br/>
			     				<p>
			     					Mljet je nacionalni park u Hrvatskoj, a obuhvaća sjeverozapadni dio otoka Mljeta, koji se proteže područjem od 5.375 hektara zaštićenog kopna i okolnog mora. To je područje 11. studenoga 1960. godine proglašeno nacionalnim parkom i predstavlja prvi institucionalizirani pokušaj zaštite izvornog ekosustava na Jadranu.
			     				</p>
			     				<p>
			     					Nacionalni park Mljet obuhvaća zapadnu trećinu otoka Mljeta, od područja Crna klada do najzapadnije točke otoka, rta Goli. U sastav nacionalnog parka ulaze naselja Polače (glavna turistička i putnička luka), Goveđari (u čiji sastav ulaze naselja Babine Kuće (najstarije naselje na Jezerima), Soline (malo mjesto na ulazu u Veliko jezero) i Pristanište (mjesto s poštom i upravnom nacionalnog parka)) te Pomena (bivše ribarsko naselje stanovnika Goveđara, a danas mjesto s jedinim hotelom na otoku).
			     				</p>
							     <div>
							     	<h4> Izvor: <a target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Mljet">NP Mljet </a></h4>
							      </div>
							</div>
			      		</div>
			       		<div class="row">
			         		<div class="col-md-6">
								<li><div>Paklenica <br/> <a class="gallery-item2" href="img/parkovi/paklenica.jpeg">
								<img src="img/parkovi/paklenica.jpeg" width="500" height="350" /></a></div></li>
			     			</div>
			    			<div class="col-md-6">
			     				<br/>
			      				<br/>
			     				<p>
			     					Nacionalni park Paklenica je po proglašenju drugi nacionalni park u Hrvatskoj, proglašen još 19. listopada 1949. godine, tek nekoliko mjeseci nakon NP Plitvička jezera. Svakako treba napomenuti da je Paklenica prvi put bila proglašena Nacionalnim parkom još 1929. godine, ali zakonom kojeg je trebalo revidirati svake godine, a što se nije činilo.
			     				</p>
			     				<p>
			     					Temeljni fenomeni NP Paklenica su šume i geomorfološke osobitosti parka. U gotovo nešumskom južnom dijelu Velebita u Paklenici se javlja izrazito bogatstvo šumskih zajednica, a posebno mjesto zauzimaju šume crnog bora po čijoj je smoli (Paklini) koja se je iz njih u prošlosti vadila Paklenica i dobila ime, te bukve i bora krivulja. Stanište je endemske biljčice hrvatskog naziva pljeskarica (Arenaria orbicularis) i drugih biljnih i životinjskih rariteta, prepun krških oblika.
			     				</p>
			     				<p>
							     	Od geomorfoloških osobina najzanimljiviji, a ujedno i najimpresivniji su kanjoni Male i Velike Paklenice koji se usjecaju duboko u utrobu Velebita. Paklenicu godišnje posjeti preko 100.000 posjetitelja, a najvjerniji posjetitelji su penjači koje se od proljeće do jeseni može vidjeti na stjenama Paklenice, posebice na najvećoj hrvatskoj stjeni Anića kuku (712 m).
									NP Paklenica zauzima površinu od 96 km2. Najviši vrhovi su Vaganski vrh (1757 m) i Sveto brdo (1753 m).
									U nacionalnom parku postoji i nekoliko špilja i jama od kojih su najpoznatije i najveće špilja Manita peć iznad kanjona Velike Paklenice i Jama Vodarica između kanjona Velike i Male Paklenice.
			     				</p>
						     	<div>
						     		<h4> Izvor: <a target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Paklenica">NP Paklenica </a></h4>
						     	</div>
						    </div>
						</div>
			       		<div class="row">
			         		<div class="col-md-6">
								<li><div>Plitvička jezera<br/><a class="gallery-item2" href="img/parkovi/plitvice.jpg">
								 <img src="img/parkovi/plitvice.jpg" width="500" height="350" /></a></div></li>
			     			</div>
				     		<div class="col-md-6">
				     			<br/>
				     			<br/>
				     			<p>
				     				Nacionalni park Plitvička jezera osobita je geološka i hidrogeološka krška pojava. Kompleks Plitvičkih jezera proglašen je nacionalnim parkom 8. travnja 1949. godine. To je najveći, najstariji i najposjećeniji hrvatski nacionalni park. Predstavlja šumovit planinski kraj u kojem je nanizano 16 manjih i većih jezera kristalne modrozelene boje. Jezera dobivaju vodu od brojnih rječica i potoka, a međusobno su spojena kaskadama i slapovima. Sedrene barijere, koje su nastale u razdoblju od desetak tisuća godina, jedna su od temeljnih osobitosti Parka. Poseban zemljopisni položaj i specifične klimatske značajke pridonijeli su nastanku mnogih prirodnih fenomena i bogatoj biološkoj raznolikosti. Sedreni sedimenti oblikovani su od pleistocena do danas u vrtačama i depresijama između okolnih planina. Gornja jezera na jugu pretežno se sastoje od dolomita, a Donja jezera na sjeveru od vapnenačkih stijena.
				     			</p>
				     			<div>
				     				<h4> Izvor: <a target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Plitvi%C4%8Dka_jezera">NP Plitvička jezera </a></h4>
				     			</div>
				     		</div>
			       		</div>
			       		<div class="row">
			        		<div class="col-md-6">
								 <li><div>Risnjak<br/><a class="gallery-item2" href="img/parkovi/risnjak.jpg">
								  <img src="img/parkovi/risnjak.jpg" width="500" height="350" /></a></div></li>
			     			</div>
			     			<div class="col-md-6">
			     				<br/>
			      				<br/>
			     				<p>
							     	Nacionalni park "Risnjak", smješten u Gorskom kotaru (Hrvatska), osnovan je 1953. godine na površini od 3041 hektara.
									Osnovu parka čini masiv planine Risnjak, s vrhom na 1528 metara,a 1997 godine površina parka povećana je na 6400 hektara i danas je na području parka izvor rijeke Kupe.
			     				</p>
			     				<p>
							     	Park je izrazit primjer visinskog raščlanjenja dinarskoga planinskoga sustava u reljefnom, geološkom, hidrološkom i klimatskom pogledu, biljnom pokrovu i životinjskom svijetu. Područje je podijeljeno u dvije zone: zonu stroge i zonu usmjerene zaštite - u užoj zoni mnogo je prirodnih znamenitosti rijetke ljepote zbog kojih je ono i uvršteno u najviši stupanj zaštićene prirode.
									Risnjak je jedan od manje posjećenih nacionalnih parkova u Hrvatskoj, ne zato što bi bio manje vrijedan, već zato što za uživanje u risnjačkim ljepotama treba imati poseban osjet za čari prirodnih fenomena. Turisti (u prosječnom poimanju tog izraza) ovdje su rjeđi gosti od pravih prirodoslovaca.
									Proširenjem površine Parka 1997. g. pod zaštitu su uključeni i lokaliteti izvor rijeke Kupe sa gornjim tokom te planinaski masiv Snježnika.
			     				</p>
						     	<div>
						     		<h4> Izvor: <a target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Risnjak">NP Risnjak </a></h4>
						     	</div>
						    </div>
						</div>
			       		<div class="row">
			        		<div class="col-md-6">
								<li><div>Sjeverni Velebit <br/><a class="gallery-item2" href="img/parkovi/velebit.jpg">
								<img src="img/parkovi/velebit.jpg" width="500" height="350" /></a></div></li>
			    			</div>
				     		<div class="col-md-6">
				     			<br/>
				      			<br/>
				     			<p>
							     	Nacionalni park Sjeverni Velebit, hrvatski nacionalni park, proglašen je 9. lipnja 1999. godine.
									Raznovrsnost krških fenomena te biljnoga i životinjskoga svijeta samo su dio posebne slike ove prirodne cjeline. Unutar parka nalaze se strogi rezervat Hajdučki i Rožanski kukovi, Lukina jama - jedna od najdubljih jama na svijetu (otkrivena 1999.), botanički rezervat "Visibaba" s nalazištem endemične hrvatske sibireje (Sibiraea altaiensis ssp. croatica), šumski rezervat Borov vrh, botanički rezervat Zavižan-Balinovac-Velika kosa te glasoviti Velebitski botanički vrt. Na krajnjem jugu se nalazi posebni rezervat šumske vegetacije Štirovača.
									Park je ispresijecan brojnim planinarskim stazama, od kojih je najpoznatija Premužićeva staza.
									Površina parka iznosi 109 km².
				     			</p>
				     			<div>
				     				<h4> Izvor: <a target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Sjeverni_Velebit">NP Sjeverni Velebit </a></h4>
				     			 </div>
				     		</div>
			       		</div>
			       </ol>
			    </div>
			</div>
		</section>

<!--parallax efekt slika -->
	    <section>
	    	<div class="parallax-container">
	      		<div class="parallax"><img src="img/landscape1.jpg">
			</div>
	    	</div>
    	</section>
<!-- video sadržaj -->
		<section class="video" id="videos">
				<div class="container">
					<div class="quotes">
						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<div class="title">
									<div class="wow bounceIn">
									<h1 class="center" data-animation="bounceInUp" data-wow-offset="300">Video</h1>
									</div>
								</div>
							</div>
						</div>
						<div class="row wow fadeInUp" data-wow-duration="2s">
							<div class="col-md-4"> 	<div class="popup1" style="cursor: pointer;" >
								<div class="grid">
							<figure class="effect-duke">
								<img  src="http://img.youtube.com/vi/N-bBfTbJNFU/maxresdefault.jpg" width="380" height="250" alt="video1"/>
								
								<figcaption>
									<h2>Plitvička jezera</h2>
									<p>Trajanje: 14:46</p>
								</figcaption>
							</figure>
						</div>
								</div>
						</div>
						<div class="col-md-4"> 	<div class="popup2"style="cursor: pointer;" >
								<div class="grid">
							<figure class="effect-duke">
							<img src="http://img.youtube.com/vi/cgb25lUXgY0/mqdefault.jpg" width="380" height="250" alt="video2"/>
							<figcaption>
									<h2>Ljepota svijeta</h2>
									<p>Trajanje: 4:56</p>
							</figcaption>			
							</figure>
						</div>
								</div>	
						</div>
						<div class="col-md-4"> 	<div class="popup3" style="cursor: pointer;">
							<div class="grid">
							<figure class="effect-duke">
							<img src="http://img.youtube.com/vi/SWELdS1fG_E/maxresdefault.jpg" width="380" height="250" alt="video3"/>
							<figcaption>
									<h2>Priroda oduzima dah</h2>
									<p>Trajanje: 5:44</p>
									
								</figcaption>			
							</figure>
						</div>
								</div>
						</div>
					</div>
						<br>
						<br>
						<div class="row wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
							<div class="col-md-4"> 	<div class="popup4" style="cursor: pointer;" >
								<div class="grid">
							<figure class="effect-duke">
								<img src="http://img.youtube.com/vi/YHFp_FYuI4A/mqdefault.jpg" width="380" height="250" alt="video4"/>
								<figcaption>
									<h2>Svijet i život</h2>
									<p>Trajanje: 6:03</p>	
								</figcaption>			
							</figure>
						</div>
								</div>
						</div>
						<div class="col-md-4"> 	<div class="popup5" style="cursor: pointer;" id="vid5">
							<div class="grid">
							<figure class="effect-duke">
							<img src="http://img.youtube.com/vi/qjH7LgRH2pE/maxresdefault.jpg" width="380" height="250" alt="video5"/>
							<figcaption>
									<h2>Planet zemlja</h2>
									<p>Trajanje: 4:48.</p>
								</figcaption>			
							</figure>
						</div>
								</div>
						</div>
						<div class="col-md-4"> 	<div class="popup6" style="cursor: pointer;">
							<div class="grid">
							<figure class="effect-duke">
							<img src="http://img.youtube.com/vi/6v2L2UGZJAM/maxresdefault.jpg" width="380" height="250" alt="video6"/>
							<figcaption>
									<h2>Nevjerovatne scene prirode</h2>
									<p>Trajanje: 13:28</p>
								</figcaption>			
							</figure>
						</div>
								</div>
							</div>
						</div>
						<br>
						<br>
				</div>
			</div>
		</section>

<!--parallax druga slika -->
	   	<section>
    	  	<div class="parallax-container">
      			<div class="parallax">
      				<img src="img/landscape.jpg">
				</div>
    		</div>
    	</section>
<!-- zanimljivosti -->
		<section class="zanimljivosti " id="zanimljivosti">
				<div class="container">
					<div class="row">
					 	<h1 class="center"> Zanimljivo</h1>
					 	<div class="row wow fadeInUp" data-wow-duration="3s">
					 	<div class="col-md-4">
					 		<div class="zanimljivo">
			  					<div class="slika">
			    					<img src="img/zanimljivo/plitvice.jpg">
			    					<span class="naslov">Plitvička jezera</span>
			  					</div>
			  				<div class="sadrzaj">
			    				<p>Nacionalni park <strong> Plitvička jezera </strong> osobita je geološka i hidrogeološka krška pojava. Kompleks Plitvičkih jezera proglašen je nacionalnim parkom 8. travnja 1949. godine. To je najveći, najstariji i najposjećeniji hrvatski nacionalni park...</p>
			  				</div>
			  				<div class="vise">
			  					<div class="morph-button morph-button-overlay morph-button-fixed">
								<button type="button">VIŠE</button>
								<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Plitvička jezera</h2>
											<img src="img/zanimljivo/plitvice.jpg" height="300" width="100%" />
											<p>Nacionalni park <strong> Plitvička jezera </strong> osobita je geološka i hidrogeološka krška pojava. Kompleks Plitvičkih jezera proglašen je nacionalnim parkom <strong>8. travnja 1949.</strong> godine. To je najveći, najstariji i najposjećeniji hrvatski nacionalni park. Predstavlja šumovit planinski kraj u kojem je nanizano 16 manjih i većih jezera kristalne modrozelene boje. Jezera dobivaju vodu od brojnih rječica i potoka, a međusobno su spojena kaskadama i slapovima. Sedrene barijere, koje su nastale u razdoblju od desetak tisuća godina, jedna su od temeljnih osobitosti Parka. </p>
											<p>Poseban zemljopisni položaj i specifične klimatske značajke pridonijeli su nastanku mnogih prirodnih fenomena i bogatoj biološkoj raznolikosti. Sedreni sedimenti oblikovani su od pleistocena do danas u vrtačama i depresijama između okolnih planina. Gornja jezera na jugu pretežno se sastoje od dolomita, a Donja jezera na sjeveru od vapnenačkih stijena.</p>
											<p>Prostrani šumski kompleksi, iznimne prirodne ljepote jezera i slapova, bogatstvo flore i faune, planinski zrak, kontrasti jesenjih boja, šumske staze i drveni mostići i još mnogo toga dio su neponovljive cjeline koju je i <strong>UNESCO</strong> proglasio svjetskom prirodnom baštinom,<strong> 1979. </strong> godine, među prvima u svijetu. Park je podijeljen na užu i širu zonu prema stupnju zaštite. Nalazi se na području dvije županije, 91% parka je u Ličko-senjskoj županiji, a 9% u Karlovačkoj županiji.</p>
											<p>Na Plitvičkim jezerima nalazi se i izvor rijeke Korane, koja se napaja vodom iz jezera. Klima u nacionalnom parku je umjerena planinska.
											Prvi ozbiljni počeci turizma na Plitvičkim jezerima potječu <strong> 1861.</strong> godine. Godine<strong> 2011.</strong> bilo je više od milijun posjetitelja po prvi puta u povijesti ovog nacionalnog parka.
											Mnogi su istraživači pridonijeli poznavanju i razvoju Plitvičkih jezera, a od njih se posebno izdvaja <strong>Ivo Pevalek</strong>, kojemu je podignuta i spomen-ploča.</p>
											<hr/>
											 <h2>Lokacija</h2>
											 <div id="con_map">
											  <div id="map"></div>
											  </div>
											<hr class="style17">
											<h3>Izvor: <a  target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Plitvi%C4%8Dka_jezera"> Plitvička jezera</a>  </h3>
										</div>
									</div>
								</div>
								</div><!-- morph-button -->
			 			 	</div>
							</div>
					 </div>
					  <div class="col-md-4">
					  	<div class="zanimljivo col-center">
			 		 		<div class="slika">
			    				<img src="img/zanimljivo/azori.jpg">
			    				<span class="naslov">Azori</span>
			  				</div>
			  				<div class="sadrzaj">
			    				<p><strong>Azori </strong>(por. Açores), također Azorski otoci, službeno Autonomna Regija Azori (por. Regiao Autónoma dos Açores), je portugalsko otočje i istoimena autonomna regija u sjevernom Atlantiku površine 2346  km², s 243 000 stanovnika...</p>
			  				</div>
			  				<div class="vise">
								<div class="morph-button morph-button-overlay morph-button-fixed">
								<button type="button">VIŠE</button>
								<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Azori</h2>
											<img src="img/zanimljivo/azori.jpg" height="300" width="100%" />
											<p>Azori (por. Açores), također <strong> Azorski otoci </strong>, službeno Autonomna Regija Azori (por. Regiao Autónoma dos Açores), je portugalsko otočje i istoimena autonomna regija u sjevernom Atlantiku površine <strong>2346  km²</strong>, s 243 000 stanovnika. Otoci su vulkanskog porijekla i uzdižu se s atlantskog hrbata formirajući niz u smjeru SZ - JI u dužini od otprilike <strong> 600 km</strong> . Ističu se tri grupe kojima su glavni otoci: Flores i Corvo na sjeverozapadu, Faial, Pico, São Jorge, Graciosa i Terciera u centru, São Miguel i Santa Maria na jugoistoku.</p>
											<p>Reljef je vrlo oštar i brdovit, klima blaga sa obilnim padalinama. Stanovništvo, koje vuče podrijetlo od portugalskih naseljenika, živi uglavnom uz obale. Većinom se bavi poljoprivredom i stočarstvom. Ribarstvo i turizam također se ističu kao lokalne djelatnosti. Glavna naselja: Ponta Delgada na Sao Miguelu, Horta na Faialu i Angra do Heroismo na Terceiri.</p>
											
											<hr/>
											 <h2>Lokacija</h2>
											 <div id="con_map">
											  <div id="map_canvas_2"></div>
											  </div>
											<hr class="style17">
											<h3>Izvor: <a  target="new" href="https://hr.wikipedia.org/wiki/Azori"> Azori</a>  </h3>
										</div>
									</div>
								</div>
							</div><!-- morph-button -->
							</div>
						</div>
					 </div>
					 <div class="col-md-4">
					  	<div class="zanimljivo col-center">
			  				<div class="slika">
			    				<img src="img/zanimljivo/mura.jpg" height="125">
			    				<span class="naslov">Europska Amazona - Mura, Drava, Dunav</span>
			  				</div>
			  				<div class="sadrzaj">
			    				<p>
								    Rijeke čine 700 km dug “zeleni pojas”, spajajući više od 1,000,000 ha vrijednih prirodnih i
									kulturoloških krajolika svih pet zemalja te tako postaju simbolom njihova zajedništva, postavši prvim svjetskim UNESCO-vim prekograničnim rezervatom biosfere <strong>“Mura-Drava-Dunav” </strong>(PRB MDD)...
								</p>
			  				</div>
			  				<div class="vise">
			  					<div class="morph-button morph-button-overlay morph-button-fixed">
									<button type="button">VIŠE</button>
									<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Europska Amazona - Mura, Drava, Dunav</h2>
											<img src="img/zanimljivo/dunav.jpg" height="400" width="100%" />
											<p>Rijeke čine<strong> 700 km</strong>  dug “zeleni pojas”, spajajući više od<strong> 1,000,000 ha </strong>vrijednih prirodnih i
											kulturoloških krajolika svih pet zemalja te tako postaju simbolom njihova zajedništva, postavši prvim svjetskim <strong>UNESCO</strong>-vim prekograničnim rezervatom biosfere <strong>“Mura-Drava-Dunav”</strong> (PRB MDD).
											Unatoč brojnim promjenama uzrokovanim ljudskom aktivnošću, ovaj zapanjujući riječni krajolik može se podičiti jedinstvenom biološkom raznolikošću. Ovdje nalazimo rijetka prirodna staništa poput velikih poplavnih šuma, riječnih otoka, šljunčanih i pješčanih obala, rukavaca i mrtvica. Ova staništa dom su najvećem broju gnijezdećih parova orla štekavca u kontinentalnoj Europi, ali i ostalih ugroženih vrsta poput male čigre, crne rode, dabra, vidre i gotovo izumrle jesetre. Svake godine više od <strong>250,000 </strong>migratornih ptica močvarica koristi ovaj prostor za odmor i hranjenje.</p>
											<p>Mreža s više od<strong> 10 zaštićenih područja</strong> duž ovih rijeka naglašava njihovu ekološku važnost uključujući i svjetski poznati Park prirode „Kopački rit” na ušću Drave i Dunava, Regionalni park „Mura-Drava” u Hrvatskoj, Specijalni rezervat prirode „Gornje Podunavlje” u Srbiji te Nacionalni park „Dunav-Drava” u Mađarskoj, kao i Natura 2000 područja u Sloveniji i Austriji.</p>
											<p>Uz bogatstvo biološke raznolikosti, rijeke i poplavna područja od velike su važnosti za ljude koji tamo žive. Egzistencija lokalnih ribara uvelike ovisi o populaciji riba. Postojeća poplavna područja smanjuju rizik od poplava, osiguravaju povoljne uvjete podzemnih voda kao i samopročišćavanje vode koje je važno za zalihe pitke vode, šume i poljoprivredu. Rijeke se koriste i za rekreaciju: šetanje, kupanje, ribolov, vožnju kanuima …</p>
											
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_3"></div>
											  </div>
											<hr class="style17">
											<h3>Izvor: <a  target="new" href="http://www.amazon-of-europe.com/hr/vrijednosti/"> Europska Amazona</a>  </h3>
										</div>
										</div>
									</div>
								</div><!-- morph-button -->
			  				</div>
						</div>
					 </div>
					 </div>
				<div class="row wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
					<div class="col-md-4">
						<div class="zanimljivo">
			  				<div class="slika">
			    				<img src="img/zanimljivo/uluru.jpg"/>
			    				<span class="naslov"> Uluru, Australija</span>
			  				</div>
			  				<div class="sadrzaj">
			    			<p><strong>Uluru</strong> (Ayers Rock), kameno brdo, navodno najveći kameni monolit na svijetu smješten u južnom dijelu Sjevernog teritorija, 450 kilometara jugozapadno od Alice Springsa, Australija...</p>
			  				</div>
			  			<div class="vise">
			   				<div class="morph-button morph-button-overlay morph-button-fixed">
								<button type="button">VIŠE</button>
								<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Close the overlay</span>
											<h2>Uluru, Australija</h2>
											<img src="img/zanimljivo/uluru.jpg" height="550" width="100%" />
											<p><strong>Uluru</strong> (Ayers Rock), kameno brdo, navodno najveći kameni monolit na svijetu smješten u južnom dijelu Sjevernog teritorija,<strong> 450 kilometara</strong> jugozapadno od Alice Springsa, Australija. Uluru je građen od crvenog pješčenjaka, obujma je<strong> 9,4 kilometra</strong> a uzdiže se na<strong> 240 metara</strong> visine i nalazi se na području nacionalnog parka Uluru. Za Aboridžine je ova drevna crvena stijena oduvijek bila sveto i mistično mjesto. Danas je prerasla i u nacionalni simbol. To je brdo od pješčenjaka koje su kretanja Zemljine kore izgurala na površinu prije otprilike<strong> 500 milijuna godina</strong>. Najveći dio brda danas je pod okolnim morem pješčanih dina. Vidi se samo zaravnjeni vrh visok<strong> 385 m</strong>. Kamenu prašinu široku oko<strong> 3 km</strong> prekrivaju fini paralelni utori. Pri dnu Ayers Rock ima opseg<strong> 10 km</strong>, a na svim stranama u njemu su urezane špilje i rupe. Na sjeveroistočnoj strani odvojila se kamena ploča visoka<strong> 150 metara</strong>, koju nazivaju klokanov rep.</p>
											<p>Ayers Rock Europljanima nije bio poznat sve do <strong>70-ih godina </strong>19. stoljeća kad su dva istraživača, <strong>Ernest, Giles i William C. Gosse</strong>, došlo u ovo područje. Nazvali su stijenu po <strong>Henryu Ayersu</strong> tadašnjem premijeru države Južna Australija.
											U današnje vrijeme stijenu na godinu posjeti više od pola milijuna turista.Turističko središte Yulara nalazi se 18. kilometara sjeverno odavde. Za šetnju oko Ayers Rocka potrebna su oko četiri sata, a možete ga obići i brže, vozeći se na stražnjem sjedištu motocikla. Kraća pješačka tura ide stazom Liru,Aboridžinima vodiči objasnit će vam svoju kulturu i pokazati neke namirnice kojima se hrane, kao što su „jabuke“ koje rastu na stablima mulge (odnosno šiške koje stvaraju ose). Penjanje do vrha traje oko dva sata, no aboridžinska kultura tako nešto ne poznaje i stoga obeshrabruje. Ako se predviđa temperatura viša od 38° C, penjanje je zabranjeno, budući da bi u takvim uvjetima tjelesni napor mogao biti opasan. Posjetitelje se u Uluruu dočekuje drevnim pozdravom: „Pukulpa pitjama Ananguku Ngurakutu“, odnosno: „Dobrodošli u aboridžinsku zemlju!“</p>
											
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_4"></div>
											  </div>
											<hr class="style17">
											<h3>Izvor: <a  target="new" href="https://hr.wikipedia.org/wiki/Uluru"> Uluru</a>  </h3>
										</div>
									</div>
								</div>
							</div><!-- morph-button -->
			  			</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="zanimljivo">
			  				<div class="slika">
			    				<img src="img/zanimljivo/tianzi.jpg">
			    				<span class="naslov">Tianzi planine, Kina</span>
			  				</div>
			  				<div class="sadrzaj">
			   					<p> Cijeli ovaj planinski kompleks karakterističan je po stijenama koje se izdižu iz zemlje i dosežu nevjerojatne visine, dok zbog svog izuzetno malog obujma i razlike u veličini u donjim i gornjim dijelovima stječe se dojam da naprosto lebde u zraku...</p>
			  				</div>
			  				<div class="vise">
			    				<div class="morph-button morph-button-overlay morph-button-fixed">
									<button type="button">VIŠE</button>
									<div class="morph-content">
										<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Tianzi planine, Kina</h2>
											<img src="img/zanimljivo/tianzi.jpg" height="500" width="100%" />
											<p>Cijeli ovaj planinski kompleks karakterističan je po stijenama koje se izdižu iz zemlje i dosežu nevjerojatne visine, dok zbog svog izuzetno malog obujma i razlike u veličini u donjim i gornjim dijelovima stječe se dojam da naprosto lebde u zraku. A na samim vrhovima, inače golih stijena, rastu biljke i drveće čineći cijeli ovaj prizor još impresivnijim.</p>
											<p>Tianzi planine su nastale od kvarcnih stijena starih <strong>400 milijuna</strong> godina. U razdoblju od<strong> 2 milijuna</strong> godina došlo je do naizmjeničnog podizanja i spuštanja zemljinog tla. Nakon ovoga uslijedila je erozija zemljišta uslijed djelovanja vode, koja je izdubila vertikalne usjeke i kao rezultat ovog djelovanja nastali su mineralni 'stupovi', koji zaista djeluju fascinantno.</p>
											<p>Ova planina u prijevodu znači 'sin raja', a ovo ime je dobila po jednom seljaku iz etničke skupine <strong>Tua</strong>, koji je predvodio seljačku revoluciju tijekom vladavine dinastije<strong> Song</strong> u razdoblju od <strong>1127-1279.</strong> godine. Pošto je ovaj seljak bio vođa ustanka, sebe je prozvao <strong>'Tianzi'</strong>, odnosno 'sin raja', što predstavlja uobičajen epitet kineskih vladara.</p>
											<p><strong>Tianzi planine</strong>, predstavljaju jedan od najljepših nacionalnih parkova Kine i zauzimaju površinu od <strong>67 četvornih kilometara</strong>, a najviši vrh visok je <strong>1.262 metara</strong>. Ove planine predstavljaju iz godine u godinu sve veću turističku atrakciju, koja je otvorena za posjetitelje iz cijelog svijeta. Posjetitelji mogu uživati ​​u prekrasnom pogledu na veličanstvene i mistične planinske vrhove, pokrivene šumom, kao i dolinu sa žičare koja je konstruirana kako bi se ljudi bolje informirali i upoznali s ovim svjetskim fenomenom.</p>
										
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_5"></div>
											  </div>
											<hr class="style17">
											<h3>Izvor: <a  target="new" href="http://www.luxmagazine.hr/putovanja/putovanja/%C4%8Darobne-tianzi-planine"> Tianzi planine</a>  </h3>
										</div>
									</div>
								</div>
							</div><!-- morph-button -->
			  				</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="zanimljivo">
			  				<div class="slika">
			    				<img src="img/zanimljivo/angel.jpg">
			    				<span class="naslov">Anđelov vodopad, Venezuela</span>
			  				</div>
			  				<div class="sadrzaj">
			    				<p><strong>Anđelov vodopad</strong> (španjolski: Salto Ángel, Salto Churún Meru, pemonski: Kerepakupai Vená = vodopad na najdubljem mjestu) je najviši vodopad na svijetu u venecuelanskoj saveznoj državi Bolívar na rijeci Churún, pritoci Caronija.
									Danas je Anđelov vodopad dio Nacionalnog parka Canaima, koji je 1994. uvršten na UNESCO-vu listu Svjetske baštine.</p>
			  				</div>
			  				<div class="vise">
			   					<div class="morph-button morph-button-overlay morph-button-fixed">
									<button type="button">VIŠE</button>
									<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Anđelov vodopad, Venezuela</h2>
											<img src="img/zanimljivo/angel.jpg" height="400" width="100%" />
											<p><strong>Anđelov vodopad</strong> (španjolski: Salto Ángel, Salto Churún Meru, pemonski: Kerepakupai Vená = vodopad na najdubljem mjestu) je najviši vodopad na svijetu u venecuelanskoj saveznoj državi Bolívar na rijeci Churún, pritoci Caronija.
											Danas je Anđelov vodopad dio Nacionalnog parka <strong>Canaima</strong>, koji je <strong>1994.</strong> uvršten na <strong>UNESCO</strong>-vu listu Svjetske baštine.</p>
											<p>Anđelov vodopad nalazi se na jugoistoku Venecuele, na Gvajanskoj visoravni <strong>160 km</strong> jugoistočno od grada Ciudad Bolívar.
											Anđelov vodopad pada s visine od <strong>979 metara</strong>, a na dnu je širok <strong>150 metara</strong>, tako da je 15 puta viši od Slapova Niagare koji imaju svega 52 metra. Vode Churúna se u ambis srovaljuju sa ravnog platoa Đavolske planine (Auyán-Tepuí), jedva dotičući strme litice planine. Zbog guste džungle na dnu vodopada, i velikih količina aerosola u zraku najbolje se vidi iz zraka. Za jakih vjetrova, ili niskog vodostaja vodopad se pretvara u oblak vodenih kapljica, pa do dna ne padne niti kap.</p>
											<p>Osim lokalnih indijanaca iz plemena Pemon, nitko drugi nije znao za vodopad sve do <strong>1933.</strong> kad ih je potpuno slučajno otkrio američki avanturist i akrobatski pilot <strong>James Angel</strong>, koji je preletio Đavolske planine u potrazi za zlatnom rijekom (tad su bile u modi takve legende), koju nije pronašao ali je vidio veličanstveni vodopad.</p>
											<p>James se ponovno vratio sa avionom na Đavolsku planinu <strong>1937.</strong> ovaj put sa ženom i njenim prijateljem Gustavom Henry Gardenerom, ali je doživio havariju te se prisilno spustio na plato pored vodopada. (olupina njegova aviona ostala je tamo punih 33 godina sve dok nije helikopterom skinuta sa planine.
											Jimmy Angel se sa svojim društvom probijao punih 11 dana kroz džunglu, do prvog naselja u civilizaciji. Njihova avantura toliko je uzbudila ondašnji svijet da je odtada vodopad nosio njegovo ime.Replika njegova aviona i danas se nalazi na platou Đavolske planine (orginal je smješten u Muzeju avijacije u gradu Maracay).
											Krajem <strong>2009.</strong> predsjednik Venezuele Hugo Chávez predložio je da se Anđelov vodopad preimenuje u Kerepakupai Meru, kako ga zovu lokalni Indijanci od pamtivjeka.</p>
											
											<hr/>
										<h2>Lokacija</h2>
										<div id="con_map">
											  <div id="map_canvas_6"></div>
											  </div>
										<hr class="style17">
											<h3>Izvor: <a  target="new" href="https://sh.wikipedia.org/wiki/Angelov_vodopad"> Anđelov vodopad</a>  </h3>
										</div>
									</div>
								</div>
								</div><!-- morph-button -->
			 				</div>
						</div>
					</div>
				</div>
			<div class="row wow fadeInUp" data-wow-duration="3s">
				<div class="col-md-4">
					<div class="zanimljivo">
			  			<div class="slika">
			    			<img src="img/zanimljivo/maldivi.jpg">
			    			<span class="naslov">Maldivi</span>
			  			</div>
			  			<div class="sadrzaj">
			    			<p>Maldive otoci ili nama poznatiji pod nazivom <strong>Maldivi</strong> je otočje koje se nalazi u Aziji u Indijskom oceanu a ima 26 atola... </p>
			 			 </div>
			  			<div class="vise">
			    			<div class="morph-button morph-button-overlay morph-button-fixed">
								<button type="button">VIŠE</button>
								<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Maldivi</h2>
											<img src="img/zanimljivo/maldivi2.jpg" height="550" width="100%" />
											<p>Maldive otoci ili nama poznatiji pod nazivom<strong> Maldivi</strong> je otočje koje se nalazi u Aziji u Indijskom oceanu a ima <strong>26 atola</strong>. Maldive često nazivaju rajom na Zemlji, jer po svojim ljepotama, plavom moru zaista su jedno od najljepših destinacija koje možete posjetiti. Odlikuju ga prekrasne bijele pješčane plaže, grebeni i vrlo raznolika vegetacija.
											</p>
											<p>
											Kada posjetite Maldive jedino je što zaista možete jesu uživanje i opuštanje. Velika vrijednost i prednost Maldiva jest njegov podvodni svijet. Maldivi su odlično mjesto za ronjenje, s tisućama različitih vrsta riba i koralja. Grad Male, je glavni grad Republike Maldivi (Maldives) ujedno je i najnaseljeniji grad u Maldivima.
											</p>
											
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_7"></div>
											  </div>
										<hr class="style17">
											<h3>Izvor: <a  target="new" href="http://daleka-putovanja.net/azija-putovanja-u/maldivi/top-mjesta-maldivi"> Maldivi</a>  </h3>
										</div>
									</div>
								</div>
							</div><!-- morph-button -->
			 			</div>
					</div>
				</div>
					<div class="col-md-4">
						<div class="zanimljivo">
			  				<div class="slika">
			     				<img src="img/zanimljivo/grand.jpg">
			    				<span class="naslov">Grand Canyon</span>
			  				</div>
			  				<div class="sadrzaj">
			   					 <p><strong>Grand Canyon</strong> (en. za „Veliki klanac”; hopi: Ongtupqa) je klanac veoma strmih litica koji je milijunima godina dubila i izdubila rijeka Colorado u američkoj saveznoj državi Arizoni...</p>
			  				</div>
			  				<div class="vise">
			   					<div class="morph-button morph-button-overlay morph-button-fixed">
									<button type="button">VIŠE</button>
									<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Grand Canyon</h2>
											<img src="img/zanimljivo/grand.jpg" height="550" width="100%" />
											<p>
											<strong>Grand Canyon</strong> (en. za „Veliki klanac”; hopi: Ongtupqa) je klanac veoma strmih litica koji je milijunima godina dubila i izdubila rijeka Colorado u američkoj saveznoj državi <strong>Arizoni</strong>, i sastavni je dio istoimenog nacionalnog parka, jednog od najstarijih u SAD-u. Nacionalni park Grand Canyon (Grand Canyon National Park) je jedan od 58 nacionalnih parkova Sjedinjenih Američkih Država i <strong>UNESCO</strong>-va je svjetska baština. Grand Canyon je naziv dobio zahvaljujući svojoj veličini, duljini i izrazito dubokim ponorima. Zapravo Grand Canyon se zbog svoje veličine smatra jednim od <strong>sedam svjetskih čuda</strong> prirode. Kao najveći i najdublji klanac na svijetu čije strme litice svjedoče o skoro <strong>2 milijarde godina</strong> povijesti zemlje i ljudskoj prilagodljivosti jako negostoljubivom okolišu, Nacionalni park Grand Canyon je upisan na UNESCO-v popis mjesta svjetske baštine u Americi još 1979. godine
											</p>
											<p>
											Grand Canyon se rasprostire na<strong> 4.926,66 km²</strong> i izrazito je dubok i dug, te je na pojedinim mjestima dubok oko <strong>1600 metara</strong>, a dug je<strong> 446 kilometara</strong> i na nekim mjestima je širok do<strong> 29 km</strong>. Kroz povijest Grand Canyon je bio izložen stalnim utjecajima rijeke Colorado i njenih pritoka koje su, sloj po sloj, oblikovale današnji izgled klanca, dok se koloradska visoravan u isto vrijeme uzdizala.
											</p>
											<p>
											Jedan od najvećih pristalica i obožavatelja klanca je bio američki predsjednik <strong>Theodore Roosevelt</strong> koji je ovdje puno puta uživao u krajoliku i lovu na pume. Nacionalni park Grand Canynon utemeljen je 26. veljače 1919. godine.
											Danas Nacionalnim parkom Grand Canyon upravljaju Hualapai i Havasupai Indijanci i posjećuje ga oko<strong> 5 milijuna</strong> posjetitelja godišnje. Od<strong> 1870. godine</strong> poginulo je oko 600 posjetitelja, većinom zbog pada, dehidracije, hipotermije ili srčanog udara.
											</p>
											
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_8"></div>
											  </div>
										<hr class="style17">
											<h3>Izvor: <a  target="new" href="https://hr.wikipedia.org/wiki/Nacionalni_park_Grand_Canyon"> Grand Canyon</a>  </h3>
										</div>
									</div>
									</div>
								</div><!-- morph-button -->
			  				</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="zanimljivo">
			  				<div class="slika">
			     				<img src="img/zanimljivo/pamukkale.jpg">
			    				<span class="naslov">Pamukkale, Turska</span>
			  				</div>
			  				<div class="sadrzaj">
			    				<p><strong>Pamukkale</strong> (turski za "Pamučna palača") je kompleks jedinstvenih mineralnih izvora u jugozapadnoj Turskoj, u blizini grada Denizlija. Lokalitet se sastoji od toplih izvora i vapnenca travertina koji ima neobičan oblik plitkih terasastih bazena, nastalih prelijevanjem mineralne vode i taloženjem minerala...</p>
			  				</div>
			  				<div class="vise">
			    				<div class="morph-button morph-button-overlay morph-button-fixed">
									<button type="button">VIŠE</button>
									<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Pamukkale, Turska</h2>
											<img src="img/zanimljivo/pamukkale.jpg" height="500" width="100%" />
											<p>
											<strong>Pamukkale</strong> (turski za "Pamučna palača") je kompleks jedinstvenih mineralnih izvora u jugozapadnoj Turskoj, u blizini <strong>grada Denizlija</strong>. Lokalitet se sastoji od toplih izvora i vapnenca travertina koji ima neobičan oblik plitkih terasastih bazena, nastalih prelijevanjem mineralne vode i taloženjem minerala.
											</p>
											<p>
											Na njegovim toplicama izgrađen je antički grad Hierapolis u<strong> 2. stojeću pr. Kr.</strong> kao liječilište. U Hierapolisu se nalaze ostaci kupatila, hramova i drugih starogrčkih i starorimskih spomenika, te originalne ranokršćanske građevine, zbog čega je <strong>1988. godine</strong>, zajedno s toplicama Pamukkale, upisan kao <strong>UNESCO</strong>-va svjetska baština. Ovo područje se nalazi u dolini rijeke Menderes koje ima umjerenu klimu skoro cijele godine. Dugo je oko 2,000, a široko 600 i visoko oko 160 metara. Pamukkale ima<strong> 17 izvora</strong> u kojima voda ima temperaturu od 35°C do 100°C. Od njih se voda prolijeva nekih 320 metara do padine gdje se u terasama prelijeva preko padine duge 60-70 metara. Kalcij-karbona u vodi se taloži i naposlijetku postaje vapnencom, a ugljen-dioksid se otpušta. Oko 499.9 mg CaCO3 se taloži svaki dan iz svake litre vode u savršenim klimatskim uvjetima.
											</p>
											
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_9"></div>
											  </div>
										<hr class="style17">
											<h3>Izvor: <a  target="new" href="https://hr.wikipedia.org/wiki/Pamukkale"> Pamukkale</a>  </h3>
										</div>
									</div>
									</div>
								</div><!-- morph-button -->
			  				</div>
						</div>
					</div>
				</div>
				<div class="row wow fadeInUp" data-wow-duration="3s">
					<div class="col-md-4">
						<div class="zanimljivo">
			  				<div class="slika">
			     			<img src="img/zanimljivo/sokotra.jpg">
			    			<span class="naslov">Sokatra, Jemen</span>
			  			</div>
			  				<div class="sadrzaj">
			    				<p><strong>Sokotra</strong> ili Soqotra (Arapski: سقطرى) je otočje od četiriju otoka i otočića u Indijskom oceanu koje pripada državi Jemen. Najbliže je kopno Somalija, udaljena 350 km...</p>
			 				</div>
			  				<div class="vise">
			    			<div class="morph-button morph-button-overlay morph-button-fixed">
								<button type="button">VIŠE</button>
								<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Sokotra, Jemen</h2>
											<img src="img/zanimljivo/sokotra.jpg" height="550" width="100%" />
											<p>
											<strong>Sokotra</strong> ili Soqotra (Arapski: سقطرى) je otočje od četiriju otoka i otočića u<strong> Indijskom oceanu</strong> koje pripada državi Jemen. Najbliže je kopno Somalija, udaljena 350 km.
											</p>
											<p>
											Svojom veličinom<strong> 3625 km²</strong>, Sokotra je najveći otok otočja, u kojem se još nalaze; Abd Al Kuri, Samha i Darsa. Glavni otok dijeli se na usku priobaljnu ravnicu, vapnenačku visoravan s krškim špiljama te planine Haghier, koje dosežu 1525 metara. Sokotra upravno pripada muhafazi Hadramaut, nekoć je bio dio udaljene muhafaze Adan.
											Klima je uglavnom tropska pustinjska i stepska (Köppenova klasifikacija klime: BWh i BSh), monsuni donose jake vjetrove.
											</p>
											<p>
											Duga geološka izoliranost otočja stvorila je specifičnu endemsku floru, a smatra se da je takve preko<strong> 800</strong>. Jedna od najprepoznatljivijih jest <strong>Zmajsko drvo</strong> (Dracaena cinnabari), koje se koristi u medicini, te <strong>Dorstenia gigas</strong>.
											Fauna je također specifična. Na otoku ima nekih endemskih ptica: Onychognathus frater, Passer insularis te Rhynchostruthus socotranus. Zbog bogatska svoje biorazličitosti Sokotra je stavljena pod zaštitu <strong>UNESCO</strong>-a u lipnju 2008. godine, Sokotru zovu <strong>draguljem Arapskog mora</strong>.
											</p>
										
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_10"></div>
											  </div>
										<hr class="style17">
											<h3>Izvor: <a  target="new" href="https://hr.wikipedia.org/wiki/Sokotra"> Sokotra</a>  </h3>
										</div>
									</div>
								</div>
								</div><!-- morph-button -->
			  				</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="zanimljivo">
			  				<div class="slika">
			    			<img src="img/zanimljivo/salar.jpg">
			    			<span class="naslov">Salar De Yuyni, Bolivija</span>
			  			</div>
			  			<div class="sadrzaj">
			    			<p><strong>Salar de Uyuni</strong> je najveće slano jezero na svijetu, površine je 10.582 km2 što je gotovo pa petina površine Hrvatske...</p>
			  			</div>
			  			<div class="vise">
			    			<div class="morph-button morph-button-overlay morph-button-fixed">
								<button type="button">VIŠE</button>
								<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span class="icon icon-close">Zatvori</span>
											<h2>Salar De Yuyni, Bolivija</h2>
											<img src="img/zanimljivo/salar.jpg" height="550" width="100%" />
											<p>
											<strong>Salar de Uyuni</strong> je najveće slano jezero na svijetu, površine je <strong>10.582 km2</strong> što je gotovo pa petina površine Hrvatske. Salar je nastao prije otprilike <strong>30.000 godina</strong> isušivanjem velikog prethistorijskog jezera koje se ovdje nalazilo. Sama debljina soli na jezeru kreće se od svega nekoliko centimetara do desetak metara. Bijela površina soli je toliko velika da je dobro vidljiva i iz svemira pa ju sateliti koriste za kalibriranje optičkih uređaja.
											</p>
											<p>
												Osim, naravno, sa ogromnim količinama soli Salar obiluje još brojnim rijetkim i vrijednim mineralima, sa ekonomskog gledišta ovo je veliko bogatstvo Bolivije. Dovoljno je reći da se procjenjuje da se u Salaru nalazi čak <strong>50-70% </strong>svjetskih zaliha litija bez kojega je nezamislivo napraviti današnje moderne baterije.
											</p>
											<p>
											Kroz Salar de Uyuni nema drugog puta osim sa 4×4 džipovima, prave ceste tamo nema, i dok je sama površina slanog jezera ravna kao jedna ogromna cesta drugi dijelove ture su teško prohodni pustinjski i planinski krajolici. U biti sama tura se najčešće naziva prema Salaru mada Salar de Uyuni tour predstavlja znatno širi pojam nego što je samo slano jezero. U tri dana turneje obilazi se prvo nacionalni park jugozapadne Bolivije<strong> Parque Nacional de Fauna Andina Eduardo Avaroa</strong>, tek trećeg dana se ulazi u sam Salar ako idete iz smjera Čilea, iz smjera Uyunia redoslijed je obrnut. Ipak, pošto je Salar možda najprepoznatljiviji dio ture najčešće se cijela tura naziva po njemu. I mi ovdje ćemo ovdje koristiti taj naziv za cijelu turu.
											</p>
											
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_11"></div>
											  </div>
										<hr class="style17">
											<h3>Izvor: <a  target="new" href="http://tripologia.com/putopisi/salar-de-uyuni-bolivija-tri-dana-na-drugoj-planeti/">Salar</a>  </h3>
										</div>
									</div>
								</div>
							</div><!-- morph-button -->
			  			</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="zanimljivo">
			  				<div class="slika">
			    			<img src="img/zanimljivo/halong.jpg">
			    			<span class="naslov">Zaljev Ha Long, Vijetnam</span>
			  				</div>
			  				<div class="sadrzaj">
			    				<p><strong>Zaljev Ha Long</strong> (vijetnamski: inh Ha Long, što znači "zaljev silazećeg zmaja"; kineski: 下龍灣) je zaljev u zaljevu Tonkin, u vijetnamskoj pokrajini Quảng Ninh, i upravno pripada gradu Ha Long, naselju Ha Long i oblasti Van Don...</p>
			  				</div>
			  				<div class="vise">
			    			<div class="morph-button morph-button-overlay morph-button-fixed">
								<button type="button">VIŠE</button>
								<div class="morph-content">
									<div>
										<div class="content-style-overlay">
											<span id="icon" class="icon icon-close">Zatvori</span>
											<h2>Zaljev Ha Long, Vijetnam</h2>
											<img src="img/zanimljivo/halong.jpg" height="500" width="100%" />
											<p>
											<strong>Zaljev Ha Long</strong> (vijetnamski: ịnh Ha Long, što znači "zaljev silazećeg zmaja"; kineski: 下龍灣) je zaljev u zaljevu Tonkin, u vijetnamskoj pokrajini Quang Ninh, i upravno pripada gradu Ha Long, naselju Ha Long i oblasti Van Don. Zaljev se sastoji od vapnenačkog krša i <strong>1960 otoka</strong> različitih oblika i veličina na području od <strong>1.553 km²</strong>. Središnje područje veličine 334 km² ima najveću gustoću otočića (tzv. "vapnenačkih stupaca"), njih 775. Evolucija ovog krajolika i stvaranje njegovih geomorfoloških tvorevina je trajalo punih 20 miljuna godina usljed djelovanja tropske vlažne klime. Geomorfološke tvorevine uključuju skupine kupastih vrhova (fengcong) i izolirane "tornjeve" (fenglin) koje su oblikovane djelovanjem mora. Manji otoci su fenglin tornjevi koji imaju oštre litice visoke od 50 do 100 m, i još uvijek se mijenjaju otkidanjem kamenja i vapnenačkih ploča. Pored toga, tu se nalaze i najrazvijenije "usječene litice" na cijeloj stjenovitoj obali, tj. erozijom nastali podrezi u visini morske površine koji daju jedinstven izgled cijelom krajoliku. Osobita su i brojna jezera na većim vapnenačkim otocima, te brojne špilje od kojih se razlikuju tri vrste: podzemne ispod površine mora, krški otvori na površini mora i pomorski usjeci nastali djelovanjem valova na visini mora.
											</p>
											<p>
											Ovaj jedinsven krajolik ima i značajnu bioraznolikost tropskih zimzelenih, te oceanskih i priobalnih biosustava koji uključuju <strong>14</strong> endemskih biljnih vrsta i <strong>60</strong> endemskih životinjskih vrsta.
											Arheološka istraživanja su potvrdila ljudsko prisustvo još od neolitika, te su se u ovom području izmijenjivale razne kulture: Soi Nhu (18,000.-7000. pr. Kr.), Cái Bèo (7000.-5000. pr. Kr.) i Ha Long (5000.-3500. pr. Kr.). Zaljev je odigrao i važnu ulogu u povijesti Vijetnama, o čemu svjedoče brojni nalazi iz mjesta: humak Bài Tho, špilja Đau Go i Bãi Cháy.
											</p>
											<p>
											Najveći vijetnamski mislilac, Nguyen Trai, je prije 500 godina opisao Zaljev Ha Long kao <strong> „čudo od kamena na nebesima”</strong> (Lo nhap Van Đon). God. 1962., zaljev Ha Long je zaštićen kao nacionalna baština, a 1994. godine je upisan na UNESCO-v popis mjesta svjetske baštine u Aziji i Oceaniji kao slikovito mjesto, „nedirnuto ljudskom rukom, iznimne ljepote i velike biološke važnosti”.
											</p>
										
											<hr/>
											<h2>Lokacija</h2>
											<div id="con_map">
											  <div id="map_canvas_12"></div>
											  </div>
										<hr class="style17">
											<h3>Izvor: <a  target="new" href="https://hr.wikipedia.org/wiki/Zaljev_H%E1%BA%A1_Long"> Ha Long</a>  </h3>
										</div>
									</div>
								</div>
							</div><!-- morph-button -->
			  			</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
	
		<section class="podnozje">
			<div class="container">
				<div class="row">

					<div class="col-md-4">
					</div>
					<div class="col-md-4">
					<div id="bookmarkRibbon">

				</div>
						<p>Sadržaj ove stranice je preuzet s javnih internetskih stranica i pripada njima. Ovdje je samo za prezentacijske svrhe. </p>
						<p>Autor: Dario Munđar </p>
						<p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</div>
		</section>
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<script src="js/classie.js"></script>

		<script src="js/uiMorphingButton_fixed.js"></script>
	
		<script>
			(function() {	
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();
				
				var el = document.querySelector( '.morph-button' );
				
				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
	new UIMorphingButton( bttn, {
		closeEl : '.icon-close',
		onBeforeOpen : function() {
			noScroll();
		},
		onAfterOpen : function() {
			canScroll();
			classie.addClass( document.body, 'noscroll' );
			classie.addClass( bttn, 'scroll' );
		},
		onBeforeClose : function() {
			classie.removeClass( document.body, 'noscroll' );
			classie.removeClass( bttn, 'scroll' );
			noScroll();
		},
		onAfterClose : function() {
			canScroll();
		}
	} );
} );
			})();
		</script>
		<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

	

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		

	});

</script>
  </body>
</html>