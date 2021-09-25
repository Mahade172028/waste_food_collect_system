<?php

$lng=$_GET['lng'];
$lat =$_GET['lat'];

?>




<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.css' rel='stylesheet' />

        <style>
            .navr{
               
            }
        </style>

    </head>
    <body style="background:gray;">
        <div class="navr"><h1 style="text-align:center; color:green;">Here Food Location</h1> <a href="index.html"> Go Back</a></div>
        
        <div id='map' style='width: 80%; height: 80%;margin: auto;border-radius: 15px;'></div>
        
        <script type="text/javascript">
        mapboxgl.accessToken = 'pk.eyJ1IjoibWFoYWRlIiwiYSI6ImNrczlicWdjYzAwMDQydnNqanBxY2Rna2gifQ.zl8iQpZYtK1CApveVKEP3Q';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v10',
        center: [<?php echo $lng ?>,<?php echo $lat ?>],
        zoom: 9,
        bearing: 180,
        });
        
    
       
        var marker = new mapboxgl.Marker();
        //marker.setLngLat([90.4074,23.7104]);
      
        marker.setLngLat([<?php echo $lng ?>,<?php echo $lat ?>]);
        //.setLngLat([])
        marker.setPopup(new mapboxgl.Popup().setHTML("<p>great to see<h1><?php echo $lat ?></h1></p>"));
        marker.addTo(map);

     
        
        
       

        </script>
        
    </body>
</html>