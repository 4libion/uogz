<?php
    session_start();

    if (!$_SESSION['user']) {
        $_SESSION['message'] = 'You need to sign in!';
        header('Location: /index.php');
    }
    require('navigation.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="assets/css/main.css?<?php echo time(); ?>">
    </head>
    <body>
        <div class="section">
            <?php
                if (isset($_SESSION['message'])) {
                    echo '<div class="msg">
                            <p>'. $_SESSION['message'] .'</p>
                        </div>';
                }
                unset($_SESSION['message']);
            ?>
        </div>
        <?php
            require('footer.php');
        ?>
        <script src="/assets/js/clipboard.js"></script>
    </body>
</html>