<!DOCTYPE html>
<html>
<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #map {
            height: 100%;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>

    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -20.364325, lng: -43.489792},
            mapTypeId: 'satellite',
            scrollwheel: false,
            zoom: 16
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCUCoZptsq5rq342qTUXWpH4JFQ0RFEOA&callback=initMap"
        async defer></script>
</body>
</html>
