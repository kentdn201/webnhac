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
</body>
</html>
