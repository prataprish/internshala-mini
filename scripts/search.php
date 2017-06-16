<?php
session_start();
if(empty($_SESSION['username'])){
$con = mysqli_connect("localhost","root","","internshala");
$search = $_POST['search'];
if(!empty($search))
	$sql = 'SELECT * from internships where title="'.$search.'" AND apply_by >= CURDATE()';
else
	$sql = 'SELECT * from internships AND apply_by >= CURDATE()';
$result = $con->query($sql);
while($row = $result->fetch_assoc()){
	echo 
	'<div class="application_box "">
	  <h3>'.$search.'</h3>
	  <h5><em>'.$row["employer"].'</em></h5>
	  <b>Start Date: </b>'.$row["start_date"].'<br>
	  <b>Apply By: </b>'.$row["apply_by"].'<br>
	  <b>Stipend: </b>'.$row["stipend"].'<br>
	  <button id="'.$row["internship_id"].'" onclick="apply()" class="application_button btn btn-success">Apply Now</button>
	</div>';
}}
else
{
$con = mysqli_connect("localhost","root","","internshala");
$search = $_POST['search'];
$username = $_SESSION['username'];
if(!empty($search))
	$sql = 'SELECT * from internships where title="'.$search.'" AND apply_by >= CURDATE()';
else
	$sql = 'SELECT * from internships AND apply_by >= CURDATE()';
$result = $con->query($sql);
while($row = $result->fetch_assoc()){
	echo 
	'<div class="application_box "">
	  <h3>'.$search.'</h3>
	  <h5><em>'.$row["employer"].'</em></h5>
	  <b>Start Date: </b>'.$row["start_date"].'<br>
	  <b>Apply By: </b>'.$row["apply_by"].'<br>
	  <b>Stipend: </b>'.$row["stipend"].'<br>
	  <button id="'.$row["internship_id"].'" data-user="'.$username.'" onclick="applyNow(this)" class="application_button btn btn-success">Apply Now</button>
	</div>';
}	
}

?>