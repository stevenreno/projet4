<?php
require_once('controller/frontend.php');
require_once('controller/backend.php');
$backend = new Backend();
$frontend = new Frontend();


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'submitPost') {
        if (!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['numero_chapitre'])&& !empty($_POST['en_ligne'])) {
            $backend->postUnChapitre($_POST['titre'], $_POST['contenu'],$_POST['numero_chapitre'],  $_POST['en_ligne']);
        } else {
            print'Contenu vide !';
        }
    }
    if ($_GET['action'] == 'submitComment') {
        if (!empty($_POST['auteurs']) && !empty($_POST['titre']) && !empty($_POST['contenu_commentaire'])) {
            $frontend->postUnCommentaire($_POST['auteurs'], $_POST['titre'],$_POST['contenu_commentaire']);
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
}
else
{
    $frontend->listeChapitre();
};