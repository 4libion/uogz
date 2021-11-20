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
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="assets/css/main.css?<?php echo time(); ?>">
        <title>About us</title>
        <style>
            footer p {
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="section">
            <div class="container">
                <div class="content-section">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                    <div class="content">
                        <h3>UOGZ</h3>
                        <p>The organization was founded in 2020,
                            and is a commercial organization that 
                            provides services for promoting Instagram accounts.
                            The company has the following services: video shooting,
                            photo shoot, services of a marketing specialist.
                            Team members are students, or in other words, representatives of generation Z,
                            hence the name of the company “UOGZ - Unity of generation Z”.
                            Young and ambitious people are ready to create high quality content
                            to help people promote their brand.
                        </p>
                        <div class="button">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="social">
                        <a target="_blank" rel="noopener noreferrer" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="#"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/uogz.ala/?hl=ru"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="image-section">
                    <img src="assets/images/uogz.png" alt="Error while loading an image">
                </div>
            </div>
        </div>
        <script src="/assets/js/clipboard.js"></script>
    </body>
    <?php
        require('footer.php');
    ?>
</html>