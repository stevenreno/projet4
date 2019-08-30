<?php
$idNb=0;
foreach ($listeChapitre as $key => $object){ ?>
    <section>
        <h2>Chapitre n°<?php echo $object->_numero_chapitre;?> : <?php echo $object->_titre; ?></h2>
        <p><?php $contenu = substr($object->_contenu, 0,500); echo $contenu."[...]";?></p>
        <a href="index.php?action=modifier&amp;id=<?=$object->_id;?>">Modifier</a>
        <div id="supprimer<? $idNb ?>">Supprimer</div>
        <div id="confirmation_suppression">
            <a href="index.php?action=supprimer&amp;id=<?=$object->_id;?>">Oui</a>
            <a id="non<? $idNb++ ?>">Non</a>
        </div>
    </section>
<?php } ?>
    <a class="button" href="index.php?action=creerChapitre">Créer un article</a>
<h1>Commentaire signalé : </h1>
    <div class="commentaire">
<?php if (isset($listeCommentaire)){
    foreach ($listeCommentaire as $key => $object){?>
        <p><?php echo $object->_contenu_commentaire;?></p>
        <a href="index.php?action=supprimerCommentaire&amp;id=<?=$object->_id?>">Supprimer le commentaire</a>
        <a href="index.php?action=validerCommentaire&amp;id=<?=$object->_id?>">Valider le commentaire</a>
<?php }} else {
    echo "<p>Aucun commentaire signalé</p>";}?>
    </div>


