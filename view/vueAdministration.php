<?php foreach ($listeChapitre as $key => $object){ ?>
<div> <h2>Chapitre n°<?php echo $object->_numero_chapitre;?> : <?php echo $object->_titre; ?></h2> </div>
<a href="index.php?action=modifier&amp;id=<?=$object->_id;?>">Modifier</a>
<a href="index.php?action=supprimer&amp;id=<?=$object->_id;?>">Supprimer</a>
<?php } ?>
<a href="index.php?action=creerChapitre">Créer un article</a>
