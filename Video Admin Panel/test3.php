<?php

include("mysql.php");

$link = $_POST['link'];
$description = $_POST['description'];

$sql = "INSERT INTO `video`(`id`, `link`, `description`, `date_added`, `is_deleted`) VALUES (NULL,'$link','$description',NULL,'0')";    


    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }

?>