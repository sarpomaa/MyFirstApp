<?php
$connect=mysqli_connect('localhost','root','root','db');

if ($connect->connect_error) {
	die("connection failed: ".$conn->connect_error);
	# code...
}
echo "Connected successfully";


echo $username=$_POST['username'];
/*echo $lastname=$_POST['Last'];
echo $email=$_POST['mail'];
echo $address=$_POST['address'];
echo $number=$_POST['number'];*/


exit;
$insertQuery=mysqli_query($connect,"INSERT INTO try username VALUES '$username'");
	if($insertQuery){
		echo "insert worked";
	}else{
		echo "insert failed".mysqli_error($connect);
	}

?>