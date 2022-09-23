<?php

// session_start();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $database_email="kri@g.com";
    $database_password="kri123";

    //login success
    if($database_password===$password && $database_email===$email){

        // $_SESSION['auth']=true;
        setcookie("email", $email, time() +5, "/");
        header('location: ./dashboard.php');

    }else{
        header('location: ./login.php');
    }

}



// echo "this is welcome page!";
?>