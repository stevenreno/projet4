<?php
require_once ('model/gestionConnexion.php');
require_once ('model/abstractEntity.php');

class Connexion extends AbstractEntity{
    public $_id;
    public $pseudo;
    public $mot_de_passe;

    public function id() { return $this->_id; }
    public function pseudo() { return $this->_pseudo; }
    public function mot_de_passe() { return $this->_mot_de_passe; }

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