<!DOCTYPE html>
<html>
<head>
	<title></title>
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
			require_once("inc/conn.php");
		
			include('inc/header.php');

			$timkiem ="";
			if( !empty($_GET['s']))
			{
				$timkiem = $_GET['s'];
			}
		?>
		<div>
				<h3 class="title">The search results show: <?= $timkiem ?></h3>

				<?php 
					if( !empty( $timkiem)){
						$rs = pg_query( $conn , "SELECT * FROM product WHERE name LIKE '%{$timkiem}%'");
						while ( $row = pg_fetch_assoc( $rs)) {
						?>
						<a href="single-product.php?id=<?php echo $row['productid']?>" class="product">
							<div class="product-image"><img src="images/<?php echo $row['image']?>"></div>
							<h2 class="product-title"><?php echo $row['name']?></h2>
							<p><?php echo $row['type']?></p>
							<p><?php echo $row['price']?></p>
						</a>
				<?php
					}

				}
				?>
			</div>
		</div>
	</div>
<footer>
	<div class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="index.php">Homepage</a></li>
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
                        <h3>ATN Store</h3>
                        <p>This website selling products about toys</p>
                    </div>
                    <div class="col item social"><a href="facebook.com"><i class = "fab fa-facebook-f"></i></a><a href="facebook.com"><i class = "fab fa-facebook-f"></i></a></a><a href="facebook.com"><i class = "fab fa-facebook-f"></i></a><a href="instagram.com"><i class = "fab fa-whatsapp"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2018</p>
            </div>
	</div>
  </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
