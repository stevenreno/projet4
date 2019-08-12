<?php
require_once('model/manager.php');
require_once('model/chapitre.php');

class gestionChapitre extends ConnexionMySql {


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
    public function createPost($titre, $contenu, $numero_chapitre, $en_ligne) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO chapitre(titre, contenu, numero_chapitre, en_ligne) VALUES (?, ?, ?, ?)');
        $newPost = $req->execute(array($titre, $contenu, $numero_chapitre, $en_ligne));

        return $newPost;
    }
}