<?php foreach ($listeChapitre as $key => $object){ ?>
<div> <h2>Chapitre n°<?php echo $object->_numero_chapitre;?> : <?php echo $object->_titre; ?></h2> </div>
<a href="index.php?action=modifier&amp;id=<?=$object->_id;?>">Modifier</a>
<a href="index.php?action=supprimer&amp;id=<?=$object->_id;?>">Supprimer</a>
<?php } ?>
<a href="index.php?action=creerChapitre">Créer un article</a>
<div>
<?php if (isset($listeCommentaire)){
    foreach ($listeCommentaire as $key => $object){
    echo $object->_contenu_commentaire;?>
    <a href="index.php?action=supprimerCommentaire&amp;id=<?=$object->_id?>">Supprimer le commentaire</a>
    <a href="index.php?action=validerCommentaire&amp;id=<?=$object->_id?>">Valider le commentaire</a>
<?php }} else {
    echo "Aucun commentaire signalé";}?>
</div>


