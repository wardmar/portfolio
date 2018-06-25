<?php
require_once('morceau/bdd.php');
$connect = $insert->connect();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logoblason.png" />
    <title>Portfolio</title>
</head>
<body>
    <header>
        <div class="menu">
            <nav></nav>
        </div>
        <div class="title">
        <h1 class="welcome1">Hello I’m Alexis and this is my</h1>
        <h1 class="welcome">PORTFOLIO</h1>
        </div>
    </header>
    <main>
        <?php
            $extract = $insert->extract();
        ?>
    </main>
</body>
</html>