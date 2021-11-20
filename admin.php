<?php
    session_start();

    if (!$_SESSION['user']) {
        $_SESSION['message'] = 'You need to sign in!';
        header('Location: /index.php');
    }
    if ($_SESSION['user']['status'] != 'admin') {
        $_SESSION['message'] = 'You have not permission for this route!';
        header('Location: /profile.php');
    }

    require_once('./connect.php');
    require('navigation.php');
    
    $sql = "SELECT * FROM `users` ORDER BY `name`";
    $results = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
    </head>
    <body>
        <section>
            <h3>Users</h3>
            <table id="table">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                <?php
                    while ($row = mysqli_fetch_assoc($results)) {
                        echo '<tr>
                                <td>'. $row['name'] .'</td>
                                <td>'. $row['email'] .'</td>
                                <td>'. $row['phone'] .'</td>
                            </tr>';
                    }
                ?>
            </table>
        </section>
        <script src="/assets/js/clipboard.js"></script>
    </body>
</html>