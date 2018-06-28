<?php

class savefile
{

   public $_dossiercomp;
   public $_savepath = 'zipfile/';

    public function fileSaving()
    {
        //put the information of FILES in an array in $_dossiercomp 
        $this->_dossiercomp = $_FILES['file'];
        if (isset($_POST["submit"])) {
            if (move_uploaded_file(addslashes($this->_dossiercomp['tmp_name']), $this->_savepath.$this->_dossiercomp['name']))
            //the function return true if the file as move correctly
            {
                echo '<p>le fichier à correctement été enregister</p>';
            } else //else the function return false 
            {
                echo '<p>impossible de deplacer le fichier</p>';
                var_dump($this->_dossiercomp);
            }
        }

    }

    public function extract()
    {
        //if the file have a zip extension and if submit as defined
        if (isset($_POST["submit"])) {
            $zip = new ZipArchive;
            //the zip file as uncompressed to the  project dir
            if ($zip->open($this->_savepath.$this->_dossiercomp['name']) === true) {
                $zip->extractTo('projet/');
                $zip->close();
                echo("<p>le dossier a correctement été decompresser</p>");
            } 
            else 
            {
                //if the function doesnt work return a error message
                echo ("<p>impossible de decompresser le dossier</p>");
                var_dump($this->_savepath.$this->_dossiercomp['name']);
            }
        }
    }

    

    
}

$savezip = new savefile;

?>