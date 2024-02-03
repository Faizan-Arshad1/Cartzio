<?php

    include "./includes/loader.php";
    include "./includes/navbar.php";

    if(!isset($_GET['route'])){
        include "./pages/home.php";
    }else{
        $route = $_GET['route'];
        include "./pages/$route.php";
    }

?>