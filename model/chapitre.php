<?php
require_once('model/gestionChapitre.php');
require_once ('model/abstractEntity.php');

class Chapitre extends AbstractEntity{
    public $_id;
    public $_titre;
    public $_numero_chapitre;
    public $_contenu;
    public $_en_ligne;
    public $_date_creation;

    public function id() { return $this->_id; }
    public function titre() { return $this->_titre; }
    public function numero_chapitre() { return $this->_numero_chapitre; }
    public function contenu() { return $this->_contenu; }
    public function en_ligne() { return $this->_en_ligne; }
    public function date_creation() { return $this->_date_creation; }


    public function setId($id)
    {
        $this->_id = (int) $id;
    }
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }
    public function setNumeroChapitre ($numero_chapitre)
{
    $this->_numero_chapitre = $numero_chapitre;
    }
    public function setContenu ($contenu)
    {
        $this->_contenu = $contenu;
    }
    public function setEnLigne ($en_ligne)
    {
        $this->_en_ligne = $en_ligne;
    }
    public function setDateCreation ($date_creation)
    {
        $this->_date_creation = $date_creation;
    }
}
