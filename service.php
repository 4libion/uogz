<?php
    session_start();

    if (!$_SESSION['user']) {
        $_SESSION['message'] = 'You need to sign in!';
        header('Location: /index.php');
    }
    if (isset($_GET['service'])) {
        $service = $_GET['service'];
    }
    require_once('./connect.php');
    require('navigation.php');

    $sql = "SELECT * FROM `services` WHERE `id` = $service";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Service</title>
    </head>
    <body>
        <div class="section">
            <div class="container">
                <div class="content-section">
                    <div class="title">
                        <h1><?php echo $row['name']; ?></h1>
                    </div>
                    <div class="content">
                        <h3>Descirption</h3>
                        <p><?php echo $row['long_definition']; ?> lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam ducimus amet harum autem fugiat cupiditate modi, possimus reprehenderit esse ipsa perferendis odio consequuntur? Qui maxime dicta corporis labore atque.</p>
                        <div class="button">
                            <a href="/order.php?service=<?= $row['id']?>">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require('footer.php');
        ?>
        <script src="/clipboard.js"></script>
    </body>
</html>