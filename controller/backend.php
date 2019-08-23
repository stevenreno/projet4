<?php
require_once('model/gestionChapitre.php');
require_once ('view/view.php');
//require_once('view/ecrireChapitre');

class Backend {
    public function afficherAdministration()
    {
        $gestionChapitre = new GestionChapitre();
        $chapitres = $gestionChapitre->getAllPosts();
        $gestionCommentaire = new GestionCommentaire();
        $commentaire = $gestionCommentaire->getSignalement();
        $view = new View();
        //$view->addVariable("titre",$contenu);
        $view->addVariable("listeChapitre",$chapitres);
        $view->addVariable("listeCommentaire",$commentaire);
        $view->generate('view/vueAdministration.php');
    }

    public function supprimerChapitre($id){
        $supprimerChapitre = new GestionChapitre();
        $chapitres = $supprimerChapitre->supprimerChapitre($id);
        header("Location: index.php?action=administration");
    }

    public function afficherModifierChapitre($chapitreId)
    {
        $gestionChapitre = new GestionChapitre();
        $chapitre = $gestionChapitre->getPost($chapitreId);
        $view = new View();
        $view->addVariable("chapitre",$chapitre);
        $view->generate('view/vueModifierChapitre.php');
    }

    public function modifierChapitre($titre, $contenu, $en_ligne, $numero_chapitre, $id){
        $gestionChapitre = new GestionChapitre();
        $chapitre = $gestionChapitre->modifierChapitre($titre, $contenu, $en_ligne, $numero_chapitre, $id);
        header("Location: index.php?action=administration");

    }
    public function afficherCreerChapitre(){
        $view = new View();
        $view->generate('view/vueCreerChapitre.php');
    }

    
    public function postUnChapitre($titre, $contenu, $numero_chapitre, $en_ligne)
    {
        $gestionChapitre = new GestionChapitre();
        $chapitre = $gestionChapitre->createPost($titre, $contenu, $numero_chapitre, $en_ligne);
        header("Location: index.php?action=administration");
    }
    public function supprimerCommentaire($id){
        $supprimerCommentaire = new GestionCommentaire();
        $commentaire = $supprimerCommentaire->supprimerCommentaire($id);
        header("Location: index.php?action=administration");
    }
    public function validerCommentaire($id){
        $validerCommentaire = new GestionCommentaire();
        $commentaire = $validerCommentaire->validerCommentaire($id);
        header("Location: index.php?action=administration");
    }
    public function deconnexion(){
        $_SESSION=array();
        session_destroy();
        header("Location: index.php");

    }

}
