
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
      $id = $_GET['id'];
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

        <div>
          <?php
             if( $_SERVER['REQUEST_METHOD'] == 'POST'){

             $name = $_POST['name'];
             $description = $_POST['description'];
             $type = $_POST['type'];
             $price = $_POST['price'];
             $getdate = $_POST['getdate'];
              $imagename = $_FILES['image']['name'];
              $img_tmp = $_FILES['image']['tmp_name'];
              $tar = "../images/";
              $move = move_uploaded_file($img_tmp,$tar.$imagename);
              if($move){
              echo "success";
            }

     
       
             //insert data to php
             $sql = "UPDATE product SET name = '{$name}' ,description = '$description',  image = '{$imagename}', getdate = '{$getdate}' , price = {$price} , type = '{$type}' WHERE productid ={$id} ";
    if(pg_query($conn, $sql)){
      echo"done";
      header('location:listproduct.php');
    }
       }

          ?>
      <div id="main" class="add-song">
        <form class="form" method="post" enctype="multipart/form-data">
    
          <label>Input name toy</label>
          <input type="text" placeholder="Enter name for for the toy" name="name">

          <label>Input description for the toy</label>
          <textarea name="description" placeholder="Enter description for the toy" type="text"></textarea>

          <label>Input type for the toy</label>
          <input name="type" placeholder="Enter type for the toy" type="text">

          <label>Input price for the song</label>
          <input name="price" placeholder="Enter price for the toy" type="number">
          
          <label>Input get date for the toy</label>
          <input name="getdate" placeholder="Enter type for the toy" type="text">
          
          <label>Input Image</label>
           <input type="file" name="image">

          <input type="submit" name="submit" class="btn btn-danger btn-block" value="Add">
          </form>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
