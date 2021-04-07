<!doctype html>
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

		<?php
			if( $_SERVER['REQUEST_METHOD']=='POST'){
				$id = $_GET['id'];
	            $name = $_POST['name'];
	            $lyric = $_POST['lyric'];
	            $casi = $_POST['casi'];
	            $khuvuc = $_POST['khuvuc'];
	            $price = $_POST['price'];
	            $file = $_FILES['anhsp'];
            	$song = $_FILES['song'];
				if( !empty( $file))
				{
					$tenfile = rand() . $file['name'];
					if( move_uploaded_file($file['tmp_name'], "../images/" .$tenfile)){

						$sql = "UPDATE music SET anh=? WHERE id=?";
						$stmt = mysqli_prepare($conn, $sql);
						mysqli_stmt_bind_param( $stmt, "sd", $tenfile, $id);
						mysqli_stmt_execute($stmt);
					}
					else
					{
						echo "Error";
					}
				}
			
				if( !empty( $song))
				{
					$namesong = rand() . $song['name'];
					if( move_uploaded_file($song['tmp_name'], "music/" .$namesong)){

						$sql = "UPDATE music SET file=? WHERE id=?";
						$stmt = mysqli_prepare($conn, $sql);
						mysqli_stmt_bind_param( $stmt, "sd", $namesong, $id);
						mysqli_stmt_execute($stmt);
					}
					else
					{
						echo "";
					}
				}
			


			$sql = "UPDATE music SET name=?, lyric=?, casi=?, location=?, price=? WHERE id=?";
			$stmt = mysqli_prepare($conn, $sql);
			mysqli_stmt_bind_param( $stmt, "ssssdd" , $name, $lyric, $casi, $khuvuc, $price, $id);
			if( mysqli_stmt_execute( $stmt ))
			{
				echo "Update Success";
			}else{
				echo " ". mysqli_error($conn);
			}

		}

		$id = $_GET['id'];
		$sql = mysqli_query( $conn, "SELECT * FROM music WHERE id={$id}");

		$product = mysqli_fetch_assoc($sql);

		?>

		<h2> Edit Music: <?= $product['name']?></h2>

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
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>