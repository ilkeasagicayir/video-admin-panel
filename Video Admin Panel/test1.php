<?php

include("mysql.php");

$username = $_POST['username'];
$password = $_POST['password'];

if( !$username || !$password ){
    echo 'Boş bırakılamaz!';
}
else{
    $sql= "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $resultsd1 = mysqli_query($conn, $sql);
    $rowCountControl=0;
    if (mysqli_query($conn, $sql)) {
        while($ResultAllThumbnailName = mysqli_fetch_array($resultsd1))
        {
          $rows[] = $ResultAllThumbnailName;
          $rowCountControl=1;
        }
        
        
        if($rowCountControl==1){
            echo json_encode(array("statusCode"=>200));

        }else{
            echo json_encode(array("statusCode"=>201));

        }
    } 
    else {
        echo json_encode(array("statusCode1"=>201));
    }
}

?>