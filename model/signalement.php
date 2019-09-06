<?php
require_once('model/gestionSignalement.php');
require_once ('model/abstractEntity.php');

class Signalement extends AbstractEntity{
    public $_id;
    public $_id_commentaire;
    public $_date_signalement;

    public function getId() { return $this->_id; }
    public function getIdCommentaire() { return $this->_id_commentaire; }
    public function getDateSignalement() { return $this->_date_signalement; }


    public function setId($id)
    {
        $this->_id = (int) $id;
    }
    public function setIdCommentaire($id_commentaire)
    {
        $this->_id_commentaire = $id_commentaire;
    }
    public function setDateSignalement ($date_signalement)
    {
        $this->_date_signalement = $date_signalement;
    }
}