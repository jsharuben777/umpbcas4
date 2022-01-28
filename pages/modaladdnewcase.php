<?php
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
		$stmt = $conn->prepare("insert into detectiondata(Day,Month,Year,Cyber_Attack_Details,Time,Status,Threat_Level,Description) values(?, ?, ?, ?,?, ?, ?, ?)");
		$stmt->bind_param("ssssssss", $Day,$Month,$Year,$Cyber_Attack_Details,$Time,$Status,$Threat_Level,$Description);
		$execval = $stmt->execute();
		echo $execval;
		echo "Data added successfully " ;
        
		$stmt->close();
		$conn->close();
	}
?>

<a href = "http://localhost/umpbcas2/pages/analytics.php?quarter=1"><button>View Case List </button></a>