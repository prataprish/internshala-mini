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
	</div>
	
	<div class="login" >
  <h1>LOGIN</h1><br>
  <hr>
    <form action="" method="POST" name="loginFirst">
      <input type="text" name="u" id="username" placeholder="Username" required="required" /><br>
        <input type="password" name="p" id="password" placeholder="Password" required="required" autocomplete="off" /><br>
        <input type="submit" name="login" value="Login" onclick="loginSuccess()" class="btn btn-primary btn-block btn-large"></input>
    <br><hr>
    <div class="res"><center>Forgot Password?</center></div>
    <div class="res"><center>New User? <a href="register.php">Register Now</a></center></div>
    <br>
   <center> <div class="loginError"><?php  ?></div></center>
    </form>
    
    

 </div>
	
</div>

<script type="text/javascript">
   


</script>

</body>
</html>