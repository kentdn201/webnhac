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
			require_once("inc/conn.php")
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
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/qc2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/qc4.jpg" alt="Third slide">
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
			<h2 style="background-color: black; font-size: 23px; color: white; padding: 10px;">Những bài hát mới nhất</h2>
			<?php
			if(!empty($_GET['page']))
		        {
		          $page=$_GET['page']-1;
		        }
		        else
		        {
		          $page =0;
		        }
    			//$page = !empty($_GET['page']) ? ($_GET['page'] - 1): 0 ; //lay page hien tai
      			$product_per_page = 4; //1 trang 3 sp 
      			$offset = $product_per_page * $page; //offset chinh la phan can bo qua 
		      $sql = "SELECT * FROM music LIMIT $offset,$product_per_page ";
		      $rs = mysqli_query($conn, $sql);

		      if(mysqli_num_rows($rs) > 0 ){
		        while( $row = mysqli_fetch_assoc($rs) ){
		      ?>
		      	<div>
			        <a href="single-product.php?id=<?php echo $row['id']?>" class="product">
			            <div class="product-image"><img src="images/<?php echo $row['anh'] ?>" /></div>
			            <h2 class="product-title"><?php echo $row['name'] ?></h2>
			            <p><?php echo $row['casi']?></p>
	 				</a>
 				</div>
		    <?php 

		        }//end while 

		      }//check so hang tra ve > 0 

		?>
		</div>
	</div>
	<div class="hot-singer container col-xs-12 col-xs-12 navbar" style="background-color:white;">
			<h3 style="display: none;">Most Popular Singer</h3>
	</div>
<footer id="sticky-footer" class="py-3 bg-dark text-white-50 container">
    <div class="text-center">
      <small>Get music to everyone</small>
    </div>
  </footer>
</body>
</html>