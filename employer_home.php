<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Intershala</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/script.js" ></script>
</head>


<body>
<?php require_once 'scripts/conn.php'; ?>
<?php require_once 'scripts/functions.php'; ?>

<script type="text/javascript">
	
</script>

<div class="wrapper">
	<div class="row text-center">
			<img id="internshala_logo" class="col-xs-6 col-lg-2" onclick="home()" src="img/internshala_logo.png">
			<button class="col-xs-5 col-lg-1 btn btn-primary" onclick="login()">LOGOUT</button>
	</div>
	
	<div class="article">
		<ul class="nav nav-tabs">
  			<li class="active"><a data-toggle="tab" onclick="$(location).attr('href','employer_home.php')" href="#applied">Applicants</a></li>
  			<li ><a data-toggle="tab" onclick="showAll()" href="#post">Post New</a></li>
		</ul>
	<div class="tab-content">
  		<div id="applied" class="tab-pane fade in active"><br>
  		  	<table class="table table-striped">
  		  		<thead>
  		  			<tr>
  		  				<td>Title</td>
  		  				<td>Student</td>
  		  				<td>Status</td>
  		  			</tr>
  		  		</thead>
  		  		<tbody>
  		  			<?php getApplicants() ?>
  		  		</tbody>
  		  	</table>
 		</div>
 		<div id="post" class="tab-pane fade">
   			<div class="new_internship">
   				<h3>POST NEW</h3>
   				<form method="post">
   				Job Title: <input type="text" id="int_title" placeholder="Ex. Android, Web Development Etc.">
   				Job Description: <input type="text" id="desc" placeholder="Explain job in breif">
   				Start Date: <input type="date" id="start-date" placeholder="Start Date(YYYY-MM-DD)">
   				Apply By: <input type="date" id="apply-by" placeholder="Apply By(YYYY-MM-DD)">
   				Stipend Amount<input type="number" id="int_stipend" placeholder="in INR">
   				<button class="btn btn-defualt btn-lg col-lg-offset-3 col-lg-6" onclick="post()">Post</button>	
   				</form>
   			</div>
  	 	</div>
	</div>
	</div>
</div>
<style type="text/css">
	.article{
		margin:3% 5%;
	}
	#search_for_internship{
		margin: 30px 10px;
	}
	.container{
		background: white;
	}
	.new_internship{
		margin: 3% 20%;
		padding: 5%;
		padding-top: 3%;
		border: 1px solid #ddd;
		border-radius: 10px;
	}
	.new_internship > form > input {
		background: #fff;
		color: #000;
	}

</style>
</body>
</html>