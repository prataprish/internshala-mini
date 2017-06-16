<?php

$con = mysqli_connect("localhost","root","","internshala");
$username = $_POST['username'];
$password = $_POST['password'];

	$sql = 'select username,account from users where username="'.$username.'" and password="'.$password.'"';
	$result = $con->query($sql);

	$row = $result->fetch_assoc();


if(empty($row))
	echo "INVALID DETAILS";
else{
	session_start();
	echo $row['account'];
	$_SESSION['username']=$username;
}


?>