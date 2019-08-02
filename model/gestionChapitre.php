<?php
require_once('model/mysql.php');
class gestionChapitre extends ConnexionMySql {
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * from chapitre');

        return $req;
    }
    public function createPost() {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO chapitre(titre, contenu, numero_chapitre, en_ligne) VALUES (?, ?, ?, ?)');
        $newPost = $req->execute(array($title, $content));

        return $newPost;
    }
}