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
  	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
    	<link rel="stylesheet" href="style.css">
    	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<div class="container">
		<?php
			include("inc/header.php");
		?>
		<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
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
		<br>
	</div>
	<div class="container">
		<div class="col-xs-12 col-sm-8 col-md-12">
		<h2 style="background-color: black; font-size: 23px; color: white; padding: 10px;">Best sales</h2>
		<?php
			//if(!empty($_GET['page']))
		      //  {
		      //    $page=$_GET['page']-1;
		      //  }
		       // else
		       // {
		       //   $page =0;
		      //  }
    			//$page = !empty($_GET['page']) ? ($_GET['page'] - 1): 0 ; //lay page hien tai
      			//$product_per_page = 4; //1 trang 3 sp 
      			//$offset = $product_per_page * $page; //offset chinh la phan can bo qua 
		      $sql = "SELECT * FROM product ";
		      $rs = pg_query($conn, $sql);
		      if(pg_num_rows($rs) > 0 ){
		        while( $row = pg_fetch_assoc($rs) ){
		 ?>
		      	<div style="col-xs-4">
			        <a href="single-product.php?id=<?php echo $row['productid']?>" class="product">
					<div class="product-image"><img src="images/<?php echo $row['image']?>"></div>
					<h2 class="product-title"><?php echo $row['name']?></h2>
					<p><?php echo $row['type']?></p>
					<p><?php echo $row['price']?></p>
				</a>
 			</div>
		    <?php 

		        }//end while 

		      }//check so hang tra ve > 0 

		?>
		</div>
	</div>
<div class="footer-top-area">
   <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>ATN</span></h2>
                        <p>This is ATN Store</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="">My account</a></li>
                            <li><a href="">Order history</a></li>
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">Vendor contact</a></li>
                            <li><a href="">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="">Mobile Phone</a></li>
                            <li><a href="">Home accesseries</a></li>
                            <li><a href="">LED TV</a></li>
                            <li><a href="">Computer</a></li>
                            <li><a href="">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                       <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>
</html>
