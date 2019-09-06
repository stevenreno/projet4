<?php
require_once ('model/gestionConnexion.php');
require_once ('model/abstractEntity.php');

class Connexion extends AbstractEntity{
    private $_id;
    private $pseudo;
    private $mot_de_passe;

    public function getId() { return $this->_id; }
    public function getPseudo() { return $this->_pseudo; }
    public function getMotDePasse() { return $this->_mot_de_passe; }

    public function setId($id)
    {
        $this->_id = (int) $id;
    }
    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }
    public function setMotDePasse ($mot_de_passe)
    {
        $this->_mot_de_passe = $mot_de_passe;
    }
}