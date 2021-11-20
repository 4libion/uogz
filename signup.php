<?php
    session_start();
    require_once('connect.php');
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $password = md5($password);
        // connection...
        mysqli_query($connect, "INSERT INTO `users` (`name`, `email`, `phone`, `password`)
            VALUES('$name', '$email', '$phone', '$password')");
        
        $_SESSION['message'] = 'You have successfully signed up!';
        header('Location: ../login.php');
    } else {
        $_SESSION['message'] = 'Passwords should match!';
        header('Location: ../register.php');
    }
?>