<?php
   
   $id=$_GET['id'];

   error_reporting(0);
   require_once('db_connect.php');

   $link = mysqli_connect( HOST, USER, PASS, DB )

       or die("Can not connect");
	
	$status = 'OK';
	$content = [];

	if (mysqli_connect_errno()) {
		$status = 'ERROR';
		$content = mysqli_connect_error();
	}

	$query = "SELECT * FROM locations WHERE id=$id";

	if ($result = mysqli_query($link, $query)) {
	/* fetch associative array */
	while ($row = mysqli_fetch_assoc($result)) {
		$content[] = $row; // push value to array
		}
    }

    $data=["status"=>$status,"content"=>$content];
    header('Content-type: application/json');
    echo json_encode( $data );


?>