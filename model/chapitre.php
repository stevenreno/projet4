<?php
require_once('model/gestionChapitre.php');
require_once ('model/abstractEntity.php');

class Chapitre extends AbstractEntity{
    private $_id;
    private $_titre;
    private $_numero_chapitre;
    private $_contenu;
    private $_en_ligne;
    private $_date_creation;

    public function getId() { return $this->_id; }
    public function getTitre() { return $this->_titre; }
    public function getNumeroChapitre() { return $this->_numero_chapitre; }
    public function getContenu() { return $this->_contenu; }
    public function getEnLigne() { return $this->_en_ligne; }
    public function getDateCreation() { return $this->_date_creation; }


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
