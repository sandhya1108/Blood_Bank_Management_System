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
                        <h1>Stoke Blood List</h1>
                        <center>
                        <div id="form">
                            <table>
                            <tr>
                                <td><center><b><font color="blue">Name</font></b></center></td>
                                <td><center><b><font color="blue">Quantity</font></b></center></td>
                            </tr>
                            <tr>
                                <td><center>A+</center></td>
                                <td><center>
                                <?php
                                    $q=mysqli_query($db,"SELECT * FROM donor_registration WHERE bgroup='A+'");
                                    echo mysqli_num_rows($q);
                                    ?>
                                </center></td>
                            </tr>
                            <tr>
                                <td><center>A-</center></td>
                                <td><center>
                                <?php
                                    $q=mysqli_query($db,"SELECT * FROM donor_registration WHERE bgroup='A-'");
                                    echo mysqli_num_rows($q);
                                    ?>
                                </center></td>
                            </tr>
                            <tr>
                                <td><center>B+</center></td>
                                <td><center>
                                <?php
                                    $q=mysqli_query($db,"SELECT * FROM donor_registration WHERE bgroup='B+'");
                                    echo mysqli_num_rows($q);
                                    ?>
                                </center></td>
                            </tr>
                            <tr>
                                <td><center>B-</center></td>
                                <td><center>
                                <?php
                                    $q=mysqli_query($db,"SELECT * FROM donor_registration WHERE bgroup='B-'");
                                    echo mysqli_num_rows($q);
                                    ?>
                                </center></td>
                            </tr>
                            <tr>
                                <td><center>O+</center></td>
                                <td><center>
                                    <?php
                                    $q=mysqli_query($db,"SELECT * FROM donor_registration WHERE bgroup='O+'");
                                    echo mysqli_num_rows($q);
                                    ?>
                                </center></td>
                            </tr>
                            <tr>
                                <td><center>O-</center></td>
                                <td><center>
                                <?php
                                    $q=mysqli_query($db,"SELECT * FROM donor_registration WHERE bgroup='o-'");
                                    echo mysqli_num_rows($q);
                                    ?>
                                </center></td>
                            </tr>
                            <tr>
                                <td><center>AB+</center></td>
                                <td><center>
                                <?php
                                    $q=mysqli_query($db,"SELECT * FROM donor_registration WHERE bgroup='AB+'");
                                    echo mysqli_num_rows($q);
                                    ?>
                                </center></td>
                            </tr>
                            <tr>
                                <td><center>AB-</center></td>
                                <td><center>
                                <?php
                                    $q=mysqli_query($db,"SELECT * FROM donor_registration WHERE bgroup='AB-'");
                                    echo mysqli_num_rows($q);
                                    ?>
                                </center></td>
                            </tr>
                    
                            
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