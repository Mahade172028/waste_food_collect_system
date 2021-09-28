


<?PHP 
    require_once 'db_connect.php';
    session_start();
    include "navbar.php";
    ?>
     <link rel="stylesheet" href="css/style.css">
     <?php
        $username = $_SESSION['username'];
        $result = mysqli_query($db, "SELECT * FROM post WHERE username ='$username' ");
?>
<?php
?>

<?php
while($data = mysqli_fetch_array($result))
{

    ?>
<div class="column">
<img src="<?php echo $data['imagename']; ?>" width="400" height="300">
<p><?php echo $data['post']; ?></p>  </div>


<?php
} 
?>
