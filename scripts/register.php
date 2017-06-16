<?php

$con = mysqli_connect("localhost","root","","internshala");
$username = $_POST['username'];
$password = $_POST['password'];
$acc_type = substr($_POST['acc_type'],0,1);

	$sql = 'select username from users where username="'.$username.'"';
	$result = $con->query($sql);

	$row = $result->fetch_assoc();

if(!empty($row))
	echo "USER NAME NOT AVAILABLE";
else{
	$sql = 'insert into users values("'.$username.'","'.$password.'","'.$acc_type.'")';
	$con->query($sql);
	echo "SUCCESS ".$acc_type;
	session_start();
	$_SESSION['username']=$username;
}


?>