<link rel="stylesheet" type="text/css" href="/test3/font-awesome-4.7.0/css/font-awesome.css">
<?php
 session_start();
 if( $_SERVER['REQUEST_METHOD'] == 'POST') {
 	include('/inc/conn.php');
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$user = mysqli_fetch_assoc( mysqli_query( $conn , "SELECT * FROM account WHERE username ='$username' and password='$password'"));
 	if($user){
 		$_SESSION['user'] = $user['user_name'];
 		header('location:index.php');
 		die;

 	}else{
 		?>
 	<h1 style="color: red; font-family: cursive;">
 		<?php
 		echo "incorrect username or password" ;
 		?>
 	</h1>
<?php
 	}
 }
 ?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleforlogin.css">
	<title >Login to the system</title>
</head>
<body>
  <form method="POST">
  	<div class="Login">
  		<h1>Login</h1>
 	<input type="text" name="name" placeholder="username"> <br>
 	<input type="password" name="pass" placeholder="password">
 	<br>
 	<button type="submit"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
  	</div> </br>

  </form>
</body>
</html>
