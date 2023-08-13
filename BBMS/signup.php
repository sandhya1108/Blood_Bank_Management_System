<?php
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/s3.css">
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
            <h1 align="center">Blood Bank Management System</h2>
        </div>
        <div id="body">
            <br><br><br><br><br>
            <form action="" method="post">
                <table align="center">
                    <tr>
                        <td width="150px" height="70px"><b>Enter Username : </b></td>
                        <td width="150px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width:180px; height:30px;border-radius:10px"></td>
                    </tr>
                    <tr>
                        <td width="150px" height="70px"><b>Enter password : </b></td>
                        <td width="150px" height="70px"><input type="text" name="ps" placeholder="Enter password" style="width:180px; height:30px;border-radius:10px"></td>
                    </tr> 
                    <tr>
                        <td width="150px" height="70px"><b>Enter Address: </b></td>
                        <td width="150px" height="70px"><input type="text" name="city" placeholder="Enter city" style="width:180px; height:30px;border-radius:10px"></td>
                    </tr> 
                    <tr>
                        <td width="150px" height="70px"><b>Enter Phone number: </b></td>
                        <td width="150px" height="70px"><input type="number" name="pn" placeholder="Enter phonenum" style="width:180px; height:30px;border-radius:10px"></td>
                    </tr> 
                    
                    
                </table>
                <input type="submit" onClick="signup" name="sign" value="SignUp" style="width:70px;height:30px; border-radius:5px;margin-left:650px;">

                
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
        if(isset($_POST['sign'])){
                $un=$_POST['un'];
                $ps=$_POST['ps'];
                $city=$_POST['city'];
                $pn=$_POST['pn'];
                $q=mysqli_query($db,"INSERT INTO admin_lr (`id`, `uname`, `password`, `city`, `phn_no`) VALUES (NULL, '$un', '$ps', '$city', '$')");
                if($q){
                    header("Location:admin-home.php");
                }
                else{
                    header("Location:index.php");
                }
            }
            ?>
        }
        
    </script>
       
   
    
</body>
</html>