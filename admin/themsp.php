<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
</head>
<body>
	<?php
 	include('../inc/conn.php'); 
 	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 		 $name = $_PORT['name'];
 		 $price = $_PORT['price'];
 		 $type = $_PORT['type'];
 		 $getdate = $_PORT['date'];
 		 $image = $_FILES['image'];

 		 $sql = "INSERT INTO product(getdate,image,name,price,type,description) VALUES ('$getdate','$image','$name',$price,'$type','$description')";
 		 $rs = pg_query($conn, $sql);
 		 var_dump($rs);

 		 if (empty($image)){
 		 	echo "false";
 		 }else{
 		 	if(move_uploaded_file($image,'image/')){
				echo 'done';
 		 }
 	}



	 ?>
<form method="POST">
	<div>
		<label>Name</label>
		<input type="text" name="name">
		<label>price</label>
		<input type="number" name="price">
		<label>type</label>
		<input type="text" name="type">
		<label>getdate</label>
		<input type="text" name="date">
		<label>image</label>
		<input type="file" name="image">
		<input type="submit" name="login">
	</div>
</form>
</body>
</html>
