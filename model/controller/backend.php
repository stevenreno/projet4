<?php
require_once('model/gestionChapitre.php');
require_once('view/ecrireChapitre.php');


function postUnChapitre($titre, $contenu, $numero_chapitre, $en_ligne)
{
    $gestionChapitre = new gestionChapitre();
    $nouveauxChapitre = $gestionChapitre->createPost($titre, $contenu, $numero_chapitre, $en_ligne);
}