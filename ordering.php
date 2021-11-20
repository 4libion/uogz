<?php
    session_start();
    require_once('connect.php');
    $service_id = $_POST['id'];
    $user_id = $_SESSION['user']['id'];

    // $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `password`) VALUES('$name', '$email', '$phone', '$password')";
    $sql = "INSERT INTO `orders`(`user_id`, `service_id`) VALUES($user_id, $service_id);";
    mysqli_query($connect, $sql);
    $_SESSION['result'] = $result;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['service_id'] = $service_id;
    $_SESSION['message'] = '' .$_SESSION['user']['name']. ', thank you for your trust! Your order is registered. Soon, our managers should call you';
    
    header('Location: ./profile.php');
?>