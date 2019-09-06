<?php
require_once ('model/gestionCommentaire.php');
require_once ('model/abstractEntity.php');

class Commentaire extends AbstractEntity{
    private $_id;
    private $_titre;
    private $_auteurs;
    private $_contenu_commentaire;
    private $_signale;
    private $_id_chapitre;
    private $_date_commentaire;

    public function getId() { return $this->_id; }
    public function getTitre() { return $this->_titre; }
    public function getAuteurs() {return $this->_auteurs;}
    public function getContenuCommentaire() { return $this->_contenu_commentaire; }
    public function getSignale() { return $this->_signale; }
    public function getIdChapitre() { return $this->_id_chapitre; }
    public function getDateCommentaire() { return $this->_date_commentaire; }


    public function setId($id)
    {
        $this->_id = (int) $id;
    }
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }
    public function setAuteurs($auteurs)
    {
        $this->_auteurs = $auteurs;
    }
    public function setContenuCommentaire ($contenu_commentaire)
    {
        $this->_contenu_commentaire = $contenu_commentaire;
    }
    public function setSignale ($signale)
    {
        $this->_signale = $signale;
    }
    public function setIdChapitre ($id_chapitre)
    {
        $this->_id_chapitre = $id_chapitre;
    }
    public function setDateCommentaire ($date_commentaire)
    {
        $this->_date_commentaire = $date_commentaire;
    }
}