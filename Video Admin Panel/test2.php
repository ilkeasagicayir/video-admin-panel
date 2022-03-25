<?php
include("mysql.php");

$id = $_POST['id'];
    
$sql= "UPDATE `video` SET is_deleted=1 WHERE id=$id";

   
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }


?>