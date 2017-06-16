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
	
    
    function showAll(){
    	$.ajax(){
    		url: "scripts/search.php",
    		type: "POST",
    		data:{},
    		success:function(res){
                 alert(res);
    		}
    	}
    }

</script>

<div class="wrapper">
	<div class="row text-center">
			<img id="internshala_logo" class="col-xs-6 col-lg-2" onclick="home()" src="img/internshala_logo.png">
			<button class="col-xs-5 col-lg-1 btn btn-primary" onclick="login()">LOGOUT</button>
	</div>
	
	<div class="article">
		<ul class="nav nav-tabs">
  			<li class="active"><a data-toggle="tab" onclick="$(location).attr('href','student_home.php')" href="#applied">Applied</a></li>
  			<li ><a data-toggle="tab" onclick="showAll()" href="#available">Available</a></li>
		</ul>
	<div class="tab-content">
  		<div id="applied" class="tab-pane fade in active"><br>
  		  	<table class="table table-striped">
  		  		<thead>
  		  			<tr>
  		  				<td>Title</td>
  		  				<td>Employer</td>
  		  				<td>Status</td>
  		  			</tr>
  		  		</thead>
  		  		<tbody>
  		  			<?php getApplications() ?>
  		  		</tbody>
  		  	</table>
 		</div>
 		<div id="available" class="tab-pane fade">
   				<div class="col-xs-8 col-lg-6 col-lg-offset-3 col-xs-offset-2 input-group">
   				<input type="text" class="form-control" list="title_list" placeholder="Ex. Android,Web Development etc." id="search_for_internship" >
				<datalist id="title_list">
					<?php getTitleList(); ?> 
				</datalist>
				<span class="input-group-btn">
					<button class="btn btn-success" onclick="quickSearch()">GO!</button>
				</span>
				</div>
				<div class="container">
					
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
</style>
</body>
</html>