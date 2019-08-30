<?php foreach ($chapitre as $key => $object) {
    ?>
    <section>
        <h1>Chapitre n°<?php echo $object->_numero_chapitre;?> : <?php echo $object->_titre; ?></h1>
        <p><?php echo $object->_contenu;?></p>
        <p><?php echo $object->_date_creation;?></p>
    </section>
    <div class="formulaire">
        <form action="index.php?action=ecrireCommentaire&amp;id=<?=$object->_id;?>" method="post">
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
    <div id="bubble">
<?php if (isset($commentaire)) {foreach ($commentaire as $key => $comment) {
    ?>
        <div class="commentaire">
            <h3><?php echo $comment->_titre;?></h3>
            <h6>de <?php echo $comment->_auteurs;?></h6>
            <p><?php echo $comment->_contenu_commentaire;?></p>
            <a href="index.php?action=signaler&amp;id_commentaire=<?=$comment->_id;?>">Signaler le commentaire</a>
        </div>
<?php }}};?>
    </div>




