<?php

	$area = $_GET["address"];

	$lat = $_GET["lat"];

	$lng = $_GET["long"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO locations VALUES ( '', '$area', '$lat','$lng' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> area = $area <br> lat = $lat";



	echo "<p><a href=read.php>READ all records</a>";


?>