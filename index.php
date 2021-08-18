<?php
include_once 'dbconfig.php';
if(isset($_POST['create']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO userprofile (first_name,last_name,city_name,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "Your account created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="process.php">
		First name:<br>
		<input type="text" name="first_name">
		<br>
		Last name:<br>
		<input type="text" name="last_name">
		<br>
		City name:<br>
		<input type="text" name="city_name">
		<br>
		Email Id:<br>
		<input type="email" name="email">
		<br><br>
		<input type="submit" name="create" value="create">
		<input type="button" onclick="myFunction()" value = "View Info">
	</form>
	<script>
		function myFunction(){
			window.location.href="profileinfo.php"; 
		}
	</script>
  </body>
</html>