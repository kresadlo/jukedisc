<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produkty | JukeDisc</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/produkty.css">
</head>
<body>
<?php include("includes/header.php") ?>
<div class="produkty">
    <?php
    $json = file_get_contents('produkty.json');
    $produkty = json_decode($json, true);

    foreach ($produkty as $produkt) {
        $popis = (mb_strlen($produkt['popis'], 'UTF-8') > 50) ? mb_substr($produkt['popis'], 0, 50, 'UTF-8') . '...' : $produkt['popis'];
        echo('
            <a href="produkt.php?id=' . $produkt['id'] . '">
                <div class="produkt">
                    <div class="produkt__top">
                        <img src="images/produkty/' . $produkt['obrazek'] . '" alt="fotka">
                    </div>
                    <div class="produkt__bottom">
                        <h3>' . $produkt['nazev'] . '</h3>
                        <p>' . $popis . '</p>
                        <h4>' . $produkt['cena'] . ' Kč</h4>
                    </div>
                </div>
            </a>');
    }
    ?>
</div>
<?php include("includes/footer.php") ?>
</body>
</html>
