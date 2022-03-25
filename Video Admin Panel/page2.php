<?php
include("mysql.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="page2.js"></script>
    <link rel="stylesheet" href="page2.css">
    <title>Video Admin</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Video Admin</a>
            <button type="button" onClick="location.href='page3.php'" class="btn btn-light" >UPLOAD</button>          
        </div>
    </nav>
    <br>

    <?php
      $sql= "SELECT * FROM video WHERE is_deleted='0'";
      $query = mysqli_query($conn, $sql);
     
      while($getData = mysqli_fetch_assoc($query)) {
        $variable = $getData['link'];
        $videoId = preg_split ("/\=/", $variable);  
    ?>

    <div id="video">
      <a href="<?php echo $getData['link'];?>" target="_blank" class="resim"><img src="https://img.youtube.com/vi/<?php echo $videoId[1]; ?>/default.jpg" alt=""></a>
      <div class="info">
      <big><b><?php echo $getData['description'];?></b></big><hr><small>Date of Upload: <?php echo $getData['date_added'];?></small></div>
      <div class="update"><button id="<?php echo $getData['id'];?>" type="button" class="btn btn-outline-dark updateClass">UPDATE</button></div>
      <div class="delete">
      <button id="<?php echo $getData['id'];?>" type="button" class="btn-close" aria-label="Close"  ></button></div>      
    </div>
    <br>

    <?php
      }
    ?>
  </body>
</html>