<?php

$lng=array(23.7104,23.7204);
$lat =array(90.4074,90.2);

?>




<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.css' rel='stylesheet' />
    </head>
    <body>
        <h1>Map Here <?php echo $lat[0] ?> <br> {{ip}}</h1>
        
        <div id='map' style='width: 100%; height: 100%;'></div>
        
        <script type="text/javascript">
        mapboxgl.accessToken = 'pk.eyJ1IjoibWFoYWRlIiwiYSI6ImNrczlicWdjYzAwMDQydnNqanBxY2Rna2gifQ.zl8iQpZYtK1CApveVKEP3Q';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v10',
        center: [90.4074,23.7104],
        zoom: 9,
        bearing: 180,
        });
        // Create a new marker.
       
       

       // aa=parseFloat('{{address.long}}');
       // bb=parseFloat('{{address.lat}}');
      
        
      
        /*var lat="";
        var lng="";*/
        //console.log(lat);
        
    
       <?php for ($i = 0; $i <= 1; $i++) { ?>
        var marker = new mapboxgl.Marker();
        //marker.setLngLat([90.4074,23.7104]);
      
        marker.setLngLat([<?php echo $lat[$i] ?>,<?php echo $lng[$i] ?>]);
        //.setLngLat([])
        //.setPopup(new mapboxgl.Popup().setHTML("<p></p>"))
        marker.addTo(map);

       <?php } ?>
        
        
       

        </script>
        
    </body>
</html>