<?php
include ("log.php");

$mysqli = new mysqli("localhost", "$coUser[user]", "$coUser[password]", "$coUser[database]");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


?>