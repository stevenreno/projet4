<?php
require_once('model/gestionChapitre.php');
require_once('model/gestionCommentaire.php');
require_once('view/ecrireCommentaire.php');


function listeChapitre()
{
    $gestionChapitre = new gestionChapitre();
    $chapitres = $gestionChapitre->getPosts();
    require_once('view/vueChapitre.php');
}

function listeCommentaire()
{
    $gestionCommentaire = new gestionCommentaire();
    $commentaire = $gestionCommentaire->getPosts();
    require_once('view/vueCommentaire.php');
}
function postUnCommentaire($titre, $auteurs, $contenu_commentaire)
{
    $gestionCommentaire = new gestionCommentaire();
    $nouveauxCommentaire = $gestionCommentaire->createPost($titre, $auteurs, $contenu_commentaire);//*commentaire = new commentaire..
}