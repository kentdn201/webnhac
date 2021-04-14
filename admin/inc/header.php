   <?php
   session_start();
if (empty($_SESSION['current'])){
	?>

	<div class="alert alert-danger" role="alert">
      <p class="text-center">Please Login</p>
      </div>

<?php
exit();
}?>



   <div class="wrapper d-flex align-items-stretch">
	<nav id="sidebar">
	<div class="p-4 pt-5">
		<h1><a href="index.php" class="logo">ATN</a></h1>
	        <ul class="list-unstyled components mb-5">
	        <li class="active">
	        <a href="list-product.php" data-toggle="collapse" aria-expanded="false">Product Manager</a>
		</li>
                <li>
                 <a href="list-product.php">Product list</a>
                </li>
                <li>
                  <a href="add-product.php">Add-product</a>
                </li>
                <li>
                	<a href="orderlist.php">Order list</a>
                </li>
	         </li>
	         <li>
              	<a href="logout.php">Logout</a>
		</li>

	        </ul>
	      </div>
	  </nav>
