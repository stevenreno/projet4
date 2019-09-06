<?php
require_once('model/gestionChapitre.php');
require_once ('view/view.php');
//require_once('view/ecrireChapitre');

class Backend {
    public function afficherAdministration($message = null)
    {
        $gestionChapitre = new GestionChapitre();
        $chapitres = $gestionChapitre->getAllPosts();
        $gestionCommentaire = new GestionCommentaire();
        $commentaire = $gestionCommentaire->getSignalement();
        $view = new View();
        //$view->addVariable("titre",$contenu);
        $view->addVariable("listeChapitre",$chapitres);
        $view->addVariable("listeCommentaire",$commentaire);
        $view->addVariable("message",$message);
        $view->generate('view/vueAdministration.php');
    }

    public function supprimerChapitre($id){
        $supprimerChapitre = new GestionChapitre();
        $chapitres = $supprimerChapitre->supprimerChapitre($id);
        $this->afficherAdministration("<div id='blockMessage'><p>Chapitre supprimé</p></div>");
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
        $this->afficherAdministration("<div id='blockMessage'><p>Chapitre modifié</p></div>");

    }
    public function afficherCreerChapitre(){
        $view = new View();
        $view->generate('view/vueCreerChapitre.php');
    }

    
    public function postUnChapitre($titre, $contenu, $numero_chapitre, $en_ligne)
    {
        $gestionChapitre = new GestionChapitre();
        $chapitre = $gestionChapitre->createPost($titre, $contenu, $numero_chapitre, $en_ligne);
        $this->afficherAdministration("<div id='blockMessage'><p>Chapitre ajouté</p></div>");
    }
    public function supprimerCommentaire($id){
        $supprimerCommentaire = new GestionCommentaire();
        $commentaire = $supprimerCommentaire->supprimerCommentaire($id);
        $this->afficherAdministration("<div id='blockMessage'><p>Commentaire supprimé</p></div>");
    }
    public function validerCommentaire($id){
        $validerCommentaire = new GestionCommentaire();
        $commentaire = $validerCommentaire->validerCommentaire($id);
        $this->afficherAdministration("<div id='blockMessage'><p>Commentaire validé</p></div>");
    }
    public function deconnexion(){
        $_SESSION=array();
        session_destroy();
        header("Location: index.php");
    }

}
