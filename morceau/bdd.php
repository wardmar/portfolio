<?php


class bdd
{
    private $_mysqli;
    public $_content;
    public function connect()
    {
        //try to connect to the database
        try {
            $this->_mysqli = new PDO("mysql:host=localhost;dbname=portfolio;charset=utf8", "Dev", "luwasx18500", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            //if connection fail return the error
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function info()
    {
        //put in a array all value of POST
        $this->_content = array(
            'titre' => $_POST['titre'],
            'dossier' => $_POST['titre'],
            'techno' => $_POST['techno'],
            'descript' => $_POST['description'],
            'imageP' => $_POST['image'],
            'mockup' => $_POST['mockup'],
            'pagePrin' => $_POST['pagePrin']
        );  
    }
    public function insert()
    {
        //insert to the bdd the information of the info function
        if (isset($_POST["submit"])) {
            $add = $this->_mysqli->prepare("INSERT INTO projet(projet, dossier, techno, descript, imageP, mockup, pagePrin) 
            VALUES(:titre, :dossier, :techno, :descript, :imageP, :mockup, :pagePrin)");
            $add->execute($this->_content);
        }
    }
}

//create a new object
$insert = new bdd;
?>