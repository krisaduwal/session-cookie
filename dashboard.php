<?php
session_start();

$isLoggedIn=isset($_COOKIE['email']);
if(!$isLoggedIn){
    echo "not logged in";
}else{
    echo "logged in!!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>