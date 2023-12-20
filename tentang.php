<?php
include_once './navbar.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur</title>
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .img-struktur {
            margin-bottom: -50px;
            width: 100%;
            height: 80%;
            text-align: center;
        }

        .img-hero {
            width: 100%;
            height: 100%;
        }

        #footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="img-struktur">
        <img class="img-hero" src="assets/img/tentang1.png" alt="">
    </div>


    <div class="footer">
        <?php
        include_once './footer.php'
            ?>
    </div>
</body>

</html>