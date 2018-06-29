<?php


class bdd
{
    public $_mysqli;
    public $_content;

    private function connect()
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
            'dossier' => $_POST['doss'],
            'techno' => $_POST['techno'],
            'descript' => $_POST['description'],
            'imageP' => $_POST['image'],
            'mockup' => $_POST['mockup'],
            'pagePrin' => $_POST['pagePrin'],
            'responsive' => $_POST['resp']
        );
    }
    public function insert()
    {
        $this->connect();
        //insert to the bdd the information of the info function
        if (isset($_POST["submit"])) {
            $add = $this->_mysqli->prepare("INSERT INTO projet(projet, dossier, techno, descript, imageP, mockup, pagePrin, respnsive) 
            VALUES(:titre, :dossier, :techno, :descript, :imageP, :mockup, :pagePrin, :respnsive)");
            $add->execute($this->_content);
        }
    }
    public function extract()
    {
        $this->connect();
        $html ='';
        $reponse = $this->_mysqli->query('SELECT * FROM projet');
        foreach ($reponse as $donnee) {
            $html .= '<div class="container">'
                . '<a href="projet/'.$donnee['dossier'].'/'.$donnee['pagePrin'].'" class="phonehid" >'
                . '<img src="projet/' . $donnee['dossier'] . '/' . $donnee['mockup'] . '" alt="Avatar" class="image">'
                . '<a class="overlay"  href="view.php?id='.$donnee['id'].'">'
                . '<div class="text" ><p id="projet-titre">' . $donnee['projet'] . '</p>'
                . '<p class="mediahid"  >' . $donnee['descript'] . '</p>'
                . '<p class="mediahid" >' . $donnee['techno'] . '</p>'
                . '</div>'
                . '</a>'
                . '</a>'
                . '</div>';
            
        }
        echo ($html);

        $reponse->closeCursor();

    }

    public function viewproj()
    {
        $this->connect();
        $sql =  'SELECT * FROM projet WHERE id LIKE '.$_GET["id"];
        $req = $this->_mysqli->query($sql);

        foreach ($req as $val) 
        {
            if($val['responsive']==NULL)
            {
                $html .= '<div class="screen-iframe">'
                .'<iframe src="projet/'.$val['dossier'].'/'.$val['pagePrin'].'" frameborder="0"></iframe>'
                .'</div>';
            }
        }
        echo($html);
        $req->closeCursor();

    } 
}

//create a new object
$insert = new bdd;
?>