 <?php echo $message; ?>
<section>
    <h1>Chapitre n°<?php echo $chapitre->getNumeroChapitre();?> : <?php echo $chapitre->getTitre(); ?></h1>
    <p><?php echo $chapitre->getContenu();?></p>
    <p><?php echo $chapitre->getDateCreation();?></p>
</section>
<div class="formulaire">
    <form action="index.php?action=ecrireCommentaire&amp;id=<?=$chapitre->getId();?>" method="post">
        <div class="post_commentaire">
            <label for="auteur">Auteur :</label>
            <input type="text" id="auteur" name="auteurs">
        </div>
        <div class="post_commentaire">
            <label for="Titre">Titre : </label>
            <input type="text" id="titre" name="titre">
        </div>
        <div class="post_commentaire">
            <label for="texte">Commentaire :</label>
            <textarea id="texte" name="contenu_commentaire"></textarea>
        </div>
        <div class="post_commentaire">
            <button type="submit">Envoyer le commentaire</button>
        </div>
    </form>
</div>
 <div class="bubble">
    <?php if (isset($commentaire)) {
        foreach ($commentaire as $key => $comment) { ?>
            <div class="commentaire">
                <h3><?php echo $comment->getTitre();?></h3>
                <h6>de <?php echo $comment->getAuteurs();?></h6>
                <p><?php echo $comment->getContenuCommentaire();?></p>
                <?php if (isset($_SESSION['pseudo'])) {
                    ?><a href="index.php?action=supprimerCommentaireFront&amp;id=<?=$comment->getId()?>&amp;id_chapitre=<?=$comment->getIdChapitre()?>" onclick="return confirm('Voulez vous vraiment supprimer ce commentaire ?')">Supprimer le commentaire</a>
                    <?php
                    } else { ?>
                        <a href="index.php?action=signaler&amp;id_commentaire=<?=$comment->getId();?>">Signaler le commentaire</a>
                    <?php } ?>
            </div>
    <?php }};?>
 </div>




