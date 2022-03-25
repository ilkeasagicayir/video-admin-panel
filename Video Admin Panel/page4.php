<?php
include("mysql.php");
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="page4.css">
    <script src="page4.js"></script>
    <title>Update Video</title>
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Video Admin</a>
            <button type="button" class="close" onClick="location.href='page2.php'" style="background-color: red" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </nav>
    <?php
      $id = $_COOKIE['id'];
    
      $sql= "SELECT * FROM video WHERE id=$id";
      $query = mysqli_query($conn, $sql);
      $getData = mysqli_fetch_assoc($query);
     
    ?>
    <h2>Update Video</h2>
    <div class="update">
      <form action="page2.php" method="POST" >
        <table id="table" >
          <tr>
            <td>Youtube link</td>
            <td><input type="text" name="link" id="link" value="<?php echo $getData['link']?>" /></td>
          </tr>
          <tr>
            <td>Description</td>
            <td><input type="text" name="description" id="description" value="<?php echo $getData['description']?>"/></td>
          </tr>
          <tr>
            <td></td>
            <td><button id="<?php echo $getData['id']?>" class="updateDesc" type="submit">Update</button></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
