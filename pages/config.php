<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydatabase";

// Create connection 
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
$date = $_POST['date'];
$cyberattackdetails = $_POST['cyberattackdetails'];
$time = $_POST['time'];
$status = $_POST['status'];
$threatlevel = $_POST['threatlevel'];

if(mysql_query( "INSERT INTO ca_detectiondatas(date,cyberattackdetails,time,status,threatlevel) VALUES('$date', 
'$cyberattackdetails', '$time', '$status', '$threatlevel')"));
}
?>
