<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt | JukeDisc</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/kontakt.css">
</head>
<body>
<?php include("includes/header.php") ?>
<div class="kontakt">
    <form method="post" action="odeslat.php">
        <label for="name">Jméno a příjmení</label>
        <input id="name" name="name" type="text" placeholder="" required>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="" required>
        <label for="message">Zpráva</label>
        <textarea id="message" name="message" placeholder="" required></textarea>
        <button type="submit">Odeslat</button>
    </form>
</div>

<div class="info">
    <div class="info__card">
        <img src="images/kontakt/telefon.webp" alt="Telefonní číslo:">
        <p>+420 123 456 789</p>
    </div>
    <div class="info__card">
        <a href="mailto:jukedisc@gmail.com">
            <img src="images/kontakt/email.webp" alt="Email:">
        </a>
        <p>jukedisc@gmail.com</p>
    </div>
    <div class="info__card">
        <a href="https://instagram.com/jukedisc_" target="_blank">
            <img src="images/kontakt/instagram.webp" alt="Instagram:">
        </a>
        <p>jukedisc_</p>
    </div>
    <div class="info__card">
        <img src="images/kontakt/hodiny.webp" alt="Otevírací doba:">
        <p>7:00 - 15:00</p>
    </div>
    <div class="map__card">
        <div class="map__card__top">
            <a href="https://maps.app.goo.gl/Pe99s9iY2RUkZYay6" target="_blank">
                <img src="images/kontakt/adresa.webp" alt="Adresa:">
            </a>
            <p>Erbenova 184, 344 01 Domažlice</p>
        </div>
        <div class="map__card__bottom">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10376.420963011931!2d12.911197601274079!3d49.44472789605766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470ab06f680fcc1f%3A0xe771d1f84d15fd5b!2sErbenova%20184%2C%20344%2001%20Doma%C5%BElice%201!5e0!3m2!1scs!2scz!4v1762935387548!5m2!1scs!2scz"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>
</body>
</html>
