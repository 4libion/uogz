<?php
    session_start();
    require_once('connect.php');

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users`
        WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'phone' => $user['phone'],
            'status' => $user['status']
        ];
        $_SESSION['title'] = 'Profile';
        header('Location: ./about.php');

        // OK
    } else {
        $_SESSION['message'] = 'Email or password is incorrect!';
        $_SESSION['title'] = 'Login';
        header('Location: ./index.php');
    }
?>