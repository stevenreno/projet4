<?php
require_once('model/mysql.php');
class gestionCommentaire extends ConnexionMySql {
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * from commentaire');

        return $req;
    }
    public function createPost($auteurs, $titre, $contenu_commentaire) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO commentaire(auteurs, titre, contenu_commentaire) VALUES (?, ?, ?)');
        $newPost = $req->execute(array($auteurs, $titre, $contenu_commentaire));

        return $newPost;
    }
}