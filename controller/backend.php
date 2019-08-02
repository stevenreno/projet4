<?php
require_once('model/gestionChapitre.php');

function postUnChapitre()
{
    $gestionChapitre = new gestionChapitre();
    $nouveauxChapitre = $gestionChapitre->createPost();
    require_once('view/ecrireChapitre.php');
}