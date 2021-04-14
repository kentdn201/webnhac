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
			<table>
				<thead>
					<th>orderID</th>
					<th>guestname</th>
					<th>productname</th>
					<th>price</th>
					<th>quantity</th>
					<th>phonenumber</th>
					<th>address</th>
					<th>status</th>
					<th></th>
				</thead>

				<tbody>
					<?php
						$query = 'select "order".*, product."name" from "order"  ,product  where "order".productid = product.productid';
						$rs = pg_query( $conn, $query);
						if( pg_num_rows( $rs ) > 0)
							while( $row = pg_fetch_assoc( $rs )){
					?>
					<tr>
						<td><?= $row['orderid']?></td>
						<td><?= $row['guestname']?></td>
						<td><?= $row['productname']?></td>
						<td><?= $row['price']?></td>
						<td><?= $row['quantity']?></td>
						<td><?= $row['phonenumber']?></td>
						<td><?= $row['address']?></td>
						<td><?= $row['status']?></td>
						<td><a href="suasp.php?id=<?= $row['productid']?>">Fix</a></td>
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

