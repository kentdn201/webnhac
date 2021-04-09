<?php 
include("inc/conn.php");
 if($_SERVER['REQUEST_METHOD']=='POST'){
 	$id=$_GET['id'];
	$name=$_POST['product_name'];
$sql="UPDATE product SET product_id=$id,product_name='$name' WHERE product_id=$id ";
if(mysqli_query($conn,$sql)){
	echo "successfully updated";
}else{
	echo "Error: " .mysqli_errno($conn);
}
}
$id=$_GET['id'];
$sql= mysqli_query($conn,"SELECT * FROM product WHERE product_id={$id}");
$product = mysqli_fetch_assoc($sql);
?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="https://img.icons8.com/fluent/96/000000/data-configuration.png"/>
	<link rel="stylesheet" type="text/css" href="asset/admin.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Management system </title>
</head>
<body>
<div class="header">
	<h1>Update Song</h1>
</div>
<div class="rightcolumn">
<h3>Update Song Name : <?= $product['product_name']?></h3>
<br><br>
<form method="POST" enctype="multipart/form-data">
	<label>Enter song name</label> <br>
	<input class="us-pw" type="text" name="product_name" value="<?=$product['product_name']?>"/> <br> <br>
<input type="submit" name="submit" value="Update" class="login">
</form>
</div>
