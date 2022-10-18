<?php
	$Username = $_POST['Username'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	

	//Database Connection
	$conn = new mysqli('localhost','root','','vidyarthighar');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into users(Username,number,email,password,cpassword) values(?,?,?,?,?)");
		$stmt->bind_param("sisss",$Username,$number,$email,$password,$cpassword);
		$stmt->execute();
		echo "registration successful...."
		$stmt->close();
		$conn->close();
	}
?>