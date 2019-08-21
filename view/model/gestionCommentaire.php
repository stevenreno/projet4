<?php
require_once('model/abstractManager.php');
require_once ('model/commentaire.php');
require_once ('model/chapitre.php');

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
    public function getSignalement(){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(signalement.id) AS "nombresSignalement" , contenu_commentaire, commentaire.id from signalement, commentaire WHERE signalement.id_commentaire = commentaire.id GROUP BY id_commentaire ORDER BY nombresSignalement DESC ;');
        $req->execute(array());
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
            $commentaire[] = new Commentaire($donnees);
        }
        if (isset($commentaire)) {
            return $commentaire;
        }
    }
    public function supprimerCommentaire($id){
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE from commentaire WHERE id=?;');
        $newDelete = $req->execute(array($id));
        return $newDelete;
    }
    public function validerCommentaire($id){
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE from signalement WHERE id_commentaire=?;');
        $newDelete = $req->execute(array($id));
        return $newDelete;
    }
    public function ecrireCommentaire($auteurs, $titre, $contenu_commentaire, $id_chapitre){
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO commentaire(auteurs, titre, contenu_commentaire, id_chapitre, date_commentaire)VALUES (?, ?, ?, ?,NOW())');
        $newPost = $req->execute(array($auteurs, $titre, $contenu_commentaire, $id_chapitre));
    }
}