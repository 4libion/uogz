<?php
    if (!$_SESSION['user']) {
        $_SESSION['message'] = 'You need to sign in!';
        header('Location: /login.php');
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
                <li><a href="/vendor/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <script src="/assets/js/clipboard.js"></script>
</body>