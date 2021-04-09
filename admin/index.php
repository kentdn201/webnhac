<?php	 
	$conn = pg_connect("host=ec2-52-21-252-142.compute-1.amazonaws.com dbname=dcle2fpc522se2 user=fmneqfpwrsmfic password=f2f4b403db219824f6af70a62a6cd17f982167cdc23ef004cf3ed53e403f98f4 port=5432");
	if(!$conn){echo "Lost Connect";}
 ?>
<?php
	include("inc/header.php");
?>
if( $_SERVER['REQUEST_METHOD'] =='GET' && !EMPTY($_GET['idxoa'])){
	$idxoa = $_GET['idxoa'];
	$sql = "DELETE FROM product WHERE product_id = {$idxoa}";
	if( pg_query($conn, $sql)){
		echo "Delete product have ID: " .$idxoa ." successful <br>";
	}else{
		echo "Delete error: " . mysqli_error($conn);
	}

}
include ("inc/header.php");
include ("listsp.php");
