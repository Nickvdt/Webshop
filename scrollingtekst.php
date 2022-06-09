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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/scrollingstyle.css">
    <title>Document</title>
    <script>
        setTimeout(function () {
            window.location.href = 'game.php?id=<?php echo $games['id'] ?>';
        }, 20000);
    </script>
</head>

<body>

    <div class="wrapper">
        <div class="scroll-text">
            <h1><?php echo $games['titel'];?></h1>
            <h2>Over dit Spel</h2>
            <p>
                <?php echo $games['beschrijving'];?> 
            </p>
            <h2>SYSTEEMEISEN</h2>
            <p>
                <?php echo $games['systeemeisen'];?>
            </p>
        </div>
    </div>
</body>

</html>