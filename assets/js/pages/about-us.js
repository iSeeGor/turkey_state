// Google Map Api
$(function() {
    
    function initMap() {
        let popupContent = '<p class="marker_content">Address</p>',
            image = {
                url: "../assets/images/icons/google-map-marker.svg",
                // size: new google.maps.Size(126, 40),
                // origin: new google.maps.Point(0, 0)
                // anchor: new google.maps.Point(-40, 140)
            },
            coordinates = { lat: 48.8583277, lng: 2.292711 },
            map = new google.maps.Map(document.querySelector(".map-holder"), {
                center: coordinates,
                zoom: 16,
                // disableDefaultUI: true,
                styles: [
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#C5E3BF"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": 100
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#D1D1B8"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#C6E2FF"
                            }
                        ]
                    }
                ]
            }),
            marker = new google.maps.Marker({
                position: coordinates,
                map: map,
                icon: image,
                animation: google.maps.Animation.DROP
            }),
            infowindow = new google.maps.InfoWindow({
                content: popupContent
            });

        marker.addListener("click", function() {
            infowindow.open(map, marker);
        });
    }
    if (document.querySelector(".map-holder")) {
        initMap();
    }

    //Resize the width of map on large screen
    let mapHolder = document.querySelector('.map-holder');
    let holderWidth = '';
    
    if(window.innerWidth >= 992){

        holderWidth = window.innerWidth / 2 - 15;    
        mapHolder.style.width = holderWidth + 'px';
    }
});