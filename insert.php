<?php
//connecting to the database
define("servename","localhost");
define("username","root");
define("password","");
define("db","waterlevel");

$con = mysqli_connect(servename,username,password,db);


$level=$_GET['tank_level'];

$sql = "INSERT INTO tank (tank_level)
VALUES ('$level')";

if (mysqli_query($con, $sql)) 
echo "New record created successfully";
?>
