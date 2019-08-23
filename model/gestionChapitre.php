<?php
require_once('model/abstractManager.php');
require_once('model/chapitre.php');

class GestionChapitre extends AbstractManager {

    public function getPosts($depart,$chapitreParPage)
    {
        $db = $this->dbConnect();
        $chapitre = array();
        $req = $db->query('SELECT * from chapitre WHERE en_ligne= 1 ORDER BY id DESC LIMIT '.$depart.','.$chapitreParPage);
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
    public function createPost($titre, $contenu, $numero_chapitre, $en_ligne) {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO chapitre(titre, contenu, numero_chapitre, en_ligne, date_creation) VALUES (?, ?, ?, ?,NOW())');
        $newPost = $req->execute(array($titre, $contenu, $numero_chapitre, $en_ligne));

        return $newPost;
    }
    public function getNbChapitre()
    {
        $db = $this->dbConnect();
        $totalChapitre = $db->query('SELECT id from chapitre');
        $nombreDeChapitre = $totalChapitre->rowCount();
        return $nombreDeChapitre;
    }
    public function page($nombreDeChapitre,$chapitreParPage)
    {
        $pagesTotales = ceil($nombreDeChapitre/$chapitreParPage);
        return $pagesTotales;
    }
    public function getPageActuelle()
    {
        if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0) {
            $_GET['page'] = intval($_GET['page']);
            $pageCourante = $_GET['page'];
        } else {
            $pageCourante = 1;
        }
        return $pageCourante;
    }
    public function getAllPosts(){
        $db = $this->dbConnect();
        $chapitre = array();
        $req = $db->query('SELECT * from chapitre');
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
            $chapitre[]= new Chapitre($donnees);
        }
        return $chapitre;
    }
    public function supprimerChapitre($id){
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE from chapitre WHERE id=?;');
        $newDelete = $req->execute(array($id));
        return $newDelete;
    }
    public function modifierChapitre($titre, $contenu, $en_ligne, $numero_chapitre, $id){
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE chapitre SET titre = ?, contenu = ?, en_ligne = ?, numero_chapitre = ? WHERE id=?;');
        $newDelete = $req->execute(array($titre, $contenu, $en_ligne, $numero_chapitre, $id));
    }
}
