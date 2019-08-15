<?php foreach ($chapitre as $key => $object) {
    ?><div>
    <div>
        <h2>Chapitre n°<?php echo $object->_numero_chapitre;?> : <?php echo $object->_titre; ?></h2>
        <?php echo $object->_contenu;?>
        <?php echo $object->_date_creation;?>
    </div>
    </div>
<?php if (isset($commentaire)) {foreach ($commentaire as $key => $comment) {
    ?>
    <div>
        <div>
            <h2><?php echo $comment->_contenu_commentaire;?></h2>
            <a href="index.php?action=signaler&amp;id_commentaire=<?=$comment->_id;?>">Signaler le commentaire</a>
        </div>
    </div>
<?php }}};?>




