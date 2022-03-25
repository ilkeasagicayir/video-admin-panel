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
    <script src="page1.js"></script>
    <link rel="stylesheet" href="page1.css">
    <title>Video Admin</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Video Admin</a>
        </div>
    </nav>

    <div class="admin">
      <form action="page2.php" method="POST" >
        <table id="table" >
          <tr>
            <td>Username</td>
            <td><input type="text" name="username" id="username" /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password" /></td>
          </tr>
          <tr>
            <td></td>
            <td> <input id="save" type="button" value="LOGIN" ></input></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
