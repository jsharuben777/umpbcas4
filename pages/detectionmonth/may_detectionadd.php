<?php


    $dataid = $_POST['dataid'];
	$Day = $_POST['Day'];
	$Month = $_POST['Month'];
    $Year = $_POST['Year'];
    $Cyber_Attack_Details = $_POST['Cyber_Attack_Details'];
    $Time = $_POST['Time'];
    $Status = $_POST['Status'];
    $Threat_Level = $_POST['Threat_Level'];
    $Description = $_POST['Description'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','umpbcas2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into may_detectiondata (dataid ,Day,Month,Year,Cyber_Attack_Details,Time,Status,Threat_Level,Description) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssss", $dataid, $Day, $Month, $Year , $Cyber_Attack_Details,$Time,$Status,$Threat_Level,$Description);
		$execval = $stmt->execute();
		echo $execval;
		echo "Verified . Data added successfull" ;
        
		$stmt->close();
		$conn->close();
	}
?>

<a href = "http://localhost/umpbcas2/pages/detectionmonth/may_detectiondata.php"><button>Back </button></a>