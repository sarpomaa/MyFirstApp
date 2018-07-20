<?php
$connect=mysqli_connect('localhost','root','root','db');

if ($connect->connect_error) {
	die("connection failed: ".$conn->connect_error);
	# code...
}

$firstname=$_POST['Firstname'];
$lastname=$_POST['Lastname'];
$email=$_POST['mail'];
$address=$_POST['password'];
$number=$_POST['city'];


$insertQuery=mysqli_query($connect,"INSERT INTO Clients (FirstName,LastName, Email, City) VALUES ('$firstname','$lastname', '$email', '$address', '$number')");
	if($insertQuery){
		echo "insert worked";
	}else{
		echo "insert failed".mysqli_error($connect);
	}

?>