<?php

if(isset($_GET['id'])) {
$id = $_GET['id'];

$json = file_get_contents('produkty.json');
$produkty = json_decode($json, true);

foreach ($produkty as $produkt) {
    if ($produkt['id'] == $id) {
        $nazev = $produkt['nazev'];
        $popis = $produkt['popis'];
        $cena = $produkt['cena'];
        $obrazek = $produkt['obrazek'];
        break;
    }
}
} else {
    header('location: produkty.php');
    exit();
}
?>

<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produkt | JukeDisc</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/produkt.css">
</head>
<body>

<?php
include('includes/header.php');

echo('
<div class="wrapper">
<div class="produkt">
    <div class="produkt__left">
        <img src="images/produkty/' . $obrazek . '" alt="">
    </div>
    <div class="produkt__right">
        <h2>' . $nazev . '</h2>
        <p>' . $popis . '</p>
        <h3>' . $cena . ' Kč</h3>
    </div>
</div>
</div>
');

include('includes/footer.php');
?>
</body>
</html>
