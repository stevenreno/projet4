<?php
require_once('model/mysql.php');
class gestionChapitre extends ConnexionMySql {
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * from chapitre WHERE en_ligne= 1');

        return $req;
    }
    public function createPost($titre, $contenu, $numero_chapitre, $en_ligne) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO chapitre(titre, contenu, numero_chapitre, en_ligne) VALUES (?, ?, ?, ?)');
        $newPost = $req->execute(array($titre, $contenu, $numero_chapitre, $en_ligne));

        return $newPost;
    }
}