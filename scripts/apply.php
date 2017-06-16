<?php

$con = mysqli_connect("localhost","root","","internshala");
$username = $_POST['username'];
$id = $_POST['internship_id'];

	$sql = 'select username from applications where username="'.$username.'" and internship_id='.$id.'';
	$result = $con->query($sql);

	$row = $result->fetch_assoc();

if(!empty($row))
	echo "ALREADY APPLIED!";
else{
	$sql = 'insert into applications values("'.$id.'","'.$username.'","A")';
	$con->query($sql);
	echo "SUCCESSFUL";
}


?>