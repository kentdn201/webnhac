<?php 
include("inc/conn.php");
 $id = $_GET['id'];
	           	$name = $_POST['name'];
	            	$description = $_POST['description'];
	            	$type = $_POST['type'];
	            	$khuvuc = $_POST['khuvuc'];
	            	$price = $_POST['price'];
	            	$file = $_FILES['anhsp'];
            		$song = $_FILES['song'];
				if( !empty( $file))
				{
					$tenfile = rand() . $file['name'];
					if( move_uploaded_file($file['tmp_name'], "../images/" .$tenfile)){
						echo "success";
					}
					else
					{
						echo "Error";
					}
				}
$sql = "UPDATE product SET name=?, description=?, type=?, price=? WHERE id=?";
if(mysqli_query($conn,$sql)){
	echo "successfully updated";
}else{
	echo "Error: " .mysqli_errno($conn);
}
}
$id=$_GET['id'];
$sql = mysqli_query( $conn, "SELECT * FROM music WHERE id={$id}");
$product = mysqli_fetch_assoc($sql);
?>
 <!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		  <?php
      include("inc/header.php");
      require_once("inc/conn.php");
      ?>
      <style>
        .add-song{
              border: 2px solid black;
              padding-left: 5px;
              color: black;
        }
        .form input{
          width:100%;
          display: inline-block;
          float:none;
          padding:10px;
        }

        .form label{
          width:100%;
          display: inline-block;
        }

        .form textarea{
          width:100%;
          display: inline-block;
          padding:10px;
        }
      </style>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
<div >
<div>
<h3>Update Song Name : <?= $product['product_name']?></h3>
<br><br>
<?php
include("inc/header.php");
?>
<form class="form add-song" method="post" enctype="multipart/form-data">
			
			<label>Input Name of the song</label>
			<input type="text" name="name" value="<?= $product['name']?>">

			<label>Input Lyric</label>
			<textarea name="lyric"><?= $product['lyric']?></textarea>

			<label>Input singer</label>
			<input type="text" name="casi" value="<?= $product['casi']?>">

			<label>Input location</label>
			<input type="text" name="khuvuc" value="<?= $product['location']?>">
			
			<label>Input price</label>
			<input type="number" name="price" value="<?= $product['price']?>">

			<label>Choose Image</label>
			<img style="width: 150px;" class="anhsp" src="../images/<?= $product['anh']?>">
			<input type="file" name="anhsp">
			<label>Choose Song</label>
				<audio id='audio_1' controls preload loop>
			 		<source src='../music/<?= $product['file']?>'/>
			 	</audio>
			<input type="file" name="song">
			<input type="submit" name="submit" class="btn btn-danger btn-block" value="Update">
		</form>
		 <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</div>
