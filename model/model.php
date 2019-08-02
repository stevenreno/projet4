<?php
$mysqli = new mysqli('localhost', 'root', '', 'Projet4');
        $mysqli->set_charset("utf8");
        $requete = 'SELECT * FROM chapitre';
        $results = $mysqli->query($requete);
