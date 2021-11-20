<?php
    session_start();

    if (isset($_SESSION['user'])) {
        header('Location: about.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link rel="stylesheet" href="assets/css/main.css?<?php echo time(); ?>">
    </head>
    <body>
        <!-- Authorization Form -->
        <div class="forms">
            <form action="/vendor/signin.php" method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
                <button type="submit">Sign In</button>
                <p>
                    Don't have an account? - <a href="/register.php">Sign up!</a>
                </p>
                <?php
                    if (isset($_SESSION['message'])) {
                        echo '<p class="message"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
            </form>
        </div>
    </body>
</html>