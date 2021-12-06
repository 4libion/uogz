<?php
    $connect = mysqli_connect(
        'localhost',
        'root',
        '',
        'uogz'
    );
    if (!$connect) {
        die('Error occured while connecting to database');
    }
?>