<?php
require_once('model/abstractManager.php');
require_once ('model/signalement.php');

class GestionSignalement extends AbstractManager
{
    public function getSignalement($chapitreId,$commentaireId){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * from signalement WHERE id_chapitre=?');
    }

    public function postSignalement($commentaireId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO signalement(id_commentaire, date_signalement) VALUES (?,NOW())');
        $req->execute(array($commentaireId));
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
            $signalement[] = new Signalement($donnees);
        }
        if (isset($signalement)) {
            return $signalement;
        }
    }
}
