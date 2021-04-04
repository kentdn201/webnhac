<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="./css/signup.css">
</head>
<body>
		<style>
		body{
			background: url('images/anhlogin.jpg');
			background-size: cover;
		}
	</style>
	<?php include("inc/conn.php")?>
	<?php
		    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = " INSERT INTO taikhoan( username, password) VALUES (?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param( $stmt, "ss",$username, $password);

            //s = string
            // d = double
            // i = interger
            if( mysqli_stmt_execute( $stmt )){
            echo "Sign Up Success";
            }else{
            echo "Error: ". mysqli_error($conn);
            }
          }
	?>
	<div class="container">
		<div class="row justify-content-center" id="main">
			<div class="col-xs-12 col-md-8 col-sm-8 row-container" style="margin-top: 210px;">
				<form method="POST">
					<h2 style="text-align: center;">Sign Up</h2>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" placeholder="Enter Usename Here" name="username" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Enter Password Here" name="password" required>
					</div>
					<a href="login.php">If you have account Login here.</a><br><br>
					<button type="submit" class="btn btn-danger btn-block">Sign Up</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>