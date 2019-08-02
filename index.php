<?php
require_once('controller/frontend.php');
listeChapitre();
require_once('controller/backend.php');
if ($_GET['action'] == 'submitPost') {
    if (!empty($_POST['titre']) && !empty($_POST['numero_chapitre'])&& !empty($_POST['contenu'])&& !empty($_POST['en_ligne'])) {
        postUnChapitre($_POST['titre'], $_POST['numero_chapitre'], $_POST['contenu'], $_POST['en_ligne']);
    } else {
        throw new Exception('Contenu vide !');
    }
}