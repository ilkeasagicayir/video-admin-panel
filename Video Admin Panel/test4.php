<?php
include("mysql.php");

$id = $_POST['id'];
$link = $_POST['link'];
$description = $_POST['description'];

    
$sql="UPDATE video SET link='$link' , description='$description' WHERE id=$id";

   
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }


?>