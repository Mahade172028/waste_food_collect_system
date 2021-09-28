<?php
require_once 'db_connect.php';
include "navbar.php";

session_start();
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['post'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    $post     = $_POST['uploadtext']; 
    $username = $_SESSION['username'];
    $folder   = $filename;

        // Get all the submitted data from the table
        $sql = "INSERT INTO post (username,imagename,post) VALUES ('$username','$filename','$post')";

        // Execute query
        mysqli_query($con, $sql);
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Your post uploaded successfully";
        }else{
            $msg = "Failed to upload post";
    }
} 
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Post</title>
</head>
<body>

<div id="content">
    

<form method="POST" action="" enctype="multipart/form-data">
    <p><?php echo $msg ?></p>
    <input type="file" name="uploadfile" value=""/>
    <input type="textarea" name ="uploadtext" value =""/>
        
    <div>
        <button type="submit" name="post">UPLOAD Post</button>
        </div>
</form>
<form method="POST" action="view.php" enctype="">
    <button>View Post</button>
</form>
</div>

</body>
</html>
