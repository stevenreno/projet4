<?php
require_once('model/gestionChapitre.php');
require_once('model/gestionCommentaire.php');
require_once ('model/gestionSignalement.php');
require_once ('model/gestionConnexion.php');
//require_once('view/ecrireCommentaire.php');
require_once ('model/chapitre.php');
require_once ('view/view.php');
   
class Frontend {

    public function listeChapitre(){
        $gestionChapitre = new GestionChapitre();
        $nombreDeChapitre = $gestionChapitre->getNbChapitre();
        $chapitreParPage = NB_CHAPITRE_PAR_PAGES;
        $page = $gestionChapitre->page($nombreDeChapitre,$chapitreParPage);
        $pageCourante = $gestionChapitre->getPageActuelle();
        $depart = ($pageCourante-1)*$chapitreParPage;
        $chapitres = $gestionChapitre->getPosts($depart,$chapitreParPage);
        $view = new View();
        //$view->addVariable("titre",$contenu);
        $view->addVariable("listeChapitre",$chapitres);
        $view->addVariable("pageCourante",$pageCourante);
        $view->addVariable("pagesTotales", $page);
        $view->generate('view/vueAccueil.php');
    }
    public function chapitreEntier($chapitreId){
        $gestionChapitre = new GestionChapitre();
        $chapitre = $gestionChapitre->getPost($chapitreId);
        $view = new View();
        $view->addVariable("titre","titre du chapitre");
        $view->addVariable('chapitre', $chapitre);
        $gestionCommentaire = new GestionCommentaire();
        $commentaire = $gestionCommentaire->getCommentaires($chapitreId);
        $view->addVariable("commentaire", $commentaire);
        $view->generate('view/vueChapitre.php');

    }

    /**
     * @param $titre
     * @param $auteurs
     * @param $contenu_commentaire
     */
    public function postUnCommentaire($titre, $auteurs, $contenu_commentaire)
    {
        $gestionCommentaire = new GestionCommentaire();
        $nouveauxCommentaire = $gestionCommentaire->createPost($titre, $auteurs, $contenu_commentaire);
    }

    public function signalerCommentaire($commentaireId)
    {
        $gestionSignalement = new GestionSignalement();
        $signalement = $gestionSignalement->postSignalement($commentaireId);
    }
    public function afficherConnexion()
    {
        $view = new View();
        $view->generate('view/vueConnexion.php');
    }

    public function connexion($pseudo, $mot_de_passe)
    {
        $gestionConnexion = new GestionConnexion();
        $connexion = $gestionConnexion->connexion($pseudo);
        if (isset($connexion)){
            foreach ($connexion as $key => $object){
                $id = $object->_id;
                $pseudo = $object->_pseudo;
                $mot_de_passe = $object->_mot_de_passe;
            }
            if (md5($_POST['mot_de_passe']) == $mot_de_passe)
            {
                $_SESSION['id']= $id;
                $_SESSION['pseudo']=$pseudo;
                header("Location: index.php?action=administration");
                //echo ("redirection vers le backend");
            } else {
                echo("connexion raté");
            }
        } else {
                echo("Raté");
                header("Location: index.php?action=login");

        }
    }
    public function ecrireCommentaire($auteurs, $titre, $contenu_commentaire, $id_chapitre){
        $gestionCommentaire = new GestionCommentaire();
        $ecrireCommentaire = $gestionCommentaire->ecrireCommentaire($auteurs, $titre, $contenu_commentaire, $id_chapitre);
        header("Location: index.php?action=lirePlus&id=".$id_chapitre);
    }
}