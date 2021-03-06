<?php
    if (!$_SESSION['user']) {
        $_SESSION['message'] = 'You need to sign in!';
        header('Location: /index.php');
    }
?>

<head>
    <link rel="stylesheet" href="assets/css/main.css?<?php echo time(); ?>">
</head>
<body>
    <div class="navigation">
        <nav>
            <h3><a href="/about.php">UOGZ</a></h3>
            <ul>
                <?php
                    if ($_SESSION['user']['status'] == 'admin') {
                        echo '<li><a href="/admin.php">Admin Panel</a></li>';
                    }
                ?>
                <li><a href="/services.php">Services</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</body>