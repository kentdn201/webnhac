<?php
	include("inc/header.php");
if( $_SERVER['REQUEST_METHOD'] =='GET' && !EMPTY($_GET['idxoa'])){
	$idxoa = $_GET['idxoa'];
	$sql = "DELETE FROM product WHERE product_id = {$idxoa}";
	if( mysqli_query($conn, $sql)){
		echo "Delete product have ID: " .$idxoa ." successful <br>";
	}else{
		echo "Delete error: " . mysqli_error($conn);
	}

}
include ("inc/header.php");
include ("listsp.php");
