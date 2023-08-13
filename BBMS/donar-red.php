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
    <title>donor_registration</title>
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
                    <h1>Blood Bank Management System</h1>
                </div>
                    <div id="body">
                        <br>
                        <?php
                        $un=$_SESSION['un'];
                        if(!$un){
                            header("Location:index.php");
                        }
                        ?>
                        <h1>Donor Registration</h1>
                        <center>
                        <div id="form">
                            <form action="" method="post">
                            <table>
                                <tr>
                                    <td width="150px" height="70px">Enter name  :</td>
                                    <td width="150px" height="70px" ><input type="text" name="name" placeholder="Enter name"></td>
                                    <td width="150px" height="70px">Enter father`s name  :</td>
                                    <td width="150px" height="70px"><input type="text" name="fname" placeholder="Enter father name"></td>
                                </tr>
                                <tr>
                                    <td width="150px" height="70px">Enter Address  :</td>
                                    <td width="150px" height="70px"><textarea name="address"></textarea></td>
                                    <td width="150px" height="70px">Enter city  :</td>
                                    <td width="150px" height="70px"><input type="text" name="city" placeholder="Enter city"></td>
                                    
                                </tr>
                                <tr>
                                    <td width="150px" height="70px">Enter Age  :</td>
                                    <td width="150px" height="70px"><input type="text" name="age" placeholder="Enter Age"></td>
                                    <td width="150px" height="70px">Select Blood group  :</td>
                                    <td width="150px" height="70px">
                                        <select name="bgroup">
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B+</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                        </select>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td width="150px" height="70px">Enter E-Mail  :</td>
                                    <td width="150px" height="70px"><input type="email" name="email" placeholder="Enter email"></td>
                                    <td width="150px" height="70px">Enter Mobile Number  :</td>
                                    <td width="150px" height="70px"><input type="number" name="mno" placeholder="Enter Mobile number"></td>
                                    
                                </tr>
                                <tr><td><input type="submit" name="sub" value="save"></td></tr>
                    </table>
                    </form>
                    <?php
                    if(isset($_POST['sub'])){
                        $name=$_POST['name'];
                        $fname=$_POST['fname'];
                        $address=$_POST['address'];
                        $city=$_POST['city'];
                        $age=$_POST['age'];
                        $bgroup=$_POST['bgroup'];
                        $email=$_POST['email'];
                        $mno=$_POST['mno'];
                        $query= "INSERT INTO donor_registration(name,fname,address,city,age,bgroup,email,mno) VALUES('$name','$fname','$address','$city','$age','$bgroup','$email','$mno')";
                        $result=mysqli_query($db,$query);
                        if($result){
                            echo "<script>alert('Registration success')</script>";
                        }
                        else{
                            echo "<script>alert('Registration not done')</script>";

                        }
                    }
                    else{
                        echo "Not click";
                    }
                    ?>
                    </div>
                    </center>
                        
                    </div>
                    <div id="footer" style="height:65px;">
        
            <p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
            <h4 align="center">Copyright@myproject</h4>
        </div>
                </div>
                
        </div>
        
    
</body>
</html>