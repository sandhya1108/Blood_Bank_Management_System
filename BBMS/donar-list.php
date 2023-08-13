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
    <title>donor_list</title>
    <style>
        td{
            width:200px;
            height:40px;
        }

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
                        <h1>Donor List</h1>
                        <center>
                        <div id="form">
                            <table>
                            <tr>
                                <td><center><b><font color="blue">Name</font></b></center></td>
                                <td><center><b><font color="blue">Father Name</font></b></center></td>
                                <td><center><b><font color="blue">Address</font></b></center></td>
                                <td><center><b><font color="blue">City</font></b></center></td>
                                <td><center><b><font color="blue">Age</font></b></center></td>
                                <td><center><b><font color="blue">Blood Group</font></b></center></td>
                                <td><center><b><font color="blue">Email</font></b></center></td>
                                <td><center><b><font color="blue">Mobile Number</font></b></center></td>
                            </tr>
                            <?php
                            $q=mysqli_query($db,"SELECT * FROM donor_registration");
                            while($r=mysqli_fetch_assoc($q)){
                                ?>
                                <tr>
                                <td><center><?php echo $r['name']?></center></td>
                                <td><center><?php echo $r['fname']?></center></td>
                                <td><center><?php echo $r['address']?></center></td>
                                <td><center><?php echo $r['city']?></center></td>
                                <td><center><?php echo $r['age']?></center></td>
                                <td><center><?php echo $r['bgroup']?></center></td>
                                <td><center><?php echo $r['email']?></center></td>
                                <td><center><?php echo $r['mno']?></center></td>
                            </tr>
                            <?php

                            }
                            ?>
                            
                    </table>

                    
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