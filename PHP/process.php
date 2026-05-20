<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'password123')
    {
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
    }

    else
    {
        include 'header.inc';
        echo "Invalid login. <a href='login.php'>Try again</a>";
        include 'footer.inc';
    }
?>