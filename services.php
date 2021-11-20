<?php
    session_start();

    if (!$_SESSION['user']) {
        $_SESSION['message'] = 'You need to sign in!';
        header('Location: /index.php');
    }
    require('navigation.php');
    require_once('/query_services.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services</title>
        <style>
            body {
                background-color: #dddddd;
            }
            <?php
            for ($i = 0; $i < $row_num; $i = $i + 1) {
                echo
                '.boxes .box:nth-child('. $services[$i][0] .') a {
                    background: '. $services[$i][5] .';
                }
                .boxes .box:hover a {
                    background: #ffffff;
                }
                .boxes .box:nth-child('. $services[$i][0] .') .icon {
                    box-shadow: 0 0 0 0 '. $services[$i][5] .';
                    background: '. $services[$i][5] .';
                }
                .boxes .box:nth-child('. $services[$i][0] .'):hover .icon {
                    box-shadow: 0 0 0 400px '. $services[$i][5] .';
                    background: '. $services[$i][5] .';
                }';
            }
            ?>
        </style>
    </head>
    <body>
        <div class="main">
            <div class="section">
                <div class="boxes">
                    <?php
                        for ($i = 0; $i < $row_num; $i++) {
                            echo '<div class="box">
                                    <div class="icon">'. $services[$i][0] .'</div>
                                    <div class="content">
                                        <h3>' . $services[$i][1] . '</h3>
                                        <p>' . $services[$i][2] . '</p>
                                        <a href="/service.php?service='. $services[$i][0] .'">Read More</a>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <script src="/assets/js/clipboard.js"></script>
    </body>
</html>