<?php
session_start();
	
	$conn = pg_connect("host=ec2-52-21-252-142.compute-1.amazonaws.com dbname=dcle2fpc522se2 user=fmneqfpwrsmfic password=f2f4b403db219824f6af70a62a6cd17f982167cdc23ef004cf3ed53e403f98f4 port=5432");
	if(!$conn){echo "Lost Connect";}
 if(isset($_POST['login'])){
	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$sql= "SELECT * FROM account WHERE username ='$username' and password='$password'";
	$result = pg_query($conn, $sql);
	$check = pg_num_rows($result);
	if($check == 1){
		session_start();
		$_SESSION['current'] = rand(1,100);
		header("Location:index.php");
	}else{
		echo" please try again";
	}
 }
		

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<style>
		body{
			background: url('images/anhlogin.jpg');
			background-size: cover;
		}
	</style>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xs-12 col-md-8 col-sm-8 row-container">
			<form method="post">
				<h2 style="text-align: center;">Login</h2>
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" placeholder="Enter Usename Here" name="username">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" placeholder="Enter Password Here" name="password">
				</div>
				<button type="submit" class="btn btn-danger btn-block" name="login">Login</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
