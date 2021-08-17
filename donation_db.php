<?php 
$con= mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}
else{
	echo "No connection";
}
mysqli_select_db($con, 'donation');
$name = $_POST['name'];
$contact = $_POST['contact'];
$amount = $_POST['amount']

$query="insert into donation_table (name, contact, amount) values('$name', '$contact', '$amount')";

mysqli_query($con, $query);
header('location:');
?>