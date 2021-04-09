<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$tensp = $_POST['tensp'];
	$file = $_POST['file'];
	$anhsp = $_POST['anhsp'];
	$giasp = $_POST['giasp'];
	include("../inc/conn.php");
	$sql = "INSERT INTO product(product_name, product_file, product_price, product_images) VALUES ('$tensp', '$file', '$giasp', '$anhsp')";
	if(mysqli_query($conn, $sql)){
		echo "Add successfuly <br>";
	}else{
		echo"error: " . mysqli_error($conn);
	}
}
include ("inc/header.php");
?>
<form class="form" method="post">
	<input type="text" name="tensp" placeholder="enter name of song" style="width: 80%; height: 5%;">
	<input type="number" name="giasp" placeholder="enter price of song" style="width: 80%; height: 5%; float: left;">
	<label >Choose image of song</label>
	<input type="file" name="anhsp" style="width: 40%; height: 5%">
	<label>Choose file of song</label>
	<input type="file" name="file" style="width: 40%; height: 5%">
	<br><br>
	<input type="submit" name="submit" value="Add" style="width: 40%; height: 5%">
</form>