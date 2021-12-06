<?php
    require_once('connect.php');

    $services = array(array());
    $sql = "SELECT * FROM `services`";
    $results = mysqli_query($connect, $sql);
    $row_num = mysqli_num_rows($results);

    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

    $i = 0;
    while ($row = mysqli_fetch_array($results)) {
        $services[$i][0] = $row[0];
        $services[$i][1] = $row[1];
        $services[$i][2] = $row[2];
        $services[$i][3] = $row[3];
        $services[$i][4] = $row[4];
        $services[$i][5] = $row[5];
        $i++;
    }
    $post = array();
    while ($row = mysqli_fetch_assoc($results)) {
        $post = $row;
        debug_to_console($post);
    }
?>