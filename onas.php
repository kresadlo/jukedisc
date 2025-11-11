<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O nás | JukeDisc</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/onas.css">
</head>
<body>
<?php include("includes/header.php") ?>
<div class="container">
    <div class="onas">
        <h2>Náš tým</h2>
        <img src="images/onas.webp" alt="fotka">
    </div>
    <div class="clenove">
        <?php
        $json = file_get_contents('clenove.json');
        $clenove = json_decode($json, true);

        foreach ($clenove as $clen) {
            echo('<div class="clen">
            <h3>' . $clen['jmeno'] . '</h3>
            <h4>' . $clen['funkce'] . '</h4>
            <img src="images/' . $clen['obrazek'] . '" alt="fotka">
            <p>' . $clen['popis'] . '</p>
        </div>');
        }
        ?>
    </div>
</div>
<?php include("includes/footer.php") ?>
</body>
</html>
