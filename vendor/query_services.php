<?php
    require_once('connect.php');

    $services = array(array());
    $sql = "SELECT * FROM `services`";
    $results = mysqli_query($connect, $sql);
    $row_num = mysqli_num_rows($results);

    $i = 0;
    while ($row = mysqli_fetch_array($results, MYSQLI_NUM)) {
        $services[$i][0] = $row[0];
        $services[$i][1] = $row[1];
        $services[$i][2] = $row[2];
        $services[$i][3] = $row[3];
        $services[$i][4] = $row[4];
        $services[$i][5] = $row[5];
        $i++;
    }
?>