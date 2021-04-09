<link rel="stylesheet" type="text/css" href="/test3/font-awesome-4.7.0/css/font-awesome.css">
<?php
     session_start();
     if( !empty($_SESSION['username'])){
     	echo "hello: " . $_SESSION['username'];
     }else{
     	header('Location:login.php');
     	die;
     }
     ?>
     <!DOCTYPE html>
     <html>
     <head>
     	<link rel="stylesheet" type="text/css" href="asset/admin.css"/>
     </head>
     <body>
     <div class="header">
     	 <h1>Administrator page</h1>
     	</div>
     	<div class="row">
     		<div class="leftcolumn">
     			<div class="topnav">
   
     				<hr>
     				<td><a href="themsp.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add song</a></td>
                         <hr>
     				<a href="index.php">Song Management</a>
                                                  <hr>
                         <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> User management</a>
                         <hr>
     				<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" ></i> Logout</a>
     			</div>
     		</div>
     	
     	<div class="rightcolumn">
     </body>
     </html>
