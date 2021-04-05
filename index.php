<?php	 
 $conn = pg_connect("host=ec2-52-21-252-142.compute-1.amazonaws.com dbname=dcle2fpc522se2 user=fmneqfpwrsmfic password=f2f4b403db219824f6af70a62a6cd17f982167cdc23ef004cf3ed53e403f98f4 port=5432");
 if(!$conn){echo "Lost Connect";}
 if(isset($_POST['login'])){
	$username = $_POST['username'];
 	$password = $_POST['password'];
 	if ($username == "admin" && $password == "admin"){
		echo"ok";
	}
 }
		

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charsetwgtf-g">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	  	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<div class="container">
		<?php
			include("inc/header.php")
		?>
		<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    <a href="kpop.php">
		      <img class="d-block w-100" src="images/qc1.jpg" alt="First slide">
		  	</a>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<br>
	</div>
	<div class="container">
		<div class="col-xs-12 col-sm-8 col-md-12">
			<h2 style="background-color: black; font-size: 23px; color: white; padding: 10px;">Best sales</h2>
		</div>
	</div>
	<div class="hot-singer container col-xs-12 col-xs-12 navbar" style="background-color:white;">
			<h3 style="display: none;"></h3>
	</div>
<footer id="sticky-footer" class="py-3 bg-dark text-white-50 container">
    <div class="text-center">
      <small>Get toy to everyone</small>
    </div>
  </footer>
</body>
</html>
