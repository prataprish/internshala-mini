<?php

function getTitleList(){

	$con = mysqli_connect("localhost","root","","internshala");
	$sql = "SELECT DISTINCT UPPER(title) as title from internships";
	$result = $con->query($sql);
	while($row = $result->fetch_assoc())
	{
		echo '<option value="'.$row['title'].'">';
	}
}

function getApplications(){

	$con = mysqli_connect("localhost","root","","internshala");
	$sql = 'SELECT internship_id,status from applications where username="'.$_SESSION['username'].'"';
	$result = $con->query($sql);
	while($row = $result->fetch_assoc())
	{
		$sql = 'SELECT * from internships where internship_id='.$row["internship_id"].'';
		$result1 = $con->query($sql);
		if(!empty($result1)){
		$row1 = $result1->fetch_assoc();

		echo '<tr>
		<td>'.$row1["title"].'</td>
		<td>'.$row1["employer"].'</td>
		<td>'.$row["status"].'</td>
		</tr>';
	}
	}
}

function getApplicants(){

	$con = mysqli_connect("localhost","root","","internshala");
	$sql = 'SELECT title,internship_id from internships where employer="'.$_SESSION['username'].'"';
	$result = $con->query($sql);
	while($row = $result->fetch_assoc())
	{
		$sql = 'SELECT * from applications where internship_id='.$row["internship_id"].'';
		$result1 = $con->query($sql);
		if(!empty($result1)){
		while($row1 = $result1->fetch_assoc())
		echo '<tr>
		<td>'.$row["title"].'</td>
		<td>'.$row1["username"].'</td>
		<td>'.$row1["status"].'</td>
		</tr>';
	}
	}
}

?>