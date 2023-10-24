<?php
    $host = "localhost";
    $user = "yunyoungsik91";
    $pw = "youngsik91!";
    $db = "yunyoungsik91";
    
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("UTF-8");

    // if(mysqli_connect_errno()){
    //     echo "DATABASE Connect False";
    // } else {
    //     echo "DATABASE Connect True";
    // }
?>