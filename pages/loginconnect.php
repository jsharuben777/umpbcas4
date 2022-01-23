<?php

	$email = $_POST['email'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','umpbcas2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login_user(email, password) values(?, ?)");
		$stmt->bind_param("ss", $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Verified . Log in successfull" ;
        
		$stmt->close();
		$conn->close();
	}
?>

<a href = "http://localhost/umpbcas2/pages/homepage.php"><button>Homepage </button></a>