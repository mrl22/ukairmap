<!DOCTYPE html>
<html>
<head>
    <title>Richard Leishman UK Air Space</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        html, body {
            height: 100%;
            padding: 0;
            margin: 0;
        }

        #map_wrapper {
            height: 100%;
        }

        #map_canvas {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div id="map_wrapper">
    <div id="map_canvas"></div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbLcVkjlHKGAh3OyyaATu9qYYC8Lr6_jA"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/marker-animate-unobtrusive/0.2.8/vendor/markerAnimate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/marker-animate-unobtrusive/0.2.8/SlidingMarker.min.js"></script>
<script>

    function map_initialize() {


        var mapOptions = {
            mapTypeId: 'roadmap',
            maxZoom: 17,
            streetViewControl: false,
        };

        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

        map.setCenter({lat: 52.8, lng: -0.7});
        map.setZoom(8);
        // if (typeof window.orientation !== 'undefined') {
        //     // mobile
        //     map.setZoom(8);
        // } else {
        //     // desktop
        //     map.setZoom(9);
        // }



        // KML
        var src = 'https://devfwd.com/ukairmap/ukairspace.kml?' + Math.random();
        var kmlLayer = new google.maps.KmlLayer(src, {
            suppressInfoWindows: false,
            preserveViewport: true,
            map: map
        });



    }

    map_initialize();
</script>
</body>
</html>
