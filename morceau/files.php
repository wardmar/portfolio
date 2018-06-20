<?php

class savefile
{

   public $_dossiercomp;
   public $_savepath = 'zipfile/';

    public function fileSaving()
    {

        $this->_dossiercomp = $_FILES['dossier'];
        if (isset($_POST["submit"])) {
            if (move_uploaded_file(addslashes($this->_dossiercomp['tmp_name']), $this->_savepath.basename($this->_dossiercomp['name']))) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
                echo '<p>le fichier à correctement été enregister</p>';
            } else //Sinon (la fonction renvoie FALSE).
            {
                echo '<p>impossible de deplacer le fichier</p>';
            }
        }

    }

    public function extract()
    {
        if (isset($_POST["submit"])) {
            $zip = new ZipArchive;

            if ($zip->open($this->_savepath.$this->_dossiercomp['name']) === true) {
                $zip->extractTo('projet/');
                $zip->close();
                echo("<p>le dossier a correctement été decompresser</p>");
            } else {
                echo ("<p>impossible de decompresser le dossier</p>");
                var_dump($this->_savepath.$this->_dossiercomp['name']);
            }
        }
    }

    

    
}

$savezip = new savefile;

?>