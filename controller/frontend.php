<?php
require_once('model/gestionChapitre.php');
require_once('model/gestionCommentaire.php');
require_once('view/ecrireCommentaire.php');
require_once ('model/chapitre.php');
require_once ('view/view.php');

   
class Frontend {

    public function listeChapitre(){
        $gestionChapitre = new gestionChapitre();
        $chapitres = $gestionChapitre->getPosts();
        //$titre = "bonjour";
        //require_once('view/vueChapitre.php');
        $view = new View();
        $view->addVariable("titre","bonjour");
        $view->addVariable("listeChapitre",$chapitres);
        $view->generate('view/vueChapitre.php');

    }
    public function listeCommentaire()
    {
        $gestionCommentaire = new gestionCommentaire();
        $commentaire = $gestionCommentaire->getPosts();
        require_once('view/vueCommentaire.php');
    }
    public function postUnCommentaire($titre, $auteurs, $contenu_commentaire)
    {
        $gestionCommentaire = new gestionCommentaire();
        $nouveauxCommentaire = $gestionCommentaire->createPost($titre, $auteurs, $contenu_commentaire);//*commentaire = new commentaire..
    }
}