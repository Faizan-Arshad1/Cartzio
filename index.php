<?php session_start();?>
<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<head>
        <meta charset="UTF-8">
        <title>Cartzio - Fashion Store eCommerce Tailwind CSS Landing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Fashion Store eCommerce Tailwind CSS Landing Template" name="description">
        <meta content="Shop, Fashion, eCommerce, Cart, Shop Cart, tailwind css, Admin, Landing" name="keywords">
    
        <meta name="version" content="1.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">

    </head>
    
    <body class="dark:bg-slate-900">


   <?php

            
  require './config.php';

  

  if(isset($_POST['logmit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
    if(mysqli_num_rows($check)){
        while($row = mysqli_fetch_assoc($check)){
            $_SESSION['login'] = $row['username'];
        }
    }
}

if(!isset($_SESSION['login'])){
    include "./login.php";
}
else{
    include "./dashboard.php";
}

?>


       <!-- JAVASCRIPTS -->

       <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>

</html>