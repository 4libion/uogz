<?php
    session_start();
    unset($_SESSION['user']);
    $_SESSION['title'] = 'Login';
    header('Location: ../login.php');
?>