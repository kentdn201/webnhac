<?php
include ('inc/conn.php');
?>
<link rel="stylesheet" type="text/css" href="asset/admin.css">
<div id="main">
  <table>
    <thead>
      <th>ID</th>
      <th>Image</th>
      <th>Name</th>
      <th>Price</th>
      <th>File</th>
      <th>Function</th>
      <th>Function</thead>
    <tbody>
      <?php
      $query = "SELECT * FROM product";
      $rs = mysqli_query($conn, $query);
      if( mysqli_num_rows( $rs ) > 0 )
        while ($row = mysqli_fetch_assoc($rs)) {
      ?>klz
        <tr>
          <td><?= $row['product_id']?></td>
          <td><img class="anh-sp" src="../images/<?= $row['product_images']?>"></td>
          <td><?=$row['product_name']?></td>
          <td><?=$row['product_price'] . "vnd"?></td>
          <td><?=$row['product_file']?></td>
          <td><a href="sausp.php?id=<?=$row['product_id']?>">Update</a></td>
          <td><a href="?idxoa=<?=$row['product_id']?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
  </table>
</div>