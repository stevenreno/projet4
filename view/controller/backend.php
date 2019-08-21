<?php
require_once('model/gestionChapitre.php');
require_once ('view/view.php');
//require_once('view/ecrireChapitre');

class Backend {
    public function afficherAdministration()
    {
        $gestionChapitre = new gestionChapitre();
        $chapitres = $gestionChapitre->getAllPosts();
        $gestionCommentaire = new gestionCommentaire();
        $commentaire = $gestionCommentaire->getSignalement();
        $view = new View();
        //$view->addVariable("titre",$contenu);
        $view->addVariable("listeChapitre",$chapitres);
        $view->addVariable("listeCommentaire",$commentaire);
        $view->generate('view/vueAdministration.php');
    }

    public function supprimerChapitre($id){
        $supprimerChapitre = new gestionChapitre();
        $chapitres = $supprimerChapitre->supprimerChapitre($id);
        header("Location: index.php?action=administration");
    }

    public function afficherModifierChapitre($chapitreId)
    {
        $gestionChapitre = new gestionChapitre();
        $chapitre = $gestionChapitre->getPost($chapitreId);
        $view = new View();
        $view->addVariable("chapitre",$chapitre);
        $view->generate('view/vueModifierChapitre.php');
    }

    public function modifierChapitre($titre, $contenu, $en_ligne, $numero_chapitre, $id){
        $gestionChapitre = new gestionChapitre();
        $chapitre = $gestionChapitre->modifierChapitre($titre, $contenu, $en_ligne, $numero_chapitre, $id);
        header("Location: index.php?action=administration");

    }
    public function afficherCreerChapitre(){
        $view = new View();
        $view->generate('view/vueCreerChapitre.php');
    }

    
    public function postUnChapitre($titre, $contenu, $numero_chapitre, $en_ligne)
    {
        $gestionChapitre = new gestionChapitre();
        $chapitre = $gestionChapitre->createPost($titre, $contenu, $numero_chapitre, $en_ligne);
        header("Location: index.php?action=administration");
    }
    public function supprimerCommentaire($id){
        $supprimerCommentaire = new gestionCommentaire();
        $commentaire = $supprimerCommentaire->supprimerCommentaire($id);
        header("Location: index.php?action=administration");
    }
    public function validerCommentaire($id){
        $validerCommentaire = new gestionCommentaire();
        $commentaire = $validerCommentaire->validerCommentaire($id);
        header("Location: index.php?action=administration");
    }
    public function deconnexion(){
        $_SESSION=array();
        session_destroy();
        header("Location: index.php");

    }

}
