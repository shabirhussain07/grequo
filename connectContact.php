<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','contact1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name,email,message) 
		  values(?, ?, ?)");
		$stmt->bind_param("sss",$name,$email,$message);
		$stmt->execute();
		echo "Your Message has been sent successfully!";
		$stmt->close();
		$conn->close();
	}
?>