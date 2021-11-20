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
        <title>Registration</title>

        <link rel="stylesheet" href="assets/css/main.css?<?php echo time(); ?>">
    </head>
    <body>
        <div class="forms">
            <!-- Registration Form -->
            <form action="/signup.php" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Email" name="email" required>

                <label for="phone">Phone</label>
                <input type="text" id="phone" placeholder="Phone number" name="phone" required>

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" name="password" required>

                <label for="confirm_password">Confirm password</label>
                <input type="password" id="confirm_password" placeholder="Password" name="confirm_password" required>
                
                <button type="submit">Sign Up</button>
                
                <p>
                    Already have an account? - <a href="/login.php">Sign in!</a>
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