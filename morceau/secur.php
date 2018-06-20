<?php
//allows the refresh of the page without returning the form
session_start();

if(!empty($_POST) OR !empty($_FILES))
{   
    //stack post and files in session
    $_SESSION['sauvegarde'] = $_POST ;
    $_SESSION['sauvegardeFILES'] = $_FILES ;
    //recreate the complete URL
    $fichierActuel = $_SERVER['PHP_SELF'] ;
    if(!empty($_SERVER['QUERY_STRING']))
    {
        $fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;
    }
    //redirect to the page with post and file field empty
    header('Location: ' . $fichierActuel);
    exit;
}

if(isset($_SESSION['sauvegarde']))
{
    //replacing variables in their original place
    $_POST = $_SESSION['sauvegarde'] ;
    $_FILES = $_SESSION['sauvegardeFILES'] ;
    //session variables deletions
    unset($_SESSION['sauvegarde'], $_SESSION['sauvegardeFILES']);
}

?>
