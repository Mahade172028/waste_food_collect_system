<?php 
$con= mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}
else{
	echo "No connection";
}
?>