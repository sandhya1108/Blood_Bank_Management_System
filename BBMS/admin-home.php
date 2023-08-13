<?php
    include("connection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/s3.css">
    <title>Document</title>
    <style>
          #body{
  background-image: url("bg.jpg");
  background-repeat: repeat;
}
    
        </style>
</head>
<body>
        <div id="full">
                <div id="innier-full">
                    <div id="header">
                        <h2><a href="admin-home.php">Blood Bank Management System</a></h2>
                    </div>
                    <div id="body">
                        <br>
                        <?php
                        $un=$_SESSION['un'];
                        if(!$un){
                            header("Location:index.php");
                        }
                        ?>
                        <h1>Welcome to admin page</h1>
                        <ul class='ul'>
                            <li class="li"><a href="donar-red.php">Donar Registration</li>
                            <li class="li"><a href="donar-list.php">Donar List</li>
                            <li class="li"><a href="stoke-blood-list.php">Stock Blood List</li>
                        </ul>
                    </div>
                </div>
                
        </div>
        <div id="footer" style="height:65px;">
        
            <p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
            <h4 align="center">Copyright@myproject</h4>
        </div>
    
</body>
</html>