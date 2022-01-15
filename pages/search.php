<?php
$getquarter  = $_GET['quarter'];
$searchkeyword = $_GET['searchkeyword'];


if ($getquarter == 1) {
    $quarter = "('JAN','FEB','MAR')";
} elseif ($getquarter == 2) {
    $quarter = "('APR','MAY','JUN')";
} elseif ($getquarter == 3) {
    $quarter = "('JULY','AUG','SEPT')";
} elseif ($getquarter == 4) {
    $quarter = "('OCT','NOV','DEC')";
} else {
}
$sql = "SELECT * FROM detectiondata WHERE Month IN $quarter AND
 Month LIKE '%$searchkeyword%' 
 OR Cyber_Attack_Details LIKE '%$searchkeyword%'  
      OR Time LIKE '%$searchkeyword%' 
      OR Status LIKE '%$searchkeyword%'
       OR Threat_Level LIKE '%$searchkeyword%' 
       ORDER BY month(str_to_date(Month, '%b')) ";


// this is to dump/echo/print_r all the data
// var_dump($sql);
// die;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "umpbcas2";
$conn = mysqli_connect($servername, $username, $password, $dbname);
      
$result = mysqli_query($conn, $sql);
$response = mysqli_fetch_assoc($result);
echo json_encode($response);
