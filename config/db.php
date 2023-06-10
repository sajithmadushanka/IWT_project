<?php 
    $SERVER = "localhost:3607";
    $USERNAME= "root";
    $PASSWORD = "";
    $DATABASE = "fashionhutDB";

    $con = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

    // chech whether connection success or not
    if(mysqli_connect_errno()){
        die("connection faild". mysqli_connect_errno());
    }
    else{
        // echo "connection successful";
    }
?>