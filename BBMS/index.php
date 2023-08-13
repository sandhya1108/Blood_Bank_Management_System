<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/s2.css">
    <title>Admin Login</title>
    <style>
       
        ul{
            display:inline;
            float:right;
        }
        li{
            list-style-type:none;
            display:inline;
            margin-right:10px;
        }
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

            <span style="font-size:30px;margin-left:60px;margin-top:30px;font-style:bold;">Blood Bank Management System</span>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Login</a></li>
                <li><a href="signup.php">SignUp</a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
        </div>
        <div id="body" >
            <br><br><br><br><br>
            <form action="" method="post">
                <table align="center">
                    <tr>
                        <td width="150px" height="70px"><b>Enter Username : </b></td>
                        <td width="150px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width:180px; height:30px;border-radius:10px"></td>
                    </tr>
                    <tr>
                        <td width="150px" height="70px"><b>Enter password : </b></td>
                        <td width="150px" height="70px"><input type="password" name="ps" placeholder="Enter password" style="width:180px; height:30px;border-radius:10px"></td>
                    </tr> 
                    
                </table>
                <input type="submit" onClick="login" name="log" value="Login" style="width:70px;height:30px; border-radius:5px;margin-left:650px;">
                <br><br><labels style="margin-left:530px;">Do not have account?        <label><a href="signup.php" style="color:red">Signup</a>
            </form> 
        </div>
        
    </div>
    <div id="footer" style="height:50px;">
                <h4 align="center">Copyright@myproject</h4>
        </div>
        
</div>
<script>
    function login(){
        <?php
        if(isset($_POST['log'])){
                $un=$_POST['un'];
                $ps=$_POST['ps'];
                $q=mysqli_query($db,"SELECT * FROM admin_lr WHERE uname='$un' AND password='$ps'");
                if(mysqli_num_rows($q)>0){
                    $_SESSION['un']=$un;
                    header("Location:admin-home.php");
                }
                
            }
           
            
        ?>
    }
        
        
    </script>
        
       
   
    
</body>
</html>