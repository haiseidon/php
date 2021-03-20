<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
    if ($username == 'camnh' && $password == '123456') {
        $_SESSION['user'] = $username;
        header("location:login-success.php");
    } else {
        echo "incorrect username and password";
        require "login.html";
    }
 
?>