<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Objednat | JukeDisc</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/objednat.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php include('includes/header.php'); ?>

<div class="container">
<form method="post">
    <label for="jmenoprijmeni">Jméno a příjmení</label>
    <input type="text" id="jmenoprijmeni" name="jmenoprijmeni" placeholder="Jan Novák" required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="jan.novak@email.cz" required>
    <label for="objednavka">Objednávka</label>
    <textarea id="objednavka" name="objednavka" required></textarea>
    <button type="submit">Objednat</button>
</form>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>