<?php 
include("inc/conn.php");
 if($_SERVER['REQUEST_METHOD']=='POST'){
 	$id=$_GET['id'];
	$name=$_POST['tensong'];
	$price=$_POST['songprice'];
	$img=$_POST['songimg'];
	$mp3=$_POST['songmp3'];
$sql="UPDATE product SET product_id=$id,product_name='$name',product_price='$price',product_file='$mp3',product_images='$img' WHERE product_id=$id ";
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
	<link rel="stylesheet" type="text/css" href="aset/admin.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Management system </title>
</head>
<body>
<div >
<div>
<h3>Update Song Name : <?= $product['product_name']?></h3>
<br><br>
<?php
include("inc/header.php");
?>
<form method="POST" class="form" >
	<label>Enter song name</label> <br>
	<input class="us-pw" type="text" name="tensong" value="<?=$product['product_name']?>"/> <br>
<label>Enter song price </label> <br>
<input type="number" name="songprice" value="<?=$product['SongPrice']?>" class="us-pw"> <br>
<label>Choose song image</label> <br>
<img class="anhsp" src="../images/<?=$product['product_images']?>"/ class="us-pw"  style="width: 80%; height: 5%; float: left;"> <br> <br>
<input type="file" name="songimg"> <br> <br>
<label>Choose song file</label> <br>
<input type="file" name="songmp3"> <br> <br>
<input type="submit" name="submit" value="Update" class="login">
</form>
</div>
