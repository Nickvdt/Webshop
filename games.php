<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `games`')

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamepagina</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/filter.js" defer></script>
</head>

<body>
    <header class="navigatiebar">
        <a href="index.php">
            <img src="img/LogoSWGames.webp" width="150" alt="Star Wars Games Logo">
        </a>
            <nav>
                <ul class="links">
                    <li><a href="games.php">Games</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="inloggen.html">Inloggen</a></li>
                    <li><a href="zoeken.html">Zoeken</a></li>
                </ul>
            </nav>
    </header>

    <main>
        <section class="afbeelding">
            <div class="col-2">
                <img src="img/1087325.webp" alt="Darthvader afbeelding" class="image1">
                <img src="img/Gamepagina.webp" alt="Logo" class="image2">
            </div>
        </section>

        <section class="inputs"> 
            <div>
                <input id="checkbox-classics" type="checkbox" class="filter">
                <label for="checkbox-classics" class="label">Classics</label>
            </div>
            <div>
                <input id="checkbox-special" type="checkbox" class="filter">
                <label for="checkbox-special" class="label">Special Edition</label>
            </div>
            <div>
                <input id="checkbox-puzzle" type="checkbox" class="filter">
                <label for="checkbox-puzzle" class="label">Puzzle</label>
            </div>
        </section>

        <section class="game">
            <h2 class="gametitel">Games</h2>
            <ul class="gamelijst">

                <?php foreach ($result as $row) : ?>
                    <li class="gamelijstitem" data-category="<?php echo $row['categorie']?>">
                        <div class="text-block">
                            <h3>€<?php echo $row['prijs'] ?></h3>
                        </div>
                        <a href="game.php?id=<?php echo $row['id'] ?>">
                            <img src="img/games/<?php echo $row['foto'] ?>" alt="<?php echo $row['afbeeldinginformatie'] ?>" class="product">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="footer__section">
                <h3>Locatie</h3>
                <ul>
                    <li>Contactweg 36</li>
                    <li>1014 AN Amsterdam</li>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9739.458184559553!2d4.8560905!3d52.3910058!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dffd675d740eddb!2sMediacollege%20Amsterdam!5e0!3m2!1snl!2snl!4v1652688761811!5m2!1snl!2snl" width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>
            </div>
            <div class="footer__section">
                <h3>Navigatie</h3>
                <ul>
                    <li><a href="index.php">Homepage</a></li>
                    <li><a href="games.php">Games</a></li>
                    <li><a href="inloggen.html">Inloggen</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer__section">
                <h3>Algemeen</h3>
                <ul>
                    <li>
                        <a href="algemene_voorwaarden.html">Algemene voorwaarden</a>
                    </li>
                    <li>
                        <a href="privacybeleid.html">Privacybeleid</a>
                    </li>
                    <li>
                        <a href="cookiebeleid.html">Cookiebeleid</a>
                    </li>
                    <li>
                        <a href="retourbeleid.html">Retourbeleid</a>
                    </li>
                </ul>
            </div>
            <div class="footer__section">
                <h3>Contact formulier</h3>
                <form>
                    <div>
                        <label for="naam">Naam</label>
                        <input id="naam" type="text">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input id="email" type="email">
                    </div>
                    <div>
                        <label for="vraag">vraag / opmerking</label>
                        <textarea id="vraag" class="bigText"></textarea>
                    </div>
                    <input class="submit" type="submit" value="Verzenden">
                </form>
            </div>
        </div>
    </footer>
</body>

</html>