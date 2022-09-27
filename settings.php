<?php
    session_start();
    #adatbázis kapcsolódás
    $host="localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "loginos";

    $dbConn = mysqli_connect($host,$dbUser,$dbPass,$dbName);

    if(mysqli_connect_errno()){
        echo "Adatabázis kapcsolódás hiba: ".mysqli_connect_error();
        exit();
    }
?>