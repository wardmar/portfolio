<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/logoblason.png" />
    <title>Administration</title>
</head>
<body>
    <div id="formu">
        <form action="" method="post">
            <label for="titre">Projet</label>
            <input type="text" name="titre" id="titre" placeholder="Le nom du projet">
            <label for="techno">Techno</label>
            <input type="text" name="techno" id="techno" placeholder="Les techno utiliser ">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="2" rows="4" placeholder="Description du projet"></textarea>
            <label for="dossier">Dossier .zip</label>
            <input type="file" name="dossier" id="dossier">
            <label for="image">Image du projet</label>
            <input type="text" name="image" id="image" placeholder="Lien vers l'image">
            <label for="mockup">Mockup du projet</label>
            <input type="text" name="mockup" id="mockup" placeholder="Lien vers le mockup">
            <label for="pagePrin">Page principal du projet</label>
            <input type="text" name="pagePrin" id="pagePrin" placeholder="Lien vers la page principal">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>