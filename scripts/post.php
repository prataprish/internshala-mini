<?php
session_start();

$con = mysqli_connect("localhost","root","","internshala");
$title = $_POST['title'];
$sdate = $_POST['sdate'];
$adate = $_POST['adate'];
$stipend = $_POST['stipend'];
$desc = $_POST['desc'];
$employer = $_SESSION['username'];


	$sql = 'select max(internship_id) as id from internships';
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$id = $row['id']+1;
	$sql = 'insert into internships values("'.$title.'","'.$desc.'","'.$employer.'","'.$id.'","'.$sdate.'","'.$adate.'",'.$stipend.') ';
    $con->query($sql);
    echo "POSTED;";

?>