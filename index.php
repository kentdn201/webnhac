<?php	 
	$conn = pg_connect("host=ec2-52-21-252-142.compute-1.amazonaws.com dbname=dcle2fpc522se2 user=fmneqfpwrsmfic password=f2f4b403db219824f6af70a62a6cd17f982167cdc23ef004cf3ed53e403f98f4 port=5432");
	if(!$conn){echo "Lost Connect";}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ATN </title>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charsetwgtf-g">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<header>
	<div class="container">
		<?php
			include("inc/header.php");
		?>
	<header>
		<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
			<div class="container">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				    <a href=".">
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
			</div>
   		</div>
<main>
	<div class="products">
		<div class="container">
			<div class="col-xs-12 col-sm-8 col-md-12">
				<h2 style="background-color: black; font-size: 23px; color: white; padding: 10px;" class="container">Best sales</h2>
				<div>
					<?php
					$sql = "SELECT * FROM product LIMIT 4";
					$rs = pg_query($conn, $sql);
				      if(pg_num_rows($rs) > 0 ){
					while( $row = pg_fetch_assoc($rs) ){
				      ?>
					<a href="single-product.php?id=<?php echo $row['productid']?>" class="product">
						<div class="product-image"><img src="images/<?php echo $row['image']?>"></div>
						<h2 class="product-title"><?php echo $row['name']?></h2>
						<p><?php echo $row['type']?></p>
						<p><?php echo $row['price']?></p>
					</a>
					<a href="single-product.php?id=<?php echo $row['productid']?>" class="product">
						<div class="product-image"><img src="images/<?php echo $row['image']?>"></div>
						<h2 class="product-title"><?php echo $row['name']?></h2>
						<p><?php echo $row['type']?></p>
						<p><?php echo $row['price']?></p>
						
					</a>
					      <?php 

						    }//end while 

						    }//check so hang tra ve > 0 

					      ?>
				</div>
			</div>
		</div>
	</div>
</main>
<div class="hot-singer container col-xs-12 col-xs-12 navbar" style="background-color:white;">
			<h3 style="display: none;"></h3>
	</div>
<footer>
	<div class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class = "fab fa-facebook-f"></i></a><a href="#"><i class = "fab fa-facebook-f"></i></a></a><a href="#"><i class = "fab fa-facebook-f"></i></a><a href="#"><i class = "fab fa-whatsapp"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2018</p>
            </div>
	</div>
  </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
