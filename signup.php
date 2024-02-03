<?php

    require './config.php';

    if(isset($_POST['regmit'])){
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    
        $varif = rand(100000, 999999);
     
        
        $insert = mysqli_query($conn, "INSERT INTO users (username, password, email,verifi_code) VALUES ('$user', '$pass','$email', '$varif')"); 

        if($insert){
            header("Location: index.php");
        }else{
            echo "error, not registered.";
        }

    }

?>