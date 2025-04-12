<?php
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$conn = new mysqli('localhost','root','','cab');
if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into reg(email, pwd) values(?, ?)");
		$stmt->bind_param("ss", $email, $pwd);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfull";
		$stmt->close();
		$conn->close();
	}
?>