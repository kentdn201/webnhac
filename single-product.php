<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charsetwgtf-g">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/single-product.css">
</head>
<body>
<div class="container">
	<?php
	require_once("inc/conn.php");
	include("inc/header.php")
?>
</div>
	<div class="container">
		<div class="single-product">
				<?php 
					$id = $_GET['id'];

					$sql = "SELECT * FROM proeduct WHERE id = {$id}";
					$rs = mysqli_query($conn, $sql);

					while ( $row = mysqli_fetch_assoc($rs) ){
						?>
						<div class="single-product">
							<div class="product-image"><img src="images/<?php echo $row['anh']?>"></div>
							<h2 class="product-title"><?php echo $row['name']?></h2>
							<p><?php echo $row['casi']?></p>
							<p><?php echo $row['price'] . "$"?></p>
							<audio id='audio_1' controls preload loop controlsList="nodownload">
		 						<source src='music/<?php echo $row['file']?>'/>
		 					</audio>
                            <br>
                            <a href="buy-success.php?id=<?php echo $row['id']?>"><input type="submit" onclick="alert('Buy Success')" class="btn btn-danger" value="Pay"></a>
							<div class="product-content">
								<?php echo $row['lyric']?>
							</div>
							

						<!-- end product content -->

						<?php
							}
						?>	

					</div>
		</div>
	</div>
</div>
</body>
</html>
