<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

    #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}

</style>
<title>Image Upload</title>
<div id="userpost"></div>
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
    <button onclick="myFunction()">View Post</button>
</form>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
        <style type="text/css">

    #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}

</style>

<title>Post Upload</title>
<div id="userpost"></div>
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
