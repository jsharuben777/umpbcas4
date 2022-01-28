<?php
$id = $_GET["id"];

if (!empty($id)) {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "umpbcas2";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT* FROM detectiondata WHERE ID = $id";
    mysqli_query($conn, $sql);
}
