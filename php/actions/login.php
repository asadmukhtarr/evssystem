<?php
    $email = $_GET['email']; // email ..
    $password = $_GET['password']; // password ..
    include('cn.php'); // connection ...
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn,$query) or die('cant run query');
    $rows = mysqli_num_rows($result);
    if($rows > 0) {
        $row = mysqli_fetch_array($result); // database sy data ko array ki form mai fetch krta hai ..
        session_start(); //
        $_SESSION['user'] = $row['name'];
        header('location:../home.php');
    } else {
        // redirect ..
        $warning = "Email or password is not correct";
        header('Location:../index.php?warning='.$warning);
    }
?>