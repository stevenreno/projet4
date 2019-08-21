<?php
require_once('model/abstractManager.php');
require_once ('model/connexion.php');

class GestionConnexion extends AbstractManager {

    public function connexion($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * from identifiant WHERE pseudo = ?');
        $req->execute(array($pseudo));
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
            $connexion[] = new Connexion($donnees);
        }
        if (isset($connexion)) {
            return $connexion;
        }
    }
}