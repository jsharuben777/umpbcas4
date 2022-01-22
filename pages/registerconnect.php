<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','umpbcas2');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register_user(firstName, lastName, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $firstname, $lastname,$email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfull" ;
        
		$stmt->close();
		$conn->close();
	}
?>

<a href = "http://localhost/umpbcas2/pages/loginform.php"><button>Log in </button></a>