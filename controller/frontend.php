<?php
require_once('model/gestionChapitre.php');
require_once('model/gestionCommentaire.php');
require_once ('model/gestionSignalement.php');
require_once ('model/gestionConnexion.php');
//require_once('view/ecrireCommentaire.php');
require_once ('model/chapitre.php');
require_once ('view/view.php');
   
class Frontend {

    public function listeChapitre($message = null){
        $gestionChapitre = new GestionChapitre();
        $nombreDeChapitre = $gestionChapitre->getNbChapitre();
        $chapitreParPage = NB_CHAPITRE_PAR_PAGES;
        $page = $gestionChapitre->page($nombreDeChapitre,$chapitreParPage);
        $pageCourante = $gestionChapitre->getPageActuelle();
        $depart = ($pageCourante-1)*$chapitreParPage;
        $chapitres = $gestionChapitre->getPosts($depart,$chapitreParPage);
        $view = new View();
        //$view->addVariable("titre",$contenu);
        $view->addVariable("message",$message);
        $view->addVariable("listeChapitre",$chapitres);
        $view->addVariable("pageCourante",$pageCourante);
        $view->addVariable("pagesTotales", $page);
        $view->generate('view/vueAccueil.php');
    }
    public function chapitreEntier($chapitreId,$message = null){
        $gestionChapitre = new GestionChapitre();
        $chapitre = $gestionChapitre->getPost($chapitreId);
        $view = new View();
        $view->addVariable("titre","titre du chapitre");
        $view->addVariable('chapitre', $chapitre);
        $gestionCommentaire = new GestionCommentaire();
        $commentaire = $gestionCommentaire->getCommentaires($chapitreId);
        $view->addVariable("commentaire", $commentaire);
        $view->addVariable("message", $message);
        $view->generate('view/vueChapitre.php');

    }

    /**
     * @param $titre
     * @param $auteurs
     * @param $contenu_commentaire
     */
    public function signalerCommentaire($commentaireId)
    {
        $gestionCommentaire = new GestionCommentaire();
        $commentaire = $gestionCommentaire->getCommentaire($commentaireId);
        $gestionSignalement = new GestionSignalement();
        $signalement = $gestionSignalement->postSignalement($commentaireId);
        $this->chapitreEntier($commentaire->getIdChapitre(),"<div id='blockMessage'><p>Le commentaire a été signalé</p></div>");

    }
    public function afficherConnexion($message = null)
    {
        $view = new View();
        $view->addVariable('message',$message);
        $view->generate('view/vueConnexion.php');
    }

    public function connexion($pseudo, $mot_de_passe)
    {
        $gestionConnexion = new GestionConnexion();
        $connexion = $gestionConnexion->connexion($pseudo);
        if (isset($connexion)){
            foreach ($connexion as $key => $object){
                $id = $object->getId();
                $pseudo = $object->getPseudo();
                $mot_de_passe = $object->getMotDePasse();
            }
            if (md5($_POST['mot_de_passe']) == $mot_de_passe)
            {
                $_SESSION['id']= $id;
                $_SESSION['pseudo']=$pseudo;
                header("Location: index.php?action=administration");
            }
        } else {
                $this->afficherConnexion("<div id='blockMessage'><p>Pseudo ou/et mot de passe incorrect</p></div>");
        }
    }
    public function ecrireCommentaire($auteurs, $titre, $contenu_commentaire, $id_chapitre){
        $gestionCommentaire = new GestionCommentaire();
        $ecrireCommentaire = $gestionCommentaire->ecrireCommentaire($auteurs, $titre, $contenu_commentaire, $id_chapitre);
        $this->chapitreEntier($id_chapitre,"<div id='blockMessage'><p>Commentaire posté</p></div>");
    }
    public function supprimerCommentaireFront($id, $chapitre_id){
        $supprimerCommentaire = new GestionCommentaire();
        $commentaire = $supprimerCommentaire->supprimerCommentaire($id);
        $this->chapitreEntier($chapitre_id,"<div id='blockMessage'><p>Commentaire supprimé</p></div>");
    }
}