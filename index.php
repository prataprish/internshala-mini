<?php session_start(); session_destroy(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Intershala</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/script.js" ></script>
</head>


<body>
<?php require_once 'scripts/conn.php'; ?>
<?php require_once 'scripts/functions.php'; ?>
<div class="wrapper">
	<div class="row text-center">
			<img id="internshala_logo" class="col-xs-6 col-lg-2" onclick="home()" src="img/internshala_logo.png">
			<button class="col-xs-5 col-lg-1 btn btn-primary" onclick="login()">LOGIN</button>
			<button class="col-xs-5 col-lg-1 btn btn-default" onclick="register()">REGISTER</button>
	</div>
	<div class="container">
		<div class="text-center h1">
			<em>Intern</em> now! Just a search away!
		</div>
		<div class="text-center h1 search_bar">
			<div class="">
				<div class="col-xs-8 col-lg-6 col-lg-offset-3 col-xs-offset-2 input-group">
					<input type="text" class="form-control" list="title_list" placeholder="Ex. Android,Web Development etc." id="search_for_internship" >
					<datalist id="title_list">
						<?php getTitleList(); ?> 
					</datalist>
					<span class="input-group-btn">
						<button class="btn btn-success" onclick="quickSearch()">GO!</button>
					</span>
                    </datalist>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		
	</div>
	
</div>

</body>
</html>