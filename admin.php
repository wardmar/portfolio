<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="img/logoblason.png" />
    <title>Administration</title>
</head>
<body>
    <?php
        //include ('morceau/secur.php');
    require_once('morceau/bdd.php');
    require_once('morceau/files.php');

    ?>
    <div id="formu">
        <form action="admin.php" method="post" enctype="multipart/form-data">
            <label for="titre">Projet</label>
            <input type="text" name="titre" id="titre" placeholder="Le nom du projet" required>
            <label for="techno">Techno</label>
            <input type="text" name="techno" id="techno" placeholder="Les techno utiliser " required>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="2" rows="4" placeholder="Description du projet" required></textarea>
            <label for="dossier">Dossier .zip</label>
            <input type="file" name="dossier" id="dossier" >
            <label for="image">Image du projet *</label>
            <input type="text" name="image" id="image" placeholder="Lien vers l'image" required>
            <label for="mockup">Mockup du projet *</label>
            <input type="text" name="mockup" id="mockup" placeholder="Lien vers le mockup" required>
            <label for="pagePrin">Page principal du projet</label>
            <input type="text" name="pagePrin" id="pagePrin" placeholder="Lien vers la page principal" required>
            <p id="warning" >*les images et Mockups doivent ètre placés à la racine du dossier compressé</p>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <?php

    //connect and send to the bdd
        // $connect = $insert->connect();
        // $info = $insert->info();
        // $inserinfo = $insert->insert();
    ?>
        <div class="error">
        <?php
        $filesaving = $savezip->fileSaving();
        $fileextract = $savezip->extract();
        ?>
    </div>
</body>
</html>