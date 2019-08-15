<?php
require_once('model/abstractManager.php');
require_once('model/chapitre.php');

class gestionChapitre extends AbstractManager {


    public function getPosts()
    {
        $db = $this->dbConnect();
        $chapitre = array();
        $req = $db->query('SELECT * from chapitre WHERE en_ligne= 1');
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $chapitre[]= new Chapitre($donnees);
        }
        return $chapitre;
    }
    public function getPost($chapitreId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * from chapitre WHERE id=?');
        $req->execute(array($chapitreId));
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $chapitre[]= new Chapitre($donnees);
        }
        return $chapitre;
    }
    public function createPost($titre, $contenu, $numero_chapitre, $en_ligne, $date_creation) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO chapitre(titre, contenu, numero_chapitre, en_ligne, date_creation) VALUES (?, ?, ?, ?,NOW())');
        $newPost = $req->execute(array($titre, $contenu, $numero_chapitre, $en_ligne, $date_creation));

        return $newPost;
    }
}