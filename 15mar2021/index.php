<html lang="en">
<head>
    <title>Ex</title>

</head>
<body>
    <?php
    session_start();
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
    }
        if(isset($_SESSION['username'])){
            $username= $_SESSION['username'];
            echo 'heloooo '.$username;
        }else{
            echo '<script>location.assign("login.php")</script>';
        }

    ?>
    <a href="logout.php">Đăng xuất</a>

</body>
</html>