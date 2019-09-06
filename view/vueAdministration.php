<?php
foreach ($listeChapitre as $key => $object){ ?>
    <section>
        <h2>Chapitre n°<?php echo $object->getNumeroChapitre();?> : <?php echo $object->getTitre(); ?></h2>
        <p><?php $contenu = substr($object->getContenu(), 0,500); echo $contenu."[...]";?></p>
        <a href="index.php?action=modifier&amp;id=<?=$object->getId();?>">Modifier</a>
        <a id="supprimer" href="index.php?action=supprimer&amp;id=<?=$object->getId();?>" onclick="return confirm('Voulez vous vraiment supprimer ce fabuleux chapitre ?')">Supprimer</a>
    </section>
<?php } ?>
    <a class="button" href="index.php?action=creerChapitre">Créer un article</a>
<h1>Commentaire signalé : </h1>
<div class="bubble">
<?php if (isset($listeCommentaire)){
    foreach ($listeCommentaire as $key => $object){?>
        <div class="commentaire">
            <p><?php echo $object->getContenuCommentaire();?></p>
            <a href="index.php?action=supprimerCommentaire&amp;id=<?=$object->getId()?>" onclick="return confirm('Voulez vous vraiment supprimer ce commentaire ?')">Supprimer le commentaire</a>
            <a href="index.php?action=validerCommentaire&amp;id=<?=$object->getId()?>" onclick="return confirm('Voulez vous vraiment valider ce commentaire ?')">Valider le commentaire</a>
        </div>
    <?php }} else {
    echo "<p>Aucun commentaire signalé</p>";}?>
</div>
