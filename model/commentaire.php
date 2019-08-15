<?php
require_once ('model/gestionCommentaire.php');
require_once ('model/abstractEntity.php');

class Commentaire extends AbstractEntity{
    public $_id;
    public $_titre;
    public $_auteurs;
    public $_contenu_commentaire;
    public $_signale;
    public $_id_chapitre;
    public $_date_commentaire;

    public function id() { return $this->_id; }
    public function titre() { return $this->_titre; }
    public function contenu_commentaire() { return $this->_contenu_commentaire; }
    public function signale() { return $this->_signale; }
    public function id_chapitre() { return $this->_id_chapitre; }
    public function date_commentaire() { return $this->_date_commentaire; }


    public function setId($id)
    {
        $this->_id = (int) $id;
    }
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }
    public function setContenuCommentaire ($contenu_commentaire)
    {
        $this->_contenu_commentaire = $contenu_commentaire;
    }
    public function setSignale ($signale)
    {
        $this->_signale = $signale;
    }
    public function setId_Chapitre ($id_chapitre)
    {
        $this->_id_chapitre = $id_chapitre;
    }
    public function setDate_Commentaire ($date_commentaire)
    {
        $this->_date_commentaire = $date_commentaire;
    }
}