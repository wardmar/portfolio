<?php
require_once('morceau/bdd.php');
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
    <header id="header">
        <div class="title">
        <h1 class="welcome1">Hello I’m Alexis and this is my</h1>
        <h1 class="welcome" >PORTFOLIO</h1>
        </div>
        <div class="logo">
            <img src="img/logoblason.png" alt="logo">
        </div>
    </header>
    <div class="fleche">
    <div  class="down">
        <img src="img/angle-down.svg" id="butroll" alt="button">
    </div>
    </div>
    <main id="main">
        <div class="project-flex">
            <?php
            //access to the database and show the projects
            $extract = $insert->extract();
            ?>
        </div>
    </main>
    <script src="js/jquery.js" ></script>
    <script src="js/script.js" ></script>   
</body>
</html>