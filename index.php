<?php
    include("settings.php");
    if(isset($_SESSION['user'])){
        $title = "Dashboard";
    }else{
        $title = "Belépés";
    }
    include("header.php");
    if(isset($_SESSION['user'])){
        include("dashboard.php");
    }else{
        include("login.php");
    }
    include("footer.php");

?>
    
