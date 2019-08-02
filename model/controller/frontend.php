<?php
require_once('model/gestionChapitre.php');

function listeChapitre()
{
    $gestionChapitre = new gestionChapitre();
    $chapitres = $gestionChapitre->getPosts();
    require_once('view/vueChapitre.php');
}