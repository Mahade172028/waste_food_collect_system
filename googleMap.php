<?php

$lng=$_GET['lng'];
$lat =$_GET['lat'];

?>




<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
       
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="index.js"></script>

        <style>
            .navr{
               
            }
        </style>

    </head>
    <body>
        <div class="navr"><h1 onclick="initMap()">Here Your Location</h1> <a href="index.html"> Go Back</a></div>
        
        <div id='map' style='width: 50%; height: 50%;'></div>

        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4NNKHqB2TmWBmj4nvgy58TGeF4aWseB0&callback=initMap&v=weekly"
        async
        >
    </script>
    <script>
         var a=<?php echo $lng ?>;
        var b=<?php echo $lat ?>;
        
        </script>
        
        
    </body>
</html>