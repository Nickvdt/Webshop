<?php
require 'functions.php';
$connection = dbConnect();

// Checken of id wel is meegestuurd in de URL
if( !isset($_GET['id']) ){
    echo "De ID is niet gezet";
    exit;
}

// checken of het wel een getal (integer) is
$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "dit is geen getal (integer)";
    exit;
}

$statement = $connection ->prepare('SELECT * FROM `games` WHERE id=?');
$params = [$id];
$statement->execute($params);
$games = $statement->fetch(PDO::FETCH_ASSOC)
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamepagina</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/slideshow.js" defer></script>
    <script src="js/reviews.js" defer></script>
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
                <img src="img/games/logos/<?php echo $games['logo']?>" alt="Logo van Battlefront 2" class="image2"> 
            </div>
        </section>

        <section class="game">
            <ul class="gamelijst">
                <li class="gamelijstslider">
                    <div class="slideshow-container">

                        <!-- SLIDESHOW -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="img/gameplay/<?php echo $games['gameplayfoto']?>_gameplay1.webp" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="img/gameplay/<?php echo $games['gameplayfoto']?>_gameplay2.webp" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="img/gameplay/<?php echo $games['gameplayfoto']?>_gameplay3.webp" style="width:100%">
                        </div>

                        <!-- Volgende en vorige knoppen -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </li>
                <li class="block">
                    <h2>
                        <?php echo $games['titel'];?>
                        <a href="scrollingtekst.php?id=<?php echo $games['id'] ?>">🌌</a>
                    </h2>
                    <h5>
                        OVER DIT SPEL
                    </h5>
                    <p>
                        <?php echo $games['beschrijving'];?> 
                    </p>
                    <h5>
                        SYSTEEMEISEN
                    </h5>
                    <p>
                        <?php echo $games['systeemeisen'];?>
                    </p>
                    <span>
                        €<?php echo $games['prijs'];?>
                    </span>
                    <button class="glow-on-hover" type="button">Kopen</button>
                    
                </li>
        </section>
        <section class="section section--third">
            <button class="arrow"><</button>
            <ul class="reviews">
                <li class="review">
                    <figure class="quote">
                        &#10077
                    </figure>
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p><?php echo $games['review1'];?></p>
                </li>
                <li class="review">
                    <figure class="quote">
                        &#10077
                    </figure>
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p><?php echo $games['review2'];?></p>
                </li>
                <li class="review">
                    <figure class="quote">
                        &#10077
                    </figure>
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p><?php echo $games['review3'];?></p>
                </li>
                <li class="review">
                    <figure class="quote">
                        &#10077
                    </figure>
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p><?php echo $games['review4'];?></p>
                </li>
                <li class="review">
                    <figure class="quote">
                        &#10077;
                    </figure>
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p><?php echo $games['review5'];?></p>
                </li>
                <li class="review">
                    <figure class="quote">
                        &#10077
                    </figure>
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p><?php echo $games['review6'];?></p>
                </li>
            </ul>
            <button class="arrow">></button>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer__section">
                <h3>Locatie</h3>
                <ul>
                    <li>Contactweg 36</li>
                    <li>1014 AN Amsterdam</li>
                    <li><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9739.458184559553!2d4.8560905!3d52.3910058!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dffd675d740eddb!2sMediacollege%20Amsterdam!5e0!3m2!1snl!2snl!4v1652688761811!5m2!1snl!2snl" width="350" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
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