<?php foreach ($listeChapitre as $key => $object) {
?><div>
    <div>
        <h2>Chapitre n°<?php echo $object->_numero_chapitre;?> : <?php echo $object->_titre; ?></h2>
        <?php $contenu = substr($object->_contenu, 0,500); echo $contenu."[...]";?>
        <?php echo $object->_date_creation;?>
        <a href="index.php?action=lirePlus&amp;id=<?=$object->_id;?>">Lire plus</a>
    </div>
</div>
<?php }; ?>



