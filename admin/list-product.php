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
		?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      		<?php 
				require_once("inc/conn.php");
      		?>
      	<div class="list-song col-xs-12 col-md-12 col-sm-12">
      		<style>
      			.anh-sp{
  					max-width: 120px;
				}

				table, td, th {
				  border: 1px solid black;
				}

				table {
				  border-collapse: collapse;
				  width: 100%;
				}

				th,td {
				  text-align: center;
				}
      		</style>
      			<?php
      				 if( $_SERVER['REQUEST_METHOD']=='GET' && !empty( $_GET['idxoa'])){

				    $idxoa = $_GET['idxoa'];

				    $sql ="DELETE FROM music WHERE id={$idxoa} limit 1";
				    if( mysqli_query($conn, $sql)){
				     echo "Delete Success Music ID: ".$idxoa;
				    } else{
				    echo "Error" .mysqli_error($conn);
				    }
				  }

      			?>
			<table>
				<thead>
					<th>ID</th>
					<th>Image</th>
					<th>File</th>
					<th>Name</th>
					<th>Singer</th>
					<th>Location</th>
					<th>Price</th>
					<th ></th>
					<th></th>
				</thead>

				<tbody>
					<?php
						$query = "SELECT * FROM music";
						$rs = mysqli_query( $conn, $query);
						if( mysqli_num_rows( $rs ) > 0)
							while( $row = mysqli_fetch_assoc( $rs )){
					?>
					<tr>
						<td><?= $row['id']?></td>
						<td><img style="width:60px; height:60px; " class="anh-sp" src="../images/<?= $row['anh']?>"></td>
						<td>
							<audio id='audio_1' controls preload loop>
		 						<source src='music/<?php echo $row['file']?>'/>
		 					</audio>
						</td>
						<td><?= $row['name']?></td>
						<td><?= $row['casi']?></td>
						<td><?= $row['location']?></td>
						<td><?= $row['price'] . "$"?></td>
						<td><a href="suasp.php?id=<?= $row['id']?>">Fix</a></td>
						<td><a href="?idxoa=<?= $row['id']?>">Delete</a></td>
					</tr>

					<?php

						}

					?>
				</tbody>
			</table>
		</div>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>