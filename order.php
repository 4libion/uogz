<?php
    session_start();

    if (!$_SESSION['user']) {
        $_SESSION['message'] = 'You need to sign in!';
        header('Location: /login.php');
    }
    if (isset($_GET['service'])) {
        $service = $_GET['service'];
    }

    require_once('./vendor/connect.php');
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
    <title>Order</title>
</head>
<body>
    <div class="section">
        <div class="placer">
            <form class="order" action="vendor/order.php" method="POST">
                <div class="item">
                    <label for="plan">Your Name:</label>
                    <p id="plan"><?= $_SESSION['user']['name'] ?></p>
                </div>
                <div class="item">
                    <p>------------------------------</p>
                </div>
                <div class="item">
                    <label for="plan">Your Email:</label>
                    <p id="plan"><?= $_SESSION['user']['email'] ?></p>
                </div>
                <div class="item">
                    <p>------------------------------</p>
                </div>
                <div class="item">
                    <label for="plan">Your Phone:</label>
                    <p id="plan"><?= $_SESSION['user']['phone'] ?></p>
                </div>
                <div class="item">
                    <p>------------------------------</p>
                </div>
                <div class="item">
                    <label for="plan">Chosen Plan:</label>
                    <p id="plan"><?= $row['name'] ?></p>
                </div>
                <div class="item">
                    <p>------------------------------</p>
                </div>
                <div class="item">
                    <label for="plan">Price:</label>
                    <p id="plan"><?= $row['price'] ?></p>
                </div>
                <div class="item">
                    <p>------------------------------</p>
                </div>
                <div class="item">
                    <button type="submit">Order</button>
                </div>
                <input type="hidden" name="id" value=<?= $row['id'] ?>>
            </form>
        </div>
    </div>
    <script src="/assets/js/clipboard.js"></script>
</body>
<?php
    require('footer.php');
?>
</html>