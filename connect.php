<?php
    $connect = mysqli_connect(
        'us-cdbr-east-04.cleardb.com',
        'bbfa49c7e13d07',
        'b31b48ff',
        'heroku_e545b6a41bed266'
    );
    if (!$connect) {
        die('Error occured while connecting to database');
    }
?>