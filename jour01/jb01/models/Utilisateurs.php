<?php


class  Utilisateurs_model
{

class utilisateurs_model
{

    private $_bdd = "";

    public function __construct()
    {
        include '../config/db.php';
        if (empty($this->_bdd)) {
            try {
                $this->_bdd = new PDO($host, $dbname, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
    }

}

?>