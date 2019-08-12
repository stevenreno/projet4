<?php

class ConnexionMySql //abstractmanager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=Projet4;charset=utf8', 'root', '');
        return $db;
    }
}