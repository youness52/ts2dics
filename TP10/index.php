<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>index page</h3>
    <h3><?php 
    session_start();
    echo $_SESSION['user'];?></h3>

    <form action="" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
<?php
//session_start();
if(!isset($_SESSION['user'])){
header("location:login.php");
}
?>
<?php
//session_start();
if(isset($_POST['logout'])){
session_unset();
session_destroy();
header('location:login.php');
}
?>