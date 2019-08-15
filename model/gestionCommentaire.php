<?php
require_once('model/abstractManager.php');
require_once ('model/commentaire.php');
class gestionCommentaire extends AbstractManager {

    public function getCommentaires($chapitreId){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * from commentaire WHERE id_chapitre=?');
        $req->execute(array($chapitreId));
            while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
                $commentaire[] = new Commentaire($donnees);
            }
            if (isset($commentaire)) {
                return $commentaire;
            }
    }

}