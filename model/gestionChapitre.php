<?php
require_once('model/mysql.php');
class gestionChapitre extends ConnexionMySql {
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * from chapitre');

        return $req;
    }
}