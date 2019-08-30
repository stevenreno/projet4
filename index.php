<?php
session_start();
require_once ('config.php');
require_once('controller/frontend.php');
require_once('controller/backend.php');
$backend = new Backend();
$frontend = new Frontend();


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'modifierChapitre') {
        if (!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['numero_chapitre'])) {
            $backend->modifierChapitre($_POST['titre'], $_POST['contenu'],  $_POST['en_ligne'],$_POST['numero_chapitre'], $_GET['id']);
        } else {
            print'Contenu vide !';
        }
    }
    if ($_GET['action'] == 'ecrireCommentaire') {
        if (!empty($_POST['auteurs']) && !empty($_POST['titre']) && !empty($_POST['contenu_commentaire'])&& !empty($_GET['id'])) {
            $frontend->ecrireCommentaire($_POST['auteurs'], $_POST['titre'],$_POST['contenu_commentaire'],$_GET['id']);
        } else {
            print'Contenu vide !';
        }
    }
    if ($_GET['action'] == 'lirePlus') {
        if (!empty($_GET['id'])) {
            $frontend->chapitreEntier($_GET['id']);
        } else {
            print 'Pas de chapitre';
        }
    }
    if ($_GET['action'] == 'signaler') {
        if (!empty($_GET['id_commentaire'])) {
            $frontend->signalerCommentaire($_GET['id_commentaire']);
        } else {
            print '';
        }
    }
    if ($_GET['action'] == 'login') {
        $frontend->afficherConnexion();
    }
    if ($_GET['action'] == 'connexion'){
        $frontend->connexion($_POST['pseudo'],$_POST['mot_de_passe']);
    }
    if ($_GET['action'] == 'administration') {
        if (isset($_SESSION['pseudo'])) {
            $backend->afficherAdministration();
        } else {
            echo 'Vous n\'êtes pas autorisé à acceder à cette page';
        }
    }
    if ($_GET['action'] == 'supprimer'){
        $backend->supprimerChapitre($_GET['id']);
    }
    if ($_GET['action'] == 'modifier'){
        $backend->afficherModifierChapitre($_GET['id']);
    }
    if ($_GET['action'] == 'creerChapitre'){
        $backend->afficherCreerChapitre();
    }
    if ($_GET['action'] == 'envoyerChapitre') {
        if (!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['numero_chapitre'])&& !empty($_POST['en_ligne'])) {
            $backend->postUnChapitre($_POST['titre'], $_POST['contenu'],$_POST['numero_chapitre'],  $_POST['en_ligne']);
        } else {
            print'Contenu vide !';
        }
    }
    if ($_GET['action'] == 'supprimerCommentaire'){
        $backend->supprimerCommentaire($_GET['id']);
    }
    if ($_GET['action'] == 'validerCommentaire'){
        $backend->validerCommentaire($_GET['id']);
    }
    if ($_GET['action'] == 'deconnexion'){
        $backend->deconnexion();
    }


}
else
{
    $frontend->listeChapitre();
};