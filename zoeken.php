<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Op deze pagina kunt u zoeken naar uw favoriete star wars game">
    <title>Zoeken</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/spraak.js" defer></script>
</head>

<body>
    <header class="navigatiebar">
        <a href="index.php">
            <img src="img/LogoSWGames.webp" width="150" alt="Star Wars Games Logo">
        </a>
        <nav>
            <ul class="links">
                <li><a href="games.php#games">Games</a></li>
                <li><a href="contact.php#contact">Contact</a></li>
                <li><a href="zoeken.php">Zoeken</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="spraakContainer">
            <img src="img/zoeken.webp" width="600" alt="Star Wars Games Logo">
            <h2>Speech to Text</h2>
            <h4 id="message">Press the button below, and start speaking</h4>
            <button class="spraakButton" onclick="startRecognition()">Speech to text</button>
            <div id="result" class="hide"></div>
        </div>
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
                    <li><a href="games.php#games">Games</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="zoeken.php">Zoeken</a></li>
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
            <h3>Social Media</h3>
                <ul>
                    <li>
                        <a href="https://www.instagram.com/sniperr2d2/">Instagram</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCPv0jO_YixtmUQQsotMKGKw/videos">Youtube</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/nick-van-der-tol-3465b0220/">Linkedin</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/SniperR2D2">Twitter</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>