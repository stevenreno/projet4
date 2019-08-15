<?php
require_once('model/gestionChapitre.php');
//require_once('view/ecrireChapitre.php');

class Backend {
    private $titre;
    private $contenu;
    private $numero_chapitre;
    private $en_ligne;
    
    public function postUnChapitre($titre, $contenu, $numero_chapitre, $en_ligne)
    {
        $this -> titre = $titre;
        $this-> contenu = $contenu;
        $this-> numero_chapitre = $numero_chapitre;
        $this-> en_ligne=$en_ligne;
        $gestionChapitre = new gestionChapitre();
        $nouveauxChapitre = $gestionChapitre->createPost($titre, $contenu, $numero_chapitre, $en_ligne);
    }
}
