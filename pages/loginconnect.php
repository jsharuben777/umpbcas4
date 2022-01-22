
<?php 
session_start(); 
include "../pages/lib/db_config.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: staffLogin.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: staffLogin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM register_user WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
            	$_SESSION['email'] = $row['email'];
            	// $_SESSION['name'] = $row['name'];
            	$_SESSION['registerid'] = $row['registerid'];
            	header("Location: ../pages/homepage.php");
		        exit();
            }else{
				header("Location:../pages/loginincorrect.php");
		        exit();
			}
		}else{
			header("Location:../pages/loginincorrect.php");
	        exit();
		}
	}
	
}else{
	header("Location:../pages/loginform.php");
	exit();
}