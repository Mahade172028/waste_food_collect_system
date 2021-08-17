<html>
<head>
    <style>
           body{
               color:green;
               margin:15% 20% 50% 30%;
               background-color:gray;
               
           }
           table{
               width:80%
           }
    </style>
</head>
<body style="bgcolor:green;">
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM locations" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>Area</th> <th>Delete</th> <th>Map view</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $area </td>";
		echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'single_map.php?id=$id&lat=$lat&lng=$lng'> View </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=index.html>CREATE a new record</a>";
?>
</body>
</html>